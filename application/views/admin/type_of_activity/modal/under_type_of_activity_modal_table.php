            

            <div class="modal fade" id="update_under_activity_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
              <div class="modal-dialog modal-dialog-centered " style="max-width: 1140px;" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Type of </h5>&nbsp;<h5 class="modal-title type_of_training_title" ></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                 
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-6">
                            <div class="data-tables">
                                <table id="under_activity_table" style="width:100%" class="text-center">
                                    <thead class="bg-light text-capitalize">
                                        <tr>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                               
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">                                     
                                <h4 class="header-title">Add</h4>
                                    <form id="add_under_activity_form">
                                      <input  type="hidden" class="form-control" id="act_id" name="act_id"  placeholder="" required>
                                        <div class="form-group">
                                            <label >Type of </label>&nbsp;<label class="under_type_label"></label>
                                                <input  type="text" class="form-control" id="under_type_activity" name="under_type_activity"  placeholder="" required>      
                                        </div>
                                        <button  type="submit" class="btn btn-primary mt-1 pr-4 pl-4 btn-add-under-activity"> Submit</button>
                                                    
                                        <div class="alert-add-under-activity"></div>
                                                   <!--  -->
                                    </form>                                         
                            </div>
                         </div>
                    </div>
                  </div>   
                 
                </div>
              </div>
            </div>