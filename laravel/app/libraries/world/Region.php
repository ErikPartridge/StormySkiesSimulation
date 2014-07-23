<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 11:25 AM
 */

namespace libraries\world;


class Region {

    private $name;

    private $worldId;

    function __construct($name, $worldId)
    {
        $this->name = $name;
        $this->worldId = $worldId;
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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

} 