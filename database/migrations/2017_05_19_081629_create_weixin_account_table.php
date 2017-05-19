<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeixinAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weixin_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string("originid");
            $table->string("appid");
            $table->string("secret");
            $table->string("type");
            $table->string("token");
            $table->string("name");
            $table->string("nameid");
            $table->string("EncodingAESKey");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weixin_accounts');
    }
}
