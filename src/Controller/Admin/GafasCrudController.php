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
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

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
            BooleanField::new('estado'),
            BooleanField::new('destacado'),
            NumberField::new('stock'),
            TextField::new('marca'),
            TextField::new('modelo'),
            TextEditorField::new('descripcion'),
            ChoiceField::new('tipo')->setChoices(['Gafas de sol'=>'gafas sol', 'Gafas graduadas'=>'gafas graduadas']),
            NumberField::new('aro'),
            NumberField::new('puente'),
            ChoiceField::new('talla')->setChoices(['XL'=>'XL','L'=>'L','M'=>'M','S'=>'S',]),
            NumberField::new('varilla'),
            TextField::new('colorMontura'),
            TextField::new('colorLentes'),
            ChoiceField::new('materialMontura')->setChoices(['Acetato'=>'acetato','Aluminio'=>'aluminio','Titanio'=>'titanio','Metal'=>'metal']),
            ChoiceField::new('tipoMontura')->setChoices(['Sin montura'=>'sin','Montura completa'=>'completa','Semi completa'=>'semi','Clip'=>'clip']),
            NumberField::new('precio')->setNumDecimals(2),
            choiceField::new('iva')->setChoices(['21%'=>21,'10%'=>10]),
            NumberField::new('descuento'),
          
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

            //BUSCADOR
            public function configureCrud(Crud $crud): Crud
            {
                return $crud
                    ->setEntityLabelInSingular('Producto')
                    ->setEntityLabelInPlural('Productos')
                    ->setSearchFields(['marca','modelo','id'])
                    ->setDefaultSort(['id' => 'DESC'])
                ;
            }
    
}
