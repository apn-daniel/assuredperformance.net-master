<?php
/**
 * Created by PhpStorm.
 * User: erihige
 * Date: 5/2/14
 * Time: 10:02 AM
 */
class News_model extends CI_Model {


    public function getNews() {
        $this->db->order_by("featured DESC, created DESC");
        $query = $this->db->get_where("apn_news",array("published" => 1));

        return $query->result_array();
    }

}