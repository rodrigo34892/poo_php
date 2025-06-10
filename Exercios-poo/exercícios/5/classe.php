<?php


class Produto {
    private $nome;
    private $quantidade;
    private $valorUnitario;

    public function __construct($nome, $quantidade, $valorUnitario) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->valorUnitario = $valorUnitario;
    }

    public function entradaEstoque($qtd) {
        $this->quantidade += $qtd;
    }

    public function saidaEstoque($qtd) {
        if ($qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        }
        return false;
    }

    public function valorTotal() {
        return $this->quantidade * $this->valorUnitario;
    }

    public function detalhesProduto() {
        return [
            'nome' => $this->nome,
            'quantidade' => $this->quantidade,
            'valor_unitario' => $this->valorUnitario,
            'valor_total' => $this->valorTotal()
        ];
    }
}