@extends("layouts.master")

@section("title")
Homepage
@endsection

@section("content")

@if(count($errors)>0)

    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
   </div>
   </div>
@endif

   <div class="container-fluid">
  <div class="row">
    

    <h3>Register</h3>
   <div class="col-md-6">
    <form action="{{ route('register') }}" method="post">
    <div class="form-group {{$errors->has('Name')? 'has=error':''}} ">
            <label for="Name">Your Name</label>
            <input class="form-control" type="text" name="Name" id="Name" placeholder="Type Your Name" value="{{ Request::old('Name') }}">
        </div>
        <div class="form-group {{$errors->has('Username')? 'has=error':''}}">
            <label for="Name">Your Username</label>
            <input class="form-control" type="text" name="Username" id="Name" placeholder="Type Your Username" value="{{ Request::old('Username') }}">
        </div>
        <div class="form-group {{$errors->has('Password')? 'has=error':''}}">
            <label for="Password">Your Password</label>
            <input class="form-control" type="password" name="Password" id="Password" placeholder="Type Your Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
   </div>
    

    <h3>Log In</h3>
    <div class="col-md-6">
     <form action="{{ route('login') }}" method="post">
        <div class="form-group {{$errors->has('Username')? 'has=error':''}}">
            <label for="Name">Your Username</label>
            <input class="form-control" type="text" name="Username" id="Username" placeholder="Type Your Username" value="{{ Request::old('Username') }}">
        </div>
        <div class="form-group {{$errors->has('Password')? 'has=error':''}}">
            <label for="Password">Your Password</label>
            <input class="form-control" type="password" name="Password" id="Password" placeholder="Type Your Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
     </form>
    </div>
  </div>  
</div>  

@endsection