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
}

?>