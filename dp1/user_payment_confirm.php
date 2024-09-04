<?php

include 'config.php';
error_reporting(0);
session_start();
$bookingId = $_GET['room_book_id'];
    //$sql = "select * from roombook where room_book_id='$bookingId'";
    //$res = mysqli_query($conn,$sql);

    //if (mysqli_num_rows($res) > 0) {
      //  $row = mysqli_fetch_assoc($res);
        //if($row['status'] != 'NotConfirm'){
          //  echo "<script>alert('Enter correct Booking id');</script>";
            //header("location: user_payment.php");
        //}
    //}

$_SESSION['payment_method']=$_POST['payment_method'];
       // } else {
    //     echo "Form data not submitted.";
    // }
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

    .payment-form {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #f9f9f9;
    }
    .payment-label, .payment-method-label, .card-detail-label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }
    .payment-radio {
        margin-right: 5px;
    }
    .payment-options {
        margin-bottom: 20px;
    }
    .payment-step {
        display: none;
        margin-bottom: 20px;
    }
    .payment-instruction {
        font-style: italic;
        margin-bottom: 10px;
    }
    .card-input, .payment-input {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .submit-btn {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #5cb85c;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }
    .submit-btn:hover {
        background-color: #4cae4c;
    }

    .inputbox{
            margin:15px 0;
        }
        .inputbox span{
            margin-bottom:10px;
            display:block;
        }
        .inputbox input{
            width:90%;
            border:1px solid #ccc;
            padding:10px 15px;
            font-size:15px;
            text-transform:none;
        }
        .inputbox input:focus{
            border:1px solid #000;
        }

        .inputbox1{
            margin:15px 0;
        }
        .inputbox1 span{
            margin-bottom:5px;    
            /* display:block; */
        }
        .inputbox1 select{
            width:215px;
            border:1px solid #ccc;
            padding:10px 15px;
            font-size:15px;
            text-transform:none;
        }
        .inputbox1 select:focus{
            border:1px solid #000;
        }
        .flex{
            display:flex;
            gap:15px;
        }
        .inputbox{
            margin-top:5px;
        }
        .inputbox img{
            width: 40%;
            height:20%;
            /* object-fit: contain; */
            /* mix-blend-mode:darken; */
        }

        .y{
            /* margin-top: 18px; */
        }
</style>
  </head>
  
  <body>
  <div>
        <div>
            <?php include 'user_view.php'; ?>
        </div>
        <div style="margin-left:25%;padding:1px 16px;height:1000px;">
            <!-- Payment Form -->
            <form action="paymentaction.php<?php  echo"?bid=".$bookingId; ?>" method="post" class="payment-form">
                <label for="payment-method" class="payment-label">Choose a payment method:</label><br>
                <div class="payment-options">
                    <input type="radio" id="cash" name="payment_method" value="cash" class="payment-radio" onclick="">
                    <label for="cash" class="payment-method-label">Cash</label><br>
                    <input type="radio" id="card" name="payment_method" value="card" class="payment-radio">
                    <label for="card" class="payment-method-label">Debit/Credit Card</label><br>
                </div>
                <!-- Additional steps for payment method -->
                <div id="payment-steps" class="payment-steps">
                    <div id="cash-steps" class="payment-step">
                        <p class="payment-instruction">Please pay the amount at the front desk.</p>
                    </div>
                    <div id="card-steps" class="payment-step">
                        <p class="payment-instruction">Please enter your card details below.</p>
                        <div class="inputbox">
                        <span>card accepted:</span>
                        <img src="../image/card.jpg" alt="">
                    </div>
                    <div class="inputbox">
                        <span>name on card :</span>
                        <input type="text" placeholder="mr.patel" name="cardName">
                    </div>
                    
                    <div class="inputbox">
                        <span>Cradit card number:</span>
                        <input type="number" placeholder="1234-5678-9000-9878" pattern="[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}" oninvalid="this.setCustomValidity('Card number must be 16 digit')" oninput="this.setCustomValidity('')" name="cardNumber">
                    </div>
                    

                    <div class="flex">
                        <div class="inputbox1">
                            <span>Exp month:</span>
                            <select name="cardMonth">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="inputbox1">
                            <span>Exp year:</sapn>
                            <select class="y" name="cardYear">
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                                <option value="2034">2034</option>
                                <option value="2035">2035</option>
                            </select>
                        </div>
                    </div>
                        <div class="inputbox">
                            <span>Cvv:</sapn>
                            <input type="text" placeholder="123" name="cardCvv">
                        </div>
                    </div>
                </div>
                <label for="amount" class="payment-label">Enter Amount:</label><br>
                <input type="number" id="amount" name="amount" value="<?php
                    $sql = "SELECT * FROM roombook WHERE room_book_id = '$bookingId'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $price = $row['total_price'];
                        echo $price;
                    }
                ?>" class="payment-input" readonly><br>
                <input type="submit" value="Submit" class="submit-btn" name="submit_btn">
            </form>

            <!-- End of Payment Form -->
        </div>
    </div>
    <script>
    // Script to show and hide payment steps based on the selected payment method
    document.querySelectorAll('input[name="payment_method"]').forEach(input => {
        input.addEventListener('change', function() {
            document.getElementById('payment-steps').style.display = 'block';
            if(this.value === 'cash') {
                document.getElementById('cash-steps').style.display = 'block';
                document.getElementById('card-steps').style.display = 'none';
            } else if(this.value === 'card') {
                document.getElementById('cash-steps').style.display = 'none';
                document.getElementById('card-steps').style.display = 'block';
            }
        });
    });
</script>

  </body>
  </html>
