<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('name')->unique();
            $table->string('phone_number')->after('username')->nullable();
            $table->string('facebook_url')->after('phone_number')->nullable();
            $table->string('instagram_url')->after('facebook_url')->nullable();
            $table->enum('role', ['admin','user'])->after('instagram_url')->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'username',
                'phone_number',
                'facebook_url',
                'instagram_url'
            ]);
        });
    }
};
