<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prospective_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admissionFormId',100)->nullable()->default(NULL);
            $table->string('fullName',100)->nullable()->default(NULL);
            $table->date('dateOfBirth')->nullable()->default(NULL);
            $table->string('gender',15)->nullable()->default(NULL);
            $table->string('nationality',15)->nullable()->default(NULL);
            $table->string('religion',15)->nullable()->default(NULL);
            $table->string('homeAddress',100)->nullable()->default(NULL);
            $table->string('homeDistrict',50)->nullable()->default(NULL);
            $table->string('fathersName',100)->nullable()->default(NULL);
            $table->string('mothersName',100)->nullable()->default(NULL);
            $table->string('guardiansName',100)->nullable()->default(NULL);
            $table->string('guardianContactNo',20)->nullable()->default(NULL);
            $table->string('alternateContactNo',20)->nullable()->default(NULL);
            $table->string('guardianEmail',50)->nullable()->default(NULL);
            $table->string('previousSchool',100)->nullable()->default(NULL);
            $table->string('admittedClass',11)->nullable()->default(NULL);
            $table->string('previousCompletionGrade',11)->nullable()->default(NULL);
            $table->string('disease',100)->nullable()->default(NULL);
            $table->string('medicalNote',20)->nullable()->default(NULL);
            $table->string('lastYearResult',15)->default('INACTIVE');
            $table->string('photograph',255)->default('INACTIVE');
            $table->string('formStatus',255)->default('INACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prospective_students');
    }
};
