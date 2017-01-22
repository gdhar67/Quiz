<!DOCTYPE html>
<html>
    <head>
        <title>HomePage</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" >Test Your Knowledge</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
  </div><!-- /.container-fluid -->
</nav>
</header>
        <div class="container">
            @include('includes.message-block') <!-- /.For Displaying the Error -->
   

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

        </div>
    </body>
</html>
