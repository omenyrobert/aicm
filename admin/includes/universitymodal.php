<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New University Or Institute Student</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="universityadd.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Full Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
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
                    <label for="contact" class="col-sm-3 control-label">Contact</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="university" class="col-sm-3 control-label">University or Institute</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="university" name="university" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="dob" name="course" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="level" class="col-sm-3 control-label">Level</label>

                    <div class="col-sm-9">
                    <select name="level">
                        <option value="1/1">1st yr 1st Semester</option>
                        <option value="o1/2">1st yr 2nd Semester</option>
                        <option value="final1/2">1st yr 2nd Sem finalist</option>
                        <option value="o2/1">2nd yr 1st Semester</option>
                        <option value="o2/2">2nd yr 2nd Semester</option>
                        <option value="final2/2">2nd yr 2nd Sem finalist</option>
                        <option value="o3/1">3rd yr 1st Semester</option>
                        <option value="o3/2">3rd yr 2nd Semester</option>
                        <option value="final3/2">3rd yr 2nd Sem finalist</option>
                        <option value="o4/1">4th yr 1st Semester</option>
                        <option value="o4/2">4th yr 2nd Semester</option>
                        <option value="final4/2">4th yr 2nd Sem finalist</option>
                        <option value="o5/1">5th yr 1st Semester</option>
                        <option value="o5/2">5th yr 2nd Semester</option>
                        <option value="final5/2">5th yr 2nd Sem finalist</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>
         
                 <div class="form-group">
                    <label for="family" class="col-sm-3 control-label">family</label>

                    <div class="col-sm-9">
                    <select name="family">
                        <option value="Total_orphan">Total orphan</option>
                        <option value="Father_only">Father only</option>
                        <option value="Mother_Only">Mother Only</option>
                        <option value="Father&Mother">Father & Mother</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="guardians" class="col-sm-3 control-label">Guardians</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="guardians" name="guardians" required>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="guardiansco" class="col-sm-3 control-label">Guardians Contacts</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="guardiansco" name="guardiansco" required>
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
              <form class="form-horizontal" method="POST" action="universityedit.php">
                <input type="hidden" class="id" name="id">
                  <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Full Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="efirstname" name="firstname" required>
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
                    <label for="contact" class="col-sm-3 control-label">Contact</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="econtact" name="contact" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="university" class="col-sm-3 control-label">University or Institute</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="euniversity"  name="university" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ecourse" name="course" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="level" class="col-sm-3 control-label">Level</label>

                    <div class="col-sm-9">
                    <select name="level" id="elevel" >
                        <option value="1/1">1st yr 1st Semester</option>
                        <option value="o1/2">1st yr 2nd Semester</option>
                        <option value="final1/2">1st yr 2nd Sem finalist</option>
                        <option value="o2/1">2nd yr 1st Semester</option>
                        <option value="o2/2">2nd yr 2nd Semester</option>
                        <option value="final2/2">2nd yr 2nd Sem finalist</option>
                        <option value="o3/1">3rd yr 1st Semester</option>
                        <option value="o3/2">3rd yr 2nd Semester</option>
                        <option value="final3/2">3rd yr 2nd Sem finalist</option>
                        <option value="o4/1">4th yr 1st Semester</option>
                        <option value="o4/2">4th yr 2nd Semester</option>
                        <option value="final4/2">4th yr 2nd Sem finalist</option>
                        <option value="o5/1">5th yr 1st Semester</option>
                        <option value="o5/2">5th yr 2nd Semester</option>
                        <option value="final5/2">5th yr 2nd Sem finalist</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eaddress" name="address" required>
                    </div>
                </div>
         
                 <div class="form-group">
                    <label for="family" class="col-sm-3 control-label">family</label>

                    <div class="col-sm-9">
                    <select name="family" id="efamily">
                        <option value="Total_orphan">Total orphan</option>
                        <option value="Father_only">Father only</option>
                        <option value="Mother_Only">Mother Only</option>
                        <option value="Father&Mother">Father & Mother</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="guardians" class="col-sm-3 control-label">Guardians</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eguardians" name="guardians" required>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="guardiansco" class="col-sm-3 control-label">Guardians Contacts</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eguardiansco" name="guardiansco" required>
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
              <form class="form-horizontal" method="POST" action="universitydelete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE STUDENT</p>
                    <h2 class="bold firstname"></h2>
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
              <form class="form-horizontal" method="POST" action="universityphoto.php" enctype="multipart/form-data">
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


     