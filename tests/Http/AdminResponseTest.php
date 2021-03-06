<?php

namespace tests\Http;

use App\Models\User;
use Tests\TestCase;

class FrontResponseTest extends TestCase
{
    /**
     * @test
     */
    public function adminトップページのレスポンスは正常である()
    {
        $user = User::factory()->create();

        $this->actingAs($user, 'admin')->get(route('dashboard'))->assertStatus(200);
    }

    /**
     * @test
     */
    public function loginページのレスポンスは正常である()
    {
        $this->get('/admin/login')->assertStatus(200);
    }

    // index detail系のテストサンプル
//    public function サンプルページのレスポンスは正常である()
//    {
//        $hoge = Hoge::query()->select('id')->where('is_public', true)->first();
//
//        $this->get('/hoges')->assertStatus(200);
//        $this->get('/hoges/'. $hoge->id )->assertStatus(200);
//    }
}