<?php
class Converter {}

interface CanConvert {
    public function convert(float $value);
}

class CryptoConverter extends Converter{
    // properties
    public string $currrencyCode;

    // constructor
    function __construct(string $currrencyCode)
    {
        $this->currrencyCode = $currrencyCode;
    }

    // methods
    public function convert(float $value) : float
    {

    }
}