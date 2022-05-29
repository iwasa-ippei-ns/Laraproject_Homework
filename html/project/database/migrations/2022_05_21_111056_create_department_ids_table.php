<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_ids', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('department_id')->primary()->unique();
            $table->string('department_name');
            $table->string('address');
            $table->string('others');
            $table->string('cloum_1');
            $table->string('cloum_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_ids');
    }
}
