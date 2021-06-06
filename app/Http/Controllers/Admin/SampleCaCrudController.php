<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SampleService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SampleCaCrudController extends Controller
{
    protected SampleService $sampleService;

    public function __construct(SampleService $sampleService)
    {
//        parent::__construct();

        $this->sampleService = $sampleService;
    }

    public function index(): View
    {
        $title = '';
        $description = '';

        $data = [
            'title' => $title,
            'description' => $description,
        ];

        return view('admin.crud.index', $data);
    }

    public function create(): View
    {
        $title = '';
        $description = '';

        $data = [
            'title' => $title,
            'description' => $description,
        ];

        return view('admin.crud.create', $data);
    }

    public function edit(): View
    {
        $title = '';
        $description = '';

        $data = [
            'title' => $title,
            'description' => $description,
        ];

        return view('admin.crud.edit', $data);
    }

    public function store(): RedirectResponse
    {
        DB::beginTransaction();
        try {
            //
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            Log::critical($e->getMessage());
            session()->flash('critical_error_message', '保存中に問題が発生しました');

            return redirect()->back()->withInput();
        }

        session()->flash('flash_message', '保存が完了しました');

        return redirect()->route('admin.crud.index');
    }

    public function update(): RedirectResponse
    {
        DB::beginTransaction();
        try {
            //
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            Log::critical($e->getMessage());
            session()->flash('critical_error_message', '更新中に問題が発生しました');

            return redirect()->back()->withInput();
        }

        session()->flash('flash_message', '更新が完了しました');

        return redirect()->route('admin.crud.index');
    }

    public function destroy(): RedirectResponse
    {
        $hoge = '';

        session()->flash('flash_message', $hoge . 'を削除しました');

        return redirect()->route('admin.crud.index');
    }
}
