<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Hash;
    use Hash;
    use App\Models\User;
    use App\Models\Users;
    use App\Models\test;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

// public function username(){

//     return 'username';
// }

    public function login(Request $request)
    {
        $input = $request->all();
        // dd($request->password);
        //dd($request);
        $this->validate($request,[
            // 'username'=>'required|email',

            'username'=>'required',
            //'username'=>'required',
             'password'=> ('required|min:5'),

            // 'password' => Hash::make($request->password)
        ]);
        // dd($request);
        // $passwordToCheck = $input['password']; // รหัสผ่านจากผู้ใช้
        // $hashedPasswordFromDatabase = Users::where('username', $input['username'])->first()->password; // รหัสผ่านที่เก็บในฐานข้อมูล

        // if (Hash::check($passwordToCheck, $hashedPasswordFromDatabase)){
            // $result = auth()->attempt(['username' => $input["username"], 'password' => $input['password']]);

            if(auth()->attempt(['username' => $input["username"], 'password' => $input['password']])) {
            // if(auth()->guard('test')->attempt(['username' => $input["username"], 'password' => $input['password']])) {
               // $user = auth()->guard('test')->user();
                $user = auth()->user();
                // dd($user);
//                 if($user) {
//                     if($user->role == 'admin') {
//                         return redirect()->route('admin.adminhome');
//                     } else if($user->role == 'officer') {
//                         return redirect()->route('officer.officerhome');
//                     } else if($user->role == 'teacher') {
//                         return redirect()->route('teacher.teacherhome');
//                     } else if($user->role == '0') {
//                         return redirect()->route('test1.home');
//                     } else if($user->role == 'teacher2') {
//                         return redirect()->route('teacher.teacherhome');
//                     } else {
//                         return redirect()->route('student.studenthome');
//                     }
//                 } else {
//                     return redirect('/login')->with('error', 'ไม่ถูกต้อง username หรือ password');
//                 }
//             } else {
//                 return redirect('/login')->with('error', 'ไม่ถูกต้อง username หรือ password');
//             }
// }
// $user = auth()->guard('test')->user();
//  dd($user);
if($user->role == 'admin') {
    return redirect()->route('admin.adminhome');
} else if($user->role == 'officer') {
    return redirect()->route('officer.officerhome');
} else if($user->role == 'teacher') {
    return redirect()->route('teacher.teacherhome');
} else if($user->role == '0') {
    return redirect()->route('test1.home');
} else if($user->role == 'teacher2') {
    return redirect()->route('teacher.teacherhome');
} else {
    return redirect()->route('student.studenthome');
}
} else {
return redirect('/login')->with('error', 'ไม่ถูกต้อง username หรือ password');
}
}}
?>


