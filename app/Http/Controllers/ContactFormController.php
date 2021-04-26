<?php

namespace App\Http\Controllers;

use App\Mail\CallbackRequest;
use Illuminate\Http\Request;
use App\Http\Requests\CallbackFormRequest;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //
    public function requestCallBack(CallbackFormRequest $request){
        try{
            Mail::to('matthew@greasecycle.co.uk')->send(new CallbackRequest($request->all()));
            return redirect('/#contact', 302)->with('form-success', true);
        }catch(\Exception $e){
            return redirect('/#contact', 302)->with('form-failed', true);
        }
    }
}
