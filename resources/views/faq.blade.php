<?php $page="faq"; ?>
@include('partial.header')
<main class="bg_faq"> 
	<div class="faq">
		<div class="faq_title">{{  __('messages.footer1') }}</div>
		<div class="faq_content">
			@foreach($faq as $f)
				<div class="question_block">
					<div class="question">
						<div class="question_text">{{$f[$l.'_short']}}</div>
						<div class="question_mark"><img src="/logos/plus.svg" alt="plus"></div>
					</div>
					<div class="answer">{{$f[$l.'_long']}}</div>
				</div>
			@endforeach
		</div>
	</div>
</main>

@include('partial.footer')
