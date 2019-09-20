<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Form
        // clasic metoda de adaugare
        // Form::macro('myField', function()
        // {
        //     return '<input type="text" value=\'\'>';
        // });

        // sau fancy cu upload the view file
        Form::component('bsText', 'form_bits.text', ['name', 'label', 'value', 'attributes']);
        Form::component('bsTextInput', 'form_bits.textInput', ['name', 'label', 'value', 'attributes']);
        Form::component('bsTextarea', 'form_bits.textarea', ['name', 'label', 'value', 'attributes']);
        Form::component('bsButton', 'form_bits.submit', ['name', 'label', 'attributes', 'fa_icon']);
        Form::component('bsHidden', 'form_bits.hidden', ['name', 'value', 'attributes']);
        Form::component('bsImage', 'form_bits.image', ['name', 'label', 'value', 'entity', 'attributes']);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
