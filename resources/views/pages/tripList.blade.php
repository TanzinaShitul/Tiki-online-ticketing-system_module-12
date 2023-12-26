@extends('layouts.app')



@section('contents')



    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="table1">

                        <h2>Trip List</h2>
                        <p>Welcome sabbir!</p>
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
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>

                                {{--                            <th scope="col">Role</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Show details table -->
                            @foreach($trips as $trip)
                                <tr>
                                    <td>{{$trip->id}}</td>
                                    <td>{{$trip->date}}</td>
                                    <td>{{$trip->from}}</td>
                                    <td>{{$trip->to}}</td>
                                    <td>
                                        <a href=""> <button class="btn btn-sm btn-primary edit mx-1" name="update" >Update</button></a>
                                    </td>

                                    <form action="" method="post">
                                        @method('DELETE')



                                        <td>
                                            <button class="btn btn-sm btn-danger mx-2" name="delete" type="submit">Delete Product</button>
                                        </td>
                                    </form>
{{--                                    <td>--}}
{{--                                        <a href=""> <button class="btn btn-sm btn-warning mx-2" name="sell" type="submit">Sell</button></a>--}}
{{--                                    </td>--}}


                                </tr>
                            @endforeach


                            <!-- <br> -->

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
