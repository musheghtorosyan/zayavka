<?php $page="privacy_policy"; ?>
@include('partial.header')
<main class="bg_privacy_policy">
	<div class="privacy_policy">
		<div class="conditions">
			<div class="condition condition_active">{{  __('messages.footer2') }}</div>
			<div class="condition">{{  __('messages.footer3') }}</div>
			<div class="condition">{{  __('messages.footer4') }}</div>
		</div>
		<div class="conditions_content">
			<div class="condition_content">{!!$p1[$l.'_long']!!}</div>
			<div class="condition_content">{!!$p2[$l.'_long']!!}</div>
			<div class="condition_content">{!!$p3[$l.'_long']!!}</div>
		</div>
	</div>
</main>

@include('partial.footer')
