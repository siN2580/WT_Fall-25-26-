<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial;
      padding: 30px;
      background-color: white;
    }
 
    h2 {
      text-align: center;
      color: black;
    }
 
    form {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
    }
    #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003366;
    }
 
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
 
  <h2>Registration Form</h2>
 
  <form onsubmit="return handleSubmit()">
    <label>Name:</label>
    <input type="text" id="name" />
 
    <label>Email:</label>
    <input type="email" id="email" />
 
    <label>Phone Number:</label>
    <input type="text" id="number">
 
    <label>Password:</label>
    <input type="password" id="pass" />

    <label>Confirm Password:</label>
    <input type="password" id="cpass" />
 
    <button type="submit">Submit</button>
  </form>
 

  <div id="error"></div>
  <div id="output"></div>
 
  <script>
    function handleSubmit() {
     
      var name = document.getElementById("name").value.trim();
      var email = document.getElementById("email").value.trim();
      var number = document.getElementById("number").value.trim();
      var pass = document.getElementById("pass").value;
      var cpass =document.getElementById("cpass").value;
 
      var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");
 
    
      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";
 
     
      if (name === "" || email === "" || number === "" || pass === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }
 
      if (isNaN(number) || number.length !==11) {
        errorDiv.innerHTML = " Phone number must be Numeric and 11 character long.";
        return false;
      }
 
      if (!email.includes("@")) {
        errorDiv.innerHTML = " Enter a valide email address";
        return false;
      }
      if(pass!==cpass)
      {
        errorDiv.innerHTML="Password doesn't match";
        return false;
      }
 
 
      outputDiv.innerHTML = `
        <strong>Registration Complete!</strong><br><br>
        Name: ${name}<br>
        Email: ${email}<br>
        Phone Number: ${number}<br>
      `;
 
      return false;
    }
  </script>
 
</body>
</html>
