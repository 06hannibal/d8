<?php
 
namespace Drupal\accessdenied\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class DeniedController extends ControllerBase {
 
  public function access() {
    return [
      '#title' => $this->t('403 access denied! =('),
    ];
  }
 
}