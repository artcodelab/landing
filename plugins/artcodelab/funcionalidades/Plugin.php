<?php namespace Artcodelab\Funcionalidades;

use Backend;
use System\Classes\PluginBase;

/**
 * Funcionalidades Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Funcionalidades',
            'description' => 'Envia correo del formulario de contacto',
            'author'      => 'Artcodelab',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Artcodelab\Funcionalidades\Components\Mail' => 'mail',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'artcodelab.funcionalidades.some_permission' => [
                'tab' => 'Funcionalidades',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'funcionalidades' => [
                'label'       => 'Funcionalidades',
                'url'         => Backend::url('artcodelab/funcionalidades/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['artcodelab.funcionalidades.*'],
                'order'       => 500,
            ],
        ];
    }
}
