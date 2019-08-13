<!DOCTYPE html>

<html lang="en">

  <head>
	   <meta charset="utf-8" />
	   <meta name="description" content="movie tickets purchase" />
	   <meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
	   <meta name="author" content="Ngoc Thang Nguyen" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" href="styles/style.css"/>
	   <title>Enhancements2</title>
  </head>

  <body>
    <?php
		include_once ("header.inc");
		include_once ("menu.inc");
	?>

    <article>
      <h1>ENHANCEMENTS OF ASSIGNMENT 2</h1>

      <section>
        <h2>Modal box</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>With Modal box, we can add advertisements or announcements on web page whenever users enter the website. After window is loaded for 1.5 seconds, the Modal box will appear.</dd>

          <dt>CSS code needed</dt>
          <dd>
            <p>
              #modal {
                  z-index: 2;
                  display: none;
                  position: fixed;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  overflow: auto;
                  background: rgba(0,0,0,0.4);
                }
            </p>

            <p>
              #modal_content {
                width: 55%;
                height: auto;
                margin: auto;
                margin-top: 7%;
                background: white;
              }
            </p>

            <p>
              #p_modal_content {
                width: 98%;
                height: auto;
                margin: auto;
                padding-top: 10px;
              }
            </p>

            <p>
              #p_modal_content img {
                width: 100%;
                padding: 0;
                margin: 0;
              }
            </p>

            <p>
                #close_button {
                  margin-right: 2%;
                  font-size: 300%;
                  font-weight: bold;
                  float: right;
                  display: inline;
                  color: white;
                }
            </p>

            <p>
              #close_button:hover{
                cursor: pointer;
                color: lightgray;
              }
            </p>
          </dd>

          <dt>JavaScript code needed</dt>
          <dd>
              <p>Call function of <strong>enhancements.js</strong> from <strong>part2.js</strong>: </p>
                <p>if (document.getElementsByTagName("TITLE")[0].text == "Index") {</p>
                <p>setTimeout(displayModal, 2000);</p>
              <p>}</p>

            <br />

            <p>Functions executed in <strong>enhancements.js</strong>:</p>

              function displayModal () {
                <p>var modalBox = document.getElementById("modal");</p>
                <p>modalBox.style.display = "block";</p>

                <p>var closeButton = document.getElementById("close_button");</p>
                <p>closeButton.onclick = closeModal;</p>
            <p> }</p>
            <br />
            <p>function closemodal() {</p>
                  <p>var modalBox = document.getElementById("modal");</p>
                  <p>modalBox.style.display = "none";</p>
              <p>}</p>
          </dd>

          <dt>Third party source</dt>
          <dd>
            I got the idea from <a href="https://www.hoyts.com.au/">HOYTS</a> and base on W3S's basic instructions (<a href="https://www.w3schools.com/howto/howto_css_modals.asp">link</a>).
          </dd>
          <dt>Whre I apply it</dt>
          <dd>
            I apply this to the site <strong>index.html</strong> (Home page).
          </dd>
        </dl>
      </section>

      <section>
        <h2>Time out after a period</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>
            On payment page, for security purposes, we have to set a period whose purpose is to make sure that client really wants to purchase tickets. After 20 minutes, if payment is not finished, the website will automatically take client back to home page (index.html).
          </dd>

          <dt>JavaScript code needed</dt>
          <dd>
            <p>Call function of <strong>enhancements.js</strong> from <strong>part2.js</strong>: </p>
                <p>if (document.getElementsByTagName("TITLE")[0].text == "Payment") {</p>
                  <p>...</p>
                <p>var payment = document.getElementById("payment_form");</p>
                <p>payment = setTimeout(timeOut, 1200000);</p>
                <p>...</p>
              <p>}</p>

            <br />

            <p>Functions executed in <strong>enhancements.js</strong>:</p>
              <p>function timeOut () {</p>
              <p>alert ("Time is out");</p>
              <p>window.location = "index.html";</p>
            <p>  }  </p>
          </dd>

          <dt>Third party source</dt>
          <dd>
            I take the idea from Assignment 2 instruction and make it in my own way.
          </dd>
          <dt>Where I apply it</dt>
          <dd>
            I apply it to Payment site (payment.html).
          </dd>
        </dl>
      </section>

      <section>
        <h2>Billing address is different from entered address</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>
            Sometimes, addresses that clients enter are not the same as the addresses that they want to receive bills. Therefore, making the button "Use another address for billing address" is necessary.
            In Payment site, when client clicks the button "Use another address for billing address", there exits a field for client to enter new address and a new button to remove that if client changes his/her mind.
            After filling in this field and submit form, data will be sent to server side to be processed.
          </dd>

          <dt>JavaScript code needed</dt>
          <dd>
            <p>Call function of <strong>enhancements.js</strong> from <strong>part2.js</strong>: </p>
                <p>if (document.getElementsByTagName("TITLE")[0].text == "Payment") {</p>
                  <p>...</p>
                <p>var billingAdd = document.getElementById("billing_add");</p>
                <p>billingAdd.onclick = billingAddEvent;</p>
                <p>...</p>
              <p>}</p>

            <br />

            <p>Functions executed in <strong>enhancements.js</strong>:</p>
              <p>var billingAddTest = true;</p>
              <p>function billingAddEvent () {</p>
              <p>if (billingAddTest) {</p>
              <p>addBillingAdd();</p>
              <p>}</p>
              <p>}</p>

              <br />

              <p>function addBillingAdd() {</p>
              <p>billingAddTest = false;</p>
              <p>var input = document.createElement("INPUT");</p>
              <p>input.setAttribute("type","text");</p>
              <p>input.setAttribute("id","billing_add_input");</p>
              <p>input.setAttribute("name","billing_address");</p>
              <p>var newInput = document.getElementById("fill_input");</p>
              <p>newInput.appendChild(input);</p>

              <p>var removeBillingAddButton = document.createElement("BUTTON");</p>
              <p>removeBillingAddButton.setAttribute("id","remove_billing_add_button");</p>
              <p>removeBillingAddButton.appendChild(document.createTextNode("Remove billing address"));</p>
              <p>document.getElementById("remove_billing_add").appendChild(removeBillingAddButton);</p>

              <p>removeBillingAddButton.onclick = removeBillingAdd;</p>
              <p>}</p>

              <p>function removeBillingAdd() {</p>
              <p>var input = document.getElementById("billing_add_input");</p>
              <p>var removeBillingAddButton = document.getElementById("remove_billing_add_button");</p>
              <p>input.remove();</p>
              <p>removeBillingAddButton.remove();</p>
              <p>billingAddTest = true;</p>
              <p>}</p>
          </dd>

          <dt>Third party source</dt>
          <dd>
            I take the idea from Assignment 2 instruction and make it in my own way.
          </dd>
          <dt>Where I apply it</dt>
          <dd>
            I apply it to Payment site (payment.html).
          </dd>
        </dl>
      </section>

    </article>

    <?php
		include_once ("footer.inc");
	?>

  </body>

</html>
