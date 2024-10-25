<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DetalleCompra extends \App\Entity\DetalleCompra implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'IdTransaccion' => [parent::class, 'IdTransaccion', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'fecha' => [parent::class, 'fecha', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'idCliente' => [parent::class, 'idCliente', null],
        "\0".parent::class."\0".'idUsuario' => [parent::class, 'idUsuario', null],
        "\0".parent::class."\0".'status' => [parent::class, 'status', null],
        "\0".parent::class."\0".'total' => [parent::class, 'total', null],
        'IdTransaccion' => [parent::class, 'IdTransaccion', null],
        'email' => [parent::class, 'email', null],
        'fecha' => [parent::class, 'fecha', null],
        'id' => [parent::class, 'id', null],
        'idCliente' => [parent::class, 'idCliente', null],
        'idUsuario' => [parent::class, 'idUsuario', null],
        'status' => [parent::class, 'status', null],
        'total' => [parent::class, 'total', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}