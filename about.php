<!DOCTYPE html>
<html>
<head>
	<title>О нас</title>
	<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="style.css">


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


    @media screen and (max-width: 355px){
      .footer{
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


      #contacts_logo{
        margin: 0;
        font-size: 18px;
        display: grid;
        justify-self: center;
    }



    #follow_word{
      font-size: 18px;
      
      display: grid;
      justify-self: center;
      align-self: center;
      grid-column-start: 1;
      grid-column-end: -1;

    }
    
    .follow_logo {
      
      display: grid;

      grid-gap: 3px;


    }
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
		}

		#show_search{
			display: none;
		}
	
	


		

		/*Header finish*/


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


		.useful_links{
			
			display: grid;
			justify-self:center;


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
			justify-self: center;
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
		
		
		

		.main_page_categories{
			margin: 20px;
			margin-top: 40px;
			background-color: white;
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


		.next_page{
			border: 3px solid #FF8C00;
			margin-top:20px; 
			margin-bottom: 20px;
			margin-right: 20px;
			margin-left: 20px;
			background-color: white;

			display: grid;
			grid-template-columns: repeat(auto-fill,minmax(300px, 1fr));
			height: 200px;

		}


		.next_page>div{
			border: 1px solid #FF8C00;
			background-color: #FF8C00;
			display: grid;

		}


		.rules_page{
			margin-top:20px; 
			margin-bottom: 20px;
			margin-right: 20px;
			margin-left: 20px; 
			background-color: white;

			display: grid;
			grid-template-columns: repeat(auto-fill,minmax(400px, 1fr));



		}




		.f_rule{
			
			display: grid;
			grid-template-columns: 1fr;
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
			justify-items: center;
			font-size: 40px;
		}

		#intro_small{
			display: grid;
			grid-template-columns: 1fr;
			font-size: 17px;
		}


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

		/*index.php end*/
		/*about.php*/
		.our_history{
			border: 1px solid white;
			background-color: white;
			margin: 20px;
			

			display: grid;
			grid-template-columns: repeat(auto-fill,minmax(1fr, auto));


		}


		#hist{
			display: grid;
			grid-column-start: 1;
			grid-column-end: -1;
			justify-items: center;
			font-size: 40px;

		}

		#hist_word{
			display: grid;
			grid-template-columns: 1fr;
			font-size: 20px;
			text-indent: 20px;

		}

		#num_books{
			display: grid;
			grid-column-start: 1;
			grid-column-end: -1;
			justify-items: center;
			font-size: 100px;
			color: #FF8C00;

		}

		#num_books_sold{
			display: grid;
			grid-column-start: 1;
			grid-column-end: -1;
			justify-items: center;
			font-size: 40px;
			color: black;

		}






	</style>
</head>
<body>
	<?php require_once "blocks/header.php" ?>



	<div class="intro">
		
		<div>
			
			<span id="intro_big">Добро пожаловать в интернет-магазин FindBook</span>
			

			<div class="withus">
			<span>Только у нас Вы:</span>
			<ul>
				<li>найдете последние книжные новинки;</li>
				<li>познакомитесь с отзывами на интересующие Вас произведения;</li>
				<li>узнаете свежие новости из мира литературы;</li>
				<li>быстро и грамотно получите консультацию по любым вопросам, связанным с покупкой и реализацией книг.
				</li>
			</ul>
			</div>

			<div class="withus">
			<span>Мы предлагаем книги во всех возможных жанрах:</span>
			<ul>
				<li>фантастика и фэнтези;</li>
				<li>любовный и исторический роман;</li>
				<li>детективы и боевики;</li>
				<li>психологические драмы и триллеры;</li>
				<li>юмор и сатира и многое, многое другое.</li>
			</ul>
			</div>


			
			<div class="withus">
			<span>По вопросам сотрудничества вы можете обратиться к нам:</span>
			<ul>
				<li>по электронной почте 180103273@stu.sdu.edu.kz</li>
				<li>или по телефону 8-702-483-98-76</li>
			</ul>
			</div>
			
			<div class="lastIntro">
			<span >У нас удобная форма заказа и доставка во все уголки России и мира!</span>
			</div>
		</div>
		


	</div>

	<div class="next_page">

		<div>	

		</div>

		<div>
			
		</div>

		<div>
			
		</div>

		<div>
			

		</div>
		

	</div>

	<div class="our_history">
		
		<div class="history">

			<span id="hist">Our history</span>

			<span id="hist_word">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>


			<span id="hist_word">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				

			</span>



			<span id="hist_word">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				

			</span>
			

		</div>


		<div class="numbers">
			<br>
			<span id="num_books"><?=mt_rand(1000,5000)?></span>

			<span id="num_books_sold">number of books which was sold</span>

			
		</div>
		


	</div>






	<?php require_once "blocks/footer.php" ?>

</body>
</html>
