<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

        public function checkCharacters($password, array $context)
    {
        // number
        if (!preg_match("#[0-9]#", $password)) {
            return false;
        }
        // Uppercase
        if (!preg_match("#[A-Z]#", $password)) {
            return false;
        }
        // lowercase
        if (!preg_match("#[a-z]#", $password)) {
            return false;
        }
        // special characters
        if (!preg_match("#\W+#", $password) ) {
            return false;
        }
        return true;
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('uuid')
            ->maxLength('uuid', 45)
            ->requirePresence('uuid', 'create')
            ->notEmpty('uuid');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'This username has been used']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password', 'You must enter a password', 'create')
            ->add('password', ['length' => ['rule' => ['minLength', 8], 'message' => 'Password must be at least 8 characters long.' ]])
            ->add('password', 'custom', ['rule' => [$this, 'checkCharacters'], 'message' => 'The password must contain 1 number, 1 uppercase, 1 lowercase and 1 special character']);

        $validator
            ->requirePresence('confirm_password', 'create')
            ->notEmpty('confirm_password')
            ->allowEmpty('confirm_password', 'update')
            ->add('confirm_password', 'compareWith', ['rule' => ['compareWith', 'password'], 'message' => 'Passwords do not match.']);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'This email has been used']);

        $validator
            ->scalar('role')
            ->maxLength('role', 45)
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        $validator
            ->requirePresence('activeflag', 'create')
            ->notEmpty('activeflag');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }



}
