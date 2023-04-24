<footer>
    <!-- reclame block start -->
	@if($reclame[1]['link']!='') <a target='_blank' href="{{$reclame[1]['link']}}"> @endif
	{!! $reclame[1]['code'] !!}
	@if($reclame[1]['link']!='') </a> @endif
	<!-- reclame block finish -->
    <div class="inner_footer">
        <div class="footer_block left_side">
            <a href="{{route('contacts',['locale' => app()->getLocale()])}}" >{{  __('messages.menu4') }}</a>
            <a href="{{route('faq',['locale' => app()->getLocale()])}}">{{  __('messages.footer1') }}</a>
            <a href="/{{app()->getLocale()}}/privacy_policy#0">{{  __('messages.footer2') }}</a>
            <a href="/{{app()->getLocale()}}/privacy_policy#1">{{  __('messages.footer3') }}</a>
            <a href="/{{app()->getLocale()}}/privacy_policy#2">{{  __('messages.footer4') }}</a>
        </div>
        <div class="footer_block center">
            <div class="footer_phone">
                <img src="/logos/phone.svg">
                <a href="tel:+{{preg_replace('/[^0-9.]/', '', $ct->phone)}}">{{$ct->phone}}</a> 
            </div>
            <div class="footer_mail">
                <a href="mailto:{{$ct['email']}}">
                    <img src="/logos/mail.svg">
                    <span>{{$ct['email']}}</span>
                </a>
            </div>
            <div class="footer_social_network">
                <!-- <a target="_blank" href="{{$ct->fb}}"><img src="/logos/fb.svg"></a> -->
                <a target="_blank" href="{{$ct->insta}}"><img src="/logos/insta.svg"></a>
                <a target="_blank" href="{{$ct->youtube}}"><img src="/logos/telegram.png"></a>
            </div>
        </div>
        <div class="footer_block right_side">
            <p>{{  __('messages.footer5') }}</p>
            <div class="footer_form">
                <input type="text" placeholder="{{  __('messages.footer6') }}" class="footer_input">
                <button>{{  __('messages.footer7') }}</button>
                <div class='emm'>{{  __('messages.error8') }}</div>
                <div class='emm2'>{{  __('messages.error9') }}</div>
                <div class='smm'>{{  __('messages.error10') }}</div>
        </div>
        </div>
        <p class="clear"></p>
         <div class="page_info">
            <div class="wedo">{{  __('messages.footer8') }} <a target='_blank' href='https://thescorp.io/' class='nostyle'>TheScorp.io</a></div>
            <div class="ardi">© <?=date("Y")?> Zayavka-Rossia.Ru | {{  __('messages.footer9') }}</div>
        </div>
    </div>
</footer>
<script type="text/javascript" src='{{asset("js/jquery.min.js")}}'></script>
<script src='{{asset("js/slick.min.js")}}'></script>
<?php if(file_exists("js/".$page.".js")){ ?>
<script type="text/javascript" src='{{asset("js/$page.js")}}'></script>
<?php } ?>
<script type="text/javascript" src='{{asset("js/script.js")}}'></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-637f667c89bf8466"></script>
</body>
</html>