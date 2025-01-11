<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
           'name' => 'Jayusman',
                'email' => 'jayusman@admin.com',
                'role' => 'owner',
                'cabang_id' => null,
                'created_at' => now(),
                'updated_at' => now(),

        ])->assignRole('owner');
        
        //Cabang 1
        User::factory()->create([
            'name' => 'Muis Nuryana',
            'email' => 'manager1@gmail.com',
            'role' => 'manager',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Alvaro Bintang Pratama',
            'email' => 'supervisor1@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Aira Zahra Putri',
            'email' => 'pegawaigudang1@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Bening Melati Asih',
            'email' => 'kasir1@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


         //Cabang 2
        User::factory()->create([
            'name' => 'Reza Gulaman Zakiyya',
            'email' => 'manager2@gmail.com',
            'role' => 'manager',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Daffa Rayhan Al Hakim',
            'email' => 'supervisor2@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Bumi Langit Aditya',
            'email' => 'pegawaigudang2@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Calista Anya Putri',
            'email' => 'kasir2@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //Cabang 3
        User::factory()->create([
            'name' => 'Abdul Hadi Maulidi',
            'email' => 'manager3@gmail.com',
            'role' => 'manager',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Dhea Salsabila Ramadhanti',
            'email' => 'supervisor3@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Kaivan Aksa Wijaya',
            'email' => 'pegawaigudang3@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Elara Maya Kirana',
            'email' => 'kasir3@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //Cabang 4
        User::factory()->create([
            'name' => 'Anya Savira Putri',
            'email' => 'manager4@gmail.com',
            'role' => 'manager',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Zara Nadiya Putri',
            'email' => 'supervisor4@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Hania Salsabila',
            'email' => 'pegawaigudang4@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Aisha Amani Putri',
            'email' => 'kasir4@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');


          //Cabang 5
        User::factory()->create([
            'name' => 'Ethan Putra Samudra',
            'email' => 'manager5@gmail.com',
            'role' => 'manager',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('manager');

         User::factory()->create([
            'name' => 'Aryan Satya Wicaksana',
            'email' => 'supervisor5@gmail.com',
            'role' => 'supervisor',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('supervisor');

         User::factory()->create([
            'name' => 'Rafi Azka Maulana',
            'email' => 'pegawaigudang5@gmail.com',
            'role' => 'pegawai gudang',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('pegawai-gudang');

         User::factory()->create([
            'name' => 'Zidan Kaira Pratama',
            'email' => 'kasir5@gmail.com',
            'role' => 'kasir',
            'cabang_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ])->assignRole('kasir');
    }
}
