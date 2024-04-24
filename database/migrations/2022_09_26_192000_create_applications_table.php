<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->date('application_date')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('land_line')->nullable();
            $table->string('nationality')->nullable();
            $table->string('id_image')->nullable();
            $table->date('DOB')->nullable();


            $table->integer('GPA')->nullable();
            $table->integer('GPA_reli_lang')->nullable();
            $table->string('certificate_image')->nullable();
            $table->string('certif_type')->nullable();
            $table->string('speciality')->nullable();
            $table->string('year')->nullable();
            $table->string('chosen_lang')->nullable();
            $table->string('minister')->nullable();
            $table->string('certif_source')->nullable();
            $table->string('ektitab_num')->nullable();
            $table->string('gpa_no_reli')->nullable();
            $table->string('deleted_lang')->nullable();
            $table->integer('percentage')->nullable();

            $table->integer('updated_by')->nullable();

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
        Schema::dropIfExists('applications');
    }
}
