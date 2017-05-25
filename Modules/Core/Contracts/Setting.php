<?php 
namespace Modules\Core\Contracts;

interface Setting
{

    /**
     * Get the specified configuration value in the given language
     *
     * @param  string $key
     */
    public function get($key);

}
