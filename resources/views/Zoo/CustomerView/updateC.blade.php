@extends('masters.zooMaster')

@section('main')
    <div class="container">
        <h1 class="display-4 edit-col-ad">Update An Existing Customer</h1>


        @include('partials.errors')

        <form action="{{route('customer.updateC', ['c_id' => old('c_id')?? $customer->c_id])}}" method="post">
            @csrf
            @include('Zoo.CustomerView.customerFields')


        </form>
    </div>
@endsection
