<!DOCTYPE html>
<html>
<head>
	<title>Web Monitoring</title> <!-- Elemen yang berfungsi menampilkan judul -->
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="shortcut icon" type="text/css" href="assets/img/galaxy3.png"> <!-- Menambahkan gambar pada bagian konten pengantar atau pembuka -->

	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--  Mengatur agar pengguna dapat melihat halaman website pada mobile device -->

	<!-- panggil file jquery untuk proses realtime -->
	<script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Untuk proses grafik -->

	<!-- Membuat adanya hubungan antara file index.php dengan website fonts.googleapis.com dari luar eksternal -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap">

	<!-- ajax untuk realtime -->
    <script type="text/javascript">
        $(document).ready( function() {
            setInterval( function() {
                $("#oxygen").load('bacaoxygen');
				$("#heartrate").load('bacaheartrate');
				$("#suhu").load('bacasuhu');
				$("#kelembaban").load('bacakelembaban');
				$("#grafik-suhu").load('bacagrafik/suhu');
                $("#grafik-kelembaban").load('bacagrafik/kelembaban');
				$("#grafik-heartrate").load('bacagrafik/heartrate');
				$("#grafik-oxygen").load('bacagrafik/oxygen');
            }, 1000); //1000ms= 1s
        });
    </script>
	
</head>
<body>
	<header>
		<!-- Menerapkan Box Model pada Halaman Profil -->
		<div class="jumbotron">
			<h1>Sleep Condition and Room Monitoring System Based on IoT</h1>
			<p>This monitoring system is designed to monitor a patient or someone who is sleeping. The purpose of monitoring is to obtain information on a person's sleep condition and health in the bedroom. The system is designed in the form of 3 devices, each of which aims to monitor sleep conditions, a person's health and the bedroom.</p> <!-- Elemen <p> digunakan untuk membuat paragraf -->
		</div>
		<nav>
			<!-- Menerapkan Anchor pada Navigasi Halaman Profil -->
			<ul>
		       <li><a href="#Nilai">Value</a></li> <!-- Nilai href berupa tanda pagar (#) diikuti dengan id elemen untuk mengarahkan tampilan pada elemen sesuai id yang ditentukan (masih dalam satu halaman).  -->
		       <li><a href="#Grafik">Chart</a></li>
		       <li><a href="#Pengembang">Developer</a></li>
		       <li><a href="logout.php">Logout</a></li><!-- Nilai href dapat berupa sebuah URL untuk mengarahkan ke sebuah halaman yang berbeda -->
			</ul>
		</nav>
	</header>
	<main class="main">
		<div class="content"> <!-- Pada <div> ini digunakan dalam membantu penyusunan tata letak (layouting) menggunakan CSS. -->
			<article class="card"> <!-- Elemen yang bertindak sebagai container untuk tanggal dan waktu-->
				<h2 class="tgl hdua">Date/Time: <span id="tanggalwaktu"></span></h2>
			</article> 
			<article id="Nilai" class="card"> <!-- Elemen yang bertindak sebagai container untuk nilai pengukuran sensor dan status-->
				<h2 class="hdua">Sensor Values and Status</h2>

				<!-- ****************************** Tabel 1 ****************************** -->
				<table class="sheet">	
					<tr> <!-- Elemen <tr> digunakan untuk membuat sebuah baris baru yang di dalamnya terdapat elemen <td> atau <th> sehingga menghasilkan sebuah cell -->
						<!-- Elemen <th> atau 'table header' digunakan untuk menentukan sebuah header pada kolom datanya -->
						<th>Icon</th>
						<th>Parameter</th>
						<th>Value & Status</th>
					</tr>

					<tr>
						<td><img src="assets/img/blood.svg" alt="blood"></td> <!-- Elemen <td> yang berarti “table data” selain membuat cell elemen ini juga merupakan tempat di mana data pada tabel ditampung -->
						<td>Blood Rate:</td>	
					</tr>

					<tr>
						<td></td>
						<td>a) Systolic</td>
						<td><span id="sistol">NoValue</span></td>
					</tr>

					<tr>
						<td></td>
						<td> b) Diastolic</td>
						<td><span id="diastol">NoValue</span>
						<span>mmhg</span></td>
					</tr>

					<tr>
						<td><img src="assets/img/heart.svg" alt="heart"></td>
						<td>Heart Rate</td>	
						<td><span id="heartrate">NoFinger</span></td>
					</tr>

					<tr>
						<td><img src="assets/img/humidity.svg" alt="humidity"></td>	
						<td>Humidity</td>
						<td><span id="kelembaban">Nohumidity</span></td>
					</tr>

					<tr>
						<td><img src="assets/img/move.svg" alt="move"></td>
						<td>Movement</td>	
						<td><span id="gerakan">Nomove</span></td>
					</tr>

					<tr>
						<td><img src="assets/img/noise.svg" alt="noise"></td>
						<td>Noise</td>	
						<td><span id="suara">NoNoise</span></td>
					</tr>

					<tr>
						<td><img src="assets/img/o2.svg" alt="o2"></td>
						<td>Oxygen Saturation</td>	
						<td><span id="oxygen">NoFinger</span></td>
					</tr>

					<tr>
						<td><img src="assets/img/temperature.svg" alt="temperature"></td>
						<td>Room temperature</td>
						<td><span id="suhu">NoValue</span></td>
					</tr>
				</table>
				<br>

				<!-- ********************** Tabel 2 ********************** -->
				<h3 class="htiga">Note:</h3>
				<p class="paragraf">Results based on the research, the following are the status reference ranges:</p>
				<table class="sheettabel">
					<tr>
						<th>Parameter</th>
						<th>Range</th>
					</tr>
					<tr>
						<td colspan="2" class="blood"><pre>  1. Blood Rate:</pre>
						</td>	
					</tr>
					<tr >
						<td>
							<ol type="a">
							   <li>Systolic</li>
							</ol>
						</td>
						<td>
							<span class="green">Normal:</span>
							<br>
							value &#8804 129
							<span class="yellow">
							<br>
							High Normal:</span>
							<br>
						 	130 &#8804 	value &#8804 139
						 	<span class="red"><br>Hipertensi:</span>
							<br>
							value &#8805 140
						</td>
					</tr>

					<tr>
						<td>
							<ol type="a">
							   <li value="2">Diastolic</li>
							</ol>
						</td>
						<td>
							<span class="green">Normal:</span>
							<br>
							value &#8804 84
							<span class="yellow">
							<br>
							High Normal:</span>
							<br>
						 	85 &#8804 	value &#8804 89
						 	<span class="red"><br>Hipertensi:</span>
							<br>
							90 &#8804 	value &#8804 110
						</td>
					</tr>

					<tr>
						<td>2. Heart Rate:</td>	
						<td>
							<span class="green">Normal:</span> 
							<br>
							60 &#8804 value &#8804 100
							<br>
							<span class="yellow">High Normal:</span>
							<br>
							value &#062 100
							<br>
							<span class="red">Low:</span>
							<br>
							value &#060 60
						</td>
					</tr>

					<tr>
						<td>3. Humidity:</td>	
						<td>
							<span class="green">
							Normal:</span>
							<br>
							40 &#8804 value &#8804 60
							<br>
							<span class="yellow">Dry:</span>
							<br>
							1 &#060 value &#060 40
							<span class="red">
							<br>
							Moist:</span>
							<br>
							value &#062 60
						</td>
					</tr>

					<tr>
						<td>4. Noise:</td>	
						<td>
							<span class="green">Silent:</span>
							<br>
							1 &#060 value &#060 50
							<span class="yellow">
							<br>
							Moderate:</span> 
							<br>
							50 &#8804 value &#8804 59
							<span class="red">
							<br>
							Loud:</span>
							<br>
							value &#062 59
						</td>
					</tr>

					<tr>
						<td>5. Oxygen Saturation:</td>	
						<td>
							<span class="green">Normal:</span>
							<br>
							90 &#8804 value &#8804 100
							<br>
							<span class="yellow">Low:</span>
							<br>
						 	1 &#8804 value &#060 90
						 	<br>
						 	<span class="red">Error:</span>
							<br>
						 	value &#060 1 or value &#062 100
						</td>
					</tr>

					<tr>
						<td>6. Room Temperature:</td>
						<td>
							<span class="green">Ideal:</span>
							<br>
							21 &#8804 value &#8804 26
							<br>
							<span class="yellow">Cold:</span>
							<br>
							1 &#060 value &#060 21
							<br>
							<span class="red">Hot:</span>
							<br>
						    value &#062 26
						</td>
					</tr>
				</table>
			</article>
			<article id="Grafik" class="card "> <!-- Elemen yang bertindak sebagai container untuk nilai pengukuran sensor dalam bentuk grafik-->
				<div><h2 class="hdua">Sensor Charts</h2></div>
				<!-- Grafik Suhu -->
				<div>
					<h3>Grafik Suhu</h3>
					<canvas id="grafik-suhu"></canvas>
				</div>

				<div>
					<h3>Grafik Kelembaban</h3>
					<canvas id="grafik-kelembaban"></canvas>
				</div>

				<div>
					<h3>Grafik Heartrate</h3>
					<canvas id="grafik-heartrate"></canvas>
				</div>

				<div>
					<h3>Grafik Oxygen</h3>
					<canvas id="grafik-oxygen"></canvas>
				</div>
			</article>
		</div>

		<aside> <!-- Elemen <aside> dapat terletak di samping dari sebuah elemen yang menampungnya -->
			<article id="Pengembang" class="profile card">
				<header>
					<h2>Developer System</h2>
					<img class="box" src="assets/img/jhon.png" alt="index">
					<figure> <!-- Elemen ini digunakan untuk merepresentasikan konten tersendiri (self-contained content)  -->
						<figcaption>Developer</figcaption> <!-- Elemen <figcaption> sebagai sebuah caption (judul) untuk konten tersebut -->
					</figure>
				</header>
				<section> <!-- Sebuah elemen yang memiliki kesamaan konten dan memiliki sebuah heading di dalamnya dapat dikelompokkan dengan menggunakan elemen <section> -->
					<h4>Developer Information</h4>
					<table>
						<tr>
							<th>Name:</th>
							<td>Jhon Kitri Sianturi</td>
						</tr>
						<tr>
							<th>Position:</th>
							<td>Web Developer</td>
						</tr>
					</table>
					<br>
				</section>
			</article>
		</aside>
	</main>
	<footer>
		 <p>Sleep Condition and Room Monitoring System Based on IoT &#169; 2022, Group 9</p>	
	</footer>
	
</body>

<script>
	var tw = new Date();
	if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
	else (a=tw.getTime());
	tw.setTime(a);
	var tahun= tw.getFullYear ();
	var hari= tw.getDay ();
	var bulan= tw.getMonth ();
	var tanggal= tw.getDate ();
	var hariarray=new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Friday,","Saturday,");
	var bulanarray=new Array("January","February","March","April","May","June","July","Agust","September","October","November","December");
	document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun+" Time " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() + (" W.I.B ");
</script>

<!-- Selama id = date_time yang ada didalam <span> dan kode dibawah ini sinkron maka fitur live date and time akan berjalan dengan normal. -->

</html>