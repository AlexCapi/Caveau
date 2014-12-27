<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/12/14
 * Time: 15:53
 */

class Recompense extends Eloquent {

    protected $fillable = array('annee','selection','millesime','vin_id');
    public $timestamps = true;

    public function vin()
    {
        return $this->belongsTo('Vin');
    }

}