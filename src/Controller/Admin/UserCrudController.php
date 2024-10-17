<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        

        return [
            IdField::new('id')->hideOnForm(),
            EmailField::new('email')->hideOnForm(),
            NumberField::new('isVerified')->hideOnForm(),
            TextField::new('nombre'),
            TextField::new('apellido1'),
            TextField::new('apellido2'),
            TextField::new('direccion'),
            TextField::new('ciudad'),
            IntegerField::new('cp'),
            //descarga
           
          
            //documento
            TextField::new('documentName', 'documento')
            ->setFormType( FileUploadType::class )
            ->setFormTypeOptions(['upload_dir' => 'public/documentos/usuarios/'])
            ->setCustomOption('basePath', 'documentos/usuarios')
            ->setCustomOption('uploadDir', 'public/documentos/usuarios')
            ->setCustomOption('uploadedFileNamePattern', '[randomhash].[extension]')
            ->setCustomOption('download_path', 'documentos/usuarios'),
        ];
    }
    
}
