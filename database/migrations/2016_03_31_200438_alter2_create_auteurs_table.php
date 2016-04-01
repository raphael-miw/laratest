<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alter2CreateAuteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable("articles")) {
            Schema::table("articles",function (Blueprint $table) {
                $table -> integer("auteur_id") -> unsigned() -> change();
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
