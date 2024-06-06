<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact list</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    @include('message')
    <div class="container mt-2">
        <div class="mb-2 row">
    <div class="col-6">

        <a href="{{url('home')}}" class="btn btn-success">Home</a>
        <a href="{{url('contact/create')}}" class="btn btn-primary">Add Contacts</a>
    </div>
<div class="col-6">

    <form action="{{url('contact/list')}}"  class="row">
        @csrf
        <div class="col-5 ">

            <input type="text" name="search"  class ="form-control" placeholder="Search" value="{{$search}}">
        </div>
        <div class="col-6">

            <button type="submit" class="btn btn-primary"> Search</button>
        </div>

    </form>
</div>
</div>
    <table class="table table-striped" >
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mo_No</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $key=>$contact )
                <tr>
                <td>{{$key+1}}</td>
                <td>{{$contact->first_name. ' '.$contact->last_name}}</td>
                <td>{{$contact->mo_no}}</td>

                <td>
                    <a href="{{url('contact/show/'.$contact->id)}}" class="btn btn-success ">Show</a>
                    <a href="{{url('contact/edit/'.$contact->id)}}" class="btn btn-primary ">Edit</a>
                    <a href="{{url('contact/destroy/'.$contact->id)}}" class="btn btn-danger ">Delete</a>
                    </td>
                    </tr>
                @endforeach
        </tbody>
        </table>
    </div>
    {{ $contacts->appends(['search'=>$search])->links()}}
</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
