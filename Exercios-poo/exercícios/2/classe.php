<?php


class Aluno
{
    private $nome;
    private $disciplina;
    private $notas;

    public function __construct($nome, $disciplina, $notas)
    {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->notas = $notas;
    }

    public function calcularMedia()
    {
        return array_sum($this->notas) / count($this->notas);
    }

    public function obterStatus()
    {
        $media = $this->calcularMedia();
        if ($media >= 7) {
            return 'Aprovado';
        } elseif ($media >= 5) {
            return 'Em recuperação';
        } else {
            return 'Reprovado';
        }
    }

    public function detalhesAluno()
    {
        return [
            'nome' => $this->nome,
            'disciplina' => $this->disciplina,
            'notas' => $this->notas, // Adicionado para exibir as notas
            'media' => $this->calcularMedia(),
            'status' => $this->obterStatus()
        ];
    }
}