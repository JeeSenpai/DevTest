<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Whats New') }}
        </h2>
    </x-slot>
 @foreach($postshow as $item)
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h2>
                        "{{$item->title}}"
                    </h2><br>
                    <b>{{$item->body}}</b><br>

                    <div class="py-4">
                    <p>--{{$item->user_name}}--</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endforeach
</x-app-layout>
