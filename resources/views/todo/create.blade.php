@extends('layout.app')

@section('body')
         <br>
         <br>

         <div class="col-lg-4 col-lg-offset-4">
           <br>
              <a href="/Me/public/todo" class="btn btn-info">Back</a>
               <h1>{{substr(Route::currentRouteName(),5)}} item</h1>
               <form class="form-horizontal" action="/Me/public/todo/@yield('editId')" method="post">
                 {{ csrf_field()}}
                 @section('editMethod')
                 @show
               <div class="form-group">
                  <input type="text" class="form-control" name="title" value="@yield('editTitle')" placeholder="title"></input>
                  <br>
                 <textarea name="body" rows="8" class="form-control" placeholder="body">@yield('editBody')</textarea>
                 <br>
                 <button class="btn btn-success">Submit</button>
                 @if($errors->has('message'))
                 <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                 @endif
               </div>

             </form>

             @if (count($errors)>0)
             <div class="alert alert-warning">
                 @foreach($errors->all() as $error)
                 {{$error}}
                 @endforeach
                  </div>
             @endif

           </div>
         </div>


@endsection
