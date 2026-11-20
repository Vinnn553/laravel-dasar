<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    function testGet() {
        $this->get("/pzn")
             ->assertStatus(200)
             ->assertSeeText("Kelvin Agusto");
    }
}
