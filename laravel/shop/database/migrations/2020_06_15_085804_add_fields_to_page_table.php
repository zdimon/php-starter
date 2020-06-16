<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page', function (Blueprint $table) {
            // добавляем поля
            $table->boolean('is_active')->default(false);
            $table->string('title');
            $table->string('image')->default('noimage');
            $table->text('content');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page', function (Blueprint $table) {
            $table->dropColumn('is_active');
            $table->dropColumn('title');
            $table->dropColumn('image');
            $table->dropColumn('content');
        });
    }
}
