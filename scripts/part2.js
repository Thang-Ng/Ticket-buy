"use strict"

function validate() {
  var errMsg = "";
  var result = true;

  /*ticket number validation*/
  var adultTicket = document.getElementById("adult_ticket").value;
  if (adultTicket < 0) {
    errMsg += "Ticket quantity cannot be smaller than 0\n"
    result = false;
  }

  var studentTicket = document.getElementById("student_ticket").value;
  if (studentTicket < 0) {
    errMsg += "Ticket quantity cannot be smaller than 0\n"
    result = false;
  }

  var childTicket = document.getElementById("child_ticket").value;
  if (childTicket < 0) {
    errMsg += "Ticket quantity cannot be smaller than 0\n"
    result = false;
  }

  var seniorTicket = document.getElementById("senior_ticket").value;
  if (seniorTicket < 0) {
    errMsg += "Ticket quantity cannot be smaller than 0\n"
    result = false;
  }


  /*postcode validation*/
  var state = document.getElementById("state").value;
  var postcode = document.getElementById("postcode").value;

  if (/\d\d\d\d/.test(postcode) == false) {
    errMsg += "Invalid postcode\n"
    result = false;
  }

  switch (state) {
    case "none":
      errMsg += "Please choose your state\n";
      result = false;
      break;
    case "VIC":
      if ((/^3[0-9]{3}$/.test(postcode) == false) && (/^8[0-9]{3}$/.test(postcode) == false)) {
        errMsg += "Postcode does not match\n";
        result = false;
      }
      break;
    case "NSW":
      if ((/^1[0-9]{3}$/.test(postcode) == false) && (/^2[0-9]{3}$/.test(postcode) == false)) {
        errMsg += "Postcode does not match\n";
        result = false;
      }
      break;
    case "QLD":
      if ((/^4[0-9]{3}$/.test(postcode) == false) && (/^9[0-9]{3}$/.test(postcode) == false)) {
        errMsg += "Postcode does not match\n";
        result = false;
      }
      break;
    case "NT":
      if (/^0[0-9]{3}$/.test(postcode) == false) {
        errMsg += "Postcode does not match\n";
        result = false;
      }
      break;
    case "WA":
      if (/^6[0-9]{3}$/.test(postcode) == false) {
        errMsg += "Postcode does not match\n";
        result = false;
      }
      break;
    case "SA":
      if (/^5[0-9]{3}$/.test(postcode) == false) {
        errMsg += "Postcode does not match\n";
        result = false;
      }
      break;
    case "TAS":
      if (/^7[0-9]{3}$/.test(postcode) == false) {
        errMsg += "Postcode does not match\n";
        result = false;
      }
      break;
    case "ACT":
      if (/^0[0-9]{3}$/.test(postcode) == false) {
        errMsg += "Postcode does not match\n";
        result = false;
      }
      break;
  }

  var movie = document.getElementById("choose_movie").value;
  var date = document.getElementById("date").value;
  var session = document.getElementById("session").value;
  if (movie == "none") {
    errMsg += "No movie chosen\n";
    result = false;
  } else {
    if (date == "none") {
      errMsg += "No date chosen\n";
      result = false;
      } else {
        if (session == "none") {
          errMsg += "No session chosen\n";
          result = false;
        }
      }
    }


  var totalMoney = totalPriceCal(adultTicket, studentTicket, childTicket, seniorTicket);
  if (totalMoney == 0) {
    errMsg += "No ticket chosen";
    result = false;
  }

  if (result == true) {
    storeData(totalMoney);
  }

  if (errMsg != "") {
    alert(errMsg);
  }

  return result;
}


/*calculate total price*/
function totalPriceCal (adultTicket, studentTicket, childTicket, seniorTicket) {
  var totalMoney = 20*adultTicket + 17*studentTicket + 15*childTicket + 16*seniorTicket;

  return totalMoney;
}

//check which way is preferred by client to be contacted. Use loop to check which option is checked
function getContactPreference() {
  var preferredContactArray = document.getElementsByName("preferred_contact");

  for (var i=0; i<preferredContactArray.length; i++) {
    if (preferredContactArray[i].checked == true) {
      var preferredContact = preferredContactArray[i].value;
    }
  }

  return preferredContact;
}

function getTotalMoney () {
	var adultTicket = document.getElementById("adult_ticket").value;
	var studentTicket = document.getElementById("student_ticket").value;
	var childTicket = document.getElementById("child_ticket").value;
	var seniorTicket = document.getElementById("senior_ticket").value;
	var totalMoney = totalPriceCal(adultTicket, studentTicket, childTicket, seniorTicket);
	
	return totalMoney;
}

function storeData () {
  var totalMoney = getTotalMoney();

  sessionStorage.firstname = document.getElementById("firstname").value;
  sessionStorage.lastname = document.getElementById("lastname").value;
  sessionStorage.email = document.getElementById("email").value;
  sessionStorage.phoneNumber = document.getElementById("phone_number").value;
  sessionStorage.preferredContact = getContactPreference();
  sessionStorage.date = document.getElementById("date").value;
  sessionStorage.session = document.getElementById("session").value;
  sessionStorage.adultTicket = document.getElementById("adult_ticket").value;
  sessionStorage.studentTicket = document.getElementById("student_ticket").value;
  sessionStorage.childTicket = document.getElementById("child_ticket").value;
  sessionStorage.seniorTicket = document.getElementById("senior_ticket").value;
  sessionStorage.totalMoney = totalMoney;
  sessionStorage.street = document.getElementById("street").value;
  sessionStorage.suburb= document.getElementById("suburb/town").value;
  sessionStorage.state = document.getElementById("state").value;
  sessionStorage.postcode = document.getElementById("postcode").value;
  /*store data of the chosen movie*/
  var movieValue = document.getElementById("choose_movie").value;
  var movies = document.getElementById("choose_movie").options;
  
  sessionStorage.movie_value = movieValue;

  for ( var i=0; i < movies.length; i++) {
    if (movieValue == movies[i].value) {
      sessionStorage.movie = movies[i].text;
      break;
    }
  }

  //store address in sessionStorage
  var address = "";
  address = document.getElementById("street").value + ", " + document.getElementById("suburb/town").value + " " + document.getElementById("state").value + " " + document.getElementById("postcode").value;
  sessionStorage.address = address;

  //store enquiry in sessionStorage
  var productFeature = [];
  if (document.getElementById("dissapointed").checked == true) {productFeature.push("dissapointed")};
  if (document.getElementById("refund").checked == true) {productFeature.push("refund")};
  if (document.getElementById("see_manager").checked == true) {productFeature.push("see_manager")};
  if (document.getElementById("food_problem").checked == true) {productFeature.push("food_problem")};
  if (document.getElementById("beverage_problem").checked == true) {productFeature.push("beverage_problem")};

  productFeature = productFeature.join(", ");
  sessionStorage.productFeature = productFeature.toString();

}

//This function is to make dates appear in form of week days
function displayDay() {
  var today = new Date();
  var todayDay = today.getDay();
  var tomorrowDay = todayDay + 1;
  var after_tomorrowDay = todayDay + 2;

  if (todayDay == 5) {
    after_tomorrowDay = 0;
  } else if (todayDay == 6){
    tomorrowDay = 0;
    after_tomorrowDay = 1;
  }

  var weekDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

  return [weekDays[tomorrowDay], weekDays[after_tomorrowDay]];
}


function getDate() {    //get the dates of today, tomorrow and the day after tomorrow
  var today = new Date();
  var todayDate = today.getDate();
  var todayMonth = today.getMonth();
  var todayYear = today.getFullYear();

  var tomorrow = new Date();
  var tomorrowDate = tomorrow.setDate(tomorrow.getDate() + 1);

  var after_tomorrow = new Date();
  var after_tomorrowDate = after_tomorrow.setDate(after_tomorrowDate.getDate() + 2);

  var months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec"];

  var todayDateStore = todayDate + months[todayMonth] + todayYear;
  var tomorrowDateStore = tomorrowDate + months[tomorrow.getMonth()] + tomorrow.getFullYear();
  var after_tomorrowDateStore = after_tomorrowDate + months[after_tomorrow.getMonth()] + after_tomorrow.getFullYear();

  return [todayDateStore,tomorrowDateStore,after_tomorrowDateStore];
}




function fillData() {
    /*Fill data in web page (read-only)*/
    document.getElementById("confirm_name").textContent = sessionStorage.firstname + " " + sessionStorage.lastname;
    document.getElementById("confirm_email").textContent = sessionStorage.email;
    document.getElementById("confirm_phone_number").textContent = sessionStorage.phoneNumber;
    document.getElementById("confirm_contact_preference").textContent = sessionStorage.preferredContact;
    document.getElementById("confirm_address").textContent = sessionStorage.address;

    document.getElementById("confirm_movie").textContent = sessionStorage.movie;
    document.getElementById("confirm_session").textContent = sessionStorage.session;
    document.getElementById("confirm_adult_ticket").textContent = sessionStorage.adultTicket;
    document.getElementById("confirm_student_ticket").textContent = sessionStorage.studentTicket;
    document.getElementById("confirm_child_ticket").textContent = sessionStorage.childTicket;
    document.getElementById("confirm_senior_ticket").textContent = sessionStorage.seniorTicket;

    document.getElementById("confirm_total").textContent = "$" + sessionStorage.totalMoney;


    //pass data into hidden inputs
    document.getElementById("hidden_firstname").value = sessionStorage.firstname;
    document.getElementById("hidden_lastname").value = sessionStorage.lastname;
    document.getElementById("hidden_email").value = sessionStorage.email;
	
    document.getElementById("hidden_street").value = sessionStorage.street;
	document.getElementById("hidden_suburb").value = sessionStorage.suburb;
    document.getElementById("hidden_state").value = sessionStorage.state;
	document.getElementById("hidden_postcode").value = sessionStorage.postcode;


    document.getElementById("hidden_phone_number").value = sessionStorage.phoneNumber;
    document.getElementById("hidden_preferred_contact").value = sessionStorage.preferredContact;
    document.getElementById("hidden_movie").value = sessionStorage.movie_value;
    document.getElementById("hidden_date").value = sessionStorage.date;
    document.getElementById("hidden_session").value = sessionStorage.session;
    document.getElementById("hidden_adult_ticket").value = sessionStorage.adultTicket;
    document.getElementById("hidden_student_ticket").value = sessionStorage.studentTicket;
    document.getElementById("hidden_child_ticket").value = sessionStorage.childTicket;
    document.getElementById("hidden_senior_ticket").value = sessionStorage.seniorTicket;
    document.getElementById("hidden_total_money").value = sessionStorage.totalMoney;
}


function paymentValidate () {
    var errMsg = "";
    var result = true;

    var cardType = document.getElementById("credit_type").value;
    var cardNumber = document.getElementById("card_number").value;
    var secuCode = document.getElementById("security_code").value;

    /*test card number and security code*/
    switch (cardType) {
      case "none":
        errMsg += "Please choose card type\n";
        result = false;
        break;
      case "visa":
        if (/^4[0-9]{15}$/.test(cardNumber) == false) {
          errMsg += "Invalid card number\n";
          result = false;
        }
        if (/^[0-9]{3}$/.test(secuCode) == false) {
          errMsg += "Invalid security code\n";
          result = false;
        }
        break;
      case "master_card":
        if ((/^5[1-5][0-9]{14}$/).test(cardNumber) == false) {
          errMsg += "Invalid card number\n";
          result = false;
        }
        if (/^[0-9]{3}$/.test(secuCode) == false) {
          errMsg += "Invalid security code\n";
          result = false;
        }
        break;
      case "american_express":
        if ((/^34[0-9]{13}$/.test(cardNumber) == false) && (/^37[0-9]{13}$/.test(cardNumber) == false)) {
          errMsg += "Invalid card number\n";
          result = false;
        }
        if (/^[0-9]{4}$/.test(secuCode) == false) {
          errMsg += "Invalid security code\n";
          result = false;
        }
      break;
    }



    /*test expiry month*/
    var expiry = document.getElementById("expiry").value;
    var mm = ["01","02","03","04","05","06","07","08","09","10","11","12"];
    var expiryMonth = expiry.slice(0,2);
    var expiryYear = Number("20" + expiry.slice(3));
    var testmm = false;
    for (var i=0; i<mm.length; i++) {
      if (expiryMonth == mm[i].toString()) {
        testmm = true;
        break;
      }
    }
    if (testmm == false) {
      errMsg += "Invalid expiry month\n";
      result = false;
    }


    var today = new Date();
    var todayMonth = today.getMonth();
    var todayYear = today.getFullYear();
    if (expiryYear < todayYear) {
      errMsg += "Invalid expiry year\n";
      result = false;
    } else if (expiryYear == todayYear) {
      if (Number(expiryMonth)<=todayMonth+1) {
        errMsg += "Invalid expiry month\n";
        result = false;
      }
    }


    if (errMsg != "") {
      alert(errMsg);
    }

    return result;
}

function cancelBooking() {
  window.location = "enquire.php";
  sessionStorage.clear();
}


/*MAIN FUNCTION*/
function init () {
	var vali = false;
	
	if (document.getElementsByTagName("TITLE")[0].text == "Fixing") {
		document.getElementById("state").value = document.getElementById("pass_state").value;
		
		document.getElementById("movie").value = document.getElementById("pass_movie").value;
		document.getElementById("date").value = document.getElementById("pass_date").value;
		document.getElementById("session").value = document.getElementById("pass_session").value;
		
		var pref_contact = document.getElementById("pass_preferred_contact").value
		
		switch (pref_contact) {
			case "email":
				var pref_email = document.getElementById("pref_email");
				var pref_email_att = document.createAttribute("checked");
				pref_email_att.value = "checked";
				pref_email.setAttributeNode(pref_email_att);
				break;
			case "post":
				var pref_post = document.getElementById("pref_post");
				var pref_post_att = document.createAttribute("checked");
				pref_post_att.value = "checked";
				pref_post.setAttributeNode(pref_post_att);
				break;
			case "phone":
				var pref_phone = document.getElementById("pref_phone");
				var pref_phone_att = document.createAttribute("checked");
				pref_phone_att.value = "checked";
				pref_phone.setAttributeNode(pref_phone_att);
				break;
		}
		
		document.getElementById("hidden_total_money").value = getTotalMoney();
		
		var cancelOrder = document.getElementById("cancel_order");
		cancelOrder.onclick = cancelBooking;
    }

  //if the title is "Payment", this code block is executed
  if (document.getElementsByTagName("TITLE")[0].text == "Payment") {
    fillData();

    var cancelOrder = document.getElementById("cancel_order");
    cancelOrder.onclick = cancelBooking;

    var payment = document.getElementById("payment_form");

	if (vali == true) {
		payment.onsubmit = paymentValidate();
	}

    payment = setTimeout(timeOut, 1200000);

    var billingAdd = document.getElementById("billing_add");
    billingAdd.onclick = billingAddEvent;
    billingAdd.addEventListener("click", function(event){
    event.preventDefault()});
    }

  //if the title is "Enquire", this code block is executed
  if (document.getElementsByTagName("TITLE")[0].text == "Enquire") {

    var weekDays = displayDay();
    document.getElementById("tomorrow").text = weekDays[0];
    document.getElementById("after_tomorrow").text = weekDays[1];

    var form = document.getElementById("bookform");

	if (vali == true) {
		form.onsubmit = validate();
	} else {
		form.onsubmit = storeData;
	}

  }

  //if the title is "Index", this code block is executed
  if (document.getElementsByTagName("TITLE")[0].text == "Index") {
    setTimeout(displayModal, 1500);
  }
}

window.onload = init;
