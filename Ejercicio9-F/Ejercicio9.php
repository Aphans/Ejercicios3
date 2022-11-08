<?php
$ciudades = array (
    array("nombre"=>"Madrid",
          "habitantes"=>5000),
    array("nombre":"Barcelona",
          "habitantes":15),
  );
  usort($ciudades, 'sort_by_orden');
  function sort_by_orden ($a, $b) {
      return $a['habitantes'] - $b['habitantes'];
  }
  echo $ciudades;
}
?>