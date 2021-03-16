<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clients extends Migration
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
            $table->bigInteger('agent_id');
            $table->string('client_name')->unique();
            $table->string('client_code')->unique();
            $table->string('password');
            $table->string('reference');
            $table->decimal('client_curr_limit', 20,3)->nullable();
            $table->bigInteger('client_contact_num')->unique();
            $table->decimal('client_share',20,3);
            $table->decimal('client_mob_share',20,3);
            $table->string('client_com_type');
            $table->bigInteger('client_match_com');
            $table->bigInteger('client_sess_com');
            $table->string('client_flate_share')->nullable();
            $table->string('client_auto_limit')->nullable();
            $table->string('client_status')->nullable();
            $table->timestamps();
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
?>
