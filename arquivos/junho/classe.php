<?php
// Murilo Ramalho da Mata
class curso {
    var $codigo;
    var $nome;
    var $cargaHoraria;
    var $valor;

    function cadastrar($_codigo,$_nome,$_cargaHoraria,$_valor) {
        $this->codigo = $_codigo;
        $this->nome = $_nome;
        $this->cargaHoraria = $_cargaHoraria;
        $this->valor = $_valor;
    }
    function mostrarC() {
        echo "curso \n";
        echo "codigo: ". $this->codigo."\n";
        echo "nome: ". $this->nome."\n";
        echo "carga horaria: ". $this->cargaHoraria."\n";
        echo "valor: R$". $this->valor."\n";
    }
};

$Al1 = new curso;

$Al1-> cadastrar(222,"desenho",50,250);
$Al1-> mostrarC();

?>