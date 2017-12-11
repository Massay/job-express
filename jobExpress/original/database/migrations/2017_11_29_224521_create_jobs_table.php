<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('subject');
            $table->text('description')->nullable();
            $table->string('salary_attachment');
            $table->dateTime('close_date');
            $table->string('exp_yr_min')->nullable();
            $table->string('exp_yr_max')->nullable();
            $table->time('working_start_time')->nullable();
            $table->time('working_end_time')->nullable();
            $table->string('working_hours')->default('8 AM - 5 PM');
            $table->integer('company_id')->unsigned()->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->boolean('status')->default(false);
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
