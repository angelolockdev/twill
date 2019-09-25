@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'subtitle',
        'label' => 'Subtitle',
        'translated' => true,
        'maxlength' => 100
    ])
    
    @formField('color', [
        'name' => 'color',
        'label' => 'Product color'
    ])
     
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'type' => 'textarea',
        'maxlength' => 1500
    ])
    @formField('input', [
        'name' => 'weight',
        'label' => 'Weight'
    ])
    @formField('input', [
        'name' => 'price',
        'label' => 'Price'
    ])
    @formField('medias',[
        'name' => 'hero_image',
        'label' => 'Cover image',
    ])
    @formField('block_editor')
@stop

