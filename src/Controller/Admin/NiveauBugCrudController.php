<?php

namespace App\Controller\Admin;

use App\Entity\NiveauBug;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;


class NiveauBugCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NiveauBug::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('libelle')
            -> setChoices ([ 
                ' FACILE '  =>  ' FACILE ' ,
                ' INTERMEDIAIRE '  =>  'INTERMEDIAIRE ' ,
                ' DIFFICILE'      =>   'DIFFICILE'
               ]),
        ];
    }
    
}
