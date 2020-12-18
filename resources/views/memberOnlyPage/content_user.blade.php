<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>{{$title}}</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="{{asset('assets/css/bootstrap-datepicker.css')}}" rel="stylesheet" type="text/css">
	<link href="./css/prettify-1.0.css" rel="stylesheet">
	
	<script type="text/javascript" src="{{asset('assets/js/jquery-1.11.0.min.js')}}"> </script>
	<script type="text/javascript" src="{{asset('assets/js/ckeditor/ckeditor.js')}}"> </script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"> </script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap-filestyle.min.js')}}"> </script>
	<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"> </script>

</head>
 



  

	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-10 ">
				
				
				{!! Form::open(['url' => route('UserEdit',array('user'=>$user['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
						<fieldset>
							<!-- Form Name -->
							<legend>User profile</legend>
						<div class="form-group">
							
							<div class="col-md-4">
								<div class="input-group">
									
					
								</div>
							</div>
						</div>
						<div class="form-group">
							
							<div class="col-md-4">
								<div class="input-group">
									
								
								</div>
							</div>
						</div>
							<!-- Form Name -->
							<legend>User profile form requirement</legend>
							<div class="form-group">
								
							</div>
							<!-- Text input-->
							<div class="form-group">
								{!! Form::label('account_name', 'Account name (Borrower`s Name):',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-4">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i>
									</div>										
							{!! Form::text('account_name', old('account_name'), ['id'=>'account_name','class' => 'form-control input-md','placeholder'=>'Account name (Borrowers Name)']) !!}
								</div>
							</div>
							</div>
							
							
							<!-- Text input-->
							
							<!-- Text input-->
							<!-- Text input-->
							<div class="form-group">
								{!! Form::label('contact_name ', 'Contact name :',['class'=>'col-md-4 control-label']) !!}
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										{!! Form::text('contact_name', old('contact_name'), ['id'=>'contact_name ','class' => 'form-control input-md','placeholder'=>'Contact name']) !!}
									</div>
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								{!! Form::label('ssn', 'Social Security Number:',['class'=>'col-md-4 control-label']) !!}
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										{!! Form::text('ssn', old('ssn'), ['id'=>'ssn ','class' => 'form-control input-md','placeholder'=>'Social Security Number']) !!}
									</div>
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="Phone number ">Home phone number(incl.area code) </label>
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>

										</div>
										<input id="phone1" name="phone1" type="text" placeholder="Primary Phone number " class="form-control input-md">

									</div>
									

								</div>
							</div>
							<!-- Text input-->
							<div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
								{!! Form::label('date_of_birth', 'Date Of Birth:',['class'=>'col-md-4 control-label']) !!}
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i></div>
										<input type="text" class="form-control" name="date_of_birth" placeholder="Date Of Birth" required="" id="datepicker" value="{{ old("date_of_birth") }}">
										{!! $errors->first('date_of_birth','
										<span class="help-block">:message</span>') !!}
									</div>
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								{!! Form::label('yrsschool', 'Yrs.School:',['class'=>'col-md-4 control-label']) !!}
								<div class="col-md-4">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										{!! Form::text('yrsschool', old('yrsschool'), ['id'=>'yrsschool','class' => 'form-control input-md','placeholder'=>'Yrs.school']) !!}
									</div>
								</div>
							</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="radios">Marital Status:</label>
							<div class="col-md-4">
								<label class="radio-inline" for="radios-0">
								<input type="radio" name="maritalstatus" value="Married (includes registered domestic partners)" checked="checked">
									Married (includes registered domestic partners)
								</label><br>
								<label class="radio-inline" for="radios-1">
								<input type="radio" name="maritalstatus" value="Unmarried (includes, divorces, widowed)">
									Unmarried (includes, divorces, widowed)
								</label><br>
								<label class="radio-inline" for="radios-1">
								<input type="radio" name="maritalstatus" value="Single (never been married)">
									Single (never been married)
								</label><br>
								<label class="radio-inline" for="radios-1">
								<input type="radio" name="maritalstatus" value="Separated">
									Separated
								</label><br>
							</div>
						</div>
						


							<div class="form-group">
								<label class="col-md-4 control-label col-xs-12" for="Present Address">Present Address</label>
								<div class="col-md-2  col-xs-4">
									<input id="pstreet" name="pstreet" type="text" placeholder="Street" class="form-control input-md ">
								</div>
								<div class="col-md-2 col-xs-4">
									<input id="pcity" name="pcity" type="text" placeholder="City" class="form-control input-md ">
								</div>
								<div class="col-md-2 col-xs-4">
									<input id="pstate" name="pstate" type="text" placeholder="State" class="form-control input-md ">
								</div>
								<div class="col-md-2 col-xs-4">
									<input id="pzip" name="pzip" type="text" placeholder="Zip" class="form-control input-md ">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label col-xs-12" for="Mailing Address">Mailing Address</label>
								<div class="col-md-2  col-xs-4">
									<input id="mstreet" name="mstreet" type="text" placeholder="Street" class="form-control input-md ">
								</div>
								<div class="col-md-2 col-xs-4">
									<input id="mcity" name="mcity" type="text" placeholder="City" class="form-control input-md ">
								</div>
								<div class="col-md-2 col-xs-4">
									<input id="mstate" name="mstate" type="text" placeholder="State" class="form-control input-md ">
								</div>
								<div class="col-md-2 col-xs-4">
									<input id="mzip" name="mzip" type="text" placeholder="Zip" class="form-control input-md ">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label col-xs-12" for="Former Address">Former Address</label>
								<div class="col-md-2  col-xs-4">
									<input id="fstreet" name="fstreet" type="text" placeholder="Street" class="form-control input-md ">
								</div>
								<div class="col-md-2 col-xs-4">
									<input id="fcity" name="fcity" type="text" placeholder="City" class="form-control input-md ">
								</div>
								<div class="col-md-2 col-xs-4">
									<input id="fstate" name="fstate" type="text" placeholder="State" class="form-control input-md ">
								</div>
								<div class="col-md-2 col-xs-4">
									<input id="fzip" name="fzip" type="text" placeholder="Zip" class="form-control input-md ">
								</div>
							</div>

						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-10">
								{!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-10">
								{!! Form::button('Logout', ['class' => 'btn btn-primary','type'=>'submit']) !!}
							</div>
						</div>
							

						</fieldset>
					{!! Form::close() !!}
					
				</div>
				<!--<div class="col-md-2 hidden-xs">
					<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
				</div>-->


			</div>
		</div>


	</body>



<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"> </script>

<script type="text/javascript" src="{{asset('assets/js/bootstrap-datepicker.js')}}"> </script>
<script>
	$('#datepicker').datepicker({
	format: 'yyyy/mm/dd',
		autoclose: true
	});
</script>

