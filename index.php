<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="description" content="index of assignment 1" />
    <meta name="keywords" content="index, assignment, 1, HTML" />
    <meta name="author" content="Ngoc Thang Nguyen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styles/style.css"/>
    <script src="scripts/part2.js"></script>
    <script src="scripts/enhancements.js"></script>
    <title>Index</title>
  </head>

  <body>
    <?php
		include_once ("menu.inc");
	?>

    <!--Modal Box-->
    <section class = "modal" id="modal">
      <span id="close_button">&#215;</span>
      <section class="modal_content" id="modal_content">
          <p id="p_modal_content"><img src="images/banner.png" alt="poster"/></p>
      </section>
    </section>
    <!--End of Modal Box-->


    <header id = "index_header">
      <a class="image_source index_image_source" href="https://www.freepik.com/free-photo/striped-popcorn-bucket-in-cinema_1448777.htm">Background designed by Freepik</a>
    </header>

    <div id="index_article">
      <section id = "intro_section_0">
        <h2>WHO ARE WE?</h2>
        <p>TicketBuy is NNT Cinema's online movie-ticket-booking site in which you can easily get a ticket for your favorite movie. TicketBuy will absolutely make your money worth spending.</p>
        <a class = "image_source index_image_source" href="https://www.freepik.com/free-photo/film-stocks-and-clippers-on-table_2303447.htm">Background designed by Freepik</a>
      </section>

      <section id = "intro_section_1">
        <h2 class = "left_h2">Convenience</h2>
        <p class="left_p">With TicketBuy, you can purchase movie tickets in the most convenient way. With some clicks, you can do it at home, on tram or even when you are in toilet. Don't waste your time queuing, enjoy the movie now!</p>
        <a class = "image_source index_image_source" href="https://www.freepik.com/free-photo/clapperboard-near-tasty-popcorn_2337196.htm">Background designed by Freepik</a>
      </section>

      <section id = "intro_section_2">
        <h2 class="right_h2">Cheapest price</h2>
        <p class="right_p">If you are wondering about the high price from other cinemas, come to us as we have the cheapest price throughout Australia</p>
        <a class = "image_source index_image_source" href="https://www.freepik.com/free-photo/film-bobbin-and-clapperboard_1444037.htm">Background designed by Freepik</a>
      </section>

      <section id = "intro_section_3">
        <h2>Events and Promotions</h2>
        <p>With a various range of promotions and events, we bring to you the chance of hunting for the cheapest movie tickets.</p>
        <a class = "image_source index_image_source" href="https://www.freepik.com/free-photo/layout-of-popcorn-with-cinema-objects_2317675.htm">Background designed by Freepik</a>
      </section>

    </div>

    <?php
	include_once ("footer.inc");
	?>

  </body>

</html>
