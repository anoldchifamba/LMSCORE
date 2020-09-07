<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
//            create course
            $table->integer('category_id')->nullable();
            $table->string('title');
            $table->string('sub_title')->nullable();//php laravel;
            $table->longText('description')->nullable();
            $table->longText('about_instructor')->nullable();
            $table->string('playlist_url')->nullable();
            $table->string('tags')->nullable();
            $table->longText('photo')->nullable();//php laravel;
            $table->longText('course_calendar')->nullable();//php laravel;
            $table->longText('course_outline')->nullable();//php laravel;
            $table->longText('promo_video_url')->nullable();//php laravel;
            $table->integer('creator_status')->default(0);
            $table->integer('admin_status')->default(0);
            //target your students
            $table->longText('what_will_students_learn')->nullable();//php laravel;

            $table->longText('target_students')->nullable();//php laravel;
            $table->longText('requirements')->nullable();//php laravel;
//price and cuopone
            $table->double('discount_price',10,2);
            $table->double('actual_price',10,2);
            $table->longText('paynow_url');
// stats
            $table->integer('view_count')->nullable();
            $table->integer('subscriber_count')->nullable();;

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
        Schema::dropIfExists('courses');
    }
}
