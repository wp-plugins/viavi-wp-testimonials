   <!-- Options Tabs -->
<script type="text/javascript">
	jQuery(function() {
		jQuery("#plugin_config_tabs").tabs();
	});
</script>
<div id="WordPress_wrap" style="padding:10px">
    <h1 style="font:oblique 30px/30px Georgia,serif; color:grey;background-image: url('<?php echo plugins_url('/viavi-wp-testimonials/images/WordPress_Testimonials-logo.png',1); ?>');background-repeat: no-repeat;padding: 0px 10px 10px 47px;background-position: 0 0;">WordPress Testimonials</h1>


<div class="viavi-content">
    
    <h2>How to use ?</h2>
    <p>Do you want some unique and awesome ways to display your clients reviews on your site ? Then this plugin for you !! Using this plugin you can customize almost everything easily.</p>
              
<div class="plugin_config">
<div id="plugin_config_tabs">    
    
    <ul>
        <li><a href="#plugin_config-1">Grid View</a></li>
        <li><a href="#plugin_config-2">Slide Shortcodes</a></li>
        <li><a href="#plugin_config-3">Slider Effects &amp; Customization</a></li>
        <li><a href="#plugin_config-4">Color Styles</a></li>
        <li><a href="#plugin_config-5">More Help?</a></li>
    </ul>            

    <div id="plugin_config-1">
            <h4>1) This plugin provides three different styles</h4> 
            <p>Use this Shortcode to change the style of the testomonials:</p>
            <p><code>[WordPress_Testimonials style="one|two|three"]</code></p>
              
            <h4>2) If you want to display the testimoinals according to its date/ID/title/rand use the following Shortcode</h4> 
            <p><code>[WordPress_Testimonials orderby="date|rand|ID|title"]</code></p>
              
            <h4>3) Here you can decide the ORDER of the testimonials by using the following Shortcode:</h4> 
            <p><code>[WordPress_Testimonials order="DESC|ASC"]</code></p>
              
            <h4>4) To make the testimonials more effective by adding more description, you can add images in the testimonials and this feature is manage very easily in this plugin by just putting the Shortcode in the page.</h4> 
            <p>You can add and customize the images (like-make image small/medium/large) in this testimonials using the following Shortcode :</p>
            <p><code>[WordPress_Testimonials thumb="small|medium|large"]</code></p>
              
            <h4>5)This plugin can allows you to set the limit of the number of the testimonials you want to show in single page.</h4>
            <p>Use this simple Shortcode to set the limit :</p> 
            <p><code>[WordPress_Testimonials limit="1|5|...|10|-1"]</code></p>
            
            <h4>All the above features can handled by one Shortcode:</h4>
            <p><code>[WordPress_Testimonials style="one|two|three" orderby="date|rand|ID|title" order="DESC|ASC" thumb="small|medium|large" limit="1|5|...|10|-1"]</code></p>
        
    </div>    
    <div id="plugin_config-2">
            <p>This are some attractive features of this plugin, you can use the slider in the testimonials with various option available in this plugin. Use the following instruction to set up and customizes the slider in your testimonials</p>
            
            <h4>1) You can choose the slider in various styles, just by using the following shortcode</h4> 
            <p><code>[Sliding_WordPress_Testimonials style="one"]</code></p>
              
            <h4>2) Once the slider is placed, than you can place the testimonials in different ORDER(like-date|rand|ID|title)whatever you want by using this short code</h4> 
            <p><code>[Sliding_WordPress_Testimonials orderby="date|rand|ID|title"]</code></p>
              
            <h4>3) Here you can set the order of the testimonials (like-ascending/descending) using the following Shortcode</h4> 
            <p><code>[Sliding_WordPress_Testimonials order="DESC|ASC"]</code></p>
              
            <h4>4) The slider images can customize in different ways by the following shortcode</h4> 
            <p><code>[Sliding_WordPress_Testimonials thumb="small|medium|large"]</code></p>
              
            <h4>5) The limit can be set by putting the following Shortcode</h4> 
            <p><code>[Sliding_WordPress_Testimonials limit="1|5|...|10|-1"]</code></p>
    </div>
    <div id="plugin_config-3">
            <p>These are some important features of slider which help the slider to display with more functionality, use this instruction to use this features</p> 
      
            <h4>1) If you dont want any manual interrept in the slider i.e just want the slider to slide AUTO, than use the 
            following Shortcode
            <p><code>[Sliding_WordPress_Testimonials autoslide="true"]</code></p>
      
            <h4>2) The Animation of the slider( if you want the fading effect in the testimonials) is managed by the following Shortcode</h4> 
            <p><code>[Sliding_WordPress_Testimonials animation="slide|fade"]</code></p>
      
            <h4>3) Here you can set the speed of the slideshow by using the following Shortcode</h4>
            <p>Set the slideshow speed whatever you want by this Shortcode</p> 
            <p><code>[Sliding_WordPress_Testimonials slideshowSpeed=7000]</code></p>
      
            <h4>4) Same way the animation speed of the testimonials can also be managed by the shortcode given below</h4> 
            <p><code>[Sliding_WordPress_Testimonials animationSpeed=600]</code></p>
            <p>All the features and effect of the testimonials slider is managed by the following Shortcode</p>
            <p><code>[Sliding_WordPress_Testimonials style="one" orderby="date|rand|ID|title" order="DESC|ASC"  thumb="small|medium|large" limit="1|5|...|10|-1" autoslide="true" animation="slide|fade" slideshowSpeed=7000 animationSpeed=600]</code></p>
                
    </div>
    
    <div id="plugin_config-4">
    	<p>Use shortcode in for color styles.</p>
    	<table width="100%">
        	<tr>
            	<td valign="middle"><span id="turquoise"></span></td>
            	<td valign="middle"><span id="emerland"></span></td>                
            	<td valign="middle"><span id="peter_river"></span></td>
            	<td valign="middle"><span id="amethyst"></span></td>     
			</tr>
            <tr>
            	<td><code>colors_theme="Turquoise"</code></td>
            	<td><code>colors_theme="Emerland"</code></td>
            	<td><code>colors_theme="Peter_River"</code></td>
            	<td><code>colors_theme="Amethyst"</code></td>
			</tr>                
            <tr><td colspan="4">&nbsp;</td></tr>            
            <tr>                           
            	<td valign="middle"><span id="midnight_blue"></span></td>
            	<td valign="middle"><span id="sunflower"></span></td>                
            	<td valign="middle"><span id="corrot"></span></td>                
            	<td valign="middle"><span id="alizarin"></span></td>                
            </tr>
            <tr>
            	<td><code>colors_theme="Midnight_blue"</code></td>
            	<td><code>colors_theme="Sun_Flower"</code></td>
            	<td><code>colors_theme="Carrot"</code></td>
            	<td><code>colors_theme="Alizarin"</code></td>                
            </tr>
        </table>
        
        <h2></h2>
    	
        <p><strong>Use in List View :</strong> <code>[WordPress_Testimonials colors_theme="COLORNAME"]</code></p>
        <p><strong>Use in Slider View :</strong> <code>[Sliding_WordPress_Testimonials colors_theme="COLORNAME"]</code></p>
        
    </div>
    
    <div id="plugin_config-5">
    	<p>For more help you can contact us at <a href="mailto:info@viaviweb.com">info@viaviweb.com</a></p>
        
        <p><a href="http://codecanyon.net/user/viaviwebtech/portfolio?WT.ac=portfolio_item&WT.z_author=viaviwebtech" target="_blank"><img src="<?php echo plugins_url( 'images/ANDROID-BANNER.png' , __FILE__ ); ?>" alt="" /></a></p>
    </div>
    
</div>
</div>
    
</div>
<p class="footer"><?php echo _e('Developer','WordPress-Timeline'); ?> : <a target="_blank" href="http://viaviweb.com/">Viaviweb.com</a></p>
