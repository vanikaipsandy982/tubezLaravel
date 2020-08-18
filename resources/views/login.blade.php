<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

@if(Session::has('notif'))

<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
    {{Session::get('notif')}}   
</div>
@endif

<form action="{{ url('/process') }}" method="POST" 
class="form-sign-in">
{{ csrf_field() }}
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

    <label for="txtUsername" class="sr-only">Username</label>
    <input type="text" id="txtUsername" name="txtUsername" autofocus required placeholder="Username" class="form-control">

    <label for="txtUsername" class="sr-only">Password</label>
    <input type="password" id="txtPassword" name="txtPassword" autofocus required placeholder="Password" class="form-control">

    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In" name="btnSignIn">
</form>