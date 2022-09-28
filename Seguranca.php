<?php

class Seguranca{

    public function permiteEntrada(Pessoa $pessoa,  int $idadeMinima, float $alturaPessoa): bool  
    {

        if(Pessoa->idade()>=$idadeMinima && Pessoa->alturaPessoa()>=$alturaMinima){
            return true;

        }
        else{ 
            return false;
        }
    }

}