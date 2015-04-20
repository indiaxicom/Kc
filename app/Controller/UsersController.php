<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    /*Calling components*/
    public $components = array('Paginator');
    //public $helpers = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('register', 'check_existing_email'));
    }

    public function login()
    {
        $this->layout = 'home';
        
        if ($this->Auth->user())
        {
            return $this->redirect(array('controller' => 'pages', 'action' => 'home'));
        }
        
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect(array('controller' => 'pages', 'action' => 'home'));
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
    
    public function register()
    {
        $this->layout = 'home';
        
    }
    
    public function check_existing_email()
    {
        $this->autoRender = FALSE;
        
        if ($this->request->is('post'))
        {
            $valid = true;
            $email_exists = $this->User->findByEmail($this->request->data['User']['email'], array('id'));

            if ($email_exists)
            {
               $valid = false;
            }
        }
        exit(json_encode($valid));
    }
    
    public function index() {
        $this->layout = 'admin';
    }


    public function commander_add() {
        $this->layout = 'admin';
        $page_title = 'Add User';

        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'add'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
        $this->set(compact('page_title'));
    }
    public function commander_login() {
         if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function commander_index() {
        $this->layout = 'admin';
        $page_title = 'Users';
        $paginate = array(
            'limit' => PAGINATE_LIMIT,
            'fields' => array('name', 'email', 'created', 'modified'),
            'order' => array(
                'User.id' => 'DESC'
            )
        );

        $this->Paginator->settings = $paginate;
        
        try {
            $all_users = $this->Paginator->paginate('User');
        } catch (NotFoundException $e) {
            $this->Session->setFlash(__('Invalid Pagination number'));
        }

        $this->set(compact('all_users', 'page_title'));
    }
    
    public function commander_logout() {
        return $this->redirect($this->Auth->logout());
    }
}
