<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .invalid-feedback {
                    display: block;
                       }
    </style>
  </head>
  <body>
    <h1>Contact us</h1>
    <div class="container">
      <div class="row">
         <div class="col-md-6">
            @if(Session::has('flash_message'))
            <div class="alert alert-success">
              {{ Session::get('flash_message') }}
            </div>
            @endif
         <form method="post" action= "{{ route('contact.store') }}">

           {{ csrf_field() }}
           <div class="form-group">
             <label>Full Name:</label>
             <input type="text" class="form-control" name="name">
             @if($errors->has('name'))
             <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
             @endif
           </div>
           <div class="form-group">
             <label>Email Address:</label>
             <input type='text' class="form-control" name="email">
             @if($errors->has('email'))
             <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
             @endif
           </div>
           <div class="form-group">
             <label>Message:</label>
             <textarea name="message" class="form-control"></textarea>
             @if($errors->has('message'))
             <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
             @endif
           </div>
           <button class="btn btn-primary">Submit</button>
         </form>
              </div>
        </div>
    </div>

  </body>
</html>
