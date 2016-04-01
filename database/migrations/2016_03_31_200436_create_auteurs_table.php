<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable("auteurs")) {
            Schema::create('auteurs', function (Blueprint $table) {
                $table->increments('id');
                $table -> softDeletes();
                $table -> string('nom');
                $table -> string('prenom');
                $table -> boolean('active');
                $table->timestamps();
            });
        }

        if(Schema::hasTable("articles")) {
            Schema::table("articles",function (Blueprint $table) {
                $table -> integer("auteur_id") -> unsigned();
                $table->foreign('auteur_id')
                    ->references("id") -> on("auteurs");
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auteurs');
    }
}
