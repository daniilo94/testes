<?php
/**
 * Created by PhpStorm.
 * User: danilo.silva
 * Date: 07/08/2017
 * Time: 16:48
 */

require_once "Pessoa.php";
require_once "Endereco.php";

class Control
{
    private $endereco;
    private $pessoa;

    function __construct()
    {
        $this->endereco = new Endereco("Brasília", 40, "S", 13);
        $this->pessoa = new Pessoa("João", 28, $this->endereco);
    }

    /**
     * @return Endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param Endereco $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return Pessoa
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * @param Pessoa $pessoa
     */
    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }



}