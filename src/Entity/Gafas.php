<?php

namespace App\Entity;

use App\Repository\GafasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


#[ORM\Entity(repositoryClass: GafasRepository::class)]
#[Vich\Uploadable]
class Gafas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $marca = null;

    #[ORM\Column(length: 255)]
    private ?string $modelo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 255)]
    private ?string $tipo = null;

    #[ORM\Column]
    private ?int $aro = null;

    #[ORM\Column]
    private ?int $puente = null;

    #[ORM\Column]
    private ?int $talla = null;

    #[ORM\Column(nullable: true)]
    private ?int $varilla = null;

    #[ORM\Column(length: 255)]
    private ?string $colorMontura = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $colorLentes = null;

    #[ORM\Column(length: 255)]
    private ?string $materialMontura = null;

    #[ORM\Column(length: 255)]
    private ?string $tipoMontura = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 2)]
    private ?string $precio = null;

    #[ORM\Column]
    private ?int $iva = null;

    #[ORM\Column(nullable: true)]
    private ?int $descuento = null;

    #[ORM\Column]
    private ?int $stock = null;

    #[ORM\Column(nullable: true)]
    private ?int $destacado = null;

    
    //imagen1
    #[Vich\UploadableField(mapping: 'gafas', fileNameProperty: 'imageName', size: 'imageSize')]
    private ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

     //imagen2
     #[Vich\UploadableField(mapping: 'gafas', fileNameProperty: 'imageName2', size: 'imageSize2')]
     private ?File $imageFile2 = null;
 
     #[ORM\Column(nullable: true)]
     private ?string $imageName2 = null;
 
     #[ORM\Column(nullable: true)]
     private ?int $imageSize2 = null;
 
     #[ORM\Column(nullable: true)]
     private ?\DateTimeImmutable $updatedAt2 = null;

    //imagen3
    #[Vich\UploadableField(mapping: 'gafas', fileNameProperty: 'imageName3', size: 'imageSize3')]
    private ?File $imageFile3 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName3 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize3 = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt3 = null;

    #[ORM\Column]
    private ?int $categoria = null;
 
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): static
    {
        $this->marca = $marca;

        return $this;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): static
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): static
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getAro(): ?int
    {
        return $this->aro;
    }

    public function setAro(int $aro): static
    {
        $this->aro = $aro;

        return $this;
    }

    public function getPuente(): ?int
    {
        return $this->puente;
    }

    public function setPuente(int $puente): static
    {
        $this->puente = $puente;

        return $this;
    }

    public function getTalla(): ?int
    {
        return $this->talla;
    }

    public function setTalla(int $talla): static
    {
        $this->talla = $talla;

        return $this;
    }

    public function getVarilla(): ?int
    {
        return $this->varilla;
    }

    public function setVarilla(?int $varilla): static
    {
        $this->varilla = $varilla;

        return $this;
    }

    public function getColorMontura(): ?string
    {
        return $this->colorMontura;
    }

    public function setColorMontura(string $colorMontura): static
    {
        $this->colorMontura = $colorMontura;

        return $this;
    }

    public function getColorLentes(): ?string
    {
        return $this->colorLentes;
    }

    public function setColorLentes(?string $colorLentes): static
    {
        $this->colorLentes = $colorLentes;

        return $this;
    }

    public function getMaterialMontura(): ?string
    {
        return $this->materialMontura;
    }

    public function setMaterialMontura(string $materialMontura): static
    {
        $this->materialMontura = $materialMontura;

        return $this;
    }

    public function getTipoMontura(): ?string
    {
        return $this->tipoMontura;
    }

    public function setTipoMontura(string $tipoMontura): static
    {
        $this->tipoMontura = $tipoMontura;

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

    public function getIva(): ?int
    {
        return $this->iva;
    }

    public function setIva(int $iva): static
    {
        $this->iva = $iva;

        return $this;
    }

    public function getDescuento(): ?int
    {
        return $this->descuento;
    }

    public function setDescuento(?int $descuento): static
    {
        $this->descuento = $descuento;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getDestacado(): ?int
    {
        return $this->destacado;
    }

    public function setDestacado(?int $destacado): static
    {
        $this->destacado = $destacado;

        return $this;
    }


    //añadir imagenes
    //imagen1
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

     //imagen2
     public function setImageFile2(?File $imageFile2 = null): void
     {
         $this->imageFile2 = $imageFile2;
 
         if (null !== $imageFile2) {
             // It is required that at least one field changes if you are using doctrine
             // otherwise the event listeners won't be called and the file is lost
             $this->updatedAt = new \DateTimeImmutable();
         }
     }
 
     public function getImageFile2(): ?File
     {
         return $this->imageFile2;
     }
 
     public function setImageName2(?string $imageName2): void
     {
         $this->imageName2 = $imageName2;
     }
 
     public function getImageName2(): ?string
     {
         return $this->imageName2;
     }
 
     public function setImageSize2(?int $imageSize2): void
     {
         $this->imageSize2 = $imageSize2;
     }
 
     public function getImageSize2(): ?int
     {
         return $this->imageSize2;
     }

      //imagen3
      public function setImageFile3(?File $imageFile3 = null): void
      {
          $this->imageFile3 = $imageFile3;
  
          if (null !== $imageFile3) {
              // It is required that at least one field changes if you are using doctrine
              // otherwise the event listeners won't be called and the file is lost
              $this->updatedAt = new \DateTimeImmutable();
          }
      }
  
      public function getImageFile3(): ?File
      {
          return $this->imageFile3;
      }
  
      public function setImageName3(?string $imageName3): void
      {
          $this->imageName3 = $imageName3;
      }
  
      public function getImageName3(): ?string
      {
          return $this->imageName3;
      }
  
      public function setImageSize3(?int $imageSize3): void
      {
          $this->imageSize3 = $imageSize3;
      }
  
      public function getImageSize3(): ?int
      {
          return $this->imageSize3;
      }

      public function getCategoria(): ?int
      {
          return $this->categoria;
      }

      public function setCategoria(int $categoria): static
      {
          $this->categoria = $categoria;

          return $this;
      }

}
