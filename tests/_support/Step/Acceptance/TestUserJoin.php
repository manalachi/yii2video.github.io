<?php
namespace Step\Acceptance;

class TestUserJoin extends \AcceptanceTester
{
    public function imagineDogUser()
    {        
        $nr = mt_rand (10000, 99999) .
              mt_rand (10000, 99999) .
              mt_rand (10000, 99999) ;
        $user = [
            'name' => 'dog_' . $nr,
            'email' => 'dog_' . $nr . '@gmail.com',
            'password' => 'qwas'
        ];

        return $user;
    }

    public function imagineFoxUser()
    {
        $nr =      mt_rand(10000, 99999) .
                   mt_rand(10000, 99999) .
                   mt_rand(10000, 99999) ;
        $user = [
            'name' => 'dog_' . $nr,
            'email' => 'dog_' . $nr . '@gmail.com',
            'password' => 'qwas'

        ];
        return $user;
    }

    public function joinUser($user)
    {
        $I = $this;
    }

    public function loginUser($user)
    {
        $I = $this;
    }

    public function logoutUser()
    {
        $I = $this;
    }

    public function isUsserLogged($user)
    {
        $I = $this;
    }

    public function noUserLogged()
    {
        $I = $this;
    }

}