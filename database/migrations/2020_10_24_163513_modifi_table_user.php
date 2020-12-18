<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifiTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {

			$table->string('account_name')->nullable();
			$table->string('contact_name')->nullable();
			$table->string('ssn')->nullable();
		 	$table->string('phone1')->nullable();
			$table->date('date_of_birth')->nullable();
		 	$table->string('yrsschool')->nullable();
		 	$table->string('merried')->nullable();
			$table->string('unmerried')->nullable();
		 	$table->string('single')->nullable();	
			$table->string('separated')->nullable();
			$table->string('dependents')->nullable();	 
			$table->string('email1')->nullable();
			$table->string('pstreet')->nullable();
		 	$table->string('pcity')->nullable();
		 	$table->string('pstate')->nullable();
			$table->string('pzip')->nullable();
			$table->string('mstreet')->nullable();
			$table->string('mcity')->nullable();
	 		$table->string('mstate')->nullable();
			$table->string('mzip')->nullable();
			$table->string('fstreet')->nullable();
	    	$table->string('fcity')->nullable();
			$table->string('fstate')->nullable();
			$table->string('fzip')->nullable();
			$table->string('citizenship')->nullable();
			$table->string('maritalstatus')->nullable();

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
