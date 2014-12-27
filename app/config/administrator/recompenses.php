<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/12/14
 * Time: 16:21
 */


/**
 * Vins model config
 */
return array(
    'title' => 'Récompenses',
    'single' => 'recompense',
    'model' => 'Recompense',
    /**
     * The display columns
     */
    'columns' => array(
        'annee',
        'selection',
        'millesime',
        'vin' => array(
            'title' => "Vin récompensé",
            'relationship' => 'vin', //this is the name of the Eloquent relationship method!
            'select' => "CONCAT((:table).libelle, ' ', (:table).specificite)",
        )
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'annee',
        'selection',
        'millesime',
        'vin' => array(
            'type' => 'relationship',
            'title' => 'Vin',
            'name_field' => 'full_name', //using the getFullNameAttribute accessor
            'options_sort_field' => "CONCAT(libelle, ' ', specificite)",
        )
    ),
);
