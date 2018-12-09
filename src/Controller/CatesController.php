<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class CatesController extends AppController {
    /**
     * People top page
     */
    public function index($url = '') {
        $ids = array();
        $rootId = '';
        $cateName = '';
        $limit = Configure::read('Config.pageSize');
        foreach ($this->_settings['cates'] as $c) {
            if ($c['url'] == $url) {
                $cateName = $c['name'];
                $ids[] = $c['id'];
                $rootId = $c['id'];
            }
            if (!empty($rootId) && $c['root_id'] == $rootId) {
                $ids[] = $c['id'];
            }
        }
        $param = $this->getParams(array(
            'cate_id' => implode(',', $ids),
            'page' => 1,
            'limit' => $limit
        ));
        $result = Api::call(Configure::read('API.url_posts_list'), $param);
        $data = !empty($result['data']) ? $result['data'] : array();
        $total = !empty($result['total']) ? $result['total'] : 0;
        $param['cate_name'] = $cateName;
        $this->set('_url', $url);
        $this->set('data', $data);
        $this->set('param', $param);
        $this->set('limit', $limit);
        $this->set('total', $total);
    }
}