	<!DOCTYPE html>
	<html>
	<head>
			<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<title>
			

		</title>
	</head>
	<body>

		<div class="container">
				<div class="row">
					<div class="col-lg-6-offset-3 col-lg-6">

               @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)

                              <p class="alert alert-danger">{{ $error }}</p>

                        @endforeach 

                  @endif
						

					  <form action="storeformvalues" method="post">
                              {{ csrf_field() }}
                             <div class="row">
                             	<legend> Form Registration</legend>
                               <div class="col">
                                 <input type="text" name="fname" value="{{old('fname')}}" class="form-control" placeholder="First name">
                               </div>
                               <div class="col">
                                 <input type="text" name="lname" value="{{old('lname')}}"class="form-control" placeholder="Last name">
                               </div> 
                                <div class="col">
                                 <input type="password" name="password" class="form-control" placeholder="password">
                               </div>
                               <div class="col">
                                 <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm  Password">
                               </div>                               
                                <div class="col">
                                 <input type="text" name="mobile" value="{{old('mobile')}}" class="form-control" placeholder="Mobile">
                               </div>
                               <div class="col">
                                 <input type="text" name="email" value="{{old('email')}}"class="form-control" placeholder="Email(Optional)">
                               </div>
                             </div>
                          
                                     

                           <br> <br>
                        

                            <input type="submit" value="upload">
                       </form>
                      

					</div>
				</div>
			</div>	
	</body>
	</html>