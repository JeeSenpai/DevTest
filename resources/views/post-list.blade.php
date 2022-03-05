<style type="text/css">
    
    table{
        padding: 120px;
        border-collapse: collapse;
        width: 100%;
    }

    td,th{
        padding: 5px;
        border: 1px solid;
    }
    button{
        padding: 10px;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Recent Post') }}
        </h2>
    </x-slot>
       <div class="p-6">
        <a href="{{ route('post.add') }}">
          <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Add Post</button>
        </a>
        </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">      
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                      
                       @if ($message = Session::get('deleted'))
                       <div class="alert alert-success alert-block"> 
                       <strong>{{ $message }}</strong>
                       </div><br>
                       @endif
                       
                     <table>
                          <tr>
                           
                             <th>Title</th>
                             <th>Description</th>
                             <th>Action</th>
                             
                         </tr>
                        @foreach($posts as $post)
                         <tr>
                             
                             <td>{{$post->title}}</td>
                             <td>{{$post->body}}</td>
                             <td> 
                                  <a href="{{route('edit.post',$post->id)}}">
                                       <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Edit</button>
                                  </a>
                               || 
                                  <a href="{{route('delete.post',$post->id)}}" onclick="return confirm('Are you sure you want to delete this post ?')">
                                       <button class="inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Delete</button>
                                  </a>

                            </td>
                         </tr>
                        @endforeach
                     </table>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>