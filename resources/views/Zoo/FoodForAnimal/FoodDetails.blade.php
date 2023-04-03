<dl class="row">
    {{--    <dt class="col-sm-3">ID</dt>--}}
    {{--    <dd class="col-sm-9">{{ $foods->f_id }}</dd>--}}

    <dt class="col-sm-3">Name</dt>
    <dd class="col-sm-9">{{ $foods->f_name }}</dd>

    <dt class="col-sm-3">Image</dt>
    {{--    <dd class="col-sm-9">{{ $foods->f_image }}</dd>--}}
    <img src="{{asset('image/'. $foods->f_image)}}" alt="image" style="width: 30%">


    {{--    <dt class="col-sm-3">Image</dt>--}}
    {{--    <dd class="col-sm-9"><img src="{{ asset('/storage/foods/'.$foods->f_image) }}" style='max-width:200px; max-height:200px'></dd>--}}

</dl>
