<!DOCTYPE html lang="en">
<html>
    <head>
        <title>VIEW QUESTIONS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


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
                <a class="navbar-brand">Hi {{ Auth::user()->Name }}!</a>
                <a class="navbar-brand" href="{{ route('dashboard') }}">Home</a>
              </div>
             
              <ul class="nav navbar-nav navbar-right">
                  <li><a >Your Score : {{ Auth::user()->score }}</a></li>
                  <li><a href="{{ route('logout') }}">Logout</a></li>
                  
              </ul>
            </div><!-- /.container-fluid -->
          </nav>
        </header>

      

@include('includes.message-block')     <!-- /.For Displaying the Error -->



      <section class="que">
        <div class="col-md-6 col-md-offset-3">
          <header><h3>Your Questions</h3></header>

          
          <?php $question=0;?>

            @foreach($posts as $post)

                <?php $flag=0;?>

                 @if(Auth::user() == $post->users)

                   @if($flag == 0)

                   <article class="article" data-postid="{{ $post->id }}" >

                      <blockquote>
                                <p> Question :</p>
                                <p>{{ $post->que }} </p>
                                <header>Options :</header><br>
                                 
                                    A : <p style="display:inline">{{ $post->option_a }} </p><br>
                                    B : <p style="display:inline">{{ $post->option_b }} </p><br>
                                    C : <p style="display:inline">{{ $post->option_c }} </p><br> 
                                    D : <p style="display:inline">{{ $post->option_d }} </p><br>

                                    @if($post->ans == 'A')   

                                      Correct Answer : <p style="display:inline">A</p><br>     

                                      @elseif ($post->ans == 'B') 

                                        Correct Answer : <p style="display:inline">B</p><br>      

                                          @elseif ($post->ans == 'C')                                     
                                      
                                            Correct Answer : <p style="display:inline">C</p><br>     

                                              @else             

                                                Correct Answer : <p style="display:inline">D</p><br>                                    
                                    @endif

                                    <footer>Posted by You on <cite title="Source Title">{{ $post->created_at}}</cite></footer><br>

                                    <div class="edit">

                                      <a class="edit_que" href="/edit">Edit This Post</a>
                                    
                                    </div>

                      </blockquote>

                  </article>

                      <?php $question=1;?>

                    @endif

                  @endif

            @endforeach

          @if($question==0)
          <h3>Sorry ! You haven't submitted any questions yet..</h3>
          @endif



        </div>  



        <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-labelledby="myModalLabel" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Your Question</h4>
            </div>
            <div class="form-group">
            <label for="recipient-name" class="control-label">QUESTION:</label>
            <input type="text" class="form-control" id="que">
            </div>
            <div class="form-group">
            <label for="recipient-name" class="control-label">OPTION A:</label>
            <input type="text" class="form-control" id="option_a">
            </div>
            <div class="form-group">
            <label for="recipient-name" class="control-label">OPTION B:</label>
            <input type="text" class="form-control" id="option_b">
            </div>
            <div class="form-group">
            <label for="recipient-name" class="control-label">OPTION C:</label>
            <input type="text" class="form-control" id="option_c">
            </div>
            <div class="form-group">
            <label for="recipient-name" class="control-label">OPTION D:</label>
            <input type="text" class="form-control" id="option_d">
            </div>
            <div class="form-group">
            <label for="recipient-name" class="control-label">CORRECT ANSWER:</label>
            <input type="text" class="form-control" id="ans">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->






      </section>

      


                    <script>
                    var token = '{{ Session::token() }}';
                    var url = '{{ route('edit') }}';
                    </script>
                 

     




    <script src="{{ URL::to('src/js/app.js') }}"></script>

</html>