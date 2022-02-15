<?php

echo "hello";

print_r($argc);
echo "\n";
print_r($argv);
echo "\n";

if ($argv[1] == 'ciao') {
    echo "ciao anche a te, bellezza immensa!";
} else {
    echo "perché non mi saluti";
}

?>

