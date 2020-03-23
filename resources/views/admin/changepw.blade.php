<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  style="background-color: rgb(129, 193, 245)">
<div class="container">
        <div class="row">
<div class="col-md-4"></div>
            <div class="col-md-4">
<p style="color: red">{{session('msg2')}}</p>

<form action="{{url('PwUpd/'.$users->id)}}" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Existing password</label>
    <input name="existing_password" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New password</label>
    <input name="new_password" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm new password</label>
    <input name="confirm_new_password" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Change password</button>
</form>

</div>
<div class="col-md-4">
  <form action="{{('BackHome2')}}" method="post">
        @csrf
    <button style="margin: 10px  10px  10px 200px" type="submit" class="btn btn-outline-success">Home</button>
    </form>
    <a style="margin: 10px  10px  10px 200px" href="{{url('/')}}" class="badge badge-warning">Back to main menu</a>

  </div>
</div>
</div>
</body>
</html>