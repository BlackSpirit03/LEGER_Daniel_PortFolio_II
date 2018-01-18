<!-- Made or Customized by DLEGER -->
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-primary">
				<div class="panel-heading"><i class="fa fa-gears" aria-hidden="true"></i>&nbsp;@lang('Skills')</div>

				<!-- PANNEL -->
				<div class="panel-body">

					<!-- FORM -->
					<form class="form-horizontal" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}

						<!-- LANGUAGE -->
						<div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
							<label for="language" class="col-md-4 control-label">@lang('Language')</label>

							<div class="col-md-6">
								<input id="language" type="text" class="form-control" name="language" value="{{ old('language') }}" required autofocus>

								@if ($errors->has('language'))
									<span class="help-block">
										<strong>{{ $errors->first('language') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<!-- SHORT_LABEL -->
						<div class="form-group{{ $errors->has('short_label') ? ' has-error' : '' }}">
							<label for="short_label" class="col-md-4 control-label">@lang('Short Label')</label>

							<div class="col-md-6">
								<input id="short_label" type="email" class="form-control" name="short_label" value="{{ old('short_label') }}" required>

								@if ($errors->has('short_label'))
									<span class="help-block">
										<strong>{{ $errors->first('short_label') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<!-- DELAIL -->
						<div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
							<label for="detail" class="col-md-4 control-label">@lang('Detail')</label>

							<div class="col-md-6">
								<input id="detail" type="text" class="form-control" name="detail" required>

								@if ($errors->has('detail'))
									<span class="help-block">
										<strong>{{ $errors->first('detail') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<!-- LEVEL -->
						<div class="form-group">
							<label for="level" class="col-md-4 control-label">@lang('Level')</label>

							<div class="col-md-6">
								<input id="level" type="text" class="form-control" name="level" required>
							</div>
						</div>

						<!-- SUBMIT -->
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									@lang('Save')
								</button>
							</div>
						</div>

					</form> <!-- End of Form -->
				</div> <!-- End Panel Body -->
			</div> <!-- End Panel -->
		</div> <!-- End Col -->
	</div> <!-- End Row -->
</div> <!-- End Container -->
@endsection
