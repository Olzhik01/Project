<!DOCTYPE html>
<html>
<head>
	<title>Rachel Pastan</title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/ico">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" type="text/css" href="css/media.css">

	<style type="text/css">
		@media screen and (max-width: 1230px) {
			
			
			
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

		@media screen and (max-width: 1230px) {
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


		@media screen and (max-width: 890px){
      		
      		#logo{
        		position: absolute;
        		font-size: 25px;
        		top:21px;
      		}

      		.search_container{
        		position: absolute;
        		left:160px;
       			top:21px;
        		width: 400px;
        
      		}

      		.search_container input[type=text]{
        		width: 300px;

      		}
    
    	} 


    	@media screen and (max-width: 696px){
    		#contacts_logo{
    			display: grid;
    			justify-items: center;
    			
    		}

    		.get_in_touch{
    			line-height: 1.6;

    		}

    	} 


		@media screen and (max-width: 670px){
			#logo{
				position: absolute;
				font-size: 23px;
				top:25px;
				left:15px;
			}

			.search_container{
				position: absolute;
				left:130px;
				top:26px;	
			}


			.search_container input[type=text]{
				width: 200px;
				height: 25px;
			}

			.search_container button{
				height: 29px;
			}

			#big_word{
				font-size: 20px;
			}

			#small_word{
				font-size: 10px;
			}

			#truck_icon{
				font-size: 20px;
			}

		}




	@media screen and (max-width: 480px){
      .search_container{
        position: absolute;
        left:120px;
        top:26px; 
      }

      .search_container input[type=text]{
        width: 150px;
        height: 25px;
      }

      .search_container button{
        height: 29px;
      }

      

      .header_links.responsive {
          position: absolute;
          right: 0px;
          width: 130px;
          background-color: orange;
        }

        .header_links.responsive .icon {
          position:relative;
          top:0px;
          right: 0px;
        
        }

        .header_links .icon{
          position: absolute;
          right: -20px;
        }

        .header_links.responsive a {
          font-size: 15px;
        }


    }

    @media screen and (max-width: 385px){

      .search_container {
        display: none;
      }


    }


   @media screen and (max-width: 365px){


   	.get_in_touch{
   		/*justify-items: center;*/
   	}

    /*  .footer{
        display: grid;
        grid-template-columns: repeat(1,1fr);
        grid-gap: 0px;
        font-size: 15px;
      }

      #useful_links_logo{
        margin: 0;
          display: grid;
          justify-self:center; 
        font-size: 18px;
      }

      .useful_links{
      
        display: grid;
        align-self:center;


      }

      .links li{
        margin-left: -30px;
        margin-bottom: 5px; 
      }
	*/

      
	} 

  @media screen and (max-width: 200px){
      #logo{
        position: absolute;
        top:10px;
        left:20px;
      }
      

      .header_links {
        position: absolute;
        left:10px;
        top:40px;
        
        
      }
    }

    
    
    



		


		


		
		
		*{
			font-family: "Ubuntu","Helvetica Neue",Helvetica,Arial,sans-serif;
		}

		body{
			margin: 0;
			
			background-color: #EBEBEB;
		}


		/*Header*/
		.header{
			position: relative;
			background-color: #FF8C00;
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
			top:30px;
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
			border-bottom: 3px solid white;
		}


		.header_links .icon{
			display: none;
			z-index: 999;
		}

		#show_search{
			display: none;
		}
	
	


		

		/*Header finish*/


/*===============================================================================================================*/
		/*Footer start*/


		.footer{
			
			
			
			position: relative;
			left: 0;
			bottom:0;

			background-color: #FF8C00;
			margin-left: 20px;
			margin-right: 20px;

			display: grid;
			grid-template-columns: repeat(3,1fr);
			grid-gap:10px;

			margin-top:10px;

			grid-auto-rows: minmax(50px,auto); 

			


		}
		.foot{
			
			grid-column-start:1;
			grid-column-end: -1;	 
			display: grid;
			grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
		}



		.useful_links{
			
			display: grid;
			justify-content: center;


		}

		#useful_links_logo{
			margin-top:10px;
			margin-bottom: 10px;
			margin-left:20px;
		  
			font-size: 25px;
		}

		.links{
			
			
			margin-bottom: 10px; 
		}

		.links li{
			margin-bottom: 10px; 
		}

		.links ul{
			list-style-type: none;
		}

		.links a{
			text-decoration: none;
			color:black;
			
		}



		.links a:hover{
			
			color:#268ccc;
		}








		/*Contacts on footer*/
		.contacts{
			display: grid;
			justify-self:center;
			
		}



		.get_in_touch{
			display: grid;
			grid-template-columns: repeat(auto-fill,minmax(150px,1fr)); 
			
		}


		#contacts_logo{
			margin-left: 40px;
			margin-top:10px;
			margin-bottom: 10px;
			font-size: 25px;
		}

		#location_icon{
			font-size: 18px;

		}

		#phone_icon{
			font-size: 23px; 
		}
		/*Contacts on footer finish*/








		/*Follow us on footer*/

		.follow_us{
			
			
			
			
			
					
		}

		.follow_us a{
			text-decoration: none;

		}



		#follow_word{
			font-size: 25px;
			margin-top: 10px;
			margin-bottom: 10px;
			display: grid;
			justify-items: center;
			align-self: center;
			grid-column-start: 1;
			grid-column-end: -1;
			

		}

		.follow_logo {
			
			display: grid;

			grid-template-columns: repeat(2,1fr);
			grid-gap: 10px;




		}

		.follow_logo>div{
			display: grid;
			justify-self: center;
			align-self: center;
			

		}


		

		#facebook_icon{
			border:1px solid red;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content: center;
			align-items: center;
			background-color: red;
			color: white;
		}


		#facebook_icon:hover{
			color:#268ccc;
		}

		#twitter_icon{
			border:1px solid red;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content: center;
			align-items: center;
			background-color: red;
			color: white;

		}

		#twitter_icon:hover{
			color:#268ccc;
		}

		#vk_icon{
			border:1px solid red;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content: center;
			align-items: center;
			background-color: red;
			color: white;

		}

		#vk_icon:hover{
			color:#268ccc;
		}


		#google_icon{
			border:1px solid red;
			background-color: red;
			color: white;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content:  center;
			align-items: center;


		}

		#google_icon:hover{
			color:#268ccc;
		}

		#insta_icon{
			border:1px solid red;
			background-color: red;
			color: white;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content:  center;
			align-items: center;

		}

		#insta_icon:hover{
			color:#268ccc;
		}


		#git_icon{
			border:1px solid red;
			background-color: red;
			color: white;
			border-radius: 50px;
			width: 30px;
			height: 30px; 
			display: grid;
			justify-content:  center;
			align-items: center;

		}

		#git_icon:hover{
			color:#268ccc;
		}





		/*Follow us on footer finish*/




		.rights{
			border-top: 1px solid black;
			display: grid;
			grid-template-columns: 1fr;
			grid-column-start:1;
			grid-column-end: -1; 
			justify-self: center;
			
			
		}


		/*Footer ends*/
/*=================================================================================================*/
		
		
		

		.main_page_categories{
			margin: 20px;
			margin-top: 40px;
			background-color: white;
			padding: 10px;
		}

		.categories_list{
			margin: 20px;
			display: grid;
			grid-template-columns:repeat(auto-fill,minmax(199px, 1fr));
			grid-gap: 20px; 
		}


		.link_kids{
			border: 1px solid gray;
			display: grid;
			justify-self: center;
			grid-template-columns: 1fr;
			grid-gap: 5px;
			border-radius: 5px;
		}

		.link_kids:hover{
			box-shadow: -1px 2px 8px 4px rgb(192,192,192);
		}

		#forKids{

			display: grid;
			justify-content: center;
			
		}

		.category_kids{
			
		}

		img{

			border-radius: 5px;
			width: 194px;
			height: 210px;
		}



		

		a{
			text-decoration: none;
			color: black;
		}


/*===========================================================================================*/		
		/*Orange layer*/


		.next_page{
			border: 3px solid #FF8C00;
			margin-top:20px; 
			margin-bottom: 20px;
			margin-right: 20px;
			margin-left: 20px;
			background-color: white;

			display: grid;
			grid-template-columns: repeat(1,1fr);
			grid-template-rows: repeat(1,200px);

		}


		.next_page>div{
			border: 1px solid #FF8C00;
			background-color: #FF8C00;
			display: grid;


		}
/*=====================================================================================================*/
	/*Rules page*/

		.rules_page{
			margin-top:20px; 
			margin-bottom: 20px;
			margin-right: 20px;
			margin-left: 20px; 
			background-color: white;

			display: grid;
			grid-template-columns: repeat(auto-fit,minmax(250px, 1fr));
			



		}




		.f_rule{
			
			display: grid;
			justify-content: center;
			
			grid-gap: 10px;

			


		}

		#truck_icon{

			
			color: orange;
			font-size: 150px;
			display: grid;
			justify-self: center;
		}

		#big_word{
			
			font-size: 20px;
			display: grid;
			justify-self: center;


		}

		#small_word{
			
			display: grid;
			justify-self: center;

			font-size: 16px;
			line-height: 1.6;

		}


		.intro{
			background-color: white;
		
			margin:20px;
			display: grid;

			line-height: 1.6;
			grid-template-columns: repeat(auto-fill,minmax(1fr, auto));

		}


		#intro_big{
		
			display: grid;
			grid-column-start: 1;
			grid-column-end: -1;
			grid-template-columns: repeat(auto-fit,minmax(150px,1fr));
			justify-items: center;
			font-size: 40px;
		}

		#intro_small{
			display: grid;
			grid-template-columns: 1fr;
			font-size: 17px;
		}
/*=====================================================================================================*/

		.withus{
			
			display: grid;
			justify-items: center;
		}

		.withus>span{
			font-size: 20px;
		}

		.withus>ul{
			
			display: grid;
			justify-items:center;
		}

		.lastIntro>span{
			display: grid;
			justify-items: center;
			font-size: 25px;
		}











/*================================================================================================================*/

		.category-kids-body{
			/*border: 1px solid black;*/
			margin: 20px;
			display: grid;
			

			grid-template-columns: 0.5fr 2fr 0.5fr;
			height: auto;
			
			grid-gap: 30px;

		}
/*====================================================================================================================*/
/*Left sidebar*/
		.left-category-sidebar{
			background-color: white;
			/*border: 1px solid red;*/
			
			

			display: grid;
			height: 480px;


			



			
			
		
			
		}

		.left-category-sidebar>a{
			
			border-bottom: 1px solid gray;
			

			display: grid;
			height: 30px;
			text-indent: 10px;
			
			
			
			align-items: center;

			
			

		}

		.left-category-sidebar>a:hover{
			box-shadow: -2px 3px 12px 1px rgba(0,0,0,0.75);
			
		}

		.left-category-sidebar span{
			color: orange;
		}


		
/*====================================================================================================================*/
/*Main bar*/
		.book-info{
			/*border: 1px solid black;*/
			display: grid;
			background-color: white;
			grid-template-columns: 1fr;
			
			height: auto;
			
		}

		.book-name{
			border-bottom: 1px solid gray;
			
			display: grid;
			height: 80px;
			grid-template-columns: repeat(auto-fit,minmax(150px, 1fr));
		}

		.book-name span{
			display: grid;
			align-self: center;
			margin: 20px;
			
			font-size: 30px;
			
		}

		.book-details{
			
			height: 400px;
			display: grid;
			grid-template-columns: repeat(auto-fit,minmax(200px, 1fr));
		}

		.book-image{
			
			display: grid;
			margin: 20px;
			align-self: center;
			justify-self: center;
			

		}

		.image-book{
			width: 220px;
			height: 290px;
		}

		.book-character{
			
			display: grid;
			grid-column-start: 2;
			grid-column-end:-1;
			grid-template-columns:repeat(auto-fit,minmax(400px, 1fr));



		}

		#charac-word{
			
			display: grid;
			font-size: 25px;
			height:40px;
			justify-self: center;
			
		}

		tr,td{
						

		
		}
		td{
			padding: 10px;
			display: grid;
			justify-self: center;
			
		}

		tr{
			border-bottom: 1px solid gray;
			display: grid;
			grid-template-columns: repeat(2,1fr);



		}

		
		.table-book-character{
			
			border-collapse: collapse;
			display: grid;
			height: 350px;
			align-items: center;



			
		}



		.book-overview{
			border-top: 1px solid gray;
			height: auto;
			display: grid;
			grid-template-columns: 1fr;
		}

		#overview-word{
			font-size: 25px;
			
			height: 40px;
			
			justify-self: center;
		}

		#story-book{
			text-indent: 40px;
			font-size: 17px;
			
			line-height: 1.6;
		}

		
/*====================================================================================================================*/
/*Right sidebar*/
		.category-books-filter{
			/*border: 1px solid black;*/
			height: 300px;
			background-color: white;
			display: grid;
			grid-template-columns: 1fr;
			grid-template-rows: 80px;


		}
		





		.filter-word{
			/*border: 1px solid red;*/
			text-indent: 5px;
			font-size: 25px;
			color: #FF8C00;
			align-self: center;


		}

		.filter-form-params{
			/*border: 1px solid blue;*/

		}

		.filter-form-params input[type=submit]{
			font-size: 16px;
			color: white;
			border: 1px solid orange;
			background-color: #FF8C00;

		}


		.filter-form-params form{
			/*border: 1px solid blue;*/
			display: grid;
			grid-gap: 5px;
			grid-template-columns:200px;
			grid-template-rows: repeat(5,30px);
			justify-content: center;
		}


		


	</style>
</head>
<body>
	<?php require_once "blocks/header.php" ?>

	<div class="category-kids-body">


		

	

	<div class="left-category-sidebar">

		<a href="category_kids.php">Детям</a>
		<a href="category_kids.php">Детективы</a>
		<a href="category_kids.php">Ужасы</a>
		<a href="category_kids.php">Фэнтези и фантастика</a>
		<a href="category_kids.php">Драмы</a>
		<a href="category_kids.php">Биография</a>
		<a href="category_kids.php">Поэзия</a>
		<a href="category_kids.php">Юмор и сатира</a>
		<a href="category_kids.php">Военная литература</a>
		<a href="category_kids.php">Романы</a>
		<a href="category_kids.php">Триллеры</a>
		<a href="category_kids.php">Духовная литература</a>
		<a href="category_kids.php">Научно-Образовательная</a>
		<a href="category_kids.php">Боевики</a>
		<a href="category_kids.php">Приключения</a>

	</div>





	<div class="book-info">

		<div class="book-name">
			<span id="name-book">Alena</span>
		</div>

		<div class="book-details">
			
			<div class="book-image">
				<img src="img/kids/1.jfif" class="image-book">
			</div>

			<div class="book-character">
				<span id="charac-word">Characteristics</span>
				

				<table class="table-book-character">
					<tr>
						<td>Author</td>
						<td>Rachel Pastan</td>
					</tr>

					<tr>
						<td>Amount of pages</td>
						<td>300</td>
					</tr>

					<tr>
						<td>Release date</td>
						<td>2019</td>
					</tr>

					<tr>
						<td>Status</td>
						<td>Available</td>
					</tr>

					<tr>
						<td>Age restriction</td>
						<td>+6</td>
					</tr>

					<tr>
						<td>Format</td>
						<td>A4</td>
					</tr>

					<tr>
						<td>Weight</td>
						<td>75g</td>
					</tr>

					<tr>
						<td>Cover</td>
						<td>Glossy</td>
					</tr>
				</table>
			
			</div>

		</div>

		<div class="book-overview">
			<span id="overview-word">Overview</span>

			<span id="story-book">At the Venice Biennale, an aspiring assistant curator from the Midwest meets Bernard Augustin, the wealthy, enigmatic founder of the Nauk, a cutting-edge art museum on Cape Cod. It’s been two years since the tragic death of the Nauk’s chief curator, Augustin’s childhood friend and muse, Alena. When Augustin offers the position to our heroine (who, like du Maurier’s original, remains nameless) she dives at the chance—and quickly finds herself well out of her depth.
			The Nauk echoes with phantoms of the past—a past obsessively preserved by the museum’s business manager and the rest of the staff. Their devotion to the memory of the charismatic Alena threatens to stifle the new curator’s efforts to realize her own creative vision, and her every move mires her more deeply in artistic, erotic, and emotional entanglements. When new evidence calls into question the circumstances of Alena’s death, her loyalty, integrity, and courage are put to the test, and shattering secrets surface.

			Stirring and provocative, Alena is the result of a delicious visitation of one of the most popular novels of the twentieth century on a brilliant and inventive novelist of the twenty-first.
			</span>
			
		</div>
	
	</div>










	<div class="category-books-filter">

		<div class="filter-word">
			<span>Filter by parameters</span>
		</div>

		<div class="filter-form-params">
			<form>
				<input type="text" name="from_page" placeholder="from">
				<input type="text" name="to_page" placeholder="to">
				<input type="text" name="author" placeholder="author">
				<input type="text" name="book_name" placeholder="book name">

				<input type="submit" name="filter" value="Filter">
			</form>
		</div>


		
	</div>
	

	</div>



	<?php require_once "blocks/footer.php" ?>
</body>
</html>
