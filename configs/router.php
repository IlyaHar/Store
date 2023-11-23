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
    case 'soya':
        require PAGE_DIR . '/soya.php';
        break;
    case 'fertilizers':
        require PAGE_DIR . '/fertilizers.php';
        break;
    case 'herbicides':
        require PAGE_DIR . '/herbicides.php';
        break;
     case 'fungicides':
         require PAGE_DIR . '/fungicides.php';
         break;
    case 'insecticides':
        require PAGE_DIR . '/insecticides.php';
        break;
    case 'poisoners':
        require PAGE_DIR . '/poisoners.php';
        break;
    case 'adhesives':
        require PAGE_DIR . '/adhesives.php';
        break;
    case 'desiccants':
        require PAGE_DIR . '/desiccants.php';
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
    case 'soya1':
        require PAGE_DIR . '/soya1.php';
        break;
    case 'soya2':
        require PAGE_DIR . '/soya2.php';
        break;
    case 'ventura':
        require PAGE_DIR . '/ventura.php';
        break;
    case 'pristar':
        require PAGE_DIR . '/pristar.php';
        break;
    case 'pragmat':
        require PAGE_DIR . '/pragmat.php';
        break;
    case 'prospero':
        require PAGE_DIR . '/prospero.php';
        break;
    case 'spiner':
        require PAGE_DIR . '/spiner.php';
        break;
    case 'migel':
        require PAGE_DIR . '/migel.php';
        break;
    case 'youkatan':
        require PAGE_DIR . '/youkatan.php';
        break;
    case 'stiven':
        require PAGE_DIR . '/stiven.php';
        break;
    case 'aperol':
        require PAGE_DIR . '/aperol.php';
        break;
    case 'zidan':
        require PAGE_DIR . '/zidan.php';
        break;
    case 'tetris':
        require PAGE_DIR . '/tetris.php';
        break;
    case 'gamer':
        require PAGE_DIR . '/gamer.php';
        break;
    case 'kait':
        require PAGE_DIR . '/kait.php';
        break;
    case 'batman':
        require PAGE_DIR . '/batman.php';
        break;
    case 'alberto':
        require PAGE_DIR . '/alberto.php';
        break;
    case 'lainer':
        require PAGE_DIR . '/lainer.php';
        break;
    case 'median':
        require PAGE_DIR . '/median.php';
        break;
    case 'anders':
        require PAGE_DIR . '/anders.php';
        break;
    case 'luter':
        require PAGE_DIR . '/luter.php';
        break;
    case 'polkar':
        require PAGE_DIR . '/polkar.php';
        break;
    case 'forint':
        require PAGE_DIR . '/forint.php';
        break;
    case 'ekoflow':
        require PAGE_DIR . '/ekoflow.php';
        break;
    case 'toreto':
        require PAGE_DIR . '/toreto.php';
        break;
    case 'buleria':
        require PAGE_DIR . '/buleria.php';
        break;
    case 'geliantex':
        require PAGE_DIR . '/geliantex.php';
        break;
    case 'material':
        require PAGE_DIR . '/material.php';
        break;
    case 'aboutus':
        require PAGE_DIR . '/aboutus.php';
        break;
    case 'delivery':
        require PAGE_DIR . '/delivery.php';
        break;
    case 'payment':
        require PAGE_DIR . '/payment.php';
        break;




    default:
        throw new Exception(getUrl() . ' - not found', 404);
}

