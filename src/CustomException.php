<?php


namespace App;


/**
 * Class CustomException
 * @package App
 */
class CustomException extends \Exception
{
    /**
     * @return string
     */
    public function errorMessage(): string
    {
        $errorMsg = 'Such reservation already exists';
        return $errorMsg;
    }
}