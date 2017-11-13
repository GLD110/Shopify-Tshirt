<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
	<!-- <script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script> -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>	 -->

    <script src="js/jquery.min.js"></script>	

	<script type="text/javascript" src="js/fabric.js"></script>
	<script type="text/javascript" src="js/tshirtEditor.js"></script>
	<script type="text/javascript" src="js/jquery.miniColors.min.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>

    <!-- Le styles -->
    <link type="text/css" rel="stylesheet" href="css/jquery.miniColors.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
   <!-- <script type="text/javascript">
		function zoomin(){
			var myImg = document.getElementById("tshirtFacing");
			var currWidth = myImg.clientWidth;
			if(currWidth == 500){
				alert("Maximum zoom-in level reached.");
			} else{
				myImg.style.width = (currWidth + 50) + "px";
			} 
		}
		
		function zoomout(){
			var myImg = document.getElementById("tshirtFacing");
			var currWidth = myImg.clientWidth;
			if(currWidth == 50){
				alert("Maximum zoom-out level reached.");
			} else{
				myImg.style.width = (currWidth - 50) + "px";
			}
		}
	</script>-->
	<style type="text/css">
		 .footer {
			padding: 70px 0;
			margin-top: 70px;
			border-top: 1px solid #E5E5E5;
			background-color: whiteSmoke;
			}			
	      body {
	        padding-top: 60px;	        
	      }
	      .color-preview {
	      	border: 1px solid #CCC;
	      	margin: 2px;
	      	zoom: 1;
	      	vertical-align: top;
	      	display: inline-block;
	      	cursor: pointer;
	      	overflow: hidden;
	      	width: 20px;
	      	height: 20px;
	      }
	      .rotate {  
		    -webkit-transform:rotate(90deg);
		    -moz-transform:rotate(90deg);
		    -o-transform:rotate(90deg);
		    -ms-transform:rotate(90deg);		   
		}		
		.Arial{font-family:"Arial";}
		.Helvetica{font-family:"Helvetica";}
		.MyriadPro{font-family:"Myriad Pro";}
		.Delicious{font-family:"Delicious";}
		.Verdana{font-family:"Verdana";}
		.Georgia{font-family:"Georgia";}
		.Courier{font-family:"Courier";}
		.ComicSansMS{font-family:"Comic Sans MS";}
		.Impact{font-family:"Impact";}
		.Monaco{font-family:"Monaco";}
		.Optima{font-family:"Optima";}
		.HoeflerText{font-family:"Hoefler Text";}
		.Plaster{font-family:"Plaster";}
		.Engagement{font-family:"Engagement";}

		.upload-cancel {
			background-color: #525252;
			color: #F7F7F7;
			font-weight: 700;
			font-family: Arial,Helvetica,sans-serif;
			border-radius: 12px;
			border: 0;
			height: 22px;
			width: 22px;
			padding: 4px;
			right: -5px;
			top: -6px;
			margin: 0;
			line-height: 17px;
			cursor: pointer;
			font-size: 12px;
			vertical-align: middle;
			margin-top: -86px;
			margin-left: -26px;
		}
	 </style>

	 <script type="text/javascript">
		 // Tab Click
	$(document).ready(function(){
		$(".tab-selector").click(function(e){
			e.preventDefault();
			$('.tab').hide();
			$('.tab-' + $(this).attr('data-target') ).show();
		});
	});
	 </script>
  </head>

  <body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80" style="padding: 0px;">

  <!-- Navbar
    ================================================== -->
	<!--<div class="container">
		<p class="brand" style="color: black;font-size: 16pt;padding-top: 30px;">Personalise Your SignatureSoft Women's T-Shirt Front side</p>
		<div class="nav-collapse" id="main-menu">			
		</div>
		 
	</div>-->
<div class="container">
  <section id="typography">
    <div class="page-header" style="background: url('img/top_up_12.jpg' ) ; padding: 0px;">
      <a href="" class="tab-selector" data-target = "text" ><img src="img/top_up_02.jpg" /></a>
      <a href="" class="tab-selector" data-target = "image" ><img style="margin-left: -4px;" src="img/top_up_03.jpg" /></a>
      <div class="btn-group inline pull-right" id="texteditor" style=" margin-right: 486px;margin-top: 19px; width: 30%; ">              
        <button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i></button>                          
        <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
          <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a></li>
          <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a></li>
        </ul>
        <button id="text-bold" class="btn" data-original-title="Bold"><img src="img/font_bold.png" height="" width=""></button>
        <button id="text-italic" class="btn" data-original-title="Italic"><img src="img/font_italic.png" height="" width=""></button>
        <button id="text-strike" class="btn" title="Strike" style=""><img src="img/font_strikethrough.png" height="" width=""></button>
        <button id="text-underline" class="btn" title="Underline" style=""><img src="img/font_underline.png"></button>
        <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
        <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
        <!--<button  type="button" onclick="zoomin()" class="btn btn-lg btn-primary">Zoom In</button>
        <button type="button" onclick="zoomout()" class="btn btn-lg btn-primary">Zoom Out</button> -->            
      </div>                             

      <div class="pull-right" align="" id="imageeditor" style=" margin-top: -50px; margin-right: 50px;">
        <div class="btn-group">                          
          <button class="btn" id="bring-to-front" title="Bring to Front"><i class="icon-fast-backward rotate" ></i></button>
          <button class="btn" id="send-to-back" title="Send to Back"><i class="icon-fast-forward rotate" ></i></button>
          <button id="flip" type="button" class="btn" title="Show Back View"><i class="icon-retweet" ></i></button>
          <button id="remove-selected" class="btn" title="Delete selected item"><i class="icon-trash" s></i></button>
        </div>
      </div>  
    </div>

    <!-- Headings & Paragraph Copy -->
    <div class="row">      
      <div class="span3">
        <div class="tabbable"> <!-- Only required for left/right tabs -->  
        
          <!-- Text Tab -->
          <div style="border: 1px solid rgb(200, 202, 201); " class="tab tab-text">
            <div style="width: 250px;margin-left: 9px;">
              <h3 style="background-color: rgb(56, 69, 79);color: white;text-align: center;">Enter Text Here</h3>
            </div>
            <div class="tab-pane">
              <div class="well" style="background: none; border: none; box-shadow: none; margin: 0px;">
                <div class="input-append">
                  <input class="span2" id="text-string" type="text" placeholder="add text here...">
                  <button id="add-text" class="btn" title="Add text"><i class="icon-share-alt"></i></button>
                  <hr>
                </div>
              </div>
            </div>
          </div><!-- End of Text Tab -->
          
          <!-- Image Upoad Tab -->
          <div class="tab tab-image" style = "display:none" >
            <form class="well" id="submit_form" action="upload.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="file">Upload Image</label>
                <input type="file" name="file">
                <p class="help-block">(Image Size:100*100)</p>
              </div>
              <input type="submit" id="upload_button" class="btn btn-lg btn-primary" value="Upload">      
              <div id="avatarlist" style="margin-top: 20px;">
              <?php 
                $folder = "uploaded_images";
                $results = scandir('uploaded_images');
                $i=0;
                foreach ($results as $result) {
                  if ($result === '.' or $result === '..') continue;

                  if (is_file($folder . '/' . $result)) {
                    echo '<img style="cursor:pointer;" id="img-polaroid-'.$i.'" class="img-polaroid" src="'.$folder . '/' . $result.'">';
                    echo '<button type="button " class="upload-cancel" data-img="img-polaroid-'.$i.'">X</button>';
                    $i++;
                  }
                }
              ?>                
              </div>  
            </form>
          </div><!-- End of Image Upload Tab -->

          <!-- Image Color Area -->
          <div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">T-Shirt Options</a></li>            
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <div class="well">
                  <ul class="nav">
                    <li class="color-preview" title="White" style="background-color:#ffffff;"></li>
                    <li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
                    <li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
                    <li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
                    <li class="color-preview" title="Black" style="background-color:#222222;"></li>
                    <li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
                    <li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
                    <li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
                    <li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
                    <li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
                    <li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
                    <li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
                    <li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
                    <li class="color-preview" title="Iris  h Green" style="background-color:#1f6522;"></li>
                    <li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
                    <li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
                    <li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
                    <li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
                    <li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
                    <li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>              
                    <li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
                  </ul>
                </div>            
              </div>  
            </div>
          </div><!-- End of Image Color Area -->
        </div>
      </div>
      <div class="span6">        
        <div align="center" style="min-height: 32px;">
          <div class="clearfix">
            <button style="width: 115px;margin-left: 766px;" type="button" class="btn btn-large btn-block btn-success" name="addToTheBag" id="addToTheBag">Save Image</button>
          </div>
        </div>  

        <!--  EDITOR      -->  
        <div style="border: 1px solid rgb(200, 202, 201); width: 879px;margin-top: 15px;">
          <div id="shirtDiv" class="page" style="margin: 0 auto;width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
            <img id="tshirtFacing" src="products/crew_front.png"></img>
          <div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">          
            <canvas id="tcanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>
          </div>
        </div>
      </div>
      <div class="container" style="margin-top:30px;">
        <div id="img-out"></div>
      </div>
    </div>
    </div>
  </section>
</div>
<!-- Footer ================================================== -->


  <script src="js/bootstrap.min.js"></script>    
	<script>
		$(document).ready(function(){
			var element = $("#shirtDiv"); // global variable
			var getCanvas = ""; // global variable

			// Upload Whole Image
			$("#addToTheBag").on('click', function () {		
				  html2canvas($("#shirtDiv"), {
					onrendered: function(canvas) {
							$("#img-out").append("<img width='100px' style='border:1px solid #efefef;margin-left:300px' height='100px' src='"+canvas.toDataURL()+"' />");
							alert("Image Created. See below.");
							$.ajax({
							
								type: "POST",
								url: "upload_order.php",
								data: {img: canvas.toDataURL(), action: "save"},
								success: function(data){
									console.log(data);
								}																					
							});					   					
						}
				});
			});
			
			// Cancel Upload
			$("body").on('click', ".upload-cancel", function () {
				$(this).remove();
				var img_id = $(this).attr('data-img');
				var img_url = $('#'+img_id).attr('src');
				console.log(img_url);
				$.ajax({				
					type: "POST",
					url: "upload_order.php",
					data: {img: img_url, action: "delete"},
					success: function(data){
						console.log(data);
						$('#'+img_id).remove();
					}			
				
				});
			});

			// Image Upload for avatar
			$("#submit_form").on('submit',(function(e) {
			  e.preventDefault();
			  $.ajax({
					 url: "upload_image.php",
					 type: "POST",
					 data:  new FormData(this),
					 contentType: false,
					 cache: false,
					 processData:false,
					 success: function(data)
						  {
							var intRegex = "/uploaded_images/";
							if(data.search(intRegex) == -1 ){
								alert(data);	
								
							}else{
							
								$("#avatarlist").append("<img style='cursor:pointer;' id=\"img-polaroid-" + $("#avatarlist").find(".img-polaroid").length + "\" class='img-polaroid' src='"+data+"'><button type=\"button\" class=\"upload-cancel\" data-img=\"img-polaroid-" + $("#avatarlist").find(".img-polaroid").length + "\">X</button>");
							
							}
							
							console.log(data);
						  },
					  error: function(e) 
						  {
								
						  }          
				});
			 }));				
		});
	</script>
  </body>
</html>