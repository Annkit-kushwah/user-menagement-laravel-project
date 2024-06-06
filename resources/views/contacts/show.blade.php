<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact Show Page</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    @include('message')


    <div class="card" style="width:400px">

        <div class="card-body">
          <h4 class="card-title">Name:{{$contact->first_name . ' ' . $contact->last_name}}</h4>
          <p class="card-text">Mobile No:{{$contact->mo_no}}</p>
          <a href="{{url('contact/destroy/'.$contact->id)}}" class="btn btn-danger ">Delete</a>
        </div>
      </div>
</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
