<center>
        <form method="post" action="<?php echo site_url('submitpaper/do_upload'); ?>" enctype="multipart/form-data">
        <table ><!--tabel besak-->
            <tr >
              <td style="width:7.4%">
              </td>
                <td style="width:70%"><!--tabel kiri-->
                  <div class="panel panel-default" > 
                    <div class="panel-heading">Submit Paper</div>
                     <div class="table-responsive">
                      <table class="table  table-hover"><!--tabel kiri-->
                        <tr>
                         
                          <td >
                            <div class="input-group" style="width:100%">
                              <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                              <input type="text" name="name" class="form-control" placeholder="Name" aria-describedby="basic-addon1" >
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <div class="input-group" style="width:100%">
                              <span class="input-group-addon " id="basic-addon1">@</span>
                              <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" >
                              </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <div class="input-group" style="width:100%">
                              <span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1"></span>
                              <input type="text" class="form-control" name="address" placeholder="Postal Addres" aria-describedby="basic-addon1" >
                              </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <div class="input-group" style="width:100%">
                              <span class="input-group-addon glyphicon glyphicon glyphicon-earphone" id="basic-addon1"></span>
                              <input type="text" class="form-control" name="phone" placeholder="Phone" aria-describedby="basic-addon1" >
                              </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label class="btn btn-primary" for="my-file-selector">
                              <input id="my-file-selector" name="file" type="file" style="display:none;"><span class="glyphicon glyphicon-upload">
                              </span>&nbspUpload File 
                              </label> <label name="filename">.pdf</label>
                          </td>
                        </tr>       
                        <tr>
                          <td >
                          <div class="form-group">
                            <label for="comment" align="left">Description:</label>
                            <textarea name="description" class="form-control" rows="5" id="comment" ></textarea>
                          </div>
                        </td>
                       </tr>
        
                       <tr>
                        <td> 
                          <input type="submit" name="upload" class="btn btn-default" value="Submit"></input>
                        </td>
                       </tr>

                    </table><!--tabel kiri-->
                  </form>
                  </div>
                </div>
              </td><!--tabel kiri-->