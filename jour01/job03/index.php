<?php

$a = 1945; // nombre entier en base décimale
$b = 02322; // le même en base octale, préfixé 0
$c = 0x4D2; // le même en base hexadécimale, préfixé 0x
$e= "toto"; // Variable string
$f = 10.5; // nombre à virgule flottante 
$g = true; // boolean
$h = false; // boolean

echo "

<table>
    <tbody>
        <tr>
            <th> Type </th>
            <th> Nom </th>
            <th> Valeur </th>
        </tr>

        <tr>
            <td> Primitifs </td>
            <td> Nombre entier </td>
            <td> $a </td>
        </tr>

        <tr>
            <td> Primitifs </td>
            <td>  Nombre en base octale </td>
            <td> $b </td>
        </tr>

        <tr>
            <td> Primitifs </td>
            <td> Nombre en base hexadécimale </td>
            <td> $c </td>
        </tr>

        <tr>
            <td> Primitifs </td>
            <td> Chaine de caractere </td>
            <td> $e </td>
        </tr>

        <tr>
            <td> Primitifs </td>
            <td> Nombre à virgule flottante </td>
            <td> $f </td>
        </tr>

        <tr>
            <td> Primitifs </td>
            <td> True </td>
            <td> $g </td>
        </tr>

        <tr>
            <td> Primitifs </td>
            <td> False</td>
            <td> $h </td>
        </tr>

    </tbody>
</table>

";

?>