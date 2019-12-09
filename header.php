body{
			margin: 0;
		}

		.header{
			border:3px solid black;
			
			height: 70px;

		}

		#logo{
			text-align: center;
			text-decoration: none;
			color:black;
			
			position: absolute;
			left:30px;
			top:18px;
			font-size: 30px;

		}

		.search_container{
			position: absolute;
			left:260px;
			top:21px;
			
			border:2px solid red;
		}

		.search_container input[type=text]{
			border:1px solid black;
			
			
			width:450px; 
			height: 30px;
		}

		.search_container button{
			height: 34px;
			margin-left: -4px;
		}

		.header_links{
			
			position: absolute;
			top:24px;
			right:30px;
		}

		.header_links a{
			text-decoration: none;
			color:black;
			text-align: center;
			font-size: 17px;

			
			margin-right:  10px;
			margin-left: 10px;
		}

		.header_links a:hover{
			border-bottom: 3px solid red;
		}


		.header_links .icon{
			display: none;
		}





		@media screen and (max-width: 800px) {

			#logo{
				font-size: 20px;
				position: absolute;
				top:25px;

			}
			.header_links a{
				position:relative;
				top:5px;
				

			}
 		 	.header_links a:not(:first-child) {
 		 		display: none;

 		 	}
  			.header_links a.icon {
    			float: right;
    			display: block;
  			}
  			.header_links a.icon:hover {
    			border-bottom: none;
  			}


		}

		@media screen and (max-width: 800px) {
  			.header_links.responsive {
  				position: absolute;
  				right: 20px;
  				width: 130px;
  				background-color: orange;
  			}
  			

  			.header_links.responsive .icon {
   			 	position:relative;
   			 	top:0px;
   			 	right: 0px;
    		
    		}
  			

  			.header_links.responsive a {

    			float: none;
    			display: block;
    			text-align: center;
    			margin-bottom: 5px;
  			}
}


	</style>
</head>
<body>

	<div class="header">
		<a href="#" id="logo">FindBook</a>

		<div class="search_container">
			<form class="search_bar_form">
				<input type="text" name="search_Bar" placeholder="Search...">
				<button type="submit"><i class="fa fa-search" name="submit"></i></button>
			</form>
		</div>

		
		<div class="header_links" id="header_links">
			<a href="#">Login</a>
			<a href="#">Post Book</a>
			<a href="#">What to read?</a>
			<a href="#">About us</a>
			<a href="#">Favorites</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    		<i class="fa fa-bars"></i>
  			</a>
		</div>
		

	
	</div>


<script>
function myFunction() {
  var x = document.getElementById("header_links");
  if (x.className === "header_links") {
    x.className += " responsive";
  } else {
    x.className = "header_links";
  }
}
</script>
