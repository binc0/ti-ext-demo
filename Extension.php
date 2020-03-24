<?php namespace Binco\Demo;

use System\Classes\BaseExtension;

class Extension extends BaseExtension
{
    public function registerComponents()
    {
        return [
            'Binco\Demo\Components\Block' => [
                'code' => 'block',
                'name' => 'lang:binco.demo::default.text_component_title',
                'description' => 'lang:binco.demo::default.text_component_desc',
            ],
        ];
    }
}
