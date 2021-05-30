<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Debugeur;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DebugeurFixture extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $debugeur = new Debugeur();
        $debugeur->setUsername('samantha');
        $debugeur->setPassword(
            $this->encoder->encodePassword($debugeur, 'test')
        );
        $debugeur->setEmail('sam@innobug.fr');
        $debugeur->setAdresse('20 rue du soleil');
        $debugeur->setTelephone('0140328896');
        $debugeur->setStatut('ROLE_APPRENTIE');
        $debugeur->setRoles(array('ROLE_USER'));

        
        $manager->persist($debugeur);
        $manager->flush();

        $debugeur2 = new Debugeur();
        $debugeur2->setUsername('Joyce');
        $debugeur2->setPassword(
            $this->encoder->encodePassword($debugeur2, 'test')
        );
        $debugeur2->setEmail('joyce@innobug.fr');
        $debugeur2->setAdresse('20 rue aubervilliers');
        $debugeur2->setTelephone('0140328897');
        $debugeur2->setStatut('ROLE_STAGIAIRE');
        $debugeur2->setRoles(array('ROLE_USER'));
        
        $manager->persist($debugeur2);
        $manager->flush();

        $debugeur3 = new Debugeur();
        $debugeur3->setUsername('marcel');
        $debugeur3->setPassword(
            $this->encoder->encodePassword($debugeur3, 'test')
        );

        $debugeur3->setEmail('bragance@innobug.fr');
        $debugeur3->setAdresse('20 rue du paradis ');
        $debugeur3->setTelephone('0140328797');
        $debugeur3->setStatut('ROLE_STAGIAIRE');
        $debugeur3->setRoles(array('ROLE_ADMIN'));
        
        $manager->persist($debugeur3);
        $manager->flush();

        $debugeur4 = new Debugeur();
        $debugeur4->setUsername('admin');
        $debugeur4->setPassword(
            $this->encoder->encodePassword($debugeur4, 'test')
        );

        $debugeur4->setEmail('admin@innobug.fr');
        $debugeur4->setAdresse('20 rue admin ');
        $debugeur4->setTelephone('0140328797');
        $debugeur4->setStatut('ROLE_APPRENTIE');
        $debugeur4->setRoles(array('ROLE_ADMIN'));
        
        $manager->persist($debugeur4);
        $manager->flush();
    }
}
