<?php $page="catalogue"; ?>
@include('partial.header')
<main class="bg_catalogue">
	<div class="catalogue">
	<div class="catalogue_title" style='text-align:left'>Акции
			<!-- <form class='newsearch' style='float:right'>
				<input type='text' placeholder='поиск'>
				<button class='btn_serach'>Искать</button>
			</form> -->
			<p class='clear'></p>
		</div>
		<div class='borderBox'></div>

		<div class="catalogue_content">
			<div class="products_container">
				


			@foreach($products as $product)
				<div class="product">
					<a href="/{{app()->getLocale()}}/stock_single/{{$product['id']}}"><img src="/storage/{{$product['pic1']}}" alt="">
					<div class="product_name">{{$product[$l.'_title']}}</div>
					</a>
					<div class='smallDt'>{{$product['updated_at']}}</div>
					<div class="product_buttons">
						<a href="/{{app()->getLocale()}}/stock_single/{{$product['id']}}"><span class="btn_purple">Узнать болше</span></a>
					</div>
				</div>
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
	