<?php
class MainController extends \DraftMVC\DraftController
{
    public function index() {
        $this->view->test = 'true';
        $this->view->say = function($word) {
            return $word;
        };
        $this->view->test = $this->view->say('hello');
    }
}
