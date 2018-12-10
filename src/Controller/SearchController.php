<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class SearchController extends AppController {
    /**
     * People top page
     */
    public function index() {
        $limit = Configure::read('Config.pageSize');
        $param = $this->getParams(array(
            'keyword' => '',
            'page' => 1,
            'limit' => $limit
        ));
        $result = Api::call(Configure::read('API.url_posts_list'), $param);
        $data = !empty($result['data']) ? $result['data'] : array();
        $total = !empty($result['total']) ? $result['total'] : 0;
        $this->set('data', $data);
        $this->set('param', $param);
        $this->set('limit', $limit);
        $this->set('total', $total);
    }
}