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
    public function convert(float $value=1) : float|bool
    {
        $code = $this->currrencyCode;
        $url = "https://cex.io/api/ticker/$code/USD";
        $json = file_get_contents($url);
        if($json!==false){
            $data = json_decode($json);
            $last = $data->last;
            return $value * $last ;
        }else{
            return false;
        }
    }
}