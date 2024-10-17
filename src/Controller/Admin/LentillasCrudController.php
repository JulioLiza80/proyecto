<?php

namespace App\Controller\Admin;

use App\Entity\Lentillas;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\Validator\Constraints\Choice;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

class LentillasCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lentillas::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            ChoiceField::new('marca')->setChoices(['Disop'=>'disop','Coopervision'=>'coopervision','Alcon'=>'alcon','Bausch & Lom'=>'bausch']),
            TextEditorField::new('descripcion'),
            ChoiceField::new('tipoProducto')->setChoices(['lentillas'=>'lentillas','Liquido de lentillas'=>'liquido']),
            ChoiceField::new('frecuencia')->setChoices(['Diarias'=>'diarias','Mensuales'=>'mensuales']),
            ChoiceField::new('tipo')->setChoices(['Esferica'=>'esfericas','Multifocales'=>'multifocales','Tóricas'=>'toricas','Lentillas de color'=>'color']),
            ChoiceField::new('material')->setChoices(['Hidrogel'=>'hidrogel','Hidrogel silicona'=>'silicona']),
            NumberField::new('precio')->setNumDecimals(2),
            choiceField::new('iva')->setChoices(['21%'=>21,'10%'=>10]),
            NumberField::new('descuento'),
            NumberField::new('stock'),
            ChoiceField::new('destacado')->setChoices(['No destacado'=>0,'Destacado'=>1]),
             //imagen1
            ImageField::new('imageName', 'principal')
            ->setBasePath('images/lentillas')
            ->setUploadDir('public/images/lentillas')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
            ChoiceField::new('categoria')->setChoices(['Lentillas Y Productos'=>2,]),

            
        ];
    }
    
}
