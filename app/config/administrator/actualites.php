<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/12/14
 * Time: 16:21
 */


/**
 * Actualites model config
 */
return array(
    'title' => 'Actualités',
    'single' => 'actualite',
    'model' => 'Actualite',
    /**
     * The display columns
     */
    'columns' => array(
        'titre',
        'message'
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'titre',
        'message' => array(
            'type' => 'textarea'
        ),
    ),
);
