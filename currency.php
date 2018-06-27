<?php
function convertCurrency($from_currency,$to_currency)
{
    $from_Currency = urlencode($from_currency);
    $to_Currency = urlencode($to_currency);
    $query =  "{$from_Currency}_{$to_Currency}";
    
    $json = file_get_contents("https://free.currencyconverterapi.com/api/v5/convert?q=".$query."&compact=y");
    $obj = json_decode($json, true);

    $val = $obj["$query"];
    return number_format($val['val'], 2, '.', '');
}

//uncomment to test
echo "<br/>USD TO USD => ".convertCurrency('USD', 'USD');
echo "<br/>USD TO AUD => ".convertCurrency('USD', 'AUD');
echo "<br/>USD TO BRL => ".convertCurrency('USD', 'BRL');
echo "<br/>USD TO CAD => ".convertCurrency('USD', 'CAD');
echo "<br/>USD TO CNY => ".convertCurrency('USD', 'CNY');
echo "<br/>USD TO EUR => ".convertCurrency('USD', 'EUR');
echo "<br/>USD TO GBP => ".convertCurrency('USD', 'GBP');
echo "<br/>USD TO INR => ".convertCurrency('USD', 'INR');
echo "<br/>USD TO JPY => ".convertCurrency('USD', 'JPY');
echo "<br/>USD TO RUB => ".convertCurrency('USD', 'RUB');
echo "<br/>USD TO ZAR => ".convertCurrency('USD', 'ZAR');


?>