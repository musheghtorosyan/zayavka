<?php $page="profile"; ?>
@include('partial.header')
<main class="bg_profile">
	<div class="profile">
		<div class="profile_name">{{  __('messages.account1') }}</div>
		<div class="profile_content">
			@include('partial.leftbox')
			<div class="guide_content">
				<div class="profile_changed">{{  __('messages.account13') }}</div>
				<div class="welcome">{{  __('messages.account14') }}</div>
				<div class="user_name_surname">{{ $_COOKIE['userfullname'] }}</div>
				<div class="user_gmail">{{ $_COOKIE['useremail'] }}</div>
				<span class="user_info">{{  __('messages.account16') }} <a href="/{{app()->getLocale()}}/profile_orders" class='purple_link'>{{  __('messages.account17') }}</a></span>
				<span class="user_info">{{  __('messages.account20') }} <a href="/{{app()->getLocale()}}/profile_profile" class='purple_link'> {{  __('messages.account21') }}</a></span>
			</div>
		</div>
	</div>
</main>

@include('partial.footer')
