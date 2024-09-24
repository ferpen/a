<?php
class Produto {
    public $nome;
    public $descricao;
    public $valor;
    public $imagem;

    public function __construct($nome, $descricao, $valor, $imagem) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $valor = (float) $valor; // "5.3" -> 5.3
        $this->valor = $valor;
        $this->imagem = $imagem;
    }

    public function exibirInformacoes() {
        echo '
        <div class="card" style="width: 18rem;">
            <img src="' . $this->imagem . '" class="card-img-top" alt="' . $this->nome . '" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">' . $this->nome . '</h5>
                <p class="card-text">' . $this->descricao . '</p>
                <p class="card-text"><strong>Valor: R$' . number_format($this->valor, 2, ',', '.') . '</strong></p>
            </div>
        </div>';
    }
}
?>
