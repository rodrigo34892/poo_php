<?php

class Carro
{
    private $modelo;
    private $combustivel;
    private $tanque;
    private $consumo;
    private $kmRodados;
    private $precoCombustivel;

    public function __construct($modelo, $combustivel, $tanque, $consumo, $kmRodados, $precoCombustivel)
    {
        $this->modelo = $modelo;
        $this->combustivel = $combustivel;
        $this->tanque = $tanque;
        $this->consumo = $consumo;
        $this->kmRodados = $kmRodados;
        $this->precoCombustivel = $precoCombustivel;
    }

    public function calcularAutonomia()
    {
        return $this->tanque * $this->consumo;
    }

    public function custoPorKm()
    {
        return $this->precoCombustivel / $this->consumo;
    }

    public function precisaRevisao()
    {
        return $this->kmRodados >= 10000 ? 'Sim' : 'Não';
    }

    public function detalhesCarro()
    {
        return [
            'modelo' => $this->modelo,
            'combustivel' => $this->combustivel,
            'autonomia' => $this->calcularAutonomia(),
            'custo_km' => $this->custoPorKm(),
            'revisao' => $this->precisaRevisao()
        ];
    }
}