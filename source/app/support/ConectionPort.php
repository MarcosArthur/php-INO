<?php

namespace Source\app\support;

use Exception;

class ConectionPort
{

    private $porthandle;  

    public function init()
    {
        try {
            $this->porthandle = fopen(getenv('PORT'), "w+");
            if ($this->porthandle) {
                throw new Exception("FAIL OPEN PORT");
            }

        } catch (Exception $error) {
            echo "FAIL OPEN PORT";
            exit();
        }
    }

    public function process($state) : bool
    {
        try {
            fwrite($this->porthandle, $state);
            $this->finish();
            return true;
        } catch (Exception $error) {
            echo "FAIL PROCESS WRITE PORT";
            exit();
            
        }
    }

    private function finish()
    {
        fclose($this->porthandle);
    }
}
