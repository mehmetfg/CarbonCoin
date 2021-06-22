@extends('layouts.app')
@section('content')

    <div class="card-header">
        <h5>@lang('models/vallets.plural')</h5>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
               href="{{ route('vallets.create') }}">@lang('crud.add_new')</a>
        </h1>
    </div>
    <div class="card-body">


        <div class="dt-ext table-responsive">
            <div class="row">
            @foreach($vallets as $item)
            <div class="col-xl-3 xl-40 col-md-3">
                <div class="default-according style-1 faq-accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-start ps-0 pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Cüzdan</button>
                            </h2>
                        </div>
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="card-body socialprofile filter-cards-view">
                                <div class="media"><img class="img-50 img-fluid m-r-20 rounded-circle" src="/assets/images/user/16.jpg" alt="">
                                    <div class="media-body">
                                        <h6 class="font-primary f-w-600">{{$item->name}}</h6><span class="d-block"><span><i class="fa fa-send"> </i><span class="px-2">Giden Transfer<span class="badge rounded-pill badge-light ms-2">189</span></span></span></span><span class="d-block"><span><i class="fa fa-archive"> </i><span class="px-2">Gelen Transfer<span class="badge rounded-pill badge-light ms-2">9</span></span></span></span>
                                    </div>
                                </div>
                                <div class="social-btngroup d-flex">
                                    <a class="btn btn-primary text-center " href="{{route("transaction.customer",["vallet"=> $item->id])}}">{{__("Transfer")}}</a>
                                    <a class="btn btn-light text-center ms-2" type="button">{{__("Detay")}}</a>
                                </div>
                                <div class="likes-profile text-center">
                                    <h5> <span>  <i class="fa fa-dollar font-danger"></i> {{$item->balance}}</span></h5>
                                </div>
                                <div class="text-center">Bakiyeniz Bulunmaktadır.</div>
                                <div class="customers text-center social-group">

                                </div><img class="img-fluid mt-5" alt="" src="/assets/images/knowledgebase/bg_1.jpg">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @endforeach
            </div>
        </div>


    </div>
    <div class="card-footer">

    </div>
@endsection

