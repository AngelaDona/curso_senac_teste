<?php

class Pessoa{


    private string $nome;
    private DateTimeImmutable $dataNascimento;
    private float $altura;

    public function __construct(string $nome, DateTimeImmutable $dataNascimento, float $altura)
    {
        $this -> nome = $nome;
        $this -> dataNascimento = $dataNascimento;
        $this -> altura = $altura;
    }

    public function nome()
    {
        return $this -> nome;
    }

    public function VerificaNome($nome): bool
    {
        if (is_string($nome)){
            return true;
        }else {
            return false;
        }
    }

    public function idade()
    {
        $hoje = new DateTimeImmutable();
        $diferenca = $this -> dataNascimento-> diff($hoje);

        return $diferenca->y;
    }

    public function retornoAltura()
    {
        return $this ->altura;
    }
}

