<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('st_id');
            $table->char('st_number', 5)->unique();
            $table->string('st_name', 50);
            //a column's values should be unique.
            $table->string('st_email')->unique();
            $table->date('st_born_date');
            //DOUBLE equivalent column with 
            //a precision (total digits: 5) and scale (decimal digits: 2).
            $table->double('score', 5, 2)->default(0); 
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
        Schema::dropIfExists('students');
    }
}
