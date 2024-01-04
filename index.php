
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>Home</title>

	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
			margin:0;
		}
			
	
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
			  font-size: 3.5rem;
			}
		}
		
		.mainContainer{
			margin: 1% auto auto;
			background-color:#F7F7F7;
			display:flex;
			flex-direction: column;
			width:90%;
			padding:2%;
			border-radius: 20px;
		}
		
		.linkAdaptor{
			margin-top:2%;
			display:flex;
			flex-direction: row;
			justify-content: space-between;
		}
		
		.dContainer{
			width:50%;
			background-color:#31708F;
			border-radius: 20px;
		}
		
		.dContainer:hover{
			border:8px solid #83A9BB;
			cursor: pointer;
		}
		
		.dContainer > a,.dCContainer > a{
			text-decoration: none;
		}
		
		.dCContainer{
			width:48%;
			background-color:#D87818;
			border-radius: 20px;
		}
		
		.dCContainer:hover{
			border:8px solid #E7AE74;
			cursor: pointer;
		}
		
		.hisContainer{
			margin-top:2%;
			width:100%;
			height:400px;
			background-color:#e2e2e2;
			border-radius: 20px;
			display:flex;
			flex-direction: row;
			justify-content: space-between
		}
		
		.div_hisL ,.div_hisR{
			width :50%;
			margin : 2%;
		}
		
		div.div_floatInfo{
			z-index:999;
			width:500px;
			padding:0.5%;
			background-color:rgb(0,0,0,0.7);
			color:rgb(255,255,255);
			display:none;
			position:fixed;
		}
		
	</style>
	
	<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
	<script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
	<script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script>
		$(document).on('click','#Print',function(e){
			e.preventDefault();
        });
		
		function showDivT(display_text,div_id) {
			var x = event.clientX; 
			var y = event.clientY; 
			document.getElementById(div_id).style.left=x+20+"px";
			document.getElementById(div_id).style.top=y+"px";
			document.getElementById(div_id).style.display="block";
			document.getElementById(div_id).innerHTML=display_text;
		}

		function hiddenDivT(div_id) {
			document.getElementById(div_id).style.display="none";
		}
    </script>
	
</head>
<style>
	
	nav > ul {
		list-style: none;   /* 移除項目符號 */
	}
	
	nav > li {
		display: inline;
	}

	nav a {
		color: inherit; /* 移除超連結顏色 */
		display: block; /* 讓 <a> 填滿 <li> */
		font-weight:bold;
		text-decoration: none;  /* 移除超連結底線 */
		white-space: nowrap;
	}

	/* 滑鼠移到 <a> 時變成深底淺色 */
	nav a.nav_button:hover  {
		background-color: rgb(115, 115, 115);
		color: white;
	}

	.nav_container {
		display: flex;
		width:80%;
		height:100%;
		justify-content:space-between;
		align-self: flex-end;
		
	}
	.nav_main {
		display: flex;
		flex-direction:row;
		width:600px;
		height:100%;
		margin-top:0;
		margin-bottom:0;
		padding-left:0;
	}
	.nav_main li{
		align-self: flex-end;
		font-size: 1.5rem;
	}
	.nav_main li > a{
		padding:10px 20px;
		color:#DCDCDC;
	}
	
	.div_menu{
		height:80px;
		background-color:#000000;
		display: flex;
		justify-content:center;
		width:100%;
	}
	
	.a_home{
		font-weight: bold;
		color:#FFFFFF;
		display: flex;
		flex-direction:row;
		height:100%;
	}
	
	/*Empty Space around the letter cannot be simple solved*/
	span.main_home{ 
		font-size: 60px;
		line-height: 60px;
		height: 56px;
		align-self: flex-end;
	}
	span.subN_home{
		font-size: 1.25rem;
	}
	span.label_home{
		width:80%;
		text-align:center;
		font-weight:heavy;
		background-color: #31708F;
		font-size: 0.8rem;
		border-radius: 15px;
		padding:1% 0;
		margin:0 auto;
	}
	div.div_subH{
		display: flex;
		flex-direction:column;
		align-self: flex-end;
		justify-content:start;
		margin-left:10px;
	}
</style>

<div class='div_menu navbar-fixed-top'>
<nav id='menu' class="nav_container">
	<a href="bigtable.php" class="a_home"><span class="main_home">DRiCdb</span><div class='div_subH'><span class="subN_home">NCUE & CGU</span></div></a>

	<ul class="nav_main">
		<li class="">
			<a class="nav_button" href="index.php">HOME</a>
		</li>
		<li class="">
			<a class="nav_button" href="tut_main.php">TUTORIAL</a>
		</li>
		<li class="">
			<a class="nav_button" href="download.php">DOWNLOAD</a>
		</li>
		<li class="">
			<a class="nav_button" href="contact_us.php">CONTACT US</a>
		</li>
	</ul>
</nav>
</div>
<body>
<main role="main">
	<div class="mainContainer">
		<div>
			<h1>DRiCdb – Drug Repurposing in Cancer database</h1>
			<h2>Welcome to DRiCdb!</h2>
			<h3>All of the data was collected from more than 1584 literature 、 clinical data phase2 complete  and phase3 & 4, which obtained by "manual review and double check".</h3>
		</div>
		<div class='linkAdaptor'>
			<div class='dContainer'>
				<a href="../P097v5/bigtable.php" target="_blank">			
					
		<style>
			.displayPanel{
				margin:2% auto auto;
				width:90%;
			}
			
			div.div_row > div > p{
				color:#FFFFFF;
				font-weight:bold;
			}
			
			div.displayPanel > h2{
				color:#FFFFFF;
				font-weight:bold;
				border-bottom: 1px solid #FFFFFF;
			}
			
			div.subtContainer{
				width:50%;
				padding:1.5%;
				display:block;
				
				text-align:center;
				margin-left:auto;
				margin-right:auto;
				font-weight:bold;
				font-size:2em;
				color:#FFFFFF;
			}
			
			div.sepLine{
				height:2px;
				width:100%;
				background: linear-gradient(45deg,#31708F,#D87818,#31708F);;
			}
			
			div.tContainer{
				display:flex;
				flex-direction:column;
			}
			
			div.lContainer{
				color:#FFFFFF;
				font-weight:bold;
			}
			
			div.div_row{
				display:flex;
				flex-direction:row;
				justify-content: space-between;
			}
			
			div.div_charts{
				width: 400px;
				height: 400px;
				background-color:#31708F;
			}
			
			div.div_charts3{
				width: 400px;
				height: 600px;
				margin-bottom:5%;
			}
			
			div.div_charts > div > h2{
				color:#FFFFFF;
			}
		</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script><script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> <script type="text/javascript" class="init">
		$(document).ready(function() {
			var total_num_chart = 3;
			var empty_space_chart = 50;	
			
			//P3 & 4 Start Date Counting
			$.ajax({
					url:"../P097v5/c1_render.php",
					method:"POST",
					data:{DBID:"",
						  Cancer:"",
						  SubCancer:"",
						  Width:$(".div_charts").width() - empty_space_chart,
						  Height:$(".div_charts").height(),
						  IsSummary:"1"
						  },
					dataType:"text",
					success : function(data) {
					$("#chartContainer1").html(data);}
			});
			//Top 10 Drug
			$.ajax({
					url:"../P097v5/c3_render_index.php",
					method:"POST",
					data:{DBID:"",
						  Cancer:"",
						  SubCancer:"",
						  Width:$(".div_charts").width() - empty_space_chart,
						  Height:$(".div_charts").height(),
						  IsSummary:"1"
						  },
					dataType:"text",
					success : function(data) {
					$("#chartContainer2").html(data);}
			});
			//Top 10 Cancer
			$.ajax({
					url:"../P097v5/c2_render_index.php",
					method:"POST",
					data:{DBID:"",
						  Cancer:"",
						  SubCancer:"",
						  Width:$(".div_charts").width() - empty_space_chart,
						  Height:$(".div_charts").height()+150,
						  IsSummary:"1"
						  },
					dataType:"text",
					success : function(data) {
					$("#chartContainer3").html(data);}
			});
			
		});
		
	</script><div class='displayPanel'><div class='subtContainer'>Literature</div><div class='sepLine'></div><div class='tContainer'><div class='div_row'><div class='div_left'><p>Drugs : 705</p><p>Cancer Types : 57</p><p>Cell Lines : 1536</p><p>Reference : 1584</p><p>IC50 : 5256</p><p>Cell Exps : 10245</p><p>Xenografts Exps : 1765</p><p>Clinical Trials : 192</p><p>Update Time : 2023-11-14</p><div class='lContainer'><ul><li>Combine treatment</li><li>Dosagesforms</li><li>Drug status</li></ul></div></div><div class='div_right'><div id='chartContainer1' class='div_charts'></div></div></div><div class='div_row'><div id='chartContainer2' class='div_charts3'></div><div id='chartContainer3' class='div_charts'></div></div></div></div>				</a>
			</div>
			<div class='dCContainer'>
				<a href="../P097v5_clinical/main.php" target="_blank">			
					
		<style>
			.displayPanel{
				margin:2% auto auto;
				width:90%;
			}
			
			div.displayPanel > p{
				color:#FFFFFF;
				font-weight:bold;
			}
			
			div.displayPanel > h2{
				color:#FFFFFF;
				font-weight:bold;
				border-bottom: 1px solid #FFFFFF;
			}
			
			div.subtContainer{
				width:50%;
				padding:1.5%;
				display:block;
				
				text-align:center;
				margin-left:auto;
				margin-right:auto;
				font-weight:bold;
				font-size:2em;
				color:#FFFFFF;
			}
			
			div.sepLine2{
				height:2px;
				width:100%;
				background: linear-gradient(45deg,#D87818,#31708F,#D87818);;
			}
			
			div.tContainer{
				display:flex;
				flex-direction:column;
			}
			
			div.lContainer{
				color:#FFFFFF;
				font-weight:bold;
			}
			
			div.div_row{
				margin-top:1%;
				display:flex;
				flex-direction:row;
				justify-content: space-between;
			}
			
			div.div_charts2{
				width: 400px;
				height: 400px;
				background-color:#D87818;
			}
			
			div.div_charts2 > div > h2{
				color:#FFFFFF;
			}
		</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script><script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> <script type="text/javascript" class="init">
		$(document).ready(function() {
			var total_num_chart = 3;
			var empty_space_chart = 50;	
			
			//P3 & 4 Start Date Counting
			$.ajax({
					url:"../P097v5/c1_render.php",
					method:"POST",
					data:{DBID:"",
						  Cancer:"",
						  SubCancer:"",
						  Width:$(".div_charts").width() - empty_space_chart,
						  Height:$(".div_charts").height(),
						  IsSummary:"1"
						  },
					dataType:"text",
					success : function(data) {
					$("#chartContainer1").html(data);}
			});
			//Top 10 Drug
			$.ajax({
					url:"../P097v5/c3_render_index.php",
					method:"POST",
					data:{DBID:"",
						  Cancer:"",
						  SubCancer:"",
						  Width:$(".div_charts").width() - empty_space_chart,
						  Height:$(".div_charts").height(),
						  IsSummary:"1"
						  },
					dataType:"text",
					success : function(data) {
					$("#chartContainer2").html(data);}
			});
			//Top 10 Cancer
			$.ajax({
					url:"../P097v5/c2_render_index.php",
					method:"POST",
					data:{DBID:"",
						  Cancer:"",
						  SubCancer:"",
						  Width:$(".div_charts").width() - empty_space_chart,
						  Height:$(".div_charts").height()+150,
						  IsSummary:"1"
						  },
					dataType:"text",
					success : function(data) {
					$("#chartContainer3").html(data);}
			});
			
		});
		
	</script><script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script><script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script><script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script><script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script><script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> <script type="text/javascript" class="init">
		$(document).ready(function() {
			var total_num_chart = 3;
			var empty_space_chart = 50;	
			
			//P3 & 4 Start Date Counting
			$.ajax({
					url:"../P097v5_clinical/c1_render.php",
					method:"POST",
					data:{DBID:"",
						  Cancer:"",
						  SubCancer:"",
						  Width:$(".div_charts2").width() - empty_space_chart,
						  Height:$(".div_charts2").height(),
						  IsSummary:"1"
						  },
					dataType:"text",
					success : function(data) {
					$("#chartContainer4").html(data);}
			});
			//Top 10 Drug (Horizontal Chat)
			$.ajax({
					url:"../P097v5_clinical/c2_render_index.php",
					method:"POST",
					data:{DBID:"",
						  Cancer:"",
						  SubCancer:"",
						  Width:$(".div_charts2").width() - empty_space_chart,
						  Height:$(".div_charts2").height(),
						  IsSummary:"1"
						  },
					dataType:"text",
					success : function(data) {
					$("#chartContainer5").html(data);}
			});
			//Top 10 Cancer (Horizontal Chat)
			$.ajax({
					url:"../P097v5_clinical/c3_render_index.php",
					method:"POST",
					data:{DBID:"",
						  Cancer:"",
						  SubCancer:"",
						  Width:$(".div_charts2").width() - empty_space_chart,
						  Height:$(".div_charts2").height(),
						  IsSummary:"1"
						  },
					dataType:"text",
					success : function(data) {
					$("#chartContainer6").html(data);}
			});
		});
			
	</script><div class='displayPanel'><div class='subtContainer'>Clinical Trial</div><div class='sepLine2'></div><div class='tContainer'><div class='div_row'><div class='div_left'><p>Drugs : 217</p><p>Cancer Types : 47</p><p>Phase 2 Completed Trials : 461</p><p>Phase 3 Trials : 237</p><p>Phase 3 Completed Trials : 95</p><p>Phase 4 Trials : 39</p><p>Phase 4 Completed Trials : 12</p><p>Treatment Trials : 606</p><p>Prevention Trials : 130</p><p>Last Update Time : 2022-11-09</p><div class='lContainer'><ul><li>Sponsors</li><li>Start Date</li><li>Country</li><li>Actual Enrollment</li></ul></div></div><div class='div_right'><div id='chartContainer4' class='div_charts2'></div></div></div><div class='div_row'><div id='chartContainer5' class='div_charts2'></div><div id='chartContainer6' class='div_charts2'></div></div></div></div>				</a>
			</div>
		</div>
		<div class='hisContainer'>
			<div class='div_hisL'>
				<h3>Update Log :</h3>
				<p>2023 - 01 - 04 : first release</p>
			
			</div>
			<div id='div_lC' class='div_hisR'>
				
			</div>
		</div>
	</div>

</main>
<script>
	
    anychart.onDocumentReady(function () {
		
		// create data set on our data
		let data = [['197001',868],['202109',2337],['202110',6332],['202111',6716],['202112',6860],['202201',7068],['202202',7122],['202203',7595],['202204',7672],['202205',7764],['202206',7830],['202207',8460],['202208',8679],['202209',8804],['202210',9007],['202211',9013],['202212',9021],['202303',9723],['202311',10730]];
		let bgC = $(".hisContainer").css("background-color");
		
		// create a chart
		chart = anychart.line();

		// create a line series and set the data
		let series = chart.line(data);
		
		chart.background().fill(bgC);
		chart.title('Update Data History');
		chart.xAxis().title('Time (YYYY MM)');
		chart.yAxis().title('Total Num. of Records Collected');

		// set the container id
		chart.container("div_lC");

		// initiate drawing the chart
		chart.draw();
    });

	function showDiv(display_text,bar_id,div_id) {
		var x = event.clientX; 
		var y = event.clientY; 
		document.getElementById(div_id).style.left=x+20+"px";
		document.getElementById(div_id).style.top=y+"px";
		document.getElementById(div_id).style.display="block";
		document.getElementById(div_id).innerHTML=display_text;
		
		document.getElementById(bar_id).style.opacity=0.7;
	}

	function disappearDiv(bar_id,div_id) {

		document.getElementById(div_id).style.display="none";
		document.getElementById(bar_id).style.opacity=1;
	}
</script>
<style>
	h4.f_h4{
		font-size: 26px;
		color: #d87818;
		margin-right: 20px;
		margin-left: 20px;
		border-bottom: 1px solid #d87818;
	}
	div.div_footC{
		display:flex;
		flex-direction:row;
		justify-content:center;
		width:70%;
		margin:0 auto 50px;
	}
	div.div_FC_child{
		flex: 1;
	}
	div.div_FC_child > p{
		margin: 0 20px 0;
	}
	div.div_vmap{
		width:90%;
		margin:0 auto;
	}
	p.p_CR{
		margin-left:4%;
	}
</style>
<footer>
	<div class='div_footC'>
	<div class='div_FC_child'>
		<h4 class='f_h4'>Cite DRiCdb</h4>
		<p>refer to (a passage, book, or author) as evidence for or justification of an argument or statement, especially in a scholarly work.</p>
	</div>
	<div class='div_FC_child'>
		<h4 class='f_h4'>Visitor Map</h4>
		<div class='div_vmap'>
		<script type="text/javascript" src="//rf.revolvermaps.com/0/0/7.js?i=5kkga51oykq&amp;m=0&amp;c=ff0000&amp;cr1=ffffff&amp;sx=0" async="async"></script>
		</div>
	</div>
	<div class='div_FC_child'>
		<h4 class='f_h4'>Correspondence</h4>
		<p>communication by exchanging letters, emails, or other messages.</p>
	</div>
	</div>
	<p class='p_CR'>&copy;2022&nbsp;<a href='http://www.bio.ncue.edu.tw/people/bio.php?PID=35' target='_blank'>NCUE</a> & <a href='http://biobug.cgu.edu.tw/' target='_blank'>CGU</a></p>	
</footer>
</body>