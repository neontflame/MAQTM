<?php
echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/Pacotes/" . $_GET['guid'] . ".mpi");
?>