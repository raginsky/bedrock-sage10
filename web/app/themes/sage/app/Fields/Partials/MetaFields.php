<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

$meta_fields = new FieldsBuilder('meta_fields');

$meta_fields
        ->addText('meta_title', [
            'label' => 'Meta Title',
            'wrapper'    => ['width' => 25]
            
        ])
        ->addText('meta_description', [
            'label' => 'Meta Description',
            'wrapper'    => ['width' => 25]
        ])
        ->addImage('meta_image', [
            'label' => 'Meta Image',
            'preview_size' => 'thumbnail',
            'return_format' => 'url',
            'wrapper'    => ['width' => 15]
        ])
        ->addText('meta_url', [
            'label' => 'Meta URL',
            'wrapper'    => ['width' => 20]
        ])
        ->addText('meta_type', [
            'label' => 'Meta Type',
            'wrapper'    => ['width' => 15]
        ])
        // Page specific meta fields
        ->addRepeater('meta_per_page', [
            'label' => 'Meta Fields Per Page'
        ])
        ->addPageLink('page_url', [
            'label' => 'Page URL',
            'post_type' => [
                'page',
                'post'
            ],
            'allow_archives' => 0,
            'allow_null' => 1,
            'wrapper'    => ['width' => 15]
        ])
        ->addText('meta_title', [
            'label' => 'Meta Title',
            'wrapper'    => ['width' => 25]
        ])
        ->addText('meta_description', [
            'label' => 'Meta Description',
            'wrapper'    => ['width' => 20]
        ])
        ->addImage('meta_image', [
            'label' => 'Meta Image',
            'preview_size' => 'thumbnail',
            'return_format' => 'url',
            'wrapper'    => ['width' => 10]
        ])
        ->addText('meta_url', [
            'label' => 'Meta URL',
            'wrapper' => ['width' => 20],
            'default_value' => home_url(),
        ])
        ->addText('meta_type', [
            'label' => 'Meta Type',
            'default_value' => 'website',
            'wrapper' => ['width' => 10]
        ])
        ->endRepeater();

return $meta_fields;