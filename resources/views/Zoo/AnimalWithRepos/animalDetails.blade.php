<div class="single-product-tab-area mg-t-0 mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-product-pr">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div id="myTabContent1" class="tab-content">
                                <div class="product-tab-list tab-pane fade active in" id="single-tab1">

                                    <img src="{{asset('image/'. $animal->image)}}" alt="image" >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="single-product-details res-pro-tb">

                                <h1 class="title-hone edit-col-ad">{{ $animal->name }}</h1>
                                <span class="single-pro-star">
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
										</span>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Animal Quantity:</h3>
                                    <p class="infor-p edit-col-ad"> {{ $animal->quantity }}
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Animal Habitat:</h3>
                                    <p class="infor-p edit-col-ad"> {{$animal->habitat }}
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Animal Description:</h3>
                                    <p class="infor-p edit-col-ad"> {{$animal->description }}
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Animal Categories:</h3>
                                    <p class="infor-p edit-col-ad"> {{$categories->name }}
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
