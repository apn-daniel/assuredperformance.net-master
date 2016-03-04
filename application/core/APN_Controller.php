<?php

class APN_Controller extends CI_Controller {

    public function _set($key, $val,$type=null) {
        if (is_null($type)) {
            $this->_data[$key] = $val;
        }
        elseif(is_array($type)) {
            $this->_data[$key][] = $val;
        }
        
    }

}
?>
