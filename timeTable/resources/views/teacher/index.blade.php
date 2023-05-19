{{-- <button onclick="location.href='{{ route('create') }}'"  class="text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">新規登録</button> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            登録教員一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                @if (!$teachers->isEmpty())
                    @foreach ($teachers as $teacher )
                      {{$teacher ->login_id}}<br>
                      {{$teacher ->user_name}}<br>
                      {{$teacher ->permit}}<br>
                      {{$teacher ->created_at}}<br>
                    @endforeach
                @else
                    登録された教員は現在いません。
                @endif
               </div>
            </div>
        </div>
    </div>
</x-app-layout>
