<?php $page="catalogue_single"; ?>
@include('partial.header')
<main class="bg_catalogue_single">
	<div class="catalogue_single">
		<div class="catalogue_single_content">
			<div class="product_image_slider">
				@if($product['pic1']!='')
				<div class="product_image">
					<?php if($product['type']=='sale'){ ?><div class="sale">{{  __('messages.catalogue1') }}</div><?php } ?>
					<?php if($product['type']=='new'){ ?><div class="novelty">{{  __('messages.catalogue2') }}</div><?php } ?>
					<img src="/storage/{{$product['pic1']}}" alt="" class="product_image_slider_img">
				</div>
				@endif
				@if($product['pic2']!='')
				<div class="product_image">
					<?php if($product['type']=='sale'){ ?><div class="sale">{{  __('messages.catalogue1') }}</div><?php } ?>
					<?php if($product['type']=='new'){ ?><div class="novelty">{{  __('messages.catalogue2') }}</div><?php } ?>
					<img src="/storage/{{$product['pic2']}}" alt="" class="product_image_slider_img">
				</div>
				@endif
				@if($product['pic3']!='')
				<div class="product_image">
					<?php if($product['type']=='sale'){ ?><div class="sale">{{  __('messages.catalogue1') }}</div><?php } ?>
					<?php if($product['type']=='new'){ ?><div class="novelty">{{  __('messages.catalogue2') }}</div><?php } ?>
					<img src="/storage/{{$product['pic3']}}" alt="" class="product_image_slider_img">
				</div>
				@endif
				@if($product['pic4']!='')
				<div class="product_image">
					<?php if($product['type']=='sale'){ ?><div class="sale">{{  __('messages.catalogue1') }}</div><?php } ?>
					<?php if($product['type']=='new'){ ?><div class="novelty">{{  __('messages.catalogue2') }}</div><?php } ?>
					<img src="/storage/{{$product['pic4']}}" alt="" class="product_image_slider_img">
				</div>
				@endif
				@if($product['pic5']!='')
				<div class="product_image">
					<?php if($product['type']=='sale'){ ?><div class="sale">{{  __('messages.catalogue1') }}</div><?php } ?>
					<?php if($product['type']=='new'){ ?><div class="novelty">{{  __('messages.catalogue2') }}</div><?php } ?>
					<img src="/storage/{{$product['pic5']}}" alt="" class="product_image_slider_img">
				</div>
				@endif
			</div>

			<div class="product_description">
				<div class="product_name_line">
					<div>{{$product[$l.'_title']}}</div>
					<?php if(isset($_COOKIE['ardiuser'])) { $arr = explode(',',$product['fav']); ?>
							<div data-style="{{$_COOKIE['ardiuser']}}" data-id="{{$product['id']}}" class="click <?php if(in_array($_COOKIE['ardiuser'],$arr)){ echo "btn_favourite_active"; } else { echo "btn_favourite"; } ?>"></div>
							<?php } ?>
					<!-- <div class="click btn_favourite"></div> -->
				</div>
				<div>{!!$product[$l.'_desc']!!}</div>
			
			
				<?php if(isset($_COOKIE['ardiuser'])) {  ?>
				<div class="btn_orders">
					<span class="btn_white">{{  __('messages.catalogue8') }}</span>
				</div>
					<?php } ?>
			</div>
		</div>
		<div class="section_name2">Другие новости</div>
		<div class="product_slider">
		@foreach($products as $product)
			<div class="product">
				<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><img src="/storage/{{$product['pic1']}}" alt="">
				<div class="product_name">{{$product[$l.'_title']}}</div>
				</a>
				<div class='smallDt'>{{$product['updated_at']}}</div>
				<div class="product_buttons">
					<a href="/{{app()->getLocale()}}/catalogue_single/{{$product['id']}}"><span class="btn_purple">Узнать болше</span></a>
				</div>
			</div>
		@endforeach
		</div>
	
	</div>
</main>

@include('partial.footer')
