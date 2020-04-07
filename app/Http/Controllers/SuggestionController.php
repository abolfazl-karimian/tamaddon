<?php

namespace App\Http\Controllers;

use App\suggestion;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SuggestionController extends Controller
{
    public function store(Request $request, suggestion $suggestion)
    {
//        dd($request->all());
        try {
            $this->validate($request, [
                'full_name' => 'required|min:5',
                'email' => 'required|email',
                'body' => 'required',
            ]);
        } catch (ValidationException $e) {
            flash('بعلت وارد کردن اطلاعات نادرست، پیشنهاد شما ثبت نشد.', 'danger');
            return back();
        }
        $suggestion->create($request->all());
        flash('با تشکـر. پیشنهاد شما برای ما ارسال شده است و مورد بررسی قرار خواهد گرفت.', 'success');

        return back();
//        return redirect('#ContactUs');
    }
}
