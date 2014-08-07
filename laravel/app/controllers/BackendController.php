<?php

class BackendController extends BaseController{
	
	public function __construct(){
		$this->beforeFilter('auth', array());
	}

	public function overview(){
        return Redirect::to('backend/home');
	}

    public function home(){
        //Render the landing screen
        $user = Sentry::getUser();
        $airlines = Airline::all();
        $participated = array();
        $count = 0;
        $worlds = World::all();
        //
        foreach($airlines as $a){
            if($a->ceo == $user->id){
                array_push($participated, $a->world_id);
            }
        }
        //How many participated in
        foreach($participated as $p){
            $count++;
        }
        $full = 0;
        //All full worlds
        foreach($worlds as $w){
            if($w->number_users == $w->cap){
                $full++;
            }
        }

        return View::make('backend.home')->with('participated', $participated)->with('count', $count)->with('worlds', $worlds)->with('full', $full);
    }

	private function ownsAirline($user){
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        //Check if the user owns the airline-- authentication method
		$active = $user->active_airline;
		$airlines = $user->hasMany('Airline', 'ceo');
		if($airlines == null){
			return Redirect::to('backend/home');
		}
		foreach($airlines as $a){
			if($a->id == $active){
				return true;
			}
		}
		return false;
	}

	public function aircraft(){
		return Redirect::to('/backend/aircraft/1');
    }

    public function aircraftUpdate(){
        return View::make('backend.aircraft');
    }

    public function aircraftList(){
    	return View::make('backend.aircraft_list');
    }

    public function aircraftDetails($id){
        //Get details for given aircraft type
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
    	if($id==null){
    		return Redirect::to('/backend/aircraft/1');
    	}

    	$aircraft = AircraftType::find($id);
        $list = $this->allTypes();
    	return View::make('backend.aircraft')->with('aircraft', $aircraft)->with('types', $list);
    }

    public function aircraftDetailsUpdate($id){
        //Update the aircraft type
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        if($id==null){
            return Redirect::to('/backend/aircraft/1');
        }
        if(Input::has('submit')){
            $type = Input::get('type');
            return Redirect::to('/backend/new_aircraft/'.AircraftType::find($type + 1)->id);
        }

        $aircraft = AircraftType::find($id);
        $list = $this->allTypes();
        return View::make('backend.aircraft')->with('aircraft', $aircraft)->with('types', $list);
    }



    public function myFleet(){
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        //List all the planes in the fleet
    	$airline = Airline::find(Sentry::getUser()->active_airline);
    	$fleet = array();
    	$count = 0;
    	$airplanes = Airplane::all();
    	$types = AircraftType::all();
    	foreach($airplanes as $plane){
    		if($plane->owner == $airline->id){
    			array_push($fleet, $plane);
    		}
    	}
    	return View::make('backend.my_fleet')->with('airline', $airline)->with('fleet', $fleet)->with('types', $types);
    }

    public function airplaneDetails($id){
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
    	$airplane = Airplane::find($id);

    	return View::make('backend.airplane')->with('airplane', $airplane);
    }	

    public function usedAircraft(){
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        //Render list of used aircraft
        $all = Airplane::all();
        $planes = array();
        foreach($all as $a){
            if($a->for_sale && $a->world_id == Airline::find(Sentry::getUser()->active_airline)->world_id){
                array_push($planes, $a);
            }
        }
        $types = AircraftType::all();
        return View::make('backend.used_aircraft')->with('planes', $planes)->with('types', $types);
    }

    public function airplaneRedirect(){
    	return Redirect::to('/backend/airplane/1');
    }

    public function newAircraftRedirect(){
        return Redirect::to('/backend/new_aircraft/1');
    }
    public function newAircraft($id){
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        //Render new aircraft view
    	$types = AircraftType::all();
        $type = AircraftType::find($id);
    	$list = $this->allTypes();
    	return View::make('backend.new_aircraft')->with('types', $list)->with('aircraft', $type);
    }

    public function newAircraftUpdateRedirect(){
        return Redirect::to('/backend/airplane/1');
    }

    private function allTypes(){
        //List all aircraft types
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        //returns array of all types
        $types = AircraftType::all();
        $list = array();
        foreach($types as $t){
            array_push($list, $t->name);
        }
        return $list; 
    }

    public function newAircraftUpdate($id){
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        //Update the new aircraft view, usually involves a purchase
        $user = Sentry::getUser();
        $airline = Airline::find($user->active_airline);
        //Update the view
        if(Input::has('submit')){
            $type = Input::get('type');
            return Redirect::to('/backend/new_aircraft/'.AircraftType::find($type + 1)->id);
        }
        //
        if(Input::has('buy')){
            $amount = Input::get('number');
            $type = AircraftType::find($id);
            if(!($airline->profits > $amount * $type->price)){
                return Redirect::to('backend/new_aircraft/1');
            }
            for($i=0; $i < $amount; $i++){
                $this->makeAirplane($type->id, $airline);
                $airline->profits -= $type->price;
                $airline->costs += $type->price;
            }
        $airline->save();
        }

        return Redirect::to('/backend/my_fleet/');
    }   

    public function makeAirplane($type, Airline $owner){
        //Generate an airplane from parameters and save
        $a = new Airplane();
        $a->type = $type;
        $a->world_id = $owner->world_id;
        $a->owner = $owner->id;
        $a->age = 0;
        $a->engine = 1;
        $a->a_check = 0;
        $a->b_check = 0;
        $a->c_check = 0;
        $a->hours = 0;
        $a->location = $owner->headquarters;
        $a->cycles = 0;
        $a->hours_available = 140;
        $a->save();
        $a->fin = $a->id;
        $registration = 'N'.rand(0,9).rand(0,9).rand(0,9).chr(rand(0,25) + 65).chr(rand(0,25) + 65);
        $a->registration = $registration;
        $a->save();
    }

    public function corporateRedirect(){
        //if not ID is passed, redirect to constant
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        return Redirect::to('/backend/corporate/'.Sentry::getUser()->active_airline);
    }

    public function corporate($id){
        //Make the view with that airline
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        return View::make('backend.corporate')->with('airline', Airline::find(Sentry::getUser()->active_airline));
    }

    public function joinWorld($id){
        //join that world
        $user = Sentry::getUser();
        $apts = World::find($id)->hasMany('Airport')->get();
        $airports = array();
        foreach($apts as $a){
            $str = $a->icao.":".$a->name;
            array_push($airports, $str);
        }
        return View::make('backend.join_world')->with('world', World::find($id))->with('user', $user)->with('airports', $airports);
    }

    public function joinWorldSubmit($id){

        //process that input to join a world
        $input = Input::except('_token');
        $validator = Validator::make(
            array(
                'name' => $input['name'],
                'iata' => $input['iata'],
                'icao' => $input['icao'] 
            ),
            array(
                'name' => 'required|unique:airlines',
                'icao' => 'required|unique:airlines|min:3|max:3',
                'iata' => 'required|unique:airlines|min:2|max:2'
            )
        );
        if($validator->fails()){
            return Redirect::to('backend/join_world/'.$id);
        }
        print_r($input['headquarters']);
        $airline = new Airline();
        $airline->name = $input['name'];
        $airline->iata = $input['iata'];
        $airline->icao = $input['icao'];
        $airline->ceo = Sentry::getUser()->id;
        $airline->country = 1;
        $airline->costs = 0;
        $airline->earnings = 100000000;
        $airline->profits = 100000000;
        $airline->flight_attendant_pay = 50000;
        $airline->pilot_pay = 50000;
        $airline->mechanic_pay = 50000;
        $airline->reputation = 0;
        $airline->headquarters = $input['headquarters'] +1;
        $airline->world_id = $id;
        $airline->save();
        $airline->hubs()->attach(Airport::find($input['headquarters']+1)->id);
        $airline->save();
        $user = Sentry::getUser();
        $user->active_airline = $airline->id;
        $user->save();
        return Redirect::to('/backend/corporate');
    }

    public function usedAircraftUpdate(){
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        //Get all the input
        $list = Input::except('_token');
        $toBuy = array();
        //total cost of the purchase
        $cost = 0;
        //add the airplanes to the list and add the price
        foreach($list as $i){
                $airplane = Airplane::find($i);
                if($airplane->for_sale){
                    array_push($toBuy, $airplane);
                    $cost += $airplane->value(AircraftType::find($airplane->type), $airplane->cycles);
                }
        }
        //Active airline
        $airline = Airline::find(Sentry::getUser()->active_airline);
        //Make sure the airline has enough $$$
        if($airline->profits >= $cost && count($toBuy) > 0){
            //Do the money stuff
            $airline->costs += $cost;
            $airline->profits -= $cost;
            $flights = Flight::all();
            //Bill the owner, reset the flights, and owner
            foreach($toBuy as $plane){
                $t = AircraftType::find($plane->type);
                $original = Airline::find($plane->owner);
                $original->profits += $plane->value($t, $plane->cycles);
                $original->earnings += $plane->value($t, $plane->cycles);
                $original->save(); 
                foreach($flights as $f){
                    if($f->airplane_id == $plane->id){
                        $f->forceDelete();
                    }
                }
                $plane->for_sale = 0;
                $plane->owner = $airline->id;
                $plane->save();
            }
            $airline->save();

            return Redirect::to('/backend/my_fleet');
        }else{
            return Redirect::to('/backend/used_aircraft');
        }
    }

    public function world(){
        return Redirect::to('/backend/corporate');
    }

    public function routes(){
        //Generate a route map
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        $airline = Sentry::getUser()->active_airline;
        $rts = Rte::where('airline', $airline)->get();
        $airports = Airport::all();
        return View::make('backend.routes')->with('routes', $rts)->with('airports', $airports)->with('airline', Airline::find($airline));
    }

    public function createRoute(){
        $apts = Airport::where('world_id', '=', Airline::find(Sentry::getUser()->active_airline)->world_id)->get();
        return View::make('backend.create_route')->with('airports', $apts);
    }

    public function researchRoute(){
        return Redirect::to('/backend/routes');
    }

    public function editRoutes(){
        return Redirect::to('/backend/routes');
    }

    public function editRoute($id){
        return Redirect::to('/backend/routes');        
    }

    public function editRouteUpdate($id){
        return Redirect::to('/backend/routes');    
    }

    public function airports(){
        //Render a list of all the airports
        $airports = Airport::all();
        $worldId = Airline::find(Sentry::getUser()->active_airline)->world_id;
        $list = array();
        foreach($airports as $a){
            if($a->world_id == $worldId){
                array_push($list, $a);
            }
        }
        return View::make('backend.airports')->with('airports', $list);
    }

    public function gates($id){
        $apt = Airport::find($id);
        $gates = $apt->hasMany('Gate', 'airport')->get();
        $user = Sentry::getUser()->active_airline;
        $owned = array();
        foreach($gates as $g){
            if($g->owner == $user){
                array_push($owned, $g);
            }
        }
        return View::make('backend.gate')->with('apt', $apt)->with('owned', $owned);
    }

    public function gateRedirect(){
        return Redirect::to('/backend/gates/1');
    }

    public function gatesUpdate($id){
        //Get the input, the variables required to run the method
        $input = Input::except('_token');
        $airport = Airport::find($id);
        $gates = $airport->hasMany('Gate', 'airport')->get();
        $user = Sentry::getUser()->active_airline;
        $airline = Airline::find($user);
        $owned = array();
        //array of slots that the airline owns
        foreach($gates as $s){
            if($s->owner == $user){
                array_push($owned, $s);
            }
        }
        //Delete/sell the required slots
        for($i = 0; $i < $input['sell_amount']; $i++){
            if(count($owned) > 0){
                $owned[0]->forceDelete();
                $airline->costs -= 8000;
                $airline->profits += 8000;
                $airline->save();
            }else{
                break;
            }
        }
        //If the airline has money, create a slot
        for($i = 0; $i < $input['buy_amount']; $i++){
            if($this->hasGates($airport))
            $airline->costs += 8000;
            $airline->profits -= 8000;
            $s = new Gate();
            $s->airport = $airport->id;
            $s->owner = $airline->id;
            $s->world_id = $airline->world_id;
            $s->number = chr(65+ rand(0,25)).rand(0,9);
            $s->save();
            $airline->save();
        }

        return Redirect::to('/backend/gates/'.$id);

    }

    public function slots($id){
        $apt = Airport::find($id);
        if($apt->slot_controlled){
            $slots = $apt->hasMany('Slot', 'airport')->get();
            $user = Sentry::getUser()->active_airline;
            $owned = array();
            foreach($slots as $s){
                if($s->owner == $user){
                    array_push($owned, $s);
                }
            }
            return View::make('backend.slots')->with('controlled', $apt->slot_controlled)->with('apt', $apt)->with('owned', $owned);
        }else{
            return View::make('backend.slots')->with('controlled', false)->with('apt', $apt);
        }
    }

    public function slotsRedirect(){
        return Redirect::to('/backend/slots/1');
    }
    private function hasAirline(){
        $airline = Sentry::getUser()->active_airline;
        if($airline != 0){
            return true;
        }else{
            return false;
        }
    }
    public function enterWorld($id){

        //Set the active airline to the one the user owns in this world
        $user = Sentry::getUser();
        $airlines = Airline::where('ceo', '=', $user->id)->get();
        $k = 1;
        foreach($airlines as $a){
            if($a->world_id == $id){
                $user->active_airline = $a->id;
                $k = $a->id;
                $user->save();
            }
        }
        return Redirect::to('backend/corporate/'.$k);
    }

    public function getAirport($id){
        $a = Airport::find($id);

        return View::make('backend.airport')->with('airport', $a);

    }

    public function listGates(){
        //list all the owned gates
        if(!$this->hasAirline()){
            return Redirect::to('/backend/home');
        }
        $airline = Airline::find(Sentry::getUser()->active_airline);
        $gates = $airline->gates();
        return View::make('backend.gates')->with('gates', $gates);
    }

    public function slotsUpdate($id){
        //Get the input, the variables required to run the method
        $input = Input::except('_token');
        $airport = Airport::find($id);
        $slots = $airport->hasMany('Slot', 'airport')->get();
        $user = Sentry::getUser()->active_airline;
        $airline = Airline::find($user);
        $owned = array();
        //array of slots that the airline owns
        foreach($slots as $s){
            if($s->owner == $user){
                    array_push($owned, $s);
            }
        }
        //Delete/sell the required slots
        for($i = 0; $i < $input['sell_amount']; $i++){
            if(count($owned) > 0){
                $owned[0]->forceDelete();
                $airline->costs -= 8000;
                $airline->profits += 8000;
                $airline->save();
            }else{
                break;
            }
        }
        //If the airline has money, create a slot
        for($i = 0; $i < $input['buy_amount']; $i++){
            if($this->hasSlots($airport))
            $airline->costs += 8000;
            $airline->profits -= 8000;
            $s = new Slot();
            $s->airport = $airport->id;
            $s->owner = $airline->id;
            $s->world_id = $airline->world_id;
            $s->save();
            $airline->save();
        }

        return Redirect::to('/backend/slots/'.$id);

    }

    public function hasSlots($airport){
        return (($airport->max_flights_per_hour * 24) - count($airport->hasMany('Slot', 'airport')->get())) > 0;
    }

    public function hasGates($airport){
        return (($airport->gates) - count($airport->hasMany('Gate', 'airport')->get())) > 0;
    }
}

?>