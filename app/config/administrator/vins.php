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
    'title' => 'Vins',
    'single' => 'vin',
    'model' => 'Vin',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'libelle',
        'description',
        'specificite',
        'tav',
        'prix',
        'categorie' => array(
            'title' => "Categorie du vin",
            'relationship' => 'categorie', //this is the name of the Eloquent relationship method!
            'select' => "(:table).libelle",
        ),
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="/images/uploads/originals/(:value)" height="100" />',
            'sortable' => false,
        )
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'libelle',
        'description' => array(
            'type' => 'textarea',
        ),
        'specificite',
        'tav' => array(
            'type' => 'number',
            'symbol' => '%',
        ),
        'prix' => array(
            'type' => 'number',
            'symbol' => '€',
            'decimals' => 2
        ),
        'categorie' => array(
            'type' => 'relationship',
            'title' => 'Categorie',
            'name_field' => 'libelle', //what column or accessor on the other table you want to use to represent this object
        ),
        'image' => array(
            'title' => 'Image',
            'type' => 'image',
            'location' => public_path() . '/images/uploads/originals/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 20,
            'sizes' => array(
                array(65, 57, 'crop', public_path() . '/images/uploads/thumbs/small/', 100),
                array(220, 138, 'landscape', public_path() . '/images/uploads/thumbs/medium/', 100),
                array(383, 276, 'fit', public_path() . '/images/uploads/thumbs/full/', 100)
            )
        )
    ),
);
