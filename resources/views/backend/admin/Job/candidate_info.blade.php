@extends('master')

@section('title','Loan Info')

@push('css')
<style type="text/css">
    .btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
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
                    <select class="select2 form-control" data-live-search="true">
                        <option>All</option>
                        <option>Sorted</option>
                        <option>Interview</option>
                        <option>Selected</option>
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
                    <button type="submit" class="btn btn-c"><i class="fas fa-search"></i> Search</button>
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
                                <h5 class="card-title"> All Candidate <span class="badge badge-secondary">10</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Image</th>
                                                <th>National ID</th>
                                                <th>Address</th>
                                                <th>CV</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mr. ABC</td>
                                                <td>abc@gmail.com</td>
                                                <td>017893874</td>
                                                <td>default.png</td>
                                                <td>8897657600098</td>
                                                <td>North Dhanmondi, West Panthapath Kalabagan Dhaka</td>
                                                <td>default.pdf</td>
                                                <td>Pending</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="view"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="sort"><i class="fas fa-sort"></i></a>
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class=" fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mr. ABC</td>
                                                <td>abc@gmail.com</td>
                                                <td>017893874</td>
                                                <td>default.png</td>
                                                <td>8897657600098</td>
                                                <td>North Dhanmondi, West Panthapath Kalabagan Dhaka</td>
                                                <td>default.pdf</td>
                                                <td>Sorted</td>
                                                <td class="text-center" style="width:15%;">
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="view"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="sort"><i class="fas fa-sort"></i></a>
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class=" fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Image</th>
                                                <th>National ID</th>
                                                <th>Address</th>
                                                <th>CV</th>
                                                <th>Status</th>
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