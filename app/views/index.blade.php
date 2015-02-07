<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	{{HTML::style('css/style.css')}}

</head>
<body>

	<div class="categories">
		<a href="#">Categories</a>

		<div class="kp-menu-container">

			<!-- // left menu.... -->
			<ul class="main">
				@foreach($categories as $category)
					<li><a href="">{{$category->name}}</a></li>
				@endforeach
			</ul>

			<!-- // right menu....... -->
			<div class="kp-submenu-container">
				@foreach($categories as $category)
					<div class="submenu-content">
						<h3>{{$category->name}}</h3>
						<ul>
							@foreach($category->subcategories->take(20) as $subcategory)
								<li><a href="">{{$subcategory->name}}</a></li>
							@endforeach
							<li><a href="">more subcategories..</a></li>
						</ul>
					</div>

				@endforeach

				<!-- thanks for watching........... sssl	subscribe, share, like, comment................ -->

			</div>
		</div>

	</div>

	<br>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	{{ HTML::script('js/script.js') }}
</body>
</html>