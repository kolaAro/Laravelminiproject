@extends('layout.app')

@section('body')
<br>
 <div class="container">
          <br>
              <br>
              <a href="todo/create" class="btn btn-info">Add New</a>
    <div class="col-lg-4 col-lg-offset-4">
            <center><h1>Todo List</h1></center>
                <ul class="list-group">
                    @foreach($todos as $todo)
                      <li class="list-group-item">

                          <a href="{{'/Me/public/todo/'.$todo->id}}">{{ $todo->title }}</a>
                            <span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
                      </li>
                    @endforeach
                  </ul>
                  <br>
                <ul class="list-group col-lg-4">
                    @foreach($todos as $todo)
                      <li class="list-group-item">
                          <a href="{{'/Me/public/todo/'.$todo->id.'/edit'}}">Edit</a>
                          <form action="{{'/Me/public/todo/'.$todo->id}}" method="post">
                               {{ csrf_field()}}
                                {{method_field('DELETE')}}
                            <input type="submit" value="delete">
                          </form>
                      </li>
                    @endforeach
                </ul>
      </div>
  </div>

@endsection
