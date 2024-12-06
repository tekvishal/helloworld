<?php
// No direct access
defined('_JEXEC') or die;

class plgContentHelloworld extends JPlugin
{
    public function onContentAfterTitle($context, &$article, &$params, $limitstart)
    {
        return "Hello World!";
    }
}
