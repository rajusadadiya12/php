<?php
// Core application
echo "Plugin System Initialized<br>";

function plugin1() {
    echo "Hello plugin 1<br>";
}
function plugin2() {
    echo "Hello plugin 2<br>";
}

// List of expected plugin functions
$pluginFunctions = ['plugin1', 'plugin2', 'plugin_unknown'];

foreach ($pluginFunctions as $func) {
    if (function_exists($func)) {
        echo "Executing $func:\n";
        $func(); // Call the plugin function
    } else {
        echo "Function $func does not exist. Skipping...\n";
    }
}
?>
