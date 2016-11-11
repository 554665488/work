<?php
    class Account {
        public $balance;
        
        public function __construct($balance) {
            $this->balance = $balance;
        }
    }
 
    class Person {
        private $id;
        private $name;
        private $age;
        public $account;
        
        public function __construct($name, $age, Account $account) {
            $this->name = $name;
            $this->age = $age;
            $this->account = $account;
        }
        
        public function setId($id) {
            $this->id = $id;
        }
        
        public function __clone() {    #���Ʒ���,�������涨����clone�ǽ��еĲ���
            $this->id = 0;
            $this->account = clone $this->account;    #������һ��,account��clone�ǻ�ֻ����������,����һ��account��balance���޸���һ��Ҳͬ���ᱻ�޸�
        }
    }
    
    $person = new Person("peter", 15, new Account(1000));
    $person->setId(1);
    $person2 = clone $person;
    
    $person2->account->balance = 250;
    
    var_dump($person);
	echo "</br>";
	var_dump($person2);
    
 ?>