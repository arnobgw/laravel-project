@extends('layout.index')

@section('content')
<div class="container">
  <h2>Employee</h2>
  <hr>
  <br>
  <form action="#" method="POST">
    {{ csrf_field() }}

    <input type="hidden" name="inputID" class="form-control ii" id="inputID">

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Month/Year :</label>
        </div>
        <div class="col-sm-3">
          <input type="month" required="required" name="" class="form-control" id="" autofocus>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Card :</label>
        </div>
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            <option>hello</option>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Section :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($sections as $section) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Designation :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($designations as $designation) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Employee Name :</label>
        </div>        
        <div class="col-sm-6">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Employee Name (In Bangla) :</label>
        </div>
        <div class="col-sm-6">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Date of Birth :</label>
        </div>
        <div class="col-sm-3">
          <input type="date" required="required" name="" class="form-control" id="">
        </div>
        <div class="col-sm-1">
          <label>Age :</label>
        </div>
        <div class="col-sm-1">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Nationality :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Birth Registration No. :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Father's Name :</label>
        </div>        
        <div class="col-sm-6">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Mother's Name :</label>
        </div>        
        <div class="col-sm-6">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Marital Status :</label>
        </div>        
        <div class="col-sm-6">
          <input type="radio" id="single" name="maritalStatus" value="Single">
          <label for="single">Single</label>
          <input type="radio" id="married" name="maritalStatus" value="Married">
          <label for="married">Married</label>
        </div> 
      </div>
    </div>
    
    <div class="form-group sn">
      <div class="row">
        <div class="col-sm-3">
          <label>Spouse Name :</label>
        </div>        
        <div class="col-sm-6">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div> 
      </div>
    </div>

    <div class="form-group ct">
      <br>
      <div class="row">
        <div class="col-sm-3">
          <label>Male Children :</label>
        </div>
        <div class="col-sm-1">
          <input type="number" name="" min="1" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>Female Children :</label>
        </div>
        <div class="col-sm-1">
          <input type="number" name="" min="1" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>Total Children :</label>
        </div>
        <div class="col-sm-1">
          <input type="number" name="" min="1" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
      <br>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Employee Status :</label>
        </div>        
        <div class="col-sm-6">
          <input type="radio" id="new" name="empStatus" value="New">
          <label for="new">New</label>
          <input type="radio" id="running" name="empStatus" value="Running">
          <label for="running">Running</label>
          <input type="radio" id="left" name="empStatus" value="Left">
          <label for="left">Left</label>
          <input type="radio" id="resign" name="empStatus" value="Resign">
          <label for="resign">Resign</label>
        </div> 
      </div>
    </div>

    <div class="form-group ld">
      <div class="row">
        <div class="col-sm-3">
          <label>Left Date :</label>
        </div>
        <div class="col-sm-3">
          <input type="date" required="required" name="" class="form-control" id="">
        </div>
      </div>
    </div>

    <div class="form-group rd">
      <div class="row">
        <div class="col-sm-3">
          <label>Resign Date :</label>
        </div>
        <div class="col-sm-3">
          <input type="date" required="required" name="" class="form-control" id="">
        </div>
      </div>
    </div>

    <div class="address-text"><u>Present Address</u></div><br>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Village :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>Post Office :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Thana/Upazilla :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>District :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="address-text"><u>Present Address (In Bangla)</u></div><br>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Village :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>Post Office :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Thana/Upazilla :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>District :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="address-text"><u>Permanent Address</u></div><br>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Village :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>Post Office :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Thana/Upazilla :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>District :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="address-text"><u>Permanent Address (In Bangla)</u></div><br>
    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Village :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>Post Office :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Thana/Upazilla :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
        <div class="col-sm-2">
          <label>District :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Mobile No :</label>
        </div>
        <div class="col-sm-3">
          <input type="number" name="" autocomplete="no" class="form-control avoidEnter">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>E-mail :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Joining Date :</label>
        </div>
        <div class="col-sm-3">
          <input type="date" required="required" name="" class="form-control">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Department :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($departments as $department) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Sub Department :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($subDepartments as $subDepartment) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Education Catagory :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($educationCatagories as $educationCatagory) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Working Experience :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($workingExperiences as $workingExperience) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Employee Catagory :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($employeeCatagories as $employeeCatagory) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>OT Status :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($otStatuses as $otStatus) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Pay Scale :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($payScales as $payScale) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Religion :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($religions as $religion) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Sex :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6">
            <option selected disabled hidden style='display: none' value=''></option>
            {{-- @foreach ($sexes as $sex) --}}
            <option>test</option>
            {{-- @endforeach --}}
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Refree 1 :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Refree 2 :</label>
        </div>        
        <div class="col-sm-3">
          <input type="text" name="" autocomplete="no"
            class="form-control avoidEnter">
        </div> 
      </div>
    </div>

    <button type="submit" name="submitButton" class="btn btn-primary sb"
      value="submitButton">Save</button>
    <button type="button" class="btn btn-default cb">Cancel</button>
  </form>
</div>   
@endsection

@section('js')
<script>
  $('.ld').css("display", "none");
  $('.rd').css("display", "none");
  $('.sn').css("display", "none");
  $('.ct').css("display", "none");

  $('input[type="radio"]').click(function(){
    if($(this).val() == "Left") {
      $('.rd').css("display", "none");
      $('.ld').css("display", "inline");
    }

    else if($(this).val() == "Resign") {
      $('.ld').css("display", "none");
      $('.rd').css("display", "inline");
    }

    else if($(this).val() == "Married") {
      $('.sn').css("display", "inline");
      $('.ct').css("display", "inline");
    }

    else if($(this).val() == "Single") {
      $('.sn').css("display", "none");
      $('.ct').css("display", "none");
    }

    else {
      $('.ld').css("display", "none");
      $('.rd').css("display", "none");
    }
  });

</script>
@endsection