<?php

namespace App\Controller\Admin;

use App\Entity\Invcat;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InvcatCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Invcat::class;
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
