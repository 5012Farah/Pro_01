<?php

include_once 'autoload.php';

if (isset($_GET['page']) && !empty($_GET['page'])) {
  $page = strtolower($_GET['page']);

  switch ($page) {
    case "landing":
      IntroController::introCon();
      break;
  }
  switch ($page) {
    case "profile":
      ProfileController::user_profile();
      break;
  }
  switch ($page) {
    case "login":
      LogingController::loginCon();
      break;
  }
  switch ($page) {
    case "admin_page":
      Admin_pageController::admin_page();
      break;
  }
  switch ($page) {
    case "not_found":
      Not_foundController::NotFound();
      break;
  }
} else {
  IntroController::introCon();
}

// $pages = array('landing', 'profile');
// $page_not_found = !in_array($page, $pages);
// if ($pages == $page_not_found || $page == false) { 
// Not_foundController::NotFound();
// }
