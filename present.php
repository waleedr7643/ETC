
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
    background-color: #081902;
    border: 3px solid #44d20a;
    float: right;
    margin-right: 423px;
    margin-top: -10px;
	}
h4{
	color:#fff;
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
						<form class="form-horizontal" action="peresent.php" method="post">
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
                         <option   class="alert-success"> Simlpe Sentens </option>
                         <option  value="PresentIndifinent"/> Present indefinite </option>
                         <option  value="Presentcontinuou"/>Present Continuous</option>
                         <option  value="PresentPerfect" />Present Perfect</option>
                         <option  value="perfectContinuous"/>Present Perfect Continuous </option>
                         
                         <option   class="alert-success"> Interrogative Sentens </option>
                         <option  value="indefiniteinterrogative"/>Indefinite Interrogative </option>
                         <option  value="ContinuousInterrogative"/>  ContinuousInterrogative </option>
                         <option  value="PerfectInterrogative"/> Perfect Interrogative </option>
                         <option  value="PerfectContinuousInterrogative"/> Perfect Continuous Interrogative </option>
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
									 // End Type of Interogative Checking
                                    // ................................... 
									
//===============================================================================================================================													
	                                  //.............................
									 // Start Type of Simple Checking
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
									 // End Type of Simple Checking
                                    // ............................ 

//=================================================================================================================================		
									  
									  //.................................
									 // Start Conversion of Simple Tenses
                                    // ..................................

//==========================(1)=================(Present Indifinent To Other)======================================================		
					$Present=$_POST['Present']; 
					if($check1=='Yes')
                  {  
				     if($_POST['P_tens']=='PresentIndifinent')
				   {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Present Indifinent </font> <br> 
				  <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";

		             $broken1 = explode (' ',$Present);
                     foreach($broken1 as $i)
			      {
					  $not='blank';
					if($s==2&&$i!='not')
					{
				      $mint.=$i;
					  $s="";
					  		
					}  
                   if($s==1)
					{
				      $mint.=$i;
					  $mint.=" ";
					  $s=2;		
					}  
					 if($star=="")
					{
				      $star=$i;
					   
   					   $s='1';		
					}
					if ($i=='not')
					 {
						 $not=$i;
						 $i="";
						 } 
					
if($i=='did')
 {
	 $test='1';
	$i="";
	}

if($i=='have')
 {
	 $test='2';
	$i="";
	}
					
if($i=='has')
 {
	 $test='1';
	$i="";
	}
					
if($i=='had')
 {
	$test='1'; 
	$i="";
	}
					
if($i=='am' )
 {
	$test='1'; 
	$i="";
	}
					
if($i=='is' )
 {
	$test='1'; 
	$i="";
	}
					
if($i=='are' )                         
 {
	$test='2'; 
	$i="";
	}
					
if($mint=='have been')
 {
	$test='1'; 
	$i="";
	$mint="";
	}
					
if($mint=='has been')
 {
	$test='1'; 
	$i="";
	$mint="";
	}
					
if($i=='was')
 {
	$test='1';
	$i="";
	}
					
if($i=='were')
 {
	$test='2'; 
	$i="";
	}
	
if($mint=='had been')
 {
	$test='1'; 
	$mint="";
	$i="";
	}		
					
if($i=='will' )
 {
    $test='1'; 
	$test2='2'; 
	$i="";
	}
if($mint=='will be' )
 {
   $test='1';
   $test2='2';
	$i=""; 
	$mint="";
	}

if($mint=='will have')
 {
	$test='1'; 
	$test2='2';
	$i="";
	$mint="";

	}	
if($not=='not' && $test=='1')
 {
if($star=='he')
 {
	$outputPI.='does not';
	$not="";

	}
if($star=='He')
 {
	$outputPI.='does not';
	$not="";
	}	
if($star=='She')
 {
	$outputPI.='does not';
	$not="";
	}
if($star=='she')
 {
	$outputPI.='does not';
	$not="";
	}
if($star=='It')
 {
	$outputPI.='does not';
	$not="";
	}
if($star=='it')
 {
	$outputPI.='does not';
	$not="";
	}

	
	}
elseif($not=='not' && $test2=='2')
{
 	$outputPI.='do not';
     $i="";
	 $not="";
}

if($i=='been'||$i=='be')
{
	$i="";
	} 
	
 						
 if($initial_val=="")
		 {
   $intword = substr( $first_val, -1 );
   $initial_val=$i;

if($intword==s)
	   {
	 $check2='yes';
		}
else
	{
	 $check2='2';
			} }	

if($i=='and' && $check2=='2')
	{
		 $check2='yes';
          
		  }	
if($not=='not' && $check2=='yes')
	{
		 $outputPI.='does not';
          $i="";
		 $check2="";
		  $not="";               
		  }	
		  	  
if($not=='not' && $check2=='2')
	{
		   $outputPI.='do not';
		   $i="";  
		  $check2="";
		   $not="";                 
		  }	
  	  			
   
    $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verbID']; 
				
      	
                                if ($record_id!=0 )
						        {
									$i= $row['form_1st'];
								}		  
				                       $outputPI.=$i;
								       $outputPI.= " ";
				}}}		         
				                $resultALL=$outputPI;					   
//==========================(2)=================(Present Continuous To Other)======================================================		
                                 $Present=$_POST['Present']; 
					               if($check1=='Yes')
                                   {  
				                  if($_POST['P_tens']=='Presentcontinuou')
				              {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Present Continuous </font> <br> 
				  <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                        
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do'|| $i=='does')
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='am';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPC.='are not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPC.='is not';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								if($have==1)
								{ 
								$outputPC.='are';
							    $outputPC.= " ";
								}
								if($have==2)
								{ 
								$outputPC.='is';
								$outputPC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
					  
					            }
					       		$resultALL=$outputPC;
					            }
	              ///==========(2)=================================	
				  if($_POST['C_tens']=='1Presentcontinuou')  
				    {
				     $resultALL=$Present;
					}
	              ///==========(3)=================================			
				    if($_POST['C_tens']=='1Presentperfect')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=="I"||$i=="i" )
					{
					$check=0;	
					}
				    if($i=='have' && $check=='0')
					{		
					$outputPC.='am';
					$outputPC.=" ";	
					$i="";
					$check=1;
		            }	
				    if($i=='have')
					{
				    $outputPC.='are';
					$outputPC.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputPC.='is';
					$outputPC.=" ";		
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
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					  
					            }
					       		$resultALL=$outputPC;
					            }
	              ///==========(4)=================================	
				  if($_POST['C_tens']=='1perfectContinuous')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=="I"||$i=="i" )
					{
					$check=0;	
					}
				    if($i=='have' && $check=='0')
					{		
					$outputPC.='am';
					$outputPC.=" ";	
					$i="";
					$check=1;
		            }	
				    if($i=='have')
					{
				    $outputPC.='are';
					$outputPC.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputPC.='is';
					$outputPC.=" ";		
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
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					            }
					       		$resultALL=$outputPC;
					            }
	              ///==========(5)=================================					
	                  if($_POST['C_tens']=='1PastIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='did')
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='am';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPC.='are not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPC.='is not';
					$have="";
					$i="";
				    } 
				     
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								if($have==1)

								{ 
								$outputPC.='are';
							    $outputPC.= " ";
								}
								if($have==2)
								{ 
								$outputPC.='is';
								$outputPC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					  
					            }
					       		$resultALL=$outputPC;
					            }
	              ///==========(6)=================================
				    if($_POST['C_tens']=='1PastContinuous')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=="I"||$i=="i" )
					{
					$check=0;	
					}
				    if($i=='were' && $check=='0')
					{		
					$outputPC.='am';
					$outputPC.=" ";	
					$i="";
					$check=1;
		            }	
				    if($i=='were')
					{
				    $outputPC.='are';
					$outputPC.=" ";		
		            $i="";
		            }
					if($i=='was')
					{
				    $outputPC.='is';
					$outputPC.=" ";		
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
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					            }
					       		$resultALL=$outputPC;
					            }
	              ///==========(7)=================================
				    if($_POST['C_tens']=='1PastPerfect')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='had')
					{
					$i="";	
					}
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='am';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPC.='are not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPC.='is not';
					$have="";
					$i="";
				    } 
				     
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								if($have==1)
								{ 
								$outputPC.='are';
							    $outputPC.= " ";
								}
								if($have==2)
								{ 
								$outputPC.='is';
								$outputPC.= " ";
							    } 
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					            }
					       		$resultALL=$outputPC;
					            }
	              ///==========(8)=================================
				  				    if($_POST['C_tens']=='1PastPerfectContinuous')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					 if($i=='had'|| $i=='been' )
					{
					$i="";	
					}
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='am';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPC.='are not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPC.='is not';
					$have="";
					$i="";
				    } 
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								if($have==1)
								{ 
								$outputPC.='are';
							    $outputPC.= " ";
								}
								if($have==2)
								{ 
								$outputPC.='is';
								$outputPC.= " ";
							    } 
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
					  
					            }
					       		$resultALL=$outputPC;
					            }

				 ///============(9)===============================
		            if($_POST['C_tens']=='1futureIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					 if($i=='will'|| $i=='shall' )
					{
					$i="";	
					}
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='am';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPC.='are not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPC.='is not';
					$have="";
					$i="";
				    } 
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								if($have==1)
								{ 
								$outputPC.='are';
							    $outputPC.= " ";
								}
								if($have==2)
								{ 
								$outputPC.='is';
								$outputPC.= " ";
							    } 
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					            }
					       		$resultALL=$outputPC;
					            }

				 ///============(10)===============================
                    if($_POST['C_tens']=='1futureContinuous')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					 if($i=='will'|| $i=='be' )
					{
					$i="";	
					}
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='am';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPC.='are not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPC.='is not';
					$have="";
					$i="";
				    } 
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								if($have==1)
								{ 
								$outputPC.='are';
							    $outputPC.= " ";
								}
								if($have==2)
								{ 
								$outputPC.='is';
								$outputPC.= " ";
							    } 
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					            }
					       		$resultALL=$outputPC;
					            }

				 ///============(11)===============================
				  if($_POST['C_tens']=='1futurePerfect')   
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					 if($i=='will'|| $i=='have' )
					{
					$i="";	
					}
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='am';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPC.='are not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPC.='is not';
					$have="";
					$i="";
				    } 
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								if($have==1)
								{ 
								$outputPC.='are';
							    $outputPC.= " ";
								}
								if($have==2)
								{ 
								$outputPC.='is';
								$outputPC.= " ";
							    } 
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					            }
					       		$resultALL=$outputPC;
					            }

				 ///============(12)===============================
                    if($_POST['C_tens']=='1futurePerfectContinuous')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					 if($i=='will'|| $i=='have' || $i=='been')
					{
					$i="";	
					}
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='is';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='are';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPC.=$i;
					$outputPC.=" ";		
					$outputPC.='am';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPC.='are not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPC.='is not';
					$have="";
					$i="";
				    } 
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								if($have==1)
								{ 
								$outputPC.='are';
							    $outputPC.= " ";
								}
								if($have==2)
								{ 
								$outputPC.='is';
								$outputPC.= " ";
							    } 
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					  
					            }
					       		$resultALL=$outputPC;
					            }

				 ///============(End of Peresent Continuous)===============================



								   }
								   }
   
							   		
//==========================(3)=================(Present Perfect To Other)================================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='PresentPerfect')
			      {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Present Perfect </font> <br> 
				  <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do'|| $i=='does')
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPP.='have not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPP.='has not';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
								if($have==1)
								{ $outputPP.='have';
								  $outputPP.= " ";
								}
								if($have==2)
								{ 
								 $outputPP.='has';
								 $outputPP.= " ";
							     }
									$i= $row['form_3rd'];
							  }		  
				                       $outputPP.=$i;
								       $outputPP.= " ";
									 
					  
					          }
					       		$resultALL=$outputPP;
					          }
	              ///==========(2)=================================			
	      
				    if($_POST['C_tens']=='1Presentcontinuou')  
				    {
					
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    	
					if($i=='am')
					{
					$outputPP.='have';	
					$i="";	 
					}
					if($i=='is')
					{
					$outputPP.='has';	
					$i="";	 
					} 	
					if($i=='are')
					{
					$outputPP.='have';	
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
				                       $outputPP.=$i;
								       $outputPP.= " ";
									 
					         }
					       $resultALL=$outputPP;
					         }
			        ///===========(3)================================			
	      
				    if($_POST['C_tens']=='1perfectContinuous')  
				    {
					
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    	
					if($i=='been')
					{
					$i="";	 
					}
					if($i=='have'||$i=='has' )
					{
				    $outputPP.=$i;
				    $outputPP.= " ";	
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
				                       $outputPP.=$i;
								       $outputPP.= " ";
									 
					          } 
					         $resultALL=$outputPP;
				               }
				   ///==========(4)=================================	
					     if($_POST['C_tens']=='1PastIndifinent')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='did')
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPP.='have not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPP.='has not';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
								if($have==1)
								{ $outputPP.='have';
								  $outputPP.= " ";
								}
								if($have==2)
								{ 
								 $outputPP.='has';
								 $outputPP.= " ";
							     }
									$i= $row['form_3rd'];
							  }		  
				                       $outputPP.=$i;
								       $outputPP.= " ";
									 
					  
					           }
					       		$resultALL=$outputPP;
					           }
	              ///==========(5)=================================	
				   if($_POST['C_tens']=='1PastContinuous')  
				    {
					
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    	
					if($i=='were')
					{
					$outputPP.='have';	
					$i="";	 
					}
					if($i=='was')
					{
					$outputPP.='has';	
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
				                       $outputPP.=$i;
								       $outputPP.= " ";
									 
					         } 
					          $resultALL=$outputPP;
					       }
			        ///===========(6)================================
					 if($_POST['C_tens']=='1PastPerfect')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='had')
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {

				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPP.='have not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPP.='has not';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
								if($have==1)
								{ $outputPP.='have';
								  $outputPP.= " ";
								}
								if($have==2)
								{ 
								 $outputPP.='has';
								 $outputPP.= " ";
							     }
									$i= $row['form_3rd'];
							  }		  
				                       $outputPP.=$i;
								       $outputPP.= " ";
									 
					            }
					       		$resultALL=$outputPP;
					           }
				////=======(7)=====================================	 
				 if($_POST['C_tens']=='1PastPerfectContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='had'|| $i=='been' )
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPP.='have not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPP.='has not';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
								if($have==1)
								{ $outputPP.='have';
								  $outputPP.= " ";
								}
								if($have==2)
								{ 
								 $outputPP.='has';
								 $outputPP.= " ";
							     }
									$i= $row['form_3rd'];
							  }		  
				                       $outputPP.=$i;
								       $outputPP.= " ";
					  
					            }
					       		$resultALL=$outputPP;
					           }
				  	       ///============(8)===============================
						  	 
				 if($_POST['C_tens']=='1futureIndifinent')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will' )
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPP.='have not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPP.='has not';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
								if($have==1)
								{ $outputPP.='have';
								  $outputPP.= " ";
								}
								if($have==2)
								{ 
								 $outputPP.='has';
								 $outputPP.= " ";
							     }
								 $i= $row['form_3rd'];
							     }		  
				                 $outputPP.=$i;
								 $outputPP.= " ";
									 
					            }
					       		$resultALL=$outputPP;
					           }
				  	       ///============(9)===============================
				 if($_POST['C_tens']=='1futureContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will'|| $i=='be' )
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPP.='have not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPP.='has not';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
								if($have==1)
								{ $outputPP.='have';
								  $outputPP.= " ";
								}
								if($have==2)
								{ 
								 $outputPP.='has';
								 $outputPP.= " ";
							     }
								 $i= $row['form_3rd'];
							     }		  
				                 $outputPP.=$i;
								 $outputPP.= " ";
									 
					            }
					       		$resultALL=$outputPP;
					           }
				  	       ///============(10)===============================
				 if($_POST['C_tens']=='1futurePerfect')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will'|| $i=='have' )
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPP.='have not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPP.='has not';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							     if ($record_id!=0 )
						         {  
								 if($have==1)
								 { 
								  $outputPP.='have';
								  $outputPP.= " ";
								 }
								 if($have==2)
								 { 
								 $outputPP.='has';
								 $outputPP.= " ";
							     }
								 $i= $row['form_3rd'];
							     }		  
				                 $outputPP.=$i;
								 $outputPP.= " ";
					  
					           }
					       		 $resultALL=$outputPP;
					           }
				 ////=======(11)=====================================	 
				 if($_POST['C_tens']=='1futurePerfectContinuous') 
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will'|| $i=='have' || $i=='been' )
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='has';
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPP.=$i;
					$outputPP.=" ";		
					$outputPP.='have';
					$i="";
					$find=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	} 
				    if($i=='not' && $have==1 )
					{
					$outputPP.='have not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPP.='has not';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
								if($have==1)
								{ $outputPP.='have';
								  $outputPP.= " ";
								}
								if($have==2)
								{ 
								 $outputPP.='has';
								 $outputPP.= " ";
							     }
								 $i= $row['form_3rd'];
							      }		  
				                  $outputPP.=$i;
								  $outputPP.= " ";
					  
					              }
					       		  $resultALL=$outputPP;
					              }
				  	       ///===========================================
				           }  //end of peresent perfect    perfect
				          }  // end of if condition of check
//==========================(4)=================(Present Perfect Continuous To Other)======================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='perfectContinuous')
			      {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Present Perfect Continuous </font> <br>
				   <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do'|| $i=='does')
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPPC.='have not been';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPPC.='has not been';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
								if($have==1)
								{ $outputPPC.='have been';
								  $outputPPC.= " ";
								}
								if($have==2)
								{ 
								 $outputPPC.='has been';
								 $outputPPC.= " ";
							     }
								 $i= $row['form_5th'];
							     }		  
				                 $outputPPC.=$i;
								 $outputPPC.= " ";
					  
					             }
					       		$resultALL=$outputPPC ;
					             }
	              ///==========(2)=================================			
	      
				    if($_POST['C_tens']=='1Presentcontinuou')  
				    {
					
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='am')
					{
					$outputPPC.='have';	
					$outputPPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='is')
					{
					$outputPPC.='has';
					$outputPPC.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='are')
					{
					$outputPPC.='have';	
					$outputPPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputPPC;
					$outputPPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputPPC.=$i;	
					$outputPPC.=" ";
					}
					}	
					$outputPPC.=' not been';
					$outputPPC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputPPC.=' been';	
					$outputPPC.=" ";
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
				              $outputPPC.=$i;
						      $outputPPC.= " ";
									 
					          } 
					          $resultALL=$outputPPC ;
					          }
			      ///===========(3)==================================			
	      
				    if($_POST['C_tens']=='1Presentperfect')  
				    {
					
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
					{
					$outputPPC.='has';
					$outputPPC.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='have')
					{
					$outputPPC.='have';	
					$outputPPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputPPC;
					$outputPPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputPPC.=$i;	
					$outputPPC.=" ";
					}
					}	
					$outputPPC.=' not been';
					$outputPPC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputPPC.=' been';	
					$outputPPC.=" ";
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
				              $outputPPC.=$i;
						      $outputPPC.= " ";
									 
					          } 
					         $resultALL=$outputPPC ;
				             }
				   ///===========(4)==================================			
	      
				    if($_POST['C_tens']=='1perfectContinuous')  
				    {
					  		$resultALL=$Present;
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
					$i="";	
					}
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;

					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPPC.='have not been';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPPC.='has not been';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if ($record_id!=0 )
						        {  
								if($have==1)
								{ $outputPPC.='have been';
								  $outputPPC.= " ";
								}
								if($have==2)
								{ 
								 $outputPPC.='has been';
								 $outputPPC.= " ";
							     }
								 $i= $row['form_5th'];
							     }		  
				                 $outputPPC.=$i;
								 $outputPPC.= " ";
					  
					             }
					       		 $resultALL=$outputPPC;
				                 }
	              ///==========(6)=================================	
				   if($_POST['C_tens']=='1PastContinuous')  
				    {
					
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    	
					if($i=='was')
					{
					$outputPPC.='has';
					$outputPPC.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='were')
					{
					$outputPPC.='have';	
					$outputPPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputPPC;
					$outputPPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputPPC.=$i;	
					$outputPPC.=" ";
					}
					}	
					$outputPPC.=' not been';
					$outputPPC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputPPC.=' been';	
					$outputPPC.=" ";
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
				                       $outputPPC.=$i;
								       $outputPPC.= " ";
									 
					} 
					          $resultALL=$outputPPC;
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
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )

					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPPC.='have not been';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPPC.='has not been';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if ($record_id!=0 )
						        {  
								if($have==1)
								{ $outputPPC.='have been';
								  $outputPPC.= " ";
								}
								if($have==2)
								{ 
								 $outputPPC.='has been';
								 $outputPPC.= " ";
							     }
								 $i= $row['form_5th'];
							     }		  
				                       $outputPPC.=$i;
								       $outputPPC.= " ";
					  
					            }
					       	 		$resultALL=$outputPPC;
					           }
				////=======(8)=====================================	 
				 if($_POST['C_tens']=='1PastPerfectContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='had'|| $i=='been' )
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPPC.='have not been';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPPC.='has not been';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if ($record_id!=0 )
						        {  
								if($have==1)
								{ $outputPPC.='have been';
								  $outputPPC.= " ";
								}
								if($have==2)
								{ 
								 $outputPPC.='has been';
								 $outputPPC.= " ";
							     }
								 $i= $row['form_5th'];
							     }		  
				                 $outputPPC.=$i;
								 $outputPPC.= " ";
									 
					            }
					       		 $resultALL=$outputPPC;
					           }
				  	       ///============(9)===============================
						  	 
				 if($_POST['C_tens']=='1futureIndifinent')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will' )
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPPC.='have not been';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPPC.='has not been';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if ($record_id!=0 )
						        {  
								if($have==1)
								{ $outputPPC.='have been';
								  $outputPPC.= " ";
								}
								if($have==2)
								{ 
								 $outputPPC.='has been';
								 $outputPPC.= " ";
							     }
								 $i= $row['form_5th'];
							     }		  
				                       $outputPPC.=$i;
								       $outputPPC.= " ";
									 
					       }
					      		$resultALL=$outputPPC;
					       }
				 ///============(10)===============================
				 if($_POST['C_tens']=='1futureContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will'|| $i=='be' )
					{
					$i="";	
					}
					if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPPC.='have not been';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPPC.='has not been';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if ($record_id!=0 )
						        {  
								if($have==1)
								{ $outputPPC.='have been';
								  $outputPPC.= " ";
								}
								if($have==2)
								{ 
								 $outputPPC.='has been';
								 $outputPPC.= " ";
							     }
								 $i= $row['form_5th'];
							     }		  
				                 $outputPPC.=$i;
								 $outputPPC.= " ";
									 
					       }
					    		$resultALL=$outputPPC;    		
					       }
				  ///============(10)===============================
				    if($_POST['C_tens']=='1futurePerfect')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will'|| $i=='have' )
					{
					$i="";	
					}
					if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPPC.='have not been';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPPC.='has not been';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if ($record_id!=0 )
						        {  
								if($have==1)
								{ $outputPPC.='have been';
								  $outputPPC.= " ";
								}
								if($have==2)
								{ 
								 $outputPPC.='has been';
								 $outputPPC.= " ";
							     }
								 $i= $row['form_5th'];
							     }		  
				                       $outputPPC.=$i;
								       $outputPPC.= " ";
									 
					  
					       }
					        	$resultALL=$outputPPC;
					       }
				 ////=======(12)=====================================	 
				 if($_POST['C_tens']=='1futurePerfectContinuous') 
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will'|| $i=='have' || $i=='been' )
					{
					$i="";	
					}
					if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='has been';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPC.=$i;
					$outputPPC.=" ";		
					$outputPPC.='have been';
					$i="";
					$check=0;
		            }
					  } 	
				    if($i=='and')
			        {
				    $have=1;               
			        }	
				    if($second_val=="" && $check != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_val=$i; 
			    	if($intword==s)
				    {
				    $have=1;
					}
					else
					{
				   	$have=2;
					}
				 	}
				    if($i=='not' && $have==1 )
					{
					$outputPPC.='have not been';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPPC.='has not been';
					$have="";
					$i="";
				    } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if ($record_id!=0 )
						        {  
								if($have==1)
								{ $outputPPC.='have been';
								  $outputPPC.= " ";
								}
								if($have==2)
								{ 
								 $outputPPC.='has been';
								 $outputPPC.= " ";
							     }
								 $i= $row['form_5th'];
							     }		  
				                 $outputPPC.=$i;
								 $outputPPC.= " ";
									 
					  
					            }
					       		$resultALL=$outputPPC;
					           }
				  	       ///===========================================
				           }  //end of peresent perfect    
				          }  // end of if condition of check   
//===============================================================================================================================													
	                                  //...............................
									 // End Conversion of Simple Tenses
                                    // ................................ 

//=================================================================================================================================		
									  
									  //........................................
									 // Start Conversion of Interrogative Tenses
                                    // .........................................

//==========================(1)=================(Present Indifinent To Other)======================================================		
					$Present=$_POST['Present']; 
					if($check1=='Yes')
                  {  
				     if($_POST['P_tens']=='indefiniteinterrogative')
				   {
   				    $intg_Show="<font color=#FF00FF size=+1>To </font><font color=#FFF size=+1>Present Indifinent </font><br> <font color=#FF0000                    size=+1>User Input : </font><font color=#ff6512 size=+1>$Present</font> <br><font color=#FF0000 size=+1> OutPut:</font> ";
                    if($_POST['C_tens']=='P1indefiniteinterrogative')  
				    {
					$intg_ResultALL="$Present";
					}	
		        //==========(2)===================================
				    if($_POST['C_tens']=='P1ContinuousInterrogative')  
				    {                                                    // Do i go to school       Does he go to zoo.
					$check="";	 
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='am' )
					{
					$outputPIS.='does';
					$outputPIS.=" ";	
					$i="";	
					}
				    if($i=='are')
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
		            $i="";
		            }
					if($i=='is')
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
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
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					  
					            }
					       		$intg_ResultALL="$outputPIS";
					            } 
				//==========(3)===================================
				 if($_POST['C_tens']=='P1PerfectInterrogative')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
				    if($i=='have')
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
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
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					  
					            }
                                $intg_ResultALL="$outputPIS";
					            }
				//==========(4)===============================================
				    if($_POST['C_tens']=='P1PerfectContinuousInterrogative')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='been' )
					{	
					$i="";	
					}
				    if($i=='have')
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
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
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					  
					            }
					       		$intg_ResultALL="$outputPIS";
					            }
				//==========(5)===================================
				    if($_POST['C_tens']=='PT1IndifinentInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='did')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				   $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPIS ='do ';
					}
					else
					{
				   	$outputPIS ='does ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPIS;
					$outputPIS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='does')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPIS.='do ';
					$outputPIS.= $j;	
					$outputPIS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								$i= $row['form_1st'];
							    }		  
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					  
					            }
					       		$intg_ResultALL="$outputPIS";
					            } 
				//==========(6)===================================
				    if($_POST['C_tens']=='PT1ContinuousInterrogative')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
				    if($i=='were')
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
		            $i="";
		            }
					if($i=='was')
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
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
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					  
					            }
					       		$intg_ResultALL="$outputPIS";
					            }
								
				//==========(7)===================================
					 if($_POST['C_tens']=='PT1PerfectInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='had')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				   $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
					$i="";
					$find='0';
		            } 	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPIS ='do ';
					}
					else
					{
				   	$outputPIS ='does ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPIS;
					$outputPIS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='does')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPIS.='do ';
					$outputPIS.= $j;	
					$outputPIS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								$i= $row['form_1st'];
							    }		  
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					           }
					       		$intg_ResultALL="$outputPIS";
					            }
				//==========(8)===================================
					if($_POST['C_tens']=='PT1PerfectContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='had')
					{
				    $i="";
		            }
					if($i=='been')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				   $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPIS ='do ';
					}
					else
					{
				   	$outputPIS ='does ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPIS;
					$outputPIS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='does')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPIS.='do ';
					$outputPIS.= $j;	
					$outputPIS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$i= $row['form_1st'];
							    }		  
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					           }
					       		$intg_ResultALL="$outputPIS";
					            }
				//==========(9)===================================
				  if($_POST['C_tens']=='F1IndifinentInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will'|| $i=='be' )
					{
					$i="";	
					}
					if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				   $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPIS ='do ';
					}
					else
					{
				   	$outputPIS ='does ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPIS;
					$outputPIS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='does')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPIS.='do ';
					$outputPIS.= $j;	
					$outputPIS.=" ";
					$j="";
					}
					}
			        } 
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_1st'];
							  }		  
				                       $outputPIS.=$i;
								       $outputPIS.= " ";
					  
					                  }
					          
					       	          $intg_ResultALL="$outputPIS";
					                  } 
				//==========(10)===================================
				    if($_POST['C_tens']=='F1ContinuousInterrogative')  
				    {
					$find='1';	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
					if($i=='be')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				   $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPIS ='do ';
					}
					else
					{
				   	$outputPIS ='does ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPIS;
					$outputPIS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='does')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPIS.='do ';
					$outputPIS.= $j;	
					$outputPIS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        { 
								$i= $row['form_1st'];
							    }		  
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					           }
					       	   $intg_ResultALL="$outputPIS";
					           }
				//==========(11)===================================
				if($_POST['C_tens']=='F1PerfectInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
					if($i=='have')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				   $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPIS ='do ';
					}
					else
					{
				   	$outputPIS ='does ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPIS;
					$outputPIS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='does')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPIS.='do ';
					$outputPIS.= $j;	
					$outputPIS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_1st'];
							    }		  
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					           }
					       		$intg_ResultALL="$outputPIS";
					            }
				//==========(12)===================================
				if($_POST['C_tens']=='F1PerfectContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
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
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				   $outputPIS.='does';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPIS.='do';
					$outputPIS.=" ";		
				    $outputPIS.= $i;
					$outputPIS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPIS ='do ';
					}
					else
					{
				   	$outputPIS ='does ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPIS;
					$outputPIS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='does')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPIS.='do ';
					$outputPIS.= $j;	
					$outputPIS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$i= $row['form_1st'];
							    }		  
				                $outputPIS.=$i;
								$outputPIS.= " ";
									 
					           }
					       		$intg_ResultALL="$outputPIS";
					            }
						
          //=======================================================================================				
				}// end of Present Indifinite
				}//end of 	if($check1=='Yes') condition				   
//==========================(2)=================(Present Continuous To Other)======================================================	
                          $Present=$_POST['Present']; 
					if($check1=='Yes')
                  {  
				     if($_POST['P_tens']=='ContinuousInterrogative')
				   {
   				  $intg_Show="<font color=#FF00FF>To </font><font color=#FFF>Present Continuous </font> <br>
				  <font color=#FF0000>User Input : </font><font color=#ff6512>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
				    
				//====================================================	
					if($_POST['C_tens']=='P1indefiniteinterrogative')  
				    {		
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='do' )
					{
					$er='1';
					}	                        //Riq output:  am i going to zoo.     is he going to zoo.  are they going to zoo.   
					if($er=='1'&&$i=='i'||$i=='I' )
					{
					$outputPCS="";
					$outputPCS.='am ';
					$outputPCS.=$i;	
					$outputPCS.=" ";	
					$i="";	
					}
				    if($i=='do')
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
		            $i="";
		            }
					if($i=='does')
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
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
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					  
					            }
					       		$intg_ResultALL="$outputPCS";
					            } 
				//==========(2)===================================
				    if($_POST['C_tens']=='P1ContinuousInterrogative')  
				    {
					$intg_ResultALL="$Present";
					}				
				//==========(3)===================================
				    if($_POST['C_tens']=='P1PerfectInterrogative')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='have' )
					{
					$er='1';
					}	                        //Riq output:  am i going to zoo.     is he going to zoo.  are they going to zoo.   
					if($er=='1'&&$i=='i'||$i=='I' )
					{
					$outputPCS="";
					$outputPCS.='am ';
					$outputPCS.=$i;	
					$outputPCS.=" ";	
					$i="";	
					}
				    if($i=='have')
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
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
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPCS";
					            }
				//==========(4)===================================
				if($_POST['C_tens']=='P1PerfectContinuousInterrogative')  
				    {                                           //Riq output:  am i going to zoo.     is he going to zoo.  are they going to zoo. 
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='have' )
					{
					$er='1';
					}
					if($i=='been' )
					{
					$i=="";
					}	                          
					if($er=='1'&&$i=='i'||$i=='I' )
					{
					$outputPCS="";
					$outputPCS.='am ';
					$outputPCS.=$i;	
					$outputPCS.=" ";	
					$i="";	
					}
				    if($i=='have')
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
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
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPCS";
					            }
				//==========(5)===================================
				    if($_POST['C_tens']=='PT1IndifinentInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='did')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPCS.='am';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPCS ='are ';
					}
					else
					{
				   	$outputPCS ='is ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPCS;
					$outputPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='is')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPCS.='are ';
					$outputPCS.= $j;	
					$outputPCS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPCS";
					            }
				//==========(6)===================================
				    if($_POST['C_tens']=='PT1ContinuousInterrogative')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='was' )
					{
					$er='1';
					}	                        //Riq output:  am i going to zoo.     is he going to zoo.  are they going to zoo.   
					if($er=='1'&&$i=='i'||$i=='I' )
					{
					$outputPCS="";
					$outputPCS.='am ';
					$outputPCS.=$i;	
					$outputPCS.=" ";	
					$i="";	
					}
				    if($i=='were')
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
		            $i="";
		            }
					if($i=='was')
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
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
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPCS";
					            }
				//==========(7)===================================
				if($_POST['C_tens']=='PT1PerfectInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='had')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPCS.='am';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPCS ='are ';
					}
					else
					{
				   	$outputPCS ='is ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPCS;
					$outputPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='is')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPCS.='are ';
					$outputPCS.= $j;	
					$outputPCS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPCS";
					            }
				//==========(8)===================================
				if($_POST['C_tens']=='PT1PerfectContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='been')
					{
				    $i="";
		            }
					if($i=='had')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPCS.='am';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPCS ='are ';
					}
					else
					{
				   	$outputPCS ='is ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPCS;
					$outputPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='is')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPCS.='are ';
					$outputPCS.= $j;	
					$outputPCS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       	    $intg_ResultALL="$outputPCS";
					            }
				//==========(9)===================================
				if($_POST['C_tens']=='F1IndifinentInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPCS.='am';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPCS ='are ';
					}
					else
					{
				   	$outputPCS ='is ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPCS;
					$outputPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='is')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPCS.='are ';
					$outputPCS.= $j;	
					$outputPCS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPCS";
					            }
				//==========(10)===================================
				if($_POST['C_tens']=='F1ContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
					if($i=='be')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPCS.='am';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPCS ='are ';
					}
					else
					{
				   	$outputPCS ='is ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPCS;
					$outputPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='is')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPCS.='are ';
					$outputPCS.= $j;	
					$outputPCS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPCS";
					            }
				//==========(11)===================================
				if($_POST['C_tens']=='F1PerfectInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
					if($i=='have')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPCS.='am';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPCS ='are ';
					}
					else
					{
				   	$outputPCS ='is ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPCS;
					$outputPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='is')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPCS.='are ';
					$outputPCS.= $j;	
					$outputPCS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPCS";
					            }
				//==========(12)===================================
				if($_POST['C_tens']=='F1PerfectContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
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
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPCS.='is';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPCS.='are';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPCS.='am';
					$outputPCS.=" ";		
				    $outputPCS.= $i;
					$outputPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPCS ='are ';
					}
					else
					{
				   	$outputPCS ='is ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPCS;
					$outputPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='is')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPCS.='are ';
					$outputPCS.= $j;	
					$outputPCS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPCS.=$i;
								$outputPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPCS";
					            }
				//===============================================================================================
				   }//
				  }//
				//==========(End of Peresent Continuous)===================================	

 //==========================(3)=================(Present Perfect To Other)======================================================	
                          $Present=$_POST['Present']; 
					if($check1=='Yes')
                  {  
				     if($_POST['P_tens']=='PerfectInterrogative')
				   {
   				  $intg_Show="<font color=#FF00FF>To </font><font color=#FFF>Present Perfect </font> <br>
				  <font color=#FF0000>User Input :</font><font color=#ff6512>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
				    
				//====================================================	
					if($_POST['C_tens']=='P1indefiniteinterrogative')  
				    {		
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Riq output:  have i going to zoo.     hass he going to zoo.     
				    if($i=='do')
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
		            $i="";
		            }
					if($i=='does')
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
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
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					  
					            }
					       		$intg_ResultALL="$outputPPS";
					            } 
				//==========(2)===================================
				    if($_POST['C_tens']=='P1ContinuousInterrogative')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                   //Riq output:  have i going to zoo.     has he going to zoo.     
					if($i=='am' )
					{
					$outputPPS.='have ';
					$outputPPS.=" ";	
					$i="";	
					}
				    if($i=='are')
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
		            $i="";
		            }
					if($i=='is')
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
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
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
						
					           $intg_ResultALL="$outputPPS";
			            		}				
				//==========(3)===================================
				    if($_POST['C_tens']=='P1PerfectInterrogative')  
				    {
					 $intg_ResultALL="$Present";
				    }
				//==========(4)===================================
				if($_POST['C_tens']=='P1PerfectContinuousInterrogative')  
				    {                                            
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='been' )
					{
					$i=="";
					}	                          
					
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPS";
					            }
				//==========(5)===================================
				    if($_POST['C_tens']=='PT1IndifinentInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='did')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPS ='have ';
					}
					else
					{
				   	$outputPPS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPS;
					$outputPPS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPS.='have ';
					$outputPPS.= $j;	
					$outputPPS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPS";
					            }
				//==========(6)===================================
				    if($_POST['C_tens']=='PT1ContinuousInterrogative')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                       
				    if($i=='were')
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
		            $i="";
		            }
					if($i=='was')
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
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
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
					            $intg_ResultALL="$outputPPS";
					            }
				//==========(7)===================================
				    if($_POST['C_tens']=='PT1PerfectInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='had')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPS ='have ';
					}
					else
					{
				   	$outputPPS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPS;
					$outputPPS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPS.='have ';
					$outputPPS.= $j;	
					$outputPPS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPS";
					            }
				//==========(8)===================================
				if($_POST['C_tens']=='PT1PerfectContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='had')
					{
				    $i="";
		            }
					if($i=='been')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPS ='have ';
					}
					else
					{
				   	$outputPPS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPS;
					$outputPPS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPS.='have ';
					$outputPPS.= $j;	
					$outputPPS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPS";       
						        }
				//==========(9)===================================
				if($_POST['C_tens']=='F1IndifinentInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPS ='have ';
					}
					else
					{
				   	$outputPPS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPS;
					$outputPPS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPS.='have ';
					$outputPPS.= $j;	
					$outputPPS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
					       	    $intg_ResultALL="$outputPPS";       
					            }
				//==========(10)===================================
				if($_POST['C_tens']=='F1ContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
					if($i=='be')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPS ='have ';
					}
					else
					{
				   	$outputPPS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPS;
					$outputPPS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPS.='have ';
					$outputPPS.= $j;	
					$outputPPS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPS";       
					            }
				//==========(11)===================================
				if($_POST['C_tens']=='F1PerfectInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
					if($i=='have')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPS ='have ';
					}
					else
					{
				   	$outputPPS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPS;
					$outputPPS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPS.='have ';
					$outputPPS.= $j;	
					$outputPPS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPS";       
					            }
				//==========(12)===================================
				if($_POST['C_tens']=='F1PerfectContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
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
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPS.='has';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPS.='have';
					$outputPPS.=" ";		
				    $outputPPS.= $i;
					$outputPPS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPS ='have ';
					}
					else
					{
				   	$outputPPS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPS;
					$outputPPS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPS.='have ';
					$outputPPS.= $j;	
					$outputPPS.=" ";
					$j="";
					}
					}
			        }
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_3rd'];
							    }		  
				                $outputPPS.=$i;
								$outputPPS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPS";       
					            }
				//===============================================================================================
				   }//end of check condidtion
				  }//end of Present Perfect 
				//==========(End of Peresent Perfect)===================================
				
//==========================(4)=================(Present Perfect Continuous To Other)======================================================	
                    $Present=$_POST['Present']; 
					if($check1=='Yes')
                    {  
				    if($_POST['P_tens']=='PerfectContinuousInterrogative')
				    {
   				  $intg_Show="<font color=#FF00FF>To </font><font color=#FFF>Present Perfect Continuous </font> <br> 
				 <font color=#FF0000>User Input : </font><font color=#ff6512>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
				    
				//=============(1)=======================================	
					if($_POST['C_tens']=='P1indefiniteinterrogative')  
				    {		
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Riq output:  have i been going to zoo.     has he been going to zoo.     
				    if($i=='do')
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
		            $i="";
		            }
					if($i=='does')
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
		            $i="";
		            }
					
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$outputPPCS.='been ';
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
									 
					  
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            } 
				//==========(2)===================================
				    if($_POST['C_tens']=='P1ContinuousInterrogative')  
				    {		
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Riq output:  have i been going to zoo.     has he been going to zoo.     
				    if($i=='are')
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
		            $i="";
		            }
					if($i=='am')
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
		            $i="";
		            }
					if($i=='is')
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
		            $i="";
		            }
					
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$outputPPCS.='been ';
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
									 
					  
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            } 
				//==========(3)===================================
				if($_POST['C_tens']=='P1PerfectInterrogative')  
				    {		
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Riq output:  have i been going to zoo.     has he been going to zoo.     
					if($i=='have')
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
		            $i="";
		            }
					if($i=='has')
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$outputPPCS.='been ';
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
									 
					  
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            }    
				//==========(4)===================================
				    if($_POST['C_tens']=='P1PerfectContinuousInterrogative')  
				    {		
					$intg_ResultALL="$Present ";
			        }
				//==========(5)===================================
				if($_POST['C_tens']=='PT1IndifinentInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='did')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPCS ='have ';
					}
					else
					{
				   	$outputPPCS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPCS;
					$outputPPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPCS.='have ';
					$outputPPCS.= $j;	
					$outputPPCS.=" ";
					$j="";
					}
					}
			        }

   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$outputPPCS.='been ';
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            }    				
				//==========(6)===================================
				     if($_POST['C_tens']=='PT1ContinuousInterrogative')  
				    {		
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{                                       //Riq output:  have i been going to zoo.     has he been going to zoo.     
					if($i=='were')
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
		            $i="";
		            }
					if($i=='was')
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
		            $i="";
		            }
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$outputPPCS.='been ';
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
					  
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            } 	
				//==========(7)===================================
				if($_POST['C_tens']=='PT1PerfectInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='had')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPCS ='have ';
					}
					else
					{
				   	$outputPPCS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPCS;
					$outputPPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPCS.='have ';
					$outputPPCS.= $j;	
					$outputPPCS.=" ";
					$j="";
					}
					}
			        }

   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$outputPPCS.='been ';
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
					  
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            }
				   //==========(8)===========================================
				    if($_POST['C_tens']=='PT1PerfectContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='had')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPCS ='have ';
					}
					else
					{
				   	$outputPPCS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPCS;
					$outputPPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPCS.='have ';
					$outputPPCS.= $j;	
					$outputPPCS.=" ";
					$j="";
					}
					}
			        }

   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
					  
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            }
				//==========(9)====================================
				   if($_POST['C_tens']=='F1IndifinentInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPCS ='have ';
					}
					else
					{
				   	$outputPPCS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPCS;
					$outputPPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPCS.='have ';
					$outputPPCS.= $j;	
					$outputPPCS.=" ";
					$j="";
					}
					}
			        }

   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {
								$outputPPCS.='been '; 	  
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            }
				//==========(10)===================================
				   if($_POST['C_tens']=='F1ContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
					if($i=='be')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPCS ='have ';
					}
					else
					{
				   	$outputPPCS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPCS;
					$outputPPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPCS.='have ';
					$outputPPCS.= $j;	
					$outputPPCS.=" ";
					$j="";
					}
					}
			        }

   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$outputPPCS.='been '; 
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            }
				//==========(11)===================================
				  if($_POST['C_tens']=='F1PerfectInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
					if($i=='have')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPCS ='have ';
					}
					else
					{
				   	$outputPPCS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPCS;
					$outputPPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPCS.='have ';
					$outputPPCS.= $j;	
					$outputPPCS.=" ";
					$j="";
					}
					}
			        }

   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$outputPPCS.='been ';
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
									 
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            }
				//==========(12)===================================
				    if($_POST['C_tens']=='F1PerfectContinuousInterrogative')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
					{
					if($i=='will')
					{
				    $i="";
		            }
					if($i=='have')
					{
				    $i="";
		            }
				    if($first_val=="" && $i!="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
					$outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPPCS.='has';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";		
		            $i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
		            $i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPPCS.='have';
					$outputPPCS.=" ";		
				    $outputPPCS.= $i;
					$outputPPCS.=" ";
					$i="";
					$find='0';
		            } 	
				    	
				    if($second_value=="" && $find != '0')
				    { 
				    $intword = substr( $i, -1 );
				    $second_value=$i; 
			    	if($intword==s)
				    {
				    $outputPPCS ='have ';
					}
					else
					{
				   	$outputPPCS ='has ';
					}
				 	} 
					}
					if($i=='and')
					{
					$temp_check22=$outputPPCS;
					$outputPPCS="";		
					$broken22 = explode (' ',$temp_check22);
					foreach($broken22 as $j)
			        {
					if($j=='has')	
					{
					$j="";
					}
					if($j!="")
					{
					$outputPPCS.='have ';
					$outputPPCS.= $j;	
					$outputPPCS.=" ";
					$j="";
					}
					}
			        }

   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPPCS.=$i;
								$outputPPCS.= " ";
					  
					            }
					       		$intg_ResultALL="$outputPPCS ";
					            }
				//================================================
				   }//
				  }//
//==========(End of Present Perfect Continuous)============================================================================
				   
?>

<style>
.box{
	 height: 216px;
    width: 548px;
    background-color: #081902;
    border: 3px solid #44d20a;
    float: right;
    margin-right: 423px;
    margin-top: 15px;
	}

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
<?php include 'footer.php';     ?>

</body>
</html>