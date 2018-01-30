<!-- Made or Customized by DLEGER -->
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-primary">
				<div class="panel-heading">

					<div class="row">
						<div class="col-md-10">
							<i class="fa fa-industry" aria-hidden="true"></i>&nbsp;@lang('Professionals')
						</div>
						<div class="col-md-2">
							<a class="btn btn-block btn-sm btn-warning" href="{{ route('professionals.create') }}">@lang('New Entrie')</button></a>
						</div>
					</div>

				</div>

				<div class="panel-body">
					<table class="table table-striped table-responsive">

						<thead>
						  <tr>
							<th rowspan="2" style="vertical-align:bottom"><i class="fa fa-flag-o" aria-hidden="true"></i></th>
							<th rowspan="2" style="vertical-align:bottom">@lang('Short Label')</th>
							<th rowspan="2" style="vertical-align:bottom">@lang('Detail')</th>
							<th colspan="2" style="text-align:center">Date</th>
							<th rowspan="2" style="vertical-align:bottom">
								<span class="">
									<i class="fa fa-pencil-square-o"></i>
								</span>
							</th>
						  </tr>
						  <tr>
						  	<th>@lang('Start')</th>
							<th>@lang('End')</th>
						  </tr>
						</thead>

						<tbody>
						  @foreach($listProfessionals as $lineoftable)
						  <tr>
							<td>{{ $lineoftable->language }}</td>
							<td>{{ $lineoftable->short_label }}</td>
							<td>{{ $lineoftable->detail }}</td>
							<td>{{ $lineoftable->date_start }}</td>
							<td>{{ $lineoftable->date_end }}</td>
							<td><a href="{{ route('professionals.edit', $lineoftable->id) }}">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							<td><a href="{{ route('professionals.destroy', $lineoftable->id) }}">
									<i class="validsup fa fa-trash-o" aria-hidden="true"></i></a></td>
						  </tr>
						  @endforeach
						</tbody>
						
					</table> 
				</div>

				<div class="panel-footer">
					{{ $listProfessionals->links() }}
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
