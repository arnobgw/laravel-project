@extends('layout.index')

@section('content')
<div class="container">
  <h2>Working Experience</h2>
  <hr>
  <br>
  <form action="{{route('wexperience.store')}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="inputWorkingExperienceID" class="form-control ii">

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Existing Working Experience :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6" autofocus>
            <option selected disabled hidden style='display: none' value=''></option>
            @foreach ($workingExperiences as $workingExperience)
            <option>{{ $workingExperience->workingExperienceName }}</option>
            @endforeach
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Working Experience Name:</label>
        </div>        
        <div class="col-sm-6">
          <input type="text" name="inputWorkingExperienceName" autocomplete="off"
            class="form-control avoidEnter in">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Working Experience Name (In Bangla):</label>
        </div>
        <div class="col-sm-6">
          <input type="text" name="inputWorkingExperienceNameBangla" autocomplete="off"
            class="form-control avoidEnter ib">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Work Details :</label>
        </div>
        <div class="col-sm-6">
          <input type="text" required="required" name="inputWorkDetails" autocomplete="off"
            class="form-control avoidEnter iw">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Working Experience Priority Serial:</label>
        </div>
        <div class="col-sm-2">
          <input type="number" name="inputWorkingExperiencePriority" min="1" autocomplete="off"
            class="form-control avoidEnter ip">
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
$ov = null;
$c = false;
$v = '';
$("input").prop('required', true);
$('.cb').on('click',function() {
  $("input").prop('required', false);
  location.reload(true);
});
$('.sl').on('change',function() {
  $ov = $('.sl option:selected').text();
  $(".sb").html("Edit");
  $.ajax({
   url: "/wexperience",
   type: 'GET',
   data: {n: $(this).val()},
   success: function(i) {
     $('.ii').val(i.a);    
     $('.in').val(i.b);
     $('.ib').val(i.c);
     $('.iw').val(i.d);
     $('.ip').val(i.e);
     $(".sb").html("Edit");
     if($c){
      $('.in').val($v);
      $c = false;
     }
   },
  });  
});
$('.in').blur(function() {
$v = $('.in').val();
$(".sl option").each(function()
  { 
  if($v.toLowerCase() == $(this).val().toLowerCase() && $v){
    $ov = $(this).val();
    $(".sl").val($ov);
    $c = true;    
    $(".sl").change();
  }
});
  if(!$ov && $v){
     $('.ib').val('-');
     $('.iw').val('-');
     $('.ip').val('');
  }
});
</script>
@endsection