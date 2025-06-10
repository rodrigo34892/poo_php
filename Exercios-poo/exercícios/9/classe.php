<?php


class Pessoa
{
    private $nome;
    private $peso;
    private $altura;

    public function __construct($nome, $peso, $altura)
    {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC()
    {
        return $this->peso / ($this->altura * $this->altura);
    }

    public function classificarIMC()
    {
        $imc = $this->calcularIMC();
        if ($imc < 18.5) {
            return 'Abaixo do peso';
        } elseif ($imc < 25) {
            return 'Normal';
        } elseif ($imc < 30) {
            return 'Sobrepeso';
        } else {
            return 'Obesidade';
        }
    }

    public function detalhesPessoa()
    {
        return [
            'nome' => $this->nome,
            'peso' => $this->peso,
            'altura' => $this->altura,
            'imc' => $this->calcularIMC(),
            'classificacao' => $this->classificarIMC()
        ];
    }
}