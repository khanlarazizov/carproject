@extends('layout.homepage')


@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <form action="{{route('customers.updatePost',$customerInfo->id)}}" method="post">
        @csrf

        <div action="insert" class="row">
            <div class="col-9">
                <h1>Yeni musteri</h1>
            </div>
            <div class="col-3">
                <button class="btn btn-primary" type="submit" name="insert">Yaddas</button>
                <a class="btn btn-primary" href="{{route('customers.index')}}" role="button">Imtina</a>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="controlFname">Ad</label>
                <input type="text" class="form-control" value="{{$customerInfo->name}}" required=""
                       aria-label="First name" id="controlFname"
                       name="name">
            </div>
            <div class="col-6">
                <label for="controlLname">Soyad</label>
                <input type="text" class="form-control" value="{{ $customerInfo->surname}}" required=""
                       aria-label="Last name" id="controlLname"
                       name="surname">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="datapicker">Tevellud</label>
                <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control" required="" name="birthdate"
                           value="{{\Carbon\Carbon::parse($customerInfo->birthdate)->format('m/d/Y') }}">
                    <span class="input-group-append">
                        <span class="input-group-text bg-white d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>

                </div>
            </div>
            <div class="col-6">
                <label for="gender">Cinsiyyet</label>
                <div id="gender">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1"
                               value="Kisi" {{ ($customerInfo->gender=='Kisi')? "checked" : "" }}>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Kisi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2"
                               value="Qadin" {{($customerInfo->gender=='Qadin')? "checked" : "" }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Qadin
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="brand">Avtomobil Markasi</label>
                    <select class="form-select" aria-label="Default select example" id="brand" name="carbrand">

                        @foreach ($customerInfo as $key)
                            <option
                                value="$car->id" {{ ($key->carbrand=='$car->car_name')? "selected" : "" }}>{{ $key->carbrand }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="color">Rengi</label>
                    <input type="text" class="form-control" aria-label="Last name" id="color" name="color"
                           value="{{ $customerInfo->color}}">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for="year">Buraxilis Ili</label>
                    <select class="form-select" aria-label="Default select example" id="year" name="releaseyear">

                        <option value="2000" {{ ($customerInfo->releaseyear=='2000')? "selected" : "" }}>2000</option>
                        <option value="2001" {{ ($customerInfo->releaseyear=='2001')? "selected" : "" }}>2001</option>
                        <option value="2002" {{ ($customerInfo->releaseyear=='2002')? "selected" : "" }}>2002</option>
                    </select>
                </div>
            </div>
        </div>
    </form>

    <script>
        jQuery(document).ready(function ($) {
            $('.datepicker').datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>

@endsection
