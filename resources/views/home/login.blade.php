<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="{{ asset('css/home/login.css') }}" rel="stylesheet" />

</head>

<body>

<div class="section">
	<div class="container">
		<div class="row full-height justify-content-center">
			<div class="col-12 text-center align-self-center py-5">
				<div class="section pb-5 pt-5 pt-sm-2 text-center">
					<h6 class="mb-0 pb-3">
						<h2>Login</h2>
					</h6> 
					
					<div class="card-3d-wrap mx-auto">
						<div class="card-3d-wrapper">
							<div class="card-front">
								<div class="center-wrap">
									<div class="section text-center">
										<form action="{{route('login')}}" method="post"
											enctype="multipart/form-data">
											{{@csrf_field()}}
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group mt-2">
												<input type="email" name="cusemail" class="form-style"
													placeholder="Your Email" id="cusemail"
													value="{{old('cusemail')}}" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
												@error('cusemail')
												<span>{{$message}}</span><br>
												@enderror
											</div>

											<div class="form-group mt-2">
												<input type="password" name="cuspass" class="form-style"
													placeholder="Your Password" id="cuspass"
													value="{{old('cuspass')}}" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
												@error('cuspass')
												<span>{{$message}}</span><br>
												@enderror

											</div>

											<div class="">
												<input class="btn mt-4" type="submit" value="Submit">
											</div>
											<p class="mb-0 mt-4 text-center link">Forgot your
												password?</p>
										</form>
									</div>
								</div>
							</div>





							{{--
							<div class="card-back">
								<div class="center-wrap">
									<div class="section text-center">
										<h4 class="mb-4 pb-3">Sign Up</h4>
									<form action="{{route('customer.reg')}}" method="post" enctype="multipart/form-data">
							{{@csrf_field()}}
							<div class="form-group">
								<input type="text" name="cusname" class="form-style"
									placeholder="Your Full Name" value="{{old('cusname')}}" id="cusname"
									autocomplete="off">
								<i class="input-icon uil uil-user"></i>
								@error('cusname')
								<span>{{$message}}</span><br>
								@enderror
							</div>

							<div class="form-group mt-2">
								<input type="email" name="cusmail" class="form-style" placeholder="Your Email"
									id="cusmail" value="{{old('cusemail')}}" autocomplete="off">
								<i class="input-icon uil uil-at"></i>
								@error('cusemail')
								<span>{{$message}}</span><br>
								@enderror
							</div>

							<div class="form-group mt-2">
								<input type="password" name="cuspass" class="form-style"
									placeholder="Your Password" id="cuspass" value="{{old('cuspass')}}"
									autocomplete="off">
								<i class="input-icon uil uil-lock-alt"></i>
								@error('cuspass')
								<span>{{$message}}</span><br>
								@enderror

							</div>

							<div class="form-group mt-2">
								<input type="text" name="cusaddress" class="form-style"
									placeholder="Your Address" id="cusaddress" value="{{old('cusaddress')}}"
									autocomplete="off">
								<i class="input-icon uil uil-lock-alt"></i>
								@error('cusaddress')
								<span>{{$message}}</span><br>
								@enderror

							</div>

							<div class="form-group mt-2">
								<input type="text" name="cusphone" class="form-style"
									placeholder="Your Phone No" id="cusphone" value="{{old('cusphone')}}"
									autocomplete="off">
								<i class="input-icon uil uil-lock-alt"></i>

								@error('cusphone')
								<span>{{$message}}</span><br>
								@enderror
							</div>

							<div class="form-group mt-2">
								<input type="file" name="cusimage" class="form-style" placeholder="Your Image"
									id="cusimage" value="{{old('cusimage')}}" autocomplete="off">
								<i class="input-icon uil uil-lock-alt"></i>

								@error('cusimage')
								<span>{{$message}}</span><br>
								@enderror
							</div>
							<a href="#" class="btn mt-4">submit</a>
							<div class="">
								<input class="btn mt-4" type="submit" value="Submit">
							</div>
							</form> --}}
							{{-- </div>
								</div>
							</div> --}}

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('sweetalert::alert')
</body>