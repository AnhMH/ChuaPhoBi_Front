<?php

/* 
 * Ajax controller
 */

namespace App\Controller;
use App\Lib\Api;
use Cake\Routing\Router;
use Cake\Core\Configure;

class AjaxController extends AppController {
    
    public function initialize() {
        parent::initialize();
//        $this->autoRender = false;
    }
    
    /**
     * Product detail
     */
    public function setpageview() {
        $this->autoRender = false;
        $session = Router::getRequest(true)->session();
        $visit = !empty($session->check(SESSION_PAGE_VIEW)) ? 0 : 1;
        Api::call(Configure::read('API.url_settings_setpageview'), array(
            'is_visit' => $visit
        ));
        $session->write(SESSION_PAGE_VIEW, 1);
        exit();
    }
}