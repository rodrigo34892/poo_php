<?php


class ReservaHotel
{
    private $nomeHospede;
    private $noites;
    private $tipoQuarto;

    public function __construct($nomeHospede, $noites, $tipoQuarto)
    {
        $this->nomeHospede = $nomeHospede;
        $this->noites = $noites;
        $this->tipoQuarto = $tipoQuarto;
    }

    public function precoNoite()
    {
        switch ($this->tipoQuarto) {
            case 'luxo':
                return 200;
            case 'suite':
                return 350;
            default:
                return 120;
        }
    }

    public function calcularTotal()
    {
        $total = $this->noites * $this->precoNoite();
        if ($this->noites > 5) {
            $total *= 0.9; // 10% de desconto
        }
        return $total;
    }

    public function mensagemBoasVindas()
    {
        return "Bem-vindo(a), {$this->nomeHospede}!";
    }

    public function detalhesReserva()
    {
        return [
            'nome' => $this->nomeHospede,
            'noites' => $this->noites,
            'tipo_quarto' => $this->tipoQuarto,
            'preco_noite' => $this->precoNoite(),
            'total' => $this->calcularTotal(),
            'mensagem' => $this->mensagemBoasVindas()
        ];
    }
}