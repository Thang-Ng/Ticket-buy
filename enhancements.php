<!DOCTYPE html>

<html lang="en">

  <head>
	   <meta charset="utf-8" />
	   <meta name="description" content="movie tickets purchase" />
	   <meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
	   <meta name="author" content="Ngoc Thang Nguyen" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" href="styles/style.css"/>
	   <title>Enhancements</title>
  </head>

  <body>
    <?php
		include_once ("header.inc");
		include_once ("menu.inc");
	?>

    <article>
      <h1>ENHANCEMENTS</h1>

      <section>
        <h2>Sticky navigation bar</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>The basic requirement of navigation bar just tells us to contain it in website without any further demand.
            Moreover, when users scroll down, sticky navigation bar makes it easier to navigate other parts of website and brings them a feeling of profession.
            The sticky navigation bar is located in the upper layer, so it will not disappear when meets other elements of the page.
          </dd>
          <dt>CSS code needed</dt>
          <dd>
            <p>
              nav {
                text-align: left;
              }
            </p>

            <p>
              nav ul {
                font-weight: bold;
                list-style-type: none;
                background-color: #1C2833;
                padding: 0 0 0 0;
              }
            </p>

            <p>
              nav ul li {
                display: inline;
                padding: 0 15px 0 15px;
              }
            </p>

            <p>
              nav ul li a {
                display: inline-block;
                padding: 10px 10px 10px 10px;
                color: white;
              }
            </p>

            <p>
              nav ul li a:hover {
                background-color: white;
                color: #1C2833;
              }
            </p>
          </dd>
          <dt>Third party source</dt>
          <dd>
            I built the frame of navigation bar basing on W3S's instruction (<a href="https://www.w3schools.com/howto/howto_js_topnav.asp">link</a>).
            But making it sticky is my technique which I discoverd when learning position property in CSS.
          </dd>
          <dt>Whre I apply it</dt>
          <dd>
            I apply the sticky navigation bar to all parts of my website except for the site <strong>INDEX</strong> where I used fixed navigation bar.
          </dd>
        </dl>
      </section>

      <section>
        <h2>Responsive design</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>
            The assignment does not tell us to carry out the responsive design. But a responsive design will enhance users' experiences when they surf on smaller devices such as Tablets or Smartphones.
          </dd>
          <dt>CSS code needed</dt>
          <dd>
            <p>@media screen and (max-width: 600px) {...}</p>
            <p>The code block in {...} will take effect whenever the screen width is smaller than 600px.</p>
          </dd>
          <dt>Third party source</dt>
          <dd>
            I made this basing on the instruction on W3S site (<a href="https://www.w3schools.com/css/css_rwd_mediaqueries.asp">link</a>).
          </dd>
          <dt>Where I apply it</dt>
          <dd>
            I link the style file "style.css" to all my html files, so it will take effect in all html files
          </dd>
        </dl>
      </section>

      <section>
        <h2>Link YouTube video to my website</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>
            Linking YouTube video to website will make it easier for us to work with because we do not need to store videos offline and after that link them to website.
            Moreover, this will enable the website to load faster.
          </dd>
          <dt>HTML code needed</dt>
          <dd>
            a href="http://youtube.com/embed/...
          </dd>
          <dt>Third party source</dt>
          <dd>
            I take the basic instruction to link an YouTube video to our website from W3S (<a href="https://www.w3schools.com/html/html_youtube.asp">link</a>). But instead of using <strong><em>iframe</em></strong>  tag, I use <strong><em>a</em></strong>  tag because it will make my product website shorter and not take much area for several YouTube videos.
          </dd>
          <dt>Where I apply it</dt>
          <dd>
            I use it in the TRAILER button of <a href="product.html">product.html site (Movies)</a>.
          </dd>
        </dl>
      </section>

      <section>
        <h2>Dropdown menu</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>
            Dropdown menu is a tool to make basic and simple lists more beautiful and professional.
          </dd>
          <dt>CSS code needed</dt>
          <dd>
            <p>
              .dropdown {
                margin-top: 2%;
                margin-left: 2%;
                display: inline-block;
                position: relative;
              }
            </p>

            <p>
              .dropdown_button{
                color: white;
                font-family: arial, sans-serif;
                font-weight: bold;
                font-size: 150%;
                background: #aa0000;
                padding: 1em;
                border: none;
                display: block;
              }
            </p>

            <p>
              .dropdown_content{
                display: none;
                position: absolute;
                z-index: 1;
              }
            </p>

            <p>
              .dropdown_content a{
                color: black;
                padding: 0.5% 1% 0.5% 1%;
                display: block;
              }
            </p>

            <p>
              .dropdown:hover {
                display: block;
              }
            </p>

            <p>
              .dropdown:hover .dropdown_content{
                background:  #f1f1f1;
                display: block;
                width: 100%;
              }
            </p>

            <p>
              .dropdown:hover .dropdown_content a{
                display: block;
              }
            </p>

            <p>
              .dropdown_content a:hover{
                background: black;
                color: white;
              }
            </p>
          </dd>
          <dt>Third party source</dt>
          <dd>
            I made this basing on the instruction on W3S site (<a href="https://www.w3schools.com/css/css_dropdowns.asp">link</a>).
          </dd>
          <dt>Where I apply it</dt>
          <dd>
            I apply it to booking site (<a href="booking.html">booking.html</a>) and all sub_sites (<a href="sub_CBSG.html">sub_CBSG.html</a>, <a href="sub_CGDTHQ.html">sub_CGDTHQ.html</a>, <a href="sub_EC18.html">sub_EC18.html</a>, <a href="sub_TC.html">sub_TC.html</a>, <a href="sub_TE.html">sub_TE.html</a>, <a href="sub_TTHVTCX.html">sub_TTHVTCX.html</a>).
          </dd>
        </dl>
      </section>

    </article>

    <?php
		include_once ("footer.inc");
	?>

  </body>

</html>
