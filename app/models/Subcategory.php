<?php

	class Subcategory extends Eloquent{
		protected $fillable = [];

		//model relation...
		public function category(){
			return $this->belongsTo('Category');
		}
	}

 ?>