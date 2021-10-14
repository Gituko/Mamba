<?php

namespace Drupal\offer\SeedData;

use Drupal\user\Entity\User;


/**
 * Class SeedGenerator
 * @package Drupal\offer
 */

 class SeedDataGenerator
 {
     /**
      * 
      * Function to Create the Seed Data
      * @param string $entity
      * The type of entity that needs to be created.         
      *@return integer $count
      *The number of entities created
      */

    public function Generate($entity)
    {
        # code...

        $count = 0;

        switch($entity){
            case 'user':
                //User Seeds
                $user = User::create();
                $user->setUsername('test');
                $user->setPassword('test');
                $user->setEmail('test@mail.com');
                $user->activate();
                $user->enforceIsNew();

                if($user->save()){
                    $count += 1;
                    return $count;
                }
                break;
        }

        return null;
    }      
 }
 