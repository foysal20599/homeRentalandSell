<?php include("../includes/headerview.php") ?>


	
<?php

include("../config/dbconnection.php");

session_start();

if(!isset($_SESSION['user_id']))
{
    //header("location:lanloadsignin.php");
}

?>

<body>

	<div class="warpper">

	<?php include("../includes/menu.php") ?>
		<!-- ------#End Menu-area----- -->


	 <div class="container">
        <div class="row pt-3">
            <div class="chat-main">
                <div class="col-md-12 chat-header">
                    <div class="row header-one text-white p-1">
                        <div class="col-md-6 name pl-2">
                            <i class="fa fa-comment"></i>
                            <h6 class="ml-1 mb-0">Chat Box</h6>
                        </div>
                        <div class="col-md-6 options text-right pr-0">
                            <i class="fa fa-window-minimize hide-chat-box hover text-center pt-1"></i>
                            <p class="arrow-up mb-0">
                                <i class="fa fa-arrow-up text-center pt-1"></i>
                            </p>
                            <i class="fa fa-times hover text-center pt-1"></i>
                        </div>
                    </div>
                    <div class="row header-two w-100">
                        <div class="col-md-6 options-left pl-1">
                            
                        </div>
                        <div class="col-md-6 options-right text-right pr-2">
                            <i class="fa fa-cog"></i>
                        </div>
                    </div>
                </div>
                <div class="chat-content">
                    <div class="col-md-12 chats pt-3 pl-2 pr-3 pb-3">
                        <ul class="p-0">
                            <li class="send-msg float-right mb-2">
                                <p class="pt-1 pb-1 pl-2 pr-2 m-0 rounded">
                                    Hii
                                </p>
                            </li>
                            <li class="receive-msg float-left mb-2">
                                <div class="sender-img">
                                    <img src="http://nicesnippets.com/demo/image1.jpg" class="float-left">
                                </div>
                                <div class="receive-msg-desc float-left ml-2">
                                    <p class="bg-white m-0 pt-1 pb-1 pl-2 pr-2 rounded">
                                        hiii <br>    
                                        How are you ?<br>
                                    </p>
                                    <span class="receive-msg-time">ketty, Jan 25, 6:20 PM</span>
                                </div>
                            </li>
                            <li class="send-msg float-right mb-2">
                                <p class="pt-1 pb-1 pl-2 pr-2 m-0 rounded">
                                    nice <br>
                                    Are you fine ?
                                </p>
                            </li>
                            <li class="receive-msg float-left mb-2">
                                <div class="sender-img">
                                    <img src="http://nicesnippets.com/demo/image1.jpg" class="float-left">
                                </div>
                                <div class="receive-msg-desc float-left ml-2">
                                    <p class="bg-white m-0 pt-1 pb-1 pl-2 pr-2 rounded">
                                        Yes always
                                    </p>
                                </div>
                            </li>
                            <li class="send-msg float-right mb-2">
                                <p class="pt-1 pb-1 pl-2 pr-2 m-0 rounded">
                                    
                                </p>
                            </li>
                            <li class="send-msg float-right mb-2">
                                <p class="pt-1 pb-1 pl-2 pr-2 m-0 rounded">
                                    Byy
                                </p>
                                <span class="send-msg-time">1 min</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 p-2 msg-box border border-primary">
                        <div class="row">
                            <div class="col-md-2 options-left">
                                <i class="fa fa-smile-o"></i>
                            </div>
                            <div class="col-md-7 pl-0">
                                <input type="text" class="border-0" placeholder=" Send message" />
                            </div>
                            <div class="col-md-3 text-right options-right">
                              <i class="fas fa-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

		<!-- ----- #End Top to buttom home ----- -->
       

	</div>
   
    
	<?php include("../includes/footerview.php")?>
	<style>
		.chat-main{
	position: fixed;
	width: 260px;
	bottom: 0;
	right: 310px;
	padding: 30px 0;
}
.header-one{
	background: #404040;
}
.name h6{
	display: inline-block;
	font-size: 14px;
}
.options i,.options .arrow-up{
	height: 25px;
	width: 25px;
}
.options i{
	color: #B2B2B2;
	font-size: 16px;
	cursor: pointer;
}
.options .hover:hover, .options .arrow-up:hover{
	background: #737373;
}
.options .arrow-up{
    display: inline-block;
    line-height: 0;
}
.options .hover:hover, .options .arrow-up:hover .fa-arrow-up{
	color: #fff;
}
.options .fa-arrow-up{
	transform: rotate(40deg);
}
.header-two{
	border-top: 2px solid #35AC19;
	background: #ECEFF1;
	color: #5E6060;
	padding: 8px 0px 4px 8px;
	box-shadow: 0px 6px 13px -7px #c1c1c1;
	z-index: 1000;
    position: absolute;
}
.options-left i, .options-right i{
	font-size: 20px;
	cursor: pointer;
}
.options-left i:hover, .options-right i:hover{
	color: #000;
}
.chats{
	height: 285px;
	overflow-x: scroll;
	overflow-x: hidden;
	background: #ECEFF1;
	position: relative;
    top: 35px;
}
.chats ul li{
	display: inline-block;
	list-style: none;
	clear: both;
	font-size: 13px;
}
.send-msg{
	position: relative;
}
.send-msg:after{
	content: "";
	width:0;
	height:0;
	top: 0px;
	right: -8px;
	position: absolute;
	border-top: 8px solid #CFD8DC;
	border-left: 8px solid transparent;
	border-right: 8px solid transparent;
}
.send-msg p{
	background: #CFD8DC;
}
.sender-img{
	display: inline;
}
.sender-img img{
	width: 32px;
	height: 32px;
	border-radius: 100%;
}
.receive-msg .receive-msg-desc{
	display: inline-block;
	position: relative;
}
.receive-msg-desc:before{
	content: "";
	width:0;
	height:0;
	top: 0px;
	left: -8px;
	position: absolute;
	border-top: 8px solid #fff;
	border-left: 8px solid transparent;
	border-right: 8px solid transparent;
}
.receive-msg-time,.send-msg-time{
	color: #7D7E87;
	font-size: 10px;
}
.receive-msg-time i{
	font-size: 4px;
}
.msg-box{
	margin-top: 35px;
}
.msg-box i{
	color: #404040;
}
.msg-box input{
	font-size: 14px;
}
.msg-box input:focus{
	outline: none;
}

	</style>



 <script>
         $(document).ready(function() {
         $('.hide-chat-box').click(function(){
        $('.chat-content').slideToggle();
      });

         $(".send_mgs").on("click",function(){
                var text_mgs = $(".text_mgs").val().trim();
                
            });
            


           
           
                

            });
        //}); 
         
        
                
</script>


	
	
 	

