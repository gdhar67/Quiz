@extends("layouts.master")
@section("content")
<section class="row new-post">
	<div class="col-md-6 col-md-offset-3">
		<header><h3>Ask a Question</h3></header>
		<form action="">
			<div class="form-group">
				<textarea class="form-control" name="new-post" rows="5" placeholder="Your Question"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</section>
<section class="row posts">
	
</section>
@endsection