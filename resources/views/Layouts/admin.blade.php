<!DOCTYPE html>
<html>
	<head>
		<title>Data Karyawan</title>

		@yield('css')
		@include('Includes.css')
		@stack('ttable')
	</head>
	<body class="bg-primary">
			
		@include('Includes.sidebar')
		<div class="w3-main" style="margin-left:340px;margin-right:40px">
			 <div class="w3-container" style="margin-top:80px" id="showcase">
				<div class="jumbotron" >
					<div class="marquee">
						<div id="marquee">
							<h1>Selamat datang di web data karyawan <h1>
						</div>
						</div>
						{{-- <div id="jam"></div> --}}
						
						<div class="waktu">
							<div class="kotak">
								<p id="jam"></p>
							</div>
							<div class="kotak">
								<p id="menit"></p>
							</div>
							<div class="kotak">
								<p id="detik"></p>
							</div>
						</div>
						<div id="date"></div>
				</div>
				
			@yield('content')
					 
					
			</div>
		</div>
	
	
		

	@include('Includes.script')
	
		

	@stack('table')
	@yield('js')
	</body>
</html>
