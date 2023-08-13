<?php

namespace App\Http\Controllers;

use App\Mail\myemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){
//        return redirect()->route('')->with('success', 'ثبت نام شما با موفقیت ثبت شد');
        $validate = $request->validate([
            'name'=>'required|string',
            'phone_number'=>'required',
            'job'=>'required|string',
            'email'=>'nullable',
        ],[
            'name.required' => 'نام و نام خانوادگی اجباری است.',
            'name.string' => 'نام و نام خانوادگی بصروت رشته باید باشد.',
        ]);
        \App\Models\Mail::create($validate);

        try {
            Mail::to('cantact@modernkasbokar.ir')->send(new myemail($request->name, $request->phone_number,$request->job,$request->email));
        } catch (\Exception $error) {
            Log::info($error);
        }

        return redirect()->back();
    }


}
