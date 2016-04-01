<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(Schema::hasTable("articles")) {
            Schema::table("articles",function (Illuminate\Database\Schema\Blueprint $table) {
                $table->string('sujet') ;
                $table->longText('contenu');
                $table->dateTime('active_at');
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
        //
    }
}
