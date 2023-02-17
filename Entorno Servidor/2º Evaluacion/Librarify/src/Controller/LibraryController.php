<?php

namespace App\Controller;

use Synfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Synfony\Component\HtttpFoundation\Response;
use Synfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController {

    /**
     * 
     * @Route ("/library/list", name="library_list")
     *
     * 
     */

    public function list() {
        $response = new Response();
        $response->setContent('<div>Hola Mundo</div>');
        
        return $response;
    }
}