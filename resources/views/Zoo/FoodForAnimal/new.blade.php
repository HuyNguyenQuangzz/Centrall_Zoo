@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">New Food for Animal</h1>
        {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
        @include('partials.errors')

        <form action="{{route('food.store')}}" method="post">
            @csrf
            @include('Zoo.FoodForAnimal.FoodFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
