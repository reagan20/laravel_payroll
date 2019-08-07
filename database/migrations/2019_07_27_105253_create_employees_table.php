<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('emp_no',50);
            $table->string('emp_fname',50);
            $table->string('emp_mname',50)->nullable();
            $table->string('emp_lname',50);
            $table->date('emp_dob');
            $table->string('marital_status',50);
            $table->string('gender',50);
            $table->bigInteger('emp_nationalid');
            $table->string('phone',50);
            $table->string('email',50)->nullable();
            $table->integer('department')->nullable();
            $table->integer('religion')->nullable();
            $table->integer('county')->nullable();
            $table->string('status',50);
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
        Schema::dropIfExists('employees');
    }
}
