@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4 edit-col-ad">Update An Existing Animal</h1>


        @include('partials.errors')

        <form action="{{route('animal.update', ['id' => old('id')?? $animal->id])}}" method="post">
            @csrf
            @include('Zoo.AnimalWithRepos.animalFields')


        </form>

    </div>
@endsection
@section('script')
@endsection
