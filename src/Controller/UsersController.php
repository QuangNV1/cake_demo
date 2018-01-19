<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{       
    use MailerAwareTrait;

    public function isAuthorized($user) {
            // Admin has full access
            if ($user['role'] == 'Admin') {
                return true;
            }
            // User can view and edit own account only
            if (in_array($this->request->action, ['view', 'myedit']) && $this->Auth->user('uuid') == $this->request->params['pass'][0]) {
                return true;
            }

        $this->Flash->error(__('Sorry you cannot access to this !'));
        return $this->redirect(['controller'=>'Users', 'action' => 'view', $this->Auth->user('uuid')]);     
    }

    public function manager() {   
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }


    public function view($uuid = null){
        $user = $this->Users->findByUuid($uuid)->firstOrFail();
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->uuid = uniqid();
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.')); 
                return $this->redirect(['action' => 'manager']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }


    public function register(){   
        $this->viewBuilder()->setLayout(false);
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->activeflag = 0;
            $user->uuid = uniqid();
            $user->role = 'Users';
            if ($this->Users->save($user)) {
                $this->getMailer('User')->send('sendmail', [$user, 'http://'.$_SERVER['HTTP_HOST'].'/users/confirm/'.$user->uuid]);
                $this->redirect(['controller'=>'Users', 'action' => 'successregister', $user->uuid]);
            }
            unset($this->request->data['password']);
            unset($this->request->data['confirm_password']);
            $this->Flash->error(__('Cannot register :( . Please input correct data'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function successregister($uuid = null){   
        $this->viewBuilder()->setLayout(false);
        $this->set('emailUser', json_decode(json_encode($this->Users->find()->where(['uuid =' => $uuid])))[0]->email);
    }   


    public function confirm($uuid = null) {
        $this->viewBuilder()->setLayout(false);
         $user = $this->Users->findByUuid($uuid)->firstOrFail();
         $activeStatus = json_decode(json_encode($this->Users->find()->where(['uuid =' => $uuid])))[0]->activeflag;
         if ($activeStatus == 1) {
            $message = 'Your account has already been actived :) ';
            } else {
               $user->activeflag = 1;
               $this->Users->save($user);
               $message = 'Thank you for using our website !. Now Your Account has been actived, Enjoy :) ';
            }
        $this->set('message', $message);        
    }

    public function edit($uuid = null){
        $user = $this->Users->findByUuid($uuid)->firstOrFail();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'manager']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function myedit($uuid = null){
        $user = $this->Users->findByUuid($uuid)->firstOrFail();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                $this->redirect(['controller'=>'Users', 'action' => 'view', $this->Auth->user('uuid')]);
            } else {
            $this->Flash->error(__('The user could not be saved. Please, try again.')); }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }


    public function delete($uuid = null){
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->findByUuid($uuid)->firstOrFail();
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'manager']);
    }


    public function login(){   
        $this->viewBuilder()->setLayout(false);
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user && $user['activeflag'] == 1) {
                $this->Auth->setUser($user);
                $this->redirect(['controller'=>'Users', 'action' => 'view', $this->Auth->user('uuid')]);
            } else if ($user && $user['activeflag'] == 0) {
                $err = 'Your must active your account first !!!';
            } elseif (!$user) {
                $err = 'Your username or password is incorrect.';     
            }
            $this->set('error', $err);
        }       
    }

    public function logout() {
        $session = $this->request->session();
        $session->destroy();
        $this->redirect(['controller' => 'home', 'action' => 'index']);
    }

}
