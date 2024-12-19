<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cities Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <h1>All Cities Data</h1>
            <h3><a href="{{route('newcity')}}"class="btn btn-primary">New City</a></h3>
            
            <table class="table">
                 <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Governer Name</th>
                    <th scope="col">View</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d=>$s1)
                  <tr>
                    <th scope="row">{{$s1->id}}</th>
                    <td>{{$s1->name}}</td>
                    <td>{{$s1->Email}}</td>
                    <td>{{$s1->gov_name}}</td>
                    <td><a href="{{route('city',$s1->id)}}"class="btn btn-primary">View</a>
                      <a href="{{route('citydel',$s1->id)}}"class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>  
        </div>
    </div>
</body>
</html>

