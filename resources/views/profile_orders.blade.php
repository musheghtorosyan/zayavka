<?php $page="profile"; ?>
@include('partial.header')
<main class="bg_profile"> 
	<div class="profile">
		<div class="profile_name">{{  __('messages.account1') }}</div>
		<div class="profile_content">
		@include('partial.leftbox')
			<div class="guide_content">
				<form action="">
					<div class="profile_my_orders">{{  __('messages.account22') }}</div>
					<div class="profile_no_orders" style="display:block">
						<div class="profile_no_orders_text">{{  __('messages.account23') }}</div>
						<a style='text-decoration:none' href="{{route('catalogue',['locale' => app()->getLocale()])}}"><span class="btn_purple"> {{  __('messages.account24') }}</span></a>
					</div>
					<div class="profile_have_orders" style='display:none'>
						<div class="product_characteristics">
							<div class="product_specification">
								<div class="product_characteristic">{{  __('messages.account25') }}</div>
								<div class="specific_product_characteristic">N1104</div>
							</div>
							<div class="product_specification">
								<div class="product_characteristic">{{  __('messages.account26') }}</div>
								<div class="specific_product_characteristic">11.01.2020</div>
							</div>
							<div class="product_specification">
								<div class="product_characteristic">{{  __('messages.account27') }}</div>
								<div class="specific_product_characteristic">{{  __('messages.account28') }}</div>
							</div>
							<div class="product_specification">
								<div class="product_characteristic">{{  __('messages.account29') }}</div>
								<div class="specific_product_characteristic">1</div>
							</div>
							<div class="product_specification">
								<div class="product_characteristic">{{  __('messages.account30') }}</div>
								<div class="specific_product_characteristic">6500 {{  __('messages.account31') }}</div>
							</div>
							<div class="product_specification last">
								<div class="product_characteristic">{{  __('messages.account32') }}</div>
								<div class="specific_product_characteristic last1"><a href="/{{app()->getLocale()}}/catalogue_single"><span class="btn_purple">{{  __('messages.account33') }}</span></a></div>
							</div>
							<p class="clear"></p>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</main>

@include('partial.footer')
