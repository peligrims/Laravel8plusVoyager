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

<div style="margin:0px 50px 0px 50px;">

	@if($files)

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>N </th>
				<th>Name document</th>
				<th>Loan condition</th>
				<th>Comment</th>				
				<th>Status</th>
				<th>Create date</th>
			
			</tr>
		</thead>
		<tbody>

			@foreach($files as $k => $file)

			<tr>

				<td>{{ $file->id}}</td>
				<td>{{ $file->filename}}</td>
				<td>{{ $file->loan_condition->name_loan_condition}}</td>
				<td>{{ $file->comment}}</td>
				<td>{{ $file->status}}</td>
				<td>{{ $file->created_at }}</td>

				
			</tr>

			@endforeach


		</tbody>
	</table>
	@endif

	{!! Html::link(route('createfile'),'Upload New Document') !!}

</div>



<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"> </script>

<script type="text/javascript" src="{{asset('assets/js/bootstrap-datepicker.js')}}"> </script>
<script>
	$('#datepicker').datepicker({
	format: 'yyyy/mm/dd',
		autoclose: true
	});
</script>

