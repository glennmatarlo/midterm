<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;

class AccountController extends Controller
{
    public function index() {
        $act = Account::orderBy('acct_name')->get();

        return view('accounts.account', ['accounts'=>$act]);
    }
}
