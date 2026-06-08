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
        Schema::table('campaigns', function (Blueprint $table) {
            $table->string('title');
            $table->text('description');
            $table->string('target_donation');
            $table->integer('collected_donation')->default(0);
            $table->date('deadline');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'description',
                'target_donation',
                'collected_donation',
                'deadline',
            ]);
        });
    }
};
