<?php include("../includes/headerview.php") ?>
	
<?php include("../config/dbconnection.php");

?>
<body>

	<div class="warpper">

	<?php include("../includes/landlordmenu.php") ?>
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
                        <ul class="p-0 chatList">
                        </ul>
                    </div>
                    <div class="col-md-12 p-2 msg-box border border-primary">
                        <div class="row">
                            <div class="col-md-2 options-left">
                                <i class="fa fa-smile-o"></i>
                            </div>
                            <div class="col-md-7 pl-0">
                                <input type="text" class="border-0 text_mgs" placeholder=" Send message" />
                            </div>
                            <div class="col-md-3 text-right options-right">
                              <i class="fas fa-paper-plane send_mgs"></i>
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
        
        function loadMgs(){
            $.post("ajax_load_chat.php",{},function(data){
				$(".chatList").html(data);
			});
        }
        
        $(".send_mgs").on("click",function(){
            var text_mgs = $(".text_mgs").val().trim();
            if(text_mgs.length > 0){
                $.post("ajax_chat.php",{text_mgs:text_mgs},function(data){
    				$(".text_mgs").val('');
    				loadMgs();
    			});
            }
        });
        $(".text_mgs").on('keypress',function(e) {
            if(e.which == 13) {
                $(".send_mgs").trigger("click");
            }
        });
        setTimeout( function(){ 
            loadMgs();
        },100);
    });
</script>


	
	
 	

