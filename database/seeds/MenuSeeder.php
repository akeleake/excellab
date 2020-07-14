<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_menu')->truncate();
        
        DB::table('tb_menu')->insert([
            'is_admin' => 1,
            'judul_menu' => 'Dashboard',
            'link' => '#',
            'is_main_menu' => 0,
            'icon' => 'fas fa-fw fa-tachometer-alt'
        ]);
        DB::table('tb_menu')->insert([
            'is_admin' => 1,
            'judul_menu' => 'Dashboard',
            'link' => '#',
            'is_main_menu' => 1,
            'icon' => 'fas fa-fw fa-tachometer-alt'
        ]);
        DB::table('tb_menu')->insert([
            'is_admin' => 0,
            'judul_menu' => 'Dashboard',
            'link' => '#',
            'is_main_menu' => 1,
            'icon' => 'fas fa-fw fa-tachometer-alt'
        ]);
        DB::table('tb_menu')->insert([
            'is_admin' => 1,
            'judul_menu' => 'Data',
            'link' => '#',
            'is_main_menu' => 0,
            'icon' => ''
        ]);
        DB::table('tb_menu')->insert([
            'is_admin' => 1,
            'judul_menu' => 'Data Pegawai',
            'link' => '#',
            'is_main_menu' => 4,
            'icon' => 'fas fa-fw fa-folder'
        ]);
        DB::table('tb_menu')->insert([
            'is_admin' => 1,
            'judul_menu' => 'Data Project',
            'link' => '#',
            'is_main_menu' => 4,
            'icon' => 'fas fa-fw fa-folder'
        ]);
        DB::table('tb_menu')->insert([
            'is_admin' => 1,
            'judul_menu' => 'Data Client',
            'link' => '#',
            'is_main_menu' => 4,
            'icon' => 'fas fa-fw fa-folder'
        ]);
    }
}
