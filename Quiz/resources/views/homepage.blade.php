@extends("layouts.master")

@section("title")
Homepage
@endsection

@section("content")
<div class="container-fluid">
  <div class="row">
    

    <h3>Register</h3>
   <div class="col-md-6">
    <form action="{{ route('register') }}" method="post">
    <div class="form-group">
            <label for="Name">Your Name</label>
            <input class="form-control" type="text" name="Name" id="Name" placeholder="Type Your Name">
        </div>
        <div class="form-group">
            <label for="Name">Your Username</label>
            <input class="form-control" type="text" name="Username" id="Name" placeholder="Type Your Username">
        </div>
        <div class="form-group">
            <label for="Password">Your Password</label>
            <input class="form-control" type="password" name="Password" id="Password" placeholder="Type Your Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
   </div>
    

    <h3>Log In</h3>
    <div class="col-md-6">
     <form action="#" method="post">
        <div class="form-group">
            <label for="Name">Your Username</label>
            <input class="form-control" type="text" name="Username" id="Username" placeholder="Type Your Username">
        </div>
        <div class="form-group">
            <label for="Password">Your Password</label>
            <input class="form-control" type="password" name="Password" id="Password" placeholder="Type Your Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
  </div>  
</div>  

@endsection