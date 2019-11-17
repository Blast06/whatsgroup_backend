<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('type');
            $table->string('description');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('category_id');

//            TODO - ADD A TABLE
            // a table for the type of group(whatsapp, instagram, facebook, discord)
            // needs to be a table attached to this, to replace the "type" column


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
