<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->smallIncrements('id');
            $table->string('name',200);
            $table->string('acronym',20)->defualt('n/a');
            $table->string('address',200)->default('n/a');  
            $table->string('avatar',200)->default('school.jpg');
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
        Schema::dropIfExists('institutions');
    }
}
