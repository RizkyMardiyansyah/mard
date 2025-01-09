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
        Schema::table('orders', function (Blueprint $table) {
            $table->renameColumn('initial_domain_cost', 'domainCost');
            $table->renameColumn('va', 'paymentLink');
            $table->renameColumn('renewal_cost', 'templateCost');
            $table->renameColumn('hosting_cost', 'subscriptionCost');
            $table->string('snapKey')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
