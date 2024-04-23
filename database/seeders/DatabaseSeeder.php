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


       User::create([
            'username' => 'KELOMPOK SIANIDA',
            'email' => 'sianida@gmail.com',
            'password' => Hash::make('sianida'),
            'nama_lengkap' => 'admin',
            'verifikasi' => 'sudah'
       ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Profil::create([
               'nama' => 'SOLEHUDIN',
               'sekolah' => 'SMPN 3 Kalijati',
               'motto' => 'Khoirunnas Anfa`uhum Linnas',
               'program' => 'KAMSIHAT',
               'image' => '1org.jpg',
               'link' => '#exampleModalCenter',
             ]);
        Profil::create([
               'nama' => 'DIKA AHMAD FADILAH',
               'sekolah' => 'SDN JATIMULYA PATOKBEUSI',
               'motto' => 'Lakukan yang Terbaik dan Percayalah pada Diri Sendiri',
               'program' => 'BERTAPA (Berani Tampil Aktif)',
               'image' => '2.jpg',
               'link' => '#exampleModalCenter2',
             ]);
        Profil::create([
               'nama' => 'AI SUMIATI',
               'sekolah' => 'SDN BAKTIMULYA',
               'motto' => 'Orang hebat adalah orang yang selalu menebar manfaat untuk sekitar',
               'program' => 'Religious Culture',
               'image' => '5org.jpg',
               'link' => '#exampleModalCenter3',
             ]);
        Profil::create([
               'nama' => 'NUR KHOT AZIZAH',
               'sekolah' => 'SDN BINABAKTI',
               'motto' => 'Jangan berhenti ketika lelah, berhentilah ketika selesai',
               'program' => 'Satu Jam Membaca di Luar Kelas',
               'image' => '4org.jpg',
               'link' => '#exampleModalCenter4',
             ]);
        Profil::create([
               'nama' => 'IMAS ROHAYATI',
               'sekolah' => 'SMK Negeri 2 Subang',
               'motto' => 'Tetap jadi orang baik dalam kondisi apapun',
               'program' => 'IT EXCELERATE',
               'image' => '3org.jpg',
               'link' => '#exampleModalCenter5',
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
