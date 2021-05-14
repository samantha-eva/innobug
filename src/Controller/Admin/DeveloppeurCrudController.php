<?php

namespace App\Controller\Admin;

use App\Entity\Developpeur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class DeveloppeurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Developpeur::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            Field::new('nom'),
            EmailField::new('email'),
            Field::new('password'),
            Field::new('adresse'),
            TelephoneField::new('telephone'),
            
            DateField::new('anneeExp'),

            ChoiceField::new('specialite')
            -> setChoices ([ 
                ' FRONT-END ' =>  ' FRONT-END ' ,
                ' BACK-END '  =>  ' BACK-END' ,
                'FULL-STACK'  =>  'FULL-STACK'
               ])
        ];
    }
    
}
