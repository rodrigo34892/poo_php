<?php
<?php

class Funcionario {
    private $nome;
    private $cargo;
    private $salario;
    private $cargaHorariaSemanal;

    public function __construct($nome, $cargo, $salario, $cargaHorariaSemanal) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->cargaHorariaSemanal = $cargaHorariaSemanal;
    }

    public function calcularValorHora() {
        return $this->salario / ($this->cargaHorariaSemanal * 4); // Considerando 4 semanas no mês
    }

    public function calcularSalarioComBonus($bonus) {
        return $this->salario + $bonus;
    }

    public function calcularHoraExtra($horasExtras) {
        return $this->calcularValorHora() * $horasExtras;
    }

    public function exibirDetalhes() {
        return "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: {$this->salario}, Carga Horária Semanal: {$this->cargaHorariaSemanal}";
    }
}