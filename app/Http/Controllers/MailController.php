<?php

namespace App\Http\Controllers;

use App\Mail\myemail;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|numeric',
            'job' => 'required|string',
            'city' => 'required|string',
            'email' => 'nullable',
        ], [
            'name.required' => 'نام و نام خانوادگی اجباری است.',
            'name.string' => 'نام و نام خانوادگی باید رشته باشد.',
            'phone_number.required' => 'شماره تلفن اجباری است.',
            'phone_number.numeric' => 'شماره تلفن باید عددی باشد.',
            'job.required' => 'شغل اجباری است.',
            'job.string' => 'شغل باید رشته باشد.',
            'city.required' => 'نام و نام خانوادگی اجباری است.',
            'city.string' => 'نام و نام خانوادگی باید رشته باشد.',
        ]);

        $user = Email::where('phone_number', $request->phone_number)->first();

        if($user == null) {
            Email::create($validate);
            try {
                Mail::to('contact@modernkasbokar.ir')->send(new MyEmail(
                    $request->name,
                    $request->phone_number,
                    $request->job,
                    $request->email,
                    $request->city
                ));

                Alert::success('ثبت موفق', 'درخواست شما با موفقیت ثبت شده است.');
            } catch (\Exception $error) {
                Log::error($error);
                Alert::error('خطا', 'درخواست شما ثبت شد، اما مشکلی در ارسال ایمیل به وجود آمد.');
            }
            return redirect()->back();
        } else {
            Alert::error('خطا', 'درخواست شما از قبل ثبت شده است.');
            return redirect()->back();
        }


    }



}
