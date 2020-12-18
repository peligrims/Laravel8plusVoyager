<head>
	<title>Upload document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script>
</head>

 <div class="wrapper container-fluid">
 <div class="container">
	<div class="row">
	<div class="form-group">
		<div>
			<form action="/upload" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<br>
			{!! Form::label('name_loan_condition', 'Loan condition:',['class'=>'col-md-12 form-control']) !!}
		<div>

		{!! Form::select('loan_condition_id', $loan_conditions, ['class'=>'col-md-12 form-control', 'name_loan_condition' => 'name_loan_condition']) !!}
</div>
		</div>
	</div>
		<br>
	<div class="form-group">
		{!! Form::label('files ', 'Upload File:',['class'=>'col-xs-2 control-label']) !!}
		
		<input type="file" class="form-control" name="files" </input>
		<br>
		<div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0;">
					<span class="sr-only">60% Complete</span>
				</div>
			</div>
		</div>							
			<br>
	<div class="form-group">
			<input type="submit" class="btn btn-sm btn-danger" value="Upload" OnClick="a();">
			<a href="/uploadfile/" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
		</div>	
	</div>
</div>
</div>
 <script>
	function a()
	{
	var value = 0;

	function barAnim()
	{
		value += 25;
		$(".progress-bar").css("width", value + "%").attr("aria-valuenow", value);
		if (value == 25 || value == 55 || value == 85) {
			return setTimeout(barAnim, 1500);
		}
		return value >= 100 || setTimeout(barAnim, 50);
	}

	setTimeout(barAnim, 100);
	}
 </script>