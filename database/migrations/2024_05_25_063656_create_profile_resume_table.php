<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_resume', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('img',100);
            $table->string('title',100);
            $table->string('socials',100);
            $table->string('birthday',100);
            $table->string('website',100);
            $table->string('phone',100);
            $table->string('mail',100);
            $table->string('location',100);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_resume');
    }
}
