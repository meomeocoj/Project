<?php
class Template
{
    protected $template;

    protected $vars = array();

    public function __construct($template)
    {
        $this->template = $template;
    }
    public function __get($key)
    {
        return $this->vars[$key];
    }
    public function __set($key, $value)
    {
        $this->vars[$key] = $value;
    }

    public function __toString()
    {
        extract($this->vars); //extract into local symbol table [a=>1,b=>2,c=>3] ->> a = 1, ...
        //how to move to another directory
        //from the current level to this dir
        chdir(dirname($this->template)); //  templates/frontpage.php --? chdir(templates)
        
        //dirname return path of the parent's directory
        //chdir: specify a new directory
        ob_start();

        include basename($this->template);
        //$path = "templates/frontpage.php"; --> frontpage.php

        return ob_get_clean();
    }
}
