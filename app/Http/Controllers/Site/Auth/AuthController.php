<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use Hash;
use Mail;
use Auth;
use App\Member;
use Illuminate\Http\Request;
use App\Social;
use Socialite;


class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest.site', ['except' => ['logout' , 'getLogout']]);
    }

    public function getIndex(){
        

        return view('site.auth.index');
    }

    public function postLogin(Request $r){

        //dd($r->all());

       $v =  validator($r->all(), [
            'email' => 'required|email',
            'password' => 'required|min:2',
        ]);

         // setting custom attribute names
        $v->setAttributeNames([

            'email' => "قم باخال الايميل ",
            'password' => " فم باخال  رقم الجوال",

        ]);

        if ($v->fails()) {
             return redirect()->back()->withErrors(['خطأ', implode('<br>', $v->errors()->all())]);
        }

        // grapping Member credentials
        $email = $r->input('email');
        $password = $r->input('password');

        // Searching for the Member matches the passed email
        $member= Member::where('email' ,$email)->first();
        if( $member && Hash::check($password, $member->password) ){
            // login the Member
            Auth::guard('members')->login($member ,$r->has('remember'));

            return redirect()->intended('/');
        }
        // failed
        return redirect()->back()->with('error' , 'من فضلك ادخل بيانات صحيحه ');
    }

    public function getLogout(){
        auth()->guard('members')->logout();

        return redirect('/login')->with('info',trans('admin_global.msg_success_logout'));
    }

    public function postRegister(Request $r){

        $v =  validator($r->all(), [
            'f_name' => 'required|min:2',
            'l_name' => 'required|min:2',
            'email' => 'required|email',

            'password' => 'required|min:2',
            'cpassword' => 'required|min:2|same:password',
            'agree'=> " required ",

        ]);

         // setting custom attribute names
        $v->setAttributeNames([
            'f_name' => " قم باخال الاسم الاول",
            'l_name' => "قم باخال الاسم الاخير ",
            'email' => "قم باخال الايميل ",
            'password' => " فم باخال  رقم الجوال",
            'cpassword'=> "كلمه السر غير متاطبقه ",
            'agree'=> " يجب الموافقه عل  الشروط والاحكام  ",

        ]);

        if ($v->fails()) {
             return redirect()->back()->withErrors(['خطأ', implode('<br>', $v->errors()->all())]);
        }

        $member = new Member();
        $member->f_name = $r->input('f_name');
        $member->l_name = $r->input('l_name');
        $member->email = $r->input('email');
        $member->phone = $r->input('phone');
        $member->password =  bcrypt($r->input('password'));
        $member->address = $r->input('address');
        //$member->auth_type ='site';

        if($member->save())
        {
           return redirect()->back()->withSuccess(['  تم تسجيل الدخول بنجاح ']);
        }

        
    }




    public function getRecoverPassword(){
        return view('site.auth.recover-password');
    }

    public function getChangePassword($hash){

        $site= site::where('recover_hash' ,$hash)->first();

        if( $site ){
            return view('site.auth.new-password' , compact('hash'));
        }

        // failed
        return redirect('auth/login')->with('msg' , 'incorrect data');
    }


    public function postRecoverPassword(Request $r){

        $this->validate($r,[
            'email' => 'required|email',
        ]);

        // grapping site credentials
        $email = $r->input('email');

        $site= Member::where('email' ,$email)->first();

        if( $site ){
            $recover_hash = str_random(128);

            $site->update(compact('recover_hash'));

            Mail::send('site.mails.recover-password',
            compact('site','recover_hash'),
            function ($m) use ($site) {
                $m->to($site->email, $site->name)->subject('Your Reminder!');
            });

            return redirect('auth/login');
        }
        // failed
        return redirect()->back()->with('msg' , 'اincorrect data');
        // dd($r->all());
    }

    public function postChangePassword(Request $r){

        // Searching for the site matches the recover_hash
        $site= Member::where('recover_hash' ,$r->input('_hash'))->first();

        if( $site ){

            $this->validate($r,[
                'password' => 'required|password',
                'repassword' => 'required|same:password',
            ]);

            // grapping site credentials
            $password = bcrypt($r->input('password'));
            $recover_hash = null;

            $site->update(compact('password','recover_hash'));

            return redirect('auth/login')->with('msg' , 'incorrect data');

        }
        // failed
        return redirect()->back()->with('msg' , 'incorrect data');
    }

    // public function getGoogle() {
    //     $auth = new Google;
    //     if ($auth->updateUserInformation()) {
    //         return redirect()->route('site.home.index')->withSuccess('You Logged in !! ');
    //     }
    //     return redirect('login');
    // }
    //
    // public function getFacebook() {
    //     $fb = new Facebook;
    //     $fb->setAccessToken();
    //     if ($fb->updateUserInformation()) {
    //         return redirect()->route('site.home.index')->withSuccess('You Logged in !! ');
    //     }
    //     return redirect('login');
    // }

    /**
    * Redirect the user to the provider authentication page.
    *
    * @return Response
    */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    /**
    * Obtain the user information from the provider.
    *
    * @return Response
    */
    public function handleProviderCallback($provider)
    {
        try
        {
            $socialUser = Socialite::driver($provider)->user();
        }
        catch(\Exception $e)
        {
            return redirect('/');
        }

        //check if we have logged provider
        $socialProvider = Social::where('provider_id',$socialUser->getId())
        ->where('provider_type' , $provider)->first();

        if(!$socialProvider)
        {
            $name = explode(' ', $socialUser->getName());
            //create a new user and provider
            $user = Member::firstOrCreate([
                'email' => $socialUser->getEmail(),
                'f_name' => $name[0],
                'l_name' => end($name),
                'image' => $socialUser->getAvatar(),
                'password' => $provider
            ]);

            auth()->guard('members')->login($user);

            $user->social()->create(
                ['provider_id' => $socialUser->getId(), 'provider_type' => $provider]
            );

        }
        else{
            $user = $socialProvider->user;
        }

        auth()->login($user);

        return redirect('/');

    }

}
