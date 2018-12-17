<div class="box box-primary">
    <div class="box-header with-border">
      <center><h4 class="box-title">NEW PATIENT FORM</h4></center>
    </div>
    <h4>Personal Details</h4>
    <form role="form" action="/addPatient" method="post" id="patientform">
        @csrf
          <div class="box-body">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label >First Name</label>
                <input type="text" class="form-control"  placeholder="First Name" name="fname" required="required">
              </div>  
              <div class="form-group col-md-4">
                <label >Middle Name</label>
                <input type="text" class="form-control"  placeholder="Middle Name" name="mname" required="required">
              </div>  
              <div class="form-group col-md-4">
                <label >Last Name</label>
                <input type="text" class="form-control"  placeholder="Last Name" name="lname" required="required">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputState">Sex</label>
                <select id="inputState" class="form-control" name="sex" required="required">
                  <option selected>Choose...</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Age</label>
                <input type="number" class="form-control"  placeholder="Age" name="age" min="1" max="20" required="required">
              </div>
              <div class="form-group col-md-6">
                <label >Date of Birth</label>
                <input type="date" class="form-control"  placeholder="Date of Birth" name="dofbirth" required="required">
              </div>
            </div>
          
      <div class="form-row">
        <div class="form-group col-md-6">
          <label >Mother's Name</label>
          <input type="text" class="form-control"  placeholder="Mother's Name" name="mothername" required="required">
        </div>
        <div class="form-group col-md-6">
          <label >Occupation</label>
          <input type="text" class="form-control"  placeholder="Occupation" name="moccupation" required="required">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label >Father's Name</label>
          <input type="text" class="form-control"  placeholder="Father's Name" name="fathername" required="required">
        </div>
        <div class="form-group col-md-6">
          <label >Occupation</label>
          <input type="text" class="form-control"  placeholder="Occupation" name="foccupation" required="required">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label >Address</label>
          <input type="text" class="form-control"  placeholder="Address" name="address" required="required">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label >Phone No:</label>
          <input type="text" class="form-control"  placeholder="Phone No" name="contact" required="required">
        </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputState">Type of Delivery:</label>
          <select id="inputState" class="form-control" name="typeofdelivery" required="required">
            <option selected>Choose...</option>
            <option value="Vaginal Delivery">Vaginal Delivery</option>
            <option value="Natural Delivery">Natural Delivery</option>
            <option value="Vacuum Extraction">Vacuum Assisted Delivery / Vacuum Extraction</option>
            <option value="Forceps Delivery">Forceps Delivery</option>
            <option value="C-Section">Cesarian Section (C-Section)</option>
            <option value="Vaginal Birth After Cesarian">Vaginal Birth After Cesarian</option>
          </select>
        </div>
      </div>

        <h4>Birth History</h4>
          <form role="form">
          <div class="box-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Blood Type:</label>
          <select id="inputState" class="form-control" name="btype" required="required">
            <option selected>Choose...</option>
            <option value="A">Type A</option>
            <option value="B">Type B</option>
            <option value="AB">Type AB</option>
            <option value="O">Type O</option>
            <option value="A+">Type A+</option>
            <option value="A-">Type A-</option>
            <option value="B+">Type B+</option>
            <option value="B-">Type B-</option>
            <option value="AB+">Type AB+</option>
            <option value="AB-">Type AB-</option>
          </select>
        </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label >Birth Weight:</label>
          <input type="number" class="form-control" id="birth_weight" placeholder="Birth Weight" name="bw" min="0"  required="required">
        </div>
        <div class="form-group col-md-6">
          <label >Birth Length:</label>
          <input type="number" class="form-control" id="birth_length" placeholder="Birth Length" name="bl" min="0" required="required">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label >Head Circumference:</label>
          <input type="number" class="form-control" id="head_cire" placeholder="Head Circumference" name="headcirc" min="0" required="required">
        </div>
        <div class="form-group col-md-6">
          <label >Chest Circumference:</label>
          <input type="number" class="form-control" id="chest_cire" placeholder="Chest Circumference" name="chestcirc" min="0" required="required">
        </div>
        <div class="form-group col-md-6">
          <label >Abdominal Circumference:</label>
          <input type="number" class="form-control" id="abdominal_cire" placeholder="Abdominal Circumference" name="abdocirc" min="0" required="required">
        </div>
      </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Status</label>
          <select  class="form-control" name="status">
            <option selected>Choose...</option>
            <option value="waiting">Waiting</option>
            <option value="Ongoing">Ongoing</option>
            <option value="Done">Done</option>
          </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Type Of Service</label>
          <select  class="form-control" name="TypeOfService">
            <option selected>Choose...</option>
            <option value="Check Up">Check Up</option>
            <option value="Vaccine">Vaccine</option>
          </select>
        </div>
  </div>
    <div class="box-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#register">Add Patient</button>
    </div>
      </div>
          </div>
          </form>
      </div>