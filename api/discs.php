<?php
  require_once '../data/dischi.php';

  header('Content-Type: application/json');
  echo json_encode($discs)
?>