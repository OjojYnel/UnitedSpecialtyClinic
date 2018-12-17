<div id="myVaccineModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <section class="content">
          <div class="box box-primary">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <div class="box-header">
                  <h3 class="box-title" a href="#imm"><b>Add New Vaccine</b></h3>
                </div>
                <tbody>
                  <tr role="row" class="odd">
                    <td class="vacname">Vaccine Name</td>
                    <td><input type="text" class="col-md-12" name="vaccine_name" id="vacname" ></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="lotno" name="lotno">Lot Number</td>
                    <td><input type="text" class="col-md-12" name="vaccine_lot_number" id="lot" ></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="quantity" name="quantity">Quantity</td>
                    <td><input type="number" class="col-md-12" name="quantity" id="serial" ></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="expire" name="expire">Expiration Day</td>
                    <td><input type="date" class="col-md-12" name="vaccine_expiration_date" id="expdate" ></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="daterecieved" name="daterecieved">Date Received</td>
                    <td><input type="date" class="col-md-12" name="vaccine_receive_date" id="vacreceive" ></td>
                  </tr>
                  
                  <input type="hidden" class="col-md-12" name="reason" id="Reason">
                  
                  <tr role="row" class="odd">
                    <td class="stat" name="stat">Status</td>
                    <td><input type="text" class="form-control" class="col-md-12" name="status" id="stat" data-parsley-required="true" value="Available" readonly> 

                     
                    </td>

                    <input hidden name="vaccine_list_id" value="{{$id_of_vac}}">

                  </tr>
                </tbody>
              </table>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Add </button>
              </div>
            </div>
            <!--./box-body-->
          </div>
          <!--box-primary-->
        </section>
        <!--./content-->
      </div>
      <!--./modal-body-->
    </div>
    <!--./modal-dialog-->
  </div>
    <!--./myModal-->