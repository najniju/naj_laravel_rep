<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login insert</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
<div class="col-md-4"></div>
    <div class="col-md-4">
    
<form method="post" action="{{url('Adminreg')}}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">User id</label>
    <input name="user_id"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>

</body>
</html>