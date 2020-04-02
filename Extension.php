<?php namespace Binco\Demo;

class Extension extends \System\Classes\BaseExtension
{
    public function extensionMeta()
    {
        return [
            'name' => 'Demo binco',
            'author' => 'The extension author name',
            'description' => 'The extension description',
            'icon' => 'fa-puzzle-piece',
            'version' => '0.0.1-beta3'
        ];
    }
    
    public function register()
    {
        
    }

    public function boot()
    {
        
    }
}
