<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>BOOKING FORM</title>
	 <link rel="stylesheet" type="text/css"href="css/Booking.css">
	 <style type="text/css">
		*{
			margin:0;
			padding:0;
		}
		body{
			background-image:url(Book.jpg);
			background-position:center;
			background-size:cover;
			font-family:sans-serif;
			margin-top:40px;
			
		}
		.book{
			width:800px;
			background-color:rgb(0,0,0,0.5);
			margin:auto;
			color:#FFFFFF;
			padding:10px 0px 10px 0px;
			text-align:center;
			border-radius:15px 15px 0px 0px;
		}
		.main{
			width:800px;
			background-color:rgb(0,0,0,0.5);
			margin:auto;
		}
		form{
			padding:10px;
		}
		#name{
			width:100%;
			height:100px;
		}
		.name{
			position:relative;
			margin-left:25px;
			margin-top:30px;
			width:125px;
			color:white;
			font-size:18px;
			font-weight:700px;
		}
		.firstname{
			position:relative;
			left:200px;
			top:-37px;
			line-height:40px;
			border-radius;6px;
			padding:0 22px;
			font-size:16px;
		}
		.lastname{
			position:relative;
			left:417px;
			top:-80px;
			line-height:40px;
			border-radius;6px;
			padding:0 22px;
			font-size:16px;
			color:#555;
		}
		.firstlabel{
			position:relative;
			color:#E5E5E5;
			text-transform:capitalize;
			font-size:14px;
			left:203px;
			top:-45px;
		}
		.lastlabel{
			position:relative;
			color:#E5E5E5;
			text-transform:capitalize;
			font-size:14px;
			left:195px;
			top:-45px;
		}
		.mail,.in,.out,.call,.type,.price,.no,.amount{
			position:relative;
			left:199px;
			top:-37px;
			line-height:40px;
			width:460px;
			border-radius:6px;
			padding:0 22px;
			font-size:16px;
			color:#555;
		}
		button{
			background-color:#3BAF9F;
			display:block;
			margin:20px 0px 0px 20px;
            text-align:center;
			border-radius:12px;
			border:2px solid #366473;
			padding:14px 110px;
			outline:none;
			color:white;
			align:center;
			
		}
		
	 
	 </style>
	 
</head>


<body>
<div class="book"><h1 >BOOKING FORM</h1></div>
<div  class="main">
    <form   action=""  method="POST">
	
        <div id="name" >
		<h2 class="name">NAME</h2>
		<input class="firstname"type="text"  name="first_name"><br>
          <label class="firstlabel">First Name</label>
        <input class="lastname"type="text"  name="last_name" > 
         <label class="lastlabel">Last Name</label>
		</div>
        
        
          <h2 class="name">E-mail:</h2>
          <input class="mail" type="email" name="customer_email" value="" >
         <br>
          <h2 class="name">Check In: </h2>
          <input type="date" class="in" name="In_date" value="" >
         <br>
          <h2 class="name">Check Out: </h2>
          <input type="date" class="out" name="Out_date" value="" >
         <br>
          <h2 class="name">Phone: </h2>
          <input type="number" class="call" name="u_phone" value="" >
        <br>
          <h2 class="name">Room Type: </h2>
          
            <select  class="type" name="room_type" >
              <option value="" disabled selected>Please select from the following...</option>
              <option value="garden_view">GARDEN VIEW</option>
              <option value="street_view">STREET VIEW</option>
              <option value="Ocean_view">OCEAN VIEW</option>
            </select>
         <br> 
      
          <h2 class="name">Room Price:</h2>
          <input type="text" class="price" name="room_price" value="" >
        <br>
          <h2 class="name">Rooms No:</h2>
          <input type="number" class="no" name="room_no" value="" >
         <br>
          <h2 class="name">Total Amount:</h2>
          <input type="number" class="amount"name="total_amount" value="" >
      
           <br>
		   <button  type="submit">
		      BOOK NOW
		   </button>
       </div>
	</form>
	

</body>
</html>