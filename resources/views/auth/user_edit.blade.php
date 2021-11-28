
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/styles.css" rel="stylesheet">


  </head>


  <body>
    <div class="container">
        <div class="card mt-5">
    @if (count($errors) > 0)
   <div class="alert alert-danger errors-list">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif

   <div class="card-header bg-primary">
    <h4>Edit Pegawai</h4>

        </div>



<div class="col-lg-12">
<form method="post" action="{{route('auth.update', $user)}}">
 <div class="col-md-6 col-md-offset-3" style="padding:2%;">
     {{method_field('PATCH')}}
       {{ csrf_field() }}
       <div class="form-group">
          <label for="name">Nama User</label>
          <input type="text" class="form-control" name="name" id="name"  value="{{ $user->name }}" />

       </div>
       <div class="form-group">

         <label for="username">Username</label>
         <input type="text" class="form-control" name="username" id="username"  value="{{ $user->username }}" />

       </div>
       <div class="form-group">

        <label for="email">Password</label>
        <input type="text" class="form-control" name="email" id="email"  value="{{ $user->email }}" />

      </div>
      <div class="form-group">

        <label for="username">Password</label>
        <input type="password" class="form-control" name="username" id="password" />

      </div>
      <div class="form-group">

        <label for="username">Password Konfirmasi</label>
        <input type="text" class="form-control" name="username" id="password_confirmation" />

      </div>
       <div style= "padding:2%;">
         <button type="submit" name="btn_submit" value="Submit" class="btn bg-primary" >Submit</button>
     </div>

 </div>

</form>
</div>



</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
