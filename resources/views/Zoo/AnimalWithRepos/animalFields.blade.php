<input type="hidden" name="id" value="{{old('id')?? $animal->id}}">
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
                                <li class="active edit-col-ad"><a href="#description"><i class="fa-solid fa-marker"></i> Animal Edit</a></li>
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
                                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $animal->name}}">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon" for="quantity"><i class="fa-solid fa-pen"></i></span>
                                                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{old('quantity')?? $animal->quantity}}">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa-solid fa-money-bill-1-wave"></i></span>
                                                    <input type="text" class="form-control" id="description" name="description" value="{{old('description')?? $animal->description}}">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa-solid fa-pen-to-square"></i></span>
                                                    <input type="text" class="form-control" id="habitat" name="habitat" value="{{old('habitat')?? $animal->habitat}}">
                                                </div>
                                                @php
                                                    $cId = old('categories') ?? $animal->categoriesId?? null;
                                                @endphp
                                                <select name="categories" class="form-control pro-edt-select form-control-primary mar-bot-15" id="categories">
                                                    <option value="0">Please select a categories for new Animal :)</option>
                                                    @foreach($categories as $c)
                                                        <option value="{{ $c->id }}"
                                                            {{ ($cId != null && $c->id == $cId) ? 'selected' : '' }}
                                                        >{{ $c->name }}</option>
                                                    @endforeach
                                                </select>
                                                @php
                                                    $fIds = old('selectedF')?? array_column($selectedF, 'id') ?? array();
                                                @endphp



                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa-solid fa-images"></i></span>
                                                    <input type="file" name="image" id="image" >
                                                    <img class="pad-15" src="{{asset('image/'. $animal->image)}}" style="padding-left: 15px; padding-top: 15px;" alt="image" >
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-edit">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <button  type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                </button>
                                                <button type="button" onclick="location.href='{{route('animal.index')}}';" class="btn btn-ctl-bt waves-effect waves-light">Discard
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

