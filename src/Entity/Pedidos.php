<?php

namespace App\Entity;

use App\Repository\PedidosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PedidosRepository::class)]
class Pedidos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'pedidos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $idUsuarioPedidos = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?DetalleCompra $idCompra = null;

    #[ORM\Column(length: 255)]
    private ?string $direccion = null;

    #[ORM\Column(length: 255)]
    private ?string $ciudad = null;

    #[ORM\Column]
    private ?int $cp = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 2)]
    private ?string $precio = null;

    #[ORM\Column]
    private ?int $IdTransaccion = null;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUsuarioPedidos(): ?User
    {
        return $this->idUsuarioPedidos;
    }

    public function setIdUsuarioPedidos(?User $idUsuarioPedidos): static
    {
        $this->idUsuarioPedidos = $idUsuarioPedidos;

        return $this;
    }

    public function getIdCompra(): ?DetalleCompra
    {
        return $this->idCompra;
    }

    public function setIdCompra(?DetalleCompra $idCompra): static
    {
        $this->idCompra = $idCompra;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): static
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getCp(): ?int
    {
        return $this->cp;
    }

    public function setCp(int $cp): static
    {
        $this->cp = $cp;

        return $this;
    }

    public function getPrecio(): ?string
    {
        return $this->precio;
    }

    public function setPrecio(string $precio): static
    {
        $this->precio = $precio;

        return $this;
    }

    public function getIdTransaccion(): ?int
    {
        return $this->IdTransaccion;
    }

    public function setIdTransaccion(int $IdTransaccion): static
    {
        $this->IdTransaccion = $IdTransaccion;

        return $this;
    }

    

    

}
