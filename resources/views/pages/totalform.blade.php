<thead>
  <tr role="row">
    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Vaccine Name: 
      <input type="text" class="form-control" id="vacname" name="vaccine_name" value="{{ isset($vac->vaccine_name) ? $vac->vaccine_name : ''}}"> </th>
    </tr>
    <tr role="row">
      <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Lot Number: 
        <input type="text" class="form-control" id="lot" name="vaccine_lot_number" value="{{ isset($vac->vaccine_lot_number) ? $vac->vaccine_lot_number : '' }}"></th>
      </tr>
        <tr role="row">
          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Expiration Date: 
            <input type="date"  class="form-control" id="expdate" name="vaccine_expiration_date" value="{{ isset($vac->vaccine_expiration_date) ? $vac->vaccine_expiration_date: '' }}" ></th>
          </tr>
          <tr role="row">
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Date Received: 
              <input type="date" class="form-control" id="Receive" name="vaccine_receive_date" value="{{ isset($vac->vaccine_receive_date) ? $vac->vaccine_receive_date: ''}}" ></th>
            </tr>
            <tr role="row">
              <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Quantity 
                <input type="number" class="form-control" id="qty" name="quantity" value="{{ isset($vac->quantity) ? $vac->quantity: ''}}">
              </th>

              <input type="hidden" value="{{ isset($vac->id) ? $vac->id: ''}}" name="vaccines_id" id="vac_id" > 
            </tr>

            

            <tr role="row">
              <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Status 
                <select class="form-control" name="status" id="stat" data-parsley-required="true"> 
                  <option value="Available"> Available</option> 
                  <option value="Expired"> Expired</option> 
                  <option value="Damaged"> Damaged</option> 
                  <option value="Returned"> Returned</option> 
                  <option value="Consumed"> Consumed</option>  
                </select> 
              </th>
            </tr>

          </thead>










