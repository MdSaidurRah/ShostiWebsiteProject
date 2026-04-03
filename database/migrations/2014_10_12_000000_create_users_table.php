<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
		$table->string('name',25)->nullable()->default(NULL);
		$table->string('email',35)->nullable()->default(NULL);
		$table->string('userContactNo',15)->nullable()->default(NULL);
		$table->string('password',100)->nullable()->default(NULL);
		$table->string('userRole',20)->nullable()->default(NULL);
		$table->string('designation',100)->nullable()->default(NULL);
		$table->integer('department_id',11)->nullable()->default(NULL);
		$table->string('department',50)->nullable()->default(NULL);
		$table->string('userType',20)->nullable()->default(NULL);
		$table->string('userStatus',15)->default('INACTIVE');
		$table->integer('systemUniqueId',11)->nullable()->default(NULL);
		$table->string('userPhoto',500)->nullable()->default(NULL);

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }

};

