<?php

switch (getUrl()) {
    case '':
        require PAGE_DIR . '/home.php';
        break;
    case 'sunflowers':
    require PAGE_DIR . '/sunflowers.php';
        break;
    default:
        throw new Exception(getUrl() . ' - not found', 404);
}