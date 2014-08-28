<?php

namespace CupPainel;

class Module {

    public function getConfig() {
        return include(__DIR__ . '/config/main.php');
    }

}
