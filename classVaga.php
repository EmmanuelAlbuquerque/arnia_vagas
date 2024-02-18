<?php

class VAGAS
{
    public $titulo;
    public $subTitulo;
    public $data;
    public $linguaguem;
    public $salario;
    public $localizacao;
    public $tipoVaga;
    public $descricao;

    public function __construct($titulo, $subTitulo, $data, $linguaguem, $salario, $localizacao, $tipoVaga, $descricao)
    {
        $this->titulo = $titulo;
        $this->subTitulo = $subTitulo;
        $this->data = $data;
        $this->linguaguem = $linguaguem;
        $this->salario = $salario;
        $this->localizacao = $localizacao;
        $this->tipoVaga = $tipoVaga;
        $this->descricao = $descricao;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of linguaguem
     */
    public function getLinguaguem()
    {
        return $this->linguaguem;
    }

    /**
     * Set the value of linguaguem
     *
     * @return  self
     */
    public function setLinguaguem($linguaguem)
    {
        $this->linguaguem = $linguaguem;

        return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of localizacao
     */
    public function getLocalizacao()
    {
        return $this->localizacao;
    }

    /**
     * Set the value of localizacao
     *
     * @return  self
     */
    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;

        return $this;
    }

    /**
     * Get the value of tipoVaga
     */
    public function getTipoVaga()
    {
        return $this->tipoVaga;
    }

    /**
     * Set the value of tipoVaga
     *
     * @return  self
     */
    public function setTipoVaga($tipoVaga)
    {
        $this->tipoVaga = $tipoVaga;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
}
// $VAGAS = new VAGAS("Desenvolvedor de Sistemas Pleno", "PHP", 2000, "SobraL", "Remoto", "Oferecemos um ambiente em que todos são protagonistas e agentes de transformação. Temos um excelente clima organizacional com pessoas engajadas em entregar os melhores resultados, assim como grandes oportunidades...");
// var_dump($VAGAS);
