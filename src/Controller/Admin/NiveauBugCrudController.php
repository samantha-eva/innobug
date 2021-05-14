<?php

namespace App\Controller\Admin;

use App\Entity\NiveauBug;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NiveauBugCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NiveauBug::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
