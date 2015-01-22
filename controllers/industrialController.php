<?php

class industrialController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        //print_r($this->_view->getLayoutPositions());
        $this->_view->assign('titulo', 'Proindusquim');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->setCSS(array('estilos_industrial','youtube-video-gallery','jquery.fancybox'));
        $this->_view->setJS(array('jquery.youtubevideogallery','jquery.fancybox.pack','jquery.fancybox-media'));
        $this->_view->setTemplate('default5');
        $this->_view->renderizar('index', 'inicio');
        
    }
    public function dos()
    {
        //print_r($this->_view->getLayoutPositions());
        $this->_view->assign('titulo', 'Proindusquim');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->setCSS(array('estilos_industrial','youtube-video-gallery','jquery.fancybox'));
        $this->_view->setJS(array('jquery.youtubevideogallery','jquery.fancybox.pack','jquery.fancybox-media'));
        $this->_view->setTemplate('default5');
        $this->_view->renderizar('dos', 'index');
        
    }
    public function tres()
    {
        //print_r($this->_view->getLayoutPositions());
        $this->_view->assign('titulo', 'Proindusquim');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->setCSS(array('estilos_industrial','youtube-video-gallery','jquery.fancybox'));
        $this->_view->setJS(array('jquery.youtubevideogallery','jquery.fancybox.pack','jquery.fancybox-media'));
        $this->_view->setTemplate('default5');
        $this->_view->renderizar('tres', 'index');
        
    }
    public function cuatro()
    {
        //print_r($this->_view->getLayoutPositions());
        $this->_view->assign('titulo', 'Proindusquim');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->setCSS(array('estilos_industrial','youtube-video-gallery','jquery.fancybox'));
        $this->_view->setJS(array('jquery.youtubevideogallery','jquery.fancybox.pack','jquery.fancybox-media'));
        $this->_view->setTemplate('default5');
        $this->_view->renderizar('cuatro', 'index');
        
    }        
    

}

?>