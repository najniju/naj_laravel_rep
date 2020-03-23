<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(129, 193, 245)">
    <div class="container">
        <div class="row">
<div class="col-md-4"></div>
            <div class="col-md-4">
<p style="color: red">{{session('msg1')}}</p>

<form action="{{url('UserUpd/'.$users->id)}}" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Existing user id</label>
    <input name="existing_user_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New user id</label>
    <input name="new_user_id" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm new user id</label>
    <input name="confirm_new_user_id" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Change user id</button>
</form>
</div>
<div class="col-md-4">
  <form action="{{('BackHome3')}}" method="post">
        @csrf
    <button style="margin: 10px  10px  10px 200px" type="submit" class="btn btn-outline-success">Home</button>
    </form>
  </div>
</div>
</div>
</body>
</html>