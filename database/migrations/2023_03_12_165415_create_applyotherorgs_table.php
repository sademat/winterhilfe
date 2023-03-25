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
        Schema::create('applyotherorgs', function (Blueprint $table) {
            $table->id();
            $table->integer('forms_id');
            $table->string("organization");
            $table->enum("decision",['commitment','pending','cancellation']);
            $table->decimal('amount',$precision = 8, $scale = 2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applyotherorgs');
    }
};
