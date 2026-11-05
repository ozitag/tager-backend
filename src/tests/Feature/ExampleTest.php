<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Скелет — API без фронтовых маршрутов, поэтому GET / здесь 404, и прежний
 * дефолтный тест Laravel падал. Проверяем то, что для этого скелета
 * действительно является признаком жизни: приложение поднимается и
 * публичные маршруты TAGER зарегистрированы.
 */
class ExampleTest extends TestCase
{
    public function testApplicationBoots(): void
    {
        $this->assertNotEmpty($this->app->version());
    }

    public function testTagerPublicRoutesAreRegistered(): void
    {
        $uris = collect(app('router')->getRoutes())->map(fn($route) => $route->uri())->all();

        $this->assertContains('tager/panel/info', $uris);
        $this->assertContains('tager/pages', $uris);
    }
}
