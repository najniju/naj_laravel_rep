<!DOCTYPE html>
<html lang="en">
<head>
<script src="{{asset('jscript/studentreg.js')}}"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    
</head>
<body style="background-color: rgb(129, 193, 245)">

    <div class="container-fluid" >
      <div style="background-color: navy" class="row">
      
        <h6 style="color: white; margin-left:500px" >WELCOME TO STAFF HOME PAGE</h4>
      
      </div>
        <div  class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <p style="color: red">{{session('msgstudent')}}</p>

            <h2>New student registration</h2>

    <form method="post" action="{{url('Studentinsert')}}" onsubmit="return myFn()">
      @csrf
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Student name</label>
    <input id="student_name" name="student_name" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter student name">
  <span id="sp1"></span>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Place</label>
    <input id="student_place" name="student_place" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your place">
    <span id="sp2"></span>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Contact</label>
    <input id="student_contact" name="student_contact" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your contact no:">
    <span id="sp3"></span>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Department</label>
    <input readonly value="{{$users->staff_dept}}" name="student_dept" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your contact no:">
    
  </div>
  <button name="btn" type="submit" class="btn btn-primary">Register</button>
</form>
</div>
<div class="col-md-3">
    <form action="{{('StaffLogout')}}" method="post">
      @csrf
  <button  type="submit" style="margin: 10px  10px  10px 150px" class=" btn btn-danger">Logout</button>
  </form>
  <a style="margin: 10px  10px  10px 150px" href="{{url('/')}}" class="badge badge-warning">Back to main menu</a>

  </div>
  </div>
  </div>
</body>
</html>