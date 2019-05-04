<?php

/**
 * Class Controller
 */
class Controller
{
    /**
     * Initialize view object
     */
    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * Function get called before action get executed.
     */
    public function preDispatch()
    {

    }

    /**
     * Function get called after action get executed.
     *
     * @param array $params
     * @throws Exception
     */
    public function postDispatch(array $params)
    {
        $this->view->render($params);
    }
}