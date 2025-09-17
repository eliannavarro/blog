<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('post', function (Blueprint $table) {
            // Solo crea la columna si no existe
            if (!Schema::hasColumn('post', 'slug')) {
                $table->string('slug')->nullable()->after('title');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('post', function (Blueprint $table) {
            if (Schema::hasColumn('post', 'slug')) {
                $table->dropColumn('slug');
            }
        });
    }
};
