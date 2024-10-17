<?php

namespace App\Controller\Admin;

use App\Entity\Gafas;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class GafasCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gafas::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('marca'),
            TextField::new('modelo'),
            TextEditorField::new('descripcion'),
            TextField::new('tipo'),
            ChoiceField::new('tipo')->setChoices(['Gafas de sol'=>'gafas sol', 'Gafas graduadas'=>'gafas graduadas']),
            NumberField::new('aro'),
            NumberField::new('puente'),
            NumberField::new('talla'),
            NumberField::new('varilla'),
            TextField::new('colorMontura'),
            TextField::new('colorLentes'),
            ChoiceField::new('materialMontura')->setChoices(['Acetato'=>'acetato','Aluminio'=>'aluminio','Titanio'=>'titanio','Metal'=>'metal']),
            ChoiceField::new('tipoMontura')->setChoices(['Sin montura'=>'sin','Montura completa'=>'completa','Semi completa'=>'semi','Clip'=>'clip']),
            NumberField::new('precio')->setNumDecimals(2),
            choiceField::new('iva')->setChoices(['21%'=>21,'10%'=>10]),
            NumberField::new('descuento'),
            NumberField::new('stock'),
            choiceField::new('destacado')->setChoices(['No destacado'=>0,'destacado'=>1]),
          
            //imagen1
            ImageField::new('imageName', 'principal')
            ->setBasePath('images/gafas')
            ->setUploadDir('public/images/gafas')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
            //imagen2
            ImageField::new('imageName2', 'imagen2')
            ->setBasePath('images/gafas')
            ->setUploadDir('public/images/gafas')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
             //imagen3
            ImageField::new('imageName3', 'imagen3')
            ->setBasePath('images/gafas')
            ->setUploadDir('public/images/gafas')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
            ChoiceField::new('categoria')->setChoices(['gafas'=>1,]),
            
        ];
    }
    
}
