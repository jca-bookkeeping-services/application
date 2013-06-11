<!DOCTYPE html>
<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
	<head>
		{include file="_shared/_head.php" }
	<body>
		<div id="wrapper">
			<div id="headcontainer">
				{include file="_shared/_header.php" }				
			</div>
			
			<!-- Main Contianer -->
			<div id="maincontentcontainer">
				<div class="section group panel">
					<div class="col span_1_of_4 float_left">
						<div class="col span_2_of_2">{include file="_widget/_services.php" }</div>
						<div class="col span_2_of_2 panel">{include file="_widget/_contacts.php" }</div>
					</div>
					<div class="col span_3_of_4 float_right">
						<div class="section group">
							<div class="col span_2_of_2">
								<h4 class="title">List of Peachtree(Sage) Clients / Implementations</h4>
							</div>
							<div class="section group left" id="content_description">
								{foreach from=$implementations item=implementation}
									<div class="col span_2_of_2 implementations">{$implementation.name}</div>                
			                	{/foreach} 								
							</div>
						</div> 
					</div>
				</div>				
			</div>
			<!-- End main container -->
			<div id="footercontainer">
				{include file="_shared/_footer.php"}
			</div>
		</div>
	</body>
	{include file="_shared/_foot.php"}
</html>