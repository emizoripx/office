<?php

use EmizorIpx\OfficePhp74\Utils\FunctionUtils;

if(!function_exists('match_data')){
    function match_data($value, $options){
        return FunctionUtils::match_value($value, $options);
    }
}