@extends('layout')
@section('title', 'Todos')

@section('content')

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      
        <form action="/create/todo" method="post">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              
            <div class="form-group">
                
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create a todo">
                
            </div>
            
        </form>
        
    </div>
</div>

<hr>

@foreach($todos as $todo)

<div class="list-group">
    
    <div class="list-group-item">
        {!! $todo->todo !!}
        
        <a href="{{ route('todo.delete', ['id' => $todo->id])}}"role="button" class="btn btn-danger btn-sm">Delete</a>
        <a href="{{ route('todo.update', ['id' => $todo->id])}}" role="button" class="btn btn-primary btn-sm">Update</a>
        
        @if(!$todo->completed)
        
        <a href="{{route('todo.completed', ['id' => $todo->id])}}" role="button" class="btn btn-success btn-xs">Mark as completed</a> 
        
        @else 
        
        <span >Completed</span>
        @endif
    </div>
    
</div>
     

@endforeach


@stop
