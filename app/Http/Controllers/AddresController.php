<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Validator;
use Illuminate\Validation\Rule;


class AddresController  extends BaseController
{
	
	public function __construct()
	{
		 set_time_limit(8000000);
		//$this->middleware('auth:api');
	}
		
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function test()
    {
	  return view('test');
    }
	
	
	public function store(Request $request)
	{
		//print_r($request->all()); //die;
		   $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'address' => 'required',
            'password' => 'required|alpha_num',
            'phone' => 'required|numeric',
            'email' => 'required|unique:users',
            'role' => 'required|alpha_num',
        ]);
		 
		   if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)->withInput(Input::except('password')); 
			}else{
		$name = $request->input('name');
		$address = $request->input('address');
		$password = Hash::make($request->input('password'));
		$phone = $request->input('phone');
		$email = $request->input('email');
		$role = $request->input('role');
		
		$data=array('name'=>$name,"address"=>$address,"password"=>$password,"email"=>$email,"phone"=>$phone,"role"=>$role);
		$location = Admin::storedata($data);
		//die('herer');
		//return redirect('AddresController@loginpage');
		//return response()->json('Form is successfully validated and data has been saved');

		return view('loginpage');
			}
	}
	
	public function loginpage()
	{
		return view('loginpage');
	}
		
		
	 function doLogin(Request $request)
    {
		$validatedData = $request->validate([
            
            'password' => 'required',
            'email' => 'required',
           
        ]);
		
		$rules = array(
		  'email' => 'required|email', 
		  'password' => 'required|alphaNum');
		 
		  $validator = Validator::make($request->all() , $rules);
		  if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)->withInput(Input::except('password')); 
			}
			else
			{
			$userdata = array(
			  'email' =>  $request->input('email'),
			  'password' =>  $request->input('password')
			);
			if (Auth::attempt($userdata))
			  {	
					$user = auth()->user();
					//print_r($user); //die;
					$role = $user->role;
					//$role =	$user->role; 
					 if($role == 2)
					{
						//die('yes');
							return redirect()->action('AddresController@allusersdetail');
						
					}elseif($role == 1 || $role == 0){
				//die('here');
					return view('admin.welcome');
				
					}else{
					  return view('loginpage');
					  }
					  
			  }
			  else
			  {
			  return view('loginpage');
			  }
			}
    }	
		
    public function userdashbord()
		{
			return view('admin.welcome');
		}
	
	
	public function logout ()
	{
		auth()->logout();
		return view('loginpage');
	}
	public function allusersdetail()
		{
			$users['users']= Admin::getallusers();
			return view('allusers',$users);
		}
		
	public function editdata($id)
		{
			$users['users']= Admin::getallusers();
			return view('allusers',$users);
		}	
	public function getusersdata($id)
		{
			$data['datauser']= Admin::getusersByid($id);
			//echo '<pre>'; print_r($data);
			return view('editpage',$data);	
			//echo $id;
			
		}
		
	public function editUserDetail(Request $request)
		{
			$id = $_POST['id'];
			$validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required|numeric',
        ]);
			Admin::whereId($id)->update($validatedData);
			return redirect()->action('AddresController@allusersdetail');
		}
		
	public function deleteUser($id)
		{
			$book = Admin::findOrFail($id);
			$book->delete();
			return redirect()->action('AddresController@allusersdetail');
		}
	
	public function resetpassword()
		{
			return view('resetpassword');	
			
		}
	public function changePassword(Request $request)
		{
			 $validator = Validator::make($request->all(), [
            'password' => 'required|alpha_num',
            'confirm_password' => 'required|alpha_num',
          
        ]);
		 
		   if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)->withInput(Input::except('password')); 
			}else{
			
			
			
			$id = $_POST['id'];
			$data['password'] = Hash::make($_POST['password']);
			$data['confirm_password'] = Hash::make($_POST['confirm_password']);
			
			Admin::whereId($id)->update($data);
			return redirect()->action('AddresController@loginpage');
			
			
			}
		}	
	public function profileReset()
		{
			return view('profileReset');	
			
		}	

	public function updatePofile(Request $request)
		{
			$id = $_POST['id'];
			
            $data['name'] = $_POST['name'];
            $data['address'] = $_POST['address'];
            $data['phone'] = $_POST['phone'];
            $data['email'] = $_POST['email'];
              
			Admin::whereId($id)->update($data);
			return view('admin.welcome');
		}		
	
}











