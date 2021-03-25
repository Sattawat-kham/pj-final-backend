<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subname');
            $table->string('id_card');
            $table->double('grade', 8, 2);
            $table->string('faculty');
            $table->string('major');           
            $table->integer('sex');
            $table->integer('domicile');
            $table->string('school_name');
            $table->integer('school_type');
            $table->string('email');
            $table->string('address');
            $table->string('father_name');
            $table->string('father_work');
            $table->string('morther_name');
            $table->string('morther_work');
            $table->integer('income');            
            $table->date('birth_date');
            $table->integer('label');       
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
        Schema::dropIfExists('register');
    }
}
