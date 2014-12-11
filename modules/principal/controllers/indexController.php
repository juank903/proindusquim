<?php

class indexController extends principalController
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        Session::set('autenticado', true);
        Session::set('level','usuario');
        Session::set('tiempo',time());
        Session::set('var1','var1');
        Session::set('var2','var2');
        $this->redireccionar('principal/index/mostrar');
    }
    
    public function mostrar()
    {
        echo Session::get('var1');
        //print_r($this->_view->getLayoutPositions());
        $this->_view->assign('titulo', 'Proindusquim');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->setCSS(array('estilos_tips','reset','animate','styles'));
        $this->_view->setTemplate('default2');
        $this->_view->renderizar('mostrar', 'principal');
    }
    
    public function cerrar()
    {
        Session::destroy($clave);
        $this->redireccionar('principal/mostrar');
    }

    public function index2()
    {
        //print_r($this->_view->getLayoutPositions());
        $this->_view->assign('titulo', 'Proindusquim');
        //$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->setCSS(array('estilos_tips','reset','animate','styles'));

        $this->_view->setTemplate('default2');
        $this->_view->renderizar('index', 'inicio');
    }
}

?>