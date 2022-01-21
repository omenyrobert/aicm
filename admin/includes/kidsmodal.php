<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Agape Kids Choir</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="kidsadd.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fullname" class="col-sm-3 control-label">Full Name</label>

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
                      <select name="gender" class="form-control">
                        <option value="male" >Male</option>
                        <option value="female" >Female</option>

                      </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="guardians" class="col-sm-3 control-label">Music Skills</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="skills" name="skills" required>
                        
                      </textarea>
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
              <h4 class="modal-title"><b>Edit Child</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="kidsedit.php">
                <input type="hidden" class="id" name="id">
                  <div class="form-group">
                    <label for="fullname" class="col-sm-3 control-label">Full Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="efullname" name="fullname" required>
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
                      <select name="gender" class="form-control" id="egender">
                        <option value="male" >Male</option>
                        <option value="female" >Female</option>

                      </select>
                    </div>
                </div>

                  <div class="form-group">
                    <label for="guardians" class="col-sm-3 control-label">Music Skills</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="eskills" name="skills" required>
                        
                      </textarea>
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
              <form class="form-horizontal" method="POST" action="kidsdelete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE CHILD</p>
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
              <form class="form-horizontal" method="POST" action="kidsphoto.php" enctype="multipart/form-data">
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


     