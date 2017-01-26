?>
<?php
$eFruits = new Enum("APPLE", "ORANGE", "PEACH");
echo $eFruits->APPLE . ",";
echo $eFruits->ORANGE . ",";
echo $eFruits->PEACH . "\n";

$eBeers = new DefinedEnum("GUINESS" => 25, "MIRROR_POND" => 49);
echo $eBeers->GUINESS . ",";
echo $eBeers->MIRROR_POND . "\n";

$eFlags = new FlagsEnum("HAS_ADMIN", "HAS_SUPER", "HAS_POWER", "HAS_GUEST");
echo $eFlags->HAS_ADMIN . ",";
echo $eFlags->HAS_SUPER . ",";
echo $eFlags->HAS_POWER . ",";
echo $eFlags->HAS_GUEST . "\n";
?>