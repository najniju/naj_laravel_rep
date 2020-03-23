<!DOCTYPE html>
<html lang="en">
<head>
<script src="{{asset('jscript/staffreg.js')}}"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(129, 193, 245)">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
<div class="col-md-6">
<p style="color: red">{{session('msgstaffreg')}}</p>

      <h2>New staff registration</h2>


      @if(count($errors)>0)
<div class="alert alert-danger">

<ol>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach


</ol>

</div>
@endif





    <form method="post" action="{{url('Staffinsert')}}" onsubmit="return myFn()">
      @csrf
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Staff name</label>
    <input id="staff_name" name="staff_name" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter staff name">
  <span id="sp1"></span>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Place</label>
    <input id="staff_place" name="staff_place" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your place">
    <span id="sp2"></span>

  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Contact</label>
    <input id="staff_contact" name="staff_contact" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your contact no:">
    <span id="sp3"></span>

  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Department</label>
    <select id="staff_dept" name="staff_dept" id="" class="form-control">
        <option value="0">Choose your department</option>
        
        @foreach($users as $user)
        <option value="{{$user->department_name}}">{{$user->department_name}}</option>
        
        @endforeach
    </select>
    <span id="sp4"></span>

  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">User id</label>
    <input id="user_id" name="user_id" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your user id">
    <span id="sp5"></span>

  </div>
 
  <div class="form-group">
    <label for="formGroupExampleInput2">Create Password</label>
    <input id="create_password" name="create_password" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
    <span id="sp6"></span>

  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Confirm Password</label>
    <input id="confirm_password" name="confirm_password" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Confirm password">
    <span id="sp7"></span>
    <span id="sp8"></span>


  </div>
  <button name="btn" type="submit" class="btn btn-primary">Register</button>
</form>


    </div>
    <div class="col-md-3">
      <div class="row">
    <div class="list-group" style="margin-top: 10px">
    <a style="margin: 10px  10px  10px 200px" href="{{url('/')}}" class="badge badge-warning">Back to main menu</a>
    <a style="margin: 10px  10px  10px 200px" href="{{url('stafflogin')}}" class="badge badge-info">Existing staff login</a>
    <!-- <a href="{{url('stafflogin')}}" class="list-group-item list-group-item-action list-group-item-info">Existing staff login</a> -->
  </div>
</div>
    </div>
    </div>
    </div>
</body>
</html>