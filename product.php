<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="description" content="movie tickets purchase" />
		<meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
		<meta name="author" content="Ngoc Thang Nguyen" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 	<link rel="stylesheet" href="styles/style.css"/>
		<title>Product</title>
	</head>

	<body>
	
		<?php
			include_once ("header.inc");
			include_once ("menu.inc");
		?>

		<article>
			<section>
					<br />
					<h1 id="now_showing" class="headline">NOW SHOWING</h1>
					<br />

					<section class="column left">
						<!--Co Ba Sai Gon-->
						<table class="film_block">
							<tbody>
								<tr>
									<td rowspan="2"><img class="poster_image" src="images/CBSG.jpg" alt="Co Ba Sai Gon" /></td>
									<td class="caption_block">
										<p class="eng_caption">CO BA SAI GON</p>
										<p class="vi_caption"></p>
									</td>
								</tr>
								<tr>
									<td rowspan="2" class="film_intro">
										<ul>
											<li><strong>Running Time: </strong>140 minutes</li>
											<li><strong>Director: </strong>Tran Buu Loc, Kay Nguyen</li>
											<li><strong>Writer: </strong>Kay Nguyen</li>
											<li><strong>Stars: </strong>Van Hong, Diem My, Veronica Ngo</li>
											<li><strong>Nation: </strong>Vietnam<img class="flag" src="images/flag.png" alt="Vietnam flag"/></li>
										</ul>
										<p class="trailer">
											<a href="https://www.youtube.com/embed/C4J_9BJy6gY">TRAILER</a>
										</p>
										<p class="book">
											<a href="enquire.html">BOOK</a>
										</p>
										<button id="CBSG_trailer">TRAILER</button>
									</td>
								</tr>
								<tr>
									<td class="image_source">
										<p>Image source: <a href="https://vi.wikipedia.org/wiki/C%C3%B4_Ba_S%C3%A0i_G%C3%B2n#/media/File:C%C3%B4_Ba_S%C3%80I_G%C3%92N_-_%C3%81p-ph%C3%ADch_ch%C3%A1nh-th%E1%BB%A9c.jpg" target="_blank">click</a></p>
									</td>
								</tr>
							</tbody>
						</table>

						<!--Em chua 18-->
						<table class="film_block">
							<tbody>
								<tr>
									<td rowspan="2"><img class="poster_image" src="images/EC18.jpg" alt="Em Chua 18" /></td>
									<td class="caption_block">
										<p class="eng_caption">JAILBAT</p>
										<p class="vi_caption">Em chua 18</p>
									</td>
								</tr>
								<tr>
									<td rowspan="2" class="film_intro">
										<ul>
											<li><strong>Running Time: </strong>95 minutes</li>
											<li><strong>Director: </strong>Le Thanh Son</li>
											<li><strong>Producer: </strong>Charlie Nguyen</li>
											<li><strong>Stars: </strong>Kieu Minh Tuan, Kaity Nguyen, Will 365</li>
											<li><strong>Nation: </strong>Vietnam<img class="flag" src="images/flag.png" alt="Vietnam flag"/></li>
										</ul>
										<p class="trailer">
											<a href="https://www.youtube.com/embed/_affkHceSj4">TRAILER</a>
										</p>
										<p class="book">
											<a href="enquire.html">BOOK</a>
										</p>
										<button id="EC18_trailer">TRAILER</button>
									</td>
								</tr>
								<tr>
									<td class="image_source">
										<p>Image source: <a href="https://vi.wikipedia.org/wiki/Em_ch%C6%B0a_18#/media/File:Em_ch%C6%B0a_18_poster.jpg" target="_blank">click</a></p>
									</td>
								</tr>
							</tbody>
						</table>

						<!--Tam Cam chuyen chua ke-->
						<table class="film_block">
							<tbody>
								<tr>
									<td rowspan="2"><img class="poster_image" src="images/TC.jpg" alt="Tam Cam Chuyen Chua Ke" /></td>
									<td class="caption_block">
										<p class="eng_caption">TAM CAM: THE UNTOLD STORY</p>
							 			<p class="vi_caption">Tam Cam: Chuyen Chua Ke</p>
									</td>
								</tr>
								<tr>
									<td rowspan="2" class="film_intro">
										<ul>
											<li><strong>Running Time: </strong>109 minutes</li>
											<li><strong>Director: </strong>Ngo Thanh Van</li>
											<li><strong>Producer: </strong>Ngo Thanh Van, Tran Buu Loc</li>
											<li><strong>Stars: </strong>Van Hong, Diem My, Veronica Ngo</li>
											<li><strong>Nation: </strong>Vietnam<img class="flag" src="images/flag.png" alt="Vietnam flag"/></li>
										</ul>
									<!--	<p class="trailer">
											<a href="https://www.youtube.com/embed/sV0Dxq4EmhI">TRAILER</a>
										</p> -->
										<p class="book">
											<a href="enquire.html">BOOK</a>
										</p>
									</td>
								</tr>
								<tr>
									<td class="image_source">
										<p>Image source: <a href="https://vi.wikipedia.org/wiki/T%E1%BA%A5m_C%C3%A1m:_Chuy%E1%BB%87n_ch%C6%B0a_k%E1%BB%83#/media/File:Phimtamcam.jpg" target="_blank">click</a></p>
									</td>
								</tr>
							</tbody>
						</table>

						<!--Co gai den tu hom qua-->
						<table class="film_block">
							<tbody>
								<tr>
									<td rowspan="2"><img class="poster_image" src="images/CGDTHQ.jpg" alt="Co gai den tu hom qua" /></td>
									<td class="caption_block">
										<p class="eng_caption">THE GIRL FROM YESTERDAY</p>
									 	<p class="vi_caption">Co gai den tu hom qua</p>
									</td>
								</tr>
								<tr>
									<td rowspan="2" class="film_intro">
										<ul>
											<li><strong>Running Time: </strong>120 minutes</li>
											<li><strong>Director: </strong>Phan Gia Nhat Linh</li>
											<li><strong>Prodecer: </strong>Nguyen Cao Tung, Vu Quynh Ha</li>
											<li><strong>Writer: </strong>Phan Gia Nhat Linh, Nguyen Thai Ha</li>
											<li><strong>Stars: </strong>Miu Le, Ngo Kien Huy</li>
											<li><strong>Nation: </strong>Vietnam<img class="flag" src="images/flag.png" alt="Vietnam flag"/></li>
										</ul>
										<p class="trailer">
											<a href="https://www.youtube.com/embed/6d6SaifQd0E">TRAILER</a>
										</p>
										<p class="book">
											<a href="enquire.html">BOOK</a>
										</p>
									</td>
								</tr>
								<tr>
									<td class="image_source">
										<p>Image source: <a href="https://vi.wikipedia.org/wiki/C%C3%B4_g%C3%A1i_%C4%91%E1%BA%BFn_t%E1%BB%AB_h%C3%B4m_qua_(phim)#/media/File:C%C3%B4_g%C3%A1i_%C4%91%E1%BA%BFn_t%E1%BB%AB_h%C3%B4m_qua_Poster.jpg" target="_blank">click</a></p>
									</td>
								</tr>
							</tbody>
						</table>

						<!--Toi thay hoa vang tren co xanh-->
						<table class="film_block">
							<tbody>
								<tr>
									<td rowspan="2"><img class="poster_image" src="images/TTHVTCX.jpg" alt="Toi thay hoa vang tren co xanh" /></td>
									<td class="caption_block">
										<p class="eng_caption">YELLOW FLOWERS ON THE GREEN GRASS</p>
										<p class="vi_caption">Toi thay hoa vang tren co xanh</p>
									</td>
								</tr>
								<tr>
									<td rowspan="2" class="film_intro">
										<ul>
											<li><strong>Running Time: </strong>92 minutes</li>
											<li><strong>Director: </strong>Victor Vu</li>
											<li><strong>Producer: </strong>Trinh Thi Thanh Tam, Nguyen Cao Tung</li>
											<li><strong>Writer: </strong>Viet Linh, Victor Vu, Doan Nhat Nam</li>
											<li><strong>Stars: </strong>Thinh Vinh, Khang Trong, Lam Thanh My</li>
											<li><strong>Nation: </strong>Vietnam<img class="flag" src="images/flag.png" alt="Vietnam flag"/></li>
										</ul>
										<p class="trailer">
											<a href="https://www.youtube.com/embed/wmjiCP6R-7I">TRAILER</a>
										</p>
										<p class="book">
											<a href="enquire.html">BOOK</a>
										</p>

										<button id="TTHVTCX_trailer">TRAILER</button>

									</td>
								</tr>
								<tr>
									<td class="image_source">
										<p>Image source: <a href="https://vi.wikipedia.org/wiki/T%C3%B4i_th%E1%BA%A5y_hoa_v%C3%A0ng_tr%C3%AAn_c%E1%BB%8F_xanh_(phim)#/media/File:Toithayhoavangtrencoxanh.jpg" target="_blank">click</a></p>
									</td>
								</tr>
							</tbody>
						</table>

						<!--Teo em-->
						<table class="film_block">
							<tbody>
								<tr>
									<td rowspan="2"><img class="poster_image" src="images/TE.jpg" alt="Teo em" /></td>
									<td class="caption_block">
										<p class="eng_caption">TEO EM</p>
										<p class="vi_caption"></p>
									</td>
								</tr>
								<tr>
									<td rowspan="2" class="film_intro">
										<ul>
											<li><strong>Running Time: </strong>99 minutes</li>
											<li><strong>Director: </strong>Charlie Nguyen</li>
											<li><strong>Producer: </strong>Jimmy Pham Nghiem, Jenny Trang Le</li>
											<li><strong>Writer: </strong>Charlie Nguyen, Duong Tu An</li>
											<li><strong>Stars: </strong>Johnny Tri Nguyen, Thai Hoa, Ninh Duong Lan Ngoc</li>
											<li><strong>Nation: </strong>Vietnam<img class="flag" src="images/flag.png" alt="Vietnam flag"/></li>
										</ul>
										<p class="trailer">
											<a href="https://www.youtube.com/embed/oRvzM1eX5ow">TRAILER</a>
										</p>
										<p class="book">
											<a href="enquire.html">BOOK</a>
										</p>

										<button id="TE_trailer">TRAILER</button>

									</td>
								</tr>
								<tr>
									<td class="image_source">
										<p>Image source: <a href="https://vi.wikipedia.org/wiki/T%C3%A8o_em#/media/File:Teoemposter.jpg" target="_blank">click</a></p>
									</td>
								</tr>
							</tbody>
						</table>

					</section>
			</section>

			<section class="column right">
				<aside>
					<h2>Special of the day</h2>
					<p>Each Swinburne's students of class of 2021 having a TicketBuy membership card is granted a 30% when bring your Student ID card to the cinema with TickerBuy sign</p>
					<img src="images/swin_logo.png" alt = "Swinburne logo"/>
				</aside>
			</section>


			<section class="no_column">
				<h1 class="headline">COMING SOON</h1>

				<section>
					<section class="coming_soon">
						<a href="https://www.youtube.com/embed/ne7-wnnWqFY">
							<img src="images/WWM.jpg" alt="Walk with me"/>
						</a>
						<p class="image_source"><a href="https://www.imdb.com/title/tt2331100/mediaviewer/rm4057148416" target="_blank">Image source</a></p>
					</section>

					<section class="coming_soon">
						<a href="https://www.youtube.com/embed/tvfKHZFOY-A">
							<img src="images/CTNA.jpg" alt="Chang trai nam ay"/>
						</a>
						<p class="image_source"><a href="https://vi.wikipedia.org/wiki/Ch%C3%A0ng_trai_n%C4%83m_%E1%BA%A5y#/media/File:%C3%81p_ph%C3%ADch_phim_Ch%C3%A0ng_trai_n%C4%83m_%E1%BA%A5y.jpg" target="_blank">Image source</a></p>
					</section>

					<section class="coming_soon">
						<a href="https://www.youtube.com/embed/jvB0ZrAqzkc">
							<img src="images/ELBNCA.jpg" alt="Em la ba noi cua anh"/>
						</a>
						<p class="image_source"><a href="https://vi.wikipedia.org/wiki/Em_l%C3%A0_b%C3%A0_n%E1%BB%99i_c%E1%BB%A7a_anh#/media/File:Poster-ELBNCA.jpg" target="_blank">Image source</a></p>
					</section>


					<section class="coming_soon">
						<a href="https://www.youtube.com/embed/qjWoaNWZ2Xo">
							<img src="images/TNRR.jpg" alt="Thang nam ruc ro"/>
						</a>
						<p class="image_source"><a href="https://vi.wikipedia.org/wiki/Th%C3%A1ng_n%C4%83m_r%E1%BB%B1c_r%E1%BB%A1#/media/File:Ap_phich_phim_Thang_Nam_ruc_ro.jpg" target="_blank">Image source</a></p>
					</section>

					<section class="coming_soon">
						<a href="https://www.youtube.com/embed/i5qOzqD9Rms">
							<img src="images/TI2.jpg" alt="The Incredibles 2"/>
						</a>
						<p class="image_source"><a href="https://en.wikipedia.org/wiki/Incredibles_2#/media/File:The_Incredibles_2.jpg" target="_blank">Image source</a></p>
					</section>

				</section>
			</section>

			<section class="no_column">
				<h1 class="headline">PROMOTIONS</h1>
				<ol id="promotion_list">
					<li class="promotion_title">Swinburne university's class of 2021 has 30% discount.
						<p class="promotion_detail">Each class-of-2021 student of Swinburne University of Technology having a TickerBuy's membership card can have a 30% discount when you show up your student ID card when going to the cinema  having TicketBuy sign.</p>
					</li>
					<li class="promotion_title">Vietnam soccer fans have a chance to win a 5-day-4night trip to Vietnam.
						<p class="promotion_detail">Vietnam Olympic soccer team is on the way to win ASIAD 2018's soccer trophy. Therefore, if you are a Vietnamese and take interest in soccer, go to the cinema having TickerBuy sign, write your details and the sentence "I LOVE VIETNAM", so you can have a chance to win the amazing trip to Vietnam</p>
					</li>
					<li class="promotion_title">ASEAN support.
						<p class="promotion_detail">ASEAN is an important strongly developing area on the world, and 11 countries of ASEAN are our important paartners. Therefore, if you are a citizen of an ASEAN country (Singapore, Brunei, Malaysia, Thailand, Indonesia, Vietnam, Philipines, Laos, Cambodia, Myanmar), bring your identity document to a cinema having TickerBuy sign to have a 10% discount.</p>
					</li>
				</ol>
			</section>

			<section>
				<h1 class="headline">TICKET PRICE</h1>

				<table id="ticket_table">
					<thead>
						<tr>
							<th>TICKET TYPE</th>
							<th>NORMAL TICKET PRICE</th>
							<th>TICKET PRICE WITH MEMBERSHIP</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Adult</td>
							<td>$20</td>
							<td>$15</td>
						</tr>
						<tr>
							<td>Student</td>
							<td>$17</td>
							<td>$12</td>
						</tr>
						<tr>
							<td>Child (aged 3 - 14)</td>
							<td>$15</td>
							<td>$10</td>
						</tr>
						<tr>
							<td>Senior</td>
							<td>$16</td>
							<td>$12</td>
						</tr>
						<tr>
							<td>Happy day - Friday*</td>
							<td>$10</td>
							<td>$8</td>
						</tr>
					</tbody>
				</table>
				<p>* Happy day price is only applied to tickets bought in cinema</p>
			</section>
		</article>

		<?php
			include_once ("footer.inc");
		?>


	</body>

</html>
