<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \App\Entity\Category implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'products' => [parent::class, 'products', null],
        "\0".'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType'."\0".'dataMapper' => ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'dataMapper', null],
        'dataMapper' => ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'dataMapper', null],
        'id' => [parent::class, 'id', null],
        'name' => [parent::class, 'name', null],
        'products' => [parent::class, 'products', null],
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
