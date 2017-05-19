<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\weixinAccount;

class AccountController extends Controller{
  public function index(){
    $accounts=weixinAccount::all()->toArray();
    return view("weixin/account/list",['accounts'=>$accounts,'total'=>count($accounts)]);
  }
  public function create(){
    //$input=$request->input();
    return view("weixin/account/create");
  }
  public function store(){
    
  }
}