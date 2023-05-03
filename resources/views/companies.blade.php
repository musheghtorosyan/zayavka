<?php $page="catalogue"; ?>
@include('partial.header')
<main class="bg_catalogue">
	<div class="catalogue">
		<div class="catalogue_title" style='text-align:left'>Производители
			<form class='newsearch' style='float:right'>
				<input type='text' placeholder='поиск'>
				<button class='btn_serach'>Искать</button>
			</form>
			<p class='clear'></p>
		</div>
		<!-- <div class='borderBox'></div> -->
		<div class='flBox'>
			<h2>Филтр</h2><br>
			<select class='newsel'>
				<option selected disabled>Область</option>
				@foreach($sel1 as $sel)
				<option>{{$sel->ru_name}}</option>
				@endforeach
			</select>
			<select class='newsel'>
				<option selected disabled>Категория</option>
				@foreach($sel2 as $sel)
					<option>{{$sel->name}}</option>
				@endforeach
			</select>
			<select class='newsel'>
				<option selected disabled>Подкотегория</option>
				@foreach($sel3 as $sel)
					<option>{{$sel->name}}</option>
				@endforeach
			</select>
			<select class='newsel'>
				<option selected disabled>Субподкатегория</option>
				@foreach($sel4 as $sel)
					<option>{{$sel->name}}</option>
				@endforeach
			</select>
			
			<button class='btn_serach flrr'>Применить</button>
		</div>


		<div class="catalogue_content">
			<div class="products_container">
				

			@foreach($products as $product)
			<a href="/{{app()->getLocale()}}/company_single/{{$product['id']}}" class='proBox'>
				<img src='/images/companies/default.png'>
				<h3>Производитель резиновой плитки «СТРОЙКА»</h3>
				<div class='starBox'>
					<img src='/images/star2.svg'>
					<img src='/images/star2.svg'>
					<img src='/images/star2.svg'>
					<img src='/images/star2.svg'>
					<img src='/images/star.svg'>
					<span>19 отзывов</span>
				</div>
			</a>
			@endforeach

		

				<p class="clear"></p>
			</div>
			<br><br>
			@include('partial.pagination')
			<!-- <div class="catalogue_info">
				{--!!$pr[$l.'_long']!!--}
			</div> -->
		</div>
	
	</div>
</main>

@include('partial.footer')
	