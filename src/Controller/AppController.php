<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\Time;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',// truong dung dang nhap
                        'password' => 'password' // truong dung password
                    ]
                ]
            ],  
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'controller' => 'Quanlys',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function isAuthorized($user)
    {
        // Any registered user can access public functions
        if (!$this->request->getParam('prefix')) {
            return true;
        }
        // Default deny
        return false;
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login','add']);
        $current_user = $this->Auth->user();
        $this->loadModel('Groups');
        $group = $this->Groups->find('all', [
            'fields' => ['permission'],
            'conditions' => [
                'Groups.id' => $current_user['group_id']
            ]
        ])->first();

        $this->set(compact('current_user','group'));
    }

    public function get_current_user(){
        return $this->Auth->user();
    }

    public function premission() {
        $user = $this->Auth->user();
        $this->loadModel('Groups');
        $group = $this->Groups->find('all', [
            'fields' => ['permission'],
            'conditions' => [
                'Groups.id' => $user['group_id']
            ]
        ])->first();
        if ($group['permission'] > 1) {
            $this->redirect(['controller' => 'Hopdongs','action' => 'index']);
        }
    }

    public function replace_ngay($date) {
        $date_ar = array_reverse(explode('/', $date));
        $result = '';
        foreach ($date_ar as $key => $value) {
            $result .= $value.'-';
        }
        return new Time(substr($result, 0, -1));
    } 

}
