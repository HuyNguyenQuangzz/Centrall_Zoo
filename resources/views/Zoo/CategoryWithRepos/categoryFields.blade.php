<input type="hidden" name="id" value="{{old('id')?? $categories->id}}">
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
                                <li class="active edit-col-ad"><a href="#description"><i class="fa-solid fa-marker"></i> Category Edit</a></li>
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
                                                    <input type="text" class="form-control edit-col-ad" id="name" name="name" value="{{old('name')?? $categories->name}}">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon" for="quantity"><i class="fa-solid fa-pen"></i></span>
                                                    <input type="text" class="form-control edit-col-ad" id="description" name="description" value="{{old('description')?? $categories->description}}">
                                                </div>



                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa-solid fa-images"></i></span>
                                                    <input type="file" name="image" id="image" >
                                                    <img class="pad-15" src="{{asset('image/'. $categories->image)}}" style="padding-left: 15px; padding-top: 15px;" alt="image" >
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-edit">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <button  type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                </button>
                                                <button type="button" onclick="location.href='{{route('category.index')}}';" class="btn btn-ctl-bt waves-effect waves-light">Discard
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

@php
    $cId = old('categories') ?? $animal->categoriesId?? null;
@endphp


</div>
{{--many-to-many relationship--}}

