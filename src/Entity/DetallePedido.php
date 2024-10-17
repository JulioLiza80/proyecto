<?php

namespace App\Entity;

use App\Repository\DetallePedidoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetallePedidoRepository::class)]
class DetallePedido
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $IdPedido = null;

    #[ORM\Column]
    private ?int $IdProducto = null;

    #[ORM\Column]
    private ?int $categoriaProducto = null;

    #[ORM\Column]
    private ?int $cantidad = null;

    #[ORM\Column]
    private ?int $Precio = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPedido(): ?int
    {
        return $this->IdPedido;
    }

    public function setIdPedido(int $IdPedido): static
    {
        $this->IdPedido = $IdPedido;

        return $this;
    }

    public function getIdProducto(): ?int
    {
        return $this->IdProducto;
    }

    public function setIdProducto(int $IdProducto): static
    {
        $this->IdProducto = $IdProducto;

        return $this;
    }

    public function getCategoriaProducto(): ?int
    {
        return $this->categoriaProducto;
    }

    public function setCategoriaProducto(int $categoriaProducto): static
    {
        $this->categoriaProducto = $categoriaProducto;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): static
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->Precio;
    }

    public function setPrecio(int $Precio): static
    {
        $this->Precio = $Precio;

        return $this;
    }
}
