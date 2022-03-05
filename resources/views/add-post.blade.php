
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a Post') }}
        </h2>
    </x-slot>
         <div class="p-6">
           <a href="{{ route('post.list') }}">
               <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Back</button>
           </a>
        </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">      
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                     
                       @if ($message = Session::get('success'))
                       <div class="alert alert-success alert-block"> 
                       <strong>{{ $message }}</strong>
                       </div><br>
                       @endif
                       
                      
                    <form method="post" action="{{route('save.post')}}">
                        @csrf
                        
                        <input  type="hidden" name="userid" value="{{ Auth::user()->id }}" >
                        
                        The Title: <br><input type="text" name="title"><br>
                        Description: <br><textarea name="body" rows="5" cols="100"></textarea><br>
                        
                        <br><input type="submit" value="Submit"  class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"><br>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
