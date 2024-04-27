<?php

declare(strict_types=1);

function dump($params)
{
    echo('
        <div style="
            display: inline-block;
            background: lightgray;
            border: 1px solid black;
            padding: 10px
        ">
        <pre>
    ');
    print_r($params);
    echo('</pre></div><br>');
}

?>
