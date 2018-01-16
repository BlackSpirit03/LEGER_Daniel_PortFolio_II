<!-- Made or Customized by DLEGER -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	<link href="/css/style.css" type="text/css" rel="stylesheet">

</head>

<body style="background: #000030">

	<!-- Modal -->
	<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">

		  <div class="modal-header btn-danger">
			<h4 class="modal-title" id="myModalLabel">
			  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;<strong>@lang('Deletion of a Message')&nbsp;!</strong></h4>
		  </div>

		  <div class="modal-body text-danger">
			<p>@lang('You are about to delete a message and this action is irreversible') !</p>
			<p>@lang('Are you sure you want to do that')&nbsp;?</p>
		  </div>

		  <div class="modal-footer align-content-center">
			<button type="button" class="modal-button col-4 btn btn-success btn-sm" data-dismiss="modal" style="width: 100px;">@lang('No')</button>
 			<button id="btdel" href="#" type="button" class="modal-button col-4 btn btn-danger btn-sm" style="width: 100px;">@lang('Yes')</button>
		  </div>

		</div>
	  </div>
	</div> <!-- End of Modal -->

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0">
				<div class="panel panel-danger">
					<div class="panel-heading"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;@lang('Messages') - <span class="label label-danger">{{ $nbrOfMessages }}</span></div>

					<div class="panel-body">
						
						<table class="table table-striped table-responsive">
							<thead>
							  <tr>
								<th><i class="fa fa-hand-paper-o" aria-hidden="true"></i></th>
								<th>@lang('Contact')</th>
								<th>@lang('Company')</th>
								<th>@lang('Phone')</th>
								<th>@lang('Email')</th>
								<th>@lang('Date')</th>
								<th><span class=""><i class="fa fa-trash" aria-hidden="true"></i></span></th>
							  </tr>
							</thead>

							<tbody>
							  @foreach($listMessages as $lineoftable)
									
								  <tr>
									<td>@if($lineoftable->flag_urgent == 1)<i class="fa fa-ambulance" aria-hidden="true"></i>@endif</td>
									<td>{{ $lineoftable->name_contact }}</td>
									<td>{{ $lineoftable->company_contact }}</td>
									<td>{{ $lineoftable->phone_contact }}</td>
									<td>{{ $lineoftable->email }}</td>
									<td>{{ $lineoftable->created_at }}</td>

									<td><a href="{{ route('testdestroy', $lineoftable->id) }}">
										<i class="validsup fa fa-trash-o" aria-hidden="true"></i></a></td>

								  <tr>
									<td>{{ $lineoftable->message }}</td>
								  </tr>

							  @endforeach
							</tbody>
						</table>

					</div>

					<div class="panel-footer">
						<p>Fin de la table</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

<script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript">

$(document).ready(function(){

	// Store some value before to show the modal
	$('.validsup').click(function(e) {
		e.preventDefault();
		$('#btdel').attr('href',$(this).parent().attr('href'));

		// Show the Modal on load
		$("#MyModal").modal("show");
		$legend = "Etes-vous certain de vouloir effacer ce message ?"
		$(".modal-body").text($legend);
		 
	});

    // Hide the Modal
    $("#btdel").click(function(){

        $("#MyModal").modal("hide");
        
    });
});

</script>

</html>
