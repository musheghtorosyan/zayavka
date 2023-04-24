<?php $page="homepage"; ?>
@include('partial.header')
<iframe class='sliframe' frameborder='none' src="/{{app()->getLocale()}}/slider"></iframe>
<main class="bg_index">
	<div class="homepage_content">
	<!-- reclame block start -->
	@if($reclame[0]['link']!='') <a target='_blank' href="{{$reclame[0]['link']}}"> @endif
	{!! $reclame[0]['code'] !!}
	@if($reclame[0]['link']!='') </a> @endif
	<!-- reclame block finish -->

	<div class="products">
			<div class="section_name2">Последние новости</div>
			<div class="section_content">
				<div class="desktop_version">
					@foreach($products as $product)
					<div class="product">
						<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><img src="/storage/{{$product['pic1']}}" alt="">
						<div class="product_name">{{$product[$l.'_title']}}</div>
						</a>
						<br>
						<div class="product_buttons">
							<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><span class="btn_purple">Узнать болше</span></a>
						</div>
					</div>
					@endforeach
				</div>
				<div class="mobile_version">
					<div class="products_slider">
					@foreach($products as $product)
						<div class="product">
							<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><img src="/storage/{{$product['pic1']}}" alt="">
							<div class="product_name">{{$product[$l.'_title']}}</div>
							</a>
							<br>
							<div class="product_buttons">
								<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><span class="btn_purple">Узнать болше</span></a>
							</div>
						</div>
					@endforeach
					</div>
				</div>
			</div>
			<div class="all_product"><a href="/{{app()->getLocale()}}/catalogue" style='color:#FF571F'>Все новости</a></div>
		</div>








		<div class="about">
			<div class="section_name">{{  __('messages.menu3') }}</div>
			<div class="section_content">
				<div class="about_desc">
					{!!$about[$l.'_short']!!}
					<a href="/{{app()->getLocale()}}/about_us" class='tdn'><span class="btn_purple">{{  __('messages.home2') }}</span></a>
				</div>
				<div class="about_image">
					<img src="/storage/{{$about['pic']}}" alt="">
				</div>
			</div>
		</div>

		<div class="ardibook_advantages">
			<div class="section_name2">{{  __('messages.home3') }}</div>
			<div class="section_content">
				<div class="desktop_version">
				@foreach($blocks as $block)
						<div class="box">
							<img src="/storage/{{$block['pic']}}" alt="">
							<span>{{$block[$l.'_name']}}</span>
						</div>
					@endforeach

				</div>
				<div class="mobile_version">
					<div class="ardibook_advantages_slider">
						
					@foreach($blocks as $block)
						<div class="box">
							<img src="/storage/{{$block['pic']}}" alt="">
							<span>{{$block[$l.'_name']}}</span>
						</div>
					@endforeach
					
					
					</div>
				</div>
			</div>
			<p class="clear"></p>
		</div>
		
		

	
		
		<div class="reviews">
			<div class="section_name2">{{  __('messages.home15') }}</div>
			<div class="section_content">
				<div class="reviews_slider">

				@foreach($reviews as $review)
					<div class="review_container">
						<div class="reviewer_info">
							<div class="reviewer_info_left_side">
								<div class="reviewer_image"><img src="/storage/{{$review['pic']}}" alt=""></div>
								<span>{{$review[$l.'_name']}}</span>
							</div>
						</div>
						<div class="review">{{$review[$l.'_short']}}</div>
						<div class="read_all">{{  __('messages.home17') }}</div>
					</div>
				@endforeach

				</div>

			</div>
		</div>
		
	</div>
</main>
<div class="popup_container">
	<div class="popup_slider">
		<div class="popup_review_slider">
		@foreach($reviews as $review)
			<div class="review_container">
				<img src="/images/close1.png" alt="" class="popup_review_close">
				<div class="review_title">{{  __('messages.home15') }}</div>
				<div class="reviewer_info">
					<div class="reviewer_info_left_side">
						<div class="reviewer_image"><img src="/storage/{{$review['pic']}}" alt=""></div>
						<span>{{$review[$l.'_name']}}</span>
					</div>
					
				</div>
				<div class="review">{{$review[$l.'_long']}}</div>
			</div>
		@endforeach
		</div>
	</div>
</div>
@include('partial.footer')
	    		
	