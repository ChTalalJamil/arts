<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('job_number');
            $table->unsignedBigInteger('technician_id');
            $table->unsignedBigInteger('ticket_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('customer_id');
            $table->date('schedule_date')->nullable(); //Schedule Date for Job
            $table->string('instruction');
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
        Schema::dropIfExists('jobs');
    }
}
