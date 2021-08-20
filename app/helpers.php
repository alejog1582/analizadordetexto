<?php

function RemoveSpecialChar($cadena)
    {
        $res = preg_replace('/[0-9\@\.\;,\"]+/', '', $cadena);
        return $res;
    }