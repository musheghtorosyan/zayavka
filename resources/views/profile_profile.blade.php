<?php $page="profile"; ?>
@include('partial.header')
<main class="bg_profile">
	<div class="profile">
		<div class="profile_name">{{  __('messages.account1') }}</div>
		<div class="profile_content">
		@include('partial.leftbox')

			<div class="guide_content">
				<form action="">
					<div class="input_headline">{{  __('messages.account34') }}</div>
					<div class="input_line">
						<input type="text" class = "input" placeholder="{{  __('messages.account15') }}">
						<input type="email" class = "input" placeholder="Email">
					</div>
					<div class="input_headline">{{  __('messages.account35') }}</div>
					<div class="input_line">
						<input type="password" class = "input" placeholder="{{  __('messages.account36') }}">
						<input type="password" class = "input" placeholder="{{  __('messages.account37') }}">
					</div>
					<div class="input_line input1">
						<input type="password" class = "input" placeholder="{{  __('messages.account38') }}">
					</div>
					<button style="border:none" class="btn_purple">{{  __('messages.account39') }}</button>
				</form>
			</div>
		</div>
	</div>
</main>
@include('partial.footer')
