<?php
namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\ErrorHandler\BufferingLogger;



class AuthController extends Controller
{
    public function login()
    {
        return view("back.auth.login");
    }

    public function loginPost(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        if ($this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ])) {

            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return view('back.dashboard');

            } else {
                return redirect()->route('admin.login')->withErrors("email adresi veya şifre yanlış");
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("admin.login");
    }
}


/*
 *  public  function loginPost(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return "giriş başarılı";

        } else {
            return "hatalı";
        }
    }
 */


    /*
    public function loginPost(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if ($this ->validate ($request,[
            "email"=>"required | email",
            "password" => "required",
        ])){
            return view("back.layout.master");
        }
        else{
            return view("back.auth.login");
        }
    }
}
*/
/*
 *
 *public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/dashboard'); // Giriş başarılıysa yönlendirme
    } else {
        return back()->withErrors(['message' => 'Hatalı email veya şifre']); // Hatalı giriş
    }
}
 */
 /*  public function loginPost()
    {
        return view("back.layout.master");
    }*/
//}

//request nesnesi formdan gelen alanları yakalamanıza yarar.
/*
    public function loginPost(Request $request)
    {
        if (AuthController::validate(["email" => $request->email, "password" => $request->request]))return "başarılı"; die;
      }
        return redirect()->route("admin.login")->withErrors("email adresi veya şifre hatalı");
    }
   public function lagout(){
        Auth::lagout();
        return redirect()->route("admin.login");

}
*/


/*
 dd: laravelin verdiği bi fonksiyon içindeki datayı ekrana basar. (dd)
*/

