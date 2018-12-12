<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class ContactsController extends AppController {
    /**
     * People top page
     */
    public function index() {
        if ($this->request->is('post')) {
            // Trim data
            $data = $this->request->data();
            Api::call(Configure::read('API.url_contacts_addupdate'), $data);
            $this->Flash->success(__('MESSAGE_CONTACT_OK'));
            return $this->redirect("{$this->BASE_URL}/lien-he");
        }
    }
}