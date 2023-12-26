@extends('layouts.app')

@section('contents')

    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="table1">
                 <div class="mb-4">
                        <h2>Sold Tickets History</h2>
                 </div>
                        <div class="d-flex justify-content-between">
                            {{--                            <div>--}}
                            {{--                                <!-- <a href="">All Students</a> -->--}}
                            {{--                                <!-- <span> | </span> -->--}}
                            {{--                                <a href=""><button class="btn btn-primary btn-sm">Add new Product</button></a>--}}
                            {{--                                <a href=""><button class="btn btn-primary btn-sm mx-3">Sales Report</button></a>--}}
                            {{--                            </div>--}}

                        </div>

                        <hr>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Serial</th>
                                <th scope="col">Date</th>
                                <th scope="col">Trip</th>
                                <th scope="col">Tickets</th>


                                {{--                            <th scope="col">Role</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Show details table -->
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->id}}</td>
                                    <td>{{$ticket->created_at}}</td>
                                    <td></td>
{{--                                    @foreach($ticket->seat_number as $seat)--}}
{{--                                    <td>{{$seat}}</td>--}}
{{--                                    @endforeach--}}
                                    <td>{{implode(',',$ticket->seat_number)}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
