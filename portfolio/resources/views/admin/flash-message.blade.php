<!-- Made or Customized by DLEGER -->

@if ($errors->any())
	<div class="alert alert-dark">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		Please check the form above for following errors :
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif