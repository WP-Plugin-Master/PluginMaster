<?php


namespace PluginMaster\Bootstrap\System\Providers;


use PluginMaster\Bootstrap\System\Helpers\App;
use PluginMaster\Contracts\Provider\ServiceProviderInterface;
use PluginMaster\Foundation\Action\ActionHandler;
use PluginMaster\Foundation\Shortcode\ShortcodeHandler;

class ActionServiceProvider implements ServiceProviderInterface
{

    protected $controllerNamespace = 'PluginMaster\\App\\Controllers\\Actions\\';

    public function boot() {
        $app = App::get();
        $app->get( ActionHandler::class )
            ->setAppInstance( $app )
            ->setControllerNamespace( $this->controllerNamespace )
            ->loadFile( $app->hooksPath( 'action.php' ) );
    }


}