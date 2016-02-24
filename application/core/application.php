<?php

/**
 * Class Application
   Created by Group 1 - SIT715 Assignment3
*/


class Application {
	/**
	 *
	 * @var null The controller
	 */
	private $url_controller = null;
	
	/**
	 *
	 * @var null The method (of the above controller), often also named "action"
	 */
	private $url_action = null;
	
	/**
	 *
	 * @var array URL parameters
	 */
	private $url_params = array ();
	
	/**
	 * "Start" the application:
	 
	 */
	public function __construct() {
		// create array with URL parts in $url
		$this->splitUrl ();
		header ( "Access-Control-Allow-Origin: *" );
		// check for controller: no controller given ? then load start-page
		if (! $this->url_controller) {
			
			require APP . 'controller/login.php';
			$page = new Login ();
			$page->index ();
		} elseif (file_exists ( APP . 'controller/' . $this->url_controller . '.php' )) {
			// here we did check for controller: does such a controller exist ?
			
			$sessId = isset ( $_SESSION ['sess_user_id'] ) ? trim ( $_SESSION ['sess_user_id'] ) : "";
			$sessName = isset ( $_SESSION ['sess_username'] ) ? trim ( $_SESSION ['sess_username'] ) : "";
			
			// print_r($sessId);
			
			if ($this->url_controller != "login") {
				if ($this->url_controller && $this->url_action != "register" && $this->url_action != "registerCheck") {
					if ($sessId == '' || $sessName == '') {
						session_destroy ();
						header ( 'Location: /login/index' );
						exit ();
					}
				}
			} // exit;
			  
			// if so, then load this file and create this controller
			  
			require APP . 'controller/' . $this->url_controller . '.php';
			$this->url_controller = new $this->url_controller ();
			
			// check for method: does such a method exist in the controller ?
			if (method_exists ( $this->url_controller, $this->url_action )) {
				
				if (! empty ( $this->url_params )) {
					// Call the method and pass arguments to it
					call_user_func_array ( array (
							$this->url_controller,
							$this->url_action 
					), $this->url_params );
				} else {
					
					$this->url_controller->{$this->url_action} ();
				}
			} else {
				if (strlen ( $this->url_action ) == 0) {
					// no action defined: call the default index() method of a selected controller
					$this->url_controller->index ();
				} else {
					header ( 'location: ' . URL . 'error' );
				}
			}
		} else {
			header ( 'location: ' . URL . 'error' );
		}
	}
	
	/**
	 * Get and split the URL
	 */
	private function splitUrl() {
		if (isset ( $_GET ['url'] )) {
			
			// split URL
			$url = trim ( $_GET ['url'], '/' );
			$url = filter_var ( $url, FILTER_SANITIZE_URL );
			$url = explode ( '/', $url );

			$this->url_controller = isset ( $url [0] ) ? $url [0] : null;
			$this->url_action = isset ( $url [1] ) ? $url [1] : null;
			
			// Remove controller and action from the split URL
			unset ( $url [0], $url [1] );
			
			// Rebase array keys and store the URL params
			$this->url_params = array_values ( $url );

		}
	}
}