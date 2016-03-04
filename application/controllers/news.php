<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends APN_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->model("News_model");
        }
         
        
        
	public function index(){
        $this->_set('title', "IN THE NEWS");

        $news = $this->News_model->getNews();
        $featured = $news[0];

        $formattedNews = array();
        $date = new DateTime();
        foreach ( $news as $_news ) {
            if ( $_news["id"] == $featured["id"] ) { continue; }
            $date->setTimestamp($_news["created"]);
            $formattedNews[$date->format("Y")][] = $_news;
        }

        $this->_set("news",$formattedNews);
        $this->_set("featured",$featured);

//            test javascript and css files
//            $this->_set('js', "/resources/common/js/consumer");
        $this->_set('css', "/assets/css/common", array());
        $this->_set('css', "/assets/css/news", array());
        $this->_set('active', array('', '', '', '', '', '', 'active'));

        $this->load->view('basic/header/header', $this->_data);
        $this->load->view('basic/content/news');
        $this->load->view('basic/footer/footer');
                
	}
}
