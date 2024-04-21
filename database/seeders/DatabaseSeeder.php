<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;

use App\Models\User;

use App\Models\Profil;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


    //    User::create([
    //         'username' => 'admin1',
    //         'email' => 'admin1@gmail.com',
    //         'password' => Hash::make('admin1'),
    //         'nama_lengkap' => 'admin',
    //         'verifikasi' => 'sudah'
    //    ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Profil::create([
               'nama' => 'SOLEHUDIN',
               'sekolah' => 'SMPN 3 Kalijati',
               'motto' => 'Khoirunnas Anfa uhum Linnas',
               'program' => 'KAMSIHAT',
               'image' => '1.jpg',
               'link' => '#exampleModalCenter',
             ]);
        // Post::create([
        //        'title' => 'pertama',
        //         'body' => '<p>hallo bro ipsum dolor sit amet, consectetur adipisicing elit. Qui facere tempora dignissimos nesciunt ab explicabo? Cumque saepe ratione eaque exercitationem quas illum similique aspernatur magnam suscipit debitis, minus quia ipsum soluta enim sequi, architecto, consectetur alias recusandae? Sapiente dignissimos atque quis totam, ipsa cupiditate, suscipit officiis consequuntur minus ut sint.</p><p> Rerum ratione illum temporibus velit eius dolores beatae voluptates iusto minima ducimus, quia earum a obcaecati! Odio totam harum illum veritatis consequuntur ex soluta eaque voluptatibus, id voluptatem, deleniti assumenda eveniet fuga ea, iure praesentium sit! Nesciunt facilis cupiditate enim. Quisquam fuga similique quia inventore dolorum totam rem exercitationem eligendi.</p>',
        //      ]);
        // Post::create([
        //        'title' => 'kedua',
        //         'body' => '<p>hallo bro ipsum dolor sit amet, consectetur adipisicing elit. Qui facere tempora dignissimos nesciunt ab explicabo? Cumque saepe ratione eaque exercitationem quas illum similique aspernatur magnam suscipit debitis, minus quia ipsum soluta enim sequi, architecto, consectetur alias recusandae? Sapiente dignissimos atque quis totam, ipsa cupiditate, suscipit officiis consequuntur minus ut sint.</p><p> Rerum ratione illum temporibus velit eius dolores beatae voluptates iusto minima ducimus, quia earum a obcaecati! Odio totam harum illum veritatis consequuntur ex soluta eaque voluptatibus, id voluptatem, deleniti assumenda eveniet fuga ea, iure praesentium sit! Nesciunt facilis cupiditate enim. Quisquam fuga similique quia inventore dolorum totam rem exercitationem eligendi.</p>',
        //      ]);
        // Post::create([
        //        'title' => 'ketiga',
        //         'body' => '<p>hallo bro ipsum dolor sit amet, consectetur adipisicing elit. Qui facere tempora dignissimos nesciunt ab explicabo? Cumque saepe ratione eaque exercitationem quas illum similique aspernatur magnam suscipit debitis, minus quia ipsum soluta enim sequi, architecto, consectetur alias recusandae? Sapiente dignissimos atque quis totam, ipsa cupiditate, suscipit officiis consequuntur minus ut sint.</p><p> Rerum ratione illum temporibus velit eius dolores beatae voluptates iusto minima ducimus, quia earum a obcaecati! Odio totam harum illum veritatis consequuntur ex soluta eaque voluptatibus, id voluptatem, deleniti assumenda eveniet fuga ea, iure praesentium sit! Nesciunt facilis cupiditate enim. Quisquam fuga similique quia inventore dolorum totam rem exercitationem eligendi.</p>',
        //      ]);

    }
}
