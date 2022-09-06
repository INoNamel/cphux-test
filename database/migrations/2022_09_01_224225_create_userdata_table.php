<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdata', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->useCurrent();
            $table->string('permission', 45)->nullable()->default('yes');
            $table->string('gender', 45)->nullable();
            $table->string('postal_code', 45)->nullable();
            $table->string('education', 255)->nullable();
            $table->string('education_institution', 255)->nullable();
            $table->decimal('years_of_experience', 10, 2);
            $table->string('employment_commitment', 255)->nullable();
            $table->string('employment_type', 255)->nullable();
            $table->string('jobcategory', 255)->nullable();
            $table->integer('monthly_salary')->unsigned()->nullable();
            $table->string('job_title', 555)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdata');
    }
}
