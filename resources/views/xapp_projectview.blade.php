<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('/css/projectview.css') }}" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("目標") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a class="class_project_create" href="/create">目標作成</a>
            @foreach($big_goals as $big_goal)
                <div id="id_big_goal_box" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <p>全体目標➔{{$big_goal->name}}</p>
                    <p>達成条件➔{{$big_goal->condition}}</p>
                    <p>期間➔{{$big_goal->start_season}}～{{$big_goal->end_season}}</p>
                    @if(isset($big_goal->goals))
                        @foreach($big_goal->goals as $goal)<!--$big_goal->goalsで[{}]という形でつながったgoalを一括取得している -->
                            <div id="id_goal_box"><!-- $goalにはそれぞれidごとの連想配列が入っている -->
                                <p>小目標➔{{$goal->name}}</p>
                                <p>やる事➔{{$goal->condition}}</p>
                                <p>期間➔{{$goal->start_season}}～{{$goal->end_season}}</p>
                                <form action="/delete2/{{$goal->id}}" method="post">
                                    @csrf
                                    @method("DELETE");
                                    <button class="class_project_delete" type="submit" onclick="delete_biggoal({{$goal->id}})">削除</button>
                                </form>
                            </div>
                        @endforeach
                    @endif
                    <form action="/create2" method="get">
                        @csrf
                        <input type="hidden" name="big_goal[id]" value="{{$big_goal->id}}">
                        <button class="class_project_create2" type="submit">小目標作成</button>
                    </form>
                </div>
                <form id="form_{{$big_goal->id}}" action="/delete/{{$big_goal->id}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="class_project_delete" type="submit" onclick="delete_biggoal({{$big_goal->id}})">削除</button>
                </form>
            @endforeach
        </div>
    </div>
</x-app-layout>

<script>
    function delete_biggoal(id){
        "use strict"
        
        if(confirm("削除しますか？")){
            document.getElementById(`form_${id}`).submit();//form情報をaction属性のurlに送信している事になる
        }
    }
</script>


