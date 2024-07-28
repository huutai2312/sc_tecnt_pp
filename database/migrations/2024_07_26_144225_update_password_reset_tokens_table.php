<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class UpdatePasswordResetTokensTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::table('password_reset_tokens', function (Blueprint $table) {
                $table->dropPrimary(['email']); // Bỏ khóa chính hiện tại
                $table->id()->first(); // Thêm cột id tự động tăng và đặt nó làm khóa chính mới
                $table->unique('email'); // Thêm chỉ mục duy nhất cho cột email
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('password_reset_tokens', function (Blueprint $table) {
                $table->dropUnique(['email']); // Bỏ chỉ mục duy nhất trên cột email
                $table->dropColumn('id'); // Xóa cột id
                $table->primary('email'); // Thêm lại khóa chính cho cột email
            });
        }
    }
