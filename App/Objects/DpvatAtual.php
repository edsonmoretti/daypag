<?php

namespace App\Objects;

use App\Enums\TipoVeiculo;

class DpvatAtual
{
    private float $valor;
    private string $exercicio;
    private string $categoriaDpvat;
    private TipoVeiculo $tipoVeiculo;
    private string $dataVencimento;
    private string $dataVencimentoParcela1;
    private float $valorParcela1;
    private string $dataVencimentoParcela2;
    private float $valorParcela2;
    private string $dataVencimentoParcela3;
    private float $valorParcela3;
    private string $dataVencimentoParcela4;
    private float $valorParcela4;
    private string $dataVencimentoParcela5;
    private float $valorParcela5;
    private string $dataVencimentoParcela6;
    private float $valorParcela6;

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @param float $valor
     */
    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    /**
     * @return string
     */
    public function getExercicio(): string
    {
        return $this->exercicio;
    }

    /**
     * @param string $exercicio
     */
    public function setExercicio(string $exercicio): void
    {
        $this->exercicio = $exercicio;
    }

    /**
     * @return string
     */
    public function getCategoriaDpvat(): string
    {
        return $this->categoriaDpvat;
    }

    /**
     * @param string $categoriaDpvat
     */
    public function setCategoriaDpvat(string $categoriaDpvat): void
    {
        $this->categoriaDpvat = $categoriaDpvat;
    }

    /**
     * @return TipoVeiculo
     */
    public function getTipoVeiculo(): TipoVeiculo
    {
        return $this->tipoVeiculo;
    }

    /**
     * @param TipoVeiculo $tipoVeiculo
     */
    public function setTipoVeiculo(TipoVeiculo $tipoVeiculo): void
    {
        $this->tipoVeiculo = $tipoVeiculo;
    }

    /**
     * @return string
     */
    public function getDataVencimento(): string
    {
        return $this->dataVencimento;
    }

    /**
     * @param string $dataVencimento
     */
    public function setDataVencimento(string $dataVencimento): void
    {
        $this->dataVencimento = $dataVencimento;
    }

    /**
     * @return string
     */
    public function getDataVencimentoParcela1(): string
    {
        return $this->dataVencimentoParcela1;
    }

    /**
     * @param string $dataVencimentoParcela1
     */
    public function setDataVencimentoParcela1(string $dataVencimentoParcela1): void
    {
        $this->dataVencimentoParcela1 = $dataVencimentoParcela1;
    }

    /**
     * @return float
     */
    public function getValorParcela1(): float
    {
        return $this->valorParcela1;
    }

    /**
     * @param float $valorParcela1
     */
    public function setValorParcela1(float $valorParcela1): void
    {
        $this->valorParcela1 = $valorParcela1;
    }

    /**
     * @return string
     */
    public function getDataVencimentoParcela2(): string
    {
        return $this->dataVencimentoParcela2;
    }

    /**
     * @param string $dataVencimentoParcela2
     */
    public function setDataVencimentoParcela2(string $dataVencimentoParcela2): void
    {
        $this->dataVencimentoParcela2 = $dataVencimentoParcela2;
    }

    /**
     * @return float
     */
    public function getValorParcela2(): float
    {
        return $this->valorParcela2;
    }

    /**
     * @param float $valorParcela2
     */
    public function setValorParcela2(float $valorParcela2): void
    {
        $this->valorParcela2 = $valorParcela2;
    }

    /**
     * @return string
     */
    public function getDataVencimentoParcela3(): string
    {
        return $this->dataVencimentoParcela3;
    }

    /**
     * @param string $dataVencimentoParcela3
     */
    public function setDataVencimentoParcela3(string $dataVencimentoParcela3): void
    {
        $this->dataVencimentoParcela3 = $dataVencimentoParcela3;
    }

    /**
     * @return float
     */
    public function getValorParcela3(): float
    {
        return $this->valorParcela3;
    }

    /**
     * @param float $valorParcela3
     */
    public function setValorParcela3(float $valorParcela3): void
    {
        $this->valorParcela3 = $valorParcela3;
    }

    /**
     * @return string
     */
    public function getDataVencimentoParcela4(): string
    {
        return $this->dataVencimentoParcela4;
    }

    /**
     * @param string $dataVencimentoParcela4
     */
    public function setDataVencimentoParcela4(string $dataVencimentoParcela4): void
    {
        $this->dataVencimentoParcela4 = $dataVencimentoParcela4;
    }

    /**
     * @return float
     */
    public function getValorParcela4(): float
    {
        return $this->valorParcela4;
    }

    /**
     * @param float $valorParcela4
     */
    public function setValorParcela4(float $valorParcela4): void
    {
        $this->valorParcela4 = $valorParcela4;
    }

    /**
     * @return string
     */
    public function getDataVencimentoParcela5(): string
    {
        return $this->dataVencimentoParcela5;
    }

    /**
     * @param string $dataVencimentoParcela5
     */
    public function setDataVencimentoParcela5(string $dataVencimentoParcela5): void
    {
        $this->dataVencimentoParcela5 = $dataVencimentoParcela5;
    }

    /**
     * @return float
     */
    public function getValorParcela5(): float
    {
        return $this->valorParcela5;
    }

    /**
     * @param float $valorParcela5
     */
    public function setValorParcela5(float $valorParcela5): void
    {
        $this->valorParcela5 = $valorParcela5;
    }

    /**
     * @return float
     */
    public function getValorParcela6(): float
    {
        return $this->valorParcela6;
    }

    /**
     * @param float $valorParcela6
     */
    public function setValorParcela6(float $valorParcela6): void
    {
        $this->valorParcela6 = $valorParcela6;
    }

    /**
     * @return string
     */
    public function getDataVencimentoParcela6(): string
    {
        return $this->dataVencimentoParcela6;
    }

    /**
     * @param string $dataVencimentoParcela6
     */
    public function setDataVencimentoParcela6(string $dataVencimentoParcela6): void
    {
        $this->dataVencimentoParcela6 = $dataVencimentoParcela6;
    }


}
