@extends('layout.index')

@section('content')
<div class="container">
  <h2>Pay Scale</h2>
  <hr>
  <br>
  <form action="{{route('pscale.store')}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="inputPayScaleID" class="form-control ii">

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Existing Pay Scale :</label>
        </div>        
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6" autofocus>
            <option selected disabled hidden style='display: none' value=''></option>
            @foreach ($payScales as $payScale)
            <option>{{ $payScale->payScaleName }}</option>
            @endforeach
          </select>
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Pay Scale Name:</label>
        </div>        
        <div class="col-sm-6">
          <input type="text" name="inputPayScaleName" autocomplete="no"
            class="form-control avoidEnter in">
        </div> 
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Pay Scale Name (In Bangla):</label>
        </div>
        <div class="col-sm-6">
          <input type="text" name="inputPayScaleNameBangla" autocomplete="no"
            class="form-control avoidEnter ib">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label>Pay Scale Priority Serial:</label>
        </div>
        <div class="col-sm-2">
          <input type="number" name="inputPayScalePriority" min="1" autocomplete="no"
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
   url: "/pscale",
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