
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>Tutorial</title>
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
		
		.mainContainer{
			margin: 100px;
		}
		
		table.tut_container{
			width:100%;
			background-color:rgb(250,250,250);
		}
		table.tut_container, th, td{
			border: 1px solid black;
			border-collapse:collapse;
		}
		table.tut_container td{
			padding:1%;
		}
		div.div_content{
			margin:5%;
			border-radius:20px;
			background-color:#f7f7f7;
			padding:5%;
		}
		span.sp_title{
		  font-size:40px;
		}
		ol.ol_main {
		  list-style-type: upper-alpha;
		  font-size:30px;
		}
		ol.ol_sub1 {
		  font-size:20px;
		}
		ol > li {
			margin:2%;
		}
		div.div_imgC_1{
			
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
		<span class='sp_title'>User Manual</span>
		<div class='div_ol'>
			<ol class='ol_main'>
				<li>Search
					<ol class='ol_sub1'>
						<li class='li_sub1'>Drug Searching
							<ol class='ol_sub2'>
								<p>In the "DB_ID&Drug Name" search field, users can find the drug you want to inquire by entering a complete/partial DB number or a complete/partial drug name.</p>
								<li class='li_sub2'>If you search for: "Niclosamide", you will only find "Niclosamide"</li>
								<li class='li_sub2'>If you search for: "los", you can find all the drugs whose name contains "los"</li>
								<li class='li_sub2'>If you search: "DB06803", only the drug "DB06803" will be found</li>
								<li class='li_sub2'>If you search: "68", you can find all the drugs whose DB_ID contains "68"</li>
								<span>(The above are not affected by uppercase and lowercase, blank keys)</span>
								<div class = 'div_imgC_1'>
									<img src="./images/tut_1_1.png" alt="" width="200" height="250">
									<img src="./images/tut_1_2.png" alt="" width="200" height="250">	
									<img src="./images/tut_1_3.png" alt="" width="200" height="250">	
									<img src="./images/tut_1_4.png" alt="" width="200" height="250">	
								</div>
							</ol>
						</li>
						<li class='li_sub1'>Cancer Type Searching
							<ol class='ol_sub2'>
								<p>In the "Cancer type" search field, users can find the cancer type you want to query by entering the full/partial string of the cancer type you want to find.</p>
								<li class='li_sub2'>If you search for: "breast cancer", you will only find "Breast Cancer"</li>
								<li class='li_sub2'>If you search for: "br", you can find all cancer types that contain "br" ex:Brain Cancer</li>
								<span>(The above are not affected by uppercase and lowercase, blank keys)</span>
								<div class = 'div_imgC_1'>
									<img src="./images/tut_2_1.png" alt="" width="200" height="250">
									<img src="./images/tut_2_2.png" alt="" width="200" height="250">	
								</div>
							</ol>
						</li>
						<li class='li_sub1'>IC50 Searching
							<ol class='ol_sub2'>
								<p>In the "IC50(uM)" search field, users need to input the range of IC50 values they want to find.</p>
								<li class='li_sub2'>IC50 >2，<10
									<br><img src="./images/tut_3_1.png" alt="" width="110" height="250">
								</li>
								<li class='li_sub2'>IC50 >0.001，<0.01
									<br><img src="./images/tut_3_2.png" alt="" width="110" height="250">
								</li>
							</ol>
						</li>
						<li class='li_sub1'>Supplement
							<p>If you want to re-establish the search criteria, you can press RESET</p>
						</li>
					</ol>
				</li>
				<li>Field Operations
					<ol class='ol_sub1'>
						<li class='li_sub1'>Adjustment and rearrangement of the number of columns: the diagram is as follows
							<br><img src="./images/tut_4_1.png" alt="" width="170" height="250">
						</li>
						<li class='li_sub1'>Column adjustment: the icon is as follows (dark color is displayed, light color is not displayed)
							<br><img src="./images/tut_4_2.png" alt="" width="840" height="210">
						</li>
						<li class='li_sub1'>Useful link provide
							<ol class=''>
								<li class=''>DrugBank_ID (the diagram is as follows)
									<br><img src="./images/tut_4_3_1.png" alt="" width="140" height="110">
								</li>
								<li class=''> Reference (the diagram is as follows)
									<br><img src="./images/tut_4_3_2.png" alt="" width="120" height="115">
								</li>
							</ol>
						</li>
						<li class='li_sub1'>Sorting of fields
							<br><img src="./images/tut_4_4.png" alt="" width="100" height="600">
						</li>
						<li class='li_sub1'>Supplement
							<p>
								<span>If you want to re-establish the display conditions, you can press RESET (Different from the reset of the search field, if you want to search again, you need to click the reset of the search field above)</span>
							</p>
						</li>
					</ol>
				</li>
				<li>Icon operation
					<ol class='ol_sub1'>
						<li class='li_sub1'>Paper quantity
							<p>
								<span>Move the cursor to the desired year (histogram) and click, the data will be displayed as follows:</span>
								<span>Take 2009 as an example. Display the PMID and Reference of all the documents published in the year and included in DRC_db, where you can still search for PMID and adjust the number of displayed columns.</span>
								<br><img src="./images/tut_5_1.png" alt="" width="970" height="380">
							</p>
						</li>
						<li class='li_sub1'>HOT CANCER
							<p>
								<span>Move the cursor to the type of cancer (histogram) to be queried and click, the data will be displayed as follows:</span>
								<span>Take skin cancer, for example. Displays the number of trials of drugs and experiments on cells/animals/clinical experiments for skin cancer among all the collected data, and click the arrow on the right side of the test to arrange the times from small to large or from large to small, and the drugs can still be carried out here The search and the adjustment of the number of displayed columns.</span>
								<br><img src="./images/tut_5_2.png" alt="" width="970" height="380">
							</p>
						</li>
						<li class='li_sub1'>HOT DRUG
							<p>
								<span>This figure shows the number of cancer types for which the drug has been tested. The minimum is 1 and the maximum is 24.</span>
								<span>Move the cursor to the "Number of cancer types that have been tested" to be queried and click, the data will be displayed as follows:</span>
								<span>Take "10 kinds" as an example. Display the name of the drug whose number of cancer types that have been tested is 10 among all the collected data. You can still search for the drug and adjust the number of displayed columns here.</span>
								<br><img src="./images/tut_5_3.png" alt="" width="970" height="380">
							</p>
						</li>
					</ol>
				</li>
			</ol>
		</div>
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
</body>