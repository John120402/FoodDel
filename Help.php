<!DOCTYPE html>
<html>
  <head>
    <title>Help</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">
    <script src="app.js" defer></script>
    <style>
body {
  background-repeat: no-repeat;
  background-size: auto;
  background-image: url(https://th.bing.com/th/id/R.b4091a77bb37c01b8fd064fb3d58f1c1?rik=ln0Ma9Ci8gq8eA&pid=ImgRaw&r=0);
  background-position: center;
}
  
.div1{
   position: relative;
   width: 100%; 
   font-family: 'Times New Roman', Times, serif;
  }
  
  .div1 a{
    color: rgb(0, 0, 0);
    font-size: 30px;
   }
   
   .div1 a:hover{
    color: grey;
 }
 
  .div1 h2 {
    position: absolute;
    left: 5%;
    transform: translate( -10%, -170%);
    font-size: 25px;
  }

h1{
   text-align: center;
  color: black;
  font-size: 30px;
  font-family: 'Times New Roman', Times, serif;
}

      h2{
        color: black;
        text-decoration: none;
      }

      .div2{
         text-align: center;
      }

      .div3{
         text-align: center;
      }

      .div4{
         font-size: 30px;
         font-family: 'Times New Roman', Times, serif;
      }
summary{
    font-size: 20px;
}

details{
    border-radius: 5px;
    margin-bottom: 1%;
    margin-left: 3%;
    width: 70%;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.5) 0px 0px 0px 1px;
}

details summary, details p{
    padding: 20px;
}

details summary{
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

details p{
    border-top: 2px solid gray;
    color: black;
    font-size: 20px;
}

input[type="search"] {
    border-radius: 20px;
    width: 350px;
    height: 38px;
    font-size: large;
  }
 
  input[type="search"]::placeholder {
    font-family: Arial, sans-serif;
    padding-left: 28px;
    background: url('https://th.bing.com/th/id/OIP.YC72S8MaYvnr1SPZf8nzaQHaHa?w=218&h=218&c=7&r=0&o=5&pid=1.7') no-repeat left center;
    background-size: 20px 20px;
    height: 20px;
  }

.text{
   font-size: 20px;
}

.footer{
    background-color: white;
    border-radius: 5px;
    margin-bottom: 1%;
    margin-left: 1%;
    width: 98%;
    height: 25vh;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.5) 0px 0px 0px 1px;
}

.header2 p{
   float: left;
   margin-top: 2%;
   margin-left: 2%;
   font-family: 'Times New Roman', Times, serif;
   font-size: 20px;
   width: 90%;
}

.foot{
   float: left;
   margin-left: 2%;
   font-family: 'Times New Roman', Times, serif;
   font-size: 20px;
}
</style>
</head>
<body>

  <div class="div1">
    <a style="text-decoration: none;" href="index.php"><img src="https://img.icons8.com/material-rounded/256/home.png" alt="" width="42" height="45"></a>
    <h2><a href="index.php">Home</a></h2>
     <hr class="dropdown-divider">
 </div>

 <div class="div2">
  <h1> Hi! How can we help you?</h1>
 </div>

 <div class="div3">
  <form class="d-flex" role="search">
    <input class="form-control me-4" type="search" id="search" name="search" placeholder="Search..." aria-label="Search">
  </form>
 </div>

 <div class="div4">
<ul> Suggested Questions </ul>
<hr class="dropdown-divider">
 </div>
<br>


 
 <details>
    <summary>How to order an item?
    </summary>
    <div class="text">
    <p>To order an item, first you must find the item you wanted then click order. After clicking the order button, you must fill out the data needed like shipping address and payment method to place your order.   
    </p>
    </div>
 </details>


 <details>
    <summary>How to return an item?
    </summary>
    <div class="text">
    <p>To return an item, you can request for return in order history. To accept your request you must provide a picture of the item and tell what is your reason for returning the item.
    </p>
    </div>
 </details>

 <details>
    <summary>How do i track my orders?
    </summary>
    <div class="text">
    <p>You can track your order/s in the setting then view orders to track your orders to know the order status.</p>
    </div>
 </details>

 <details>
    <summary>How to cancel my order?
    </summary>
    <div class="text">
    <p>To cancel your order/s you can go to setting then view orders and click the order/s you wanted to cancel then tell the reason why you wanted to cancel your order/s.   
    </p>
    </div>
 </details>

 <details>
    <summary>How to paid via e-wallet?
    </summary>
    <div class="text">
    <p>You can paid your order/s via e-wallet by choosing the payment options when ordering item/s.  
    </p>
    </div>
 </details>

 <details>
    <summary>How to report my item courier?
    </summary>
    <div class="text">
    <p>To report a problem you can go to our contact services to indicate your report or you can go to setting then view orders and click "To Review" and indicate your report.
    </p>
    </div>
 </details>

 <details>
    <summary>How to transfer money to my account?
    </summary>
    <div class="text">
    <p>To transfer money you can go to setting then click 'Wallet' and you will see a transfer button.Enter the receiver name, account number and amount to transfer then enter and you will receive a verification code to verify then click transfer money.   
    </p>
    </div>
 </details>

 <details>
    <summary>What is the average delivery time?
    </summary>
    <div class="text">
    <p>The average delivery is not fixed due to possible traffic and  differant locations. But we ensure you that we will deliver your orders by the time you need it.   
    </p>
    </div>
 </details>

 <details>
    <summary>Received different ordered item.
    </summary>
    <div class="text">
    <p>If you received different orders, you can request for return in order history. To accept your request you must provide a picture of the item and tell what is your reason for returning the item.   
    </p>
    </div>
 </details>

 <details>
    <summary>Extra charge for ordered item.
    </summary>
    <div class="text">
    <p>If the delivery ask for extra charge for your ordered item/s, you can report the courier to our contact services to indicate your report or you can go to setting then view orders and click "To Review" and indicate your report.   
    </p>
    </div>
 </details>
 <br>

<div class="footer">
<div class="text">

 <div class="header2">
   <p>For further help assistant please got to our <a style="text-decoration: underline; color: black;" href="ContactS.php">Contact Services.</a></p>
 </div>
 <hr class="dropdown-divider" style="width: 37%; margin-left: 2%;">
<div class="foot">
   <p>Or let know more <a style="text-decoration: underline; color: black;" href="About us.php">About us.</a></p>
</div>

</div>
</div>

</body>
</html>