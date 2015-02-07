<?php

	class Category extends Eloquent{
		protected $fillable = [];

		//model realtion

		public function subcategories(){
			return $this->hasMany('Subcategory');
		}
	}

 ?>