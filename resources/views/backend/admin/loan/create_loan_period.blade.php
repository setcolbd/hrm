@extends('master')

@section('title','Create Loan Period')

@push('css')
<style type="text/css">
	.btn-c{background: #2681A7;}
    .form-control{border:1px solid #a7a1a1;}
    .text{color:#fff;}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('hrm/assets/libs/select2/dist/css/select2.min.css')}}">
@endpush
@section('content')
<!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
     <div class="page-breadcrumb">
        <div class="row">
            <div class="col-8 offset-md-2 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <button type="button" class="btn btn-c btn-sm margin-5 text-white" data-toggle="modal" data-target="#loanTypeModal"><i class="fas fa-plus"></i>Create Loan Period</button>
                        </ol>
                    </nav>
                </div>
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
    <!-- // Create Loan Type Modal -->
<div class="modal fade" id="loanTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Loan Period</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="">
            	<div class="modal-body">
                <div class="form-group row">
                    <label for="loan_period" class="col-sm-3 text-right control-label col-form-label">Loan Period</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="loan_period" name="group" placeholder="Enter Loan Period (month)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="loan_amount" class="col-sm-3 text-right control-label col-form-label">Loan Amount</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="loan_amount" name="loan_amount" placeholder="Enter Loan Amount">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="interest" class="col-sm-3 text-right control-label col-form-label">Interest (%)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="interest" name="interest" placeholder="Enter Interest (%)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="repaid_per_month" class="col-sm-3 text-right control-label col-form-label">Repaid P/M</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="repaid_per_month" name="repaid_per_month" placeholder="Repaid Per-Month" readonly="">
                    </div>
                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-sm btn-c text">Submit</button>
	            </div>
            </form>
            
        </div>
    </div>
</div>

    @push('js')
        
    @endpush
     
@endsection            

            