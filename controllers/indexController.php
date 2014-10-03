<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        //print_r($this->_view->getLayoutPositions());
        $this->_view->assign('titulo', 'Proindusquim');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->setCSS(array('estilos_index','youtube-video-gallery','jquery.fancybox'));
        $this->_view->setJS(array('jquery.jshowoff','jquery.youtubevideogallery','jquery.fancybox.pack','jquery.fancybox-media'));
        $this->_view->renderizar('index', 'inicio');
    }
}

?>