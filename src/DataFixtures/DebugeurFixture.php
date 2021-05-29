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
        
        $manager->persist($debugeur2);
        $manager->flush();
    }
}
