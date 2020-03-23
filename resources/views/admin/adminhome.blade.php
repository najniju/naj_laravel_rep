<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminhome</title>
</head>
<body style="background-color: rgb(129, 193, 245)">
    <div class="container-fluid">
    <div style="background-color: navy" class="row">
      
      <h6 style="color: white; margin-left:500px" >WELCOME TO ADMIN HOME PAGE</h4>
    
    </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <p style="color: red">{{session('msg')}}</p>

<div class="list-group" style="margin-top: 100px">

  
  <a href="{{url('Changeun/'.$users->id)}}" class="list-group-item list-group-item-action list-group-item-primary">Change Username</a>
  <a href="{{url('Changepw/'.$users->id)}}" class="list-group-item list-group-item-action list-group-item-success">Change Password</a>
  <a href="{{url('deptinsert')}}" class="list-group-item list-group-item-action list-group-item-info">Add Department</a>
</div>
  </div>
  <div class="col-md-4">
    <div class="row">

    <form action="{{('AdminLogout')}}" method="post">
      @csrf
  <button style="margin: 10px  10px  10px 300px" type="submit" class=" btn btn-danger">Logout</button>
  </form>
  <a style="margin: 10px  10px  10px 300px" href="{{url('/')}}" class="badge badge-warning">Back to main menu</a>

</div>
</div>
</div>
</div>
</body>
</html>