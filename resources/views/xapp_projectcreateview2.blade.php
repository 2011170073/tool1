<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('/css/list_style.css')  }}" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("小目標作成") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="/create2/store" method="post">
                @csrf
                <input type="text" name="goal[name]" placeholder="参考書Aを勉強" required>
                <input type="text" name="goal[condition]" placeholder="参考書Aを1~300pまで学習" required>
                <input type="text" name="goal[start_season]" placeholder="2月20日" required>
                <input type="text" name="goal[end_season]" placeholder="3月20日" required>
                <input type="hidden" name="goal[big_goal_id]" value="{{$big_goal_id}}">
                <button type="submit">作成</button>
            </form>
        </div>
    </div>
</x-app-layout>
