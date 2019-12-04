<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inu;

class InuController extends Controller
{
    public function index() {
        // DBからテーブルの値を全て取得
        $inus = Inu::all();

        // 取得した値をviewに渡す
        return view('inu/index', compact('inus'));
    }

    public function edit($id) {
        // DBから選択されたidの行を取得する
        $inu = Inu::findOrFail($id);

        // 取得した値をviewに渡す
        return view('inu/edit', compact('inu'));
    }
}
