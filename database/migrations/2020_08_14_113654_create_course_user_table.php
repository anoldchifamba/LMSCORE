<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_user', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id');
            $table->integer('course_id');
            $table->integer('user_account_id');
            $table->dateTime('pay_date');
            $table->dateTime('expiry_date');
            $table->string('plan')->nullable();
            $table->double('pay_amount')->nullable();

            $table->tinyInteger('status')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('course_user');
    }
}
