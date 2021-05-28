<?php

namespace App\Controller\Admin;

use App\Entity\Statut;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

class StatutCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Statut::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('libelle')
            -> setChoices ([ 
                ' A FAIRE '  =>  ' A FAIRE ' ,
                ' EN COURS '  =>  ' EN COURS ' ,
                ' TERMINER'      =>   'TERMINER'
               ]),
               
        ];
    }
    
}
