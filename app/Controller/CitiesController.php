<?php
App::uses('AppController', 'Controller');

class CitiesController extends AppController {
    
    public $components = array('RequestHandler');

    public function all_cities () {     
        $cities = $this->City->find('all', array(
            'limit' => 10, 
            'fields' => array('id', 'name'),
            'conditions' => array(
                'country_iso_code' => $this->request->query['country_code'],
                'name LIKE' => $this->request->query['q']['term'] . '%' 
            )
        ));

        $this->set('cities', $cities);
        $this->set('_serialize', array('cities'));
    }
}
