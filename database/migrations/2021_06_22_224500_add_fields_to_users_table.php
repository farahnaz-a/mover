<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('company')->after('password')->nullable();
           $table->string('phone')->after('company')->nullable();
           $table->string('username')->after('phone')->nullable();
           $table->enum('role', ['admin', 'user', 'mover'])->default('user');
           $table->longText('address')->after('role')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('phone');
            $table->dropColumn('username');
            $table->dropColumn('role');
        });
    }
}
