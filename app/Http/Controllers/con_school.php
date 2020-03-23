<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class con_school extends Controller
{
    public function Adminreg(Request $req){

        $user_id=$req->user_id;
$password=$req->password;


DB::table('adminregi')->insert([
['user_id'=>$user_id,
'password'=>$password,
'status'=>"admin"
]

]);
return back();
    }

public function Adminlog(Request $req){
    $user_id=$req->user_id;
    $password=$req->password;
    $admin = DB::table('adminregi')
->where('user_id', $user_id)
->first();
    if (is_Null($admin)) {
        return redirect('adminlogin')->with('error1',"Incorrect username!!!");
    } elseif (($user_id==$admin->user_id)&&($password==$admin->password)) {
        if ($admin->status=="admin") {
            $req->session()->put('adminid', $admin->id);
            return redirect('Sess1');
        }
        else{
                    return redirect('adminlogin')->with('error3',"Invalid credentials!!!");
        }
    } else {
        return redirect('adminlogin')->with('error2',"Incorrect password!!!");
    }
}
public function Sess1(){
    if (session()->has('adminid')) {
        $sess=session()->get('adminid');
        $user=DB::table('adminregi')->where('id',$sess)->first();

        return view('admin.adminhome',['users'=>$user]);
    }
    else{
        return redirect('adminlogin')->with('error3','Please login first!!');

    }
}
//logout
public function AdminLogout(Request $req){
    $req->session()->flush();
    return redirect('adminlogin');   
}
//change user id
public function Changeun(Request $req ,$id){
    $user=DB::table('adminregi')->where('id',$id)->first();
        return view('admin.changeusern',['users'=>$user]);
   
}
public function UserUpd(Request $req ,$id){
$existing_user_id=$req->existing_user_id;
$new_user_id=$req->new_user_id;
$confirm_new_user_id=$req->confirm_new_user_id;
$user=DB::table('adminregi')->where('id',$id)->first();

if ($existing_user_id!="" && $new_user_id!="" && $confirm_new_user_id!="") {
    if ($existing_user_id==$user->user_id) {
        if ($new_user_id==$confirm_new_user_id) {
            DB::table('adminregi')
->where('id', $id)
->update([

        'user_id'=>$new_user_id
    ]);
            return redirect('Sess1')->with('msg','Your username has been changed successfully!!!');
        } else {
            return redirect('Changeun/'.$req->id)->with('msg1','New username and confirm username does not match!!!');

            echo "not match";
            // return redirect('admin.changeusern')->with('errorupd1','Values do not match !!');
        }
    } else {
        return redirect('Changeun/'.$req->id)->with('msg1','Invalid username!!!');
    }
}
else{
    return redirect('Changeun/'.$req->id)->with('msg1','All fields must be filled!!!');
}
    
}
//change password
public function Changepw(Request $req ,$id){
    $user=DB::table('adminregi')->where('id',$id)->first();
        return view('admin.changepw',['users'=>$user]);
   
}
public function PwUpd(Request $req ,$id){
    $existing_password=$req->existing_password;
    $new_password=$req->new_password;
    $confirm_new_password=$req->confirm_new_password;
    $user=DB::table('adminregi')->where('id',$id)->first();
 
    if ($existing_password!="" && $new_password!="" && $confirm_new_password!="") {
        if ($existing_password==$user->password) {
            if ($new_password==$confirm_new_password) {
                DB::table('adminregi')
    ->where('id', $id)
    ->update([
    
            'password'=>$new_password
        ]);
                return redirect('Sess1')->with('msg','Your password has been changed successfully!!!');
            } else {
                return redirect('Changepw/'.$req->id)->with('msg2','New password and confirm password does not match!!!');
    
                
            }
        } else {
            return redirect('Changepw/'.$req->id)->with('msg2','Existing password is incorrect!!!');
        }
    }
    else{
        return redirect('Changepw/'.$req->id)->with('msg2','All fields must be filled!!!');
    }
        
    }
    //to add department
public function DeptAdd(Request $req){

    $department_name=$req->department_name;


DB::table('dept_table')->insert([
['department_name'=>$department_name,

]

]);
return back()->with('msgadd',"Department added successfully!!!");
}
//to return back home
public function BackHome(){
    return redirect('Sess1');
}
public function BackHome2(){
    return redirect('Sess1');
}
public function BackHome3(){
    return redirect('Sess1');
}
//add dept to selection box
public function Deptsel(){
    $users= DB::table('dept_table')->get();
    return view('staff.staffreg',['users'=>$users]);
}
//insert staff data
public function Staffinsert(Request $req){
    $staff_name=$req->staff_name;
    $staff_place=$req->staff_place;
    $staff_contact=$req->staff_contact;
    $staff_dept=$req->staff_dept;

        $deptdata=DB::table('dept_table')->where('department_name',$staff_dept)->first();

        $dept_id=$deptdata->id;
// validating contact no: uniqueness

        $this->validate($req,[
            'staff_contact' => 'required|unique:staff'
            ],[
                'staff_contact.unique' => 'This contact no is already registered!!! ',
                 ]);

// validating userid uniqueness
$this->validate($req,[
    'user_id' => 'required|unique:adminregi'
    ],[
        'user_id.unique' => 'Please change your user id.This user id is already registered!!! ',
         ]);



//inserting to staff table


    DB::table('staff')->insert([
        [
        'staff_name'=>$staff_name,
        'staff_place'=>$staff_place,
        'staff_contact'=>$staff_contact,
        'staff_dept'=>$staff_dept,
        'dept_id'=>$dept_id
        
        ]
        
        ]);
        $fkdata=DB::table('staff')->where('staff_contact',$staff_contact)->first();
        
        $user_id=$req->user_id;
        $password=$req->create_password; 
        $fk_id=$fkdata->staff_id;




//inserting to login table
        DB::table('adminregi')->insert([
            [
            'user_id'=>$user_id,
            'password'=>$password,
            'fk_id'=>$fk_id,
            'status'=>"staff"
            
       
            
            ]
            
            ]);

            return back()->with('msgstaffreg',"Staff registered successfully!!!");   
}
//staff login
public function Stafflog(Request $req){
    $user_id=$req->user_id;
    $password=$req->password;
    $admin = DB::table('adminregi')
->where('user_id', $user_id)
->first();
    if (is_Null($admin)) {
        return redirect('stafflogin')->with('error1',"Incorrect username!!!");
    } elseif (($user_id==$admin->user_id)&&($password==$admin->password)) {
        if ($admin->status=="staff") {
            
            $req->session()->put('staffid', $admin->fk_id);
            return redirect('Sess2');
        }
        else{
                    return redirect('stafflogin')->with('error3',"Invalid credentials!!!");
        }
    } else {
        return redirect('stafflogin')->with('error2',"Incorrect password!!!");
    }
}
public function Sess2(){
    if (session()->has('staffid')) {
        $sess=session()->get('staffid');
        $user=DB::table('staff')->where('staff_id',$sess)->first();
// echo $user->staff_id;
        return view('staff.staffhome',['users'=>$user]);
    }
    else{
        return redirect('stafflogin')->with('error3','Please login first!!');

    }
}
//staff logout
public function StaffLogout(Request $req){
    $req->session()->flush();
    return redirect('stafflogin');   
}
public function Studentinsert(Request $req,$id){
   
    $student_id=$req->student_id;
    $student_name=$req->student_name;
    $student_place=$req->student_place;
    $student_contact=$req->student_contact;

    $stdept=DB::table('staff')->where('staff_id',$id)->first();
    $student_dept=$stdept->staff_dept;
    echo $student_dept;
    
    DB::table('student')->insert([
    ['student_id'=>$student_id,
    'student_name'=>$student_name,
    'student_place'=>$student_place,
    'student_contact'=>$student_contact,
    'student_dept'=>$student_dept
    
    ]
    
    ]);
    return back()->with('msgstudent','New student added successfully!!');

}
}
