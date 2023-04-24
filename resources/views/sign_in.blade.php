<?php $page="sign"; ?>
@include('partial.header')
<main class="bg_sign">
	<div class="registr_tab">
		<div class="tab">
			<a href="/{{app()->getLocale()}}/sign_in"><button class="tab_links sign_in_tab tab_active">{{  __('messages.account45') }}</button> </a>
			<span class="tab_vertical_line">|</span>
			<a href="/{{app()->getLocale()}}/sign_up"><button class="tab_links sign_up_tab">{{  __('messages.account46') }}</button></a>
		</div>
		<div class="sign_in">
			<div class="sign_in_content">
				<div class="left_block">
					<form action="log" method="post">
					@if($errors->any())
						<div class="errorMessage">{{  __('messages.error1') }}</div><br>
					@endif
						@csrf
						<input name='email' type="text" class="input" placeholder="Email" >
						<input name='password' type="password" class="input" placeholder="{{  __('messages.account47') }}">
						<button class="btn_purple" style='border:none'>
							{{  __('messages.account48') }}
						</button>
					</form>
					<div class="bla">
						
						<div class="link_line"> 
							<a href="/{{app()->getLocale()}}/sign_in_forgot_password">{{  __('messages.account49') }}</a>  
						</div>
						<div class="link_line"> 
							<span>{{  __('messages.account50') }}</span>
							<a href="/{{app()->getLocale()}}/sign_up">{{  __('messages.account51') }}</a>  
						</div>
					</div>
				</div>

			
			
			</div>
		</div>
	</div>
</main>

@include('partial.footer')
