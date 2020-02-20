<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\AutoMail;
use App\Model\NewsLetter;


class SendEmailController extends Controller
{
    function index() 
    {
        return view('welcome');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        );

        // $newsletter = new NewsLetter();
        // $newsletter->email = $request->input('email');
        //  if ($newsletter->save())
        // {
        //     Mail::to($newsletter->email)->send(new AutoMail($newsletter));
        //     return redirect()->back()->with('alert','You have successfully applied for our Newsletter');
        // }else{
        //     return redirect()->back()->withErrors($validator);
        // }

        // Mail::to('stevenschrijft@outlook.com')->send(new SendMail($data));
        // Mail::to($data['email'])->send(new AutoMail($data));
        Mail::to('esmayilmaz2020@outlook.com')->send(new SendMail($data));
        return back()->with('succes', 'Bedankt dat u contact met mij hebt opgenomen');

    }

}
