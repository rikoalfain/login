<?php

  class laptop 
  {
    var $pemilik;
    var $merk;
    var $ukuran_layar;
  
   function hidupkan_laptop() 
   {
     return "Hidupkan Laptop";
    }
   function matikan_laptop() 
   {
     return "Matikan Laptop";
   }
  }
  
  $laptop_Rizky = new laptop();
  $laptop_Rizky->pemilik="Rizky";
  $laptop_Rizky->merk="Asus";
  $laptop_Rizky->ukuran_layar="15 inchi";
  
  echo $laptop_Rizky->pemilik;
  echo "<br />";
  echo $laptop_Rizky->merk;
  echo "<br />";
  echo $laptop_Rizky->ukuran_layar;
  echo "<br />";
  
  echo $laptop_Rizky->hidupkan_laptop();
  echo "<br />";
  echo $laptop_Rizky->matikan_laptop();
?>