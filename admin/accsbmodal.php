<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>ACCS Bukerere</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="accsbadd.php" enctype="multipart/form-data">
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
                    <label for="school" class="col-sm-3 control-label">School</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="school" name="school" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="level" class="col-sm-3 control-label">Level</label>

                    <div class="col-sm-9">
                    <select name="level" class="form-control">
                        <option value="Nursery">Nursery</option>
                        <option value="Primary">Primary</option>
                        <option value="Secondary">Secondary</option>
                        </select>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="class" class="col-sm-3 control-label">Class</label>

                    <div class="col-sm-9">
                     <select name="class" class="form-control">
                        <option value="Baby">Baby</option>
                        <option value="Middle">Middle</option>
                        <option value="Top">Top</option>
                        <option value="P1">P.1</option>
                        <option value="P2">P.2</option>
                        <option value="P3">P.3</option>
                        <option value="P4">P.4</option>
                        <option value="P5">P.5</option>
                        <option value="P6">P.6</option>
                        <option value="P7">P.7</option>
                        <option value="S1">S.1</option>
                        <option value="S2">S.2</option>
                        <option value="S3">S.3</option>
                        <option value="S4">S.4</option>
                        <option value="S5">S.5</option>
                        <option value="S6">S.6</option>
                        </select>
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="addressfrom" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="addressfrom" name="addressfrom" required>
                    </div>
                </div>
         
                 <div class="form-group">
                    <label for="family" class="col-sm-3 control-label">family</label>

                    <div class="col-sm-9">
                    <select name="family" class="form-control">
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
                      <textarea class="form-control" id="guardians" name="guardians" required>
                        
                      </textarea>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="guardiansco" class="col-sm-3 control-label">Guardians Contacts</label>

                    <div class="col-sm-9">
                    <textarea class="form-control" id="guardiansco" name="guardiansco" required>
                        
                      </textarea>
                    </div>
                </div>
                 
                <div class="form-group">
                    <label for="background" class="col-sm-3 control-label">Background</label>

                    <div class="col-sm-9">
                    <textarea class="form-control" id="background" name="background" required>
                        
                      </textarea>
                    </div>
                </div>
                 
                  <div class="form-group">
                    <label for="health" class="col-sm-3 control-label">Health info</label>

                    <div class="col-sm-9">
                    <textarea class="form-control" id="health" name="health" required>
                        
                      </textarea>
                    </div>
                </div>
                 
                  <div class="form-group">
                    <label for="sponsor" class="col-sm-3 control-label">Sponsor's info</label>

                    <div class="col-sm-9">
                    <textarea class="form-control" id="sponsor" name="sponsor" required>
                        
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
              <form class="form-horizontal" method="POST" action="accsbedit.php">
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
                    <label for="school" class="col-sm-3 control-label">School</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eschool" name="school" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="level" class="col-sm-3 control-label">Level</label>

                    <div class="col-sm-9">
                    <select name="level" class="form-control" id="elevel">
                        <option value="Nursery">Nursery</option>
                        <option value="Primary">Primary</option>
                        <option value="Secondary">Secondary</option>
                        </select>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="class" class="col-sm-3 control-label">Class</label>

                    <div class="col-sm-9">
                     <select name="class" class="form-control" id="eclass">
                        <option value="Baby">Baby</option>
                        <option value="Middle">Middle</option>
                        <option value="Top">Top</option>
                        <option value="P1">P.1</option>
                        <option value="P2">P.2</option>
                        <option value="P3">P.3</option>
                        <option value="P4">P.4</option>
                        <option value="P5">P.5</option>
                        <option value="P6">P.6</option>
                        <option value="P7">P.7</option>
                        <option value="S1">S.1</option>
                        <option value="S2">S.2</option>
                        <option value="S3">S.3</option>
                        <option value="S4">S.4</option>
                        <option value="S5">S.5</option>
                        <option value="S6">S.6</option>
                        </select>
                    </div>
                </div>

                
                <div class="form-group">
                    <label for="addressfrom" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="eaddressfrom" name="addressfrom" required>
                    </div>
                </div>
         
                 <div class="form-group">
                    <label for="family" class="col-sm-3 control-label">family</label>

                    <div class="col-sm-9">
                    <select name="efamily" class="form-control">
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
                      <textarea class="form-control" id="eguardians" name="guardians" required>
                        
                      </textarea>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label for="guardiansco" class="col-sm-3 control-label">Guardians Contacts</label>

                    <div class="col-sm-9">
                    <textarea class="form-control" id="eguardiansco" name="guardiansco" required>
                        
                      </textarea>
                    </div>
                </div>
                 
                <div class="form-group">
                    <label for="background" class="col-sm-3 control-label">Background</label>

                    <div class="col-sm-9">
                    <textarea class="form-control" id="ebackground" name="background" required>
                        
                      </textarea>
                    </div>
                </div>
                 
                  <div class="form-group">
                    <label for="health" class="col-sm-3 control-label">Health info</label>

                    <div class="col-sm-9">
                    <textarea class="form-control" id="ehealth" name="health" required>
                        
                      </textarea>
                    </div>
                </div>
                 
                  <div class="form-group">
                    <label for="sponsor" class="col-sm-3 control-label">Sponsor's info</label>

                    <div class="col-sm-9">
                    <textarea class="form-control" id="esponsor" name="sponsor" required>
                        
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
              <form class="form-horizontal" method="POST" action="accsbdelete.php">
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
              <form class="form-horizontal" method="POST" action="accsbphoto.php" enctype="multipart/form-data">
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


     