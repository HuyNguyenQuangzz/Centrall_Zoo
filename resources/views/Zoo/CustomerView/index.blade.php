@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Customer List</h4>
{{--                            <div class="add-product">--}}
{{--                                <a href="{{route('customer.createC')}}">Add Customer</a>--}}
{{--                            </div>--}}
                            <table >
                                <tr style="border-bottom: 3px solid #fff;">
                                    <th scope="col">Full Name</th>
                                    <th scope="col">DoB</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone Number</th>

                                    <th>Setting</th>
                                </tr>
                                @foreach($customer as $c)
                                    <tr>
                                        <td>{{$c->c_fullname}}</td>
                                        <td>{{$c->c_dob}}</td>
                                        <td>{{$c->c_gender}}</td>
                                        <td>{{$c->c_email}}</td>
                                        <td>{{$c->c_address}}</td>
                                        <td>{{$c->c_phone}}</td>

                                        <td>
                                            <a href="{{route('customer.editC', ['c_id' => $c->c_id])}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa-solid fa-pen-to-square"></i></button></a>
{{--                                            <a href="{{route('customer.confirmC', ['c_id' => $c->c_id])}}" ><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa-solid fa-trash"></i></button></a>--}}
                                            <a href="{{route('customer.showC', ['c_id' => $c->c_id])}}" ><button data-toggle="tooltip" title="Detail" class="pd-setting-ed"><i class="fa-solid fa-info"></i></button></a>
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
