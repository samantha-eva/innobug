<?php

namespace App\Controller\Admin;

use App\Entity\Debugeur;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

class DebugeurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Debugeur::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
          
            Field::new('username'),
            EmailField::new('email'),
            Field::new('adresse'),
            TelephoneField::new('telephone'),
            Field::new('password'),
            ChoiceField::new('statut')
            -> setChoices ([ 
                ' APPRENTIE '  =>  ' ROLE_APPRENTIE ' ,
                ' STAGIAIRE '  =>  ' ROLE_STAGIARE ' ,
                'SALARIÉ'      =>   'ROLE_SALARIÉ'
               ]),

               ArrayField::new('roles')
               
        ];

       
    }
    
}
