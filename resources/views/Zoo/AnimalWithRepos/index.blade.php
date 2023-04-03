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
                                <a href="{{route('animal.create')}}">Add Animal</a>
                            </div>
                            <table >
                                <tr style="border-bottom: 3px solid #fff;">

                                    <th>Animal Name</th>
                                    <th>Status</th>
                                    <th>Quantity</th>
                                    <th>Category</th>
                                    <th>Habitat</th>

                                    <th>Setting</th>
                                </tr>
                                @foreach($animal as $a)
                                <tr>

{{--                                            <img src="{{asset('image/'. $a->image)}}" alt="" > </a></td>--}}
                                    <td class="header__navbar-item header__navbar-item--has-qr  ">{{$a->name}}
                                        <div class="header__qr">
                                            <img src="{{asset('image/'. $a->image)}}" alt="" class="header__qr-img">
                                        </div>
                                    </td>
                                    <td>
                                        <button class="pd-setting">Live</button>
                                    </td>
                                    <td>{{$a->quantity}}</td>
                                    <td>{{$a->categoriesName}}</td>
                                    <td>{{$a->habitat }}</td>

                                    <td>
                                        <a href="{{route('animal.edit', ['id' => $a->id])}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                        <a href="{{route('animal.confirm', ['id' => $a->id])}}" ><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa-solid fa-trash"></i></button></a>
                                        <a href="{{route('animal.show', ['id' => $a->id])}}" ><button data-toggle="tooltip" title="Detail" class="pd-setting-ed"><i class="fa-solid fa-info"></i></button></a>
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
