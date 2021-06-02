@extends('layouts.app')

@section('login', 'Login')

@section('custom_css')

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<style type="text/css">
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
</style>

@endsection

@section('content')

<div class="container" style="margin-bottom: 15px;">

	<nav class="navbar navbar-expand navbar-light bg-light" style="border: 1px solid grey; border-radius: 5px;">

		<a class="navbar-brand" href="/"><img src="/images/logo.png" class="img-responsive"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto"></ul>
		    <form class="form-inline my-2 my-lg-0">
		      <a class="nav-link" href="/logout" style="text-decoration: none; color: black;">Logout</a>
		    </form>
		  </div>
	</nav>
</div>

<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<input type="file" class="btn btn-outline-primary" value="Change Photo">
									<hr>
									<h4>Name</h4>
									<p class="text-secondary mb-1">Previous Position</p>
									<p class="text-muted font-size-sm">Living city</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
                    @error('cv_creation_error')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
					<form action="/cv-save" method="post">
                    @csrf
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="name" value="">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="email" class="form-control" value="">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="address" class="form-control" value="">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Linkedin</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="linkedin" value="">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Skype</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="skype" class="form-control" value="">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Mobile Number</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="mobile_number" class="form-control" value="">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Profile Summary</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<textarea class="form-control" name="profile_summary" rows="4" cols="50"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" value="Save Changes">
								</div>
							</div>
						</div>
					</div>

					</form>

				</div>
			</div>
		</div>
	</div>

@endsection
