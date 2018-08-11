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
}