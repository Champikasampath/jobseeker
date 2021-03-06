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
				<div class="col-lg-12">
					<div class="card" style="padding: 15px;">
						<form >

							<div class="row">
								<div class="lg-6">
									<div class="col-sm-12">
										<h6 class="mb-0">Name</h6>
									</div>
									<div class="col-sm-12 text-secondary">
										<input type="text" class="form-control" value="">
									</div>
								</div>
								<div class="lg-6">
									<div class="col-sm-12">
										<h6 class="mb-0">Experience</h6>
									</div>
									<div class="col-sm-12 text-secondary">
										<input type="text" class="form-control" value="">
									</div>
								</div>
								<div class="lg-6">
									<div class="col-sm-12">
										<h6 class="mb-0">Salary</h6>
									</div>
									<div class="col-sm-12 text-secondary">
										<input type="text" class="form-control" value="">
									</div>
								</div>
								<div class="lg-6">
									<div class="col-sm-12">
										<h6 class="mb-0">Phone Number</h6>
									</div>
									<div class="col-sm-12 text-secondary">
										<input type="text" class="form-control" value="">
									</div>
								</div>
								<div class="lg-6">
									<div class="col-sm-12" style="padding-top: 15px;">
										<input type="submit" name="" class="btn btn-primary" value="Search">
									</div>
								</div>
							</div>

						</form>

					</div>
				</div>

				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="col-lg-12" style="padding-top: 15px;">
							<img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="Admin" class="rounded-circle p-1 bg-primary" width="100%">
						</div>
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<div class="mt-3">
									<h4>John Doe</h4>
									<p class="text-secondary mb-1">Trainee developer</p>
									<p class="text-muted font-size-sm">Colombo</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card">
						<div class="col-lg-12" style="padding-top: 15px;">
							<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="Admin" class="rounded-circle p-1 bg-primary" width="100%">
						</div>
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<div class="mt-3">
									<h4>Jane Doe</h4>
									<p class="text-secondary mb-1">Intern</p>
									<p class="text-muted font-size-sm">Gampaha</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card">
						<div class="col-lg-12" style="padding-top: 15px;">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBa838jqoj90H3aupjQZgaMikxrmoKwCoLJETeTteAG1tq8npdK3w_aXl9WWNKN-KzT4g&usqp=CAU" alt="Admin" class="rounded-circle p-1 bg-primary" width="100%">
						</div>
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<div class="mt-3">
									<h4>Roy John</h4>
									<p class="text-secondary mb-1">Software Engineer</p>
									<p class="text-muted font-size-sm">Gampola</p>
								</div>
							</div>
						</div>
					</div>
				</div>


				</div>
			</div>
		</div>
	</div>

@endsection
