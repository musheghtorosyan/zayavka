<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href='{{asset("css/slick.css")}}'>
  <link rel="stylesheet" type="text/css" href='{{asset("css/slick-theme.css")}}'>
  <style type="text/css">
    @font-face {
        font-family: Montserrat-Regular;
        src: url('../fonts/Montserrat-Regular.ttf');
    }
    @font-face {
        font-family: Montserrat-Medium;	
        src: url('../fonts/Montserrat-Medium.ttf');
        src: url('../fonts/Montserrat-Medium.otf');
    }
    @font-face {
        font-family: Montserrat-Bold;
        src: url('../fonts/Montserrat-Bold.ttf');
    }
    * {
      box-sizing: border-box;
    }
    html {
    }
    body {
      margin: 0;
      overflow: hidden;
    }
    .slider {
        width: 100%;
        height: 800px;
        margin: 0 auto;
        overflow: hidden;
    }
    .slick-slide {
/*      margin: 0px 20px;*/
      margin: 0px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
    .slideBox {
      height: 800px;
      background-size: cover;
      background-position: center;
    }
    .btn_purple {
        text-align: center;
        font-size: 18px;
        padding-top: 14px;
        padding-bottom: 14px;
        padding-left: 40px;
        padding-right: 40px;
        box-sizing: border-box;
        color: #FEFEFE;
        background: #FF571F;
        font-weight: bold;
        font-family: Montserrat-Bold;
        border-radius: 25px;
        cursor: pointer;
        text-decoration: none;
    }
    .trb {
        width:94%;
        max-width: 800px;
        margin: 40px auto;
        background-color: rgba(0,0,0,0.5);
        padding:40px;
        box-sizeing: border-box;
        color: white;
        text-align: center;
    }
    .trb h1 {
        font-size: 48px;
        margin-bottom: 30px;
        margin-top:0;
    }
    .trb p {
        font-size: 18px;
        margin-bottom: 50px
    }
    .smallsl {
        display:none;
    }
    @media (max-width:960px) {
        .slider {
            height: 400px;
        }
        .slideBox {
            height: 400px;
        }
        .smallsl {
            display:block;
        }
        .bigsl {
            display:none;
        }
        .trb h1 {
            font-size: 24px;
            margin-bottom: 20px;
            margin-top:0;
        }
        .trb p {
            font-size: 16px;
            margin-bottom: 30px
        }
    }
  </style>
</head>
<body>


  <section class="regular slider bigsl">
    @foreach($slides as $slide)
    <div style='background-image:url("/storage/{{$slide["pic"]}}")' class='slideBox'>
    <div class='trb'>
        <h1>{{$slide[$l.'_title']}}</h1>
	    <p>{{$slide[$l.'_short']}}</p>
		<a href="{{$slide['link']}}" class='btn_purple'>{{$slide[$l.'_btn']}}</a>
    </div>	
    </div>
	@endforeach
  </section>

  <section class="regular slider smallsl">
    @foreach($slides as $slide)
    <div style='background-image:url("/storage/{{$slide["pic2"]}}")' class='slideBox'>
    <div class='trb'>
        <h1>{{$slide[$l.'_title']}}</h1>
	    <p>{{$slide[$l.'_short']}}</p>
		<a href="{{$slide['link']}}" class='btn_purple'>{{$slide[$l.'_btn']}}</a>
    </div>	
    </div>
	@endforeach
  </section>




  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src='{{asset("js/slick.js")}}' type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    });
</script>

</body>
</html>
