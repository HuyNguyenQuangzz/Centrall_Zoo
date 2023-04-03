<input type="hidden" name="id" value="{{old('id')?? $admin->id}}">
<div class="all-content-wrapper">
    <!-- Single pro tab start-->
    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row-edit">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active edit-col-ad"><a href="#description"><i class="fa-solid fa-marker"></i> Admin Edit</a></li>
                                {{--                                <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>--}}
                                {{--                                <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li>--}}
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row-edit pad-bot-35">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon" ><i class="fa-solid fa-paw"></i></span>
                                                    <input type="text" class="form-control" id="a_username" name="a_username" value="{{old('a_username')?? $admin->a_username}}">
                                                </div>
{{--                                                <div class="input-group mg-b-pro-edt">--}}
{{--                                                    <span class="input-group-addon" for="quantity"><i class="fa-solid fa-pen"></i></span>--}}
{{--                                                    <input type="password" class="form-control" id="a_password_hash" name="a_password_hash" value="{{old('a_password_hash')?? $admin->a_password_hash}}">--}}
{{--                                                </div>--}}
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa-solid fa-money-bill-1-wave"></i></span>
                                                    <input type="text" class="form-control" id="a_fullname" name="a_fullname" min="0" value="{{old('a_fullname')?? $admin->a_fullname}}">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa-solid fa-pen-to-square"></i></span>
                                                    <input type="text" class="form-control" id="a_phone" name="a_phone" min="0" value="{{old('a_phone')?? $admin->a_phone}}">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa-solid fa-pen-to-square"></i></span>
                                                    <input type="text" class="form-control" id="a_email" name="a_email" min="0" value="{{old('a_email')?? $admin->a_email}}">
                                                </div>



                                            </div>
                                        </div>

                                    </div>
                                    <div class="row-edit">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <button  type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                </button>
                                                <button type="button" onclick="location.href='{{route('admin.index')}}';" class="btn btn-ctl-bt waves-effect waves-light">Discard
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--one-to-many relationship--}}



</div>
{{--many-to-many relationship--}}

