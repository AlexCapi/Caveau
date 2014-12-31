<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/12/14
 * Time: 15:59
 */

class Diaporama extends Eloquent  {

    protected $table = 'diaporama';
    protected $fillable = array('image','selected','description');
    public $timestamps = true;

} 