<?php


namespace App\Repository;


use Illuminate\Auth\AuthManager;

class UsersRepository
{
    private $auth;

    public function __construct(AuthManager $c)
    {
        $this->auth = $c;
    }



    // USER INFO ##########

    public function getUserDioceseId()
    {
        dd($this->auth->user()->gestionnaire[0]->paroisse[0]->id);
        //return $this->auth->user()->gestionnaire[0]->paroisse[0]->diocese->id;
    }

    public function getUserParoisseId()
    {
        return $this->auth->user()->gestionnaire[0]->paroisse[0]->id;
    }

    public function getGUserId()
    {
        return $this->auth->user()->id;
    }





}
