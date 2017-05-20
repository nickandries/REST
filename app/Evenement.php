<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model {
    private $id;
    private $naam;
    private $beginDatum;
    private $eindDatum;
    private $klantId;
    private $prijs;

    /**
     * evenement constructor.
     * @param $id
     * @param $naam
     * @param $beginDatum
     * @param $eindDatum
     * @param $klantId
     * @param $prijs
     */
    public function __construct($id, $naam, \DateTime $beginDatum, \DateTime $eindDatum, $klantId, $prijs)
    {
        $this->id = $id;
        $this->naam = $naam;
        $this->beginDatum = $beginDatum;
        $this->eindDatum = $eindDatum;
        $this->klantId = $klantId;
        $this->prijs = $prijs;
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * @param mixed $naam
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    /**
     * @return mixed
     */
    public function getBeginDatum()
    {
        return $this->beginDatum;
    }

    /**
     * @param mixed $beginDatum
     */
    public function setBeginDatum($beginDatum)
    {
        $this->beginDatum = $beginDatum;
    }

    /**
     * @return mixed
     */
    public function getEindDatum()
    {
        return $this->eindDatum;
    }

    /**
     * @param mixed $eindDatum
     */
    public function setEindDatum($eindDatum)
    {
        $this->eindDatum = $eindDatum;
    }

    /**
     * @return mixed
     */
    public function getKlantId()
    {
        return $this->klantId;
    }

    /**
     * @param mixed $klantId
     */
    public function setKlantId($klantId)
    {
        $this->klantId = $klantId;
    }

    /**
     * @return mixed
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * @param mixed $prijs
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;
    }
}
