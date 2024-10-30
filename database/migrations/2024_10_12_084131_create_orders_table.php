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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('domain');
            $table->string('template');
            $table->string('nik');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('ktp')->nullable();
            $table->string('siup')->nullable();
            $table->string('npwp')->nullable();
            $table->string('subscription');
            $table->decimal('initial_domain_cost', 10, 2)->nullable();
            $table->decimal('renewal_cost', 10, 2)->nullable();
            $table->decimal('hosting_cost', 10, 2)->nullable();
            $table->decimal('total_payment', 10, 2)->nullable();
            $table->string('va')->nullable();
            $table->enum('status', ['Paying', 'Developing', 'Online', 'Renewing', 'Offline'])->default('Paying');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
