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
        $table->string('title',500)->change();
		$table->boolean('is_feature')->default(false)->after('content');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
