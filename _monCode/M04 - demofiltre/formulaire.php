<?php
echo '<p><code>filter_var($_POST[\'nom\'], FILTER_SANITIZE_STRING)</code> -> ';
echo filter_var(htmlspecialchars($_POST['nom'])) . '<br>';
echo '<code>filter_var($_POST[\'nom\'], FILTER_SANITIZE_SPECIAL_CHARS)</code> -> ';
echo filter_var($_POST['nom'], FILTER_SANITIZE_SPECIAL_CHARS) . '<br>';
echo '<code>filter_input(INPUT_POST, \'nom\', FILTER_SANITIZE_STRING)</code> -> ';
echo filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING) . '</p>';

var_dump(filter_var_array($_POST['saisie'], FILTER_SANITIZE_STRING));
var_dump(filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING));
