
@extends('layouts.app')

@section('contents')


    <section class="container " id="custom-edit"  >

        <div class="p-5 rounded bg-primary" >
            <h3 class="text-center ">Create A Trip </h3>
            <h5 class="text-center p-3"></h5>

            <form class="form" method="post" action="{{route('trip.store')}}">
                @csrf
                <div class="form-outline mb-4">


                    <div class="form-outline mb-4">
                        <input type="date" name="date" id="form3Example3cg" class="form-control form-control-lg" placeholder="Date" required />

                    </div>
                    <div class="form-outline mb-4">

                        <select class="form-control" name="from" data-popper-placement="From">
                            @foreach($locations as $location)
                            <option class="form-control" value="{{$location->name}}" >{{$location->name}}

                            </option>
                            @endforeach
                        </select>

{{--                        <input type="text" name="product_price" id="form3Example3cg" class="form-control form-control-lg" placeholder="From" required />--}}
                    </div>

                    <div class="form-outline mb-4">
{{--                        <input type="text" name="product_quantity" id="form3Example3cg" class="form-control form-control-lg" placeholder="To" required />--}}
                        <select class="form-control" name="to" data-popper-placement="From">
                            @foreach($locations as $location)
                            <option class="form-control" value="{{$location->name}}"  >{{$location->name}}

                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-center my-2">
                    <button type="submit" name="update" class="btn btn-md btn-primary ">Create Trip</button>
                </div>




            </form>
        </div>


    </section>


@endsection
