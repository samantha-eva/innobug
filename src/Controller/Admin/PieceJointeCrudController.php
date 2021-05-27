<?php

namespace App\Controller\Admin;

use App\Entity\PieceJointe;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;

use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichImageType;



class PieceJointeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PieceJointe::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        
        ->add(Crud::PAGE_INDEX, Action::DETAIL)
        ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $action) {
            return $action->setIcon('fa fa-file-alt')->addCssClass('btn btn-success');
        })
        ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $action) {
            return $action->setIcon('fa fa-edit')->addCssClass('btn btn-warning');
        })
        ->update(Crud::PAGE_INDEX, Action::DETAIL, function (Action $action) {
            return $action->setIcon('fa fa-eye')->addCssClass('btn btn-info');
        })
        ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
            return $action->setIcon('fa fa-trash')->addCssClass('btn btn-outline-danger');
        });
        
    }

    public function configureFields(string $pageName): iterable
    {
        return [
          
            Field::new('libelle'),
            TextField::new('pieceJointeFile')->setFormType(VichImageType::class),
            ImageField::new('urlPj')->setBasePath('/uploads/files')->onlyOnDetail(),
            Field::new('idRapport'),

            
        ];
    }
    
}
