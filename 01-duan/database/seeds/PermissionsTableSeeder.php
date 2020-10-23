<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => "Danh mục sản phẩm",
            'display_name'=> "Danh sách danh mục",
            'parent_id' => "0",
            'key_code' => "category",
        ]);
        Permission::create([
            'name' => "Danh sách danh mục",
            'display_name'=> "Danh sách danh mục",
            'parent_id' => "1",
            'key_code' => "category_list",

        ]);
        Permission::create([
            'name' => "Thêm danh mục",
            'display_name'=> "Thêm danh mục",
            'parent_id' => "1",
            'key_code' => "category_add",

        ]);
        Permission::create([
            'name' => "sửa danh mục",
            'display_name'=> "sửa danh mục",
            'parent_id' => "1",
            'key_code' => "category_edit",

        ]);
        Permission::create([
            'name' => "Xóa danh mục",
            'display_name'=> "Xóa danh mục",
            'parent_id' => "1",
            'key_code' => "category_delete",
        ]);
        Permission::create([
            'name' => "Menu",
            'display_name'=> "Menu",
            'parent_id' => "0",
            'key_code' => "menu",

        ]);
        Permission::create([
            'name' => "Danh sách Menu",
            'display_name'=> "Danh sách Menu",
            'parent_id' => "6",
            'key_code' => "menu_list",

        ]);
        Permission::create([
            'name' => "Thêm Menu",
            'display_name'=> "Thêm Menu",
            'parent_id' => "6",
            'key_code' => "menu_add",

        ]);
        Permission::create([
            'name' => "sửa Menu",
            'display_name'=> "Sửa Menu",
            'parent_id' => "6",
            'key_code' => "menu_edit",

        ]);
        Permission::create([
            'name' => "Xóa Menu",
            'display_name'=> "Xóa Menu",
            'parent_id' => "6",
            'key_code' => "menu_delete",

        ]);
        Permission::create([
            'name' => "Slider",
            'display_name'=> "Slider",
            'parent_id' => "0",
            'key_code' => "slider",

        ]);
        Permission::create([
            'name' => "Danh sách Slider",
            'display_name'=> "Danh sách Slider",
            'parent_id' => "11",
            'key_code' => "slider_list",

        ]);
        Permission::create([
            'name' => "Thêm Slider",
            'display_name'=> "Thêm Slider",
            'parent_id' => "11",
            'key_code' => "slider_add",

        ]);
        Permission::create([
            'name' => "sửa Slider",
            'display_name'=> "Sửa Slider",
            'parent_id' => "11",
            'key_code' => "slider_edit",

        ]);
        Permission::create([
            'name' => "Xóa Slider",
            'display_name'=> "Xóa Slider",
            'parent_id' => "11",
            'key_code' => "slider_delete",

        ]);

        Permission::create([
            'name' => "Sản phẩm",
            'display_name'=> "Sản phẩm",
            'parent_id' => "0",
            'key_code' => "product",

        ]);
        Permission::create([
            'name' => "Danh sách sản phẩm",
            'display_name'=> "Danh sách sản phẩm",
            'parent_id' => "16",
            'key_code' => "product_list",

        ]);
        Permission::create([
            'name' => "Thêm sản phẩm",
            'display_name'=> "Thêm sản phẩm",
            'parent_id' => "16",
            'key_code' => "product_add",

        ]);
        Permission::create([
            'name' => "sửa sản phẩm",
            'display_name'=> "Sửa sản phẩm",
            'parent_id' => "16",
            'key_code' => "product_edit",

        ]);
        Permission::create([
            'name' => "Xóa sản phẩm",
            'display_name'=> "Xóa sản phẩm",
            'parent_id' => "16",
            'key_code' => "product_delete",

        ]);


        Permission::create([
            'name' => "Setting",
            'display_name'=> "Setting",
            'parent_id' => "0",
            'key_code' => "setting",

            
        ]);
        Permission::create([
            'name' => "Danh sách Setting",
            'display_name'=> "Danh sách Setting",
            'parent_id' => "21",
            'key_code' => "setting_list",

        ]);
        Permission::create([
            'name' => "Thêm Setting",
            'display_name'=> "Thêm Setting",
            'parent_id' => "21",
            'key_code' => "setting_add",

        ]);
        Permission::create([
            'name' => "Sửa Setting",
            'display_name'=> "Sửa Setting",
            'parent_id' => "21",
            'key_code' => "setting_edit",
        ]);
        Permission::create([
            'name' => "Xóa Setting",
            'display_name'=> "Xóa Setting",
            'parent_id' => "21",
            'key_code' => "setting_delete",
        ]);


        Permission::create([
            'name' => "Nhân viên",
            'display_name'=> "Nhân viên",
            'parent_id' => "0",
            'key_code' => "user",

        ]);
        Permission::create([
            'name' => "Danh sách Nhân viên",
            'display_name'=> "Danh sách Nhân viên",
            'parent_id' => "26",
            'key_code' => "user_list",

        ]);
        Permission::create([
            'name' => "Thêm Nhân viên",
            'display_name'=> "Thêm Nhân viên",
            'parent_id' => "26",
            'key_code' => "user_add",

        ]);
        Permission::create([
            'name' => "Sửa Nhân viên",
            'display_name'=> "Sửa Nhân viên",
            'parent_id' => "26",
            'key_code' => "user_edit",

        ]);
        Permission::create([
            'name' => "Xóa Nhân viên",
            'display_name'=> "Xóa Nhân viên",
            'parent_id' => "26",
            'key_code' => "user_delete",

        ]);

        Permission::create([
            'name' => "Vai Trò",
            'display_name'=> "Vai Trò",
            'parent_id' => "0",
            'key_code' => "role",

            
        ]);
        Permission::create([
            'name' => "Danh sách Vai Trò",
            'display_name'=> "Danh sách Vai Trò",
            'parent_id' => "31",
            'key_code' => "role_list",

        ]);
        Permission::create([
            'name' => "Thêm Vai Trò",
            'display_name'=> "Thêm Vai Trò",
            'parent_id' => "31",
            'key_code' => "role_add",

        ]);
        Permission::create([
            'name' => "Sửa Vai Trò",
            'display_name'=> "Sửa Vai Trò",
            'parent_id' => "31",
            'key_code' => "role_edit",

        ]);
        Permission::create([
            'name' => "Xóa Vai Trò",
            'display_name'=> "Xóa Vai Trò",
            'parent_id' => "31",
            'key_code' => "role_delete",
        ]);
    }
}
