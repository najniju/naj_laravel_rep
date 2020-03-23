<!DOCTYPE html>
<html lang="en">
<head>
<script src="{{asset('jscript/deptinsert.js')}}"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a department</title>
</head>

<body style="background-color: rgb(129, 193, 245)">
  <div class="container-fluid">
    <div class="row">
<div class="col-md-4"></div>
    <div class="col-md-4">
    <p style="color: red">{{session('msgadd')}}</p>
   
<form method="post" action="{{url('DeptAdd')}}" onsubmit="return myFn()">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Department name</label>
    <input id="department_name" name="department_name"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span id="sp1"></span>

  </div>

  
  <button type="submit" class="btn btn-primary">Add department</button>
</form>
</div>
<div class="col-md-4">

    <form action="{{('BackHome')}}" method="post">
        @csrf
    <button style="margin: 10px  10px  10px 200px" type="submit" class="btn btn-outline-success">Home</button>
    </form>
    <a style="margin: 10px  10px  10px 200px" href="{{url('/')}}" class="badge badge-warning">Back to main menu</a>
 
</div>
</div>
</div>

</body>
</html>