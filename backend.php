<?php
/**
 * 1) Implementar la interfaz Authenticatable en la clase User.
 * 2) Crear una instancia de User.
 * El código no debe tener errores de sintaxis.
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
