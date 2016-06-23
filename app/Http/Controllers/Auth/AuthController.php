<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Student;
use App\Models\Lecturer;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = array(
            'new_account_type' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'department_id' => 'required|exists:departments,id',
            'registration_number' => 'required_if:new_account_type,student|unique:students',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'terms_and_conditions' => 'accepted'
        );
        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        switch ($data['new_account_type']) {
            case 'student':
                $student = Student::create([
                    'registration_number' => $data['registration_number'],
                    'prefix' => $data['prefix'],
                    'first_name' => $data['first_name'],
                    'middle_name' => $data['middle_name'],
                    'last_name' => $data['last_name'],
                    'suffix' => $data['suffix'],
                    'department_id' => $data['department_id'],
                ]);
                $user = User::create([
                    'person_id' => $student->id,
                    'person_type' => 'student',
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                ]);

                $student->user_id = $user->id;
                $student->save();

                return $user;
                break;
            case 'lecturer':
                $lecturer = Lecturer::create([
                    'prefix' => $data['prefix'],
                    'first_name' => $data['first_name'],
                    'middle_name' => $data['middle_name'],
                    'last_name' => $data['last_name'],
                    'suffix' => $data['suffix'],
                    'department_id' => $data['department_id'],
                ]);
                $user = User::create([
                    'person_id' => $lecturer->id,
                    'person_type' => 'lecturer',
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                ]);

                $lecturer->user_id = $user->id;
                $lecturer->save();

                return $user;
                break;
        }

        abort(505, 'Missing account type.');
        return;
    }
}
