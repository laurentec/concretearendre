<?php $this->inc('elements/header.php'); ?>	 
		<div class=container> 
            <?php		          
    		$a= new Area('Slide');
			$a->display($c);
			?>          	
		</div>
	<div class="pure-g">
		<div class=container>
		<div class="pure-u-1-3">
			<?php		          
    		$a= new Area('col1');
			$a->display($c);
			?> <!--   
			<div> Perfect Logic </div> <div><img alt="logo" width="310" height="200" src="themes/montheme/assets/images/logic.jpg" /></div>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>-->
		</div>
		<div class="pure-u-1-3">
			<?php		          
			$a= new Area('col2');
			$a->display($c);
			?>    	
			<!-- <div> Complete Solution</div><div><img alt="logo" width="310" height="200" src="themes/montheme/assets/images/solution.jpg" /></div>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>-->
        </div >
        <div class="pure-u-1-3">
			<?php		          
    		$a= new Area('col3');
			$a->display($c);
			?>    
			<!-- <div> Uber Culture </div><div><img alt="logo" width="310" height="200" src="themes/montheme/assets/images/culture.jpg" /></div>
 			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>-->
		</div>
		<!--<div id="titre">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>-->
		</div>
		<div class=container>		
		<div class="pure-u-1-3" >            
			<!--<div>Social Connection </div>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </div>
			<div align="center">
			<div class="social"><img alt="google" width="45" height="45" src="themes/montheme/assets/images/google.jpg" /></div> 
			<div class="social"><img alt="facebook" width="45" height="45" src="themes/montheme/assets/images/facebook.jpg" /></div> 
			<div class="social"><img alt="in" width="45" height="45" src="themes/montheme/assets/images/in.jpg" /></div> 
			<div class="social"><img alt="tube" width="45" height="45" src="themes/montheme/assets/images/tube.jpg" /></div> 
			<div class="social"><img alt="twitter" width="45" height="45" src="themes/montheme/assets/images/twitter.jpg" /></div> </div>
			<div> newsletter </div>
			
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </div>
			<div>Contact </div>-->
			<?php		          
    		$a= new Area('Newsletter');
			$a->display($c);
			?>
		</div>		
		<div class="pure-u-1-3" >	
			<!--<div>Contact </div>-->
			<?php		          
    		$a= new Area('Contact');
			$a->display($c);
			?>  
		</div>
	    <div class="pure-u-1-3" >
			<!--<div> News update </div> -->
			<?php		          
    		$a= new Area('Actualite');
			$a->display($c);
			?>  
			<!--<table>
			<div><tr><td><img alt="firefox" width="45" height="45" src="themes/montheme/assets/images/firefox.jpg" /></td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</td></tr></div>
			<div><tr><td><img alt="bulles" width="45" height="45" src="themes/montheme/assets/images/bulles.jpg" /></td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</td></tr></div>
			<div><tr><td><img alt="ciel" width="45" height="45" src="themes/montheme/assets/images/ciel.jpg" /></td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</td></tr></div>
			</table>-->
		</div>	
		</div>
		<!--<div class=container>  
		<div class="pure-u-1-3" >
			<div><img alt="google" width="160" height="30" src="themes/montheme/assets/images/subscribe.jpg" /></div>
		</div>	
		
		<div class="pure-u-1-3" >
			<div><img alt="google" width="160" height="30" src="themes/montheme/assets/images/send.jpg" /></div>
		</div>	
		<div class="pure-u-1-3" >
			<div><img alt="google" width="160" height="30" src="themes/montheme/assets/images/visit.jpg" /></div>
		</div>	
		</div>-->
	</div>
	<?php $this->inc('elements/footer.php'); ?>