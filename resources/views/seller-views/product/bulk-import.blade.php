@extends('layouts.back-end.app-seller')

@section('title','Product Bulk Import')

@push('css_or_js')

@endpush

@section('content')
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('seller.dashboard.index')}}">{{trans('messages.Dashboard')}}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page"><a
                        href="{{route('seller.product.list')}}">{{trans('messages.Product')}}</a>
                </li>
                <li class="breadcrumb-item">{{trans('messages.bulk_import')}} </li>
            </ol>
        </nav>

        <!-- Content Row -->
        <div class="row" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
            <div class="col-12">
                <div class="jumbotron" style="background: white">
                    <h1 class="display-4">Instructions : </h1>
                    <p> 1. Download the format file and fill it with proper data.</p>

                    <p>2. You can download the example file to understand how the data must be filled.</p>

                    <p>3. Once you have downloaded and filled the format file, upload it in the form below and
                        submit.</p>

                    <p> 4. After uploading products you need to edit them and set product's images and choices.</p>

                    <p> 5. You can get brand and category id from their list, please input the right ids.</p>
                </div>
            </div>

            <div class="col-md-12">
                <form class="product-form" action="{{route('seller.product.bulk-import')}}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card mt-2 rest-part">
                        <div class="card-header">
                            <h4>Import Products File</h4>
                            <a href="{{asset('assets/product_bulk_format.xlsx')}}" download=""
                               class="btn btn-secondary">Download Format</a>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" name="products_file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-footer">
                        <div class="row">
                            <div class="col-md-12" style="padding-top: 20px">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
