<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;

/**
 * Class TopControllerTest
 * @package Tests\Feature\Controllers
 */
class TopControllerTest extends TestCase
{
    /**
     * @test
     */
    public function トップページのレスポンスは正常である()
    {
        $this->get('/')->assertStatus(200);
    }
}