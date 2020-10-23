<?php
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'    => 'Choi',
                'fname'    => 'Soobin',
                'address'  => 'Seoul, South Korea',
                'phone'    => '010123456789',
                'email'    => 'choisb99@gmail.com',
                'password' => bcrypt('password123')
            ],

            [
                'lname'    => 'Choi',
                'fname'    => 'Yeonjun',
                'address'  => 'Daegu, South Korea',
                'phone'    => '010546723419',
                'email'    => 'yjchoibh@gmail.com',
                'password' => bcrypt('passwrd123')
            ],

            [
                'lname'    => 'Matarlo',
                'fname'    => 'Glenn',
                'address'  => 'Cabulijan, Tubigon, Bohol',
                'phone'    => '09120688917',
                'email'    => 'glennmatarlo@gmail.com',
                'password' => bcrypt('pasword123')
            ],

            [
                'lname'    => 'Mulles',
                'fname'    => 'Letter May',
                'address'  => 'Genonocan, Tubigon, Bohol',
                'phone'    => '09111354176',
                'email'    => 'lettermay@gmail.com',
                'password' => bcrypt('pasword123')
            ]

        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }

    }

}

