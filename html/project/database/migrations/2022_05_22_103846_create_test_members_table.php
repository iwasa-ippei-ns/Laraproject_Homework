<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_members', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('mail')->nullable();
            $table->string('age')->nullable();
            $table->unsignedInteger('department_id');
            $table->date('cleated_at')->nullable();
            $table->date('updated_at')->nullable();
            
            $table->foreign('department_id')->references('department_id')->on('department_ids');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_members');
    }
}
