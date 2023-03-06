<?php

function checkData($data)
{
    $data = trim($data);
   
    $data = htmlspecialchars($data);
    return $data;
}
?>