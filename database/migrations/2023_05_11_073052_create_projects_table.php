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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('ideation_id')->nullable();
            $table->string('type')->nullable();
            $table->string('attribute')->nullable();
            $table->date('launch_date')->nullable();
            $table->float('investment_amount')->nullable();
            $table->text('detail')->nullable();
            $table->string('ghg_reduction_classification')->nullable();
            $table->string('end_use_energy_classification')->nullable(); 
            $table->string('picture')->nullable();
            $table->string('api_url')->nullable();
            $table->string('invoice_epc')->nullable();
            $table->string('sign_off')->nullable();
            $table->string('webcam_url')->nullable();
            $table->string('tested_by')->nullable();
            $table->enum('api_implemented', ['Yes', 'No'])->nullable();
            $table->enum('amount_confirm', ['Yes', 'No'])->nullable();
            $table->date('tested_date')->nullable();
            $table->enum('status', ['Pending','Reviewed','Approve request','Approved','Rejected'])->default('Pending');
            $table->string('remarks')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
