<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add ACV Staff</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="acvstaffadd.php" enctype="multipart/form-data">

                 <div class="form-group">
                    <label for="empid" class="col-sm-3 control-label">Employee id</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="empid" name="empid" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Full Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                </div>
      
                <div class="form-group">
                    <label for="dob" class="col-sm-3 control-label">Date of Birth</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-9">
                      <select name="gender">
                        <option value="male" >Male</option>
                        <option value="female" >Female</option>

                      </select>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Phone</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="role" class="col-sm-3 control-label">Role</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="role" name="role" required>
                    </div>
                </div>

                
                 <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
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
              <h4 class="modal-title"><b>Edit Student</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="acvstaffedit.php">
                <input type="hidden" class="id" name="id">
                   <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Full Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="efullname" name="fullname" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="empid" class="col-sm-3 control-label">Employee id</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eempid" name="empid" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob" class="col-sm-3 control-label">Date of Birth</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edob" name="dob" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-9">
                      <select name="gender" id="egender">
                        <option value="male" >Male</option>
                        <option value="female" >Female</option>

                      </select>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Phone</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ephone" name="phone" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="eemail" name="email" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="role" class="col-sm-3 control-label">Role</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="erole" name="role" required>
                    </div>
                </div>

                
                 <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eaddress" name="address" required>
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
              <form class="form-horizontal" method="POST" action="acvstaffdelete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE Staff</p>
                    <h2 class="bold fullname"></h2>
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

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="acvstaffphoto.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     