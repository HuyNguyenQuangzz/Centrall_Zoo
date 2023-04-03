@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4 edit-col-ad">Are you sure you want to delete?</h1>
        @include('Zoo.AdminWithRepos.adminDetails')

        <form class="confirm-css" action="{{route('admin.destroy', ['id' =>$admin->id])}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$admin->id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
{{--            <a href="{{route('admin.index')}}" class="btn btn-info">Cancel</a>--}}
            <a href="{{route('admin.index')}}" class="btn btn-info mar-left-15">Cancel</a>


        </form>
    </div>
@endsection
