@extends('master')

@section('title','Loan Info')

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
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <select class="form-control select2" data-live-search="true">
                        <option readonly="">Select Card No</option>
                        <option>All</option>
                        <option>DT-9689</option>
                        <option>TT-8907</option>
                        <option>AT-8907</option>
                        <option>UT-8907</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control select2" data-live-search="true">
                        <option readonly="">Select Department</option>
                        <option>6 Month</option>
                        <option>12 Month</option>
                        <option>18 Month</option>
                        <option>24 Month</option>
                        <option>30 Month</option>
                        <option>36 Month</option>
                        <option>42 Month</option>
                        <option>48 Month</option>
                        <option>54 Month</option>
                        <option>60 Month</option>
                    </select>
                </div>
                <div class="col-md-2 input-group">
                      <input type="text" class="form-control" id="start_date" placeholder="Start Date">
                      <div class="input-group-append">
                          <span class="form-control"><i class="fa fa-calendar"></i></span>
                     </div>
                </div>
                <div class="col-md-2 input-group">
                      <input type="text" class="form-control" id="end_date" placeholder="End Date">
                      <div class="input-group-append">
                          <span class="form-control"><i class="fa fa-calendar"></i></span>
                     </div>
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
                                <h5 class="card-title"> All Loans <span class="badge badge-secondary btn-c">19</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Card_No</th>
                                                <th>Loan_Period</th>
                                                <th>Loan_Amount</th>
                                                <th>Interest_(%)</th>
                                                <th>Net_Amount</th>
                                                <th>Repaid_P/M</th>
                                                <th>Total_Paid</th>
                                                <th>Due_Amount</th>
                                                <th>Create_Date</th>
                                                <th>Maturity_Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mr. ABC</td>
                                                <td>IT-Abbb</td>
                                                <td>12 Months</td>
                                                <td>20000 BDT</td>
                                                <td>7</td>
                                                <td>21400 BDT</td>
                                                <td>1766 BDT</td>
                                                <td>5296 BDT</td>
                                                <td>14704 BDT</td>
                                                <td>09-09-2020</td>
                                                <td>09-09-2021</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="view"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Card_No</th>
                                                <th>Loan_Period</th>
                                                <th>Loan_Amount</th>
                                                <th>Interest (%)</th>
                                                <th>Net_Amount</th>
                                                <th>Repaid_P/M</th>
                                                <th>Total_Paid</th>
                                                <th>Due_Amount</th>
                                                <th>Create_Date</th>
                                                <th>Maturity_Date</th>
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