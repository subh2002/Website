<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Campaign</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link rel="stylesheet" href="http://www.onlinepromosms.com/assets/dist/css/style.css?v=1660147580">
<link rel="stylesheet" href="http://www.onlinepromosms.com/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.onlinepromosms.com/assets/dist/css/AdminLTE.min.css?v=1660147716">
<link rel="stylesheet" href="http://www.onlinepromosms.com/assets/dist/css/style.css?v=1660147716">
<link rel="stylesheet" href="http://www.onlinepromosms.com/assets/plugins/select2/select2.css">
<link rel="stylesheet" href="http://www.onlinepromosms.com/assets/dist/css/build/toastr.min.css">
<link rel="stylesheet" href="http://www.onlinepromosms.com/assets/dist/css/sweetalert.min.css">
<link href="http://www.onlinepromosms.com/assets/dist/css/smart_wizard.css" type="text/css"/>
<link rel="stylesheet" href="http://www.onlinepromosms.com/assets/dist/css/skins/skin-green.min.css?v=1660147716">
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<body>
<div class="page-container row-fluid">	
	<?php include("leftbar.php");?>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
	</div>
  </div>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			<h3>Campaign Setup</h3>

            <div class="header-seperation">
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu" class="">
          <div class="iconset top-menu-toggle-white"></div>
          </a> </li>
      </ul>
      <a href="dashboard.php" style="color:#FFF; font-size:24px; margin-top:20%;">CRM</a>
      <ul class="nav pull-right notifcation-center">
        <li class="dropdown" id="header_task_bar"> <a href="dashboard.php" class="dropdown-toggle active" data-toggle="">
          <div class="iconset top-home"></div>
          </a> </li>
      
      </ul>
    </div>

<div class="box-body ">
                                        
                                        <form id="fileinfo" method="post" name="fileinfo" autocomplete="off"
                                              enctype="multipart/form-data" class="form-horizontal" onsubmit="$('#loading').show();">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span style="font-size:12px;color:#b64645;text-align:left;"><b>Daily Testing Limit: 0 / 4</b></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span style="font-size:12px;color:#b64645;text-align:left;"><b>Daily Small Limit: 0 / 2</b></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group" style="margin-bottom:0px;">
                                                    <label class="col-md-3 control-label">Mobile Numbers
                                                        <br/> <span
                                                                style="font-size:10px;color:#b64645;text-align:left;">Maximum
                                        1,00,000</span>
                                                    </label>
                                                    <div class="col-md-9 col-xs-12">
                                    <textarea class="two" onKeydown="countLines(this)" onKeyUp="countLines(this)"
                                              rows="5" name="mobileno" style="height:auto; width:100%"
                                              placeholder="Enter mobile numbers here with country code" id="res3"
                                              required></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group" id="import-group" style="margin-bottom:0px;">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div>
                                                                    <div class="input-group"> <span
                                                                                class="input-group-addon"
                                                                                style="background: #eee;">Group Import</span>
                                                                        <select class="form-control" id="contactgroup">
                                                                            <option value="0">Select Group</option>
                                                                                                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group" id="import-csv" style="margin-bottom:0px;">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <div class="input-group"> <span
                                                                                    class="input-group-addon"
                                                                                    style="background: #eee;">CSV Import</span>
                                                                            <input type="file" style="padding-top: 3px;"
                                                                                   accept=".csv" id="thefile"
                                                                                   class="form-control"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group" id="import-txt">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <div class="input-group"> <span
                                                                                    class="input-group-addon"
                                                                                    style="background: #eee;">TXT Import</span>
                                                                            <input type="file" style="padding-top: 3px;"
                                                                                   accept=".txt" id="thefile1"
                                                                                   class="form-control"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <div class="form-group">
                                                                <div class="col-md-10">
                                                                    <div style="width:190px">
                                                                        <div class="input-group"> <span
                                                                                    class="input-group-addon">Count</span>
                                                                            <input name="numbercount" id="lineCount_set"
                                                                                   type="text"
                                                                                   width="80px" class="form-control"
                                                                                   readonly/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Message <br/> <span
                                                                style="font-size:10px;color:#b64645;text-align:left;">Max 1000 Characters</span></label>
                                                    <div class="col-md-9 col-xs-12">
                                                        <span id="msgCount" ></span>
                                                        <input type="hidden" name="msgCount"
                                                               value=""
                                                               id="msgCountInput">
                                                        <textarea class="four" rows="4" style="height:auto; width:100%"
                                                                  placeholder="Enter your message here" id="message"
                                                                  name="message"></textarea>

                                                    </div>
                                                </div>

                                                
                                                    <div class="form-group">
                                                        <div class="">
                                                                                                                </div>
                                                    </div>
                                                                                            </div>

                                            <div class="col-sm-6">
                                                                                                    <div class="stv-radio-tabs-wrapper">
                                                        <input type="radio" class="stv-radio-tab" name="radioTabTest"
                                                               value="1" id="tab1" checked/>
                                                        <label for="tab1">Image</label>

                                                        <input type="radio" class="stv-radio-tab" name="radioTabTest"
                                                               value="2" id="tab2"/>
                                                        <label for="tab2">PDF</label>

                                                        
                                                        <input type="radio" class="stv-radio-tab" name="radioTabTest"
                                                               value="4" id="tab4"/>
                                                        <label for="tab4">Video</label>
                                                    </div>
                                                
                                                <div class="form-group RadioImage" style="background-color:#F5F5F5">
                                                    <label class="col-md-4 control-label">Upload Image 1
                                                        <br/> <span
                                                                style="font-size:10px;color:#b64645;text-align:left;">Max Size
                                         1 MB</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <div class="col-md-12">
                                                                <input type="file" class="fileinput btn-primary"
                                                                       name="wimage1" id="img1"
                                                                       accept=".jpg,image/*"
                                                                       data-filename-placement="inside"
                                                                       title="File name goes inside">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                
                                                <div class="form-group RadioPdf" style="background-color:#F5F5F5">
                                                    <label class="col-md-4 control-label">
                                                        Upload PDF
                                                        <br/> <span
                                                                style="font-size:10px;color:#b64645;text-align:left;">Max Size
                                         1 MB</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <div class="col-md-12">
                                                                <input type="file" class="fileinput btn-primary"
                                                                       name="wimage2" id="img5"
                                                                       data-filename-placement="inside"
                                                                       title="File name goes inside">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group RadioVideo" style="background-color:#F5F5F5">
                                                    <label class="col-md-4 control-label">
                                                        Upload Video
                                                        <br/> <span
                                                                style="font-size:10px;color:#b64645;text-align:left;">Max Size
                                         3 MB</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <div class="col-md-12">
                                                                <input type="file" class="fileinput btn-primary"
                                                                       name="wimage4" id="video"
                                                                       data-filename-placement="inside"
                                                                       title="File name goes inside">
                                                                <!--input style="display:none;" name="video_duration" type="text" id="video_duration">
                                                                                    <audio style="display:none;" id='audio11'></audio-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group dpimage" style="background-color:#F5F5F5">
                                                    <label class="col-md-4 control-label">
                                                        Upload DP
                                                        <br/> <span
                                                                style="font-size:10px;color:#b64645;text-align:left;">Size
                                        350x350px</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <div class="col-md-12">
                                                                <input type="file" class="fileinput btn-primary"
                                                                       name="wimage5" id="img6"
                                                                       accept=".jpg,image/*"
                                                                       data-filename-placement="inside"
                                                                       title="File name goes inside">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>

                    </section>

                      <div class="modal fade" id="IssueReport" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <form method="POST">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Report Issue</h4>
			</div>
			<div class="modal-body">
			<label>Enter Your Issue Here</label>
			 <textarea name="problem" style="    height: 100px;" required class="form-control"></textarea>
			</div>
			<div class="modal-footer">
			  <button type="submit" name="ReportIssue" class="btn btn-info">Submit</button>
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</form>
      </div>
     </div>
</div>
</body>
</html>
<style>
    .box-body {
    padding: 20px;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body {
    color: #3e3e3e;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
}
body {
    font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
    font-weight: 400;
    overflow-x: hidden;
    overflow-y: auto;
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
.box-header:before, .box-body:before, .box-footer:before, .box-header:after, .box-body:after, .box-footer:after {
    content: " ";
    display: table;
}
:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.box-header:after, .box-body:after, .box-footer:after {
    clear: both;
}
.box-header:before, .box-body:before, .box-footer:before, .box-header:after, .box-body:after, .box-footer:after {
    content: " ";
    display: table;
}
:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.header .header-seperation {
    width: 250px;
    display: block;
    float: left;
    height: 60px;
}
.header-seperation {
    background-color: #22262e;
}
</style>
