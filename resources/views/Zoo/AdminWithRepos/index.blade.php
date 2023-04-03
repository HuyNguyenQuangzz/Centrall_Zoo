@extends('masters.zooMaster')

@section('main')
    <div class="container ">
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Admin List</h4>
                            @include('Zoo.AdminWithRepos.sessionmessage')
                            <div class="add-product">
                                <a href="{{route('admin.create')}}">Add Admin</a>
                            </div>
                            <table >
                                <tr style="border-bottom: 3px solid #fff;">
                                    <th>Full name</th>
                                    <th>Phone Number</th>
                                    <th>Email Contact</th>


                                    <th>Setting</th>
                                </tr>
                                @foreach($admin as $a)
                                    <tr>

                                        <td>{{$a->a_fullname}}</td>
                                        <td>
                                            <button class="pd-setting">GOOD</button>
                                        </td>
                                        <td>{{$a->a_phone}}</td>
                                        <td>{{$a->a_email}}</td>


                                        <td>
                                            <a href="{{route('admin.edit', ['id' => $a->id])}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                            <a href="{{route('admin.confirm', ['id' => $a->id])}}" ><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa-solid fa-trash"></i></button></a>
                                            <a href="{{route('admin.show', ['id' => $a->id])}}" ><button data-toggle="tooltip" title="Detail" class="pd-setting-ed"><i class="fa-solid fa-info"></i></button></a>
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
