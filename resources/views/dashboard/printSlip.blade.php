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
                                    <h4 class="page-title">print</h4>
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

                                    
                                        <div class="container">
                                            <div class="row">
                                                @foreach ($students as $student)
                                                <div class="col-md-3 border">
                                                    <h3 class="text-center mb-0">SWALAH</h3>
                                                    <h6 class="text-center mt-0">Darul Hidaya Da'wa College</h6>
                                                    <hr>
                                                    <h3 class="text-center"><b>{{$student->name}}</b></h3>
                                                    <div class="row">
                                                        <div class="col-md-6  bg-dark text-light">
                                                            <h4 class="text-center">AD.NO : {{$student->adno}}</h4>
                                                        </div>
                                                        <div class="col-md-6  bg-light">
                                                            <h4 class="text-center">CLASS : {{$student->class}}</h4>
                                                        </div>
                                                    </div>
                                                    <table class="table mb-0">
                                                        <tr class="mb-0">
                                                            <td>PRINT</td>
                                                            <td>:</td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr>
                                                            <td>STATIONERY</td>
                                                            <td>:</td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BOOK FAIR</td>
                                                            <td>:</td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ACCOUNT</td>
                                                            <td>:</td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr>
                                                            <td>VACHANAM</td>
                                                            <td>:</td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr class="bg-success text-light">
                                                            <th>TOTAL</th>
                                                            <th>:</th>
                                                            <th>60</th>
                                                        </tr>
                                                    </table>
                                                </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>


                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->


                <!-- Standard modal Add New-->
                <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="standard-modalLabel">Add New</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('addprint') }}" id="addForm">
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
