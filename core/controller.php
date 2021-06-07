<?php

class Controller
{
    public function render($filename)
    {
        //detailpage/detailPage.php
        $template = new Template($filename . '.php');
        return $template;
    }
    private function secure_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    protected function secure_form($form)
    {
        foreach ($form as $key => $value) {
            $form[$key] = $this->secure_input($value);
        }
    }

}
