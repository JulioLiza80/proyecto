<?php

namespace App\Service;

use App\Entity\Gafas;
use App\Entity\Lentillas;
use Symfony\Component\HttpFoundation\RequestStack;

class CarritoManager
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }


    public function añadirA_CarritoGafas(Gafas $gafas, int $cantidadGafas ): void
    {
        $session = $this->requestStack->getSession();
        $carrito = $session->get('carrito', []);
        $carrito[]=['producto'=>$gafas, 'cantidad'=>$cantidadGafas];
        $session->set('carrito', $carrito);
    }

    public function añadirA_CarritoLentillas(Lentillas $lentillas, int $cantidadLentillas ): void
    {
        $session = $this->requestStack->getSession();
        $carrito = $session->get('carrito', []);
        $carrito[]=['producto'=>$lentillas, 'cantidad'=>$cantidadLentillas];
        $session->set('carrito', $carrito);
    }
    
    public function eliminarDel_Carrito($id, $cat): void
    {
        $session = $this->requestStack->getSession();
        $carrito = $session->get('carrito');
        foreach($carrito as $index => $elemento){
            if($elemento['producto']->getId() == $id && $elemento['producto']->getCategoria()== $cat){
                unset($carrito[$index]);
                break;
            }
        }

        // Actualizar el carrito en la sesión
        $session->set('carrito', $carrito);
    }


}