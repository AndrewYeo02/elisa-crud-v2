<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('logbooks_id')->nullable();
          
            $table->string('registration')->nullable();
            $table->string('aircraft')->nullable();
            $table->string('ata')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->nullable();
            $table->string('licence')->nullable();
            $table->string('workType')->nullable();

            $table->foreign('logbooks_id')
                 ->references('id')
                 ->on('logbooks')
                 ->onDelete('cascade');
                 
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
        Schema::dropIfExists('tasks');
    }
}
