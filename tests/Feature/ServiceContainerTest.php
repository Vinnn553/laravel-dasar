<?php

namespace Tests\Feature;

use App\Data\Foo;
use App\Data\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceContainerTest extends TestCase
{
    public function testDependencyInjection() {
        $foo = $this->app->make(Foo::class);
        
        self::assertEquals("Foo", $foo->foo());
    }

    public function testBind() {
        $this->app->bind(Person::class, function ($app) {
            return new Person('Kelvin', 'Agusto');
        });

        $person = $this->app->make(Person::class);

        self::assertEquals('Kelvin', $person->firstName);
    }
}
