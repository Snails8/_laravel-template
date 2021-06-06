<?php

namespace tests\Http;

use Tests\TestCase;

class FrontResponseTest extends TestCase
{
    /**
     * @test
     */
    public function adminトップページのレスポンスは正常である()
    {
        $this->get('/admin/home')->assertStatus(200);
    }

    /**
     * @test
     */
    public function loginページのレスポンスは正常である()
    {
        $this->get('/admin/login')->assertStatus(200);
    }
}