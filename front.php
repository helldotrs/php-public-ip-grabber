<?php
if !(isset($_GET['id']))
  die;
$input = $_GET['id'];
$input = escape_characters($input);
$input = remove_non_alphabetics_except_underscore($input); //this function name lmao
$input_list = explode("_", $input);

if (count($input_list) != 3) {
    die();
}

print_r($input_list);

// Function to escape characters
function escape_characters($input) {
    // Implement escape logic (for example, using htmlspecialchars)
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

// Function to remove non-alphabetical characters except underscore
function remove_non_alphabetics_except_underscore($input) {
    // Implement removal logic (for example, using a regular expression)
    return preg_replace("/[^a-zA-Z_]/", "", $input);
}
?>
