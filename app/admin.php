<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Admin extends Model	
{
	public $timestamps = false;

	protected $table ='users';
	protected $fillable = ['name','email','phone','role','password','address','phone'];
	
	public static function storedata($data)
	{
		$newUser = Admin::create($data);
		
	}
	
	public static function getallusers()
	{
		return Admin::get()->whereNotIn('role', 2);
		
	}
	
	public static function getusersByid($id)
	{
		return Admin::find($id);
		///return DB::table('users')->where('id', $id);
	}
	
	
	
}

