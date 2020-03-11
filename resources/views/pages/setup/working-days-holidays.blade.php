@extends('layout.index')

@section('content')
<div class="container">
  <h2>Working Days & Holidays</h2>
  <hr>
  <br>
  <form action="{{route('wdaysholidays.store')}}" method="POST">
    {{ csrf_field() }}

    <input type="hidden" name="inputID" class="form-control ii" id="inputID">

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
          <label>Month/Year :</label>
        </div>
        <div class="col-sm-3">
          <input type="month" required="required" name="inputMonthYear" class="form-control iy" id="inputMonthYear">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
          <label>Fridays :</label>
        </div>
        <div class="col-sm-2">
          <input type="number" required="required" min="0" name="inputTotalFridays" class="form-control if ic"
            id="inputTotalFridays">
        </div>
        <div class="col-sm-1">
          <label>Govt. Holidays:</label>
        </div>
        <div class="col-sm-2">
          <input type="number" required="required" min="0" name="inputTotalGHDays" class="form-control ig ic"
            id="inputTotalGHDays">
        </div>
        <div class="col-sm-1">
          <label>Adjust Days:</label>
        </div>
        <div class="col-sm-2">
          <input type="number" required="required" min="0" name="inputTotalAdjustDays" class="form-control ia ic"
            id="inputTotalAdjustDays">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
          <label>Total Holidays :</label>
        </div>
        <div class="col-sm-2">
          <input type="number" required="required" name="inputTotalHolidays" class="form-control ih"
            id="inputTotalHolidays" readonly="readonly">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
          <label>Working Days :</label>
        </div>
        <div class="col-sm-2">
          <input type="number" required="required" name="inputTotalWorkingDays" class="form-control iw"
            id="inputTotalWorkingDays" readonly="readonly">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-2">
          <label>Total Days in Month :</label>
        </div>
        <div class="col-sm-2">
          <input type="number" required="required" name="inputTotalMonthDays" class="form-control im"
            id="inputTotalMonthDays" readonly="readonly">
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
  input[type=month]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    display: none;
  }

  input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    display: none;
  }

  .scrollable {
    overflow-y: auto;
  }
</style>
@endsection

@section('js')
<script>
  $("input").prop('required',true);
  $('.cb').on('click',function() {
  $("input").prop('required', false);
  location.reload(true);
});
  $('.iy').change(function(){
    $.ajax({
      url: "/wdaysholidays",
      type: 'GET',
      data: { n: $(this).val() },
      success: function(i) {
        if(i){
          $('.ii').val(i.a);
          $('.iy').val(i.b);
          $('.if').val(i.c);
          $('.ig').val(i.d);
          $('.ia').val(i.e);
          $('.ih').val(i.f);
          $('.iw').val(i.g);
          $('.im').val(i.h);
        }
        else{
          $('.if').val('0');
          $('.ig').val('0');
          $('.ia').val('0');
          $('.ih').val('');
          $('.iw').val('');
          $('.im').val('');
        }
      },
    });
  });
  $('.ic').change(function(){
    $d = $('.iy').val();
    $m = Number($d.substring(5,7));
    $y = Number($d.substring(0,4));

    $tm = daysInMonth($m, $y);
    $tf = Number($('.if').val());
    $tg = Number($('.ig').val());
    $ta = Number($('.ia').val());

    $th = $tf + $tg + $ta;
    $tw = $tm - $th;

    $('.ih').val($th);
    $('.iw').val($tw);
    $('.im').val($tm);
  });
  function daysInMonth (month, year) {
      return new Date(year, month, 0).getDate();
  }
</script>

@endsection