@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Animals List</h4>
                            <div class="add-product">
                                <a href="{{route('category.create')}}">Add Animal</a>
                            </div>
                            <table >
                                <tr style="border-bottom: 3px solid #fff;">

                                    <th>Category Name</th>
                                    <th>Category Description</th>
{{--                                    --}}

                                    <th>Setting</th>
                                </tr>
                                @foreach($categories as $c)
                                    <tr>

                                        <td class="header__navbar-item header__navbar-item--has-qr  ">{{$c->name}}
                                            <div class="header__qr">
                                                <img src="{{asset('image/'. $c->image)}}" alt="" class="header__qr-img">
                                            </div>
                                        </td>
                                        <td>
                                            <button class="pd-setting">GOOD</button>
                                        </td>
                                        <td>{{$c->description}}</td>


                                        <td>
                                            <a href="{{route('category.edit', ['id' => $c->id])}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                            <a href="{{route('category.confirm', ['id' => $c->id])}}" ><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa-solid fa-trash"></i></button></a>
                                            <a href="{{route('category.show', ['id' => $c->id])}}" ><button data-toggle="tooltip" title="Detail" class="pd-setting-ed"><i class="fa-solid fa-info"></i></button></a>
                                        </td>
                                    </tr>
                                @endforeach


                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
