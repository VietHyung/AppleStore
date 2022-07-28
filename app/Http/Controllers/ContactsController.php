<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(Request $request)
    {
        $ok=0;
        if($request->has('ok'))
            $ok=$request->input('ok');
        return view("contacts.index",['ok'=> $ok]);
    }
}
