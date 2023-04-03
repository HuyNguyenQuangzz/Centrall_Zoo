@extends('masters.zooMaster')

@section('main')


    <div class="container">
        <h1 class="display-4">Foods For Animal Details</h1>
        @include('Zoo.FoodForAnimal.FoodDetails')
        <a type="button" href="{{route('food.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
    </div>
@endsection
