<?php
include "Models/login_model.php";

class loginController {


    public function verificaUser($u,$p)
    {
        $vu= new LoginModel();

        $v=$vu->verificacion($u,$p);

        return $v;
    }
}
