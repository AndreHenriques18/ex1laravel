@extends('layouts.layout')

@section('content')

<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle min-w-full inline-block sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full">

          <thead class="bg-white">
            <tr>
              <th scope="col-auto" class="px-6 py-2 text-left text-3xl font-bold  tracking-wider">
                Todo List
              </th>
              <th></th>
            </tr>
          </thead>

          <tbody class="bg-white">
              <tr> 
                <form action="{{ url('task') }}" method="POST">
                {!! csrf_field() !!}
                    
                <td class="px-6 py-2 whitespace-nowrap w-full">
              <div class="flex items-center">
                  

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="name"
                id="task-name"
                type="text"
                placeholder="Add Todo">
                
            </td>
                
                
                <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium">
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-2 border border-blue-500 hover:border-transparent rounded">
  Add
</button>
                </div>
            </div>
            
            </div>
        </form></td>
              </tr>

          @foreach ($tasks as $task)  
          <tr>

              <td class="px-6 whitespace-nowrap">
              <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                      <form method="POST" action="{{ url('task/'.$task->id) }}">
                      @csrf
                    <label class="inline-flex items-center mt-3">
                        <input type="hidden" name="id" value="{{$task->id}}" >
                    <input
                    class="form-checkbox"
                    type="checkbox"
                    onClick="this.form.submit()"
                    {{$task->done ? 'checked' : ''}}
                    >
                        <span class="ml-2 text-gray-700">{{ $task->name }}</span>
                    </label>
                    </form>
                  </div>
                </div>
              </td>
              
              <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium">
              <form action="{{ url('task/'.$task->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
              <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-2 border border-red-500 hover:border-transparent rounded">
  Remove
</button>
</form>
              </td>
            </tr>
            
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection