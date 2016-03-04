<?php
/**
* 	@author			Tri Nguyen
*	@license		GPL, or GNU General Public License, version 2
*	@copyright		2012 Assured Performance Network     
*	@subpackage		CI_Model
*	@since			2.0
*/
class Refer_model extends CI_Model {
	
	function __construct() {
		parent::__construct();           
		$this->load->dbutil();		
	}
	
	public function insertRefer($toInsert) {
		return $this->db->insert_batch('new_apn.dl_shop_referral', $toInsert);
	}
}

?>