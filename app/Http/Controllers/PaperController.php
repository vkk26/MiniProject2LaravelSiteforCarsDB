<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PaperController extends Controller
{

    function store(Request $request)
    {
        $name =$request->name;
        return redirect()->route('thanks',['name' => $name]);
    }
    function thanks($name,Request $request)
    {
        return view('pages.thankyou')->with(compact('name'));
    }

}