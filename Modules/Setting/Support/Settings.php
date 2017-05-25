<?php 
namespace Modules\Setting\Support;

use Modules\Core\Contracts\Setting;
use Modules\Setting\Repositories\SettingRepository;

class Settings implements Setting 
{
    /**
     * @var SettingRepository
     */
    private $setting;

    /**
     * @param SettingRepository $setting
     */
    public function __construct(SettingRepository $setting)
    {
        $this->setting = $setting;
    }

    public function get($name)
    {
        $defaultFromConfig = $this->getDefaultFromConfigFor($name);
        $metronic_setting = $this->setting->findByName($name);
        
        if (! $metronic_setting) {
            return $defaultFromConfig;
        }

        return empty($metronic_setting->plain_value) ? $defaultFromConfig : $metronic_setting->plain_value;
    }

    private function getDefaultFromConfigFor($name)
    {
        $defaultConfig = [
            'theme_color' => 'default',
            'theme_style' => 'component-rounded',
            'layout' => 'boxed',
            'header' => 'fixed',
            'top_dropdown' => 'light',
            'sidebar_mode' => 'default',
            'sidebar_style' => 'default',
            'sidebar_menu' => 'hover',
            'sidebar_position' => 'left',
            'footer' => 'default',
            'site_name' => 'Base'
        ];
        return $defaultConfig[$name];
    }

}
