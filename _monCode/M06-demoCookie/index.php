<?php

setcookie("nom_du_cookie","toto");


if (isset($_COOKIE['nom_du_cookie']))
    echo '<p><code>$_COOKIE[\'nom_du_cookie\'] = </code>' .	$_COOKIE['nom_du_cookie'] . '</p>';
else
    echo '<p>Pas de cookie "nom_du_cookie"</p>';

