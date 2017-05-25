<?php

use Illuminate\Database\Seeder;

class MetronicSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metronic_setting')->truncate();
        DB::table('metronic_setting')->insert([
            [
                'name'          => 'theme_color',
                'plain_value'   => 'default',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),

            ],
            [
                'name'          => 'theme_style',  
                'plain_value'   => 'components-rounded',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name'          => 'layout',  
                'plain_value'   => 'boxed',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name'          => 'header',  
                'plain_value'   => 'fixed',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name'          => 'top_dropdown',  
                'plain_value'   => 'light',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name'          => 'sidebar_mode',  
                'plain_value'   => 'default',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name'          => 'sidebar_style',  
                'plain_value'   => 'default',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name'          => 'sidebar_menu',  
                'plain_value'   => 'hover',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name'          => 'sidebar_position',  
                'plain_value'   => 'left',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name'          => 'footer',  
                'plain_value'   => 'default',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name'          => 'site_name',  
                'plain_value'   => 'Base',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]
        ]);
    }
}
