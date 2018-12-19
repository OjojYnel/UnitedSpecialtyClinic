<thead>


            <h4>Adjust Inventory</h4>  

            
              <tr role="row">
              <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Vaccine type ID: 
                <input type="number" class="form-control" id="" name="vaccine_types_id" value="{{ isset($vac->vaccine_types_id) ? $vac->vaccine_types_id : ''}}" readonly> </th>
              </tr>

            <tr role="row">
              <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Adjustment Date: 
                <input type="date" class="form-control" id="" name="adjustment_date" value="{{ isset($vac->adjustment_date) ? $vac->adjustment_date : ''}}"> </th>
              </tr>
              <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Adjustment Reason 
                  <select class="form-control" name="adjustment_reason" id="stat" data-parsley-required="true"> 
                    <option value="Available"> New Stock</option> 
                    <option value="Expired"> Replaced</option> 
                    <option value="Damaged"> Damaged</option> 
                    <option value="Returned"> Decreased</option>  
                  </select> 
                </th>
              </tr>
              <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Current Quantity: </th>
                <input type="number" class="form-control" id="" name="quantity" value="{{ isset($vac->quantity) ? $vac->quantity: ''}}" readonly> </th>

                <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Increase Quantity: 
                    <input type="number" class="form-control" id="" name="increase_amount" value="{{ isset($vac->increase_amount) ? $vac->increase_amount : ''}}"> </th>
                  </tr>
                  <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Decrease Quantity: 
                    <input type="number" class="form-control" id="" name="decrease_amount" value="{{ isset($vac->decrease_amount) ? $vac->decrease_amount : ''}}"> </th>
                  </tr>
                         

          </thead>










