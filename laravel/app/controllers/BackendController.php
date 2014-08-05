<?php

class BackendController extends BaseController{
	
	public function __construct(){
		$this->beforeFilter('auth', array());
	}

	public function overview(){
        return Redirect::to('backend/home');
	}

    public function home(){
        $user = Sentry::getUser();
        $airlines = Airline::all();
        $participated = array();
        $count = 0;
        $worlds = World::all();
        foreach($airlines as $a){
            if($a->ceo == $user->id){
                array_push($participated, $a->world_id);
            }
        }
        foreach($participated as $p){
            $count++;
        }
        $full = 0;
        foreach($worlds as $w){
            if($w->number_users == $w->cap){
                $full++;
            }
        }

        return View::make('backend.home')->with('participated', $participated)->with('count', $count)->with('worlds', $worlds)->with('full', $full);
    }

	private function ownsAirline($user){
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
    	$types = AircraftType::all();
        $type = AircraftType::find($id);
    	$list = $this->allTypes();
    	return View::make('backend.new_aircraft')->with('types', $list)->with('aircraft', $type);
    }

    public function newAircraftUpdateRedirect(){
        return Redirect::to('/backend/airplane/1');
    }

    private function allTypes(){
        $types = AircraftType::all();
        $list = array();
        foreach($types as $t){
            array_push($list, $t->name);
        }
        return $list; 
    }

    public function newAircraftUpdate($id){
        if(Input::has('submit')){
            $type = Input::get('type');
            return Redirect::to('/backend/new_aircraft/'.AircraftType::find($type + 1)->id);
        }
        if(Input::has('buy')){

        }

        return $this->newAircraft($id);
    }   

    public function corporateRedirect(){
        return Redirect::to('/backend/corporate/'.Sentry::getUser()->active_airline);
    }
    public function corporate($id){
        return View::make('backend.corporate')->with('airline', Airline::find(Sentry::getUser()->active_airline));
    }
    public function joinWorld($id){
        return View::make('backend.join_world')->with('world', World::find($id));
    }

    public function usedAircraftUpdate(){
        $list = Input::except('_token');
        $toBuy = array();
        $cost = 0;
        foreach($list as $i){
                $airplane = Airplane::find($i);
                if($airplane->for_sale){
                    array_push($toBuy, $airplane);
                    $cost += $airplane->value(AircraftType::find($airplane->type), $airplane->cycles);
                }
        }
        $airline = Airline::find(Sentry::getUser()->active_airline);
        if($airline->profits >= $cost && count($toBuy) > 0){
            $airline->costs += $cost;
            $airline->profits -= $cost;
            $flights = Flight::all();
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

    public function gates(){

    }

    public function slots(){

    }

    public function enterWorld($id){
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