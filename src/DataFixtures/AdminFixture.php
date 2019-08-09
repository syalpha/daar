<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminFixture extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user =new User();   
         $user->setUsername('admin@gmail.com');
         $user->setRoles(['ROLE_SUPER_ADMIN']);
         $password = $this->encoder->encodePassword($user, 'hello');
         $user->setPassword($password);
         $user->setNom('SY');
         $user->setPrenom('Alpha');
         $user->setAdresseuser('Hamo4');
         $user->setTeluser(774457219);
         $user->setCNI("1755199403044");

         $manager->persist($user);
         $manager->flush();
    }
}