@extends('layouts.app')
@section('content')
    <form action="{{route("exchange.report")}}">
        <div class="card">
    <div class="row m-5">





        <div class="col-xl-3 box-col-4 col-lg-12 col-md-4">


        <div class="col-form-label">İşlem Tipi</div>
        <select class="form-select form-control-primary"  name="type" name="select">
            <option value="">İşlem Tipini Seçiniz</option>
            <option value="2">Dış İşlem</option>
            <option value="1">İç İşlem</option>
        </select>


        </div>
        <div class="col-xl-3 box-col-4 col-lg-12 col-md-4">

                    <div class="col-form-label">Başlangıç</div>
                  <input class="form-control" type="date" name="startDate">

        </div>
        <div class="col-xl-3 box-col-1 col-lg-12 col-md-4">

                    <div class="col-form-label">Bitiş</div>
                    <input class="form-control" type="date" name="finishDate">

        </div>
    <div class="col-xl-3 box-col-1 col-lg-12 col-md-4">


        <div class="col-form-label">Sorgula</div>
                <button type="submit" class="btn btn-outline-primary-2x">Sorgula</button>


    </div>

      </div>

    </div>   </form>
    <div class="card">
    <div class="row m-5">

            <div class="col-sm-3 col-xl-3 col-lg-3">
                <div class="card o-hidden">
                    <div class="bg-danger b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"
                                     className="feather feather-shopping-bag icon-bg">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                            <div class="media-body"><span class="m-0"> {{local_price_format($tradeData->where("taker_side", "BID")->first()->totalAmount?? 0)}}   CYCE</span>
                                <h5 class="mb-0 counter">SATIŞ</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-sm-3 col-xl-3 col-lg-3">
            <div class="card o-hidden">
                <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"
                                 className="feather feather-shopping-bag icon-bg">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </div>
                        <div class="media-body"><span class="m-0"> {{local_price_format($tradeData->where("taker_side", "ASK")->first()->totalAmount ?? 0)}} CYCE</span>
                            <h5 class="mb-0 counter">ALIŞ</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xl-3 col-lg-3">
            <div class="card o-hidden">
                <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"
                                 className="feather feather-shopping-bag icon-bg">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </div>
                        <div class="media-body"><span class="m-0">{{local_price_format($tradeData->sum("totalAmount"))}}   CYCE</span>
                            <h5 class="mb-0 counter">HACİM</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xl-3 col-lg-3">
            <div class="card o-hidden">
                <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"
                                 className="feather feather-shopping-bag icon-bg">
                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                            </svg>
                        </div>
                        <div class="media-body"><span class="m-0"> {{local_price_format($tradeData->sum("totalFee"))}}  CYCE</span>
                            <h5 class="mb-0 counter">Fee</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div></div>
@endsection
