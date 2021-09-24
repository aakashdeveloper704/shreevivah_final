    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("full_name");
            $table->string("username")->unique();
            $table->string("password");
            $table->string("email")->unique();
            // $table->string("locale")->nullable();
            // $table->string("language")->nullable();
            // $table->string("phone")->nullable();
            $table->string("mobile")->nullable();
            // $table->string("skype_id")->nullable();
            // $table->string("profile_photo");
            $table->enum("type", ["superadmin", "admin"]);
            // $table->enum("direction", ["LTR", "RTL"])->nullable();
            $table->boolean('active')->nullable();
            // $table->date('joining_date')->nullable();
            // $table->integer('probation_period')->nullable();
            // $table->integer('salary')->nullable();
            // $table->bigInteger('reporting_manager')->nullable();
            $table->bigInteger('created_by')->nullable();
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
        Schema::dropIfExists('users');
    }
}
