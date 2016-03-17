<?php 

/**
* For Authenthication Model 
*/
class Auth_Model extends CI_Model
{
	
	function check_login($email, $password)
	{
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		$this->db->where('status', 1);

		$query_result= $this->db->get();
        $result=$query_result->row();
        return $result;
	}
}