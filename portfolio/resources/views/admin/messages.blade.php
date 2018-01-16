<!-- Made or Customized by DLEGER -->
@extends('layouts.app')

@section('content')
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
							  	<td rowspan="2" style="vertical-align:middle">@if($lineoftable->flag_urgent == 1)<i class="fa fa-ambulance" aria-hidden="true"></i>@endif</td>
								<td>{{ $lineoftable->name_contact }}</td>
								<td>{{ $lineoftable->company_contact }}</td>
								<td>{{ $lineoftable->phone_contact }}</td>
								<td>{{ $lineoftable->email }}</td>
								<td>{{ $lineoftable->created_at }}</td>
								<td rowspan="2" style="vertical-align:middle"><a href="{{ route('messages_del', $lineoftable->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								<td rowspan="2" style="vertical-align:middle"><a data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
							</tr>
							<tr>
								<td colspan="5"><strong>@lang('Message'):</strong> {{ $lineoftable->message }}</td>
						  	</tr>
						  @endforeach
						</tbody>
						
					  </table>

					  <!-- Modal -->
					  <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
					        	<button type="button" class="modal-button col-4 btn btn-success btn-sm" data-dismiss="modal" >@lang('No')</button>
					        	<button type="button" class="modal-button col-4 btn btn-danger btn-sm" style="width: 100px;">@lang('Yes')</button>
					        </div>
					      </div>
					    </div> -->
					  </div> <!-- End of Modal -->

				</div>

				<div class="panel-footer">
					{{ $listMessages->links() }}
				</div>
				
			</div>

		</div>
	</div>
</div>
@endsection
