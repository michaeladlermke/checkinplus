<?php namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    //The User model creates a model from the database table 'users'
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_name',
        'email',
        'password'
   ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }

    //Follow the naming function for this function when we use something like
    public function seetUserTimestampAttribute($date){
        $this->attributes['user_timestamp'] = Carbon::createFromFormat('Y-m-d', $date);
    }

}
