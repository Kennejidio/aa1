<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('lrn')->nullable();
            $table->string('elementary');
            $table->string('status');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('extname')->nullable();
            $table->date('birthdate');
            $table->string('sex',1);
            $table->string('barangay');
            $table->string('municipal');
            $table->string('province');
            $table->string('zip');
            $table->string('mother')->nullable();
            $table->string('father')->nullable();
            $table->string('guardian');
            $table->string('contact');
            $table->string('gradelevelcompleted');
            $table->string('lastschoolyearcompleted');
            $table->string('schoolname');
            $table->string('schooladdress');
            $table->string('schoolid');
            $table->timestamps();
            $table->foreignId("user_id")->constrained("users");
            $table->foreignId("created_by")->constrained("users");
            $table->foreignId("updated_by")->constrained("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
