<input type="hidden" name="id" value="{{old('id')?? $foods->f_id}}">
<div class="form-group">
    <label for="f_name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="f_name" name="f_name" value="{{old('f_name')?? $foods->f_name}}">
    {{--        when removing title value to trigger "required" validation, --}}
    {{--        old('title') is not set so $book['title'] is shown--}}
    {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group">
    <label for="f_image" class="font-weight-bold">Image</label>
    <input type="file" class="form-control" id="f_image" name="f_image" value="{{old('f_image')?? $foods->f_image}}">
    <img src="{{asset('image/'. $foods->f_image)}}" alt="image" style="width: 30%">
</div>
<div class="form-group">
    {{--    <label for="f_image" class="font-weight-bold">Image</label>--}}

    {{--    <input type="file" name="f_image" id="f_image"--}}

    {{--           value="{{old('image')?? $foods->f_image}}">--}}
    {{--    <img src="{{asset('image/'. $foods->f_image)}}" alt="image" style="width: 30%">--}}
</div>
