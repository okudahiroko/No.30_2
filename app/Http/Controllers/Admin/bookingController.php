<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでtravel Model が扱えるようになる
use App\Travel;

class bookingController extends Controller
{
    public function add()
    {
        return view('admin.booking.apply');
    }
    
    public function apply(Request $request)
    {
        
        // 以下を追記
        // Varidation を行う
        $this->validate($request, travel::$rules);
        
        $travel = new Travel;
        $form = $request->all();
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
        // データベースに保存する
        $travel->fill($form);
        $travel->save();
        
        return redirect('admin/booking/apply');
    }
}
