<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("cpf");
            $table->date("date_of_birth");
            $table->string("gender");
            $table->boolean("is_dead");
            $table->unsignedBigInteger("address_id");
            $table->unsignedBigInteger("president_id");
            $table->foreign("address_id")->references("id")->on("address");
            $table->foreign("president_id")->references("id")->on("presidents");
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
        Schema::dropIfExists('users');
    }
}
