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

            $table->foreignId('task_list_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('title');
            $table->timestamp('due_date');
            $table->tinyInteger('notify');
            $table->tinyInteger('status');
            $table->tinyInteger('in_calender');
            $table->text('notes');

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
