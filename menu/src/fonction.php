<?php
function cleanInput(string $data): string
{
    $firstClean = trim($data);
    $secondClean = ucfirst($firstClean);
    $thirdClean = htmlentities($secondClean);
    return $thirdClean;
}

?>