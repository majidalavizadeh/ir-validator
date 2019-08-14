<?php

namespace Tests\Unit;

use Validator;
use Tests\TestCase;

/**
 * Class IrValidatorTest
 * @package Tests\Unit
 */
class IrValidatorTest extends TestCase
{

    /**
     * National Code test case
     *
     * @return void
     */
    public function testNationalCode()
    {
        $values = [
            'code' => '1000006700'
        ];

        $validation = Validator::make($values, [
            'code' => 'national_code'
        ]);

        $this->assertFalse($validation->fails());
    }

    /**
     * IBAN account number test case
     *
     * @return void
     */
    public function testIbanAccount()
    {
        $values = [
            'account' => 'IR062960000000100324200001'
        ];

        $validation = Validator::make($values, [
            'account' => 'iban'
        ]);

        $this->assertFalse($validation->fails());
    }

    /**
     * debit card number test case
     *
     * @return void
     */
    public function testDebitCard()
    {
        $values = [
            'card_number' => '1111111111111111'
        ];

        $validation = Validator::make($values, [
            'card_number' => 'debit_card'
        ]);

        $this->assertFalse($validation->fails());
    }

    /**
     * Postal Code Test Case
     *
     * @return void
     */
    public function testPostalCode()
    {
        $values = [
            'postal_code' => '1234512345'
        ];

        $validation = Validator::make($values, [
            'postal_code' => 'postal_code'
        ]);

        $this->assertFalse($validation->fails());
    }
}