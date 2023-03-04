<?php

namespace App\Http\Controllers;
use App\Models\ifthen;
use App\Models\goal;
use Illuminate\Http\Request;

class IfthensController extends Controller
{
    public function ifthen_create_view(ifthen $ifthen,Request $req){
        $input = $req["goal"];
        return view("xapp_ifthencreateview")->with(["ifthen"=>$ifthen->get(),"goal_id"=>$input["id"]]);
    }
    
    public function ifthen_create_store(Request $req,ifthen $ifthens){
        $input = $req["ifthen"];
        $ifthens->fill($input)->save();
        return redirect("/");
    }
    
    public function ifthen_delete(ifthen $ifthen){
        $ifthen->delete();
        return back();
    }
}
