<?php

class Account {
    
    private $balance = 0; 
    // Only change code below this line

    public function deposit($amount)
    {
       return $this->balance += $amount;
    }

    
    public function withdraw($amount)
    {
       return $this->balance -= $amount;
    }

    
    public function getBalance()
    {
       return $this->balance;
    }

    
    public function setBalance($balance)
    {
       return $this->balance = $balance;
    }

    
    // Only change code above this line
 } 
 
 // Only change code below this line 
    //create an object using the Account class: 
    $myAccount = new Account(); 
    // Set the initial balance to 100 
    $balance = $myAccount->setBalance(100);
    
    // deposit 50 into your account:
    $balance = $myAccount->deposit(50);
    
    // withdraw 20 into your account 
    $balance =$myAccount->withdraw(20);
    
    // echo the balance of your account 
    echo $balance = $myAccount->getBalance();
    
    // Only change code above this line
