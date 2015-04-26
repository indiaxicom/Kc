<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    /*Calling components*/
    public $components = array('Paginator', 'Cookie');
    //public $helpers = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('register', 'check_existing_email'));
    }

    public function login()
    {
        $this->layout = 'home';
        
//        $cookie = $this->Cookie->read('Auth.User');

        /*If Cookie is saved */
//        if (!is_null($cookie)) {
//            if ($this->Auth->login($cookie)) {
//                
//                return $this->redirect(array('controller' => 'users', 'action' => 'profile', $this->Auth->user('username')));
//            } else { // Delete invalid Cookie
//                $this->Cookie->delete('Auth.User');
//            }
//        }

        if ($this->Auth->user('type') && $this->Auth->user('type') == USER_SITE)
        {
            return $this->redirect(array('controller' => 'users', 'action' => 'profile', $this->Auth->user('username')));
        }

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                
                /*If Remember me is checked then save cookie */
//                if ($this->data['User']['remember'])
//                {
//                    $cookie = array();
//                    $cookie['email'] = $this->data['User']['email'];
//                    $cookie['password'] = $this->data['User']['password'];
//                    $this->Cookie->write('Auth.User', $cookie, true, '+2 weeks');
//                }
                
                return $this->redirect(array('controller' => 'users', 'action' => 'profile', $this->Auth->user('username')));
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
            return $this->redirect(array('controller' => 'users', 'action' => 'login'));
        }
    }
    
     public function logout() {
        $this->Auth->logout();
        //$this->Cookie->delete('Auth.User');
        return $this->redirect(array('controller' => 'users', 'action' => 'login'));
    }

    /* Created - 20 April 2015
     * Created By - Sumit Kohli
     * Description - User Registration from front end
     */

    public function register($step = 0)
    {
        switch($step)
        {
            case 1 :
                $this->_register_step_1();
                break;
            case 2 :
                $this->_register_step_2();
                break;
            case 3 :
                $this->_register_step_3();
                break;
            default :
                $this->layout = 'home';
                
                if ($this->request->is('post'))
                {
                    $this->request->data['User']['status'] = IN_ACTIVE;

                    if ($this->User->save($this->request->data['User']))
                    {
                        $username_string = $this->request->data['User']['first_name'] . ' ' . 
                            $this->request->data['User']['last_name'] . ' ' .
                            $this->User->id;
                        
                        $username_string = $this->sanitize_file_name($username_string);
                        $this->User->save(array('username' => $username_string));

                        if ($this->Auth->login())
                        {
                            return $this->redirect(array('action' => 'register' , '1'));
                        }
                    }
                    else
                    {
                        $this->Session->setFlash(__('Unable to save details'));
                        pr($this->User->validationErrors);
                    }
                }                
        }
    }
    
    /* Created - 25 April 2015
     * Created By - Sumit Kohli
     * Description - User Registration Step 1
     */
    public function _register_step_1()
    {
        $this->render('_register_step_1');
    }
    
    /* Created - 25 April 2015
     * Created By - Sumit Kohli
     * Description - User Registration Step 2
     */
    public function _register_step_2()
    {
        $this->render('_register_step_2');
    }
    
    /* Created - 25 April 2015
     * Created By - Sumit Kohli
     * Description - User Registration Step 3
     */
    public function _register_step_3()
    {
        $this->render('_register_step_3');
    }
    
    /* Created - 25 April 2015
     * Created By - Sumit Kohli
     * Description - User Profile
     */
    public function profile($username = NULL)
    {
        if (empty($username))
        {
            throw new NotFoundException();
        }
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

        $page_title = 'Add User';

        if ($this->request->is('post')) {

            if ($this->User->save($this->request->data)) {
                $username_string = $this->request->data['User']['first_name'] . ' ' . 
                    $this->request->data['User']['last_name'] . ' ' . $this->User->id;                    
                $username_string = $this->sanitize_file_name($username_string);
                $this->User->save(array('username' => $username_string));
                
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'commander_index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        } 
        $this->set(compact('page_title'));
    }
    
    public function commander_edit($id = NULL) {

        $page_title = 'Edit User';

        if ($this->request->is('post')) {
            $this->User->id = $id;
                    
            if ($this->User->save($this->request->data)) {
                $username_string = $this->request->data['User']['first_name'] . ' ' . 
                    $this->request->data['User']['last_name'] . ' ' . $this->User->id;                    
                $username_string = $this->sanitize_file_name($username_string);
                
                $this->User->save(array('username' => $username_string));
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'commander_index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
        $this->data = $this->User->findById($id, array('email', 'first_name', 'last_name', 'type', 'status'));
        
        $this->set(compact('page_title', 'user_detail'));
        $this->render('commander_add');
    }


    /*
     * Description - Login for Admin
     * Created By- Sumit Kohli
     * Created - 11 August 2015
     */
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
            'fields' => array('full_name', 'email', 'created', 'modified', 'id', 'status'),
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
    
    public function commander_change_status()
    {
        $this->autoRender = false;
        $this->User->save(array('User' => array (
                    'status' => $this->request->data['status'],
                    'id' => $this->request->data['id'],
                )
            )
        );
    }
    
    /**/
}
