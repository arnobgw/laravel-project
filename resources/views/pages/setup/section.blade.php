@extends('layout.index')

@section('content')
<div class="container">
  <h2>Section</h2>
  <hr>
  <br>
  <form action="{{route('section.store')}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="inputSectionID" class="form-control ii">

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Existing Section :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6" autofocus>
            <option selected disabled hidden style='display: none' value=''></option>
            @foreach ($sections as $section)
            <option>{{ $section->sectionName }}</option>
            @endforeach
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Section Name:</label>
        </div>        
        <div class="col-sm-6">
          <input type="text" name="inputSectionName" autocomplete="no"
            class="form-control avoidEnter in">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Section Name (In Bangla):</label>
        </div>
        <div class="col-sm-6">
          <input type="text" name="inputSectionNameBangla" autocomplete="no"
            class="form-control avoidEnter ib">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Section Priority Serial:</label>
        </div>
        <div class="col-sm-2">
          <input type="number" name="inputSectionPriority" min="1" autocomplete="no"
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
   url: "/section",
   type: 'GET',
   data: {n: $(this).val()},
   success: function(i) {
     $('.ii').val(i.a);    
     $('.in').val(i.b);
     $('.ib').val(i.c);
     $('.ip').val(i.d);
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
     $('.ip').val('');
  }
});
</script>
@endsection