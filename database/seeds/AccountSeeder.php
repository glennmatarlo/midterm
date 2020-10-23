<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id'     => 1,
                'acct_name'   => 'Choi Soobin; Regular Account',
                'init_invest' => 70000,
                'start_date'  => '2018-10-07',
                'remarks'     => 'Done with the transaction'
            ],

            [
                'user_id'     => 2,
                'acct_name'   => 'Choi Yeonjun; Regular Account',
                'init_invest' => 89000,
                'start_date'  => '218-10-09',
                'remarks'     => 'Done with the transaction'
            ],

            [
                'user_id'     => 3,
                'acct_name'   => 'Matarlo Glenn; Regular Account',
                'init_invest' => 90010,
                'start_date'  => '2019-03-17',
                'remarks'     => 'Done with the transaction'
            ],

            [
                'user_id'     => 4,
                'acct_name'   => 'Mulles LetterMay; Regular Account',
                'init_invest' => 12300,
                'start_date'  => '2020-07-19',
                'remarks'     => 'Done with the transaction'
            ]
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
