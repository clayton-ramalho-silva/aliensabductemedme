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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('firstNome');
            $table->string('lastNome');
            $table->string('email');
            $table->string('when_happen');
            $table->string('how_long_gone');
            $table->string('how_many_see');
            $table->string('describe');
            $table->string('what_they_you');
            $table->string('see_fang');
            $table->text('comments');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
