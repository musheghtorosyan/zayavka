<?php $page="sign"; ?>
@include('partial.header')
<main>
	<div class="registr_tab">
		<div class="tab">
			<a href="/{{app()->getLocale()}}/sign_in"><button class="tab_links sign_in_tab">{{  __('messages.account45') }}</button> </a>
			<span class="tab_vertical_line">|</span>
			<a href="/{{app()->getLocale()}}/sign_up"><button class="tab_links sign_up_tab tab_active">{{  __('messages.account46') }}</button></a>
		</div>
		<div class="sign_up">
			<div class="sign_up_content">
				<div class="left_block">
					<form action="reg" method="post">
						@csrf
						<input name="name" value="{{ old('name') }}" type="text" class="input" placeholder="{{  __('messages.account55') }}">
						@if($errors->any() && $errors->first()[0]==1)
							<div class="errorMessage">{{  __('messages.error2') }}</div><br>
						@endif
						<input name="surname" value="{{ old('surname') }}" type="text" class="input" placeholder="{{  __('messages.account56') }}">
						@if($errors->any() && $errors->first()[2]==1)
							<div class="errorMessage">{{  __('messages.error3') }}</div><br>
						@endif
						<input name="phone" value="{{ old('phone') }}" type="text" class="input" placeholder="{{  __('messages.account57') }}">
						@if($errors->any() && $errors->first()[6]==1)
							<div class="errorMessage">{{  __('messages.error4') }}</div><br>
						@endif
						<!-- <input type="text" class="input" placeholder="{{  __('messages.account58') }}"> -->
						<input name="email" value="{{ old('email') }}" type="text" class="input" placeholder="Email">
						@if($errors->any() && $errors->first()[4]==1)
							<div class="errorMessage">{{  __('messages.error5') }}</div><br>
						@endif
						<input name="psw" type="password" class="input" placeholder="{{  __('messages.account47') }}">
						<input name="repsw" type="password" class="input" placeholder="{{  __('messages.account59') }}">
						@if($errors->any() && $errors->first()[8]==1)
							<div class="errorMessage">{{  __('messages.error6') }}</div><br>
						@endif
						
	
      					<br/>
						@if($errors->any() && $errors->first()[10]==1)
							<div class="errorMessage">{{  __('messages.error7') }}</div><br>
						@endif


					<!-- <div style="height:73px;background-color:#C4C4C4;">reCAPTCHA</div> -->
					<div class="link_line"> 
						<span>{{  __('messages.account60') }} <span>
						<a href="/{{app()->getLocale()}}/privacy_policy">{{  __('messages.account61') }}</a>  
					</div>
					<br>
					<div class="bla">
							<button class="btn_purple" style="border:none">
								{{  __('messages.account46') }} 
							</button>
					</div>
					<br>
					<div class="link_line"> 
						<span>{{  __('messages.account62') }}<span>
						<a href="/{{app()->getLocale()}}/sign_in">{{  __('messages.account48') }}</a>  
					</div>
					</form>
				</div>
				<div class="center_block center_block_height2">
					<div class="center_block_line"></div>
					<div class="center_block_line"></div>
				</div>
				<div class="right_block">
					<h2 style='text-align:center'>Тип аккаунта</h2><br>
					<a class='act act2' href="#"> Менеджер </a>
					<a class='act' href="#"> Торгующая организация </a>
					<a class='act' href="#"> Производитель </a>
				</div>
			</div>
		</div>
	</div>
</main>

@include('partial.footer')	
