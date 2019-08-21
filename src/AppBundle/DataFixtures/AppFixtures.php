<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\User;
use AppBundle\Entity\Posts;
use AppBundle\Entity\CurriculumV;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Faker\Factory;
class AppFixtures extends Fixture 
{
    private $passwordEncoder ;

    protected $faker;

    function __construct(ContainerInterface $container)
    {
        $this->passwordEncoder = $container->get('security.password_encoder');
    }
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        $this->faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
    
            $user = new User();
            $user->setUserName($this->faker->userName);
            $user->setEmail($this->faker->email);
            $plainPassword = 'password';
            $encoded = $this->passwordEncoder->encodePassword($user, $plainPassword);
            $user->setPassword($encoded);

            $manager->persist($user);
            $manager->flush();
            $cv = new CurriculumV();
            $cv->setOwner($user);
            $cv->setDescription($this->faker->text);
            $cv->setTitle($this->faker->sentence);
            $manager->persist($cv);


        }
        $manager->flush(); 
        
    }
}