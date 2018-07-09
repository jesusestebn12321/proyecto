<?php 

class LoginModels{

    public $lBD="re";
    public $pBD=1234;

	public function Validacion($u,$p){
		 if ($this->lBD==$u and $this->pBD==$p) {
            return true;
        } else {
            return false;
        }     
	}
}

?>