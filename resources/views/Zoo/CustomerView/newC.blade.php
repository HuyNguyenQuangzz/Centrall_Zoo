@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4 edit-col-ad">New Customer</h1>
        {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
        @include('partials.errors')

        <form action="{{route('customer.storeC')}}" method="post">
            @csrf
            @include('Zoo.CustomerView.customerFields')
            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('customer.index')}}" class="btn btn-success">Cancel</a>
        </form>
    </div>
@endsection
