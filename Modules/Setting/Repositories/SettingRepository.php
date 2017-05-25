<?php namespace Modules\Setting\Repositories;

use Modules\Core\Repositories\CoreRepository;

interface SettingRepository extends CoreRepository
{

    /**
     * Find a setting by its name
     * @param $settingName
     * @return mixed
     */
    public function findByName($settingName);

    /**
     * Find the given setting name for the given module
     * @param  string $settingName
     * @return mixed
     */
    public function get($settingName);

}
