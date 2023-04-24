<?php $page="contacts"; ?>
@include('partial.header')
<main class="bg_contacts"> 
	<div class="contacts">
		<div class="contacts_title">{{  __('messages.contacts1') }}</div>
		<div class="contacts_content">
			<div class="contact_us_container">
				<div class="contact_info">
					<div class="contact_phone">
						<img src="/images/phone-call.svg" alt="">
						<a href="tel:+{{preg_replace('/[^0-9.]/', '', $ct->phone)}}">{{$ct['phone']}}</a>
					</div>
					<div class="contact_domain">
						<img src="/images/email.svg" alt="">
						<a href="mailto:{{$ct['email']}}">{{$ct['email']}}</a>
					</div>
				</div>
				<form action="">
					<div class="input_line" style='width:100%'>
					<input id="subject" style='width:100%' type="text" class="input" placeholder="{{  __('messages.contacts4') }}">
					</div>
					<div class="input_line">
						<input id="name" type="text" class="input" placeholder="{{  __('messages.contacts11') }}">
						<input id="email" type="text" class="input" placeholder="{{  __('messages.contacts12') }}">
					</div>
					<textarea  id="my-text" class="input" style="height:30px;" placeholder="{{  __('messages.contacts13') }}" contenteditable="true"></textarea>

					<div class='contactmessage'>{{  __('messages.msg') }}</div>
					<div class="contacts_btn">
						<span class="btn_purple" id="contacsubmit">{{  __('messages.footer7') }}</span>
					</div>
				</form>
			</div>

		
		</div>
	</div>
	<!-- <div class="map_container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17965.398397556582!2d37.61211962087398!3d55.746779151042965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a50b315e573%3A0xa886bf5a3d9b2e68!2z1YTVuNW91a_VuNW-1bXVodW2INS_1oDVpdW01aw!5e0!3m2!1shy!2s!4v1670405846662!5m2!1shy!2s" width="100%" height="440" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div> -->
</main>

@include('partial.footer')
