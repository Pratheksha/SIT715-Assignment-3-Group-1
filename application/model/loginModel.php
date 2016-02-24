<?php
/**
 * Class LoginModel
   Created by Group 1 - SIT715 Assignment3
*/
class LoginModel {
	/**
	 *
	 * @param object $db
	 *        	A PDO database connection
	 */
	function __construct($db) {
		try {
			$this->db = $db;
		} catch ( PDOException $e ) {
			exit ( 'Database connection could not be established.' );
		}
	}
	
	/**
	 * Get a Login from database
	 */
	public function getLogin($userName) {
		$sql = "SELECT id,login, password, salt FROM login where login = :username and status = '1' LIMIT 1";
		$query = $this->db->prepare ( $sql );
		$parameters = array (
				':username' => $userName 
		);
			
		$query->execute ( $parameters );
		
		// fetch() is the PDO method that get exactly one result
		return $query->fetch ();
	}
	
	/**
	 *
	 * @param unknown $userId        	
	 */
	public function getUserDetails($userId) {
		$sql = "SELECT id,login, email, phone_number FROM login where id = :userid and status = '1' LIMIT 1";
		$query = $this->db->prepare ( $sql );
		$parameters = array (
				':userid' => $userId 
		);
		
		$query->execute ( $parameters );
		
		// fetch() is the PDO method that get exactly one result
		return $query->fetch ();
	}
	
	/**
	 *
	 * @param unknown $userId        	
	 */
	public function getEmployeeOtherDetails($userId) {
		$sql = "SELECT employee_role_store_designation.*,store.store_id,store_region.store_region_id
					FROM employee_role_store_designation 
						left join store on store.store_id = employee_role_store_designation.store_id 
					    left join store_region on store.store_region_id = store_region.store_region_id
					where employee_role_store_designation.employee_id = :userid and employee_role_store_designation.active_status = '1' LIMIT 1";
		
		$query = $this->db->prepare ( $sql );
		$parameters = array (
				':userid' => $userId 
		);
		
		
		$query->execute ( $parameters );
		
		// fetch() is the PDO method that get exactly one result
		return $query->fetch ();
	}
	
	/**
	 *
	 * @param unknown $username        	
	 * @param unknown $password        	
	 */
	public function changePassword($username, $password) {
		$sql = "UPDATE `login`
					SET
					`password` = :password,
					`last_updated_date` = :datefield
					WHERE `name` = :name";
		// echo $sql;
		$query = $this->db->prepare ( $sql );
		$parameters = array (
				':name' => $username,
				':password' => $password,
				':datefield' => date ( 'Y-m-d H:i:s' ) 
		);

		
		return $query->execute ( $parameters );
		
		// fetch() is the PDO method that get exactly one result
		// return $query->fetch();
	}
	/**
	 * Get all Products from database
	 */
	public function getAllProductsCount($ref_id) {
		$sql = "SELECT count(customer_id) as total FROM customer Where lead_status='" . $ref_id . "'";
		$query = $this->db->prepare ( $sql );
		$query->execute ();
		return $query->fetch ();
	}
	
	/**
	 * Get role name
	 */
	public function getRoleNameByRoleId($id) {
		$sql = "select * from role where role_id=$id";
		$query = $this->db->prepare ( $sql );
		$query->execute ();
		return $query->fetch ();
	}
	public function getEmployeeId($id) {
		$sql = "select * from login where login_id=$id";
		$query = $this->db->prepare ( $sql );
		$query->execute ();
		return $query->fetch ();
	}
}
