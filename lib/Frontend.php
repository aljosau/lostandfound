<?php
/**
 * Consult documentation on http://agiletoolkit.org/learn 
 */
class Frontend extends ApiFrontend {
    function init(){
        parent::init();
        // Keep this if you are going to use database on all pages
        //$this->dbConnect();
        $this->requires('atk','4.2.0');
        $this->add('jUI');

 
        $this->add('Menu',null,'Menu')
            ->addMenuItem('index','Welcome')
            ->addMenuItem('examples','Bundled Examples')
            ->addMenuItem('how','Documentation')
            ->addMenuItem('dbtest','Database Test')
            ->addMenuItem('authtest','Auth test')
            ->addMenuItem('logout')
            ;

    }
}
