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
        Schema::create('course', function (Blueprint $table) {
        $table->increments('id');
		$table->string('actionName',100)->nullable()->default(NULL);
		$table->string('workingDomain',100)->nullable()->default(NULL);
		$table->string('note',500)->nullable()->default(NULL);
		$table->string('reference',150)->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
