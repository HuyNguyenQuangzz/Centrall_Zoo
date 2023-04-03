@extends('masters.customerMaster')

@section('main')

<div class="container pad-top-200">

        <div class="row">
            <div class="col-md-6">
                <div id="slider" class="owl-carousel product-slider">
                    <div class="item">
                        <img src="image/cu.png" />
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="product-dtl">
                    <div class="product-info">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="single-product-details res-pro-tb">

                                <h1 class="title-hone edit-col-ad">animal name</h1>
                                <span class="single-pro-star">
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
											<i class="fa fa-star col-yel"></i>
										</span>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Animal Quantity:</h3>
                                    <p class="infor-p edit-col-ad">
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Animal Habitat:</h3>
                                    <p class="infor-p edit-col-ad">
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Animal Description:</h3>
                                    <p class="infor-p edit-col-ad">
                                    </p>
                                </div>
                                <div class="detail-Class">
                                    <h3 class="title-hbar edit-col-ad">Animal Categories:</h3>
                                    <p class="infor-p edit-col-ad">
                                    </p>
                                </div>





                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <h1 class="pb-4 mb-4 font-italic">
                Zoo map
            </h1>
            <img src="https://www.colchester-zoo.com/wp-content/uploads/2019/02/app-map-02-1024x632.png">
        </div>
{{--        <div class="product-info-tabs">--}}
{{--            <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <div class="tab-content" id="myTabContent">--}}
{{--                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">--}}
{{--                    <div class="review-heading">REVIEWS</div>--}}
{{--                    <p class="mb-20">There are no reviews yet.</p>--}}
{{--                    <form class="review-form">--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Your rating</label>--}}
{{--                            <div class="reviews-counter">--}}
{{--                                <div class="rate">--}}
{{--                                    <input type="radio" id="star5" name="rate" value="5" />--}}
{{--                                    <label for="star5" title="text">5 stars</label>--}}
{{--                                    <input type="radio" id="star4" name="rate" value="4" />--}}
{{--                                    <label for="star4" title="text">4 stars</label>--}}
{{--                                    <input type="radio" id="star3" name="rate" value="3" />--}}
{{--                                    <label for="star3" title="text">3 stars</label>--}}
{{--                                    <input type="radio" id="star2" name="rate" value="2" />--}}
{{--                                    <label for="star2" title="text">2 stars</label>--}}
{{--                                    <input type="radio" id="star1" name="rate" value="1" />--}}
{{--                                    <label for="star1" title="text">1 star</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Your message</label>--}}
{{--                            <textarea class="form-control" rows="10"></textarea>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" name="" class="form-control" placeholder="Name*">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" name="" class="form-control" placeholder="Email Id*">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button class="round-black-btn">Submit Review</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    </div>
</div>

@endsection

@section('script')
@endsection
