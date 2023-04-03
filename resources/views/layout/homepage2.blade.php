<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>

</head>

<body>
@php
    use App\Http\Controllers\Project1;
    use Carbon\Carbon;
@endphp

<div class="container">
    @csrf
    <div class="row">
        <div class="col-3">
            <h1>Musteriler</h1>
        </div>
        <div class="col-6"></div>
        <div class="col-3">
            <a class="btn btn-primary" href="{{route('insert')}}" role="button">Yeni Musteri</a>
        </div>
    </div>
    <table class="table">

        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">AD SOYAD</th>
            <th scope="col">YAS</th>
            <th scope="col">CINSIYYET</th>
            <th scope="col">AVTOMOBIL MARKASI</th>
            <th scope="col"></th>
        </tr>
        </thead>


        <tbody>
        @foreach($customer as $key)
            <tr>
                <th scope="row">{{$key->id}}</th>
                <td>{{$key->name}} {{$key->surname}}</td>
                <td>{{Carbon::now()->diffInYears($key->birthdate)}}</td>

                <td>{{$key->gender}}</td>
                <td>{{$key->carbrand}}</td>
                <td>
                    <a href="{{route('updatecus',$key->id)}}" class="link-info">Redakte et</a>
                    <a href="{{route('customerdelete',$key->id)}}" class="link-danger delete">Sil</a>
                </td>

            </tr>
        @endforeach


        </tbody>
    </table>


</div>


<script language="JavaScript" type="text/javascript">
    $(document).ready(function () {
        $("a.delete").click(function (e) {
            if (!confirm('Silmək istədiyinizə əminsinizmi?')) {
                e.preventDefault();
                return false;
            }
            return true;
        });
    });
</script>

</body>

</html>
