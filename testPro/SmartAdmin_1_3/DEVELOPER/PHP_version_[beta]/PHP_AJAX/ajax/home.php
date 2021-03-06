<?php require_once("inc/init.php"); ?>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<h1>Mision</h1>
								<p>We are Canada's leading owner, developer and manager of well located, high quality, urban retail-centered properties where people live and shop for everyday life.</p>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<h1>Vision</h1>
								<p>To be renowned for creating sustainable shopping environments that become the heart of our communities.</p>
							</div>
						</div>
						<!-- widget grid -->
						<section id="widget-grid" class="">
							
							<!-- row -->
							<div class="row">
								<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-0">
									    <header>
									    	<span class="widget-icon"><i class="icon-calendar"></i></span>
									        <h2>Full Length Widget</h2>     
									        <div class="widget-toolbar">
												
												<ul class="nav nav-tabs in" id="myTab2">
													<li class="active">
														<a data-toggle="tab" href="#home">Home</a>
													</li>
		
													<li>
														<a data-toggle="tab" href="#profile">Profile</a>
													</li>
		
													<li>
														<a data-toggle="tab" href="#info">Info</a>
													</li>
												</ul>
												
											</div>                     
									    </header>
									    
									    <!-- widget div-->
									    <div>
									    	<!-- widget edit box -->
									        <div class="jarviswidget-editbox">

									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
									        <!-- end widget edit box -->
            
									        <div class=""> 
									        <!-- content -->	
												Widget Content
										       		
											<!-- end content -->	
									        </div>
									        
									    </div>
									    <!-- end widget div -->
									</div>
									<!-- end widget -->

								</article>
							</div>
							
							<!-- end row -->
							
							<!-- row -->
							
							<div class="row">
								
								<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-1">
									    <header>
									        <h2>Half Widget</h2>                           
									    </header>
									    
									    <!-- widget div-->
									    <div>
									    	<!-- widget edit box -->
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
									        <!-- end widget edit box -->
            
									        <div class=""> 
									        <!-- content goes here -->
											
											Widget Content
											
											<!-- end content -->
									        </div>
									        
									    </div>
									    <!-- end widget div -->
									</div>
									<!-- end widget -->
								</article>
								
								
								<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<!-- new widget -->
									<div class="jarviswidget" id="widget-id-2">
									    <header>
									        <h2>Half Widget</h2>                           
									    </header>
									    
									    <!-- widget div-->
									    <div>
									    	<!-- widget edit box -->
									        <div class="jarviswidget-editbox">
									            <div>
									                <label>Title:</label>
									                <input type="text" />
									            </div>
									            <div>
									                <label>Styles:</label>
									                <span data-widget-setstyle="purple" class="purple-btn"></span>
									                <span data-widget-setstyle="navyblue" class="navyblue-btn"></span>
									                <span data-widget-setstyle="green" class="green-btn"></span>
									                <span data-widget-setstyle="yellow" class="yellow-btn"></span>
									                <span data-widget-setstyle="orange" class="orange-btn"></span>
									                <span data-widget-setstyle="pink" class="pink-btn"></span>
									                <span data-widget-setstyle="red" class="red-btn"></span>
									                <span data-widget-setstyle="darkgrey" class="darkgrey-btn"></span>
									                <span data-widget-setstyle="black" class="black-btn"></span>
									            </div>
									        </div>
									        <!-- end widget edit box -->
            
									        <div class=""> 
									        <!-- content goes here -->
											
											<p>asdad</p>Widget Content
											<p>asdad</p>Widget Content<p>asdad</p>Widget Content
											<!-- end content -->
									        </div>
									        
									    </div>
									    <!-- end widget div -->
									</div>
									<!-- end widget -->
								</article>
										
							</div>
							
							<!-- end row -->
							

						</section>
						<!-- end widget grid -->


<script>

	pageSetUp();
	
	/* ---------------------------------------------------------------------- */
	/*	Widgets Desktop
	/* ---------------------------------------------------------------------- */	
	
	function setup_widgets_desktop() {
		
		if ($('#widget-grid').length){
			
			$('#widget-grid').jarvisWidgets({	
							
				grid: 'article',
				widgets: '.jarviswidget',
				localStorage: true,
				deleteSettingsKey: '#deletesettingskey-options',
				settingsKeyLabel: 'Reset settings?',
				deletePositionKey: '#deletepositionkey-options',
				positionKeyLabel: 'Reset position?',
				sortable: true,
				buttonsHidden: false,
				//
				toggleButton: true,
				toggleClass: 'icon-minus open | icon-plus closed',
				toggleSpeed: 200,
				onToggle: function(){},
				//
				deleteButton: true,
				deleteClass: 'icon-remove',
				deleteSpeed: 200,
				onDelete: function(){},
				//
				editButton: true,
				editPlaceholder: '.jarviswidget-editbox',
				editClass: 'icon-cog | icon-cog',
				editSpeed: 200,
				onEdit: function(){},
				//
				fullscreenButton: true,
				fullscreenClass: 'icon-resize-full | icon-resize-small',	
				fullscreenDiff: 3,		
				onFullscreen: function(){},
				//
				customButton: false,
				customClass: 'folder-10 | next-10',
				customStart: function(){ alert('Hello you, this is a custom button...') },
				customEnd: function(){ alert('bye, till next time...') },
				//
				buttonOrder: '%refresh% %custom% %edit% %toggle% %fullscreen% %delete%',
				opacity: 1.0,
				dragHandle: '> header',
				placeholderClass: 'jarviswidget-placeholder',
				indicator: true,
				indicatorTime: 600,
				ajax: true,
				timestampPlaceholder:'.jarviswidget-timestamp',
				timestampFormat: 'Last update: %m%/%d%/%y% %h%:%i%:%s%',
			    refreshButton: true,
			    refreshButtonClass: 'icon-refresh icon-spin',
				labelError:'Sorry but there was a error:',
				labelUpdated: 'Last Update:',
				labelRefresh: 'Refresh',
				labelDelete: 'Delete widget:',
				afterLoad: function(){},
				rtl: false
				
			});
			
		} // end if
		
	}
	
	/* end widgets desktop */


</script>	