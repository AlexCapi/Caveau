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
    'title' => 'Documents',
    'single' => 'document',
    'model' => 'Document',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'titre',
        'fichier' => array(
            'title' => 'Documents',
            'type' => 'file',
        )
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'titre',
        'fichier' => array(
            'title' => 'Documents',
            'type' => 'file',
            'location' => public_path() . '/documents/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 20
        )
    ),
);
