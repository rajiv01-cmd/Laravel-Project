<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student management system</title>
  </head>
  <body>

  @include("navbar")

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

  @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
        <div class="row justify-content-center">
        <section class="col-md-7">
            @include("studentslist")
        </section class="col-md-5"></section>
        </div>
        </div>
        </div>
  @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
        <section class="col-md-7">
            @include("studentslist")
        </section>
        <section class="col-md-5">

            <div class="card mb-3">
                <img src="https://previews.123rf.com/images/maximkabb/maximkabb1608/maximkabb160800427/61642363-smart-little-schoolgirl-with-digital-tablet-in-a-classroom-child-in-an-elementary-school-education-a.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card Enter the information of the new students</h5>

                    <form action="{{ url('/store') }}" method="post">
            @csrf
        <div class="form-group">
            <label>CNE</label>
            <input name="cne" type="text" class="form-control" placeholder="Enter cne">
        </div>

        <div class="form-group">
            <label>First Name</label>
            <input name="firstName" type="text" class="form-control" placeholder="Enter first name">
        </div>
  
        <div class="form-group">
            <label>Second Name</label>
            <input name="secondName" type="text" class="form-control" placeholder="Enter second name">
        </div>

        <div class="form-group">
            <label>Age</label>
            <input name="age" type="text" class="form-control" placeholder="Enter age">
        </div>

        <div class="form-group">
            <label>Faculty</label>
            <input name="faculty" type="text" class="form-control" placeholder="Enter Faculty">
        </div>
        <input type="submit" class="btn btn-info" value="Save">
        <input type="reset" class="btn btn-warning" value="Reset">
    </form>

                </div>
            </div>

            
        </section>
        </div>
        </div>
  @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
  @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://previews.123rf.com/images/maximkabb/maximkabb1608/maximkabb160800427/61642363-smart-little-schoolgirl-with-digital-tablet-in-a-classroom-child-in-an-elementary-school-education-a.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update information of the students</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input value="{{$student->cne}}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter first name">
                            </div>
  
                            <div class="form-group">
                                <label>Second Name</label>
                                <input value="{{$student->secondName}}" name="secondName" type="text" class="form-control" placeholder="Enter second name">
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{$student->age}}" name="age" type="text" class="form-control" placeholder="Enter age">
                            </div>

                            <div class="form-group">
                                <label>Faculty</label>
                                <input value="{{$student->faculty}}" name="faculty" type="text" class="form-control" placeholder="Enter Faculty">
                            </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                        </form>


    
                    </div>
                </div>

                
            </section>
        </div>
    </div>
  @endif

    <footer></footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>