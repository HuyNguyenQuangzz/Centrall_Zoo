@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Food Index</h1>
        @include('Zoo.FoodForAnimal.sessionmessage')
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                {{--        <th scope="col">#</th>--}}
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                {{--                <th scope="col">Pages</th>--}}
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($foods as $f)
                <tr>
                    <td>{{$f->f_name}}</td>
                    {{--                    <td>{{$f->author}}</td>--}}
                    {{--                    <td>{{$f->f_image}}</td>--}}
                    <td>
                        <a href="{{route('food.show', ['f_id' =>$f->f_id])}}">
                            <img src="{{asset('image/'. $f->f_image)}}" alt="" style="width: 30%">
                        </a>
                    </td>
                    {{--                    <td>--}}
                    {{--                        <img src="{{ asset('/storage/category/'.$f->f_image) }}"  style='max-width:250px; max-height:250px'>--}}
                    {{--                    </td>--}}



                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('food.show', ['f_id' => $f->f_id])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('food.edit', ['f_id' => $f->f_id])}}"
                        >Edit</a>
                    </td>
                    <td>

                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('food.confirm', ['f_id' => $f->f_id])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection

