<?php

namespace PhpIso\ISO639\Test;

use PhpIso\ISO639\ISO639_1;
use PHPUnit\Framework\TestCase;

class ISO639_1Test extends TestCase
{
    public function test_is_exists()
    {
        $this->assertTrue(ISO639_1::isExists('en'));
        $this->assertFalse(ISO639_1::isExists('foo'));
    }

    public function test_get_iso_name()
    {
        $this->assertEquals('English', ISO639_1::getISOName('en'));
        $this->assertEquals('Russian', ISO639_1::getISOName('ru'));
    }

    public function test_get_native_name()
    {
        $this->assertEquals('English', ISO639_1::getNativeName('en'));
        $this->assertEquals('Русский', ISO639_1::getNativeName('ru'));
    }

    public function test_get_639_2T()
    {
        $this->assertEquals('fas', ISO639_1::get639_2T('fa'));
        $this->assertEquals('cym', ISO639_1::get639_2T('cy'));
    }

    public function test_get_639_2B()
    {
        $this->assertEquals('per', ISO639_1::get639_2B('fa'));
        $this->assertEquals('wel', ISO639_1::get639_2B('cy'));
    }

    public function test_get_639_3()
    {
        $this->assertEquals('fas', ISO639_1::get639_3('fa'));
        $this->assertEquals('cym', ISO639_1::get639_3('cy'));
    }

    public function test_codes()
    {
        foreach (ISO639_1::CODES as $code => $values) {
            $this->assertEquals(5, count($values), $code);
        }
    }
}
