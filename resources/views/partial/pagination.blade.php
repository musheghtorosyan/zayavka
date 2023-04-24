@if($pageCount>1)
<div class="pagination_bock">
    @if($thisPage!=1)
        @if($pageCount>3)
        <a href="/params/thisPage/1" class="button_1 icon_left_arrows"><<</a>
        @endif
        <a href="/params/thisPage/{{$thisPage-1}}" class="button_1 icon_left_arrow"><</a>
    @endif

    <a href="/params/thisPage/1" @if(1 == $thisPage) class="current_page" @endif>1</a>
    @if($thisPage-2>1)
        <a>..</a>
    @endif
    @for($i=1; $i<=$pageCount; $i++)
        @if($i>=$thisPage-1 && $i<=$thisPage+1 && $i!=1 && $i!=$pageCount)
            <a href="/params/thisPage/{{$i}}" @if($i == $thisPage) class="current_page" @endif>{{$i}}</a>
        @endif
    @endfor
    @if($thisPage+2<$pageCount)
        <a>..</a>
    @endif
    <a href="/params/thisPage/{{$pageCount}}" @if($pageCount == $thisPage) class="current_page" @endif>{{$pageCount}}</a>
    
    @if($thisPage!=$pageCount)
        <a href="/params/thisPage/{{$thisPage+1}}" class="button_1 icon_right_arrow">></a>
        @if($pageCount>3)
        <a href="/params/thisPage/{{$pageCount}}" class="button_1 icon_right_arrows">>></a>
        @endif
    @endif
    <p class="clear"></p>
</div>
@endif

<style>
    .pagination_bock{
	margin-top: -10px;
	box-sizing: border-box;
	width: 100%;
	margin-bottom: 60px;
}
.pagination_bock a{
	color: #999;
	text-decoration: none;
	text-align: center;
	width: 42px;
	box-sizing: border-box;
	padding: 8px 16px;
	display: block;
	height: 42px;
	float: left;
	margin-right: 4px;
}
.pagination_bock .button_1:hover{
	/* background-color: #ccc; */
    font-weight:bold;
}
.current_page{
	color: darkorange !important;
}
</style>