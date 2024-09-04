<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        *{
            font-family: 'Poppins' , sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border:none;
            text-transform: capitalize;
            transform: all .2s linear;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items:center;
            padding:25px;
            min-height: 100vh;
            background:#176B87;
            padding-bottom:70px;
        }
        .container form{
            padding: 20px;
            width:500px;
            background:#86B6F6;
		
        }
        .container form .row{
            display: flex;
            flex-wrap:wrap;
            gap:15px;
        }
       
        .container form .row .col .title{
            font-size:20px;
            color:#B4D4FF;
            padding-bottom:5px;
            text-transform:uppercase;
			text-align:center;
        }
        .container form .row .col .inputbox{
            margin:15px 0;
        }
        .container form .row .col .inputbox span{
            margin-bottom:10px;
            display:block;
        }
        .container form .row .col .inputbox input,select{
            width:100%;
            border:1px solid #ccc;
            padding:10px 15px;
            font-size:15px;
            text-transform:none;
        }
        .container form .row .col .inputbox input:focus,select{
            border:1px solid #000;
        }
        .container form .row .col .flex{
            display:flex;
            gap:15px;
			
        }
        .container form .row .col .flex .inputbox{
            margin-top:5px;
			margin-left:5px;
        }
        .container form .row .col .inputbox img{
            height:34px;
            margin-top:5px;
            filter:drop-shadow(0 0 1px #000);
        }
        .container form .submit-btn{
            width:100%;
            padding:12px;
            font-size:17px;
            background:#B4D4FF;
            margin-top:5px;
            cursor: pointer;
        }
        .container form .submit-btn:hover{
            background:#176B87;

        }
    </style>
</head>
<body>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputbox">
                        <span>card accepted:</span>
                        <img >
                    </div>
                    <div class="inputbox">
                        <span>name on card :</span>
                        <input type="text" placeholder="abc xyz">
                    </div>
                    
                    <div class="inputbox">
                        <span>Credit card number:</span>
                        <input type="number" placeholder="1234-5678-9101-1121">
                    </div>
                    <div class="inputbox">
                        <span>Exp month:</span>
                        <!--<input type="text" placeholder="jan"> -->
						<select name="Month">
                            <option value selected >Select month</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
                        </select>
                    </div>

                    <div class="flex">
                        <div class="inputbox">
                            <span>Exp year:</span>
                            <input type="text" placeholder="2000">
                        </div>
                        <div class="inputbox">
                            <span>Cvv:</span>
                            <input type="text" placeholder="1234">
                        </div>
                    </div>
                </div>

            </div>

            <input type="submit" value="proceed to check out" class="submit-btn">

        </form>
    </div>
</body>
</html>