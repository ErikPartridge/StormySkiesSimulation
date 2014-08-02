<?php

class BackendController extends BaseController{
	
	public function __construct(){
		$this->beforeFilter('auth', array());
	}

	public function overview(){
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

        return View::make('backend.overview')->with('participated', $participated)->with('count', $count)->with('worlds', $worlds)->with('full', $full);
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
            if($a->for_sale){
                array_push($planes, $a);
            }
        }
        $types = AircraftType::all();
        return View::make('backend.used_aircraft')->with('planes', $planes)->with('types', $types);
    }

    public function airplaneRedirect(){
    	return Redirect::to('/backend/airplane/1');
    }

    public function newAircraft(){
    	$types = AircraftType::all();
    	$list = array();
    	foreach($types as $t){
    		array_push($list, $t->name);
    	}
    	return View::make('backend.new_aircraft')->with('types', $list);
    }
}

?>