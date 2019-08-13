'use strict'

function timeOut () {
  alert ("Time is out");
  window.location = "index.html";
}


/*This function is executed first when clent clicks "Use another address for billing address"*/
var billingAddTest = true;  /*Initialize value of billingAddTest, if it is true, new input is added; otherwise, input is not added*/
function billingAddEvent () {
  if (billingAddTest) {
    addBillingAdd();
  }
}

//This function is called in function billingAddEvent()
function addBillingAdd() {
  billingAddTest = false;

  //Make new input appear
  var input = document.createElement("INPUT");
  input.setAttribute("type","text");
  input.setAttribute("id","billing_add_input");
  input.setAttribute("name","billing_address");
  var newInput = document.getElementById("fill_input");
  newInput.appendChild(input);

  //Make removing input button appear
  var removeBillingAddButton = document.createElement("BUTTON");
  removeBillingAddButton.setAttribute("id","remove_billing_add_button");
  removeBillingAddButton.appendChild(document.createTextNode("Remove billing address"));
  document.getElementById("remove_billing_add").appendChild(removeBillingAddButton);

  removeBillingAddButton.onclick = removeBillingAdd; //If "Remove billing address" button is clicked, function removeBillingAdd () is called
}

//This function is called in function addBillingAdd()
function removeBillingAdd() {
  var input = document.getElementById("billing_add_input");
  var removeBillingAddButton = document.getElementById("remove_billing_add_button");
  input.remove();
  removeBillingAddButton.remove();
  billingAddTest = true;
}


function displayModal () {
  var modalBox = document.getElementById("modal");
  modalBox.style.display = "block";

  var closeButton = document.getElementById("close_button");
  closeButton.onclick = closeModal;
}

function closeModal() {
    var modalBox = document.getElementById("modal");
    modalBox.style.display = "none";
}

/*function billingAddress() {
  var billingAdd = document.getElementById("billing_add");
  billingAdd.onlclick = addBillingAdd;
}*/
