<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Student Details</h2>
            <ul>
                @foreach ($data as $d=>$s1 )
                    <li>Id:-{{$s1->id}}</li>
                    <li>Name:-{{$s1->name}}</li>
                    <li>Email:-{{$s1->email}}</li>
                    <li>Age:-{{$s1->age}}</li>
                    <li>City:-{{$s1->city}}</li>
                @endforeach
                <br>
                <a href="{{route('student')}}" class="btn btn-info">Home</a>
            </ul>
        </div>
    </div>
   
</body>
</html>