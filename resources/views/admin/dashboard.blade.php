@extends('admin.layouts.main')
@section('content')
<div class="dashboard">
    <h1>Bảng điều khiển</h1>
    <div class="row">
        <div class="col-md-4 my-2">
            <div class="text-white bg-primary card dashboard-item">
                <div class="card-body d-flex">
                    <h5 class="card-title primary-text-color col-8">
                        <i class="fas fa-shopping-cart fa-3x"></i>
                        Sảnn phẩm
                    </h5>
                    <h4 class="card-text h1 col-6">{{$amountProducts}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="text-white bg-secondary card dashboard-item">
                <div class="card-body d-flex">
                    <h5 class="card-title primary-text-color col-8">
                        <i class="fas fa-list fa-3x"></i>
                        Categories
                    </h5>
                    <h4 class="card-text h1 col-6">{{$amountCategories}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="text-white bg-success card dashboard-item">
                <div class="card-body d-flex">
                    <h5 class="card-title primary-text-color col-8">
                        <i class="fas fa-users fa-3x"></i>
                        Users
                    </h5>
                    <h4 class="card-text h1 col-6">{{$amountUsers}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="text-white bg-danger card dashboard-item">
                <div class="card-body d-flex">
                    <h5 class="card-title primary-text-color col-8">
                        <i class="fas fa-file fa-3x"></i>
                        Pages
                    </h5>
                    <h4 class="card-text h1 col-6">{{$amountPages}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="text-white bg-warning card dashboard-item">
                <div class="card-body d-flex">
                    <h5 class="card-title primary-text-color col-8">
                        <i class="fas fa-tag fa-3x"></i>
                        Brands
                    </h5>
                    <h4 class="card-text h1 col-6">{{$amountBrands}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="text-white bg-info card dashboard-item">
                <div class="card-body d-flex">
                    <h5 class="card-title primary-text-color col-8">
                        <i class="fas fa-newspaper fa-3x"></i>
                        News
                    </h5>
                    <h4 class="card-text h1 col-6">{{$amountNews}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="text-white bg-dark card dashboard-item">
                <div class="card-body d-flex">
                    <h5 class="card-title primary-text-color col-8">
                        <i class="fas fa-file-invoice fa-3x"></i>
                        Invoices
                    </h5>
                    <h4 class="card-text h1 col-6">{{$amountInvoices}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection