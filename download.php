
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="generator" content="Jekyll v4.1.1">
	
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src='./bigtable.js'></script>
	
	<title>Download</title>
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
			margin:0;
		}
	
		.bd-placeholder-img {
		}	font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;


		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
			  font-size: 3.5rem;
			}
		}
		
		div.mainContainer{
			margin: 50px;
		}
		div.div_content{
			margin:2.5%;
			border-radius:20px;
			background-color:#f7f7f7;
			padding:5%;
		}
		table.t_contain, table.t_contain td, table.t_contain th{
			text-align:center;
			border: 1px solid;
			border-collapse:collapse;
		}
		table.t_contain{
			width:100%;
		}
		table.t_contain td, table.t_contain th{
			padding:1%;
		}
		div.filter_export{
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
		div.filter_export:hover{
			background-color: #D87818;
		}
	</style>
	
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
<main role="main">
	<div class="mainContainer">
		<div class='div_content'>
			<h1>Download</h1>
			<table class='t_contain'>
				<tr>
					<th>Database Name</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>Literature</td>
					<td><div class="filter_export" id="export_c">EXPORT</div></td>
				</tr>
				<tr>
					<td>Clinical</td>
					<td><div class="filter_export" id="export_l">EXPORT</div></td>
				</tr>
			</table>
		</div>
	</div>
</main>

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
	$(document).on('click','#export_c',function(e){
		post("../P097v5/bigtable_print.php",{'DBID':'',
								'Cancer':'',
								'Cell':'',
								'SubCancer':'',
								'IC50_min':'',
								'IC50_max':''});
				 
	});
	$(document).on('click','#export_l',function(e){
		post("../P097v5_clinical/bigtable_print.php",{'DBID':'',
								'Cancer':'',
								'SubCancer':''});		 
	});
</script>
</body>