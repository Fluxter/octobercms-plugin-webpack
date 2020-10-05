<?php

namespace Fluxter\Webpack;

use Fluxter\OctoberCMS\Plugin\Webpack\Classes\WebpackCore;
use Fluxter\OctoberCMS\Plugin\Webpack\Components\WebpackScripts;
use Fluxter\OctoberCMS\Plugin\Webpack\Components\WebpackStyles;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            "name" => "Webpack",
            "description" => "loads webpack styles and scripts for your theme.",
            "author" => "Marcel Kallen, Fluxter",
        ];
    }
    
    public function registerMarkupTags()
    {
        return [
            "functions" => [
                "webpack_styles" => [$this, "webpackStyles"]
            ]
        ];
    }

    public function webpackStyles(string $entrypoint = "app")
    {
        $webpack = new WebpackCore($this->getP);
        return "Hello world";
    }

    public function registerComponents()
    {
        return [
            WebpackStyles::class => "webpackStyles",
            WebpackScripts::class => "webpackScripts"
        ];
    }
}
