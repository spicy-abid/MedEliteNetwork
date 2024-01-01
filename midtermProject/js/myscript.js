function formValidation() {
  return checkName() && genderCheck() && checkHomeAddress()&&
          checkEmailAndContact()&&
           checkEducationalInstitute()&&
           checkSpecialization()&&
           checkLicense()&&
           checkSchedule()&&
           checkPassword();
}

function checkName() {
  var fname = document.getElementById("firstName").value;
  var lname = document.getElementById("lastName").value;

  if (fname !== "") {
    if (lname !== "") {
      if ((fname.length < 2 || /[0-9\W]/.test(fname)) || (lname.length < 2 || /[0-9\W]/.test(lname))) {
        document.getElementById("firstNameER").innerHTML = "Invalid First Name<br>No Number, Special Character and Greater than two characters";
        document.getElementById("lastNameER").innerHTML = "Invalid Last Name<br>No Number, Special Character and Greater than two characters";
        return false; // Prevent form submission
      } else {
        document.getElementById("firstNameER").innerHTML = "";
        document.getElementById("lastNameER").innerHTML = "";
        return true; // Allow form submission
      }
    } else {
      document.getElementById("lastNameER").innerHTML = "Please Fill the Last Name";
      return false;
    }
  } else {
    document.getElementById("firstNameER").innerHTML = "Please Fill the First Name";
    return false;
  }
}

function genderCheck() {
  var gender = document.querySelector('input[id="gender"]:checked');

  if (!gender) {
    
    document.getElementById("genderER").innerHTML = "Please select a gender";
    return false;
  } else {
    // Gender is selected
    return true;
  }
}

function checkHomeAddress() {
  var haddress = document.getElementById("hAddress").value;
  var paddress = document.getElementById("pAddress").value;

  if (haddress !== null && paddress !== "") {
    // Home address is set
    return true;
  } else {
    document.getElementById("hAddressER").innerHTML = "Set home address";
    document.getElementById("pAddressER").innerHTML = "Set permanent address";
    return false;
  }
}

function checkEmailAndContact() {
  var email = document.getElementById("email").value;
  var contact = document.getElementById("contactNo").value;
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (email !== "" && contact !== "") {
    // Email and contact are set

    // Email validation
    if (emailPattern.test(email)) {
      // Email is valid
      return true;
    } else {
      document.getElementById("emailER").innerHTML = "Invalid email address";
      return false;
    }
  } else {
    document.getElementById("emailER").innerHTML = "Please set the mail";
    document.getElementById("contactER").innerHTML = "Please set the contact number";
    return false;
  }
}

function checkSpecialization() {
  var specializeIn = document.getElementById("specializeIn").value;

  if (specializeIn !== "") {
    // Specialization is selected
    return true;
  } else {
    document.getElementById("specializeInError").innerHTML = "Please select your category";
    return false;
  }
}
function checkEducationalInstitute() {
  var eInstitute = document.getElementById("eInstitute").value;

  if (eInstitute !== "") {
    // Educational Institute is provided
    return true;
  } else {
    document.getElementById("eInstituteER").innerHTML = "Please fill your institution name";
    return false;
  }
}
function checkLicense() {
  var licenseNo = document.getElementById("license").value;

  if (licenseNo !== "") {
  
         // document.getElementById("licenseER").innerHTML = "Please don't use an existing license";
      
      return true;
    
    
    
  } else {
    document.getElementById("licenseER").innerHTML = "Please write your license No here";
    return false;
  }
}

function checkSchedule() {
  var startSchedule = document.getElementById("start").value;
  var endSchedule = document.getElementById("end").value;

  if (startSchedule !== "" && endSchedule !== "") {
    document.getElementById("scheduleER").innerHTML = "";
    return true;
  } else {
    document.getElementById("scheduleER").innerHTML = "Please select your timing schedule for patients";
    return false;
  }
}


function checkPassword() {
  var password = document.getElementById("password").value;
  var cPassword = document.getElementById("cPassword").value;
  var passwordPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*()_+])[A-Za-z0-9!@#$%^&*()_+]{8,}$/;

  if (password !== "" && cPassword !== "") {
    if (password === cPassword) {
      if (passwordPattern.test(password)) {
        // Password is valid
        document.getElementById("passwordER").innerHTML = "";
        return true;
      } else {
        document.getElementById("passwordER").innerHTML = "Password must meet the criteria";
        return false;
      }
    } else {
      document.getElementById("passwordER").innerHTML = "Passwords do not match";
      return false;
    }
  } else {
    document.getElementById("passwordER").innerHTML = "Please fill both password fields";
    return false;
  }
}


function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}

function deletePatient(patientID) {
  var patientID = document.getElementById("patientID").value;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function ()
  {
      if (this.readyState == 4 && this.status == 200)
      {
          document.getElementById("result").innerHTML = this.responseText;
      }
  };
  xhttp.open("POST", "../../controller/adminControll/doctor_view_process.php?patientID=", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send("patientID="+patientID);
}

function viewPatient()
  {
    var fname = document.getElementById("fname").value;
    var xhttp = new XMLHttpRequest();
 
    xhttp.onreadystatechange = function ()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("result").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "../../controller/doctorControll/patientRecordProcess.php?fname=", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("fname="+fname);
}



function deletePatient(patientID)
  {alert("working");
  //  var patientID = document.getElementById("patientID").value;
    var xhttp = new XMLHttpRequest();
 
    xhttp.onreadystatechange = function ()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("result").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "../../controller/doctorControll/patientRecordProcess.php?patientID=", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send("patientID="+patientID);
}