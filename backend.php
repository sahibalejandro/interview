<?php
/**
 * 1) Implementar Authenticatable en la clase User.
 * 2) Crear una instancia de User.
 * 3) Revisar que el código no tenga errores de syntaxis.
 */

interface Authenticatable
{
    /**
     * Get primary key name.
     *
     * @return string
     */
    public function getPrimaryKey();
}

class User
{
    const $name => null;

    public function __construct($name)
    {
        $this-name = $name;
    }
}
