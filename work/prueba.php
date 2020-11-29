<html class="" lang="en"><head>

  <meta charset="UTF-8">
  <title>CodePen Demo</title>

  <meta name="robots" content="noindex">

  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
  <link rel="canonical" href="https://codepen.io/nxworld/pen/OyRrGy">
  
  
  

  <style class="INLINE_PEN_STYLESHEET_ID">
    @import url(https://fonts.googleapis.com/css?family=Josefin+Sans:300,400);
* {
  margin: 0;
  padding: 0;
}
html, body {
  height: 100%;
}
section {
  position: relative;
  width: 100%;
  height: 100%;
}
section::after {
  position: absolute;
  bottom: 0;
  left: 0;
  content: '';
  width: 100%;
  height: 80%;
  background: -webkit-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,.8) 80%,rgba(0,0,0,.8) 100%);
  background: linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.8) 80%,rgba(0,0,0,.8) 100%);
}
section h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color: #fff;
  font : normal 300 64px/1 'Josefin Sans', sans-serif;
  text-align: center;
  white-space: nowrap;
}

#section01 { background: url(https://picsum.photos/1200/800?image=575) center center / cover no-repeat;}
#section02 { background: url(https://picsum.photos/1200/800?image=1016) center center / cover no-repeat;}
#section03 { background: url(https://picsum.photos/1200/800?image=869) center center / cover no-repeat;}
#section04 { background: url(https://picsum.photos/1200/800?image=506) center center / cover no-repeat;}
#section05 { background: url(https://picsum.photos/1200/800?image=1037) center center / cover no-repeat;}
#section06 { background: url(https://picsum.photos/1200/800?image=901) center center / cover no-repeat;}
#section07 { background: url(https://picsum.photos/1200/800?image=675) center center / cover no-repeat;}
#section08 { background: url(https://picsum.photos/1200/800?image=1050) center center / cover no-repeat;}
#section09 { background: url(https://picsum.photos/1200/800?image=902) center center / cover no-repeat;}
#section10 { background: url(https://picsum.photos/1200/800?image=516) center center / cover no-repeat;}

#thanks {
  background-color: #fff;
}
#thanks::after {
  content: none;
}
#thanks div {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
#thanks h2 {
  margin-bottom: 60px;
  color: #333;
  font : normal 300 64px/1 'Josefin Sans', sans-serif;
  text-align: center;
  white-space: nowrap;
}
#thanks p {
  color: #333;
  font : normal 400 20px/1 'Josefin Sans', sans-serif;
}
#thanks p a {
  color: #333;
  text-decoration: none;
  transition: color .3s;
}
#thanks p a:hover {
  color: #888;
}
.demo a {
  position: absolute;
  bottom: 20px;
  left: 50%;
  z-index: 2;
  display: inline-block;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  color: #fff;
  font : normal 400 20px/1 'Josefin Sans', sans-serif;
  letter-spacing: .1em;
  text-decoration: none;
  transition: opacity .3s;
}
.demo a:hover {
  opacity: .5;
}



#section01 a {
  padding-top: 60px;
}
#section01 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}



#section02 a {
  padding-top: 60px;
}
#section02 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 46px;
  height: 46px;
  margin-left: -23px;
  border: 1px solid #fff;
  border-radius: 100%;
  box-sizing: border-box;
}
#section02 a span::after {
  position: absolute;
  top: 50%;
  left: 50%;
  content: '';
  width: 16px;
  height: 16px;
  margin: -12px 0 0 -8px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}



#section03 a {
  padding-top: 60px;
}
#section03 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 46px;
  height: 46px;
  margin-left: -23px;
  border: 1px solid #fff;
  border-radius: 100%;
  box-sizing: border-box;
}
#section03 a span::after {
  position: absolute;
  top: 50%;
  left: 50%;
  content: '';
  width: 16px;
  height: 16px;
  margin: -12px 0 0 -8px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}
#section03 a span::before {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  content: '';
  width: 44px;
  height: 44px;
  box-shadow: 0 0 0 0 rgba(255,255,255,.1);
  border-radius: 100%;
  opacity: 0;
  -webkit-animation: sdb03 3s infinite;
  animation: sdb03 3s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb03 {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  60% {
    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes sdb03 {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  60% {
    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}



#section04 a {
  padding-top: 60px;
}
#section04 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb04 2s infinite;
  animation: sdb04 2s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb04 {
  0% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
  }
  20% {
    -webkit-transform: rotate(-45deg) translate(-10px, 10px);
  }
  40% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
  }
}
@keyframes sdb04 {
  0% {
    transform: rotate(-45deg) translate(0, 0);
  }
  20% {
    transform: rotate(-45deg) translate(-10px, 10px);
  }
  40% {
    transform: rotate(-45deg) translate(0, 0);
  }
}



#section05 a {
  padding-top: 70px;
}
#section05 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb05 1.5s infinite;
  animation: sdb05 1.5s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb05 {
  0% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: rotate(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}
@keyframes sdb05 {
  0% {
    transform: rotate(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: rotate(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}



#section06 a {
  padding-top: 70px;
}
#section06 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg);
  -webkit-animation: sdb06 1.5s infinite;
  animation: sdb06 1.5s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb06 {
  0% {
    -webkit-transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}
@keyframes sdb06 {
  0% {
    transform: rotateY(0) rotateZ(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: rotateY(720deg) rotateZ(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}



#section07 a {
  padding-top: 80px;
}
#section07 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb07 2s infinite;
  animation: sdb07 2s infinite;
  opacity: 0;
  box-sizing: border-box;
}
#section07 a span:nth-of-type(1) {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
}
#section07 a span:nth-of-type(2) {
  top: 16px;
  -webkit-animation-delay: .15s;
  animation-delay: .15s;
}
#section07 a span:nth-of-type(3) {
  top: 32px;
  -webkit-animation-delay: .3s;
  animation-delay: .3s;
}
@-webkit-keyframes sdb07 {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes sdb07 {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}



#section08 a {
  padding-top: 60px;
}
#section08 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 30px;
  height: 50px;
  margin-left: -15px;
  border: 2px solid #fff;
  border-radius: 50px;
  box-sizing: border-box;
}
#section08 a span::before {
  position: absolute;
  top: 10px;
  left: 50%;
  content: '';
  width: 6px;
  height: 6px;
  margin-left: -3px;
  background-color: #fff;
  border-radius: 100%;
  box-sizing: border-box;
}



#section09 a {
  padding-top: 80px;
}
#section09 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 30px;
  height: 50px;
  margin-left: -15px;
  border: 2px solid #fff;
  border-radius: 50px;
  box-sizing: border-box;
}
#section09 a span::before {
  position: absolute;
  top: 10px;
  left: 50%;
  content: '';
  width: 6px;
  height: 6px;
  margin-left: -3px;
  background-color: #fff;
  border-radius: 100%;
  box-sizing: border-box;
}
#section09 a span::after {
  position: absolute;
  bottom: -18px;
  left: 50%;
  width: 18px;
  height: 18px;
  content: '';
  margin-left: -9px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}



#section10 a {
  padding-top: 60px;
}
#section10 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 30px;
  height: 50px;
  margin-left: -15px;
  border: 2px solid #fff;
  border-radius: 50px;
  box-sizing: border-box;
}
#section10 a span::before {
  position: absolute;
  top: 10px;
  left: 50%;
  content: '';
  width: 6px;
  height: 6px;
  margin-left: -3px;
  background-color: #fff;
  border-radius: 100%;
  -webkit-animation: sdb10 2s infinite;
  animation: sdb10 2s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb10 {
  0% {
    -webkit-transform: translate(0, 0);
    opacity: 0;
  }
  40% {
    opacity: 1;
  }
  80% {
    -webkit-transform: translate(0, 20px);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes sdb10 {
  0% {
    transform: translate(0, 0);
    opacity: 0;
  }
  40% {
    opacity: 1;
  }
  80% {
    transform: translate(0, 20px);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
  </style>

  
<script src="https://static.codepen.io/assets/editor/iframe/iframeConsoleRunner-7f4d47902dc785f30dedcac9c996b9f31d4dfcc33567cc48f0431bc918c2bf05.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRuntimeErrors-29f059e28a3c6d3878960591ef98b1e303c1fe1935197dae7797c017a3ca1e82.js"></script>

</head>

<body>
  <section id="section01" class="demo">
	<h1>Scroll Down Button #1</h1>
	<a href="#section02"><span></span>Scroll</a>
</section>
<section id="section02" class="demo">
	<h1>Scroll Down Button #2</h1>
	<a href="#section03"><span></span>Scroll</a>
</section>
<section id="section03" class="demo">
	<h1>Scroll Down Button #3</h1>
	<a href="#section04"><span></span>Scroll</a>
</section>
<section id="section04" class="demo">
	<h1>Scroll Down Button #4</h1>
	<a href="#section05"><span></span>Scroll</a>
</section>
<section id="section05" class="demo">
	<h1>Scroll Down Button #5</h1>
	<a href="#section06"><span></span>Scroll</a>
</section>
<section id="section06" class="demo">
	<h1>Scroll Down Button #6</h1>
	<a href="#section07"><span></span>Scroll</a>
</section>
<section id="section07" class="demo">
	<h1>Scroll Down Button #7</h1>
	<a href="#section08"><span></span><span></span><span></span>Scroll</a>
</section>
<section id="section08" class="demo">
	<h1>Scroll Down Button #8</h1>
	<a href="#section09"><span></span>Scroll</a>
</section>
<section id="section09" class="demo">
	<h1>Scroll Down Button #9</h1>
	<a href="#section10"><span></span>Scroll</a>
</section>
<section id="section10" class="demo">
	<h1>Scroll Down Button #10</h1>
	<a href="#thanks"><span></span>Scroll</a>
</section>
<section id="thanks">
	<div>
		<h2>Thanks!</h2>
		<p><a href="https://www.nxworld.net/tips/css-scroll-down-button.html" target="_parent">&lt; Back To Article</a></p>
	</div>
</section>
  
  
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script id="INLINE_PEN_JS_ID">
    $(function () {
  $('a[href*=#]').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 500, 'linear');
  });
});
    //# sourceURL=pen.js
  </script>


</body></html>