<?php

/**
 * Created by PhpStorm.
 * User: danilo.silva
 * Date: 07/08/2017
 * Time: 16:46
 */
class Pessoa
{
    private $nome;
    private $idade;
    private $endereco;

    function __construct($nome = null,$idade = null,$endereco = null)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }



}