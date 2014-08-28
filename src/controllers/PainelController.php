<?php

namespace CupPainel\Controllers;

use CupCake2\Core\CupApp;

class PainelController extends CupApp {

    public function control_home() {
        $this->renderizar('painel/home');
    }
  

}
