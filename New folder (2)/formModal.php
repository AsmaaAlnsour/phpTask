//formModal.php
<!-- add/edit form modal -->
<div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add/Edit Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="name" name="name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Position:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="position" name="position" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Office:</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="office" name="office" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Photo:</label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="photo" id="userphoto">
                <label class="custom-file-label" for="userphoto">Choose file</label>
              </div>
            </div>
          </div>
 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" id="addButton">Submit</button>
          <input type="hidden" name="action" value="addnew">
          <input type="hidden" name="employeeid" id="employeeid" value="">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- add/edit form modal end -->