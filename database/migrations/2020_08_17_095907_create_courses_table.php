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
            $table->integer('user_id');
//            create course
            $table->integer('category_id');
            $table->longText('title');
            $table->longText('sub_title')->nullable();//php laravel;
            $table->longText('description');
            $table->longText('about_instructor');
            $table->string('playlist_url');
            $table->string('tags')->nullable();
            $table->longText('photo')->nullable();//php laravel;
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
// stats
            $table->integer('view_count')->default(0);
            $table->integer('subscriber_count')->default(0);

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
