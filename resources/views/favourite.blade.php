<?php $page="favourite"; ?>
@include('partial.header')
<main class="bg_favourite">
	<div class="favourite">
		<div class="favourite_title">{{  __('messages.fav1') }}</div>
		
		<div class="favourite_existent">
			
		
		
			<?php $count = 0; ?>
			@foreach($allproducts as $product)
			<?php
			$arr = explode(',',$product['fav']);
			if(in_array($_COOKIE['ardiuser'],$arr)){
				$count++;
			?>
				<div class="product">
					@if($product['type']=='sale')
					<div class="sale">{{  __('messages.catalogue1') }}</div>
					@endif
					@if($product['type']=='new')
					<div class="novelty">{{  __('messages.catalogue2') }}</div>
					@endif
					<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><img src="/storage/{{$product['pic1']}}" alt="">
					<div class="product_name">{{$product[$l.'_title']}}</div>
					</a>
					
					<div class="product_buttons">
						<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><span class="btn_purple">{{  __('messages.home1') }}</span></a>
						<?php if(isset($_COOKIE['ardiuser'])) { ?>
						<span data-style="{{$_COOKIE['ardiuser']}}" data-id="{{$product['id']}}" class="click <?php if(in_array($_COOKIE['ardiuser'],$arr)){ echo "btn_favourite_active"; } else { echo "btn_favourite"; } ?>"></span>
						<?php } else { echo "<br><br><br>"; } ?>
					</div>
				</div>
				<?php } ?>
			@endforeach

			

			<div class="favourite_empty" <?php if($count>0){ echo "style='display:none'"; }?>>
				<div>{{  __('messages.fav2') }}</div>
				<a href="/{{app()->getLocale()}}/catalogue"><span class="btn_purple">{{  __('messages.fav4') }}</span></a>
			</div>





			<p class="clear"></p>
		</div>
		<div class="products">
			<div class="section_name2">{{  __('messages.fav3') }}</div>
			<div class="section_content">
				<div class="desktop_version">
					@foreach($products as $product)
					<div class="product">
						@if($product['type']=='sale')
						<div class="sale">{{  __('messages.catalogue1') }}</div>
						@endif
						@if($product['type']=='new')
						<div class="novelty">{{  __('messages.catalogue2') }}</div>
						@endif
						<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><img src="/storage/{{$product['pic1']}}" alt="">
						<div class="product_name">{{$product[$l.'_title']}}</div>
						</a>
						
						<div class="product_buttons">
							<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><span class="btn_purple">{{  __('messages.home1') }}</span></a>
							<?php if(isset($_COOKIE['ardiuser'])) { $arr = explode(',',$product['fav']); ?>
							<span data-style="{{$_COOKIE['ardiuser']}}" data-id="{{$product['id']}}" class="click <?php if(in_array($_COOKIE['ardiuser'],$arr)){ echo "btn_favourite_active"; } else { echo "btn_favourite"; } ?>"></span>
							<?php } else { echo "<br><br><br>"; } ?>
						</div>
					</div>
					@endforeach
				</div>
				<div class="mobile_version">
					<div class="products_slider">
						@foreach($products as $product)
						<div class="product">
							@if($product['type']=='sale')
							<div class="sale">{{  __('messages.catalogue1') }}</div>
							@endif
							@if($product['type']=='new')
							<div class="novelty">{{  __('messages.catalogue2') }}</div>
							@endif
							<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><img src="/storage/{{$product['pic1']}}" alt="">
							<div class="product_name">{{$product[$l.'_title']}}</div>
							</a>
							
							<div class="product_buttons">
								<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><span class="btn_purple">{{  __('messages.home1') }}</span></a>
								<?php if(isset($_COOKIE['ardiuser'])) { $arr = explode(',',$product['fav']); ?>
								<span data-style="{{$_COOKIE['ardiuser']}}" data-id="{{$product['id']}}" class="click <?php if(in_array($_COOKIE['ardiuser'],$arr)){ echo "btn_favourite_active"; } else { echo "btn_favourite"; } ?>"></span>
								<?php } else { echo "<br><br><br>"; } ?>
							</div>
						</div>
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>

</main>

@include('partial.footer')
