<?php

namespace Daypag\Objects;

use Daypag\Enums\TipoCorreio;

class Correio
{
    public function __construct(private readonly TipoCorreio $tipoCorreio, private readonly float $valor)
    {
    }

    /**
     * @return TipoCorreio
     */
    public function getTipoCorreio(): TipoCorreio
    {
        return $this->tipoCorreio;
    }

    /**
     */
    public function getValor()
    {
        return $this->valor;
    }
}
