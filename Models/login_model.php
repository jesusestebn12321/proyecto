<?php

class LoginModel{

    public $lBD="mp";
    public $pBD=1234;

    public function verificacion($u,$p)
    {
        if ($this->lBD==$u and $this->pBD==$p) {
            return true;
        } else {
            return false;
        }
    }
}
/* End of file filename.php */
