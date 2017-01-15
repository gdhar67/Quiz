<!DOCTYPE html lang="en">
<html>
   <head>

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  </head>

  <body>
        
        <header>
                  <nav class="navbar navbar-inverse">

                    <div class="container-fluid">
                     
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="{{ route('dashboard') }}">Home</a>

                      </div>
                      
                      <div>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="{{ route('logout') }}">Logout</a></li>
                          
                        </ul>

                    </div>

                  </nav>
        </header>


@include('includes.message-block')   <!-- /.For Displaying the Error -->


                  <div class="container">

                      <section class="row new-post">

                        <div class="col-md-6 col-md-offset-3">

                          <header><h3>Submit a Question ?</h3></header>

                            <form action="{{  route('submit.que') }}" method='post'>
                              <div class="form-group">
                                <textarea class="form-control" name="question" rows="5" placeholder="Your Question"></textarea>
                              </div>  

                              <header><h3>Answers :</h3></header>

                              <header><h5>OPTION : A</h5></header>
                    
                              <div class="form-group">
                              <textarea class="form-control" name="option_a" rows="1" placeholder="Answer"></textarea>
                        
                              <header><h5>OPTION : B</h5></header>
                    
                              <textarea class="form-control" name="option_b" rows="1" placeholder="Answer"></textarea>
                        
                              <header><h5>OPTION : C</h5></header>
                      
                              <textarea class="form-control" name="option_c" rows="1" placeholder="Answer"></textarea>
                        
                              <header><h5>OPTION : D</h5></header>
                      
                              <textarea class="form-control" name="option_d" rows="1" placeholder="Answer"></textarea>

                              <header><h3>Select The Correct Option :</h3></header>

                                <input type="radio" name="option" value="A" checked> A<br>
                                <input type="radio" name="option" value="B"> B<br>
                                <input type="radio" name="option" value="C"> C<br>
                                <input type="radio" name="option" value="D"> D<br>

                              <button type="submit" class="btn btn-primary">Submit</button>

                              <input type="hidden" name="_token" value="{{ Session::token()  }}">

                            </form>

                        </div>

                      </section>

                    </div>
                 
    </body>

</html>