<!-- Made or Customized by DLEGER -->
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-danger">
				<div class="panel-heading"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;@lang('Messages') - <span class="label label-danger">{{ $nbrOfMessages }}</span></div>

				<div class="panel-body">
					<table class="table table-responsive">
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
							<tr class="line1">
								<td rowspan="2" style="vertical-align:middle">@if($lineoftable->flag_urgent == 1)
									<i class="fa fa-ambulance" aria-hidden="true"></i>@endif</td>
								<td>{{ $lineoftable->name_contact }}</td>
								<td>{{ $lineoftable->company_contact }}</td>
								<td>{{ $lineoftable->phone_contact }}</td>
								<td>{{ $lineoftable->email }}</td>
								<td>{{ $lineoftable->created_at }}</td>
								<td rowspan="2" style="vertical-align:middle">
									<a href="{{ route('messages.destroy', $lineoftable->id) }}">
										<i class="validsup fa fa-trash-o" aria-hidden="true"></i></a></td>
							</tr>
							<tr class="line2">
								<td colspan="5"><strong>@lang('Message'):</strong> {{ $lineoftable->message }}</td>
							</tr>
						  @endforeach
						</tbody>
					</table>
				</div>

				<div class="panel-footer">{{ $listMessages->links() }}</div>

			</div>

		</div>
	</div>
</div>
@endsection
