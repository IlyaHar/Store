<?php

switch (getUrl()) {
    case '':
        require PAGE_DIR . '/home.php';
        break;
    case 'sunflowers':
    require PAGE_DIR . '/sunflowers.php';
        break;
    case 'corn':
        require PAGE_DIR . '/corn.php';
        break;
    case 'fertilizers':
        require PAGE_DIR . '/fertilizers.php';
        break;
    case 'herbicides':
        require PAGE_DIR . '/herbicides.php';
        break;
    case 'syngenta':
        require PAGE_DIR . '/syngenta.php';
        break;
    case 'rekold':
        require PAGE_DIR . '/rekold.php';
        break;
    case 'aldazor':
        require PAGE_DIR . '/aldazor.php';
        break;
    case 'aldazorst':
        require PAGE_DIR . '/aldazorst.php';
        break;
    case 'impulse':
        require PAGE_DIR . '/impulse.php';
        break;
    case 'impulsest':
        require PAGE_DIR . '/impulsest.php';
        break;
    case 'volodimir':
        require PAGE_DIR . '/volodimir.php';
        break;
    case 'castelo':
        require PAGE_DIR . '/castelo.php';
        break;
    case 'bomond':
        require PAGE_DIR . '/bomond.php';
        break;
    case 'rivas':
        require PAGE_DIR . '/rivas.php';
        break;
    case 'banano':
        require PAGE_DIR . '/banano.php';
        break;
    case 'varum':
        require PAGE_DIR . '/varum.php';
        break;
    case 'hotin':
        require PAGE_DIR . '/hotin.php';
        break;
    case 'creative':
        require PAGE_DIR . '/creative.php';
        break;
    case 'material':
        require PAGE_DIR . '/material.php';
        break;




    default:
        throw new Exception(getUrl() . ' - not found', 404);
}

