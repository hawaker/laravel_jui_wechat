<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weixinAccount extends Model
{
    protected $table="weixin_accounts";
    protected $fillable=['originid','appid','secret','type','token','name','nameid','EncodingAESKey'];
}
