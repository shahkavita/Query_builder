<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Student List</h2>
            <h2><a href="/add" class="btn btn-info">Add student</a></h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Course </th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d=>$s2)
                  <tr>
                    <th scope="row">{{$s2->id}}</th>
                    <td>{{$s2->name}}</td>
                    <td>{{$s2->email}}</td>
                    <td>{{$s2->age}}</td>
                    <td>{{$s2->city}}</td>
                    <td>{{$s2->c_name}}</td>
                    <td><a href="{{route('viewstudent',$s2->id)}}" class="btn btn-info">View</a>
                        <a href="{{route('updatestudent',$s2->id)}}" class="btn btn-warning">Update</a>
                        <a href="{{route('delstudent',$s2->id)}}" class="btn btn-danger">Delete</a>
                        
                    </td>
                   </tr>
                 
                  @endforeach
                </tbody>
              </table> 
              {{--{{ $data1->links() }}--}}
             
        </div>
    </div>
</body>
</html>