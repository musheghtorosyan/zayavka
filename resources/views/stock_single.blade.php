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
				</div>
				<div>{!!$product[$l.'_desc']!!}</div>
				<div><br><hr><br><b>{{getUserName($product['adder_id'])}}</b></div>
				<div><br>{{$product['updated_at']}}</div>
			</div>
		</div>
		<div class="section_name2">Другие акции</div>
		<div class="product_slider">
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
		</div>
	
	</div>
</main>

@include('partial.footer')
