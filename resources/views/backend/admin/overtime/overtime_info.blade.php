@extends('master')

@section('title','Overtime Info')

@push('css')
<style type="text/css">
    .btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
    .text{color:#fff;}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('hrm/assets/libs/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('hrm/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endpush

@section('content')
<!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
     <div class="page-breadcrumb">
        <form action="" method=""POST>
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <select class="form-control select2">
                        <option readonly="">Select Card No</option>
                        <option>All</option>
                        <option>DT-9689</option>
                        <option>TT-8907</option>
                        <option>AT-8907</option>
                        <option>UT-8907</option>
                    </select>
                </div>
                <div class="col-md-2">
                      <input type="text" class="form-control" id="start_date" placeholder="Start Date">
                </div>
                <div class="col-md-2">
                      <input type="text" class="form-control" id="end_date" placeholder="End Date">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-c text"><i class="fas fa-search"></i> Search</button>
                </div>
            </div>
        </div>
        
        </form>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> All Overtime Records <span class="badge badge-secondary btn-c">19</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Card No</th>
                                                <th>Time In</th>
                                                <th>Time Out</th>
                                                <th>Works/Hour</th>
                                                <th>Regular Time</th>
                                                <th>Overtime</th>
                                                <th>Rate P/H</th>
                                                <th>Overtime_Pay</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12 Mar 2020</td>
                                                <td>System Architect</td>
                                                <td>IT-09870</td>
                                                <td>9:00</td>
                                                <td>20:00</td>
                                                <td>10</td>
                                                <td>8</td>
                                                <td>2</td>
                                                <td>500</td>
                                                <td>1000</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Card No</th>
                                                <th>Time In</th>
                                                <th>Time Out</th>
                                                <th>Works/Hour</th>
                                                <th>Regular Time</th>
                                                <th>Overtime</th>
                                                <th>Rate P/H</th>
                                                <th>Overtime_Pay</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
@push('js')
<script src="{{asset('hrm/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('hrm/assets/libs/select2/dist/js/select2.min.js')}}"></script>
<script>
   $(".select2").select2();
</script>
/*datwpicker*/
    <script src="{{asset('hrm/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        jQuery('#start_date').datepicker({
            autoclose: true,
            todayHighlight: true
        });

        jQuery('#end_date').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush
@endsection            