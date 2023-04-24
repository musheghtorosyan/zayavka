<div class="guides">
				<div class="guide guide_activ">
					<a href="/{{app()->getLocale()}}/profile_console">
						<img src="/logos/settings2.svg" alt="settings">
						<span>{{  __('messages.account2') }}</span>
					</a>
				</div>
				<div class="guide">
					<a href="/{{app()->getLocale()}}/profile_orders">
						<img src="/logos/shopping-bag.svg" alt="shopping-bag">
						<span> Мои {{  __('messages.account3') }}</span>
					</a>
				</div>

				<div class="guide">
					<a href="/{{app()->getLocale()}}/profile_news">
						<img src="/logos/shopping-bag.svg" alt="shopping-bag">
						<span>Мои Новости</span>
					</a>
				</div>

				<div class="guide">
					<a href="/{{app()->getLocale()}}/profile_reqs">
						<img src="/logos/shopping-bag.svg" alt="shopping-bag">
						<span>Мои Заявки</span>
					</a>
				</div>

				<div class="guide">
					<a href="/{{app()->getLocale()}}/profile_sales">
						<img src="/logos/shopping-bag.svg" alt="shopping-bag">
						<span>Мои Акции</span>
					</a>
				</div>


				<div class="guide">
					<a href="/{{app()->getLocale()}}/profile_profile">
						<img src="/logos/profile.svg" alt="profile">
						<span>{{  __('messages.account5') }}</span>
					</a>
				</div>
				<div class="guide">
					<a href="logout">
						<img src="/logos/logout.svg" alt="logout">
						<span>{{  __('messages.account6') }}</span>
					</a>
				</div>
			</div>