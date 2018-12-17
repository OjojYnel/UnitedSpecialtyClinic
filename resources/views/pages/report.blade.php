<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <!--<input type="checkbox" class="chk_boxes1" name="repType[]" value="vaccine"  />Vaccine<br>
            <input type="checkbox" class="chk_boxes1" name="repType[]" value="patient" />Patient<br>-->
            <div class="form-row">
                <script>
                    $('.chk_boxes').click(function(){
                        var chk = $(this).attr('checked')?true:false;
                        $('.chk_boxes1').attr('checked',chk);
                    });
                </script>
                <div class="form-group col-md-6">
                    <label for="inputState">Date Range:</label>
                    <select id="inputState" class="form-control" name="range" required="required">
                        <option selected>Choose...</option>
                        <option value="daily">Daily</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                    </select>
                    <div class="form-group col-md-6">
                        <h3>Custom Date</h3>
                        <label >From:</label>
                        <input type="date" class="form-control"  placeholder="From" name="fromDate">
                        <label >From:</label>
                        <input type="date" class="form-control"  placeholder="To" name="toDate">
                    </div>
                    <button type="submit" class="btn btn-default">Generate Report</button>        
                </div>
            </div>
        </div>
    </form>
