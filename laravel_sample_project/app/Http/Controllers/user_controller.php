<?php

namespace App\Http\Controllers;


use App\Models\humans;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    // public function register(){
        // return view('patient_register');

    // }

    public function login(){
        session_start();

        if(isset($_POST['login'])){
            if($_POST['email'] == "" || $_POST['password'] == ""){
                $_SESSION["message"] = "Both fields are required!";
                header("Location: ../Login.php");
            }else{
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM persons WHERE email = '".$email."' and password = '".$password."'";
                $result = $conn->query($sql);
                // print_r($result);

                //cookies
                if(isset($_POST['remember'])){
                    $cookie_name = "user";
                    setcookie($cookie_name, $email, time() + (86400 * 30), "/"); // 86400 = 1 day
                }

                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $_SESSION["user_id"] = $row["id"];
                    $_SESSION["login"] = true;
                    header("Location: ../Dashboard.php");
                
                }else{
                    $_SESSION["login"] = false;
                    $_SESSION["message"] = "Account doesn't exist!";
                    header("Location: ../Login.php");
                }
            }
        }
        // return view('patient_login');
    }


    public function retrieve(){
        $humans = humans::all();
        return view('layout', compact('humans'));
    }

    public function register()
    {  
        session_start();

        if(isset($_POST['submit'])){

            if($_POST['first_name'] == "" || $_POST['middle_name'] == "" || $_POST['last_name'] == "" || $_POST['email'] == "" || $_POST['password'] == ""){
                $_SESSION["message"] = "All fields are required!";
                return view('patient_register');
            }else{
                $data = new humans();
                $data->first_name = request('first_name');
                $data->middle_name = request('middle_name');
                $data->last_name = request('last_name');
                $data->email = request('email');
                $data->password = request('password');
                $data->age = request('age');
                $data->gender = request('gender');
                $data->address = request('address');

                $data->save();
                return redirect('/login');

                // $first_name = request('first_name');
                // $middle_name = request('middle_name');
                // $last_name = request('last_name');
                // $email = request('email');
                // $password = request('password');
                // $age = request('age');
                // $gender = request('gender');
                // $address = request('address');
                // $data = array('first_name'=>$first_name,'middle_name'=>$middle_name,'last_name'=>$last_name,
                //     'email'=>$email,'password'=>$password,'age'=>$age,'gender'=>$gender,'address'=>$gender);

                // Insert
                // $value = humans::insertData($data);
                // if($value){
                //     return redirect('/login');
                // }else{
                //     return redirect('/register');
                // }
            }
        }
        
    }

    public function delete($id)
    {  
        $humans = humans::whereId($id)->delete();
        return view('layout', compact('humans'));
    }
   
}

