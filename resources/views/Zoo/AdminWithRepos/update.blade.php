@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4 edit-col-ad">Update An Existing Admin</h1>


        @include('partials.errors')

        <form action="{{route('admin.update', ['id' => old('id')?? $admin->id])}}" method="post">
            @csrf
            @include('Zoo.AdminWithRepos.adminFields')


        </form>
    </div>
@endsection
@section('script')
@endsection
