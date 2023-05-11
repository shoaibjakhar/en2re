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
        Schema::create('ideations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('details')->nullable();
            $table->string('type')->nullable();
            $table->string('attribute')->nullable();
            $table->integer('ghg_reduction_classification_id')->nullable();
            $table->integer('end_use_energy_classification_id')->nullable();
            $table->string('project_proposal')->nullable();
            $table->string('feasibility_form')->nullable();
            $table->string('business_case')->nullable();
            $table->date('target_launch_date')->nullable();
            $table->enum('epc_responsibility_classification', ['Yes', 'No'])->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideations');
    }
};
