<?php
    // session_start();
    // include("Functions.php");
    // try{
    //     $manage = new Manage();
    //     $conn = $manage->connectToDB(); //own function that connect to database
    // }catch(Exception $e){
    //     echo "Message: " .$e->getMessage();
    // }
    
?>

<!DOCTYPE html>
<html>
<head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel='stylesheet' type='text/css' href="{{ asset('css/form.css')}}"/>
</head>
</head>
<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!--  -->
            </div>
            <div class="col-sm-6">
                <center><h3>Add Human</h3></center>
                <form class="form" action="{{ url('add')}}" method="post">
                    {{ csrf_field() }}
                    @if($errors->has('first_name'))
                        <label style="color:red" for="fname">{{$errors->first('first_name')}}</label>
                        <input class="alert alert-danger" type="text" id="fname" name="first_name">
                    @else
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="first_name" value="{{ old('first_name')}}">
                    @endif

                    @if($errors->has('middle_name'))
                        <label style="color:red" for="mname">{{$errors->first('middle_name')}}</label>
                        <input class="alert alert-danger" type="text" id="mname" name="middle_name" >
                    @else
                        <label for="mname">Middle Name</label>
                        <input  type="text" id="mname" name="middle_name" value="{{ old('middle_name')}}">
                    @endif

                    @if($errors->has('last_name'))
                        <label style="color:red" for="lname">{{$errors->first('last_name')}}</label>
                        <input class="alert alert-danger" type="text" id="lname" name="last_name" >
                    @else
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name')}}" >
                    @endif

                    @if($errors->has('email')) 
                        <label style="color:red" for="email">{{$errors->first('email')}}</label>
                        <input class="alert alert-danger" type="email" id="email" name="email" >
                    @else 
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email')}}" >
                    @endif
                    
                    @if($errors->has('password')) 
                        <label style="color:red" for="password">{{$errors->first('password')}}</label>
                        <input class="alert alert-danger" type="password" id="password" name="password" >
                    @else 
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" value="{{ old('password')}}" >
                    @endif

                    @if($errors->has('age')) 
                        <label style="color:red" for="age">{{$errors->first('age')}}</label>
                        <input class="alert alert-danger" type="text" id="age" name="age" >
                    @else 
                        <label for="age">Age</label>
                        <input type="text" id="age" name="age" value="{{ old('age')}}">
                    @endif

                    @if($errors->has('gender')) 
                        <label style="color:red" for="gender">{{$errors->first('gender')}}</label><br>
                        <!-- <input type="text" id="gender" name="gender" placeholder="Gender"> -->
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="1"> Male
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="2">Female<br>
                    @else 
                        <label for="gender">Gender</label><br>
                        <!-- <input type="text" id="gender" name="gender" placeholder="Gender"> -->
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }}> Male
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}>Female<br>
                    @endif

                    @if($errors->has('address')) 
                        <label style="color:red" for="address">{{$errors->first('address')}}</label>
                        <input class="alert alert-danger" type="text" id="address" name="address" >
                    @else 
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value="{{ old('address')}}">
                    @endif

                    <input type="submit" name="submit" value="Add Data">
                </form>
                <br/>
                <!-- <center><p>Already have an account? <a href="/login">Click here to log in</a></p></center> -->
                
            </div>
            <div class="col-sm-3">
                <!--  -->
            </div>
        </div>
    </div>
</div>

</body>
</html>
