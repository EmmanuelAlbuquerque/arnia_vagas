<?php

class VAGAS
{
    public $titulo;
    public $subTitulo;
    public $data;
    public $linguaguem1;
    public $linguaguem2;
    public $linguaguem3;
    public $salario;
    public $localizacao;
    public $tipoVaga;
    public $descricao;

    public function __construct($titulo, $subTitulo, $data, $linguaguem1, $linguaguem2, $linguaguem3, $salario, $localizacao, $tipoVaga, $descricao)
    {
        $this->titulo = $titulo;
        $this->subTitulo = $subTitulo;
        $this->data = $data;
        $this->linguaguem1 = $linguaguem1;
        $this->linguaguem2 = $linguaguem2;
        $this->linguaguem3 = $linguaguem3;
        $this->salario = $salario;
        $this->localizacao = $localizacao;
        $this->tipoVaga = $tipoVaga;
        $this->descricao = $descricao;
    }
}
// $VAGAS = new VAGAS("Desenvolvedor de Sistemas Pleno", "PHP", 2000, "SobraL", "Remoto", "Oferecemos um ambiente em que todos são protagonistas e agentes de transformação. Temos um excelente clima organizacional com pessoas engajadas em entregar os melhores resultados, assim como grandes oportunidades...");
// var_dump($VAGAS);
