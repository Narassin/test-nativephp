@extends('components.app')

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
        <div class="col-md-12">
            DataTable here
        </div>
    </div>
@endsection
