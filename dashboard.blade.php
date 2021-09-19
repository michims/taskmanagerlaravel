<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">Tasks List</div>
              
                
            </div>
            <div class="">
                    
                    <a href="/task" style="background: #2fc974;    color: #fff;    display: block;    padding: 20px 10px;    text-align: center;   text-decoration: none;width: 150px;border-radius: 8px; // the rounded corners are here">Add new Task</a>
                </div>
                <br>
                <br>
            <table class="w-full text-md rounded mb-4">
                <thead>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Task</th>
                    <th class="text-left p-3 px-5">Actions</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach(auth()->user()->tasks as $task)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">
                            {{$task->description}}
                        </td>
                        <td class="p-3 px-5">
                            
                            <a href="/task/{{$task->id}}" style="background: #0000FF;    color: #fff;    display: block;    padding: 2px 1px;    text-align: center;   text-decoration: none;width: 55px;border-radius: 8px; // the rounded corners are here" name="edit" >Edit</a>
                            <br>
                            <form action="/task/{{$task->id}}" class="inline-block">
                                <button type="submit" name="delete" formmethod="POST" style="background: #B22222;    color: #fff;    display: block;    padding: 2px 1px;    text-align: center;   text-decoration: none;width: 55px;border-radius: 8px; // the rounded corners are here" >Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
</x-app-layout>