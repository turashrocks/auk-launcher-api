<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_addr')->nullable();
            $table->string('user_cont_num')->nullable();
            // $table->intiger('role_id')->unsigned()->nullable();
            // $table->intiger('group_id')->unsigned()->nullable();
            $table->date('user_sub_exp_date');
            $table->integer('user_pc_assigned');
            $table->string('user_pc_uuid')->nullable();
            $table->string('user_pc_name')->nullable();
            $table->date('user_sub_inst_date');
            $table->tinyInteger('status');            
            // $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('group_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');   
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
