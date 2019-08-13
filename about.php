<!DOCTYPE html>

<html lang="en">

  <head>
	   <meta charset="utf-8" />
	   <meta name="description" content="movie tickets purchase" />
	   <meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
	   <meta name="author" content="Ngoc Thang Nguyen" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" href="styles/style.css"/>
	   <title>About</title>
  </head>

  <body>
    <?php
		include_once ("header.inc");
		include_once ("menu.inc");
	?>

    <article>
      <h1>ABOUT</h1>

      <section>
        <h2>Student details</h2>
        <dl>
          <dt>Name</dt>
            <dd>NGOC THANG NGUYEN</dd>
          <dt>Student number</dt>
            <dd>102006301</dd>
          <dt>Course</dt>
            <dd>Bachelor of Computer Science</dd>
          <dt>Email</dt>
            <dd><a href="mailto:nguyenngocthang12121999@gmail.com">nguyenngocthang12121999@gmail.com</a></dd>
        </dl>
        <figure id="photo_of_me">
          <img src="images/photo_of_me.jpg" alt="Photo of me"/>
          <figcaption>Photo of me</figcaption>
        </figure>
        <section class="timetable">
          <h3>Timetable</h3>
          <table id="timetable">
            <thead>
              <tr>
                <th></th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>08:00am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>8:30am</td>
                <td></td>
                <td rowspan="4">COS10009<br />Lecture (1)<br />ATC101</td>
                <td></td>
                <td rowspan="4">COS10011<br />Lab 1 (8)<br />BA404</td>
                <td rowspan="6">TNE10006<br />Practical 1 (2)<br />ATC329</td>
              </tr>
              <tr>
                <td>09:00am</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>9:30am</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>10:00am</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>10:30am</td>
                <td></td>
                <td rowspan="4">COS10011<br />Lecture 1 (1)<br />EN313</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>11:00am</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>11:30am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

              </tr>
              <tr>
                <td>12:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>12:30pm</td>
                <td rowspan="4">TNE10006<br />Lecture 1 (1)<br />ATC101</td>
                <td></td>
                <td></td>
                <td rowspan="4">COS10003<br />Tutorial 1 (1)<br />BA808</td>
                <td></td>
              </tr>
              <tr>
                <td>1:00pm</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>1:30pm</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>2:00pm</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>2:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>3:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>3:30pm</td>
                <td></td>
                <td></td>
                <td rowspan="4">COS10003<br />Lecture 1 (1)<br />EN102</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>4:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>4:30pm</td>
                <td></td>
                <td></td>
                <td rowspan="4">COS10009<br />Lab 1 (9)<br />ATC627 </td>
                <td></td>
              </tr>
              <tr>
                <td>5:00pm</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>5:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>6:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>6:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </section>
      </section>

      <section>
        <h2>Assignment Requirements</h2>
        <h3>HTML</h3>
          <ul>
            <li><a href="index.html">Index page</a></li>
            <li><a href="product.html">Product page</a></li>
            <li><a href="enquire.html">Enquire page</a></li>
            <li><a href="about.html">About page</a></li>
            <li><a href="enhancements.html">Enhancements page</a></li>
            <li><a href="booking.html">Booking page</a></li>
            <li><a href="sub_CBSG.html">Sub booking page 1</a></li>
            <li><a href="sub_CGDTHQ.html">Sub booking page 2</a></li>
            <li><a href="sub_EC18.html">Sub booking page 3</a></li>
            <li><a href="sub_TC.html">Sub booking page 4</a></li>
            <li><a href="sub_TE.html">Sub booking page 5</a></li>
            <li><a href="sub_TTHVTCX.html">Sub booking page 6</a></li>
          </ul>
        <h3>CSS</h3>
          <ul>
            <li><a href="styles/style.css">CSS</a></li>
          </ul>
      </section>


      <section>
        <h2>Reflection</h2>

        <ol>
          <li>word-wrap property: Makes long word break into other line <a href="https://www.w3schools.com/cssref/css3_pr_word-wrap.asp">W3S</a></li>
          <li>word-break property: Decides how word breaks at the end of line <a href="https://www.w3schools.com/cssref/css3_pr_word-break.asp">W3S</a></li>
          <li>Center an image: remember to set the container into display: block <a href="https://www.w3schools.com/howto/howto_css_image_center.asp">W3S</a></li>
          <li>Position: absolute: absolute with its closest position set ancestor container</li>
          <li>YouTube video: remember to change the link into http://youtube.com/embed/...</li>
          <li>Fixed nav bar: remember to set top value</li>
          <li>Sticky nav bar: remember to set top value too</li>

        </ol>
      </section>
    </article>

    <?php
		include_once ("footer.inc");
	?>

  </body>

</html>
