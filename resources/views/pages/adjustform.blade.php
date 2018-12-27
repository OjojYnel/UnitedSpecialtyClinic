<thead>

            <h4>Adjust Inventory</h4>  

            
              <tr role="row">
              <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Vaccine ID: 
                <input type="number" class="form-control" value="{{ isset($vac->id) ? $vac->id: ''}}" name="vaccine_lists_id" id="vac_id" readonly> </th>
              </tr>
           

            <tr role="row">
              <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Adjustment Date: 
                <input type="date" class="form-control" id="vacadjust" name="adjustment_date" value="{{ isset($vac->adjustment_date) ? $vac->adjustment_date : ''}}"> </th>
              </tr>
              <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Adjustment Reason 
                  <select class="form-control" name="adjustment_reason" id="adjustreason" data-parsley-required="true"> 
                    <option value="Available"> New Stock</option> 
                    <option value="Expired"> Replaced</option> 
                    <option value="Damaged"> Damaged</option> 
                    <option value="Returned"> Decreased</option>  
                  </select> 
                </th>
              </tr>
              <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Current Quantity: </th>
                <input type="number" class="form-control" id="qty" name="quantity" value="{{ isset($vac->quantity) ? $vac->quantity: ''}}">
                <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Increase Quantity: 
                    <input type="number" class="form-control" id="increase_amnt" class="quantity" name="increase_amount"/></th>
                  </tr>
                  <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Decrease Quantity: 
                    <input type="number" class="form-control" id="decrease_amnt" class="quantity" name="decrease_amount"/> </th>
                  </tr>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Result: 
                    <input type="number" class="form-control" id="sum" name="sum" disabled/> </th>
                  </tr>
                      

          </thead>

         <script>
            $(document).ready(function() {
              //this calculates values automatically 
              sum();
            $("#quantity,#increase_amount,#decrease_amount").on("keydown keyup", function() {
              sum();
              });
            });

            function sum() {
              var quantity = document.getElementById('quantity').value;
              var increase_amount = document.getElementById('increase_amount').value;
              var decrease_amount = document.getElementById('decrease_amount').value;
                var result = (quantity)+ parseInt(increase_amount) - parseInt(decrease_amount);
              if (!isNaN(result)) {
                  document.getElementById('sum').value = result;
              }
          }
        </script>










