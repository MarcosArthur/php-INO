<?php

namespace Source\app\support;

use Exception;

class ConnectionPort
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
           throw $error;
        }
    }

    public function process($state)
    {
        try {
            fwrite($this->porthandle, $state);
            $this->finish();
            return true;
        } catch (Exception $error) {
            throw $error;
        }
    }
    
    private function finish()
    {
        fclose($this->porthandle);
    }
}
