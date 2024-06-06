<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    @include('message')
    <h1> {{$user->email}}</h1>

    <div class="card" style="width:400px">
        <img class="card-img-top" src="{{asset($user->image)}}" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">{{$user->first_name}}</h4>
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          <a href="{{url('contact/create')}}" class="btn btn-primary">Add Contacts</a>
          <a href="{{url('contact/list')}}" class="btn btn-success">See Contacts</a>
          <a href="{{url('logout')}}" class="btn btn-danger">logout</a>
        </div>
      </div>
</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
