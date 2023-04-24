<?php $page="sign_in_forgot_password"; ?>
@include('partial.header')
<main class="bg_sign">
	<div class="forgot_password">
		<div class="forgot_password_title">{{  __('messages.account40') }}</div>
		<div class="forgot_password_content">{{  __('messages.account41') }}</div>
		<form action="/forgot" method="post" class="forgot_password_email">
			<input type="text" class="input " placeholder="Email" >
		<div class="forgot_password_btn">
			<button style='border:none' class="btn_purple">{{  __('messages.account42') }}</button>
		</div>
		</form>
	</div>
	<div class="forgot_password_sent">
		<div class="forgot_password_sent_title">{{  __('messages.account43') }}</div>
		<div class="forgot_password_sent_content">{{  __('messages.account44') }}</div>
	</div>
</main>

@include('partial.footer')
