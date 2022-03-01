@extends('dashboard/partials/top-bar')

@section('contant')

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div> --}}
                    <h4 class="page-title">vachanam</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="" data-bs-toggle="modal" data-bs-target="#standard-modal" class="btn btn-danger mb-2"><i
                                        class="mdi mdi-plus-circle me-2"></i> Add New</a>
                                        {{-- <button type="button" class="btn btn-primary" >Standard Modal</button> --}}

                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success mb-2 me-1"><i
                                            class="mdi mdi-cog-outline me-2"></i>Pay</button>
                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="all" style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th class="all">Name</th>
                                        <th>Ad No</th>
                                        <th>Class</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th style="width: 85px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vachanam as $vachanam)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                {{-- <img src="assets/img/{{ $vachanam->adno }}.jpg" 
                                                class="me-2 rounded-circle prof-img" height="48" width="48"> --}}
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="{{route('viewStudent',$vachanam->id)}}"
                                                        class="text-body">{{ $vachanam->name }}</a>
                                                    <br>
                                                    {{-- <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span> --}}
                                                </p>
                                            </td>
                                            <td>
                                                {{ $vachanam->adno }}
                                            </td>
                                            <td>
                                                {{ $vachanam->class }}
                                            </td>
                                            <td>
                                                {{ $vachanam->amount }}
                                            </td>

                                            <td>
                                                {{ $vachanam->created_at}}
                                            </td>
                                            <td>
                                                <span class="badge bg-success">Unpaid</span>
                                            </td>

                                            <td class="table-action">
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="" class="action-icon"> <i
                                                        class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> 
    <!-- container -->


<!-- Standard modal Add New-->
<div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Add New</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('addvachanam') }}" id="addForm">
                    @csrf
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Ad.No</label>
                        <input type="text" id="adno" name="adno" class="form-control">
                    </div>
                    
                    {{-- <div class="mb-3">
                        <label for="example-number" class="form-label">Name</label>
                        <input class="form-control" name="adno" id="adno" type="number" name="number">
                    </div> --}}
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Amount</label>
                        <input type="number" id="amount" name="amount" class="form-control">
                    </div>
                    {{-- <button type="submit" class="btn btn-primary w-100">Submit</button> --}}
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection
