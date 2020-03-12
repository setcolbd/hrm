@extends('master')

@section('title','Create Loan Period')

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
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Create Loan Period</h4>
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
                                <div class="border-top text-center">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-c text">Submit</button>
                                    </div>
                                </div>
                            </form>
                       </div>
                    </div>
                </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->

    @push('js')

    @endpush
     
@endsection            

