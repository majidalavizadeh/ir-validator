<?php

namespace Majida\IrValidator;

use Illuminate\Support\ServiceProvider;

/**
 * Class IrValidatorServiceProvider
 * @package Majida\IrValidator
 */
class IrValidatorServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app['validator']->resolver(function($translator, $data, $rules) {
            return new IrValidator($translator, $data, $rules, $this->messages());
        });

    }

    /**
     *  Set the validator messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'national_code' => 'The :attribute is not a valid Iranian national code.',
            'iban' => 'The :attribute is not a valid IBAN account number.',
            'debit_card' => 'The :attribute is not a valid debit card number.',
            'postal_code' => 'The :attribute is not a valid postal code.',
        ];
    }

}
