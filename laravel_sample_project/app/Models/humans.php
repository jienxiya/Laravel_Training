<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class humans extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'age',
        'gender',
        'address'
    ];
    protected $hidden = [
        'password'
    ];

    // public static function insertData($data){
    //     $value=humans::where('first_name', $data['first_name'] , 'middle_name',$data['middle_name'],'last_name',$data['last_name'],$data['last_name'],
    //     'email',$data['email'],'password',$data['password'],'age',$data['age'],'gender',$data['gender'],'address',$data['address'])->get();
    //     if($value->count() == 0){
    //       humans::insert($data);
    //       return 1;
    //      }else{
    //        return 0;
    //      }
     
    //   }

    public function login($data){
        $user = User::where('email', '=', Input::get('email'))->first();
        if ($user === null) {
            return false;
        }
        return true;
    }
}
