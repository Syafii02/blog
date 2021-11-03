<?php

namespace Database\Seeders;

use App\Models\Post;  
use App\Models\User;
use App\Models\Category;
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
        

        User::create([
           'name' => 'admin',
           'username' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => bcrypt('12345')  
        ]);

        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('12345')  
        //  ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Social',
            'slug' => 'social'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis. Eos maxime vitae, quis ut voluptatum error facilis omnis possimus accusamus sapiente iure, aut iusto cumque debitis et corporis sed officia! Rerum nisi ea nesciunt neque recusandae ad expedita praesentium aliquid vitae iste quae, modi, officiis maxime nam sed, repellat et sit perspiciatis voluptas rem temporibus! Ipsum beatae nam distinctio laudantium adipisci enim libero! At qui, id repellat, unde asperiores error obcaecati exercitationem deserunt quidem, ab ipsum corporis.z',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis. Eos maxime vitae, quis ut voluptatum error facilis omnis possimus accusamus sapiente iure, aut iusto cumque debitis et corporis sed officia! Rerum nisi ea nesciunt neque recusandae ad expedita praesentium aliquid vitae iste quae, modi, officiis maxime nam sed, repellat et sit perspiciatis voluptas rem temporibus! Ipsum beatae nam distinctio laudantium adipisci enim libero! At qui, id repellat, unde asperiores error obcaecati exercitationem deserunt quidem, ab ipsum corporis.z',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis. Eos maxime vitae, quis ut voluptatum error facilis omnis possimus accusamus sapiente iure, aut iusto cumque debitis et corporis sed officia! Rerum nisi ea nesciunt neque recusandae ad expedita praesentium aliquid vitae iste quae, modi, officiis maxime nam sed, repellat et sit perspiciatis voluptas rem temporibus! Ipsum beatae nam distinctio laudantium adipisci enim libero! At qui, id repellat, unde asperiores error obcaecati exercitationem deserunt quidem, ab ipsum corporis.z',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis. Eos maxime vitae, quis ut voluptatum error facilis omnis possimus accusamus sapiente iure, aut iusto cumque debitis et corporis sed officia! Rerum nisi ea nesciunt neque recusandae ad expedita praesentium aliquid vitae iste quae, modi, officiis maxime nam sed, repellat et sit perspiciatis voluptas rem temporibus! Ipsum beatae nam distinctio laudantium adipisci enim libero! At qui, id repellat, unde asperiores error obcaecati exercitationem deserunt quidem, ab ipsum corporis.z',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quoz laudantium cum pariatur, quos animi voluptate aliquam unde officia neque mollitia eum dolorum ea incidunt sapiente libero repudiandae aut, fugit repellat corporis. Eos maxime vitae, quis ut voluptatum error facilis omnis possimus accusamus sapiente iure, aut iusto cumque debitis et corporis sed officia! Rerum nisi ea nesciunt neque recusandae ad expedita praesentium aliquid vitae iste quae, modi, officiis maxime nam sed, repellat et sit perspiciatis voluptas rem temporibus! Ipsum beatae nam distinctio laudantium adipisci enim libero! At qui, id repellat, unde asperiores error obcaecati exercitationem deserunt quidem, ab ipsum corporis.z',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
