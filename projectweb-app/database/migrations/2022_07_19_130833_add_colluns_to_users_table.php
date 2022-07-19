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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->string('cpf')->nullable()->after('email');
            $table->string('age')->nullable()->after('email');
            $table->string('rg')->nullable()->after('email');
            $table->string('sex')->nullable()->after('email_verified_at');
            $table->string('status_civil')->nullable()->after('email_verified_at');
            $table->string('postal_code')->nullable()->after('email_verified_at');
            $table->string('profession')->nullable()->after('email_verified_at');
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
            $table->dropColumn('phone');
            $table->dropColumn('cpf');
            $table->dropColumn('age');
            $table->dropColumn('rg');
            $table->dropColumn('sex');
            $table->dropColumn('status_civil');
            $table->dropColumn('postal_code');
            $table->dropColumn('profession');
        });
    }
};
