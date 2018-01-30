<!-- Made or Customized by DLEGER -->
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">

			<!-- PANEL -->
			<div class="panel panel-primary">

				<!-- PANEL HEADING -->
				<div class="panel-heading">
					<i class="fa fa-gears" aria-hidden="true"></i>
					&nbsp;@lang('Professionals')
				</div>

				<!-- PANEL BODY-->
				<div class="panel-body">
					
					<!-- FORM -->
					<div class="container-fluid">

						<div class="row">

							<form action="{{ route('professionals.store') }}" class="form-horizontal" role="form" method="post">
								
								<!-- Token and user_id parameters -->
								{{ csrf_field() }}
								<input type="hidden" name="user_id" value="{{env('APP_OWNER_USERID')}}">

								<!-- First Line of Form -->
								<div class="row">
									<div class="col-md-12">
										<div class="row">

											<!-- Language -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label" for="">@lang('Language')</label>
													<div class="controls {{ $errors->has('language') ? 'has-error' : '' }}">
														<select id="level" class="form-control" data-role="select" selected="selected" name="language" value="">
															<option value="en" selected>en</option>
															<option value="fr">fr</option>
														</select>
														
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

								<hr>

								<!-- Short Label -->
								<div class="row">
									<div class="col-md-12">
										<div class="">
											<label class="control-label" for="short_label">@lang('Short Label') @if($errors->has('short_label')) Remplissez ce champ @endif</label>
											<div class="controls {{ $errors->has('short_label') ? 'has-error' : '' }}">
												<input id="short_label" type="text" class="form-control" data-role="text" name="short_label" value="">
											</div>
										</div>
									</div>
								</div>

								<!-- Detail -->
								<div class="row">
									<div class="col-md-12">
										<div class="">
											<label class="control-label" for="detail">@lang('Details')</label>
											<div class="controls">
												<textarea id="detail" rows="7" class="form-control" data-role="textarea" name="detail"></textarea>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="row form-group">

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8"></div>
									<div class="col-md-2">
										<a class="btn btn-danger form-control" href="{{ route('professionals.index') }}">@lang('Cancel')</a>
									</div>
									<div class="col-md-2">
										<button class="btn btn-block btn-success" type="submit">@lang('Validate')</button>
									</div>
								</div>

							</form> <!-- End of Form -->

						</div>
					</div>
				</div> <!-- End of Panel Body -->

				<!-- PANEL FOOTER -->
				<div class="panel-footer container-fluid">
					<div class="row">
						@include('admin.flash-message')
					</div>
				</div>

			</div> <!-- End of Panel -->
		</div> <!-- End of Col -->
	</div> <!-- End of Row -->
</div> <!-- End of Container -->
@endsection
