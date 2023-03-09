<?php

namespace Database\Seeders;

use App\Models\Public\TipeWebinar;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipe_webinar = [
            ['UX Design', 1, 1, 'Seeder', 'Seeder'],
            ['UX Writing', 1, 1, 'Seeder', 'Seeder'],
            ['Research', 1, 1, 'Seeder', 'Seeder'],
            ['Product Design', 1, 1, 'Seeder', 'Seeder'],
            ['UI Design', 1, 1, 'Seeder', 'Seeder'],
            ['Interaction Design', 1, 1, 'Seeder', 'Seeder'],
        ];

        foreach ($tipe_webinar as $item) {
            DB::table('tipe_webinar')->insert([
                'id'            => (string) Str::uuid(),
                'name'          => $item[0],
                'sts_aktif'     => $item[1],
                'sts_hapus'     => $item[2],
                'created_by'    => $item[3],
                'updated_by'    => $item[4],
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
        
        $user = [
            ['Evan Gilang', 'evangilang@mail.com', 1, 1, 'Seeder', 'Seeder']
        ];

        foreach ($user as $item) {
            DB::table('users')->insert([
                'id'            => (string) Str::uuid(),
                'name'          => $item[0],
                'email'         => $item[1],
                'password'      => Hash::make('admin'),
                'sts_aktif'     => $item[2],
                'sts_hapus'     => $item[3],
                'created_by'    => $item[4],
                'updated_by'    => $item[5],
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

        $mentor = [
            ['Evan Gilang', 'evangilang@mail.com', 'mentor1.png', 1 ,1, 'Seeder', 'Seeder'],
        ];

        foreach ($mentor as $item) {
            $data_user = User::where('email', $item[1])->get();
            foreach ($data_user as $value) {
                if ($value->email == $item[1]) {
                    DB::table('mentor')->insert([
                        'id'            => (string) Str::uuid(),
                        'name'          => $item[0],
                        'email'          => $item[1],
                        'foto'         => $item[2],
                        'id_user'      => $value->id,
                        'sts_aktif'     => $item[3],
                        'sts_hapus'     => $item[4],
                        'created_by'    => $item[5],
                        'updated_by'    => $item[6],
                        'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
                }
            }
        }
    }
}
