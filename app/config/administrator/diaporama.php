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
    'title' => 'Diaporama',
    'single' => 'diaporama',
    'model' => 'Diaporama',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'description',
        'selected' => array(
            'type' => 'bool',
            'title' => 'Afficher/Masquer',
        ),
        'image' => array(
            'title' => 'Image',
            'output' => '<img src="/caveau/public/images/uploads/originals/(:value)" height="100" />',
            'sortable' => false,
        )
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'description' => array(
            'type' => 'textarea',
        ),
        'selected' => array(
            'type' => 'bool',
            'title' => 'Afficher/Masquer',
        ),
        'image' => array(
            'title' => 'Image',
            'type' => 'image',
            'location' => public_path() . '/images/uploads/originals/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(65, 57, 'crop', public_path() . '/images/uploads/thumbs/small/', 100),
                array(220, 138, 'landscape', public_path() . '/images/uploads/thumbs/medium/', 100),
                array(383, 276, 'fit', public_path() . '/images/uploads/thumbs/full/', 100)
            )
        )
    ),
);
