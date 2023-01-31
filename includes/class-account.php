<?php

class Account {
    
    private $balance = 0; 
    // Only change code below this line

    public function deposit($amount)
    {
       $this->balance += $amount;
    }

    
    public function withdraw($amount)
    {
       $this->balance -= $amount;
    }

    
    public function getBalance()
    {
       return $this->balance;
    }

    
    public function setBalance($balance)
    {
       $this->balance = $balance;
    }

    
    // Only change code above this line
 } 
 
 // Only change code below this line 
    //create an object using the Account class: 
    $myAccount = new Account(); 
    // Set the initial balance to 100 
    $myAccount->setBalance(100);
    
    // deposit 50 into your account:
    $myAccount->deposit(50);
    
    // withdraw 20 into your account 
    $myAccount->withdraw(20);
    
    // echo the balance of your account 
    echo $myAccount->getBalance();
    
    // Only change code above this line
