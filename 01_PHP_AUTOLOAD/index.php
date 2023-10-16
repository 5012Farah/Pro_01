<?php

include_once 'autoload.php';

if (isset($_GET['page'])) {
	$page = strtolower($_GET['page']);

    switch ($page) {
        case "landing":
            IntroController::introCon();
          break;
        }
} else {
    Not_foundController::NotFound();
}
?>
