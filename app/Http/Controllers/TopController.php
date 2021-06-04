<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(): View
    {
        $title = 'サンプルタイトル';
        $description = 'サンプルディスクリプション';

        $data = [
            'title' => $title,
            'description' => $description,
        ];

        return view('top', $data);
    }
}
