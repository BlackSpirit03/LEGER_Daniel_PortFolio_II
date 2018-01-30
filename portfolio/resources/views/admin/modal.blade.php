<!-- Modal Made or Customized by DLEGER -->

<!-- Modal -->
<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	<div class="modal-content">

		<div class="modal-header btn-danger">
		<h4 class="modal-title" id="myModalLabel">
			<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;<strong>@lang('Deletion of a record')&nbsp;!</strong></h4>
		</div>

		<div class="modal-body text-danger">
		<p>@lang('You are about to delete one record and this action is irreversible')&nbsp;!</p>
		<p>@lang('Are you sure you want to do that')&nbsp;?</p>
		</div>

		<div class="modal-footer justify-content-center">
		<button type="button" class="modal-button col-4 btn btn-success btn-sm" data-dismiss="modal" style="width: 100px;">@lang('No')</button>
		<button id="btdel" href="#" type="button" class="modal-button col-4 btn btn-danger btn-sm" style="width: 100px;">@lang('Yes')</button>
		</div>

	</div>
	</div>
</div> <!-- End of Modal -->