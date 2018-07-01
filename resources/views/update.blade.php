@extends('layout')
@section('title', 'Update Todo')

@section('content')

<div class="row">
    
    <div class="container">
        
        <div class="col-lg-12 col-sm-offset-3">
           
            <form action="{{route('todo.save', ['id' => $todo->id])}}" method="post">
                
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}">
                </div>
                
            </form>
            
        </div>
        
        
    </div>
    
</div>



@stop