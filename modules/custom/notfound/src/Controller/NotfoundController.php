<?php
 
namespace Drupal\notfound\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class NotfoundController extends ControllerBase {
 
  public function found() {
    return [
      '#title' => $this->t('404 Page Not Found! =('),
    ];
  }
 
}