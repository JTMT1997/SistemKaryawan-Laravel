<!DOCTYPE html>
<html>
	<head>
		<title>Data Karyawan</title>
		<style>
			td.details-control {
				background: url('https://datatables.net/examples/resources/details_open.png') no-repeat center center;
				cursor: pointer;
			}
			tr.shown td.details-control {
				background: url('https://datatables.net/examples/resources/details_close.png') no-repeat center center;
			}
			.marquee{padding:0 20px;width:100%;background:#fff;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;-webkit-box-shadow:2px 2px 3px rgba(0,0,0,.05);-o-box-shadow:2px 2px 3px rgba(0,0,0,.05);-ms-box-shadow:2px 2px 3px rgba(0,0,0,.05);box-shadow:2px 2px 3px rgba(0,0,0,.05)}
#marquee{padding:10px 0;width:100%;overflow:hidden;color: #333;font-size: 14px;font-weight: 500;}
/*]]>*/


#jam span {
   float: left;
   text-align: center;
   font-size: 40px;
  
   width: 10%;
   border-radius: 10px;
   box-sizing: border-box;
}

#jam::after {
   content: "";
   display: block;
   clear: both;
}

span.turn {
   animation: turn 0.7s ease;
}

@keyframes turn {
   0% {transform: rotateX(0deg)}
   100% {transform: rotateX(360deg)}
}
		</style>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	</head>
	<body class="bg-primary">
		
		<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
			<a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
			<div class="w3-container">
			
			</div>
			<div class="w3-bar-block">
				
				<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
					<li class="nav-item">
						<a class="nav-link active" href="{{url('karyawan')}}">
							<i class="fa fa-user w3-xxlarge "> Karyawan</i>
						</a>
					</li>
				
					<li class="nav-item">
						<a class="nav-link " href="{{url('status')}}">
							<i class="fas fa-info w3-xxlarge "> Status</i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('posisi')}}">
							<i class="fas fa-search-plus w3-xxlarge "> Posisi</i>

						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('pendidikan')}}">
							<i class="fas fa-university w3-xxlarge "> Pendidikan</i>
						</a>
					</li>
					<form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
						@csrf
						  <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 bg-secondary"
						  type="submit">
							<p style="color: black;">Keluar</p>
						  </button>
						</form>

					
				</ul>
				
			</div>
		</nav>
		<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
			<a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
			<span>

			</span>
		</header>
		<div class="w3-main" style="margin-left:340px;margin-right:40px">
			 <div class="w3-container" style="margin-top:80px" id="showcase">
				<div class="jumbotron" >
					<div class="marquee">
						<div id="marquee">
							<h1>Selamat datang di web data karyawan <h1>
						</div>
						</div>
						<div id="jam"></div>
						<div id="date"></div>
				</div>
				
			@yield('content')
					 
					
			</div>
		</div>
		
		<script type="text/javascript">
			
		</script>
		<script src="https://kit.fontawesome.com/5ac1dba0a5.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		<script >
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );
		</script>
		{{-- <script>
			function format ( d ) {
					// `d` is the original data object for the row
					return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
						'<tr>'+
							'<td>Tempat Lahir:</td>'+
							'<td>'+d.slug+'</td>'+
						'</tr>'+
						'<tr>'+
							'<td>Tempat Lahir:</td>'+
							'<td>'+d.status_id+'</td>'+
						'</tr>'+
						// '<tr>'+
						// 	'<td>Tanggal Masuk:</td>'+
						// 	'<td>'+d.extn+'</td>'+
						// '</tr>'+
						// '<tr>'+
						// 	'<td>Status:</td>'+
						// 	'<td>'+d.extn+'</td>'+
						// '</tr>'+
						
						
					'</table>';
				}
				
				$(document).ready(function() {
					var table = $('#myTable').DataTable( {
						"data": @json($karyawan, JSON_PRETTY_PRINT),
						"columns": [
							{
								"className":      'details-control',
								"orderable":      false,
								"data":           null,
								"defaultContent": ''
							},
							{ "data": "id" },
							{ "data": "nama" },
							{ "data": "umur" },
							{ "data": "jenis_kelamin" },
							{ "data": "alamat" },
							{ "data": "email" },
							{ "data": "no_telp" },
							{ "data": "ttl" },
							{ "data": "tgl_masuk"}
							
						],
						"order": [[1, 'asc']]
					} );
					
					// Add event listener for opening and closing details
					$('#myTable tbody').on('click', 'td.details-control', function () {
						var tr = $(this).closest('tr');
						var row = table.row( tr );
				
						if ( row.child.isShown() ) {
							// This row is already open - close it
							row.child.hide();
							tr.removeClass('shown');
						}
						else {
							// Open this row
							row.child( format(row.data()) ).show();
							tr.addClass('shown');
						}
					} );
				} );
		</script> --}}
		<script>
			// Script to open and close sidebar
			function w3_open() {
			  document.getElementById("mySidebar").style.display = "block";
			  document.getElementById("myOverlay").style.display = "block";
			}
			 
			function w3_close() {
			  document.getElementById("mySidebar").style.display = "none";
			  document.getElementById("myOverlay").style.display = "none";
			}
			
			// Modal Image Gallery
			function onClick(element) {
			  document.getElementById("img01").src = element.src;
			  document.getElementById("modal01").style.display = "block";
			  var captionText = document.getElementById("caption");
			  captionText.innerHTML = element.alt;
			}
			</script>

			<script type='text/javascript'>
	//<![CDATA[
	!function(e){e.fn.marquee=function(t){return this.each(function(){var i,a,n,r,s,o=e.extend({},e.fn.marquee.defaults,t),u=e(this),d=3,p="animation-play-state",f=!1,l=function(e,t,i){for(var a=["webkit","moz","MS","o",""],n=0;n<a.length;n++)a[n]||(t=t.toLowerCase()),e.addEventListener(a[n]+t,i,!1)},c=function(e){var t,i=[];for(t in e)e.hasOwnProperty(t)&&i.push(t+":"+e[t]);return i.push(),"{"+i.join(",")+"}"},m={pause:function(){f&&o.allowCss3Support?i.css(p,"paused"):e.fn.pause&&i.pause(),u.data("runningStatus","paused"),u.trigger("paused")},resume:function(){f&&o.allowCss3Support?i.css(p,"running"):e.fn.resume&&i.resume(),u.data("runningStatus","resumed"),u.trigger("resumed")},toggle:function(){m["resumed"==u.data("runningStatus")?"pause":"resume"]()},destroy:function(){clearTimeout(u.timer),u.css("visibility","hidden").html(u.find(".js-marquee:first")),setTimeout(function(){u.css("visibility","visible")},0)}};if("string"==typeof t)e.isFunction(m[t])&&(i||(i=u.find(".js-marquee-wrapper")),!0===u.data("css3AnimationIsSupported")&&(f=!0),m[t]());else{var g;e.each(o,function(e){if(g=u.attr("data-"+e),"undefined"!=typeof g){switch(g){case"true":g=!0;break;case"false":g=!1}o[e]=g}}),o.duration=o.speed||o.duration,r="up"==o.direction||"down"==o.direction,o.gap=o.duplicated?o.gap:0,u.wrapInner('<div class="js-marquee"></div>');var h=u.find(".js-marquee").css({"margin-right":o.gap,"float":"left"});if(o.duplicated&&h.clone(!0).appendTo(u),u.wrapInner('<div style="width:100000px" class="js-marquee-wrapper"></div>'),i=u.find(".js-marquee-wrapper"),r){var v=u.height();i.removeAttr("style"),u.height(v),u.find(".js-marquee").css({"float":"none","margin-bottom":o.gap,"margin-right":0}),o.duplicated&&u.find(".js-marquee:last").css({"margin-bottom":0});var y=u.find(".js-marquee:first").height()+o.gap;o.duration*=(parseInt(y,10)+parseInt(v,10))/parseInt(v,10)}else s=u.find(".js-marquee:first").width()+o.gap,a=u.width(),o.duration*=(parseInt(s,10)+parseInt(a,10))/parseInt(a,10);if(o.duplicated&&(o.duration/=2),o.allowCss3Support){var h=document.body||document.createElement("div"),w="marqueeAnimation-"+Math.floor(1e7*Math.random()),S=["Webkit","Moz","O","ms","Khtml"],x="animation",b="",q="";if(h.style.animation&&(q="@keyframes "+w+" ",f=!0),!1===f)for(var j=0;j<S.length;j++)if(void 0!==h.style[S[j]+"AnimationName"]){h="-"+S[j].toLowerCase()+"-",x=h+x,p=h+p,q="@"+h+"keyframes "+w+" ",f=!0;break}f&&(b=w+" "+o.duration/1e3+"s "+o.delayBeforeStart/1e3+"s infinite "+o.css3easing,u.data("css3AnimationIsSupported",!0))}var I=function(){i.css("margin-top","up"==o.direction?v+"px":"-"+y+"px")},C=function(){i.css("margin-left","left"==o.direction?a+"px":"-"+s+"px")};o.duplicated?(r?i.css("margin-top","up"==o.direction?v:"-"+(2*y-o.gap)+"px"):i.css("margin-left","left"==o.direction?a+"px":"-"+(2*s-o.gap)+"px"),d=1):r?I():C();var A=function(){if(o.duplicated&&(1===d?(o._originalDuration=o.duration,o.duration=r?"up"==o.direction?o.duration+v/(y/o.duration):2*o.duration:"left"==o.direction?o.duration+a/(s/o.duration):2*o.duration,b&&(b=w+" "+o.duration/1e3+"s "+o.delayBeforeStart/1e3+"s "+o.css3easing),d++):2===d&&(o.duration=o._originalDuration,b&&(w+="0",q=e.trim(q)+"0 ",b=w+" "+o.duration/1e3+"s 0s infinite "+o.css3easing),d++)),r?o.duplicated?(d>2&&i.css("margin-top","up"==o.direction?0:"-"+y+"px"),n={"margin-top":"up"==o.direction?"-"+y+"px":0}):(I(),n={"margin-top":"up"==o.direction?"-"+i.height()+"px":v+"px"}):o.duplicated?(d>2&&i.css("margin-left","left"==o.direction?0:"-"+s+"px"),n={"margin-left":"left"==o.direction?"-"+s+"px":0}):(C(),n={"margin-left":"left"==o.direction?"-"+s+"px":a+"px"}),u.trigger("beforeStarting"),f){i.css(x,b);var t=q+" { 100%  "+c(n)+"}",p=e("style");0!==p.length?p.filter(":last").append(t):e("head").append("<style>"+t+"</style>"),l(i[0],"AnimationIteration",function(){u.trigger("finished")}),l(i[0],"AnimationEnd",function(){A(),u.trigger("finished")})}else i.animate(n,o.duration,o.easing,function(){u.trigger("finished"),o.pauseOnCycle?u.timer=setTimeout(A,o.delayBeforeStart):A()});u.data("runningStatus","resumed")};u.bind("pause",m.pause),u.bind("resume",m.resume),o.pauseOnHover&&u.bind("mouseenter mouseleave",m.toggle),f&&o.allowCss3Support?A():u.timer=setTimeout(A,o.delayBeforeStart)}})},e.fn.marquee.defaults={allowCss3Support:!0,css3easing:"linear",easing:"linear",delayBeforeStart:1e3,direction:"left",duplicated:!1,duration:5e3,gap:20,pauseOnCycle:!1,pauseOnHover:!1}}(jQuery);
	$("#marquee").marquee({duration:1e4,gap:1000,delayBeforeStart:0,direction:"left",duplicated:!0,pauseOnHover:!0});
	//]]>
	</script>
			
	<script>
		function animation(span) {
   span.className = "turn";
   setTimeout(function () {
      span.className = ""
   }, 1000);
}

function jam() {
   setInterval(function () {

      var waktu = new Date();
      var jam   = document.getElementById('jam');
      var hours = waktu.getHours();
      var minutes = waktu.getMinutes();
      var seconds = waktu.getSeconds();

      if (waktu.getHours() < 10)
      {
         hours = '0' + waktu.getHours();
      }
      if (waktu.getMinutes() < 10)
      {
         minutes = '0' + waktu.getMinutes();
      }
      if (waktu.getSeconds() < 10)
      {
         seconds = '0' + waktu.getSeconds();
      }
      jam.innerHTML  = '<span>' + hours + '</span>'
                     + '<span>' + minutes + '</span>'
                     + '<span>' + seconds +'</span>';

      var spans      = jam.getElementsByTagName('span');
      animation(spans[2]);
      if (seconds == 0) animation(spans[1]);
      if (minutes == 0 && seconds == 0) animation(spans[0]);

   }, 1000);
}

jam();


function  date() {
                 
				 var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
				 var date = new Date();
				 var day = date.getDate();
				 var month = date.getMonth();
				 var year = date.getFullYear();
				  
				 document.getElementById("date").innerHTML =" " + day + " " + months[month]+" "+year;
				 }
				 date();

	</script>
	</body>
</html>
