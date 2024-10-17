<?php

namespace App\Controller\Admin;

use App\Entity\Pedidos;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class PedidosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pedidos::class;
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
            IdField::new('idUsuarioPedidos.id'),
            TextField::new('direccion'),
            TextField::new('ciudad'),
            IntegerField::new('cp'),
            IntegerField::new('IdTransaccion'),

        ];
    }
    
}
