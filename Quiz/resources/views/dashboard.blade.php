<!DOCTYPE html lang="en">
<html>
    <head>
        <title>DASHBOARD</title>
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
                <a class="navbar-brand">Hi {{ Auth::user()->Name }}!</a>
              </div>
             
              <ul class="nav navbar-nav navbar-right">
                  <li><a >Your Score : {{ Auth::user()->score }}</a></li>
                  <li><a href="{{ route('viewque') }}">View Your Questions</a></li>
                  <li><a href="{{ route('question') }}">Submit Question</a></li>
                  <li><a href="{{ route('logout') }}">Logout</a></li>
                  
              </ul>
            </div><!-- /.container-fluid -->
          </nav>
</header>

      

@include('includes.message-block')     <!-- /.For Displaying the Error -->



      <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
          <header><h3>Test Your Knownledge</h3></header>

          @if(Session::get('response'))

          <h4>{{Session::get('response')}}</h4>
          <h4>{{Session::get('message1')}}{{Session::get('question')}}</h4>
          <h4>{{Session::get('correct_option')}} {{Session::get('message2')}} {{Session::get('correct_ans')}}</h4><br>

          @endif



          <?php $question=0;?>

            @foreach($posts as $post)

                <?php $flag=0;?>

                  @foreach($anss as $ans)

                    @if(Auth::user() != $post->users)

                      @if((Auth::user()->id == $ans->users_id) && ($post->id == $ans->post_id))
                      
                       <?php $flag=1;?>

                      @endif

                    @endif

                  @endforeach

                 @if(Auth::user() != $post->users)

                   @if($flag == 0)

                      <blockquote>
                                <p> Question :</p>
                                <p>{{ $post->que }} </p>
                                <header>Select The Correct Option :</header>
                                  <form action="{{ route('submit.ans') }}" method='post'>

                                    <input type="radio" name="option" value="A" checked>  A).   {{ $post->option_a }} <br>
                                    <input type="radio" name="option" value="B">  B).   {{ $post->option_b }} <br>
                                    <input type="radio" name="option" value="C">  C).   {{ $post->option_c }} <br>
                                    <input type="radio" name="option" value="D">  D).   {{ $post->option_d }} <br>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <footer>Posted by {{ $post->users->Name }} on <cite title="Source Title">{{ $post->created_at}}</cite></footer><br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">

                                  </form>
                      </blockquote>

                      <?php $question=1;?>

                    @endif

                  @endif

            @endforeach

          @if($question==0)
          <h3>Sorry ! No Questions Available. Please Come Back After Some Time..</h3>
          @endif



        </div>         
      </section>




    </body>

</html>