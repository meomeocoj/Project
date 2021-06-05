<?php
class Template
{
    protected $template;

    protected $vars = array();

    public function __construct($template)
    {
        $this->template = $template;
    }
    //inaccessible properties
    public function __get($key)
    {
        return $this->vars[$key];
    }
    //inaccessible properties
    public function __set($key, $value)
    {
        $this->vars[$key] = $value;
    }

    public function __toString()
    {
        extract($this->vars); //extract into local symbol table [a=>1,b=>2,c=>3] ->> a = 1, ...
        //homepage/homePage.php
        $exploded_dir = explode('/', $this->template);
        
        //dirname return path of the parent's directory
        //chdir: specify a new directory
        chdir('view/' . $exploded_dir[0]);
        
        ob_start();
        //Project/view/homepage/
        include $exploded_dir[1];
        //$path = "templates/frontpage.php"; --> frontpage.php 
        return ob_get_clean();
    }
}
