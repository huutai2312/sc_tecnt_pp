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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('tagline');
            $table->string('site_icon')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('admin_email');
            $table->boolean('membership')->default(false);
            $table->enum('new_user_default_role', ['Admin', 'User', 'Staff'])->default('User');
            $table->string('timezone');
            $table->text('header_script')->nullable();
            $table->text('footer_script')->nullable();
            $table->text('body_script')->nullable();
            $table->string('keyword')->nullable();
            $table->string('author')->nullable();
            $table->text('content_footer')->nullable();
            $table->string('status_tab_custom')->nullable();
            $table->boolean('maintenance_status')->default(false);
            $table->boolean('register_status')->default(true);
            $table->boolean('login_status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
