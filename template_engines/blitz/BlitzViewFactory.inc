<?php

class BlitzViewFactory extends ViewFactory
{
    public function __construct($params = null)
    {
        $this->params = $params;

        parent::__construct('blitz');
    }

    public function createView($view)
    {
        if (!property_exists($this->params->views, $view))
        {
            throw new Exception('Cannot find Blitz configuration for view <em>' . $view . '</em>');
        }

        $class_name = $this->params->views->$view->class;
        $class_file = realpath(dirname(__FILE__) . '/views/' . $class_name . '.inc');
        $manager_file =  realpath('managers/' . $this->params->views->$view->manager . '.inc');

        require_once($class_file);
        require_once($manager_file);

        $blitzView = new $class_name($this->params->views->$view->template);

        return $blitzView;
    }
}

?>