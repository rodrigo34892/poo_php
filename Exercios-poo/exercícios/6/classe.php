<?php


class ConversorMoeda
{
    private $valor;
    private $moedaDestino;
    private $cotacao;

    public function __construct($valor, $moedaDestino, $cotacao)
    {
        $this->valor = $valor;
        $this->moedaDestino = $moedaDestino;
        $this->cotacao = $cotacao;
    }

    public function converter()
    {
        return $this->valor / $this->cotacao;
    }

    public function detalhesConversao()
    {
        return [
            'valor_reais' => $this->valor,
            'moeda_destino' => $this->moedaDestino,
            'cotacao' => $this->cotacao,
            'valor_convertido' => $this->converter()
        ];
    }
}