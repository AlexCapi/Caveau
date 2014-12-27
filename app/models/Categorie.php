<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/12/14
 * Time: 15:59
 */

class Categorie extends Eloquent  {

    protected $fillable = array('libelle','description','specificite','tav','im','etiquette','prix','categorie_id');
    public $timestamps = true;

    public function vins()
    {
        return $this->hasMany('Vin');
    }
} 