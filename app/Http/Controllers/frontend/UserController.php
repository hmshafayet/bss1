<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Borrow;
use App\Models\Borrowdetail;
use App\Models\Fine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signupform(){
        return view ('website.pages.signup');
    }
    public function signupformpost(Request $request)
    {  
        $user_image=null;

        if($request->hasFile('image'))
        {
        
            // step 2: generate file name
            $user_image=date('Ymdhms') .'.'. $request->file('image')->getClientOriginalExtension();
        
            //step 3 : store into project directory
        
            $request->file('image')->storeAs('/uploads/users/',$user_image);
        
        }  
       $request->validate([
        'name'=>'required',   
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:6',
        'mobile'=>'required',
        'student_id'=>'required|min:6',
        'image'=>'required',
       ]);
        //dd($request->all());
       User::create([
       'name'=>$request->name,
       'email'=>$request->email,
       'password'=>bcrypt($request->password),
       'role'=>'customer',
       'mobile'=>$request->mobile,
       'studentid'=>$request->student_id,
       'image'=>$user_image,
       ]);
       return redirect()->back()->with('success','SignUp Successfull');
    }
    
    public function login()
    {
    return view('website.pages.login');
    }

    public function loginpost(Request $request)
    {
        // dd($request->all());
        $credentials=$request->except('_token');
        // $credentials['email']=$request->user_email;
        // $credentials['password']=$request->user_password;
    
// dd($credentials);
    if (Auth::attempt($credentials))
    {
        if(auth()->user()->role=='admin')

        {  
            
     Auth::logout();
     return redirect()->back()->with('success','Sorry, Admin can not login here');
 
        }
    
        return redirect()->route('home');
        
       
    }
      
    return redirect()->back()->with('message','User not recognized');
    }
    
    public function logout()
    {
        session()->forget('cart');
     Auth::logout();
     return redirect()->route('customer.login');
    }
    public function viewprofile()
    {
        $profile=Auth::user();
        // dd($profile);
        $fine=Fine::where('user_id',auth()->user()->id)->get();
        $total_fine=$fine->sum('amount');
       $myCollection=Borrow::where('user_id',$profile->id)->get();
        $myBorrow=Borrow::where('user_id',auth()->user()->id)->where('status','Approved')->update([
            'is_seen'=>1
        ]);


        return view ('website.pages.profile',compact('profile','myCollection','total_fine'));
    }

    public function borrowReturn($id)
    {

        DB::beginTransaction();

        try {
        $borrow=Borrow::find($id);

        //check time diff
        $diffSec=time()-strtotime($borrow->return_date);
        //convert it to days
        $days=round($diffSec/(60*60*24),0)-1;

        if($days>0){
            //fine applicable
            Fine::create([
                'user_id'=>auth()->user()->id,
                'borrow_id'=>$borrow->id,
                'amount'=>$days*20
            ]);
        }
       //simple return

       $borrow->update([
           'status'=>'return'
        ]);


        DB::commit();
      
      
       // all good
   } catch (\Exception $e) {
       DB::rollback();
       // something went wrong
       return redirect()->back()->with('error','Something went wrong.');
   }
   return redirect()->back()->with('success','Book returned.');


    }


    public function cancel($id)
    {
       $data=Borrow::find($id);
       $data->update(['status'=>'Canceled']);
       return redirect ()->back();
    }


    public function requestdetails($id)
    { 
        $requestdetails=Borrowdetail::with('book')->where('borrow_id',$id)->get();
        
        
    
    return view ('website.pages.requestdetails',compact('requestdetails'));

    }


    public function profileedit($id)
    {
        $profile=User::find($id);
        
        return view ('website.pages.profileedit',compact('profile'));
    }
    public function profileupdate(Request $request,$id)
    {
        $profile=User::find($id);

        $user_image=$profile->image;
        //              step 1: check image exist in this request.
                if($request->hasFile('image'))
                {
                    // step 2: generate file name
                    $user_image=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
        
                    //step 3 : store into project directory
        
                    $request->file('image')->storeAs('/uploads/users',$user_image);
        
                }
         $profile=User::find($id);
         $profile->update([
                   'name'=>$request->name,
                   'mobile'=>$request->mobile,
                   'image'=>$user_image,
           
     ]);

        return redirect ()->route('view.profile')->with('message','Profile Updated');
    }
}
