<?php

namespace App\Http\Controllers;

use App\Article;
use App\Gestionnaire;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repository\DioceseRepository;
use App\Repository\ParoisseRepository;
use App\Repository\UsersRepository;
use App\Shared\SaveImg;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\AcceptOrRefuseMail;

class UserController extends Controller
{
    public function __construct(UsersRepository $u, ParoisseRepository $p, DioceseRepository $d, SaveImg $sv)
    {
        $this->u = $u;
        $this->p = $p;
        $this->d = $d;
        $this->sv = $sv;
    }

    public function modify()
    {
        return view('site.Users.modify',[

        ]);
    }

    //administration
    public function listUsers()
    {
        return view('admin.compte.listUsers',[
            'user' => $this->u->getUser(),
            'edit' => false
        ]);
    }

    public function enableOrdisableUserAccount($id,$enable, Request $request)
    {
        $this->u->enableOrDisableUserAccount($id, $enable, $request);

        if($enable){
            $state = "désactivé";
        }else{
            $state = "activé";
        }

        return redirect()->back()->with('success',"Vous avez bien $state un compte utilisateur.");
    }


    public function deleteUser($id, Request $request)
    {
        

        if($request['refus']){

            $us = User::find($id);
            $request->subject = "Votre demande a été refusé";
            $request->is_enable = false;

            $request->user = $us->name;
            $request->receiver = $us->email;
    
            Mail::send(new AcceptOrRefuseMail($request));

            $msg = " refusé la demande d' un ";

        }else{

            $msg = " supprimé un ";

        }

        $this->u->deleteUser($id);
        return redirect()->back()->with('success', "Vous avez bien $msg utilisateur.");
        
    }

    public function addUsers()
    {
        return view('admin.compte.addUsers',[
            'paroisse' => $this->p->getParoisse(),
            'diocese' => $this->d->getDiocese(),
            'edit' => false
        ]);
    }

    public function validUsers(UserRequest $request)
    {
        $request->img = $request->file('img')->getClientOriginalName();
        $this->sv->saveImg($request, '/users', "img");
        $this->u->createUser($request);


        return redirect()->back()->with('success', 'Vous avez bien crée un nouvel utilisateur.');
    }

    public function editUsers($id)
    {
        return view('admin.compte.addUsers',[
            'u' => User::findOrFail($id),
            'paroisse' => $this->p->getParoisse(),
            'diocese' => $this->d->getDiocese(),
            'edit' => true
        ]);
    }


    public function updateUsers($id, UserUpdateRequest $request)
    {
        $c_u = User::findOrFail($id);
        if($c_u->email != request('email')){
            $this->validate(request(), [
                'email' => 'required|email|unique:users',
            ]);
        }
        if(isset($request->img)){
            $request->img = $request->file('img')->getClientOriginalName();
            $this->sv->saveImg($request, '/users');
        }else{
            $request->img = User::findOrFail($id)->img;
        }

        $this->u->updateUser($id, $request);

        return redirect()->back()->with('success','Vous avez bien modifié un utilisateur.');
    }


    public function adminLogin()
    {
        return view('auth.adminLogin');
    }
//register and login
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register',[
            'diocese' => $this->d->getDiocese(),
            'paroisse' => $this->p->getParoisse()
        ]);
    }

    public function adminProfil()
    {
        return view('admin.compte.profil');
    }

    public function updateAdminProfil(Request $request)
    {
        $user = User::findOrfail(Auth::user()->id);

        if(Auth::user()->email == request('email')) {

            $this->validate(request(), [
                'name' => 'required',
                //  'email' => 'required|email|unique:users',
                'password' => 'required|min:4|confirmed',
                'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $user->name = request('name');
            $user->email = request('email');
            $user->password = bcrypt(request('password'));

            if(isset($request->img)){
                $request->img = $request->file('img')->getClientOriginalName();
                $this->sv->saveImg($request, '/users');
                $user->img = $request->img;
            }
            $user->save();

            return back()->with('success', "Votre profil a bien été mis à jour.");

        }
        else{

            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
                'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $user->name = request('name');
            $user->email = request('email');
            $user->password = bcrypt(request('users'));

            if(isset($request->img)){
                $request->img = $request->file('img')->getClientOriginalName();
                $this->sv->saveImg($request, '/articles');
                $user->img = $request->img;
            }

            $user->save();

            return back()->with('success', "Votre profil a bien été mis à jour.");

        }
    }

    public function gestionnaireProfil()
    {
        return view('auth.profil');
    }

    public function updateGestionnaireProfil(Request $request)
    {
        $user = User::findOrfail(Auth::user()->id);

        if(Auth::user()->email == request('email')) {

            $this->validate(request(), [
                'name' => 'required',
                'communaute' => 'required',
                'telephone' => 'required|min:8|max:8',
                'password' => 'required|min:4|confirmed',
                'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $user->name = request('name');
            $user->gestionnaire->communaute = request('communaute');
            $user->gestionnaire->telephone = request('telephone');
            $user->email = request('email');
            $user->password = bcrypt(request('password'));

            if(isset($request->img)){
                $request->img = $request->file('img')->getClientOriginalName();
                $this->sv->saveImg($request, '/users');
                $user->img = $request->img;
            }
            $user->save();

            return back()->with('success', "Votre profil a bien été mis à jour.");

        }
        else{

            $this->validate(request(), [
                'name' => 'required',
                'communaute' => 'required',
                'telephone' => 'required|min:8|max:8',
                'password' => 'required|min:4|confirmed',
                'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'email' => 'required|email|unique:users'
            ]);

            $user->name = request('name');
            $user->gestionnaire->communaute = request('communaute');
            $user->gestionnaire->telephone = request('telephone');
            $user->email = request('email');
            $user->password = bcrypt(request('password'));

            if(isset($request->img)){
                $request->img = $request->file('img')->getClientOriginalName();
                $this->sv->saveImg($request, '/articles');
                $user->img = $request->img;
            }

            $user->save();

            return back()->with('success', "Votre profil a bien été mis à jour.");

        }
    }


    //DEMANDE DE COMPTE UTILISATEUR


    public function askAccount()
    {
        return view('admin.compte.askList',[
            'ask' => $this->u->getAskAccount(),
        ]);
    }


    public function acceptUserAsk($id, Request $request)
    {
        $this->u->acceptUserAsk($id, $request);
        return back()->with('success', "Vous avez bien accepter une demande.");
    }

    public function resetAdmin()
    {
        return view('auth.passwords.resetAdmin');
    }

    public function emailAdmin()
    {
        return view('auth.passwords.emailAdmin');
    }



}
