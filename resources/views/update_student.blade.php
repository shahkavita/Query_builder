<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <body>
        <div class="container">
            <div class="row">
               <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
              <div class="card-body p-4 p-md-5">

                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Student</h3>
                @foreach ($data as $d=>$s1)
                <form action="{{route('update_stu',$s1->id)}}" method="POST">
                    @csrf
                  <div class="row">
                   
                    <div class="col-md-6 mb-4">
                        <input type="hidden" id="id" name="id" value="{{$s1->id}}">
                      <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="firstName">First Name</label>
                        <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" 
                        value="{{$s1->name}}"/>
                        
                      </div>
    
                    </div>
                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="emailAddress">Email</label>
                        <div data-mdb-input-init class="form-outline">
                            <input type="email" id="email" name="email"  value="{{$s1->email}}" class="form-control form-control-lg" />
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <label class="form-label select-label">City</label>
                        <select class="form-select form-select-lg" name="city" id="city">
                          <option value="Delhi" {{ $s1->city =='Delhi'?'selected':''}}>Delhi</option>
                          <option value="Mumbai" {{ $s1->city =='Mumbai'?'selected':''}}>Mumbai</option>
                          <option value="Ahmedabad" {{ $s1->city =='Ahmedabad'?'selected':''}}>Ahmedabad</option>
                          <option value="Pune" {{ $s1->city =='Pune'?'selected':''}}>Pune</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <label class="form-label select-label">Course</label>
                      <select class="form-select form-select-lg" name="course" id="course">
                       
                      </select>
                  </div>
                </div>
                    <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
    
                      <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="phoneNumber">Age</label>
                        <input type="number" id="age" name="age"  value="{{$s1->age}}" class="form-control form-control-lg" />
                       </div>
                       @endforeach
                    </div>
                  
                </div>
                  <div class="mt-4 pt-2">
                    <input data-mdb-ripple-init class="btn btn-primary btn-lg" name="submit" id="submit" type="submit" value="Submit" />
                  </div>
    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    </div> 
    </body>
    </html>