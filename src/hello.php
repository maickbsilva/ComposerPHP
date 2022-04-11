<?php

namespace Maickbsilva\CursoComposer;

//nome da classe sempre o nome do arquivo
class Hello{
    public function say(string $name){
        return sprintf("Hello %s", $name);
    }

}