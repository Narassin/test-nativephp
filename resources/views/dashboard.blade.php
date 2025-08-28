@extends('layout.app')

@section('content')
    <h2 class="mb-4">Dashboard</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">No Products</h5>
                    <p class="card-text fs-3">4</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Recent Sale</h5>
                    <p class="card-text fs-3">75</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Product Sold</h5>
                    <p class="card-text fs-3">120</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Sales Series</h5>
                    <p class="card-text fs-3">1</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-3">Sales</h5>
                </div>
                <div class="card-body px-2">
                    <div class="card-datatable table-responsive text-nowrap">
                        <table class="datatables-basic table" id="sale_datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>

    </script>
    @endpush
@endsection
