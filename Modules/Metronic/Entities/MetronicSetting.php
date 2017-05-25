<?php namespace Modules\Metronic\Entities;

use Illuminate\Database\Eloquent\Model;

class MetronicSetting extends Model
{
    protected $table = 'metronic_setting';
    protected $fillable 	= [
    	'name',
		'plain_value'
    ];

    static public function themeColor($key = null)
    {
        $values = [
            'default' 	=> 'Default',
            'grey' 		=> 'Grey',
            'blue' 		=> 'Blue',
            'dark' 		=> 'Dark',
            'light' 	=> 'Light'
        ];

        return ($key) ? $values[$key] : $values;
    }

    static public function themeStyle($key = null)
    {
        $values = [
            'components-md' 		=> 'Default',
            'components' 			=> 'Square Corners',
            'components-rounded' 	=> 'Rounded Corners'
        ];

        return ($key) ? $values[$key] : $values;
    }

    static public function themeLayout($key = null)
    {
        $values = [
            'boxed' 		=> 'Boxed',
            'fluid' 		=> 'Fluid'
        ];

        return ($key) ? $values[$key] : $values;
    }

    static public function themeHeader($key = null)
    {
        $values = [
            'default' 		=> 'Default',
            'fixed' 		=> 'Fixed'
        ];

        return ($key) ? $values[$key] : $values;
    }
}
