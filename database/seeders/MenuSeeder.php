<?php

namespace Database\Seeders;

use App\Models\User;
use Dcat\Admin\Models\Menu;
use Dcat\Admin\Models\Permission;
use Dcat\Admin\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MenuSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Menu::truncate();
        Menu::insert([
            [
                'id'        => 100,
                'parent_id' => 0,
                'order'     => 1,
                'title'     => '控制台',
                'icon'      => 'fa-dashboard',
                'uri'       => '/',
            ],

            [
                'id'        => 200,
                'parent_id' => 0,
                'order'     => 2,
                'title'     => '文章管理',
                'icon'      => 'fa-users',
                'uri'       => '',
            ],
            [
                'id'        => 201,
                'parent_id' => 200,
                'order'     => 1,
                'title'     => '文章列表',
                'icon'      => '',
                'uri'       => 'posts',
            ],

            [
                'id'        => 300,
                'parent_id' => 0,
                'order'     => 3,
                'title'     => '用户管理',
                'icon'      => 'fa-users',
                'uri'       => '',
            ],
            [
                'id'        => 301,
                'parent_id' => 300,
                'order'     => 1,
                'title'     => '用户列表',
                'icon'      => '',
                'uri'       => 'users',
            ],


            [
                'id'        => 9500,
                'parent_id' => 0,
                'order'     => 95,
                'title'     => '系统设置',
                'icon'      => 'fa-gear',
                'uri'       => '',
            ],
            [
                'id'        => 9501,
                'parent_id' => 9500,
                'order'     => 1,
                'title'     => '管理员',
                'icon'      => '',
                'uri'       => 'auth/users',
            ],
            [
                'id'        => 9502,
                'parent_id' => 9500,
                'order'     => 2,
                'title'     => '角色',
                'icon'      => '',
                'uri'       => 'auth/roles',
            ],
            [
                'id'        => 9503,
                'parent_id' => 9500,
                'order'     => 3,
                'title'     => '权限',
                'icon'      => '',
                'uri'       => 'auth/permissions',
            ],
            [
                'id'        => 9504,
                'parent_id' => 9500,
                'order'     => 4,
                'title'     => '菜单',
                'icon'      => '',
                'uri'       => 'auth/menu',
            ],

        ]);
    }
}
