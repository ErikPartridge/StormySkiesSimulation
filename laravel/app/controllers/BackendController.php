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
    	if($id==null){
    		return Redirect::to('/backend/aircraft/1');
    	}

    	$aircraft = AircraftType::find($id);
    	return View::make('backend.aircraft')->with('aircraft', $aircraft);
    }



    public function myFleet(){
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
    	$airplane = Airplane::find($id);

    	return View::make('backend.airplane')->with('airplane', $airplane);
    }	

    public function usedAircraft(){
        //Render list of used aircraft
        $all = Airplane::all();
        $planes = array();
        foreach($all as $a){
            if($a->for_sale && $a->world_id == Sentry::getUser()->active_airline){
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
        //returns array of all types
        $types = AircraftType::all();
        $list = array();
        foreach($types as $t){
            array_push($list, $t->name);
        }
        return $list; 
    }

    public function newAircraftUpdate($id){
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
        $a->save();
        $a->fin = $a->id;
        $registration = 'N'.rand(0,9).rand(0,9).rand(0,9).chr(rand(0,25) + 65).chr(rand(0,25) + 65);
        $a->registration = $registration;
        $a->save();
    }

    public function corporateRedirect(){
        return Redirect::to('/backend/corporate/'.Sentry::getUser()->active_airline);
    }

    public function corporate($id){
        return View::make('backend.corporate')->with('airline', Airline::find(Sentry::getUser()->active_airline));
    }

    public function joinWorld($id){
        $user = Sentry::getUser();
        return View::make('backend.join_world')->with('world', World::find($id));
    }

    public function usedAircraftUpdate(){
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

    }

    public function routes(){
        //Generate a route map
        $airline = Sentry::getUser()->active_airline;
        $rts = Rte::where('airline', $airline)->get();
        $airports = Airport::all();
        return View::make('backend.routes')->with('routes', $rts)->with('airports', $airports)->with('airline', Airline::find($airline));
    }

    public function createRoute(){

    }

    public function researchRoute(){

    }

    public function editRoutes(){
        
    }

    public function editRoute($id){
        
    }

    public function editRouteUpdate($id){
        
    }

    public function airports(){
        //Render a list of all the airports
        $airports = Airport::all();
        $worldId = Sentry::getUser()->active_airline;
        $list = array();
        foreach($airports as $a){
            if($a->world_id == $worldId){
                array_push($list, $a);
            }
        }
        return View::make('backend.airports')->with('airports', $list);
    }

    public function gates($id){

    }

    public function gateRedirect(){
        return Redirect::to('/backend/gates/1');
    }

    public function slots(){

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
}

?>