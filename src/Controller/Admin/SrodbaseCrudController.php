<?php

namespace App\Controller\Admin;

use App\Entity\Srodbase;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SrodbaseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Srodbase::class;
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
