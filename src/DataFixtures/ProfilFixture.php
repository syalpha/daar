<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Profil;

class ProfilFixture extends Fixture
{
    public function load(ObjectManager $manager){
        $roles = "";
        $i = 1;
        while($i<=6){
            $profil = new Profil();
    
            if($i == 1){
                $roles = "['ROLES_SUPER_ADMIN']";   
            }
            elseif ($i == 2){
                $roles = "['ROLES_ADMIN']";   
            }
            elseif ($i == 3){
                $roles = "['ROLES_CAISSIER']";   
            }
            elseif ($i == 4){
                $roles = "['ROLES_PRESTATAIRE']";   
            }
            elseif ($i == 5){
                $roles = "['ROLES_ADMIN_USER']";   
            }
            else{
                $roles = "['ROLES_USERSIMPLE']";   
            }
                $profil->setRoles($roles);
                $manager->persist($profil);
                $manager->flush();
                $i++;
        }
    } 
}
