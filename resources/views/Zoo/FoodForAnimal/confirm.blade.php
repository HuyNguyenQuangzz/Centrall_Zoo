@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('Zoo.FoodForAnimal.FoodDetails')

        <form action="{{route('food.destroy', ['id' =>$foods->f_id])}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$foods->f_id}}">
            {{--            <img src="{{asset('image/'. $foods->f_image)}}" alt="image" style="width: 30%">--}}
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('food.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
