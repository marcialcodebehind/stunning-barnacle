<?php 
namespace Modules\Setting\Repositories\Eloquent;

use Illuminate\Support\Facades\Config;
use Modules\Core\Repositories\Eloquent\EloquentCoreRepository;
use Modules\Setting\Repositories\SettingRepository;

class EloquentSettingRepository extends EloquentCoreRepository implements SettingRepository
{
   
    /**
     * Find a setting by its name
     * @param $settingName
     * @return mixed
     */
    public function findByName($settingName)
    {
        return $this->model->where('name', $settingName)->first();
    }

    /**
     * Find the given setting name for the given module
     * @param  string $settingName
     * @return mixed
     */
    public function get($settingName)
    {
        return $this->model->where('name', 'LIKE', "{$settingName}")->first();
    }
}
