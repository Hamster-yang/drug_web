

<head>

	<META HTTP-EQUIV="pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=utf-8">
	<META name="viewport" CONTENT="width=device-width,initial-scale=1,user-scalable=no">
	
	<link rel="stylesheet" type="text/css" href="./bigtable.css">
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
	
	<!--
	<link rel="stylesheet" type="text/css" href="./Datatables.forBigTable/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="./bigtable.css">
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
-->

	<title>Drug Repurposing in Cancer DB</title>
	
	<style>
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
		
		.dt-buttons{
			margin-left:10px;
		}
		
		#chartContainer4{
			background-color:#F7F7F7;
			width: 50%;
		}

		#chartContainer5, #chartContainer6{
			background-color:#F7F7F7;
		}
		.ui-tabs .ui-tabs-panel, .ui-widget-header{
			background-color:#F7F7F7;
		}
		.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
			border: 1px solid #255973;
			border-bottom-width: 1px;
			background: #31708F;
			font-weight: bold;
			color: #ffffff;
		}
		
		table.fixedHeader-floating{
			background-color:#31708F;
			text-align:center;
			color:#FFFFFF;
		}
		table.dataTable thead{
			color:#FFFFFF;
			background-color:#31708F;
			text-align:center;
			white-space: nowrap;
		}
		
		body{
			background-color:#FFFFFF;
			margin:0;
		}
		
		div.frmSearch{
			width:90%;
			background-color:#E6E6EB
		}
		
		div.pan_filters{
			margin-top:1%;
			margin-left: auto;
			margin-right: auto;
			width:90%
		}
		div.IC50Container{
			height:350px;
			width:120px;
			display:flex;
			flex-direction:column;
			justify-content:space-between;
			align-items:center;
			background:#F7F7F7;
			border: 1px solid #DDDDDD;
		}
		.f_item1{
			flex:20%;
			display:flex;
			justify-content:center;
			align-items:center;
			font-weight:bold;
		}
		.f_item2{
			flex:30%;
			display:flex;
			justify-content:center;
			align-items:start;
		}
		.f_item3{
			flex:20%;
			display:flex;
			justify-content:center;
			align-items:center;
			font-weight:bold;
		}
		.f_item4{
			flex:30%;
			display:flex;
			justify-content:center;
			align-items:center;
		}
		#IC50_min, #IC50_max{
			text-align:center;
		}
		
		div.div_flexContainer{
			display:flex;
			flex-direction:column;
			justify-content:center;
			align-items:center;
			/*overflow:hidden;*/
			border-radius:20px;
			background-color:#f7f7f7;
		}
		#table{
			width:85%;
		}
		div.div_filterContainer{
			display:flex;
			flex-direction:row;
			justify-content:space-between;
		}
		div.div_filterFBtn{
			margin:1%;
			margin-bottom:1.5%;
			width:40%;
			display:flex;
			flex-direction:row;
			justify-content:space-between;
		}
	
		div.pan_charts{
			margin-top:1%;
			margin-left: auto;
			margin-right: auto;
			width:90%
		}
		div.div_tabsContainer{
			margin-bottom:1%;
			width:95%;
			padding-bottom:2%;
			display:flex;
			flex-direction:row;
			justify-content:space-between;
		}
		
		#allChart{
			border-collapse: separate;
			width: 1650px;
			height: 700px;
			margin: 50px auto
		}
		
		div.sub_title{
			margin:1%;
			display:flex;
			flex-direction:column;
			justify-content:center;
			align-items:center;
			width:40%;
		}
		div.sub_title h1{
			color:#D87818;
			margin:1.5%;
			font-weight:bold;
		}
		div.sub_title > div.sepLine2{
			height:2px;
			width:100%;
			background: linear-gradient(45deg,#F7F7F7,#D87818,#F7F7F7);;
		}
		
		div.div_charts{
			border-collapse: separate;
			width: 600px;
			height: 700px;
			margin: 50px auto
		}
		
		div.bTContainer{
			width:90%;
			margin-top:2%;
			margin-bottom:2%;
			margin-left: auto;
			margin-right: auto;
		}
		
		input.filter_submit, input.filter_reset, div.filter_export{
			background-color: #31708F;
			cursor: pointer;
			border: none;
			color: white;
			padding: 10px 30px;
			text-align: center;
			text-decoration: none; 
			display: inline-block;
			font-size: 20px;
			font-weight: bold;
			border-radius:20px;
		}
		
		input.filter_submit:hover, input.filter_reset:hover, div.filter_export:hover{
			background-color: #D87818;
		}
		
		button.dt-button.buttons-collection.buttons-colvis, button.dt-button.dt_customBT{
			border-radius: 20px;
			background:linear-gradient(to bottom, rgba(49, 112, 143, 0.5) 0%, rgba(49, 112, 143, 1) 100%);
			color:#FFFFFF;
			font-weight: bold;
		}
		
		div.dt-button-collection button.dt-button:active:not(.disabled), div.dt-button-collection button.dt-button.active:not(.disabled), div.dt-button-collection div.dt-button:active:not(.disabled), div.dt-button-collection div.dt-button.active:not(.disabled), div.dt-button-collection a.dt-button:active:not(.disabled), div.dt-button-collection a.dt-button.active:not(.disabled){
			background:#31708F;
			color:#FFFFFF;
			font-weight: bold;
		}
		
		button.dt-button.active:not(.disabled):hover:not(.disabled){
			background:#D87818;
		}
		
		button.dt-button.buttons-collection.buttons-colvis:hover, button.dt-button.dt_customBT:hover{
			background:linear-gradient(to bottom, rgba(216, 120, 24, 0.5) 0%, rgba(216, 120, 24, 1) 100%);
		}
		
		button.dt-button.dt_color{
			border-radius: 20px;
			background:#F7F7F7;
		}
		button.dt-button.dt_color:hover{
			background:#F7F7F7;
			border: 1px solid rgba(0, 0, 0, 0.3);
			cursor: default;
		}
		
		div.dt_crBox{
			height:20px;width:65px;
		}

		.bordered-title {
			border: 1px solid #000; /* 边框样式，可以根据需要进行调整 */
			padding: 10px; /* 外框内边距，可以根据需要进行调整 */
			border-radius: 10px; /* 可以根据需要进行调整 */
			display: inline-block; /* 将元素显示为内联块元素，以使图像和文本在同一行显示 */
		}


		
	</style>
	
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.12.0/js/md5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<script type="text/javascript" language="javascript" src='./bigtable.js'></script>
	
	<script type="text/javascript" class="init">
		
		$(document).ready(function() {
			
			if(sessionStorage.getItem('passwordflag') != 'True'){
				var password = prompt("Please input password", "password");
				var times = 5;
				while (password != 'ncuecgu') {
					times -= 1;
					alert('wrong password please try again , times:' + times);
					if(times <= 1)
						location.href = 'http://google.com';
					password = prompt("Please input password", "password");
					
					
				}	
			}
			
			sessionStorage.setItem('passwordflag', 'True');
			
			//BigTable render(some var in config file)
			$('#bigTable').DataTable({
				"dom": 'lBfrtip',
				"stateSave": true,
				"fixedHeader": {
					header: true,
				},
				"buttons": [
					{
						extend: 'colvis',
						columns: ':not(.noVis)',
					},
					{
						text: 'Reset',
						className: 'dt_customBT',
						action: function (e, dt, node, config) {
							dt.state.clear();
							window.location.reload();
						}
					},
					{
						text: '<div style="display:flex;flex-direction:row;"><span style="margin-right:1%;">IC50 (uM): </span><div class="dt_crBox" style="background-color:red;">&#60 0.1</div><div class="dt_crBox" style="background-color:orange">0.1 - 1</div><div class="dt_crBox" style="background-color:yellow">1 - 10</div><div class="dt_crBox"  style="background-color:#a4ffa4">10 - 100</div><div class="dt_crBox" style="background-color:#add7ef">&#62 100</div></div>',
						className: 'dt_color'
					}
				],
				"serverSide": true,
				"processing": true,
				"order": [[1, 'desc']],
				"lengthMenu": [[ 10,25,50,100,1000,-1], [10,25,50,100,1000,"All"]],				"ajax": {
					'type': 'POST',
					'url': "./bigtable_render.php",
					'data': {
						"DBID": [],
						"Cancer": [],
						"Cell": [],
						"PMID": [],
						"SubCancer": [],
						"IC50_min": null,
						"IC50_max": null					}
				},
				"columnDefs": [{"target":4,"visible":false},{"target":6,"visible":false},{"target":7,"visible":false},{"target":15,"visible":false},{"target":16,"visible":false},{"target":17,"visible":false},{"target":18,"visible":false},{"target":19,"visible":false},{"target":20,"visible":false},{"target":21,"visible":false},{"target":22,"visible":false}],
			});

			// 移除按钮，并将列标签添加到 DataTable
			var colVisContainer = $('.dt-buttons').detach();
			colVisContainer.insertAfter($('#bigTable_wrapper .dataTables_length'));

			// 添加 "double checked record" 到列标签的标题
			//var title = $('<img style="height:15px;width:15px;" src="./images/star.png" /><span style="height:20px;">double checked record</span>');
			var title = $('<div class="bordered-title"><img style="height:15px;width:15px;" src="./images/star.png" /><span style="height:20px;">double checked record</span></div><span>&nbsp;&nbsp;</span>');
			title.prependTo($('#bigTable_wrapper .dataTables_length'));

			//title.prependTo($('#bigTable_wrapper .dataTables_length'));
			//var title = $('<div style="display:flex;flex-direction:row;"><img style="height:15px;width:15px;" src="./images/star.png" /><span style="height:20px;margin-left:10px;">double checked record</span></div>');
			//title.prependTo($('#bigTable_wrapper .dataTables_length'));
			
			var table = $('#bigTable').DataTable();
			$('#bigTable').on('order.dt',function(){
				
				let orders = table.order();
				let ind_ref = 10;
				let order_ref = orders.filter(function(v){return v[0] === ind_ref;});
				
				//All Selected Cols should have desc ordering of ref(except select ref)
				if(Array.isArray(order_ref) && !order_ref.length){
					orders.push([ind_ref,'desc']);
				}
				table.ajax.reload();
				// console.log('Array Content ord:'+JSON.stringify(table.order()));
				
			});
			
			//Get Paper Quantity Chart
			var total_num_chart = 3;
			var empty_space_chart = 100;
			$.ajax({
				url:"./c1_render.php",
				method:"POST",
				data:{DBID: [],
					  Cancer:[],
					  Cell:[],
					  IC50_min:null,
					  IC50_max:null,
					  PMID:[],
					  SubCancer:[],
					  Width:$(".div_charts").width() - empty_space_chart,
					  Height:$(".div_charts").height()
					  },
				dataType:"text",
				success : function(data) {
				$("#chartContainer4").html(data);}
			});
			//Hot Drugs
			$.ajax({
				url:"./c2_render.php",
				method:"POST",
				data:{DBID: [],
					  Cancer:[],
					  Cell:[],
					  PMID:[],
					  SubCancer:[],
					  Width:$(".div_charts").width() - empty_space_chart,
					  Height:$(".div_charts").height()
					  },
				dataType:"text",
				success : function(data) {
				$("#chartContainer5").html(data);}
			});
			//Hot Cancer
			$.ajax({
				url:"./c3_render.php",
				method:"POST",
				data:{DBID: [],
					  Cancer:[],
					  Cell:[],
					  PMID:[],
					  SubCancer:[],
					  Width:$(".div_charts").width() - empty_space_chart,
					  Height:$(".div_charts").height()
					  },
				dataType:"text",
				success : function(data) {
				$("#chartContainer6").html(data);}
			});
			
			$("#search-box").keyup(function(){
				$.ajax({
				type: "POST",
				url: "bigtable_search.php",
				data:'keyword='+$(this).val(),
				beforeSend: function(){
					$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
				},
				success: function(data){
					$("#suggesstion-box").show();
					$("#suggesstion-box").html(data);
					$("#search-box").css("background","#FFF");
				}
				});
			});
			
			$("#btnHeatMap").click(function(){				
				postWithNewWindow("./bigtable_heatmap_main.php",{'DBID': [],
													'Cancer':[],
													'Cell':[],
													'PMID':[],
													'SubCancer':[],
													'IC50_min':null,
													'IC50_max':null});
													 
			});
			
			document.getElementById('IC50_min').value = '';
			document.getElementById('IC50_max').value = '';
				
		});
		
		function selectData(val) {
			$("#search-box").val(val);
			$("#suggesstion-box").hide();
		}
	
		function showDiv(drugbankNumber){
			var x = event.clientX;     // Get the horizontal coordinate
			var y = event.clientY;     // Get the vertical coordinate
			document.getElementById('popDiv').style.left= x+'px';
			document.getElementById('popDiv').style.top= y+'px';
			document.getElementById('popDiv').innerHTML =drugbankNumber+'<br><img src="https://go.drugbank.com/structures/'+drugbankNumber+'/thumb.svg">';
			
			document.getElementById('popDiv').style.display='block';
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
	<a href="bigtable.php" class="a_home"><span class="main_home">DRiCdb</span><div class='div_subH'><span class="label_home">literature</span><span class="subN_home">NCUE & CGU</span></div></a>

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

<!--Page Filter-->
<div class="pan_filters">
	<div class="div_flexContainer">
	<div class='sub_title'><h1>SEARCH</h1><div class='sepLine2'></div></div>
	<form id='table'>
		<div class='div_filterContainer'>
			<div class='IC50Container'>
				<div class='f_item1'><p>IC50 (μM):</p></div>
				<div class='f_item2'><input name='IC50_min' id='IC50_min' type='text' placeholder="min" size='4'/></div>
				<div class='f_item3'><p>~</p></div>
				<div class='f_item4'><input id='IC50_max' name='IC50_max' type='text' placeholder="max" size='4'></div>
			</div>
			<iframe id='frame1' frameborder="no"  src="./bigtable_select_DBID.php"  width="360" height="350"></iframe>
			<iframe id='frame2' frameborder="no"  src="./bigtable_select_Cancer.php"  width="360" height="350"></iframe>
			<iframe id='frame5' frameborder="no"  src="./bigtable_select_SubCancer.php"  width="360" height="350"></iframe>
			<iframe id='frame3' frameborder="no"  src="./bigtable_select_Cell.php"  width="360" height="350"></iframe>
		</div>
	</form>

	<!-- Go to bigtable.js to find the code getValue()-->
	<div class="div_filterFBtn">
		<input class="filter_submit" type="button" name="Submit" value="SEARCH" style=""  onclick="getValue();"/>
		<input class="filter_reset" type="button" name="Submit" value="RESET" id='reset' style=""/>
		<div class="filter_export" id="Print">EXPORT</div>
	</div>
	</div>
</div>

<div class='bTContainer'><div id='bigTable_wrapper' align='center' class='dataTables_wrapper no-footer'><table id='bigTable' class='display dataTable no-footer' style='width:95%' aria-describedby='bigTable_info' role='grid'><thead><tr><th></th><th>Drugname</th><th>DrugBank_ID</th><th>Cancertype</th><th>SubCancertype</th><th>Cancercell line</th><th>Normalcell line</th><th>IC50 grade</th><th>IC50(uM)</th><th>Combined Treatment</th><th>Reference</th><th>Publication Years</th><th>Cell Exp</th><th>Xenografts Exp</th><th>Clinical Trials</th><th>Approved</th><th>Vet_approved</th><th>Non_FDA approved</th><th>Withdrawn</th><th>Investigational</th><th>Nutraceutical</th><th>Experimental</th><th>Illicit</th><th>Price</th><th>Dosage Forms</th><th>ATC code</th></tr></thead></table></div></div>

<!-- Chart Part	-->
<div class="pan_charts">
	<div class="div_flexContainer">
	<div class='sub_title'><h1>SUMMARY</h1><div class='sepLine2'></div></div>
	<div class='div_tabsContainer'>
		<div id="chartContainer4" class="div_charts"></div>
		<div id="chartContainer5" class="div_charts"></div>
		<div id="chartContainer6" class="div_charts"></div>
	</div>
	</div>
</div>

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
<script>
	$(document).on('click','#Cancertype',function(e){
		// alert($("input[class='DBID']"));
		$("input[class='Cancer']").prop("checked",false);
		$("input[name='"+$(this).attr('value')+"'").prop("checked",true);
		// alert($(this).attr('name'));
		var $a = $("#" + $("input[name='"+$(this).attr('value')+"'").val());
		post("./bigtable.php",{'Cancer':$(this).attr('value')});
	});
	$(document).on('click','#Cancercell_line',function(e){
		// alert($("input[class='Cell']"))
		$("input[class='Cell']").prop("checked",false);
		$("input[name='"+$(this).attr('value')+"'").prop("checked",true);
		// alert($(this).attr('name'));
		var $a = $("#" + $("input[name='"+$(this).attr('value')+"'").val());
		post("./bigtable.php",{'Cell':$(this).attr('value')});
	});
	$(document).on('click','#DrugBankNumber',function(e){
		// alert($("input[class='DBID']"))
		$("input[class='DBID']").prop("checked",false);
		$("input[name='"+$(this).attr('value')+"'").prop("checked",true);
		// alert($(this).attr('name'));
		var $a = $("#" + $("input[name='"+$(this).attr('value')+"'").val());
					$b = $("#DBID_top");
		post("./bigtable.php",{'DBID':$(this).attr('value')});
	});
	
	$(document).on('click',"#reset",function(e){
		post("./bigtable.php",{'DBID':[],"Cancer":[],"Cell":[],"PMID":[]});
	});
	
	$(document).on('click','#Print',function(e){
		post("./bigtable_print.php",{'DBID': [],
								'Cancer':[],
								'Cell':[],
								'SubCancer':[],
								'IC50_min':null,
								'IC50_max':null});
				 
	});
	
</script>
</body>

