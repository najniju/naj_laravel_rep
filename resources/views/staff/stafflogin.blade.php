<!DOCTYPE html>
<html lang="en">
<head>


<link rel="stylesheet" href="css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff login</title>


</head>


<body style="background-color: rgb(129, 193, 245)">
  <div class="container-fluid" >
    <div class="row">
<div class="col-md-4"></div>
    <div class="col-md-4">
    <p style="color:red">{{session('error3')}}</p>
      <h4>Staff login</h4>
<form method="post" action="{{url('Stafflog')}}"  onsubmit="return myFn()">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">User id</label><p style="color:red">{{session('error1')}}</p>
    <input id="user_id" name="user_id" type="text" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <span id="sp1"></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label><p style="color:red">{{session('error2')}}</p>
    <input name="password" type="text" class="form-control" id="exampleInputPassword1">
    <span id="sp2"></span>
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
<div class="col-md-4">
<a style="margin: 10px  10px  10px 200px" href="{{url('/')}}" class="badge badge-warning">Back to main menu</a>
<a style="margin: 10px  10px  10px 200px" href="{{url('Deptsel')}}" class="badge badge-success">Back to registration</a>

</div>
</div>
</div>
</body>
</html>
</body>
</html>