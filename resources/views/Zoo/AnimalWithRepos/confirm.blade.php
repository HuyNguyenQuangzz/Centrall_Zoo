@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4 edit-col-ad">Are you sure you want to delete?</h1>
        @include('Zoo.AnimalWithRepos.animalDetails')

        <form class="confirm-css" action="{{route('animal.destroy', ['id' =>$animal->id])}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$animal->id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('animal.index')}}" class="btn btn-info mar-left-15">Cancel</a>
        </form>
    </div>
@endsection
