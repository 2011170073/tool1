<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\goal;
use App\Models\big_goal;

class ProjectController extends Controller
{
    public function project_view(goal $goals,big_goal $big_goals){
        return view("xapp_projectview")->with(["goals"=>$goals->get(),"big_goals"=>$big_goals->get()]);
    }
    
    public function project_create_view(goal $goals,big_goal $big_goals){
        return view("xapp_projectcreateview")->with(["goals"=>$goals->get()]);
    }
    
    public function project_create_store(Request $req,big_goal $big_goals){
        $input = $req["big_goals"];
        #dd($input); nameの指定で連想配列にしておく
        $big_goals->fill($input)->save();
        return redirect("/");
    }
    
    public function project_delete(big_goal $big_goal){
        $big_goal->delete();
        return back();
    }
    
    public function project_delete2(goal $goal){
        $goal->delete();
        return back();
    }
    
    public function project_create_view2(Request $req){
        $input = $req["big_goal"];
        return view("xapp_projectcreateview2")->with(["big_goal_id"=>$input["id"]]);
    }//小目標作成コントローラ、小目標作成画面にgetリクエストで取得した大目標のid情報を与える
    
    public function project_create_store2(Request $req,goal $goals){
        //goalテーブルにpostリクエストで取得した情報をインサート
        $input = $req["goal"];
        $goals->fill($input)->save();
        return redirect("/");
    }
}







