<?php include ('head.php');?>
<?php include ('session.php');?>

<link href="https://www.cssscript.com/demo/sticky.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/help.css">
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include ('side_bar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
        <hr/>
        <div class="panel panel-default" style="border-color:white;">
								<div class="panel-heading" style="margin-bottom:20px;margin-top:20px;">
									<h4 class="modal-title" id="myModalLabel">         
														<div class="panel panel-primary">
															<div class="panel-heading" style="background-color:#de9d4d;border-color:#de9d4d;">
																Help Index
															</div> 
		                        </div> 
		                         </div>
                            <main>
                              <details>
                                <summary> How to add a new Category?</summary>
                                <div class="faq__content">
                                  <p><ul><li>To add a category, please click on ‘Add Category’ in the side bar or <a href="add_category.php">click here</a>.</li></ul></p>
                                </div>
                              </details>

                                <details>
                                <summary>How to add a new Participant?</summary>
                                <div class="faq__content">
                                  <p>
                                    <ul>
                                      <li>To add a participant, please click on ‘Add Participant’ in the side bar or <a href="add_participant.php" class="click">click here</a>.</li>
                                      <li><strong>Note:</strong><br>
                                      The maximum limit for a video file uploaded from local storage is restricted to 40MB.</br>
                                      In case a Youtube video is added, only the key of the video is to be pasted in the respective field.</li>
                                    </ul>
                                      </p>
                                </div>
                              </details>
                              <details>
                                <summary>How to view, edit or delete the existing participants?</summary>
                                <div class="faq__content">
                                  <p>
                                    <ul>
                                      <li>To view, edit or delete the existing participants present on the platform, please click on ‘View Participants’ on the side bar or <br> <a href="participant.php">click here</a>.</li>
                                      <li><strong>Note:</strong><br>
                                      You cannot change the category of the existing participant.</li>
                                    </ul>
                                  </p>
                                </div>
                              </details>
                              <details>
                                <summary>How to view the list of registered voters?</summary>
                                <div class="faq__content">
                                  <p>
                                    <ul>
                                      <li>
                                        To view the list of registered voters present on the platform, please click on ‘View Voters’ on the side bar or <a href="voters.php">click here</a>.
                                      </li>
                                    </ul>
                                  </p>
                                </div>
                              </details>
                              <details>
                                <summary>How to view the voting reports?</summary>
                                <div class="faq__content">
                                  <p>
                                    <ul>
                                      <li>
                                      To view the voting reports present in the platform, please click on ‘Voting Reports’ on the side bar or <a href="report.php">click here</a>.
                                      </li>
                                    </ul>
                                  </p>
                                </div>
                              </details>
                              <details>
                                <summary>How to log out?</summary>
                                <div class="faq__content">
                                  <p>
                                    <ul>
                                      <li>
                                      To log out, please choose ‘Log Out’ in the side bar or <a href="logout.php">click here</a>.
                                      </li>
                                    </ul>
                                  </p>
                                </div>
                              </details>
                              </main>
                            <script>
                            try {
                              fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
                                return true;
                              }).catch(function(e) {
                                var carbonScript = document.createElement("script");
                                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
                                carbonScript.id = "_carbonads_js";
                                document.getElementById("carbon-block").appendChild(carbonScript);
                              });
                            } catch (error) {
                              console.log(error);
                            }
                            </script>
                            <script>
                              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                              ga('create', 'UA-46156385-1', 'cssscript.com');
                              ga('send', 'pageview');

                            </script>

         </div>

        </div>
    </div>
</body>
