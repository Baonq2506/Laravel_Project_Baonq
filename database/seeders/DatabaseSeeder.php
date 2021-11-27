<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PostTagsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(userSocialNetworkTableSeeder::class);
        $this->call(RolePermissionsTableSeeder::class);
        $this->call(userInfosTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(OrderProductTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(ProdCategoryTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(ProductTableSeeder::class);
    }
}