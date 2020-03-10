@extends('master')

@section('title','Resigned Employee')

@push('css')
<style type="text/css">
    .btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
</style>
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
                    <select class="form-control">
                        <option readonly="">Select Card No</option>
                        <option>All</option>
                        <option>DT-9689</option>
                        <option>TT-8907</option>
                        <option>AT-8907</option>
                        <option>UT-8907</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control">
                        <option readonly="">Select Department</option>
                        <option>All</option>
                        <option>IT</option>
                        <option>Management</option>
                        <option>XYZ</option>
                        <option>ABC</option>
                    </select>
                </div>
                <div class="col-md-2">
                      <input type="date" class="form-control" id="start_date" placeholder="Start Date">
                </div>
                <div class="col-md-2">
                      <input type="date" class="form-control" id="end_date" placeholder="End Date">
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
                                <h5 class="card-title"> Resigned Employee <span class="badge badge-secondary">19</span></h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Card No</th>
                                                <th>Designation</th>
                                                <th>Joining date</th>
                                                <th>Resign date</th>
                                                <th>Contact No</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>2011/04/25</td>
                                                <td>2011/04/25</td>
                                                <td>0983485734</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="view"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
          
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Card No</th>
                                                <th>Designation</th>
                                                <th>Joining date</th>
                                                <th>Resign date</th>
                                                <th>Contact No</th>
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

@endpush
@endsection            