<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKindergartensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kindergartens', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->comment('幼儿园名称');
            $table->tinyInteger('kindergarten_grade_id', false, true)->comment('幼儿园等级ID');
            $table->timestamp('created_at')->useCurrent()->comment('新增时间');
            $table->timestamp('updated_at')->useCurrent()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kindergartens');
    }
}
