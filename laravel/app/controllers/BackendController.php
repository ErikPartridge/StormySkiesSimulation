<?php

class BackendController extends BaseController{
	
	public function __construct(){
		$this->beforeFilter('auth', array());
	}

	public function overview(){
		$user = Sentry::getUser();
		$participated = $user->hasMany('Airline', 'ceo');
		$count = 0;
		$worlds = World::all();
		foreach($participated as $p){
			$count++;
		}
		$full = 0;
		foreach($worlds as $w){
			if($w->numberUsers == $w->cap){
				$full++;
			}
		}
		return View::make('backend.overview')->with('participated', $participated)->with('count', $count)->with('worlds', $worlds)->with('full', $full);
	}

	private function ownsAirline($user){
		$active = $user->active_airline;
		$airlines = $user->hasMany('Airline', 'ceo');
		if($airlines == null){
			return Redirect::to('backend/overview');
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