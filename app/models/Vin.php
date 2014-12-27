<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/12/14
 * Time: 15:53
 */

class Vin extends Eloquent {

    protected $fillable = array('libelle','description','specificite','tav','im','etiquette','prix','categorie_id');
    public $timestamps = true;

    public function categorie()
    {
        return $this->belongsTo('Categorie');
    }

    public function recompenses()
    {
        return $this->hasMany('Recompense');
    }

    public function getFullNameAttribute() {
        return ucfirst($this->libelle) . ' ' . ucfirst($this->specificite);
    }

}