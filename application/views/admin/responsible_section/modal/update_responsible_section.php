            

            <div class="modal fade" id="update_responsible_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update <?php echo $title ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="update_responsible_form">
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Responsible Section</label>
                          <input type="text" class="form-control"  name="update_responsible" placeholder="">
                          <input type="hidden" class="form-control" id="responsible_id" name="responsible_id" placeholder="" required>
                      </div>
                      
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-update-responsible" name="btn-update-responsible">Save changes</button>
                  </div>
                  </form>

                </div>
              </div>
            </div>