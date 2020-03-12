@extends('master')

@section('title','Loan Period Info')

@push('css')
<style type="text/css">
	.btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
    .text{color:#fff;}
</style>
@endpush
@section('content')
<!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
     <div class="page-breadcrumb">
        <div class="row">
            <div class="col-8 offset-md-2 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Available Loan Periods <span class="badge badge-secondary btn-c">19</span></h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Available Loans</th>
                                        <th>Amount</th>
                                        <th>Interest</th>
                                        <th>Repaid P/M</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<tr>
                                        <td>1</td>
                                        <td> For 6 Month</td>
                                        <td>10000 BDT</td>
                                        <td>7 (%) BDT</td>
                                        <td>1791.66 BDT</td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td> For 12 Month</td>
                                        <td>20000 BDT</td>
                                        <td>7.5 (%) BDT</td>
                                        <td>3091.78 BDT</td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Available Loans</th>
                                        <th>Amount</th>
                                        <th>Interest</th>
                                        <th>Repaid P/M</th>
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

            