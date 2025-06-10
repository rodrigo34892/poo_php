<?php


class CalculadoraFinanceira
{
    private $valor;
    private $parcelas;
    private $taxaJuros;

    public function __construct($valor, $parcelas, $taxaJuros)
    {
        $this->valor = $valor;
        $this->parcelas = $parcelas;
        $this->taxaJuros = $taxaJuros;
    }

    public function valorParcela()
    {
        return $this->valor * pow(1 + $this->taxaJuros, $this->parcelas);
    }

    public function totalPagar()
    {
        return $this->valorParcela() * $this->parcelas;
    }

    public function jurosPagos()
    {
        return $this->totalPagar() - $this->valor;
    }

    public function detalhesFinanceiros()
    {
        return [
            'valor' => $this->valor,
            'parcelas' => $this->parcelas,
            'taxa_juros' => $this->taxaJuros,
            'valor_parcela' => $this->valorParcela(),
            'total_pagar' => $this->totalPagar(),
            'juros_pagos' => $this->jurosPagos()
        ];
    }
}