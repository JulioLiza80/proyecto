<?php

namespace App\Controller\Admin;

use App\Entity\DetallePedido;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;


class DetallePedidoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DetallePedido::class;
    }

    //eliminar boton crear y actualizar
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Crud::PAGE_DETAIL, Action::NEW)
            ->disable(Crud::PAGE_DETAIL, Action::EDIT)
            
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            IdField::new('idPedido'),
            IdField::new('idProducto'),
            IdField::new('categoriaProducto'),
            NumberField::new('cantidad'),
            NumberField::new('Precio'),
            
        ];
    }
    
}
