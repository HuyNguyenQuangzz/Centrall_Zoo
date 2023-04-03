<div class="single-product-tab-area mg-t-0 mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-product-pr">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div id="myTabContent1" class="tab-content">
                                <div class="product-tab-list tab-pane fade active in" id="single-tab1">

{{--                                    <img src="{{asset('image/'. $animal->image)}}" alt="image" >--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="single-product-details res-pro-tb">

                                <h1 class="title-hone edit-col-ad">{{ $customer->c_fullname }}</h1>
                                <span class="single-pro-star">
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
										</span>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Date of birth:</h3>
                                    <p class="infor-p edit-col-ad"> {{ $customer->c_dob }}
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Gender:</h3>
                                    <p class="infor-p edit-col-ad"> {{$customer->c_gender }}
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Email:</h3>
                                    <p class="infor-p edit-col-ad"> {{$customer->c_email }}
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Address:</h3>
                                    <p class="infor-p edit-col-ad"> {{$customer->c_address }}
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Phone number:</h3>
                                    <p class="infor-p edit-col-ad"> {{$customer->c_phone }}
                                    </p>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
