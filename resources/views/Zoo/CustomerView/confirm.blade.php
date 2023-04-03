@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4 edit-col-ad">Are you sure you want to delete?</h1>
        @include('Zoo.CustomerView.customerDetails')

        <form action="{{route('customer.destroyC', ['c_id' =>$customer->c_id])}}" method="post">
            @csrf
            <input type="hidden" name="c_id" value="{{$customer->c_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            {{--            <a href="{{route('admin.index')}}" class="btn btn-info">Cancel</a>--}}
            <a href="{{route('customer.index')}}" class="btn btn-success">Cancel</a>
        </form>
    </div>
@endsection
