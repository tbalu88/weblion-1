<?php

class Rolunk extends Controller {
	
    function index()
    {
        $title = '';
        $meta_title = '';
        $meta_description = '';

        $template = $this->loadView('rolunk_view');
        
        $template->set('title', $title);
        $template->set('meta_title', $meta_title);
        $template->set('meta_description', $meta_description);           

        $template->render();
    }
}