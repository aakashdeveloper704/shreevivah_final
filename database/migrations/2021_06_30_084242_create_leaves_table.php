<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->enum("category", ['medical', 'vacation', 'other']);
            $table->date("start_date");
            $table->date("end_date");
            $table->text("reason")->nullable();
            $table->string("attachment")->nullable();
            $table->boolean('approved')->default(0);
            $table->bigInteger('approved_by')->nullable();
            $table->dateTime('approved_date')->nullable();
            $table->bigInteger('created_by');
            $table->boolean('freeze')->default(0);
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
        Schema::dropIfExists('leaves');
    }
}
