@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4 edit-col-ad">Update An Existing Categories</h1>


        @include('partials.errors')

        <form action="{{route('category.update', ['id' => old('id')?? $categories->id])}}" method="post">
            @csrf
            @include('Zoo.CategoryWithRepos.categoryFields')


        </form>
    </div>
@endsection
