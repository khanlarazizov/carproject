@extends('layout.starp')
@section('title')
    @php
        use App\Http\Controllers\CustCont;
    @endphp

    @csrf
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
            integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">
            <h1>Avtomobiller</h1>
        </div>
        <div class="col-3">


            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Yeni
                Avtomobil</a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addModalLabel">Yeni Avtomobil</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" class="row g-3">
                                @csrf
                                <div class="col-12">
                                    <label for="carname" class="form-label">Avtomobil Markasi</label>
                                    <input type="text" class="form-control" id="car_name" name="car_name">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="add_car" id="addcar">Save changes</button>
                                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

{{--           edit modal--}}
{{--            <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel"--}}
{{--                    aria-hidden="true">--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h1 class="modal-title fs-5" id="addModalLabel">Yeni Avtomobil</h1>--}}
{{--                        <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                aria-label="Close"></button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <form method="post" class="row g-3">--}}
{{--                            @csrf--}}
{{--                            <div class="col-12">--}}
{{--                                <label for="carname" class="form-label">Avtomobil Markasi</label>--}}
{{--                                <input type="text" class="form-control" id="car_name" name="car_name">--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="submit" class="add_car" id="addcar">Save changes</button>--}}
{{--                                <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>


        @endsection

        @section('content')
            <div class="container">
                @csrf

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Avtomobil Markasi</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody id="memberBody">
                    @foreach($car as $key)
                        <tr>
                            <th scope="row">{{$key->id}}</th>
                            <td>{{$key->car_name}}</td>
                            <td>
                                <a href="{{route('updatecar',$key->id)}}" id="updatecar" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editmodal">Redakte
                                    et</a>
                                <a href="{{route('cardelete',$key->id)}}" id="deletecar"
                                   class="btn btn-danger">Sil</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


            <meta name="csrf-token" content="{{ csrf_token() }}">
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"
                    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>


            <script type="text/javascript">
                $(document).ready(function () {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                    $('#addcar').click(function () {
                        $.ajax({
                            type: 'post',
                            url: 'carinsertPost',
                            data: $('form').serialize()

                        })
                    })



                });

            </script>

@endsection
