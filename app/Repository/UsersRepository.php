<?php


namespace App\Repository;


use App\Gestionnaire;
use App\Mail\AcceptOrRefuseMail;
use App\Mail\UserEnableOrDisableMail;
use App\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Notifications\MailResetPasswordNotification;


class UsersRepository
{
    private $auth;

    public function __construct(AuthManager $c, User $u, Gestionnaire $g)
    {
        $this->auth = $c;

        $this->u = $u;
        $this->g = $g;
    }



    // USER INFO ##########

    public function getUserDioceseId()
    {
        //dd($this->auth->user()->gestionnaire[0]->paroisse->id);
        return $this->auth->user()->gestionnaire[0]->paroisse[0]->diocese->id;
    }

    public function getUserParoisseId()
    {
        return $this->auth->user()->gestionnaire[0]->paroisse[0]->id;
    }

    public function getGUserId()
    {
        return $this->auth->user()->id;
    }

    public function userIsAdmin()
    {
        return $this->auth->user()->is_admin;
    }

    public function getUser()
    {
        return $this->u->newQuery()->select()->where('is_admin','!=',1)->where('is_staff','!=',1)->where('is_new',false)->orderBy('name','ASC')->get();
    }

    public function getGestionnaire()
    {
        return $this->u->newQuery()->select()->where('is_admin',1)->orWhere('is_staff',true)->orderBy('name','ASC')->get();
    }


    public function getAskAccount()
    {
        return $this->u->newQuery()->select()
            ->where('is_new',true)
            ->where('is_active',false)
            ->orderBy('created_at','DESC')
            ->get();
    }

    public function deleteUser($id)
    {
        return $this->u->newQuery()->select()->findOrFail($id)->delete();
    }


    public function acceptUserAsk($id, $data)
    {
        $u = $this->u->newQuery()->select()->where('id',$id);

        $u->update([
            'is_active' => true,
            'is_new' => false,
        ]);

        $data->subject = "Votre demande a été accepté";
        $data->is_enable = true;

        $us = $u->get();

        $data->user = $us[0]->name;
        $data->receiver = $us[0]->email;

        Mail::send(new AcceptOrRefuseMail($data));
    }


    public function createUser($array)
    {
        $n_user = $this->u->newQuery()->create([
            'name' => $array->name,
            'img' => $array->img,
            'email' => $array->email,
            'password' => Hash::make($array->password),
        ]);

        $n_ges = $this->g->newQuery()->create([
            'communaute' => $array->communaute,
            'paroisse_id' => $array->paroisse_id,
            'telephone' => $array->telephone,
            'user_id' => $n_user->id
        ]);


        $n_ges->paroisse()->sync($array->paroisse_id);

    }

    public function createGestionnaire($array)
    {
        if($array->role == 1){

            $admin = true;
            $staff = false;

        }else{

            $admin = false;
            $staff = true;

        }

        $n_user = $this->u->newQuery()->create([
            'name' => $array->name,
            'img' => $array->img,
            'email' => $array->email,
            'is_admin' => $admin,
            'is_staff' => $staff,
            'is_new' => false,
            'is_active' => true,
            'password' => Hash::make($array->password),
        ]);

    }

    public function updateUser($id, $array)
    {

        $n_user = $this->u->newQuery()->findOrFail($id)->update([
            'name' => $array->name,
            'img' => $array->img,
            'email' => $array->email,
            'password' => Hash::make($array->password),
        ]);

        $us_ges = $this->g->newQuery()->select()->where('user_id', $id);

        $us_ges->update([
            'communaute' => $array->communaute,
            'paroisse_id' => $array->paroisse_id,
            'telephone' => $array->telephone,
            'user_id' => $id
        ]);
    }


    public function updateGestionnaire($id, $array)
    {
        if($array->role == 1){

            $admin = true;
            $staff = false;

        }else{

            $admin = false;
            $staff = true;

        }

        $n_user = $this->u->newQuery()->findOrFail($id)->update([
            'name' => $array->name,
            'img' => $array->img,
            'email' => $array->email,
            'is_admin' => $admin,
            'is_staff' => $staff,
            'is_active' => true,
            'is_new' => false,
            'password' => Hash::make($array->password),
        ]);

    }

    public function enableOrDisableUserAccount($id, $enable, $data)
    {

        $a = $this->u->newQuery()->select()->where('id',$id);


        if($enable){

            $a->update([
                'is_active' => false
            ]);

            $data->subject = "Votre compte est desactivé";
            $data->is_enable = false;

        }else{

            $a->update([
                'is_active' => true
            ]);

            $data->subject = "Votre compte est activé";
            $data->is_enable = true;

        }

        $us = $a->get();

        $data->user = $us[0]->name;
        $data->receiver = $us[0]->email;

        Mail::send(new UserEnableOrDisableMail($data));

    }





}
