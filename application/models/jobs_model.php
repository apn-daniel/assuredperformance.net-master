<?php
/**
 * Created by PhpStorm.
 * User: erihige
 * Date: 5/2/14
 * Time: 10:02 AM
 */
class Jobs_model extends CI_Model {


public function getAboutText(){
		
		$sql = "SELECT content as about FROM new_apn.about_apn	ORDER BY id DESC LIMIT 1";
		 
		$query = $this->db->query($sql);
				
		if($query){
			$res = $query->result();
			
		}
		else{
			$res = NULL;
		}
		
		return $res;
	}
	
	
	public function getJobPostings(){
	
		$sql = "SELECT id, jobTitle, jobDesc FROM new_apn.job_postings WHERE status = 1";
		
		$query = $this->db->query($sql);
		
		if($query){
			$res = $query->result_array();
				
		}
		else{
			$res = NULL;
		}
		
		return $res;
		
	}

}