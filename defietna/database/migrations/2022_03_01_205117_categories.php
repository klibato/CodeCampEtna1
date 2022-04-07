<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class categories extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

		$table->bigIncrements('id')->unsigned()->onDelete('cascade');
		$table->string('name',100);
        });
        DB::table('categories')->insert([
            array(
                'name' => 'direction',
            ),
            array(
                'name' => 'pedago',
            ),
            array(
                'name' => 'admin',
            ),
            array(
                'name' => 'reen',
            ),
            array(
                'name' => 'admissions',
            ),
            array(
                'name' => 'blu',
            ),
            array(
                'name' => 'studio',
            ),
            array(
                'name' => 'rh',
            ),
        ]);
        
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}