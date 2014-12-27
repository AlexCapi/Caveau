<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/12/14
 * Time: 16:21
 */


/**
 * Categories model config
 */
return array(
    'title' => 'Catégories',
    'single' => 'categorie',
    'model' => 'Categorie',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'code',
        'libelle'
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'code',
        'libelle',
    ),
);
