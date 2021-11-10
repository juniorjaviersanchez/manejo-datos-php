<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
    public function test_email(){
        $email = Validate::email('i@gmail.com');
        $this->assertTrue($email);

        $email = Validate::email('8978@.');
        $this->assertFalse($email);
    }

    public function test_url(){
        $email = Validate::url('https://web.whatsapp.com/');
        $this->assertTrue($email);

        $email = Validate::url('web.whatsapp.com/');
        $this->assertFalse($email);
    }
}