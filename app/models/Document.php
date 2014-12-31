<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/12/14
 * Time: 15:59
 */

class Document extends Eloquent  {

    protected $fillable = array('titre','fichier');
    public $timestamps = true;

} 