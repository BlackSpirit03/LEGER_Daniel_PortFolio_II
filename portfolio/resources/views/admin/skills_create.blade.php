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
					&nbsp;@lang('Skills')
				</div>

				<!-- PANEL BODY-->
				<div class="panel-body">
					
					<!-- FORM -->
					<div class="container-fluid">

						<div class="row">

							<form action="{{ route('skills.store') }}" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
								
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
														<select id="level" class="form-control" data-role="select" selected="selected" name="language" value="{{ old('level') }}">
															<option value="en" selected>en</option>
															<option value="fr">fr</option>
														</select>
														
													</div>
												</div>
											</div>

											<!-- Type -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label">@lang('Type of Skill')</label>
													<div class="controls {{ $errors->has('type') ? 'has-error' : '' }}" value="{{ old('type') }}">
														<label class="radio col-md-4" for="radio1">
															<input type="radio" value="1" id="radio1" name="type">@lang('Simple')
														</label>
														<label class="radio col-md-4" for="radio2">
															<input type="radio" value="2" id="radio2" name="type">@lang('Grouped')
														</label>
														<label class="radio col-md-4" for="radio3">
															<input type="radio" value="3" id="radio3" name="type">@lang('Education')
														</label>
													</div>
												</div>
											</div>

											<!-- Level -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label">@lang('Level of Skill')</label>
													<div class="controls {{ $errors->has('level') ? 'has-error' : '' }}" value="{{ old('level') }}"> 
														<select class="form-control" data-role="select" name="level">
															<option value="1">@lang('Beginner')</option>
															<option value="2">@lang('Skilled')</option>
															<option value="3">@lang('Experienced')</option>
															<option value="4">@lang('Advanced')</option>
															<option value="5">@lang('Expert')</option>
														</select>
													</div>
												</div>
											</div>

											<!-- Display Order -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label">@lang('Display Order')</label>
													<div class="controls {{ $errors->has('order') ? 'has-error' : '' }}">
														<input id="order" value="" type="text" class="form-control" data-role="numeric" data-format="integer" name="order" value="{{ old('order') }}">
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
												<input id="short_label" type="text" class="form-control" data-role="text" name="short_label" value="{{ old('short_label') }}">
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
												<textarea id="detail" rows="7" class="form-control" data-role="textarea" name="detail" value="{{ old('detail') }}"></textarea>
											</div>
										</div>
									</div>
								</div>

								<!-- logo -->
								<div class="row">
									<div class="col-md-12">
										<div class="row form-group">

											<!-- Logo -->
											<div class="col-md-4">
												<div class="">
													<label class="control-label" for="logo">@lang('Link to the image')</label>
													<div class="controls">
														<input id="logo" type="file" class="form-control" data-role="text" name="logo" value="{{ old('logo') }}" accept="image/gif, image/jpeg, image/png">
													</div>
												</div>
											</div>

											<!-- Logo Image -->
											<div class="col-md-4">
												<div class="">
													<div class="">
														<img src="">
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8"></div>
									<div class="col-md-2">
										<a class="btn btn-danger form-control" href="{{ route('skills.index') }}">@lang('Cancel')</a>
									</div>
									<div class="col-md-2">
										<button class="btn btn-success form-control" type="submit">@lang('Validate')</button>
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
