<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('/css/')  }}" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("失敗用選択肢作成") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="id_flex1" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="/create3/store" method="post">
                    @csrf
                    <input name="ifthen[then1]" type="name" placeholder="選択股A" required>
                    <input name="ifthen[then2]" type="name" placeholder="選択股B">
                    <input name="ifthen[then3]" type="name" placeholder="選択股C">
                    <input name="ifthen[goal_id]" type="hidden" value="{{$goal_id}}">
                    <button type="submit">選択肢作成</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>