<?php

namespace App\Service;

use App\Entity\DetalleCompra;
use App\Entity\DetallePedido;
use App\Entity\Gafas;
use App\Entity\Lentillas;
use App\Entity\Pedidos;
use App\Entity\User;
use App\Repository\DetalleCompraRepository;
use App\Repository\DetallePedidoRepository;
use App\Repository\PedidoRepository;
use App\Repository\GafasRepository;
use App\Repository\LentillasRepository;
use App\Repository\PedidosRepository;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\RequestStack;


class ComprasManager
{
  private $requestStack;
  private $detalleCompraRepository;
  private $detallePedidoRepository;
  private $pedidosRepository;
  private $gafasRepository;
  private $lentillasRepository;
 
  
  public function __construct(RequestStack $requestStack, DetalleCompraRepository $detalleCompraRepository, PedidosRepository $pedidosRepository, GafasRepository $gafasRepository, LentillasRepository $lentillasRepository, DetallePedidoRepository $detallePedidoRepository )//AÑADIR DETALLEPEDIDO
  {
    $this->requestStack= $requestStack;
    $this->detalleCompraRepository= $detalleCompraRepository;
    $this->detallePedidoRepository= $detallePedidoRepository;
    $this->pedidosRepository= $pedidosRepository;
    $this->gafasRepository=  $gafasRepository;
    $this->lentillasRepository= $lentillasRepository;
  
  }

  public function nuevaCompra(DetalleCompra $detallecompra, User $user): DetalleCompra
  {
    $t=18; //este es el indicador de compra
    $detallecompra = new DetalleCompra();
    $detallecompra->setIdUsuario($user);
    $detallecompra->setIdTransaccion($t);//CAMPO RECIBIDO
    $fecha = new \DateTime('@'.strtotime('now'));
    $detallecompra->setFecha($fecha);
    $detallecompra->setStatus('complete'); //CAMPO RECIBIDO
    $detallecompra->setEmail($user->getEmail());
    //$detallecompra->serIdCliente();CAMPO RECIBIDO
    $detallecompra->setTotal(100); //CAMPO RECIBIDO
    
    $this->detalleCompraRepository->save($detallecompra, true);

    $prueba=$this->detalleCompraRepository->findOneByIdTransaccion($t);
    return $prueba;
  }

  public function nuevoPedido(DetalleCompra $detalleCompra, Pedidos $pedido, User $user, $t):Pedidos
  {
    $detalleCompra= new DetalleCompra();
    $detalleCompra= $this->detalleCompraRepository->findOneByIdTransaccion($t);
    if($detalleCompra->getStatus()=='complete'){
       $pedido= new Pedidos();
       $pedido->setIdUsuarioPedidos($user);
       $pedido->setIdCompra($detalleCompra);
       $pedido->setDireccion($user->getDireccion());
       $pedido->setCiudad($user->getCiudad());
       $pedido->setCp($user->getCp());
       $pedido->setPrecio($detalleCompra->getTotal());
       $pedido->setIdTransaccion($detalleCompra->getIdTransaccion());
       $this->pedidosRepository->save($pedido, true);
    }
   
   

    return $pedido;
  }
  
  public function nuevoDetallePedido( Pedidos $pedido, DetallePedido $detallePedido, $t) :DetallePedido
  {
    
    //recuperamos Pedido
    $pedido= new Pedidos();
    $pedido= $this->pedidosRepository->findOneByIdTransaccion($t);
    //recuperamos carrito
    $session = $this->requestStack->getSession();
    $carrito= $session->get('carrito');
    $detallePedido= New DetallePedido();
    //creamos los detalles pedidos
    foreach($carrito as $elemento){
      $detallePedido= New DetallePedido();
      $detallePedido->setIdPedido($pedido->getId());
      $detallePedido->setIdProducto($elemento['producto']->getId());
      $detallePedido->setCategoriaProducto($elemento['producto']->getCategoria());
      $detallePedido->setCantidad($elemento['cantidad']);
      $detallePedido->setPrecio($elemento['producto']->getPrecio());
      $this->detallePedidoRepository->save($detallePedido, true);   
    
    }

    //vaciamos carrito
     $session->remove('carrito');
      return $detallePedido;
  }
 } 

