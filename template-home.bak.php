<?php
/**
 *
 * Template Name: Home-Page
 *
 * The template for the custom PJC pages.
 *
 * This is the template that displays custom PJC pages--not default.
 *
 * @package Custom PJC
 */

get_header(custom2); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; wp_reset_query(); ?>

			<style>
				body {
					background-color: #c0c0c0;
				}
				.div-line1, .div-line2, .div-line4, .div-line6, .div-line7, .div-line8, .div-block3L, .div-block3R, .div-block5L, .div-block5C, .div-block5R {
					box-shadow: 4px 4px 12px 4px #000000;
				}
				.home-section {
					display: -webkit-box;
					display: -webkit-flex;
					display: -ms-flexbox;
					display: flex;
					width: 100%;
					min-width: 100%;
					margin-right: 0px;
					padding-right: 0px;
					-webkit-box-orient: vertical;
					-webkit-box-direction: normal;
					-webkit-flex-direction: column;
					-ms-flex-direction: column;
					flex-direction: column;
					-webkit-flex-wrap: nowrap;
					-ms-flex-wrap: nowrap;
					flex-wrap: nowrap;
				}	
				.line-container3, .line-container5 {
					display: -webkit-box;
					display: -webkit-flex;
					display: -ms-flexbox;
					display: flex;
					-webkit-box-orient: horizontal;
					-webkit-box-direction: normal;
					-webkit-flex-direction: row;
					-ms-flex-direction: row;
					flex-direction: row;
					-webkit-box-pack: justify;
					-webkit-justify-content: space-between;
					-ms-flex-pack: justify;
					justify-content: space-between;
				}	
				.div-block3L, .div-block3R {
					-webkit-box-flex: 1;
					-webkit-felx: 1;
					-ms-flex: 1;
					flex: 1;
					padding-left: 12px;
					padding-right: 12px;
					padding-top: 2px;
					padding-bottom: 2px;
					margin-top: 5px;
					margin-bottom: 5px;
					border: 2px solid #000000;
					text-align: left;
					border-radius: 8px;
					background-color: #00274c;
					color: #e6e6e6;
					font-weight: normal;
					font-size: 18px;
					line-height: 1.2;
				}	
				.div-block3L {
					margin-left: 12px;
					margin-right: 20px;
				}	
				.div-block3R {
					margin-left: 20px;
					margin-right: 12px;
				}
				.div-block3L ul, .div-block3R ul {
					margin-top: 0px;
					margin-bottom: 10px;
					padding-left: 20px;
				}
				.div-block5L, .div-block5C, .div-block5R {
					-webkit-box-flex: 1;
					-webkit-flex: 1;
					-ms-flex: 1;
					flex: 1;
					padding-left: 2px;
					padding-right: 2px;
					padding-top: 2px;
					padding-bottom: 2px;
					margin-left: 10px;
					margin-right: 10px;
					margin-top: 5px;
					margin-bottom: 5px;
					border: 2px solid #000000;
					text-align: left;
					border-radius: 8px;
					background-color: #00274c;
					color: #e6e6e6;
					font-weight: normal;
					font-size: 18px;
				}
				.div-block5R {
					padding-left: 5px;
					padding-top: 8px;					
				}
				.div-block5L {
					-webkit-box-flex: 5;
					-webkit-flex: 5;
					-ms-flex: 5;
					flex: 5;
				}
				.div-block5C {
					-webkit-box-flex: 3;
					-webkit-flex: 3;
					-ms-flex: 3;
					flex: 3;
				}
				.div-block5R {
					-webkit-box-flex: 2;
					-webkit-flex: 2;
					-ms-flex: 2;
					flex: 2;
				}				
				.div-block5L ul, .div-block5C ul, .div-block5R ul {
					margin-top: 0px;
					margin-bottom: 10px;
					line-height: 1.2;
					padding-left: 20px;
				}
				.div-block5R {
					line-height: 1.2;
				}
				.div-line1 {
					display: block;
					font-weight: bold;
					font-size: 28px;
					color: #e6e6e6;
					text-shadow: 1px 1px 1px #000000;
					padding-left: 48px;
					padding-right: 48px;
					padding-top: 12px;
					padding-bottom: 12px;
					margin-left: 5px;
					margin-right: 5px;
					margin-top: 5px;
					margin-bottom: 5px;
					border: 2px solid #000000;
					border-radius: 8px;
					text-align: center;
					background-color: #00274c;
					line-height: 1.2;
				}	
				.div-line2 {
					display: block;
					font-weight: normal;
					font-size: 22px;
					color: #e6e6e6;
					padding-left: 8px;
					padding-right: 8px;
					padding-top: 2px;
					padding-bottom: 2px;
					margin-left: 5px;
					margin-right: 5px;
					margin-top: 5px;
					margin-bottom: 5px;
					border: 2px solid #000000;
					border-radius: 8px;
					text-align: center;
					background-color: #00274c;
					line-height: 1.4;
				}	
				.div-line4 {
					display: block;
					font-weight: normal;
					color: #e6e6e6;
					font-size: 22px;
					padding-left: 96px;
					padding-right: 96px;
					padding-top: 2px;
					padding-bottom: 2px;
					margin-left: 5px;
					margin-right: 5px;
					margin-top: 5px;
					margin-bottom: 5px;
					border: 2px solid #000000;
					border-radius: 8px;
					text-align: center;
					background-color: #00274c;
				}
				.div-line6 {
					display: block;
					font-weight: normal;
					color: #e6e6e6;
					font-size: 20px;
					padding-left: 10px;
					padding-right: 10px;
					padding-top: 2px;
					padding-bottom: 2px;
					margin-left: 5px;
					margin-right: 5px;
					margin-top: 5px;
					margin-bottom: 5px;
					border: 2px solid #000000;
					border-radius: 8px;
					text-align: left;
					background-color: #00274c;
				}
				.div-line6 ul {
					margin-top: 0px;
					padding-left: 20px;
					line-height: 1.2;
					margin-bottom: 10px;
				}
				.div-line7 {
					display: block;
					font-weight: normal;
					font-size: 14px;
					color: #e6e6e6;
					padding-left: 10px;
					padding-right: 10px;
					padding-top: 2px;
					padding-bottom: 2px;
					margin-left: 5px;
					margin-right: 5px;
					margin-top: 5px;
					margin-bottom: 5px;
					border: 2px solid #000000;
					border-radius: 8px;
					text-align: left;
					background-color: #00274c;
					line-height: 1.2;
				}
				.line-container1, .line-container2, .line-container4, .line-container6, .line-container7, line-container8 {
					display: flex;
					flex-wrap: wrap;
					align-items: center;
					justify-content: center;
				}
				.div-line1_5 {
					display: block;
					font-weight: normal;
					font-size: 16px;
					color: #e6e6e6;
					padding-left: 10px;
					padding-right: 10px;
					padding-top: 8px;
					padding-bottom: 0px;
					text-align: left;
					line-height: 1.4;
				}
				.div-line8 {
					display: block;
					font-weight: normal;
					color: #e6e6e6;
					font-size: 18px;
					line-height: 1.4;
					padding-left: 10px;
					padding-right: 10px;
					padding-top: 4px;
					padding-bottom: 4px;
					margin-left: 5px;
					margin-right: 5px;
					margin-top: 5px;
					margin-bottom: 5px;
					border: 2px solid #000000;
					border-radius: 8px;
					text-align: left;
					background-color: #00274c;
				}
			</style>

			<div class="home-section">
			  <div class="line-container1">
				  <div class="div-line1"><img src="<?php get_template_directory_uri()?>/wp-content/uploads/2017/12/lhc-collision-small-blue.png" align="right" alt="" style="height: 80px;">Patrick Carpentier<br>IT Consultant, Engineer and Problem Solver
			     </div> 
			  </div>
<br>
			  <div class="line-container2">
			    <div class="div-line2">Are you looking for an engineer that works in IT, believes 'critical thinking' is a redundant phrase, and is in search of problems to own and solve quickly?
			    </div>
			  </div>
			  <br>
			  <div class="div-line3 line-container3">
			    <div class="div-block3L"><big>Do you have</big>
			      <ul><li>A small office with Technology needs?</li>
			      <li>A large enterprise system that needs support, development or an experienced hand?</li>
			      <li>A state-wide system that needs to be running 24/7/365?</li>
			      <li>An office that needs to be productive every day?</li>
			      <li>Or anything in between...</li></ul>
			    </div>
			    <div class="div-block3R"><big>Do you need</big>
			      <ul><li>An experience IT consultant, manager or team lead?</li>
			        <li>Someone to contribute to your team?</li>
			        <li>A small project that you want to get off your plate?</li>
			        <li>New solutions or technology?</li>
			        <li>Help expanding your capabilities or increasing productivity?</li></ul>
			    </div>
			  </div>
			  <br>
			  <div class="line-container4">
			    <div class="div-line4">Invite me to join your team; I'm confident I can help</div>
			  </div>
			  <br>
			  <div class="div-line5 line-container5">
			    <div class="div-block5L"><big>Experience</big>
			      <small><ul><li>Wide Ranging (Small office to State-Wide Systems; government, health-care, manufacturing, law, energy, revenue, welfare)</li>
			      <li>Project Management (Team Lead, Technology Lead, Schedule Mgmt, Budget Creation & Mgmt, Asset Mgmt, Mgmt and User Presentations, Developer and User Training)</li>
			      <li>Operations (Production-Development-Testing-Deployment Support, Wintel Infrastructure Build-Support, Multiple Environment Maintenance-Support-Migrations, SW-HW Upgrades, Office Relocation, New Office Build, New Data Center Build)</li>
			      <li>Project Communications (Partners, Clients, Stakeholders, End-Users, Government [OIG Audit Responses], Project-Wide, Proposal Writing/Composition)</li>
			      <li>Vendor Management (HW, SW, Circuit, Power, Wiring, Various Contractors)</li>
			      <li>Other (Website Creation-Maintenance, Legacy Client/Server Systems, Office 365, Google Suite, Sharepoint)</li></ul></small>
			    </div>
			    <div class="div-block5C"><big>Skills</big>
			      <small><ul><li>Server Admin (Windows, Exchange, Sharepoint, AD, HP-UX)</li>
			      <li>Scripting (js, ksh, cshell, bat)</li>
			      <li>Languages (Native C and Java--Windows and HP, php, VB)</li>
			      <li>Tools (WordPress, Win Virtual Server, Citrix, VMWare, Visual Studio, Atom, NetBeans, PVCS, FCP, cron, CODE-1, CA Apps)</li>
			      <li>Hardware (Extensive HP, EMC, Dell, IBM, Tandem [minimal])</li>
			      <li>Data Center (Design and Build, Power, Networking, HVAC, UPS, Generator, Racking/Stacking)</li></ul></small>
			    </div>
			    <div class="div-block5R"><big>Values</big><br>
					<small>Integrity<br>Urgency<br>Driven Work Ethic<br>Application of Experience and Logic<br>Open Communication<br>Lead by Example<br>Dedication (to Client, Company, End Users, those Impacted by Technology)<br>Service to Others, Driven to Add Maximum Value<br>Exceed Expectations</small>
			    </div>
			  </div>
			  <br>
			  <div class="line-container6">
			    <div class="div-line6">I'm here to offer my skills and experience...
			      <ul><li>Build new systems</li>
			        <li>Upgrade existing systems</li>
			        <li>Evaluate new technologies or systems</li>
			        <li>Plan a new technology initiative</li>
			        <li>Integrate systems</li>
			        <li>Join your team</li>
			        <li>Own problems and deliverables</li>
			        <li>Constantly be looking for increasing productivity, saving time, saving money</li>
			        <li>Work with urgency keeping the end-user, the owner and the business in focus</li>
			        <li>Find the balance between what is needed, what can be done, and what will get used</li></ul>
			    </div>
			  </div>
			  <br>
			  <div class="line-container8">
			    <div class="div-line8"><big>Best Lesson Learned...</big><br>&emsp;A three year project early in my career taught me several several values, or ethos, that remain, have grown, and are applied to every work situation in which I find myself.  Those values starting at number 2 speak for themselves: dedication to proper methodologies, the client, the user and the schedule; work ethic and urgency;  and honesty and integrity.<br>&emsp;The primary value is to search for ways to make a positive impact.  This can be to the user, the business, the purpose or the bottom line.  Sometimes it can be great.  The experience that proved this to me was working as the technology lead for a childrens' welfare system.  In a mere five minute walk through a call center using the system and hearing just one side of a CSR's telephone conversation, the connection of technology and human lives in need was crystal clear and forever etched in my mind.  That experience created the passion and dedication to service that has been driving me since.</div>
			  </div>
			  <br>
			  <div class="line-container7">
			    <div class="div-line7">* Educated, trained and experienced before every problem, error or code snippet could only be found with brains and books--not Google.
			    </div>
			  </div>
			</div>

<?php get_footer(); ?>
