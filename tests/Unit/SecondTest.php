<?php

namespace Tests\Unit;

use Tests\TestCase;

class SecondTest extends TestCase
{
    public function test_example()
    {
        // $this->assertTrue(true);
        $this->get('/second')->assertStatus(200);
    }
}