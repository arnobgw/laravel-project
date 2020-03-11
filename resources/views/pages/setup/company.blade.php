@extends('layout.index')

@section('content')
<div class="container">
  <h2>Company</h2>
  <hr>
  <br>
  <form action="{{route('company.store')}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="inputCompanyID" class="form-control ii">

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Existing Company :</label>
        </div>
        <div class="col-sm-4">
          <select name="setValue" class="selectpicker sl" data-live-search="true" id="select" data-size="6" autofocus>
            <option selected disabled hidden style='display: none' value=''></option>
            @foreach ($companies as $company)
            <option>{{ $company->companyName }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Company Name:</label>
        </div>
        <div class="col-sm-6">
          <input type="text" name="inputCompanyName" autocomplete="no" class="form-control avoidEnter in">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Company Address :</label>
        </div>
        <div class="col-sm-6">
          <input type="text" required="required" name="inputCompanyAddress" autocomplete="no"
            class="form-control avoidEnter ia">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Company Phone :</label>
        </div>
        <div class="col-sm-3">
          <input type="number" required="required" name="inputCompanyPhone" autocomplete="no" class="form-control avoidEnter ic" id="cp">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Manpower :</label>
        </div>
        <div class="col-sm-2">
          <input type="number" required="required" min="0" autocomplete="no" name="inputCompanyManpower"
            class="form-control avoidEnter im">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label>Company Priority Serial :</label>
        </div>
        <div class="col-sm-2">
          <input type="number" required="required" name="inputCompanyPriority" min="1" autocomplete="no"
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

@section('css')
<style>
  input[type='number'] {
    -moz-appearance: textfield;
  }
  input[id="cp"]::-webkit-inner-spin-button,
  input[id="cp"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
</style>
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
   url: "/company",
   type: 'GET',
   data: {n: $(this).val()},
   success: function(i) {
     $('.ii').val(i.a);    
     $('.in').val(i.b);
     $('.ia').val(i.c);
     $('.ic').val(i.d);
     $('.im').val(i.e);
     $('.ip').val(i.f);
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
    $('.ia').val('-');
    $('.ic').val('0');
    $('.im').val('0');
    $('.ip').val('');
  }
});
</script>

@endsection