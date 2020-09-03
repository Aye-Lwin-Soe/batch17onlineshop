@extends('Backend.backendtemplate')


@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Order Report</h1>
  </div>

  <div class="form-group row pb-5 pt-5">
    <label class="col-md-1">Start Date</label>
    <div class="col-md-3">
      <input type="date" name="startdate" class="form-control startdate">
    </div>
    <label class="col-md-1">End Date</label>
    <div class="col-md-3">
      <input type="date" name="enddate" class="form-control enddate">
    </div>
    <input type="button"  value="Search" class="btn btn-primary search">
  </div>
  <!-- Content Row -->
  <div class="container">
    <div class="row pt-5">
      <table class="table">
        <thead >
          <th>No</th>
          <th>Voucher No</th>
          <th>User Name</th>
          <th>Qty</th> 
          <th>Total</th>
        </thead>
        <tbody id="tbody">


        </tbody>
      </table>

    </div>
  </div>
  <!-- /.container-fluid -->
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('.table').hide();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('.search').on('click',function(){
      var startdate = $('.startdate').val();
      var enddate = $('.enddate').val();
      $.post('searchreport',{startdate:startdate,enddate:enddate},function(response){
        console.log(response);
        if(response.order.length > 0){
          var html=''; var j=1;
          $.each(response.order,function(i,v){
            console.log(v);
            html+=`<tr><td>${j++}</td><td>${v.voucherno}</td><td>${response.user}</td><td>${response.qty}</td><td>${v.total}</td></tr>`;
          });
          $('#tbody').html(html);
          $('.table').show();
        }
      })
    })
  })
</script>
@endsection