<?php 

$obj = new program;


class program {

	function __construct() {
		$page = 'homepage';
		$arg = 'phprox';

		if(isset($_REQUEST['page'])){
            $page= $_REQUEST['page'];
		}

		if(isset($_REQUEST['arg'])){
			$arg= $_REQUEST['arg'];
		}
		
		$page = new $page($arg);
	} 

   #------------------------------
   function __destruct() {
   }
	
	
};

#=============================================
abstract class page {
	
	public $menu;
	public $content;
	
	function menu() {
		$menu = '<a href="./index.php?page=homepage">Homepage</a>';
		$menu .= '<a href="./index.php?page=login">Login</a>';
		
		return $menu;
	}
	
	function __construct($arg) {
		if($_SERVER['REQUEST_METHOD'] == 'GET') {
			$this->get();
		} 	
	}
	
	
	public function __destruct() {
		#$this->content .=$this->menu();
		
		
		echo $this->content;
	}
}

function get(){
	
}



#=============================================
class homepage extends page {
	

	function get() {
		$home = file_get_contents('homepage.html');
		echo "$home";
	}
}

#=============================================
class login extends page {
	function get() {
		$html = file_get_contents('login.html');
		echo "$html";
	}}
	

#=============================================
class activity extends page {
	 
	function get(){
		$html = file_get_contents('activity.html');
		return "$html";
	}
}

?>	
		
	
