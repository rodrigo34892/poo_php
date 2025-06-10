<?php


class Viagem
{
    private $origem;
    private $destino;
    private $distancia;
    private $tempo;
    private $consumo;
    private $precoCombustivel;

    public function __construct($origem, $destino, $distancia, $tempo, $consumo, $precoCombustivel)
    {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->distancia = $distancia;
        $this->tempo = $tempo;
        $this->consumo = $consumo;
        $this->precoCombustivel = $precoCombustivel;
    }

    public function velocidadeMedia()
    {
        return $this->distancia / $this->tempo;
    }

    public function consumoEstimado()
    {
        return $this->distancia / $this->consumo;
    }

    public function custoViagem()
    {
        return $this->consumoEstimado() * $this->precoCombustivel;
    }

    public function detalhesViagem()
    {
        return [
            'origem' => $this->origem,
            'destino' => $this->destino,
            'velocidade_media' => $this->velocidadeMedia(),
            'consumo_estimado' => $this->consumoEstimado(),
            'custo_viagem' => $this->custoViagem()
        ];
    }
}