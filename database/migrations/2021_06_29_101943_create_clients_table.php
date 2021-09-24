<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("company_name");
            $table->string("company_primary_email");
            $table->string("company_secondary_email")->nullable();
            $table->string("company_gst_number");
            $table->enum("company_gst_type", ["cgst", "sgst"]);
            $table->string("company_pan_number")->nullable();
            $table->enum("company_payout_term", ["7", "15", "30", "60", "90"])->nullable();
            $table->string("company_attachment_document")->nullable();
            $table->string("company_phone_number")->nullable();
            $table->string("company_mobile_number")->nullable();
            $table->string("company_city")->nullable();
            $table->string("company_address")->nullable();
            $table->string("company_longitude")->nullable();
            $table->string("company_latitude")->nullable();
            $table->dateTime("company_active_date");
            $table->bigInteger('created_by');
            $table->boolean('active')->default(1);
            $table->boolean('status')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
