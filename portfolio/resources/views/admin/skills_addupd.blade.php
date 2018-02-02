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

							<!-- Test if it's Add or UPDate -->
							@if($flagUpdate)
								<!-- Case of UPDATE -->
								<form action="{{ route('skills.update', array('skill' => $oneSkill)) }}" class="form-horizontal" role="form" method="post">
							@else
								<!-- Case of CREATE/ADD -->
								<form action="{{ route('skills.store') }}" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="skillform">
							@endif
								
								<!-- Token and user_id parameters -->
								{{ csrf_field() }}
								<input type="hidden" name="user_id" value="{{env('APP_OWNER_USERID')}}">
								
								<!-- Test if it's Add or UPDate -->
								@if($flagUpdate)
									<!-- Case of UPDATE -->
									<input type="hidden" name="_method" value="PUT">
								@endif


								<!-- First Line of Form -->
								<div class="row">
									<div class="col-md-12">
										<div class="row">

											<!-- Language -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label" for="">@lang('Language')</label>
													<div class="controls {{ $errors->has('language') ? 'has-error' : '' }}">
														<select id="language" class="form-control" data-role="select" selected="selected" name="language" value="" data-toggle="tooltip" data-placement="top" title="@lang('Select the language of displaying')">
															@if($flagUpdate)
																<option value="en" @if($oneSkill->language == 'en') selected @endif>en</option>
																<option value="fr" @if($oneSkill->language == 'fr') selected @endif>fr</option>
															@else
																<option value="en" {{old('language')=='en' ? 'selected' : ''}}>en</option>
																<option value="fr" {{old('language')=='fr' ? 'selected' : ''}}>fr</option>
															@endif
														</select>
														
													</div>
												</div>
											</div>

											<!-- Type -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label">@lang('Type of Skill')</label>
													<div class="controls {{ $errors->has('type') ? 'has-error' : '' }}" value="" data-toggle="tooltip" data-placement="top" title="@lang('Select the type of skill')">
														@if($flagUpdate)
															<label class="radio col-md-4" for="radio1">
																<input type="radio" value="1" id="radio1" name="type" @if($oneSkill->type == '1') checked @endif>Single
															</label>
															<label class="radio col-md-4" for="radio2">
																<input type="radio" value="2" id="radio2" name="type" @if($oneSkill->type == '2') checked @endif>Grouped
															</label>
															<label class="radio col-md-4" for="radio3">
																<input type="radio" value="3" id="radio3" name="type" @if($oneSkill->type == '3') checked @endif>Education
															</label>
														@else
															<label class="radio col-md-4" for="radio1">
																<input type="radio" value="1" id="radio1" name="type" {{old('type')==1 ? 'checked' : ''}}>@lang('Simple')
															</label>
															<label class="radio col-md-4" for="radio2">
																<input type="radio" value="2" id="radio2" name="type" {{old('type')==2 ? 'checked' : ''}}>@lang('Grouped')
															</label>
															<label class="radio col-md-4" for="radio3">
																<input type="radio" value="3" id="radio3" name="type" {{old('type')==3 ? 'checked' : ''}}>@lang('Education')
															</label>
														@endif
													</div>
												</div>
											</div>

											<!-- Level -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label">@lang('Level of Skill')</label>
													<div class="controls {{ $errors->has('level') ? 'has-error' : '' }}" value="" data-toggle="tooltip" data-placement="top" title="@lang('Select the level of knowledge')"> 
														<select class="form-control" data-role="select" name="level" form="skillform">
															@if($flagUpdate)
																<option value="1" @if($oneSkill->level == '1') selected @endif>Beginner</option>
																<option value="2" @if($oneSkill->level == '2') selected @endif>Skilled</option>
																<option value="3" @if($oneSkill->level == '3') selected @endif>Experienced</option>
																<option value="4" @if($oneSkill->level == '4') selected @endif>Advanced</option>
																<option value="5" @if($oneSkill->level == '5') selected @endif>Expert</option>
															@else
																<option value="1" {{old('level')==1 ? 'selected' : ''}}>@lang('Beginner')</option>
																<option value="2" {{old('level')==2 ? 'selected' : ''}}>@lang('Skilled')</option>
																<option value="3" {{old('level')==3 ? 'selected' : ''}}>@lang('Experienced')</option>
																<option value="4" {{old('level')==4 ? 'selected' : ''}}>@lang('Advanced')</option>
																<option value="5" {{old('level')==5 ? 'selected' : ''}}>@lang('Expert')</option>
															@endif
														</select>
													</div>
												</div>
											</div>

											<!-- Display Order -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label">@lang('Display Order') @if($errors->has('short_label')) @lang('Please select a number between 1 & 99') @endif</label>
													<div class="controls {{ $errors->has('order') ? 'has-error' : '' }}">
														<input id="order" value="@if($flagUpdate) {{ $oneSkill->order }} @else {{ old('order') }} @endif" type="text" class="form-control" data-role="numeric" data-format="integer" name="order" placeholder="@lang('Order number between 1 & 99')" data-toggle="tooltip" data-placement="top" title="@lang('Select the displaying order between 1 & 99')">
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
											<label class="control-label" for="short_label">@lang('Short Label') @if($errors->has('short_label')) @lang('Please, complete this field') @endif</label>
											<div class="controls {{ $errors->has('short_label') ? 'has-error' : '' }}">
												<input id="short_label" type="text" class="form-control" data-role="text" name="short_label" value="@if($flagUpdate) {{ $oneSkill->short_label }} @else {{ old('short_label') }} @endif" placeholder="@lang('Type the short label that will be displayed')" data-toggle="tooltip" title="@lang('Write a short lable as title of the skill')">
											</div>
										</div>
									</div>
								</div>

								<!-- Detail -->
								<div class="row">
									<div class="col-md-12">
										<div class="">
											<label class="control-label" for="detail">@lang('Details') @if($errors->has('short_label')) @lang('Please, complete this field') @endif</label>
											<div class="controls">
												<textarea id="detail" rows="7" class="form-control" data-role="textarea" name="detail" placeholder="@lang('Type the detail that will be displayed (including html tag if necessary)')" data-toggle="tooltip" title="@lang('Write the detail of the skill (could include html tags)')">@if($flagUpdate) {{ $oneSkill->detail }} @else {{ old('detail') }} @endif</textarea>
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
													<label class="control-label" for="logo">@lang('Select image to download')</label>
													<div class="controls">
														<input id="logo" type="file" class="form-control" data-role="text" name="logo" accept="image/gif, image/jpeg, image/png" data-toggle="tooltip" title="@lang('Select a file picture to illustrate skill')">
													</div>
													<div class="control">
														<input id="logoselect" type="text" name="logoselect" class="form-control" value="vide pour l'instant">
													</div>
												</div>
											</div>

											
										</div>
									</div>
								</div>

								<!-- Validate and Cancel Buttons -->
								<div class="row">
									<div class="col-md-8">
										<div class="col-md-4">
											<img id="test" src="{{ url('img/logos/css3.png') }}">
										</div>
										@if($flagUpdate)

											<!-- Created at -->
											<div class="col-md-4">
												<div class="">
													<label class="control-label">Created at</label>
													<div class="controls">
														<input id="" type="text" class="form-control" name="created_at" value="{{ $oneSkill->created_at }}">
													</div>
												</div>
											</div>

											<!-- Updated at -->
											<div class="col-md-4">
												<div class="">
													<label class="control-label">Updated at</label>
													<div class="controls">
														<input id="" type="text" class="form-control" name="updated_up" value="{{ $oneSkill->updated_at }}">
													</div>
												</div>
											</div>
										@endif
									</div>
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
