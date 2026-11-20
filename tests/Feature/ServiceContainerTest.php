<?php

namespace Tests\Feature;

use App\Data\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceContainerTest extends TestCase
{
    public function testDependencyInjection() {
        $foo = $this->app->make(Foo::class);
        self::assertEquals() 
    }

}
