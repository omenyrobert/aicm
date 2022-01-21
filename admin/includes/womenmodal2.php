<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Budget</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="addbudget3.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="item" class="col-sm-3 control-label">Item</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="item" name="item" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="unicost" class="col-sm-3 control-label">Unit Cost</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="unicost" name="unicost" required>
                    </div>
                </div>

              
                 <div class="form-group">
                    <label for="qty" class="col-sm-3 control-label">Qty</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="qty" name="qty" required>
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="comment" class="col-sm-3 control-label">Comment</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="comment" name="comment" required>
                    </div>
                </div>
     
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Register</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Child</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="womenedit3.php">
                <input type="hidden" class="id" name="id">
                     <div class="form-group">
                    <label for="item" class="col-sm-3 control-label">Item</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eitem" name="item" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="unicost" class="col-sm-3 control-label">Unit Cost</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="eunicost" name="unicost" required>
                    </div>
                </div>

              
                 <div class="form-group">
                    <label for="qty" class="col-sm-3 control-label">Qty</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="eqty" name="qty" required>
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="comment" class="col-sm-3 control-label">Comment</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ecomment" name="comment" required>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="women3delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE CHILD</p>
                    <h2 class="bold item"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>


     