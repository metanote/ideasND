<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        //get controller  name
        $controller = Zend_Controller_Front::getInstance()->getRequest()->getControllerName();
        //get action name
        $action = Zend_Controller_Front::getInstance()->getRequest()->getActionName();
        // get session login instance
        $login = new Zend_Session_Namespace('login');
        if (!isset($login->islogged)) {
            if (!( ($controller == 'index') and ( ( $action == 'login' ) or ( $action == 'register' ) ) )) {
                $this->_helper->redirector('register', 'index');
            }
        } else {
            if (( ($controller == 'index') and ( ( $action == 'login' ) or ( $action == 'register' ) ))) {
                echo 1;
                $this->_helper->redirector('index', 'index');
            }
        }
    }

    public function indexAction() {
        // action body
    }

    public function loginAction() {
        // action body
        $this->_helper->layout->disableLayout();
    }

    public function logoutAction() {
        // action body
    }

    public function registerAction() {
        // action body
        $this->_helper->layout()->setLayout('register');
    }

}