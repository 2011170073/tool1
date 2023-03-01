<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('/css/list_style.css')  }}" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("目標作成") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="id_flex1" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="/create/store" method="post">
                    @csrf
                    <input type="text" name="big_goals[name]" placeholder="資格を合格！" required>
                    <input type="text" name="big_goals[condition]" placeholder="試験で60点以上を取得" required>
                    <input type="text" name="big_goals[start_season]" placeholder="2月22日" required>
                    <input type="text" name="big_goals[end_season]" placeholder="3月22日" required>
                    <button type="submit">作成</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>