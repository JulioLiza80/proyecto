<?php

namespace App\Controller;

use App\Entity\DetalleCompra;
use App\Entity\DetallePedido;
use App\Entity\Gafas;
use App\Entity\Lentillas;
use App\Entity\Pedidos;
use App\Service\ComprasManager;
use SebastianBergmann\Template\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CompraController extends AbstractController
{
    #[Route('/compra', name: 'app_compra', methods: ['POST', 'GET'])]
    public function crearCompra(RequestStack $request, ComprasManager $comprasManager, MailerInterface $mailer): Response
    { 
  
      //if(status == 'completed){
      
      $session = $request->getSession();
    
    
         //creació de detalles compra
          $compra=$comprasManager->nuevaCompra(new DetalleCompra(),$this->getUser());
         

        //creación de pedido
          $pedido=$comprasManager->nuevoPedido($compra, new Pedidos(), $this->getUser(),$compra->getIdTransaccion());
         

         //creacion de correos
         $email = (new TemplatedEmail())
         ->from(new Address('opticanovaproyecto@gmail.com', 'Optica Nova'))
          ->to((string) $this->getUser()->getUserIdentifier())
         ->subject('Pedido' . $pedido->getId() . ', Optica Nova')
         ->htmlTemplate('correoCompra/email.html.twig')
         ->context([
          'carrito' => $session->get('carrito'),
          ]);
  

         $mailer->send($email);

        //creacion de detallePedido
         $detallePedido= $comprasManager->nuevoDetallePedido($pedido, new DetallePedido(),$pedido->getIdTransaccion());
        
       
         dd($session->get('carrito'));

        
        //}

      
    }
}
