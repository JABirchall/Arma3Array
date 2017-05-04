<?php
require "Arma3Array.php";

$license = <<<LICENSE
"[[`license_civ_driver`,1],[`license_civ_boat`,0],[`license_civ_pilot`,1],[`license_civ_trucking`,0],[`license_civ_gun`,0],[`license_civ_dive`,0],[`license_civ_home`,0],[`license_civ_oil`,0],[`license_civ_diamond`,0],[`license_civ_salt`,0],[`license_civ_sand`,0],[`license_civ_iron`,0],[`license_civ_copper`,0],[`license_civ_cement`,0],[`license_civ_medmarijuana`,0],[`license_civ_cocaine`,0],[`license_civ_heroin`,0],[`license_civ_marijuana`,0],[`license_civ_ecstasy`,0],[`license_civ_rebel`,0],[`license_civ_adv_rebel`,0],[`license_civ_Oil_Prof`,0],[`license_civ_Iron_Prof`,0],[`license_civ_Copper_Prof`,0],[`license_civ_Heroin_Prof`,0],[`license_civ_Canabis_Prof`,0],[`license_civ_Cocain_Prof`,0],[`license_civ_Fruit_Prof`,0],[`license_civ_Diamond_Prof`,0],[`license_civ_Rock_Prof`,0],[`license_civ_Sand_Prof`,0]]"
LICENSE;

$arma3Array = new Arma3Array($license);

echo $arma3Array->license_civ_driver;

