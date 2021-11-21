@extends('layouts.back-end.app-seller')
@section('title','Shop view')
@push('css_or_js')
    <!-- Custom styles for this page -->
    <link href="{{asset('assets/back-end/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h3 mb-0  ">{{trans('messages.my_shop')}} {{trans('messages.Info')}} </h3>
                    </div>
                    <div class="card-body">
                        <div class="row mt-2">
                            @if($shop->image=='def.png')
                                <div class="col-md-3 text-{{Session::get('direction') === "rtl" ? 'right' : 'left'}}">
                                    <img height="200" width="200" class="rounded-circle border"
                                         onerror="this.src='{{asset('assets/front-end/img/image-place-holder.png')}}'"
                                         src="{{asset('assets/back-end/img/shop.png')}}">
                                </div>
                            @else
                                <div class="col-md-3 text-{{Session::get('direction') === "rtl" ? 'right' : 'left'}}">
                                    <img src="{{asset('storage/shop/'.$shop->image)}}"
                                         onerror="this.src='{{asset('assets/front-end/img/image-place-holder.png')}}'"
                                         class="rounded-circle border"
                                         height="200" width="200" alt="">
                                </div>
                            @endif


                            <div class="col-md-4 mt-4">
                                <div class="flex-start">
                                    <h4>{{trans('messages.Name')}} : </h4>
                                    <h4 class="mx-1">{{$shop->name}}</h4>
                                </div>
                                <div class="flex-start">
                                    <h6>{{trans('messages.Phone')}} : </h6>
                                    <h6 class="mx-1">{{$shop->contact}}</h6>
                                </div>
                                <div class="flex-start">
                                    <h6>{{trans('messages.address')}} : </h6>
                                    <h6 class="mx-1">{{$shop->address}}</h6>
                                </div>

                                <div class="flex-start">
                                    <a class="btn btn-primary" href="{{route('seller.shop.edit',[$shop->id])}}">EDIT</a>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <!-- Page level plugins -->
@endpush
