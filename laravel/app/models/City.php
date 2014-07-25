 <?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 4:08 PM
 */


class City extends \Eloquent {

    private $latitude;

    private $longitude;

    private $population;

    private $regionId;

    private $countryId;

    private $worldId;

    function __construct($countryId, $latitude, $longitude, $population, $worldId, $regionId)
    {
        $this->countryId = $countryId;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->population = $population;
        $this->worldId = $worldId;
        $this->regionId = $regionId;
    }

    /**
     * @param mixed $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param mixed $worldId
     */
    public function setWorldId($worldId)
    {
        $this->worldId = $worldId;
    }

    /**
     * @return mixed
     */
    public function getWorldId()
    {
        return $this->worldId;
    }

    /**
     * @param mixed $population
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }

    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @param mixed $region
     */
    public function setRegionId($regionId)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    public function country()
    {
        return $this->belongsTo('Country');
    }

    public function world(){
        return $this->belongsTo('World');
    }

    public function region(){
        return $this->belongsTo('Region');
    }


} 