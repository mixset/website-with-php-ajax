<?php

require_once 'core/Engine.php';
try {
    (new \Application\Engine())->loadSection();
} catch (Exception $e) {
    error_log($e->getMessage());
}
