 <!-- Modal Made or Customized by DLEGER -->

<!-- Delete Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <h4 class="modal-title" id="myModalLabel">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;<strong>@lang('Deletion of a Message')&nbsp;!</strong></h4>
      </div>
      <div class="modal-body text-danger">
        <p>@lang('You are about to delete a message and this action is irreversible') !</p>
        <p>@lang('Are you sure you want to do that')&nbsp;?</p>
      </div>
      <div class="modal-footer align-content-center">
        <button type="button" class="modal-button col-4 btn btn-success btn-sm" style="width: 100px;" data-dismiss="modal" >@lang('No')</button>
        <button type="button" class="modal-button col-4 btn btn-danger btn-sm" style="width: 100px;">@lang('Yes')</button>
      </div>
    </div>
  </div>
</div> <!-- End of Delete Modal -->