<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Create Accounts</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="signup.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fullname" class="col-sm-3 control-label">Full Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

              

                 <div class="form-group">
                    <label for="role" class="col-sm-3 control-label">Role</label>

                    <div class="col-sm-9">
                      <select name="role" class="form-control">
                        <option value="admin" >Admin</option>
                        <option value="acv" >ACV</option>
                        <option value="accsb" >ACCS Bukerere</option>
                        <option value="accsi" >ACCS Iganga</option>
                        <option value="kids" >Agape Kids Chior</option>
                        <option value="uni" >University</option>
                        <option value="h2h" >Heart 2 Heart</option>
                        <option value="women" >Women of Worth</option>
                      </select>
                    </div>
                </div>

              
                 <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
          
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="signup"><i class="fa fa-save"></i> Create Account</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->



     