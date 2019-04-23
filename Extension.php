<?php namespace Igniter\Drivers;

use System\Classes\BaseExtension;

/**
 * Debugbar Extension Information File
 */
class Extension extends BaseExtension
{
    /**
     * Returns information about this extension.
     *
     * @return array
     */
    public function extensionMeta()
    {
        return [
            'name' => 'Drivers',
            'author' => 'Igniter',
            'description' => 'Drivers.',
            'icon' => 'fa-bug',
            'version' => '1.0.0',
        ];
    }

    /**
     * Register method, called when the extension is first registered.
     *
     * @return void
     */
    public function register()
    {
    }
}
