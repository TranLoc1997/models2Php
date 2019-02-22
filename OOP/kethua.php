<?php 
 
class usname

{
	public $username;
	public $userId;
	public $email;
	public $password;


    function __construct($username,$userId,$email,$password)
    {
       $this->username=$username ;
       $this->userId =$userId ;
       $this->email =$email ;
       $this->password =$password ;
    }

    function loggin();
    function logginOUT();


    
}
 /**
  * 
  */
 class admin extends usname
 {
 	
 	function __construct($acceslevel)
 	{
 		$this->acceslevel= $acceslevel;
 	}
 	function editUser();
 }


 ?>
 <?php 
 


class xecha

{
	public $mausac;
	public $cannang;
	public $chieudai;
	


    function __construct($mausac,$cannang,$chieudai)
    {
       $this->mausac=$mausac ;
       $this->cannang =$cannang ;
       $this->chieudai =$chieudai ;
       
    }

    function tangtoc();
    


    
}
 /**
  * 
  */
 class xecon extends xecha
 {
 	public $dua;
 	function __construct($dua)
 	{
 		$this->dua= $dua;
 	}
 	function duongtruong();
 }
  ?>