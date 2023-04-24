<?php $page="about_us"; ?>
@include('partial.header')
<main class="bg_about_us">
	<div class="about_us">
		<div class="about_us_title">{{  __('messages.menu3') }}</div>
		<div class="about_us_content" style='line-height:30px'>
				{!!$about[$l.'_long']!!}
			<div class="about_us_image">
				<img src="/storage/{{$about['pic']}}" class="about_us_img1"alt="">
				<img src="/storage/{{$about['pic']}}" class="about_us_img2"alt="">
			</div>
			    <!-- reclame block start -->
				<br><br>
				<br><br>
				@if($reclame[2]['link']!='') <a target='_blank' href="{{$reclame[2]['link']}}"> @endif
				{!! $reclame[2]['code'] !!}
				@if($reclame[2]['link']!='') </a> @endif
				<!-- reclame block finish -->
			<div class="ardibook_advantages">
			<div class="section_name2">{{  __('messages.home3') }}</div>
			<div class="section_content">
				<div class="desktop_version">
				@foreach($blocks as $block)
						<div class="box">
							<img src="/storage/{{$block['pic']}}" alt="">
							<span>{{$block[$l.'_name']}}</span>
						</div>
					@endforeach
				</div>
				<div class="mobile_version">
					<div class="ardibook_advantages_slider">
					@foreach($blocks as $block)
						<div class="box">
							<img src="/storage/{{$block['pic']}}" alt="">
							<span>{{$block[$l.'_name']}}</span>
						</div>
					@endforeach
					</div>
				</div>
			</div>
			<p class="clear"></p>
		</div>

			

		</div>
	</div>

</main>

@include('partial.footer')