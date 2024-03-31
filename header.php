<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<script src="script.js"></script>

  
</head>
<body>

<style>

.navbar-collapse{
	margin-left: -10rem;
}

.navbar-collapse li{
	margin-left: -10rem;

}

.navbar{
	background-color: #333;
}

nav .navbar-toggler{
	margin-left: 23rem;
}

.navbar-collapse li :hover{
   text-decoration: underline;
  -webkit-text-decoration-color: red; /* Safari */  
   text-decoration-thickness: 30%;
   text-decoration-color: whitesmoke;
}

.holder .fa{
	position: absolute;
	margin-left: -30rem;
	top: 2rem;
}

.rowcount{
	color: red;
	font-weight: bold;
	font-size: 20px;
	position: absolute;
	margin-left: -28rem;
	top: -1rem;
}

.holder .disabled{
	display: none;
}

div h3, h5{

	margin-left: 10px;
	color: white;
}

.img8{
	position: absolute;
	margin-top: 0rem;
}


@media screen and (max-width: 600px) {
	
	.avatar{
		margin-top: -1rem;
		width: 170px;
		height: 150px;
	}

		.navbar-collapse li :hover{
		 color: red;
		}
		

	
	.rowcount{
		
		color: red;
		font-weight: bold;
		font-size: 20px;
		position: absolute;
		left: 29rem;
		top: 8rem;

}

.holder .fa{
	position: absolute;
	margin-left: 24rem;
	top: 14rem;
}

.holder{
	display: none;
}

nav h3{
	margin-left: 8rem;
}

.titleholder{

	margin-left: -6rem;
	position: relative;
	color: white;
}

.titleholder h3{
	margin-left: 13rem;
	position: relative;
	color: white
}

.titleholder h5{
	font-size: 18px;
}


nav .menu-btn{
		margin-top: 1rem;
        margin-left: -10rem;
    }


.img8{
	position: absolute;
	margin-left: 4rem;
	margin-top: -1rem;
}

.navbar-toggler-icon{
	transition: 0.8s ease;
	transform: translate(-50%,-50%);
}

.menu-btn {
        position: absolute;
        z-index: 3;
        right: 35px;
        top: 35px;
        cursor: pointer;
        transition: all 0.8s ease-out;
    }
 
    /* Styling the hamburger lines */
    .menu-btn .btn-line {
        width: 28px;
        height: 3px;
        margin: 0 0 5px 0;
        background: black;
        transition: all 0.8s ease-out;
    }
 
    /* Adding transform to the X */
    .menu-btn.close {
        transform: rotate(180deg);
    }
 
    /* Styling the three lines 
        to make it an X */
    .menu-btn.close .btn-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }
 
    .menu-btn.close .btn-line:nth-child(2) {
        opacity: 0;
    }
 
    .menu-btn.close .btn-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }

	    /* Styling the position of the menu icon */
		nav {
        position: fixed;
        top: 0;
        width: 100%;
        opacity: 0.9;
        visibility: hidden;
    }
 
    nav {
        visibility: visible;
    }

    .navbar-collapse li{
        padding-top: 15px;
        transition: 0.8s ease;

    }

}

</style>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-black">
<div class="titleholder">
<img src="includes/Lightbearer Logo 3.png" class="img8" style="width: 130px">
	<h3>John Paul Rigdao</h3>
  <h5>Full Stack Developer|Multimedia Artist</h5></div>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  </button> -->

  <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
  </div>

  <!-- <span class="navbar-toggler-icon"></span> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="#home">Services</a></li>
                <li class="nav-item"><a href="#about">Portfolio</a></li>
                <li class="nav-item"><a href="#contact">Contact</a></li>
            </ul>


         </div>
  </div>
</nav>
        </nav>


    <script src="script.js"></script>

	<script>
    // select dom items
    const menuBtn = 
        document.querySelector(".menu-btn");
 
    const menu = 
        document.querySelector(".navbar");
 
    const menuNav = 
        document.querySelector(".navbar-collapse");
 
    const navItems = 
        document.querySelectorAll(".nav-item");
 
    // Set the initial state of the menu
    let showMenu = false;
 
    menuBtn.addEventListener("click", toggleMenu);
 
    function toggleMenu() {
        if (!showMenu) {
            menuBtn.classList.add("close");
            menu.classList.add("show");
            menuNav.classList.add("show");
            navItems.forEach((item) =>
                item.classList.add("show"));
 
            // Reset the menu state
            showMenu = true;
        } else {
            menuBtn.classList.remove("close");
            menu.classList.remove("show");
            menuNav.classList.remove("show");
            navItems.forEach((item) =>
                item.classList.remove("show"));
 
            // Reset the menu state
            showMenu = false;
        }
    }

</script>
        </div>
		  </div>
		   </div>
		    </div>
			 </div>
			  </div>
			   </div>
			   </header>
			   </body>
			   </html>