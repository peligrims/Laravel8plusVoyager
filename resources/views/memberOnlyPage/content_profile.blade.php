<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">

	<title>Member Profile alpharock.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<style type="text/css">
		body{
			background: -webkit-linear-gradient(left, #3931af, #00c6ff);
		}
		
		.emp-profile{
			padding: 3%;
			margin-top: 3%;
			margin-bottom: 3%;
			border-radius: 0.5rem;
			background: #fff;
		}
		.profile-img{
			text-align: center;
		}
		.profile-img img{
			width: 70%;
			height: 100%;
		}
		.profile-img .file {
			position: relative;
			overflow: hidden;
			margin-top: -20%;
			width: 70%;
			border: none;
			border-radius: 0;
			font-size: 15px;
			background: #212529b8;
		}
		.profile-img .file input {
			position: absolute;
			opacity: 0;
			right: 0;
			top: 0;
		}
		.profile-head h5{
			color: #333;
		}
		.profile-head h6{
			color: #0062cc;
		}
		.profile-edit-btn{
			border: none;
			border-radius: 1.5rem;
			width: 70%;
			padding: 2%;
			font-weight: 600;
			color: #6c757d;
			cursor: pointer;
		}
		.proile-rating{
			font-size: 12px;
			color: #818182;
			margin-top: 5%;
		}
		.proile-rating span{
			color: #495057;
			font-size: 15px;
			font-weight: 600;
		}
		.profile-head .nav-tabs{
			margin-bottom: 5%;
		}
		.profile-head .nav-tabs .nav-link{
			font-weight: 600;
			border: none;
		}
		.profile-head .nav-tabs .nav-link.active{
			border: none;
			border-bottom: 2px solid #0062cc;
		}
		.profile-work{
			padding: 14%;
			margin-top: -15%;
		}
		.profile-work p{
			font-size: 12px;
			color: #818182;
			font-weight: 600;
			margin-top: 10%;
		}
		.profile-work a{
			text-decoration: none;
			color: #495057;
			font-weight: 600;
			font-size: 14px;
		}
		.profile-work ul{
			list-style: none;
		}
		.profile-tab label{
			font-weight: 600;
		}
		.profile-tab p{
			font-weight: 600;
			color: #0062cc;
		} </style>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"> </script>
	<script type="text/javascript">
		window.alert = function() {};
		var defaultCSS = document.getElementById('bootstrap-css');
		function changeCSS(css)
		{
			if (css)
				$('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
			else
				$('head > link').filter(':first').replaceWith(defaultCSS);
		}
		$( document ).ready(function() {
			var iframe_height = parseInt($('html').height());
			window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
		});
	</script>
</head>
<body>
	<div class="container emp-profile">
		<form method="post">
			<div class="row">
				<div class="col-md-4">
					<div class="profile-img">
						
						<div class="file btn btn-lg btn-primary">
							Change Photo
							<input type="file" name="file"/>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="profile-head">
						<h5>
							{{ $user->contact_name  }}
						</h5>
						<h6>
						Mamber 
						</h6>
						
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
				<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><h5>Logout</h5></a></li>
					{!! Form::open(['url' => route('UpdateEdit',array('user'=>$user['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
					
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="profile-work">
			<p>WORK LINK</p>
						<div >		
							<button type="button" style="width: 100%;">
								<a href="{{route('pats')}}">My Term Sheet</a></button><br>
			</div>
						<p>LOAN APPLICATIONS</p>
						<div >
							<button type="button" style="width: 100%;">
								<a href="{{route('palaadd')}}">Add my Loan Application</a></button>
			</div>
			
						<button type="button" style="width: 100%;">
							<a href="{{route('palaView')}}">View Loan Application</a></button>
				
				
			<p>UPLOAD DOCUMENTS</p>	
						<button type="button" style="width: 100%;">
							<a href="{{route('uploadfile')}}">My Documents for Uploads</a></button>						
						</div>
						</div>
				
				<!--Правый сайд бар-->
				
				<div class="col-md-8">
					<div class="tab-content profile-tab" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row">
								<div class="col-md-6">
									<label>User Id</label>
								</div>
								<div class="col-md-6">
									<p>{{ $user->id }}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Name</label>
								</div>
								<div class="col-md-6">
									<p>{{ $user->contact_name }}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Email</label>
								</div>
								<div class="col-md-6">
									<p>{{ $user->email }}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Home Phone</label>
								</div>
								<div class="col-md-6">
									<p>{{ $user->phone1}}</p>
								</div>
							</div>
							
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row">
								<div class="col-md-6">
									<label>Social Security Number</label>
								</div>
								<div class="col-md-6">
									<p>{{ $user->ssn}}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Date of Birth</label>
								</div>
								<div class="col-md-6">
									<p>{{$user->date_of_birth}}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Present Address(street,city,state,Zip)</label>
								</div>
								<div class="col-md-6">
									<p>{{ $user->pstreet}},{{$user->pcity}},{{$user->pstate}},{{$user->pzip}}</p>
								
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Mailing Address(street,city,state,Zip)</label>
								</div>
								<div class="col-md-6">
									<p>{{ $user->mstreet}},{{$user->mcity}},{{$user->mstate}},{{$user->mzip}}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Former Address(street,city,state,Zip)</label>
								</div>
								<div class="col-md-6">
									<p>{{$user->fstreet}},{{$user->fcity}},{{$user->fstate}},{{$user->fzip}}</p>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--<div>
						<table border="1" width="400" height="25">
							<thead>
								<tr>
									<th>№ ID</th>
									<th>Loan Condition</th>
									<th>File name</th>
									<th>Status</th>
									<th>Date create</th>
									<th>Удалить</th>
								</tr>
							</thead>
							<tbody>

						

								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>

						


							</tbody>
							
							
							
						</table>
					</div>-->
					
				</div>
				<!--Правый футер-->
				
			</div>
		</form>
	</div>
	<script type="text/javascript">
	</script>
	

	<script>
	var button = document.querySelector('button');
	var container = document.querySelector('.container');
	var checkmark = document.querySelector('svg');
	var className = "animate";

	button.addEventListener('click', function(){
	if (!checkmark.classList.contains(className)) {
	checkmark.classList.add(className);

	setTimeout(function(){
	checkmark.classList.remove(className);
	}, 1700);
	}
	})
	</script>
</body>