<!-- Made or Customized by DLEGER -->
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-primary">
				<div class="panel-heading"><i class="fa fa-user" aria-hidden="true"></i></i>&nbsp;@lang('Personals')</div>

				<div class="panel-body">
					<table class="table table-striped table-responsive">

						<thead>
						  <tr>
							<th><i class="fa fa-flag-o" aria-hidden="true"></i></th>
							<th>@lang('Short Label')</th>
							<th>@lang('Detail')</th>
							<th>@lang('Date Start')</th>
							<th>@lang('Date End')</th>
							<th><span class=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></th>
						  </tr>
						</thead>

						<tbody>
						  @foreach($listPersonals as $lineoftable)
						  <tr>
							<td>{{ $lineoftable->language }}</td>
							<td>{{ $lineoftable->short_label }}</td>
							<td>{{ $lineoftable->detail }}</td>
							<td>{{ $lineoftable->date_start }}</td>
							<td>{{ $lineoftable->date_end }}</td>
							<td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
						  </tr>
						  @endforeach
						</tbody>
						
					</table>
				</div>

				<div class="panel-footer">
					{{ $listPersonals->links() }}
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection
