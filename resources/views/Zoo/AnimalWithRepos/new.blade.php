@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4 edit-col-ad">New Animal</h1>
        {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
        @include('partials.errors')

        <form action="{{route('animal.store')}}" method="post">
            @csrf
            @include('Zoo.AnimalWithRepos.animalFields')

        </form>
    </div>
@endsection
