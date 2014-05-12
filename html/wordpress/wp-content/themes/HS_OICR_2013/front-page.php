<?php get_header(); ?>
	<div class="grid_15">     
     <div class="buttonswrap"><!--set left colum with buttons-->
	  <div class="grid_5 alpha">
	    <a class="button icon browse" href="/PathwayBrowser/"><span>Browse Pathways</span></a>
 	 </div>
  	<div class="grid_5">
   	 <a class="button icon data" href="/Analysis/index.html#TOOLS=1&TOOL_TYPE=combined_analysis_set&TAB=0"><span>Analyze Data</span></a>
  	</div>
    <div class="grid_5 omega">
    <a class="button icon cytoscape" href="http://wiki.reactome.org/index.php/Reactome_FI_Cytoscape_Plugin"><span>Reactome FI Network</span></a>
    </div>
  
 	 <div class="clear"></div> <!--clear the first row of buttons -->

    <div class="grid_5 alpha">
    <a class="button icon overview" href="http://wiki.reactome.org/index.php/Usersguide"><span>User Guide</span></a>
    </div>
	  <div class="grid_5">
	    <a class="button icon download" href="/download/index.html"><span>Data Download</span></a>
	  </div>
          <div class="grid_5 omega">
        <a class="button icon contact" href="/?page_id=328"><span>Contact Us</span></a>
      </div>
      
      <div class="clear"></div> <!--clear second row of buttons -->
    
    </div><!--close buttonswrap-->
    
    <div class="contentwrap">
    <div class="contenthead">About Reactome</div><!--close contenthead-->
    <div class="contentbody">
    	Reactome is a free, open-source, curated and peer reviewed pathway database. Our goal is to provide intuitive bioinformatics tools for the visualization, interpretation and analysis of pathway knowledge to support basic research, genome analysis, modeling, systems biology and education. The current version (v46) of Reactome was released on September 23, 2013.
    </div><!--close contentbody-->
    </div><!--close contentwrap-->
    
    <div class="credits">
    <a href="http://www.oicr.on.ca" target="_new"><img src="<?php bloginfo('template_directory'); ?>/images/logos/OICR2logo.png" height="50"></a>
    <a href="http://www.med.nyu.edu/" target="_new"><img src="<?php bloginfo('template_directory'); ?>/images/logos/NYUmc.png" height="60"></a>
    <a href="http://www.cshl.edu/" target="_new"><img src="<?php bloginfo('template_directory'); ?>/images/logos/cshl_logo.png" height="50"></a>
    <a href="http://www.ebi.ac.uk/" target="_new"><img src="<?php bloginfo('template_directory'); ?>/images/logos/EMBL_EBI_Logo_black.png" height="40"></a>
    <br>
    </br>
    <p>The development of Reactome is supported by a grant from the US National Institutes of Health (P41 HG003751), Ontario Research Fund, and the European Molecular Biology Laboratory.</p>
    </div><!--close credits-->    </div><!--close grid15-->
    <div class="grid_9"> 
            <div class="contentwrap">
            <div class="contenthead">
            Reactome News </div>
            <div class="contentbody">
            
            <div class="announcement">
            <a href="/?p=1673"> Welcome to the New Reactome Website
            <!--This is a placeholder for static announcements. For example, downtime due to server maintenance, or some other important announcement-->
            </div><!--close annoucement-->

            <!--twitter feed --><div class="twitter">
            <a class="twitter-timeline" width="300" href="https://twitter.com/reactome" data-widget-id="344458797739294721" data-chrome="noheader noborders transparent" data-tweet-limit="3">Tweets by @reactome</a></div>
             </div><!--close content body-->
             </div><!--close contentwrap-->

    </div><!--close grid9-->
     
    <div class="clear"></div><!--clear grid15 and 9-->
    
</div><!--close wrapper-->
<!--close content-->

<?php get_footer(); ?>