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

							<form action="{{ route('skills.update', array('skill' => $oneSkill)) }}" class="form-horizontal" role="form" method="post">
								
								{{ csrf_field() }}
								<input type="hidden" name="user_id" value="{{env('APP_OWNER_USERID')}}">
								<input type="hidden" name="_method" value="PUT">

								<!-- First Line of Form -->
								<div class="row">
									<div class="col-md-12">
										<div class="row">

											<!-- Language -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label" for="">Language</label>
													<div class="controls">
														<select id="language" class="form-control" data-role="select" name="language" required="required" value="">
															<option value="en" @if($oneSkill->language == 'en') selected @endif>en</option>
															<option value="fr" @if($oneSkill->language == 'fr') selected @endif>fr</option>
														</select>
														
													</div>
												</div>
											</div>

											<!-- Type -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label">Type of Skill</label>
													<div class="controls" value="">
														<label class="radio col-md-4" for="radio1">
															<input type="radio" value="1" id="radio1" name="field5" required="required" @if($oneSkill->type == '1') checked @endif>Single
														</label>
														<label class="radio col-md-4" for="radio2">
															<input type="radio" value="2" id="radio2" name="field5" required="required" @if($oneSkill->type == '2') checked @endif>Grouped
														</label>
														<label class="radio col-md-4" for="radio3">
															<input type="radio" value="3" id="radio3" name="field5" required="required" @if($oneSkill->type == '3') checked @endif>Education
														</label>
													</div>
												</div>
											</div>

											<!-- Level -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label">Level of Skill</label>
													<div class="controls">
														<select class="form-control" data-role="select" required="required">
															<option value="1" @if($oneSkill->level == '1') selected @endif>Beginner</option>
															<option value="2" @if($oneSkill->level == '2') selected @endif>Skilled</option>
															<option value="3" @if($oneSkill->level == '3') selected @endif>Experienced</option>
															<option value="4" @if($oneSkill->level == '4') selected @endif>Advanced</option>
															<option value="5" @if($oneSkill->level == '5') selected @endif>Expert</option>
														</select>
													</div>
												</div>
											</div>

											<!-- Display Order -->
											<div class="col-md-3">
												<div class="">
													<label class="control-label">Display Order</label>
													<div class="controls">
														<input id="order" value="{{ $oneSkill->order }}" type="text" class="form-control" data-role="numeric" data-format="integer" name="order">
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
											<label class="control-label" for="short_label">Short Label</label>
											<div class="controls">
												<input id="short_label" type="text" class="form-control" data-role="text" name="short_label" value="{{ $oneSkill->short_label }}" required="required">
											</div>
										</div>
									</div>
								</div>

								<!-- Detail -->
								<div class="row">
									<div class="col-md-12">
										<div class="">
											<label class="control-label" for="detail">Details</label>
											<div class="controls">
												<textarea id="detail" rows="7" class="form-control" data-role="textarea" required="required" name="detail">{{ $oneSkill->detail }}</textarea>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="row form-group">

											<!-- Logo -->
											<div class="col-md-4">
												<div class="">
													<label class="control-label">Link to the image</label>
													<div class="controls">
														<input type="text" class="form-control" data-role="text" name="logo" value="{{ $oneSkill->logo }}">
													</div>
												</div>
											</div>

											<!-- Logo Image -->
											<div class="col-md-4">
												<div class="">
													<div class="">
														<img src="{{ $oneSkill->logo }}">
													</div>
												</div>
											</div>

											<!-- Created -->
											<div class="col-md-2">
												<div class="">
													<label class="control-label">Created at</label>
													<div class="controls">
														<input id="" type="text" class="form-control" name="created_at" value="{{ $oneSkill->created_at }}">
													</div>
												</div>
											</div>

											<!-- Updated -->
											<div class="col-md-2">
												<div class="">
													<label class="control-label">Updated at</label>
													<div class="controls">
														<input id="" type="text" class="form-control" name="updated_up" value="{{ $oneSkill->updated_at }}">
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-2">
										<a class="btn btn-block btn-danger">Cancel</a>
									</div>
									<div class="col-md-2">
										<button class="btn btn-block btn-success" type="submit">Validate</button>
									</div>
								</div>

							</form> <!-- End of Form -->

						</div>
					</div>
				</div> <!-- End of Panel Body -->

				<!-- PANEL FOOTER -->
				<div class="panel-footer container-fluid">
					<div class="row">
						<div class="col-md-8">Zone de message flash</div>
						<!-- <div class="col-md-2">
							<button class="btn btn-block btn-danger" type="reset">Cancel</button>
						</div>
						<div class="col-md-2">
							<button class="btn btn-block btn-success" type="submit">Validate</button>
						</div> -->
					</div>
				</div>

			</div> <!-- End of Panel -->
		</div> <!-- End of Col -->
	</div> <!-- End of Row -->
</div> <!-- End of Container -->
@endsection
