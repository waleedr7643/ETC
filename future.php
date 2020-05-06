
<!DOCTYPE html>
<html lang="eng">
<head>
	<title> English-Tense-Converter(ETC) </title>
    <link rel="shortcut icon" type="image/png" href="image/Naizm.png">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style type="text/css">
	body {
		background-image: url(image/bg.jpg);
	}
.box{
	 height: 109px;
    width: 528px;
    background-color: #033;
    border: 3px solid #44d20a;
    float: right;
    margin-right: 423px;
    margin-top: -10px;
	}
h4{
	color:#0af906;
	font-size:24px;
	text-align:center;
	}
	.alert-success{
	 background-color:#0F0;
	 color:#F00;
 }
</style>
<body>
<!--==== navigatin start =====-->
<div class="container">
<center>
	<img src="image/logo_ETC.png" width="30%" height="20%">
</center>
<nav id="nav" class="navbar navbar-inverse navbar-top" style="margin-left: 14px; margin-right:-16px; height: 100px; margin-bottom: 0px; background-color:#0c962f;">
  <div class="navbar-header">
  	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  	</button>
  </div>
  <div class="collpase navbar-collapse" id="navbar-collapse">
  	<ul class="nav  navbar-nav navbar-center" style="font-size: 1.5em; margin-left: 10%; margin-top: 30px;">
		<li><a href="index.php" style="color: #ffffff;">Home</a></li>
		<li><a href="peresent.php" style="color: #ffffff;">Peresent</a></li>
		<li><a href="Past.php" style="color: #ffffff;">Past</a></li>
		<li><a href="future.php" style="color: #ffffff;">Future</a></li>
	</ul>
  </div>
</nav>
<!--==== end navigation =====-->
<div class="container" id="panel">
	<img src="image/p02vdpfn.jpg" width="100%" height="100%">
	<div class="panel" >
		<div class="row">
			<div class="col-lg-8">
				<div class="panel">
					<div class="panel-heading">
						<center><h1>Tense Converter</h1></center>
					</div>
						<div class="panel-body">
						<form class="form-horizontal" action="future.php" method="post">
							<div class="form-group">
								<label class="col-md-3 control-label">Convert_From*</label>
								<div class="col-md-9">
									<select class="form-control" name="C_tens" size="">
						 <option  value=""/>Select Tense Which You Convert To </option>
                         <option   class="alert-success"> Simple Sentens </option>
                         <option  value="1PresentIndifinent"/> Present indefinite </option>
                         <option  value="1Presentcontinuou"/>Present Continuous</option>
                         <option  value="1Presentperfect" />Present Perfect</option>
                         <option  value="1perfectContinuous"/>Present Perfect Continuous </option>
                         <option  value="1PastIndifinent"/>Past indefinite</option>
                         <option  value="1PastContinuous"/> Past Continuous</option>
                         <option  value="1PastPerfect"/> Past Perfect</option>
                         <option  value="1PastPerfectContinuous"/> Past Perfect Continuous</option>
                         <option  value="1futureIndifinent"/>Future indefinite </option>
                         <option  value="1futureContinuous"/>Future Continuous </option>
                         <option  value="1futurePerfect"/> Future Perfect</option>
                         <option  value="1futurePerfectContinuous"/> Future Perfect Continuous</option>
                         
                         <option   class="alert-success"> Interrogative Sentens </option>
                         <option  value="P1indefiniteinterrogative"/>Indefinite Interrogative </option>
                         <option  value="P1ContinuousInterrogative"/>  Continuous Interrogative </option>
                         <option  value="P1PerfectInterrogative"/> Perfect Interrogative </option>
                         <option  value="P1PerfectContinuousInterrogative"/> Perfect Continuous Interrogative </option>
                         <option  value="PT1IndifinentInterrogative"/>Past indefinite</option>
                         <option  value="PT1ContinuousInterrogative"/> Past Continuous</option>
                         <option  value="PT1PerfectInterrogative"/> Past Perfect</option>
                         <option  value="PT1PerfectContinuousInterrogative"/> Past Perfect Continuous</option>
                         <option  value="F1IndifinentInterrogative"/>Future indefinite </option>
                         <option  value="F1ContinuousInterrogative"/>Future Continuous </option>
                         <option  value="F1PerfectInterrogative"/> Future Perfect</option>
                         <option  value="F1PerfectContinuousInterrogative"/> Future Perfect Continuous</option>
									</select>
								</div><!-- col-md-9 -->
							</div><!-- closed form-group -->
							<div class="form-group">
								<label class="col-md-3 control-label" for="first_name">Enter Tense*</label>
								<div class="col-md-9">
									<input id="Present" name="Present" type="text" value="" size="40" class="form-control" />
								</div><!-- closed col-md-9 -->
							</div><!-- closed form-group -->
							<div class="form-group">
								<label class="col-md-3 control-label">Convert_To*</label>
								<div class="col-md-9">
						   <select class="form-control" name="P_tens" size="">
                         <option  value=""/>Select Tense Which You Convert To </option>
                         <option   class="alert-success"> Simple Sentens </option>
                         <option  value="futureIndifinent"/>Future indefinite </option>
                         <option  value="futureContinuous"/>Future Continuous </option>
                         <option  value="futurePerfect"/> Future Perfect</option>
                         <option  value="futurePerfectContinuous"/> Future Perfect Continuous</option>
                         
                         <option   class="alert-success"> Interrogative Sentens </option>
                         <option  value="FIndifinentInterrogative"/>Future indefinite </option>
                         <option  value="FContinuousInterrogative"/>Future Continuous </option>
                         <option  value="FPerfectInterrogative"/> Future Perfect</option>
                         <option  value="FPerfectContinuousInterrogative"/> Future Perfect Continuous</option>
                         </select>
								</div><!-- col-md-9 -->
							</div><!-- closed form-group -->
							<div class="form-group">
								<label class="col-sm-3 control-label"></label>
								<div class="col-md-9">
						<input type="submit"  id="sumit" name="submit" value="Convert Tense " class="btn btn-success btn-block form-control">
								</div><!-- closed col-md-9 -->
							</div><!-- closed form-group -->
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
			<img src="image/unnamed.png" style="margin-top: 20px;"/>	
			</div>
                 
<?php

   include "dbconction.php";
?>

     
                
<?php
				
				
                                   //  .............................
                                   //   TYPE Checking Interrogative.
								   //  ............................. 
								       $intg_ResultALL="";
									   $intg_Option="";
									   $intg_Show="";
								   	   $intg_invalid="";
 //==============================(1)======================( Indefinite Interrogative)==================================================
							   $Present=$_POST['Present']; 
							   $input=$_POST['C_tens'];
							   if($input=='P1indefiniteinterrogative')
							  {
		                          // Must be true
								 $do_value= 'do';
					             $does_value= 'does';
								
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								  $start=$i;
								  $i="";			
								}
//Peresent indifinit orignal cheking	
if($start==$do_value && $i=='I')
 {
			$check1='hi';
			$i="";
				}
if($start==$do_value && $i=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$do_value && $i=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($start==$do_value && $i=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$do_value && $i=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($start==$do_value && $i=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($start==$do_value && $i=='you')
 {
			$check1='hi';
			$i="";
				}
if($start==$do_value && $i=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($start==$does_value && $i=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($start==$does_value && $i=='He')
 {
	    $check1='hi';
		$i="";
					}
if($start==$does_value && $i=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$does_value && $i=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($start==$does_value && $i=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$does_value && $i=='It')
             {
		$check1='hi';
		$i="";
				}	
if($i!='i' &&$i!='I' &&$i!='we' &&$i!='We' &&$i!='They' &&$i!='they' &&$i!='You' &&$i!='you' &&$i!='he' &&$i!='He' &&$i!='She' &&$i!='she' &&$i!='it' &&$i!='It'  )
{						
 if($second_val=="")
		 {
   $intword = substr( $i, -1 );
   $second_val=$i;

if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	 $check2='2';
			}
	 $i="";
	 }	

if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($start==$do_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }	  
if($start==$does_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }	
   }		  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_1st']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000 size=+1>Select option :</font><font color=#FF00FF size=+1>From</font> <font color=#FFF size=+1> Peresent Indefinite Interrogative  </font>";
								   
											}									
								   else
                                            {
  $intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Present Indifinite Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Do/Does+Subject+MainVerb(1st form)+Object</font>";

											}}
//==============================(2)======================( Continuou Interrogative Tense)==============================================
							   $Present=$_POST['Present']; 
							   $input=$_POST['C_tens'];
							   if($input=='P1ContinuousInterrogative')
							  {
		                          // Must be true
								 $am_value= 'am';
					             $is_value= 'is';
								  $are_value= 'are';
								
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								 $start=$i;		
								 $i="";		
								}
//Peresent indifinit orignal cheking	
if($start==$am_value && $i=='I')
 {
			$check1='hi';
			$i="";
				}
if($start==$am_value && $i=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$are_value && $i=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($start==$are_value && $i=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$are_value && $i=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($start==$are_value && $i=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($start==$are_value && $i=='you')
 {
			$check1='hi';
			$i="";
				}
if($start==$are_value && $i=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($start==$is_value && $i=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($start==$is_value && $i=='He')
 {
	    $check1='hi';
		$i="";
					}
if($start==$is_value && $i=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$is_value && $i=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($start==$is_value && $i=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$is_value && $i=='It')
             {
		$check1='hi';
		$i="";
				}	
if($i!='i' &&$i!='I' &&$i!='we' &&$i!='We' &&$i!='They' &&$i!='they' &&$i!='You' &&$i!='you' &&$i!='he' &&$i!='He' &&$i!='She' &&$i!='she' &&$i!='it' &&$i!='It'  )
{						
 if($second_val=="")
		 {
   $intword = substr( $i, -1 );
   $second_val=$i;

if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	 $check2='2';
			} $i="";}	

if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($start==$are_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }	
		  	  
if($start==$is_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }	
   }		  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Peresent Continuous Interrogative  </font>";
								   
											}									
								   else
                                            {
 $intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Present Continue Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Is/Am/are+Subject+MainVerb(1st form)+ing+Object</font>";
											}}

//==============================(3)======================(Perfect Interrogative Tense)=================================================
							    $Present=$_POST['Present']; 
							   $input=$_POST['C_tens'];
							   if($input=='P1PerfectInterrogative')
							  {
		                          // Must be true
								 $has_value= 'has';
					             $have_value= 'have';
								
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								 $start=$i;		
								$i="";		
								}
//Peresent indifinit orignal cheking	
if($start==$have_value && $i=='I')
 {
			$check1='hi';
			$i="";
				}
if($start==$have_value && $i=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$have_value && $i=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($start==$have_value && $i=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$have_value && $i=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($start==$have_value && $i=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($start==$have_value && $i=='you')
 {
			$check1='hi';
			$i="";
				}
if($start==$have_value && $i=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($start==$has_value && $i=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($start==$has_value && $i=='He')
 {
	    $check1='hi';
		$i="";
					}
if($start==$has_value && $i=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$has_value && $i=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($start==$has_value && $i=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$has_value && $i=='It')
             {
		$check1='hi';
		$i="";
				}	
if($i!='i' &&$i!='I' &&$i!='we' &&$i!='We' &&$i!='They' &&$i!='they' &&$i!='You' &&$i!='you' &&$i!='he' &&$i!='He' &&$i!='She' &&$i!='she' &&$i!='it' &&$i!='It'  )
{						
 if($second_val=="")
		 {
   $intword = substr( $i, -1 );
   $second_val=$i;

if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	 $check2='2';
			} $i="";}	

if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($start==$have_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }	
		  	  
if($start==$has_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }	
   }		  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Peresent Perfect Interrogative </font>";
								   
											}									
								   else
                                            {
 $intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Present Perfect Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Has/Have+Subject+MainVerb(3rd form)+Object</font>";
											}}

//==============================(4)======================(Perfect Continuous Interrogative Tense)======================================				
                               $Present=$_POST['Present']; 
							   $input=$_POST['C_tens'];                       
							   if($input=='P1PerfectContinuousInterrogative')
							  {
		                          // Must be true
								 $has_value= 'has';
					             $have_value= 'have';
								
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								$start=$i;		
								$i="";	
								}
//Peresent indifinit orignal cheking	
if($start==$have_value && $i=='I')
 {
			$check1='hi';
			$i="";
				}
if($start==$have_value && $i=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$have_value && $i=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($start==$have_value && $i=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$have_value && $i=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($start==$have_value && $i=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($start==$have_value && $i=='you')
 {
			$check1='hi';
			$i="";
				}
if($start==$have_value && $i=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($start==$has_value && $i=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($start==$has_value && $i=='He')
 {
	    $check1='hi';
		$i="";
					}
if($start==$has_value && $i=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$has_value && $i=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($start==$has_value && $i=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$has_value && $i=='It')
             {
		$check1='hi';
		$i="";
				}	
if($i!='i' &&$i!='I' &&$i!='we' &&$i!='We' &&$i!='They' &&$i!='they' &&$i!='You' &&$i!='you' &&$i!='he' &&$i!='He' &&$i!='She' &&$i!='she' &&$i!='it' &&$i!='It'  )
{						
 if($second_val=="")
		 {
   $intword = substr( $i, -1 );
   $second_val=$i;

if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	 $check2='2';
			} $i="";}	

if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($start==$have_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }	
		  	  
if($start==$has_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }	
   }		  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Peresent Perfect Continuous Interrogative  </font>";
								   
											}									
								   else
                                            {
 $intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Present Perfect Continue Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Has/Have+Subject+Been+MainVerb(1st form)+ing+Object</font>";
											}}

//==============================(5)====================(Past Indifinent Interrogative Tense)=========================================				
                                $Present=$_POST['Present']; 
							    $input=$_POST['C_tens'];                       
							    if($input=='PT1IndifinentInterrogative')
							    {
		                        // Must be true
					            $did_value= 'did';
							    $broken = explode (' ',$Present);
					            foreach($broken as $i)
				                {	  
                                if($i==$did_value)
                                {
                    			$check1='hi';
		                    	$i="";
			                	}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_1st']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Past Indefinite Interrogative  </font>";
								   
											}									
								   else
                                            {
 $intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Past Indifinite Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Did+Subject+MainVerb(1st form)+Object</font>";
											}}
//==============================(6)======================(Past Continuous Interrogative Tense)======================================				
                               $Present=$_POST['Present']; 
							   $input=$_POST['C_tens'];                       
							   if($input=='PT1ContinuousInterrogative')
							  {
		                          // Must be true
								 $was_value= 'was';
					             $were_value= 'were';
								
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								  $start=$i;		
								  $i="";		
								}
//Peresent indifinit orignal cheking	
if($start==$was_value && $i=='I')
 {
			$check1='hi';
			$i="";
				}
if($start==$was_value && $i=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$were_value && $i=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($start==$were_value && $i=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$were_value && $i=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($start==$were_value && $i=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($start==$were_value && $i=='you')
 {
			$check1='hi';
			$i="";
				}
if($start==$were_value && $i=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($start==$was_value && $i=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($start==$was_value && $i=='He')
 {
	    $check1='hi';
		$i="";
					}
if($start==$was_value && $i=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($start==$was_value && $i=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($start==$was_value && $i=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($start==$was_value && $i=='It')
             {
		$check1='hi';
		$i="";
				}	
if($i!='i' &&$i!='I' &&$i!='we' &&$i!='We' &&$i!='They' &&$i!='they' &&$i!='You' &&$i!='you' &&$i!='he' &&$i!='He' &&$i!='She' &&$i!='she' &&$i!='it' &&$i!='It'  )
{						
 if($second_val=="")
		 {
   $intword = substr( $i, -1 );
   $second_val=$i;

if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	 $check2='2';
			} $i="";}	

if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($start==$were_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }	
		  	  
if($start==$was_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }	
   }		  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Past Continuous Interrogative  </font>";
								   
											}									
								   else
                                            {
$intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Past Continue Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Was/Were+Subject+MainVerb(1st form)+ing+Object</font>";
																			}}
//==============================(7)====================(Past Perfect Interrogative Tense)=========================================				
                                $Present=$_POST['Present']; 
							    $input=$_POST['C_tens'];                       
							    if($input=='PT1PerfectInterrogative')
							    {
		                        // Must be true
					            $had_value= 'had';
							    $broken = explode (' ',$Present);
					            foreach($broken as $i)
				                {	  
                                if($i==$had_value)
                                {
                    			$check1='hi';
		                    	$i="";
			                	}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Past Perfect Interrogative  </font>";
								   
											}									
								   else
                                            {
$intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Past Prefect Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>had+Subject+MainVerb(3rd form)+Object</font>";
											}}
//==============================(8)====================(Past Perfect Continuous Interrogative Tense)=========================================				
                                $Present=$_POST['Present']; 
							    $input=$_POST['C_tens'];                       
							    if($input=='PT1PerfectContinuousInterrogative')																	
							    {
		                        // Must be true
					            $had_value= 'had';
							    $broken = explode (' ',$Present);
					            foreach($broken as $i)
				                {	  
                                if($i==$had_value)
                                {
                    			$check1='1';
		                    	$i="";
			                	}
								if($i=='been' && $check1=='1')
                                {
                    			$check1='hi';
		                    	$i="";
			                	}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Past Perfect Continuous Interrogative  </font>";
								   
											}									
								   else
                                            {
$intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Past Prefect Continue Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Had+Subject+Been+MainVerb(1st form)+ing+Object</font>";											}}
//==============================(9)====================(Future Indefinite Interrogative Tense)=========================================				
                                $Present=$_POST['Present']; 
							    $input=$_POST['C_tens'];                       
							    if($input=='F1IndifinentInterrogative')																	
							    {                         
		                        // Must be true
					            $will_value= 'will';
							    $broken = explode (' ',$Present);
					            foreach($broken as $i)
				                {	  
								if($i==$will_value)
                                {
                    			$check1='hi';
		                    	$i="";
			                	}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_1st']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Future Indefinite Interrogative</font>";
								   
											}									
								   else
                                            {
$intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Future Indifinte Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Will+Subject+MainVerb(1st form)+Object</font>";											}}
											
//==============================(10)====================(Future Continuous Interrogative Tense)=========================================				
                                $Present=$_POST['Present']; 
							    $input=$_POST['C_tens'];                       
							    if($input=='F1ContinuousInterrogative')																	
							    {
		                        // Must be true
					            $will_value= 'will';
							    $broken = explode (' ',$Present);
					            foreach($broken as $i)
				                {	  
                                if($i==$will_value)
                                {
                    			$check1='1';
		                    	$i="";
			                	}
								if($i=='be' && $check1=='1')
                                {
                    			$check1='hi';
		                    	$i="";
			                	}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF>Future Continuous Interrogative </font>";
								   
											}									
								   else
                                            {
$intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Future  Continue Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Will+Subject+Be+MainVerb(1st form)+ing+Object</font>";											}}
//==============================(11)====================(Future Perfect Interrogative Tense)=========================================				
                                $Present=$_POST['Present']; 
							    $input=$_POST['C_tens'];                       
							    if($input=='F1PerfectInterrogative')																	
							    {
		                        // Must be true
					            $will_value= 'will';
							    $broken = explode (' ',$Present);
					            foreach($broken as $i)
				                {	  
                                if($i==$will_value)
                                {
                    			$check1='1';
		                    	$i="";
			                	}
								if($i=='have' && $check1=='1')
                                {
                    			$check1='hi';
		                    	$i="";
			                	}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Future Perfect  Interrogative </font>";
								   
											}									
								   else
                                            {
$intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Future  Perfect Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Will+Subject+Have+MainVerb(3rd form)+Object</font>";
											}}
//==============================(12)====================(Future Perfect Continuous Interrogative Tense)====================================				
                                $Present=$_POST['Present']; 
							    $input=$_POST['C_tens'];                       
							    if($input=='F1PerfectContinuousInterrogative')																	
							    {
		                        // Must be true
								$will_value= 'will';
							    $broken = explode (' ',$Present);
					            foreach($broken as $i)
				                {	  
                                if($i==$will_value)
                                {
                    			$ch='1';
		                    	$i="";
			                	}
								if($i=='have' && $ch=='1')
                                {
                    			$check1='1';
		                    	$i="";
			                	}
								if($i=='been' && $check1=='1')
                                {
                    			$check1='hi';
		                    	$i="";
			                	}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
$intg_Option="<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#FFF> Future Perfect Continuous Interrogative </font>";
											}									
								   else
                                            {
$intg_invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br><font color=#ffffff>Future  Continue Prefect Interogative Sentence Structure.<br>Interogative:</font> <font color=#ff0100>Will+Subject+HaveBeen+MainVerb(1st form)+ing+Object</font>";											}}

//===============================================================================================================================													
	                                  //..................................
									 // End of Interogative Type Checking
                                    // ................................... 
									
//===============================================================================================================================													
	                                  //.............................
									 // Start of Simple Type Checking
                                    // .............................. 
								   
								   	   $resultALL="";
									   $option="";
									   $show="";
									   $invalid="";
 //==============================(1)================( Present Indifinent)====================================================================
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1PresentIndifinent')
							   {
								   ///// Must be true
								 $do_value= "do";
					             $does_value= "does";
								 ////Must be False Codition 
								 $did_val='did';
								 $have_val= 'have';
					             $has_value= 'has';
								 $had_val='had';
								 $i_value= "am";
				            	 $is_value= "is";
								 $are_value= "are";
		                         $haveBeen_val= 'have been';
					             $hasBeen_value= 'has been';
								 $was_value= "was";
					             $were_value= "were";
					             $hadBeen_val='had been';
								 $will_val= 'will';
								 $willBe_val= 'will be';
								 $willHave_val= 'will have';
								 $will_valBeen= 'will have been';
								////////////////////end Fals
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								  $start=$i;		
										
								}
	 ////Must be False Codition if true this cond so invalid sentense

if($i==$did_val )

 {
			$check1='NO hi';
			$i="";
				}
				
if($i==$have_val )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$has_value )
 {
			 echo $check1='NO hi';
			$i="";
				}
					
if($i==$had_val )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$i_value )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$is_value )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$are_value )
		                         
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$haveBeen_val )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$hasBeen_value )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$was_value )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$were_value)
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$will_val )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$hadBeen_val)
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$willBe_val )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$willHave_val)
 {
			$check1='NO hi';
			$i="";
				}	
if($i==$will_valBeen)
 {
			$check1=' NO hi';
			$i="";
				}	
	///end of false condition////

if(	$check1!='NO hi')
{
  $check1='hi';
}
    $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_1st']==$i && $check1=='hi' )
						        {    
								   $temp_check='NO';
								   }
								}
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
		   $option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF> Present Indifinent </font>";
						   
											}									
								   else
                                            {
$invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br>Present Indifinite Structure:<br>Simple: <font color=#ff0100>Subject+ Auxiliary verb+MainVerb(1st form)+Object</font> <br>Negative: <font color=#ff0100> Subject+ Do not or Does not + Base form of verb + object  </font>";
											}}
//==============================(2)======================( Present Continuou Tense)==========================================================
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1Presentcontinuou')
							  {
		                          // Must be true
								 $am_value= 'am';
					             $is_value= 'is';
								 $are_value= 'are';
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								  $start=$i;		
										
								}
//Peresent indifinit orignal cheking	
if($i==$am_value && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($i==$am_value && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$are_value && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($i==$are_value && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$are_value && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($i==$are_value && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($i==$are_value && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($i==$are_value && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($i==$is_value && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($i==$is_value && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($i==$is_value && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$is_value && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($i==$is_value && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$is_value && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($i==$are_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		  
if($i==$is_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
		 $option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF> Present Continuous </font>";
					   
											}									
								   else
                                            {
 $invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br> Present Continue Structure:<br>Simple: <font color=#ff0100>Subject+ Auxiliary verb+MainVerb(1st form)+ing+obj</font> <br>Negative: <font color=#ff0100> Subject+is/am/are+Not+MainVerb(1st form)+ing+obj </font>";
											}//end of else condition
											}//End of First if condition			

//==============================(3)======================(Present Perfect Tense)================================================================
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1Presentperfect')
							  {
		                          // Must be true
								 $have_value= 'have';
					             $has_value= 'has';
								
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								  $start=$i;		
										
								}
//Peresent indifinit orignal cheking	
if($i==$have_value && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($i==$have_value && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$have_value && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($i==$have_value && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$have_value && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($i==$have_value && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($i==$have_value && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($i==$have_value && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($i==$has_value && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($i==$has_value && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($i==$has_value && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$has_value && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($i==$has_value && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$has_value && $start=='It')
             {
		$check1='hi';
		$i="";
				}	
if($i!='i' &&$i!='I' &&$i!='we' &&$i!='We' &&$i!='They' &&$i!='they' &&$i!='You' &&$i!='you' &&$i!='he' &&$i!='He' &&$i!='She' &&$i!='she' &&$i!='it' &&$i!='It'  )
{						
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
   $second_val=$i;

if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	 $check2='2';
			} $i="";}	

if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($i==$have_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }	
		  	  
if($i==$has_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }	
   }		  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	                              
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   $option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF> Present Perfect </font>";
								   
											}									
								   else
                                            {
   $invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br> Present Perfect Structure:<br>Simple: <font color=#ff0100>Subject+ Auxiliary verb+MainVerb(3rd form)+obj</font> <br>Negative: <font color=#ff0100> Subject+has/have+Not+MainVerb(3rd form)+obj </font>";
											}//end of else condition
											}//End of First if condition
//==============================(4)======================(Present Perfect Continuous Tense)==============================================				
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1perfectContinuous')
							  { 
					              $have_val= 'have been';
					              $has_val= 'has been';
								 $broken = explode (' ',$Present);
								 foreach($broken as $i)
				                { 	  
						         if($qasim==2&&$i=='been')
								{
									$new.=$i;
								    $qasim= "";
									}
								if($qasim==1&&$i=='has'||$i=='have')
								{
								    $new.=$i;
									$new.=" ";
									$qasim=2;
									}
								if($start=="")
								{
								    $start=$i;	
								    $qasim=1;
								  
								}
	                              					
//Peresent indifinit orignal cheking	
if($new==$have_val && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($new==$have_val && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$have_val && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($new==$have_val && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$have_val && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($new==$have_val && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($new==$have_val && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($new==$have_val && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($new==$has_val && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($new==$has_val && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($new==$has_val && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$has_val && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($new==$has_val && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$has_val && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($new==$have_val && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		  
if($new==$has_val && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }  			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   $option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF> Present Perfect Continuous </font>";
								   
											}									
								   else
                                            {
                      $invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br> Present Perfect Continue Structure:<br>Simple: <font color=#ff0100>Subject+ have been/has been+MainVerb(1st form)+ing+ Time-reference</font> <br>Negative: <font color=#ff0100>Subject+ have/has+Not+been+MainVerb(1st form)+ing+ Time-reference</font>";
											}// end of else condition
											}// End of first IF condition
														
//*========================(5)============(Past Indifinent  Tense)========================================================================
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1PastIndifinent')
							  {
		                          ///Must be true
								 $did_val= 'did';
								 ////Must be False Codition 
                                 $do_value= "do";
					             $does_value= "does";								
								 $had_val='had';
								 $i_value= "am";
				            	 $is_value= "is";
								 $are_value= "are";
		                         $haveBeen_val= 'have been';
					             $hasBeen_value= 'has been';
								 $was_value= "was";
					             $were_value= "were";
					             $hadBeen_val='had been';
								 $will_val= 'will';
								 $willBe_val= 'will be';
								 $willHave_val= 'will have';
								 $will_valBeen= 'will have been';
								//=======end Fals================
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								  $start=$i;		
										
								}
	 //Must be False Codition if true this cond so invalid sentense

if($i==$do_value )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$does_value )
 {
			 echo $check1='NO hi';
			$i="";
				}
					
if($i==$had_val )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$i_value )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$is_value )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$are_value )
		                         
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$haveBeen_val )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$hasBeen_value )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$was_value )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$were_value)
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$will_val )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$hadBeen_val)
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$willBe_val )
 {
			$check1='NO hi';
			$i="";
				}
					
if($i==$willHave_val)
 {
			$check1='NO hi';
			$i="";
				}	
if($i==$will_valBeen)
 {
			$check1=' NO hi';
			$i="";
				}	
	//end of false condition
						
//Peresent indifinit orignal cheking	
if($i==$did_val && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($i==$did_val && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$did_val && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($i==$did_val && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$did_val && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($i==$did_val && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($i==$did_val && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($i==$did_val && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($i==$did_val && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($i==$did_val && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($i==$did_val && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$did_val && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($i==$did_val && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$did_val && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($i==$did_val && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		 
if($i==$did_val && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }
if(	$check1!='NO hi')
{
   $check1='hi';
}		  			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_2nd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//End Of Foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
			$option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF> Past Indifinent </font>";
							   
											}									
								   else
                                            {
   $invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br> Past Indifinite Structure:<br>Simple: <font color=#ff0100>Subject+MainVerb(2nd form )+ Object</font> <br>Negative: <font color=#ff0100>Subject + Did + Not MainVerb(1st form)+object</font>";
											}//end of else statement
											}		//eEnd of First IF Condition
//==============================(6)=================(PAST Continuous Tense )=================================================================			
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1PastContinuous')
							  {
		                          // Must be true
								 $was_value= "was";
					             $were_value= "were";
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								  $start=$i;		
										
								}

						
//Peresent indifinit orignal cheking		
if($i==$was_value && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($i==$was_value && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$were_value && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($i==$were_value && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$were_value && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($i==$were_value && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($i==$were_value && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($i==$were_value && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($i==$was_value && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($i==$was_value && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($i==$was_value && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$was_value && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($i==$was_value && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$was_value && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($i==$were_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		  
if($i==$was_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }  			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								     $temp_check='NO';
									}									
								}//End of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
		$option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF> Past Continuous </font>";
											}									
								   else
                                            {
   $invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br> Past Continue Structure:<br>Simple: <font color=#ff0100>Subject+was/were+MainVerb(1st form)+ing+ Object</font> <br>Negative: <font color=#ff0100>Subject+was/were+Not+ MainVerb(1st form)+ing+object</font>";
											}//End of else condition
											}//End of First if condition			
//==============================(7)======================(PAST Perfect Tense )===================================================================				
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1PastPerfect')
							  {
					             $had_value= 'had';
								 $broken = explode (' ',$Present);
					             foreach($broken as $i)
				                {	  
								if($start=="")
								{
								  $start=$i;		
										
								}

						
//Peresent indifinit orignal cheking	
if($i==$had_value && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($i==$had_value && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$had_value && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($i==$had_value && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$had_value && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($i==$had_value && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($i==$had_value && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($i==$had_value && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($i==$had_value && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($i==$had_value && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($i==$had_value && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$had_value && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($i==$had_value && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$had_value && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($i==$had_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		  
if($i==$had_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }  			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop

							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   $option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF>Past Perfect </font>";
											}									
								   else
                                            {
   $invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br> Past Perfect Structure:<br>Simple: <font color=#ff0100>Subject+had+MainVerb(3rd form)+ Object</font> <br>Negative: <font color=#ff0100>Subject+had+Not+ MainVerb(3rd form)+object</font>";
											}// end of else condition
											}// End of first IF condition
//==============================(8)======================(PAST Perfect Continuous Tense )=====================================================				
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1PastPerfectContinuous')
							  { 
					             $had_value= 'had been';
								 $broken = explode (' ',$Present);
								 foreach($broken as $i)
				                {  
								if($qasim==2&&$i=='been')
								{
									$new.=$i;
								    $qasim= "";
									}
								if($qasim==1 && $i=='had')
								{
								    $new.=$i;
									$new.=" ";
									$qasim=2;
									}
								if($start=="")
								{
								    $start=$i;	
								    $qasim=1;
								  
								}

						
//Peresent indifinit orignal cheking	
if($new==$had_value && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($new==$had_value && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$had_value && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($new==$had_value && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$had_value && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($new==$had_value && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($new==$had_value && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($new==$had_value && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($new==$had_value && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($new==$had_value && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($new==$had_value && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$had_value && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($new==$had_value && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$had_value && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($new==$had_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		  
if($new==$had_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }  			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   $option="<font color=#FFFFFF>Select option :</font><font color=#0000FF>From<font color=#FFFFFF>Past Perfect Continuous </font>";

											}									
								   else
                                            {
$invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br>Past Perfect Continue Structure:<br>Simple: <font color=#ff0100>Subject+had been+MainVerb(1st form)+ing+Object+ Time-reference</font> <br>Negative: <font color=#ff0100>Subject+had+Not+been+MainVerb(1st form)+ing+object+ Time-reference</font>";
											}// end of else condition
											}// End of first IF condition

//==============================(9)======================(Future Indifinite Tense )=====================================================				

							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1futureIndifinent')
							  { 
					             $will_value= 'will';
								 $broken = explode (' ',$Present);
								 foreach($broken as $i)
				                { 	  
								if($start=="")
								{
								   $start=$i;		
								}

						
//Peresent indifinit orignal cheking	
if($i==$will_value && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($i==$will_value && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$will_value && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($i==$will_value && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$will_value && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($i==$will_value && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($i==$will_value && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($i==$will_value && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($i==$will_value && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($i==$will_value && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($i==$will_value && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($i==$will_value && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($i==$will_value && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($i==$will_value && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($i==$will_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		  
if($i==$will_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }  			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_1st']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
 		$option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF> Future Indifinite </font>";
								   
											}									
								   else
                                            {
$invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br>Future Indifinite Structure:<br>Simple: <font color=#ff0100>Subject+Will+MainVerb(1st form)+Object</font> <br>Negative: <font color=#ff0100>Subject+Will+Not+MainVerb(1st form)+object</font>";
											}// end of else condition
											}// End of first IF condition
//==============================(10)======================(Future Continuous Tense )=====================================================				
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1futureContinuous')
							  { 
					             $willbe_value= 'will be';
								 $broken = explode (' ',$Present);
								 foreach($broken as $i)
				                { 	  
								if($qasim==2&&$i=='be')
								{
									$new.=$i;
								    $qasim= "";
									}
								if($qasim==1&&$i=='will')
								{
								    $new.=$i;
									$new.=" ";
									$qasim=2;
									}
								if($start=="")
								{
								    $start=$i;	
								    $qasim=1;
								  
								}
                                
						
//Peresent indifinit orignal cheking	
if($new==$willbe_value && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($new==$willbe_value && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$willbe_value && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($new==$willbe_value && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$willbe_value && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($new==$willbe_value && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($new==$willbe_value && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($new==$willbe_value && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($new==$willbe_value && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($new==$willbe_value && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($new==$willbe_value && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$willbe_value && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($new==$willbe_value && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$willbe_value && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($new==$willbe_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		  
if($new==$willbe_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }  			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
		$option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF> Future Continuous </font>";

											}									
								   else
                                            {
$invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br>Future Continue Structure:<br>Simple: <font color=#ff0100>Subject+Will+Be+MainVerb(1st form)+ing+Object</font> <br>Negative: <font color=#ff0100>Subject+Will+Not+Be+MainVerb(1st form)+ing+object</font>";
											}// end of else condition
											}// End of first IF condition
//==============================(11)======================(Future Perfect Tense )=============================================================				
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1futurePerfect')
							  { 
					             $willhave_value= 'will have';
								 $broken = explode (' ',$Present);
								 foreach($broken as $i)
				                { 	  
						         if($qasim==2&&$i=='have')
								{
									$new.=$i;
								    $qasim= "";
									}
								if($qasim==1&&$i=='will')
								{
								    $new.=$i;
									$new.=" ";
									$qasim=2;
									}
								if($start=="")
								{
								    $start=$i;	
								    $qasim=1;
								  
								}
	                              					
//Peresent indifinit orignal cheking	
if($new==$willhave_value && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($new==$willhave_value && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$willhave_value && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($new==$willhave_value && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$willhave_value && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($new==$willhave_value && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($new==$willhave_value && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($new==$willhave_value && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($new==$willhave_value && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($new==$willhave_value && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($new==$willhave_value && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$willhave_value && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($new==$willhave_value && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$willhave_value && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($new==$willhave_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		  
if($new==$willhave_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }  			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   $option="<font color=#FFFFFF>Select option :</font><font color=#FFFF>From</font> <font color=#FFFFFF> Future Perfect </font>";
								   
											}									
								   else
                                            {
  $invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br>Future Perfect Structure:<br>Simple: <font color=#ff0100>Subject+Will+Have+MainVerb(3rd form)+Object</font> <br>Negative: <font color=#ff0100>Subject+Will+Not+Have+MainVerb(3rd form)+object</font>";
											}// end of else condition
											}// End of first IF condition
//==============================(12)======================(Future Perfect Continuous Tense )=====================================================				
							   $Present=$_POST['Present'];
							   $input=$_POST['C_tens'];
							   if($input=='1futurePerfectContinuous')
							  { 
					             $willHB_value= 'will have been';
								 $broken = explode (' ',$Present);
								 foreach($broken as $i)
				                { 	  
								if($qasim==3&&$i=='been')
								{
		                           $new.=$i;							
								   $qasim="";		
								}
                                if($qasim==2&&$i=='have')
								{
									$new.=$i;
									$new.=" ";
								    $qasim=3;
									}
								if($qasim==1&&$i=='will')
								{
								    $new.=$i;
									$new.=" ";
									$qasim=2;
									}
								if($start=="")
								{
								    $start=$i;	
								    $qasim=1;
								  
								}
						
//Peresent indifinit orignal cheking	
if($new==$willHB_value && $start=='I')
 {
			$check1='hi';
			$i="";
				}
if($new==$willHB_value && $start=='i')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$willHB_value && $start=='we')
 {
	 		 $check1='hi';
			 $i="";
				}
if($new==$willHB_value && $start=='We')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$willHB_value && $start=='they')
 {
		 $check1='hi';
		 $i="";
				}
if($new==$willHB_value && $start=='They')
 {
		 $check1='hi';
		 $i="";
		 		}
if($new==$willHB_value && $start=='you')
 {
			$check1='hi';
			$i="";
				}
if($new==$willHB_value && $start=='You')
 {
		 $check1='hi';
		 $i="";
					}
if($new==$willHB_value && $start=='he')
 {
	 		$check1='hi';
			$i="";
				}		
if($new==$willHB_value && $start=='He')
 {
	    $check1='hi';
		$i="";
					}
if($new==$willHB_value && $start=='She')
 {
		 $check1='hi';
		 $i="";
			}
if($new==$willHB_value && $start=='she')
 {
		   $check1='hi';
		   $i="";
							}
if($new==$willHB_value && $start=='it')
 {
			 $check1='hi';
			 $i="";
				}
if($new==$willHB_value && $start=='It')
             {
		$check1='hi';
		$i="";
				}			
 if($second_val=="")
		 {
   $intword = substr( $first_val, -1 );
	$second_val=$i;
if($intword==s)
	   {
	$check2='yes';
		}
else
	{
	$check2='2';
			}}			
if($i=='and' && $check2=='2')
	{
		  $check2='yes';               
		  }	
if($new==$willHB_value && $check2=='yes')
	{
		  $check1='hi'; 
		  $i="";              
		  }		  
if($new==$willHB_value && $check2=='2')
	{
		  $check1='hi';
		  $i="";                    
		  }  			  			
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID'];
				
      	
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
	$option="<font color=#FFFFFF>Select option :</font><font color=#FF00FF>From</font> <font color=#FFFFFF> Future Perfect Continuous </font>";
						   
											}									
								   else
                                            {
$invalid="<font color=#ff0100 size=+2>Invalid Sentence?<br></font><font color=#ff6512 size=+1>$Present</font><br>Future Perfect Continue Structure:<br>Simple: <font color=#ff0100>Subject+Will+HaveBeen+Verb(1st form)+ing+Object+Time-reference</font> <br>Negative: <font color=#ff0100>Subject+Will+Not+HaveBeen+Verb(1st form)+ing+object+Time-reference</font>";
											}// end of else condition
											}// End of first IF condition
									
//===============================================================================================================================													
	                                  //...........................
									 // End  of Simple Type Checking
                                    // ............................ 

//=================================================================================================================================		
									  
									  //.................................
									 // Start Conversion of Simple Tenses
                                    // ........................ .........
//==========================(9)=================(Future Indifinent To Other)==================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='futureIndifinent')
			      {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Future Indifinite  </font> <br> 
				      <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do')
					{
					$outputFI.='will';
				    $outputFI.= " ";
					$i="";
					$check=1;	
					}
					if($i=='does')
					{
					$outputFI.='will';
				    $outputFI.= " ";	
					$i="";	
					$check=1;
					}
					
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
							  if($check=="")
					          {
					          $outputFI.='will';
				              $outputFI.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_1st'];
							  }		  
				                       $outputFI.=$i;
								       $outputFI.= " ";
									 
					         }
					       		$resultALL="$outputFI" ;
					          }
	              ///==========(2)=================================	
	      
				    if($_POST['C_tens']=='1Presentcontinuou')  
				    {
					
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='am')
					{
					$outputFI.='will';	
					$outputFI.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='is')
					{
					$outputFI.='will';
					$outputFI.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='are')
					{
					$outputFI.='will';	
					$outputFI.=" ";
					$i="";
					$NoNot=1;
					}
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
									 
					  
					       }
					       	$resultALL="$outputFI" ;
					       }
			     	///====(3)=========================================
			     	if($_POST['C_tens']=='1Presentperfect')  
				    {

				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='have')
					{
					$outputFI.='will';	
					$outputFI.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='has')
					{
					$outputFI.='will';
					$outputFI.=" ";
					$NoNot=1;	
					$i="";
					} 	
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
									 
					  
					       }
					       $resultALL="$outputFI" ;
					       }
					    ////======(4)=========================================
			     	if($_POST['C_tens']=='1perfectContinuous')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='have')
					{
					$outputFI.='will';	
					$outputFI.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='has')
					{
					$outputFI.='will';
					$outputFI.=" ";
					$NoNot=1;	
					$i="";
					} 
					if($i=='been')
					{
					$i="";
					} 
						
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
									 
					  
					       }
					       	$resultALL="$outputFI" ;
					       }
					 ///=========(5)============================================      
				    if($_POST['C_tens']=='1PastIndifinent')  
				    {
				    $find="";	
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='did')
					{
					$outputFI.='will';	
					$outputFI.=" ";
					$i="";
					$find=1;
					}	
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
							  if($find=="")
					          {
					          $outputFI.='will';
				              $outputFI.= " ";	
					          $i="";	
					          }	 	
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
					  
					       }
					       	$resultALL="$outputFI" ;
					       }
				    ///========(6)======================================  
			     	if($_POST['C_tens']=='1PastContinuous')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='were')
					{
					$outputFI.='will';	
					$outputFI.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='was')
					{
					$outputFI.='will';
					$outputFI.=" ";
					$NoNot=1;	
					$i="";
					} 
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
									 
					  
					       }
					       	$resultALL="$outputFI" ;
					       }
					 ///=========(7)============================================
			     	if($_POST['C_tens']=='1PastPerfect')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='had')
					{
					$outputFI.='will';	
					$outputFI.=" ";
					$i="";
					$NoNot=1;
					}
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
									 
					  
					       }
					       	$resultALL="$outputFI ";
					       }
				 ///========(8)=======================================  
			     	if($_POST['C_tens']=='1PastPerfectContinuous')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='had')
					{
					$outputFI.='will';	
					$outputFI.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='been')
					{
					$i="";	
					}
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
									 
					  
					       }
					       	$resultALL="$outputFI" ;
					       }
					     ///========(9)=======================================  
					      if($_POST['C_tens']=='1futureIndifinent')  
				             {
					       	   $resultALL="$Present" ;
					       }
					     ///========(10)=======================================  
			    	if($_POST['C_tens']=='1futureContinuous')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='be')
					{
					$i="";
					}
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
									 
					  
					       }
					       	 $resultALL= "$outputFI" ;
					       }
				 ///========(11)=======================================  
			     	if($_POST['C_tens']=='1futurePerfect')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='have')
					{
					$i="";	
					}
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
									 
					  
					       }
					       	$resultALL= "$outputFI" ;
					       }
					     ///========(12)=======================================  
					      
					      if($_POST['C_tens']=='1futurePerfectContinuous')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='have')
					{
					$i="";	
					}
					if($i=='been')
					{
					$i="";	
					}
					
 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or form_4th ='$i' or form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_1st'];
							  }		  
				              $outputFI.=$i;
							  $outputFI.= " ";
									 
					  
					       }
					       	 $resultALL= "$outputFI" ;
					       }
					     ///========(End Of Future Indifinite Tense)=======================================  
	      				     }//
	      				     }//     
//==========================(10)=================(Future Continuous To Other)==================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='futureContinuous')
			      {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Future Continuous  </font> <br> 
				      <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do')
					{
					$outputFC.='will not be ';
				    $outputFC.= " ";
					$i="";
					$check=1;	
					}
					if($i=='does')
					{
					$outputFC.='will not be';
				    $outputFC.= " ";	
					$i="";	
					$check=1;
					}
					if($i=='not')
					{
					$i="";	
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
							  if($check=="")
					          {
					          $outputFC.='will be';
				              $outputFC.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFC.=$i;
								       $outputFC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFC";    
					      }
	              ///==========(2)=================================	
	      
				    if($_POST['C_tens']=='1Presentcontinuou')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='am')
					{
					$outputFC.='will';
				    $outputFC.= " ";
					$i="";
					$NoNot=1;	
					}
					if($i=='is')
					{
					$outputFC.='will';
				    $outputFC.= " ";	
					$i="";	
					$NoNot=1;
					}
					if($i=='are')
					{
					$outputFC.='will';
				    $outputFC.= " ";	
					$i="";	
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFC;
					$outputFC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='be')	
					{
					$outputFC.=$i;	
					$outputFC.=" ";
					}
					}	
					$outputFC.=' not be';
					$outputFC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFC.='be';	
					$outputFC.=" ";
					$i="";
					$NoNot=2;	 
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFC.=$i;
								       $outputFC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFC";    
					      }
			     	///====(3)=========================================
			     	if($_POST['C_tens']=='1Presentperfect')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='has')
					{
					$outputFC.='will';
				    $outputFC.= " ";
					$i="";
					$NoNot=1;	
					}
					if($i=='have')
					{
					$outputFC.='will';
				    $outputFC.= " ";	
					$i="";	
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFC;
					$outputFC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='be')	
					{
					$outputFC.=$i;	
					$outputFC.=" ";
					}
					}	
					$outputFC.=' not be';
					$outputFC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFC.='be';	
					$outputFC.=" ";
					$i="";
					$NoNot=2;	 
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFC.=$i;
								       $outputFC.= " ";
									 
					  
					       }
					       	$resultALL="$outputFC";   
					      }       
					    ////======(4)=========================================
			     	if($_POST['C_tens']=='1perfectContinuous')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
					{
					$outputFC.='will';
				    $outputFC.= " ";
					$i="";

					}
					if($i=='have')
					{
					$outputFC.='will';
				    $outputFC.= " ";	
					$i="";	
					}
					if($i=='been')
					{
					$outputFC.='be';	
					$outputFC.=" ";
					$i="";	 
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_5th'];
							  }		  
				              $outputFC.=$i;
							  $outputFC.= " ";
					  
					       }
					       		$resultALL="$outputFC";   
					       }
					 ///=========(5)============================================      
				    if($_POST['C_tens']=='1PastIndifinent')  
				    {
				    $find="";		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='did')
					{
					$outputFC.='will not be ';
				    $outputFC.= " ";
					$i="";
					$find=1;	
					}
					if($i=='not')
					{
					$i="";	
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
							  if($find=="")
					          {
					          $outputFC.='will be';
				              $outputFC.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_5th'];
							  }		  
				              $outputFC.=$i;
							  $outputFC.= " ";
									 
					       }
					       		$resultALL="$outputFC";
				          }
				    ///========(6)======================================  
			     	if($_POST['C_tens']=='1PastContinuous')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='was')
					{
					$outputFC.='will';
				    $outputFC.= " ";
					$i="";
					$NoNot=1;	
					}
					if($i=='were')
					{
					$outputFC.='will';
				    $outputFC.= " ";	
					$i="";	
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFC;
					$outputFC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='be')	
					{
					$outputFC.=$i;	
					$outputFC.=" ";
					}
					}	
					$outputFC.=' not be';
					$outputFC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFC.='be';	
					$outputFC.=" ";
					$i="";
					$NoNot=2;	 
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFC.=$i;
								       $outputFC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFC";   
					      }       
					///=========(7)============================================
			     	if($_POST['C_tens']=='1PastPerfect')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
			        if($i=='had')
					{
					$outputFC.='will';
				    $outputFC.= " ";	
					$i="";	
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFC;
					$outputFC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='be')	
					{
					$outputFC.=$i;	
					$outputFC.=" ";
					}
					}	
					$outputFC.=' not be';
					$outputFC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFC.='be';	
					$outputFC.=" ";
					$i="";
					$NoNot=2;	 
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFC.=$i;
								       $outputFC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFC";    
					      }       	
					//========(8)=======================================  
			     	if($_POST['C_tens']=='1PastPerfectContinuous')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='had')
					{
					$outputFC.='will';
				    $outputFC.= " ";	
					$i="";	
					}
					if($i=='been')
					{
					$outputFC.='be';	
					$outputFC.=" ";
					$i="";	 
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFC.=$i;
								       $outputFC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFC";   
					       }
				  ///========(9)=======================================  
				    if($_POST['C_tens']=='1futureIndifinent')  
					{
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)      
				    {
				    if($i=='will')
					{
					$outputFC.='will';
				    $outputFC.= " ";	
					$i="";	
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFC;
					$outputFC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='be')	
					{
					$outputFC.=$i;	
					$outputFC.=" ";
					}
					}	
					$outputFC.=' not be';
					$outputFC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFC.='be';	
					$outputFC.=" ";
					$i="";
					$NoNot=2;	 
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFC.=$i;
								       $outputFC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFC";   
					      }       	
					
					     ///========(10)=======================================  
			    	if($_POST['C_tens']=='1futureContinuous')  
				    {
			        $resultALL="$Present";
					}
				 ///========(11)=======================================  
			     	if($_POST['C_tens']=='1futurePerfect')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
			        if($i=='will')
					{
					$outputFC.='will';
				    $outputFC.= " ";	
					$i="";	
					}
					if($i=='have')
					{
					$outputFC.='be';	
					$outputFC.=" ";
					$i="";	 
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFC.=$i;
								       $outputFC.= " ";
					  
					       }
					       		$resultALL="$outputFC";   
					       }
					     ///========(12)=======================================  
				    if($_POST['C_tens']=='1futurePerfectContinuous')  
				    {
			        $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='have')
					{	
					$i="";	
					}
					if($i=='been')
					{
					$outputFC.='be';	
					$outputFC.=" ";
					$i="";	 
					}
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFC.=$i;
								       $outputFC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFC";    
					       }					      
					     ///========(End Of Future Continuous Tense)=======================================  
					
	      				     }//
	      				     } //    
				          			          				  	
//==========================(11)=================(Future Perfect To Other)================================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='futurePerfect')
			      {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Future Perfect  </font> <br> 
				     <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do')
					{
					$outputFP.='will not have ';
				    $outputFP.= " ";
					$i="";
					$check=1;	
					}
					if($i=='does')
					{
					$outputFP.='will not have';
				    $outputFP.= " ";	
					$i="";	
					$check=1;
					}
					if($i=='not')
					{
					$i="";	
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
							  if($check=="")
					          {
					          $outputFP.='will have';
				              $outputFP.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_3rd'];
							  }		  
				                       $outputFP.=$i;
								       $outputFP.= " ";
									 
					  
					       }
					       		$resultALL="$outputFP ";
					          }
	              ///==========(2)=================================			
				    if($_POST['C_tens']=='1Presentcontinuou')  
				    {
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='am')
					{
					$outputFP.='will';	
					$outputFP.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='is')
					{
					$outputFP.='will';
					$outputFP.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='are')
					{
					$outputFP.='will';	
					$outputFP.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFP;
					$outputFP="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='have')	
					{
					$outputFP.=$i;	
					$outputFP.=" ";
					}
					}	
					$outputFP.=' not have';
					$outputFP.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFP.=' have';	
					$outputFP.=" ";
					$i="";
					$NoNot=2;	 
					}
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )

							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	$resultALL="$outputFP ";
					       }
			        ///===========(3)================================			
	                if($_POST['C_tens']=='1Presentperfect')  
				    {
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
					{
					$outputFP.='will';
					$outputFP.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='have')
					{
					$outputFP.='will';
					$outputFP.=" ";	
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFP;
					$outputFP="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='have')	
					{
					$outputFP.=$i;	
					$outputFP.=" ";
					}
					}	
					$outputFP.=' not have';	
					$outputFP.=" ";
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFP.=' have';	
					$outputFP.=" ";
					$i="";
					$NoNot=2;	 
					}
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	$resultALL="$outputFP ";
				          } 
				////================(4)=============================
				    if($_POST['C_tens']=='1perfectContinuous')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='have')
					{
					$outputFP.='will';
					$outputFP.=" ";	
					$i="";
					}
					if($i=='has')
					{
					$outputFP.='will';
					$outputFP.=" ";	
					$i="";
					} 
					if($i=='been')
					{
					$outputFP.=' have';
					$outputFP.=" ";	
					$i="";
					} 	
	 $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	$resultALL="$outputFP "; 
				          }
				   ///==========(5)=================================	
				    if($_POST['C_tens']=='1PastIndifinent')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='did')
					{
					$outputFP.='will not have ';
				    $outputFP.= " ";	
					$i="";	
					$find=1;
					}
					if($i=='not')
					{
					$i="";	
					}
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
							  if($find=="")
					          {
					          $outputFP.='will have';
				              $outputFP.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	$resultALL="$outputFP " ;
					           }
	              ///==========(6)=================================	
				    if($_POST['C_tens']=='1PastContinuous')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='was')
					{
					$outputFP.='will';
					$outputFP.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='were')
					{
					$outputFP.='will';	
					$outputFP.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFP;
					$outputFP="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='have')	
					{
					$outputFP.=$i;	
					$outputFP.=" ";
					}
					}	
					$outputFP.=' not have';	
					$outputFP.=" ";
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFP.=' have';
					$outputFP.=" ";	
					$i="";
					$NoNot=2;	 
					}
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	$resultALL="$outputFP ";
					   }
			        ///===========(7)================================
					if($_POST['C_tens']=='1PastPerfect')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='had')
					{
					$outputFP.='will';
					$outputFP.=" ";	
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFP;
					$outputFP="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='have')	
					{
					$outputFP.=$i;	
					$outputFP.=" ";
					}
					}	
					$outputFP.=' not have';
					$outputFP.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFP.=' have';
					$outputFP.=" ";	
					$i="";
					$NoNot=2;	 
					}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	$resultALL="$outputFP ";
					      }
				////=======(8)=====================================	 
				    if($_POST['C_tens']=='1PastPerfectContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='had')
					{
					$outputFP.='will';	
					$outputFP.=" ";	
					$i="";
					}
					if($i=='been')
					{
					$outputFP.='have';
					$outputFP.=" ";	
					$i="";
					}
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					         }
					       	 $resultALL="$outputFP ";
					         }
				   ///============(9)===============================
						  	 
				    if($_POST['C_tens']=='1futureIndifinent')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='will')
					{
					$outputFP.='will';
					$outputFP.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputFP;
					$outputFP="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='have')	
					{
					$outputFP.=$i;	
					$outputFP.=" ";
					}
					}	
					$outputFP.=' not have';	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFP.=' have';	
					$i="";
					$NoNot=2;	 
					}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					         }
					       	 $resultALL="$outputFP ";
					         }
				 ///============(10)===============================
				    if($_POST['C_tens']=='1futureContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='be' )
					{
					$outputFP.='have';
					$outputFP.=" ";	
					$i="";
					$NoNot=1;	 	
					}
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					       }
					       	$resultALL="$outputFP ";
					           }
			  ///============(11)===============================
				    if($_POST['C_tens']=='1futurePerfect')  
				    {
					$resultALL="$Present ";
					}
				 ////=======(12)=====================================	 
				 if($_POST['C_tens']=='1futurePerfectContinuous') 
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='have')
					{
					$i=""; 
					}	
				    if($i=='been')
					{
					$outputFP.='have ';	
					$outputFP.=" ";	
					$i="";
					}
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       		$resultALL="$outputFP ";
					       }
				  	       ///===========================================
				           }  //end of future perfect continuous
				          }  // end of if condition of check
						  									
//==========================(12)=================(future Perfect Continuous To Other)======================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='futurePerfectContinuous')
			      {
   				$show = "<font color=#FFFF>To </font><font color=#FFFFF>Future Perfect Continuous </font> <br> 
				  <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do')
					{
					$outputFPC.='will have not been';
				    $outputFPC.= " ";
					$i="";
					$check=1;	
					}
					if($i=='does')
					{
					$outputFPC.='will have not been';
				    $outputFPC.= " ";	
					$i="";	
					$check=1;
					}
					if($i=='not')
					{
					$i="";	
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
							  if($check=="")
					          {
					          $outputFPC.='will have been';
				              $outputFPC.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_5th'];
							  }		  
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									 
					  
					         }
					       		$resultALL="$outputFPC" ;
					          }
	              ///==========(2)=================================			
	      
				    if($_POST['C_tens']=='1Presentcontinuou')  
				    {
					
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    	
					if($i=='am')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					}
					if($i=='is')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					} 	
					if($i=='are')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					}
					if($i=='not')
					{
					$temp_check22=$outputFPC;
					$outputFPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputFPC.=$i;	
					$outputFPC.=" ";
					}
					}	
					$outputFPC.=' not been';	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFPC.=' been';	
					$i="";
					$NoNot=2;	 
					}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		     
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									 
					      } 
					       $resultALL="$outputFPC" ;
					      }
			        ///===========(3)================================			
	                if($_POST['C_tens']=='1Presentperfect')  
				    {
					
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='have')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					}
					if($i=='has')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					} 	
					if($i=='not')
					{
					$temp_check22=$outputFPC;
					$outputFPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputFPC.=$i;	
					$outputFPC.=" ";
					}
					}	
					$outputFPC.=' not been';	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFPC.=' been';	
					$i="";
					$NoNot=2;	 
					}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		     
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									   
									 
					    }
					         $resultALL="$outputFPC" ;
				        } 
				////================(4)=============================
				    if($_POST['C_tens']=='1perfectContinuous')  
				    {
					
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    	
					if($i=='have')
					{
					$outputFPC.='will have ';	
					$i="";
					}
					if($i=='has')
					{
					$outputFPC.='will has';	
					$i="";
					} 	
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		     
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									 
					         } 
					         $resultALL="$outputFPC" ;
				             }
				   ///==========(5)=================================	
					     if($_POST['C_tens']=='1PastIndifinent')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='did')
					{
					$outputFPC.='will have not been';
				    $outputFPC.= " ";	
					$i="";	
					$find=1;
					}
					if($i=='not')
					{
					$i="";	
					}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      { 
							  if($find=="")
					          {
					          $outputFPC.='will have been';
				              $outputFPC.= " ";	
					          $i="";	
					          }	 
							  $i= $row['form_5th'];
							  }		  
				              $outputFPC.=$i;
							  $outputFPC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFPC" ;
					           }
	              ///==========(6)=================================	
				    if($_POST['C_tens']=='1PastContinuous')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='was')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					}
					if($i=='were')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					} 	
					if($i=='not')
					{
					$temp_check22=$outputFPC;
					$outputFPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputFPC.=$i;	
					$outputFPC.=" ";
					}
					}	
					$outputFPC.=' not been';	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFPC.=' been';	
					$i="";
					$NoNot=2;	 
					}
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		 
				              $outputFPC.=$i;
						      $outputFPC.= " ";
									 
					    }
					        $resultALL="$outputFPC" ;
					   }
			        ///===========(7)================================
					 if($_POST['C_tens']=='1PastPerfect')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='had')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					}
					if($i=='not')
					{
					$temp_check22=$outputFPC;
					$outputFPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputFPC.=$i;	
					$outputFPC.=" ";
					}
					}	
					$outputFPC.=' not been';	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFPC.=' been';	
					$i="";
					$NoNot=2;	 
					}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				              $outputFPC.=$i;
					          $outputFPC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFPC" ;
					           }
				////=======(8)=====================================	 
				 if($_POST['C_tens']=='1PastPerfectContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='had')
					{
					$outputFPC.='will have ';	
					$i="";
					}
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									 
					  
					       }
					       		$resultALL="$outputFPC" ;
					           }
				  	       ///============(9)===============================
						  	 
				 if($_POST['C_tens']=='1futureIndifinent')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					}
					if($i=='not')
					{
					$temp_check22=$outputFPC;
					$outputFPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputFPC.=$i;	
					$outputFPC.=" ";
					}
					}	
					$outputFPC.=' not been';	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFPC.=' been';	
					$i="";
					$NoNot=2;	 
					}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									 
					  
					       }
					       	$resultALL="$outputFPC" ;
					           }
				 ///============(10)===============================
				 if($_POST['C_tens']=='1futureContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='be' )
					{
					$i="";	
					}
					if($i=='will')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					}
					if($i=='not')
					{
					$temp_check22=$outputFPC;
					$outputFPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputFPC.=$i;	
					$outputFPC.=" ";
					}
					}	
					$outputFPC.=' not been';	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFPC.=' been';	
					$i="";
					$NoNot=2;	 
					}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				              $outputFPC.=$i;
						      $outputFPC.= " ";
					          }
					          $resultALL= "$outputFPC" ;
					           }
			  ///============(11)===============================
				 if($_POST['C_tens']=='1futurePerfect')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='have')
					{
					$i=""; 
					}	
				    if($i=='will')
					{
					$outputFPC.='will have ';	
					$i="";
					$NoNot=1;	 
					}
					if($i=='not')
					{
					$temp_check22=$outputFPC;
					$outputFPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputFPC.=$i;	
					$outputFPC.=" ";
					}
					}	
					$outputFPC.=' not been';	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputFPC.=' been';	
					$i="";
					$NoNot=2;	 
					}
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				              $outputFPC.=$i;
							  $outputFPC.= " ";
					           }
					       	  $resultALL="$outputFPC" ;
					           }
				 ////=======(12)=====================================	 
				 if($_POST['C_tens']=='1futurePerfectContinuous')  
				    {
					 $resultALL="$Present" ;
					 }
				  	       ///===========================================
				           }  //end of future perfect continuous
				          }  // end of if condition of check
//===============================================================================================================================
													
	                                  //...............................
									 // End Conversion of Simple Tenses
                                    // ................................ 

//=================================================================================================================================		
									  
									  //........................................
									 // Start Conversion of Interrogative Tenses
                                    // .........................................



//==========================(9)=================(Future Indefinite)==========================================================================
                    $Present=$_POST['Present']; 
					if($check1=='Yes')
                    {  
				    if($_POST['P_tens']=='FIndifinentInterrogative')
				    {
   				   $intg_Show="<font color=#FF00FF>To </font><font color=#FFF>Future Indefinite </font> <br> 
				   <font color=#FF0000>User Input : </font><font color=##ff6512>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
				    
				//=============(1)=======================================	
					if($_POST['C_tens']=='P1indefiniteinterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i go to zoo.     will he go to zoo.     
				    if($i=='do')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='does')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            } 
				//==========(2)===================================
				    if($_POST['C_tens']=='P1ContinuousInterrogative')  
				    {		
					$broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i go to zoo.     will he go to zoo.     
				    if($i=='is')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='am')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='are')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            } 
               //==========(3)===================================
			   if($_POST['C_tens']=='P1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='have')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            } 
			   //==========(4)===================================
			       if($_POST['C_tens']=='P1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                          
				    if($i=='have')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='been')
					{
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            } 
			   //==========(5)===================================
			        if($_POST['C_tens']=='PT1IndifinentInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i go to zoo.     will he go to zoo.     
				    if($i=='did')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            } 
			   //==========(6)===================================
			      if($_POST['C_tens']=='PT1ContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i go to zoo.     will he go to zoo.     
				    if($i=='was')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='were')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            }  
			   //==========(7)===================================
			        if($_POST['C_tens']=='PT1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i go to zoo.     will he go to zoo.     
				    if($i=='had')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            } 
			   //==========(8)===================================
			      if($_POST['C_tens']=='PT1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i go to zoo.     will he go to zoo.     
				    if($i=='had')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='been')
					{
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       	     $intg_ResultALL="$outputFIS";
					            } 
			   //==========(9)===================================
			       if($_POST['C_tens']=='F1IndifinentInterrogative')  
				   {		
			       $intg_ResultALL="$Present ";
			       } 
			   //==========(10)===================================
			       if($_POST['C_tens']=='F1ContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i go to zoo.     will he go to zoo.     
				    if($i=='will')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='be')
					{
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            } 
			   //==========(11)===================================
			       if($_POST['C_tens']=='F1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i go to zoo.     will he go to zoo.     
				    if($i=='will')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='have')
					{		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            } 
			   //==========(12)===================================
			       if($_POST['C_tens']=='F1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i go to zoo.     will he go to zoo.     
				    if($i=='will')
					{
				    $outputFIS.='will';
					$outputFIS.=" ";		
		            $i="";
		            }
					if($i=='have')
					{		
		            $i="";
		            }
					if($i=='been')
					{		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputFIS.=$i;
								$outputFIS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFIS";
					            } 
			   //==================================================================
					}//
					}//
//================================(End of Future Indefinite Tense)=================================================

//==========================(10)=================(Future Continuous)==========================================================================
                    $Present=$_POST['Present']; 
					if($check1=='Yes')
                    {  
				    if($_POST['P_tens']=='FContinuousInterrogative')
				    {
   				  $intg_Show="<font color=#FF00FF>To </font><font color=#FFF>Future Continuous </font> <br>
				  <font color=#FF0000>User Input : </font><font color=#ff6512>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
				    
				//=============(1)=======================================	
					if($_POST['C_tens']=='P1indefiniteinterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i be go to zoo.     will he be go to zoo.     
				    if($i=='do')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='does')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								$outputFCS.='be '; 
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFCS";
					            } 
				//==========(2)===================================
				    if($_POST['C_tens']=='P1ContinuousInterrogative')  
				    {		
					$broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i be go to zoo.     will he be go to zoo.     
				    if($i=='is')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='am')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='are')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFCS.='be ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       	    $intg_ResultALL="$outputFCS ";
					            } 
               //==========(3)===================================
			   if($_POST['C_tens']=='P1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='have')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFCS.='be ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       	    $intg_ResultALL="$outputFCS ";
					            } 
			   //==========(4)===================================
			       if($_POST['C_tens']=='P1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                          
				    if($i=='have')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='been')
					{
				    $outputFCS.='be ';
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFCS ";
					            } 
			   //==========(5)===================================
			        if($_POST['C_tens']=='PT1IndifinentInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i be go to zoo.     will he be go to zoo.     
				    if($i=='did')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFCS.='be ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFCS ";
					            } 
			   //==========(6)===================================
			      if($_POST['C_tens']=='PT1ContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i be go to zoo.     will he  be go to zoo.     
				    if($i=='was')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='were')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFCS.='be ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFCS ";
					            }  
			   //==========(7)===================================
			        if($_POST['C_tens']=='PT1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='had')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFCS.='be ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFCS ";
					            } 
			   //==========(8)===================================
			      if($_POST['C_tens']=='PT1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                            
				    if($i=='had')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='been')
					{
					$outputFCS.='be ';	
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFCS ";
					            } 
			   //==========(9)===================================
			       if($_POST['C_tens']=='F1IndifinentInterrogative')  
				   {		                                  //Req output:  will i be going to zoo.     will he be going to zoo.
			       $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                            
				    if($i=='will')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFCS.='be ';			
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFCS ";
					            }  
			   //==========(10)===================================
			       if($_POST['C_tens']=='F1ContinuousInterrogative')  
				    {
				   $intg_ResultALL="$Present";
				   } 
			   //==========(11)===================================
			       if($_POST['C_tens']=='F1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i be going to zoo.     will he be going to zoo.     
				    if($i=='will')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='have')
					{
					$outputFCS.='be ';			
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFCS ";
					            } 
			   //==========(12)===================================
			       if($_POST['C_tens']=='F1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i be going to zoo.     will he  be going to zoo.     
				    if($i=='will')
					{
				    $outputFCS.='will';
					$outputFCS.=" ";		
		            $i="";
		            }
					if($i=='have')
					{		
		            $i="";
		            }
					if($i=='been')
					{
					$outputFCS.='be ';			
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputFCS.=$i;
								$outputFCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFCS ";
					            } 
			   //==================================================================
					}//
					}//
//================================(End of Future Continuous Tense)=================================================

//==========================(11)=================(Future Perfect)==========================================================================
                    $Present=$_POST['Present']; 
					if($check1=='Yes')
                    {  
				    if($_POST['P_tens']=='FPerfectInterrogative')
				    {
   				  $intg_Show="<font color=#FF00FF>To </font><font color=#FFF>Future Perfect </font> <br>
				  <font color=#FF0000>User Input : </font><font color=#ff6512>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
				    
				//=============(1)=======================================	
					if($_POST['C_tens']=='P1indefiniteinterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i Have gone to zoo.     will he Have gone to zoo.     
				    if($i=='do')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='does')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								$outputFPS.='have '; 
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            } 
				//==========(2)===================================
				    if($_POST['C_tens']=='P1ContinuousInterrogative')  
				    {		
					$broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i have gone to zoo.     will he have gone to zoo.     
				    if($i=='is')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='am')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='are')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPS.='have ';	  
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					           } 
               //==========(3)===================================
			   if($_POST['C_tens']=='P1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='have')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPS.='have ';	  
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            } 
			   //==========(4)===================================
			       if($_POST['C_tens']=='P1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                          
				    if($i=='have')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='been')
					{
				    $outputFCS.='have ';
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            } 
			   //==========(5)===================================
			        if($_POST['C_tens']=='PT1IndifinentInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i have gone to zoo.     will he have gone to zoo.     
				    if($i=='did')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPS.='have ';	  
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            } 
			   //==========(6)===================================
			      if($_POST['C_tens']=='PT1ContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i have gone to zoo.     will he  have gone to zoo.     
				    if($i=='was')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='were')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPS.='have ';	  
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            }  
			   //==========(7)===================================
			        if($_POST['C_tens']=='PT1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='had')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPS.='have ';	  
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            } 
			   //==========(8)===================================
			      if($_POST['C_tens']=='PT1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                            
				    if($i=='had')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='been')
					{
					$outputFPS.='have ';	
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            } 
			   //==========(9)===================================
			       if($_POST['C_tens']=='F1IndifinentInterrogative')  
				   {		                                  //Req output:  will i have gone to zoo.     will he have gone to zoo.
			       $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                            
				    if($i=='will')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPS.='have ';			
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            }  
			   //==========(10)===================================
			       if($_POST['C_tens']=='F1ContinuousInterrogative')  
				    {
					
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i have gone to zoo.     will he have gone to zoo.     
				    if($i=='will')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='be')
					{
					$outputFPS.='have ';			
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            } 	
				    
			   //==========(11)===================================
			       if($_POST['C_tens']=='F1PerfectInterrogative')  
				    {
					$intg_ResultALL="$Present ";
				   }			
			   //==========(12)===================================
			       if($_POST['C_tens']=='F1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i have gone to zoo.     will he  have gone to zoo.     
				    if($i=='will')
					{
				    $outputFPS.='will';
					$outputFPS.=" ";		
		            $i="";
		            }
					if($i=='have')
					{
					$outputFPS.='have ';				
		            $i="";
		            }
					if($i=='been')
					{		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputFPS.=$i;
								$outputFPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPS";
					            } 
			   //==================================================================
					}//
					}//
//================================(End of Future Perfect Tense)=================================================

//==========================(12)=================(Future Perfect Continuous)==============================================================
                    $Present=$_POST['Present']; 
					if($check1=='Yes')
                    {  
				    if($_POST['P_tens']=='FPerfectContinuousInterrogative')
				    {
   				   $intg_Show="<font color=#FF00FF>To </font><font color=#FFF>Future Perfect Continuous </font> <br> 
				   <font color=#FF0000>User Input : </font><font color=#ff6512>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
				    
				//=============(1)=======================================	
					if($_POST['C_tens']=='P1indefiniteinterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i Have been going to zoo.     will he Have been going to zoo.     
				    if($i=='do')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='does')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								$outputFPCS.='have been '; 
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            } 
				//==========(2)===================================
				    if($_POST['C_tens']=='P1ContinuousInterrogative')  
				    {		
					$broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='is')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='am')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='are')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPCS.='have been ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            } 
               //==========(3)===================================
			   if($_POST['C_tens']=='P1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='have')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPCS.='have been ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            } 
			   //==========(4)===================================
			       if($_POST['C_tens']=='P1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                          
				    if($i=='have')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='been')
					{
				    $outputFPCS.='have been ';
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            } 
			   //==========(5)===================================
			        if($_POST['C_tens']=='PT1IndifinentInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i have been going to zoo.     will he have been going to zoo.     
				    if($i=='did')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPCS.='have been ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            } 
			   //==========(6)===================================
			      if($_POST['C_tens']=='PT1ContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='was')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='were')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPCS.='have been ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            }  
			   //==========(7)===================================
			        if($_POST['C_tens']=='PT1PerfectInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='had')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPCS.='have been ';	  
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            } 
			   //==========(8)===================================
			      if($_POST['C_tens']=='PT1PerfectContinuousInterrogative')  
				    {		
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                            
				    if($i=='had')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='been')
					{
					$outputFPCS.='have been ';	
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            } 
			   //==========(9)===================================
			       if($_POST['C_tens']=='F1IndifinentInterrogative')  
				   {		                                  //Req output:  will i have been going to zoo.     will he have been going to zoo.
			       $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                            
				    if($i=='will')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputFPCS.='have been ';			
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            }  
			   //==========(10)===================================
			       if($_POST['C_tens']=='F1ContinuousInterrogative')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                           
				    if($i=='will')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='be')
					{
					$outputFPCS.='have been ';			
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            } 	
				    
			   //==========(11)===================================
			        if($_POST['C_tens']=='F1PerfectInterrogative')  
				    {	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Req output:  will i have been going to zoo.     will he  have been going to zoo.
     			    if($i=='will')
					{
				    $outputFPCS.='will';
					$outputFPCS.=" ";		
		            $i="";
		            }
					if($i=='have')
					{
					$outputFPCS.='have been ';				
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputFPCS.=$i;
								$outputFPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputFPCS ";
					            }
								
			   //==========(12)===================================
			       if($_POST['C_tens']=='F1PerfectContinuousInterrogative')  
				    {
					$intg_ResultALL="$Present";
				   }		 
			   //==================================================================
					}//end of check yas condition
					}//End of Future Perfect Continue
//================================(End of Future Perfect Continue Tense)=================================================

?>
<html>
<body>
<style>
.box{
	 height: 216px;
    width: 548px;
    background-color: #000000;
    border: 3px solid #44d20a;
    float: right;
    margin-right: 423px;
    margin-top: 15px;
	"

</style>

<div class="box">
<h4>Tense Convert</h4>

<?php
     //Simlpe
	 echo"$option ";
     echo" $show ";
     echo"<font color=#00FF33> $resultALL </font> ";
     echo"<font color=#ffffff> $invalid </font> ";

    // Interrogative
   echo"$intg_invalid ";
   echo"$intg_Option";
   echo"$intg_Show ";
   echo" <font color=#00FF33 size=+1>$intg_ResultALL </font> ";
   ?>
           </div>
        </div>
	</div>
</div>
<?php include 'footer.php';           ?>      
</body>
</html>