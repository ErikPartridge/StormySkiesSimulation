<?PHP

namespace libraries;

class Helper{

	public static function makeWorldTable(){
		$worlds = DB::table('worlds')->get();

		
		return $worlds;
}

?>