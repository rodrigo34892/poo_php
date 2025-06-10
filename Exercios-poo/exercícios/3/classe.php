<?php

class Pedido {
    private $nomeProduto;
    private $quantidade;
    private $precoUnitario;
    private $tipoCliente;

    public function __construct($nomeProduto, $quantidade, $precoUnitario, $tipoCliente) {
        $this->nomeProduto = $nomeProduto;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
        $this->tipoCliente = $tipoCliente;
    }

    public function calcularTotalBruto() {
        return $this->quantidade * $this->precoUnitario;
    }

    public function calcularDesconto() {
        if ($this->tipoCliente === 'premium') {
            return $this->calcularTotalBruto() * 0.10; // 10% para premium
        }
        return 0;
    }

    public function calcularImposto() {
        return $this->calcularTotalBruto() * 0.08; // 8% de imposto
    }

    public function calcularTotalFinal() {
        return $this->calcularTotalBruto() - $this->calcularDesconto() + $this->calcularImposto();
    }

    public function detalhesPedido() {
        return [
            'nomeProduto' => $this->nomeProduto,
            'quantidade' => $this->quantidade,
            'precoUnitario' => $this->precoUnitario,
            'tipoCliente' => $this->tipoCliente,
            'totalBruto' => $this->calcularTotalBruto(),
            'desconto' => $this->calcularDesconto(),
            'imposto' => $this->calcularImposto(),
            'totalFinal' => $this->calcularTotalFinal(),
        ];
    }
}
    ?>