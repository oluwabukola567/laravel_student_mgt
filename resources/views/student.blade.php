<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
    <title>Student management system</title>
</head>
<body>
@include('navbar')

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
                @include('studentlist')
            </section>
            </div>
        </div>
        </div>
@elseif($layout == 'create')  
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include('studentlist')
            </section>
            <section class="col-md-5">
            <div class="card mb-3">
                <img src=""
                class="card-img-top" 
                
                alt="">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">
                        Enter the information about the new student.
                    </p>
                    <form action="{{ url('/store') }}" method="post">
                         @csrf
                    <div class="form-group">
                        <label>CNE</label>
                        <input name="cne" type="text" class="form-control" placeholder="Enter Cne">
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                    </div><div class="form-group">
                        <label>Second Name</label>
                        <input name="secondName" type="text" class="form-control" placeholder="Enter Second Name">
                    </div><div class="form-group">
                        <label>Age</label>
                        <input name="age" type="text" class="form-control" placeholder="Enter Age">
                    </div><div class="form-group">
                        <label>Speciality</label>
                        <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
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
            <section class="col-md-7">
                @include('studentlist')
            </section>
            <section class="col-md-5"></section>
    
        </div>
           </div>

@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
                <section class="col-md-7">
                    @include('studentlist')
                </section>
                <section class="col-md-5">
                            <div class="card mb-3">
                                <img src=""class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4  class="card-title"><strong>Update the information of the student.</strong></h4>
                                        <form action="{{ url('/update/' .$student->id) }}" method="post">
                                        @csrf
                                            <div class="form-group">
                                                <label>CNE</label>
                                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" placeholder="Enter Cne">
                                            </div>
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                                            </div><div class="form-group">
                                                <label>Second Name</label>
                                                <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" placeholder="Enter Second Name">
                                            </div><div class="form-group">
                                                <label>Age</label>
                                                <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter Age">
                                            </div><div class="form-group">
                                                <label>Speciality</label>
                                                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>