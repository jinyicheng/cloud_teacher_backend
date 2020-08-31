<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfKindergartenGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conf_kindergarten_grades', function (Blueprint $table) {
            $table->tinyInteger('id',true,true)->comment('幼儿园等级ID');
            $table->string('name', 15)->comment('幼儿园等级名称')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conf_school_grades');
    }
}
