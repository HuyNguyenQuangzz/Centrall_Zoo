@extends('masters.zooMaster')

@section('main')
    {{--        //text information--}}
    <div class="container">

        @include('partials.zooCarousel')

        <div class="row">
            <div class="col-md-8">
                <br>
                <h1 class="pb-4 mb-4 font-italic">
                    Zoo map
                </h1>
                <img src="https://www.colchester-zoo.com/wp-content/uploads/2019/02/app-map-02-1024x632.png">
                <p class="text_introduct">
                    In <b> Central Zoo</b> is one of the biggest zoos in the town. The land area of the zoo is 33 acres. CENTRAL zoo was established in the year
                    1980 with 10-acre land but lately it was modified and land area was also added in the year 2000.
                    Proper residing space for all the type of animals has been made and maintains human security at high rate.
                    Proper supply of food for all the animals is maintained and checked at regular intervals.
                    <br>Zoos are places where wild animals are kept for public display.
                    Zoos are often the sites of sophisticated breeding centers, where endangered species may be protected and studied.
                    Some zoos, like this aquarium in Monterey, California, are dedicated to one species or set of species
                </p>
                <p class="text_introduct">
                    <i>This is an ideal place to help you and your family discharge the street, relax after many hours of work. An option suitable for everyone.</i>
                    <br>
                    <br>
                </p>
            </div>
        </div>
    </div>

    {{--        // footer 1--}}

    {{--    //footer 2--}}


@endsection

@section('script')
@endsection
