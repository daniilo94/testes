<?php

/**
 * Created by PhpStorm.
 * User: danilo.silva
 * Date: 07/08/2017
 * Time: 16:47
 */
class Endereco
{
    private $cidade;
    private $quadra;
    private $conjunto;
    private $casa;

    function __construct($cidade,$quadra,$conjunto,$casa)
    {
        $this->cidade = $cidade;
        $this->quadra = $quadra;
        $this->conjunto =$conjunto;
        $this->casa = $casa;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getQuadra()
    {
        return $this->quadra;
    }

    /**
     * @param mixed $quadra
     */
    public function setQuadra($quadra)
    {
        $this->quadra = $quadra;
    }

    /**
     * @return mixed
     */
    public function getConjunto()
    {
        return $this->conjunto;
    }

    /**
     * @param mixed $conjunto
     */
    public function setConjunto($conjunto)
    {
        $this->conjunto = $conjunto;
    }

    /**
     * @return mixed
     */
    public function getCasa()
    {
        return $this->casa;
    }

    /**
     * @param mixed $casa
     */
    public function setCasa($casa)
    {
        $this->casa = $casa;
    }



}