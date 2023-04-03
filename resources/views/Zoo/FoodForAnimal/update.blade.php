@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Food For Animal</h1>


        @include('partials.errors')

        <form action="{{route('food.update', ['f_id' => old('f_id')?? $foods->f_id])}}" method="post">
            @csrf
            @include('Zoo.FoodForAnimal.FoodFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
