<?php
namespace Gaugel\Controllers;

class IndexController extends BaseController
{
    public function indexAction()
    {
        $this->view->setVar('it_works', 'IT WORKS!');
    }
}
