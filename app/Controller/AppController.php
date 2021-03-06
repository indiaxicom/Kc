<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
        'Session',
        'Util',
        'RequestHandler',
        'Auth' => array(
            'authorize' => 'Controller',
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'commander_login',
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish',
                    'fields' => array('username' => 'email')
                )
            )
        )
    );
    
   function beforeFilter() {
        if($this->request->prefix == 'commander'){
            $this->layout = 'admin';
        } 
    }
    
    public function isAuthorized($user = null) {

        // Any registered user can access public functions
        if (empty($this->request->params['commander'])  && $user['type'] == USER_SITE) {
            return true;
        }
        
        // Only admins can access admin functions
        if ($this->request->prefix == 'commander' && $user['type'] == USER_ADMIN) {
            return true;
        }
        // Default deny
        return false;
    }
    
    protected function sanitize_file_name($str)
    {
        $str = preg_replace("/[^A-Za-z0-9 .]/", '', $str);
        $str = preg_replace( "/\s+/", "-", $str);
        $str = strtolower($str);
        return $str;
    }
    
    /*
     * Description - Get all countries
     * Author - Sumit Kohli
     */
    public function get_countries()
    {
        $this->loadModel('Country');
        $countries = $this->Country->find('list', array('fields' => array('iso_code', 'name'), 'order' => 'name'));

        $this->set('countries', $countries);
        $this->set('_serialize', array('countries'));
        return $countries;
    }
}
