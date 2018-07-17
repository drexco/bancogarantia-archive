<?php

namespace App;

use Eloquent;

	class Beneficiary extends Eloquent {
		protected $fillable = ['id', 'name', 'account_number','created_at','status'];
	}
?>
