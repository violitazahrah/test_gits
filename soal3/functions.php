<?php
function checkBalancedBracket($brackets)
{
    $stack = [];
    $opening = ['(', '{', '['];
    $closing = [')', '}', ']'];

    for ($i = 0; $i < strlen($brackets); $i++) {
        $char = $brackets[$i];

        if (in_array($char, $opening)) {
            array_push($stack, $char);
        } elseif (in_array($char, $closing)) {
            $last = array_pop($stack);
            $matching_opening = $opening[array_search($char, $closing)];

            if ($last != $matching_opening) {
                return "NO";
            }
        }
    }

    return (count($stack) === 0) ? "YES" : "NO";
}
?>
