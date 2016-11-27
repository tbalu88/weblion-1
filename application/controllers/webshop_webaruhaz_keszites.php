<?php

class Webshop_webaruhaz_keszites extends Controller {
	
    function index()
    {
        $title = '';
        $meta_title = '';
        $meta_description = '';

        $template = $this->loadView('webshop_webaruhaz_keszites');
        
        $template->set('title', $title);
        $template->set('meta_title', $meta_title);
        $template->set('meta_description', $meta_description);           

        $template->render();
    }
}