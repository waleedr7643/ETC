
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Final Project English Sentences</title>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width device-width initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/coustom.css" />
 <link href= "http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css"rel="stylesheet">
 </head>
<body>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript">
   $(document).ready (function(){
	   $('[data-toggle="tooltip" ]').tooltip();
	   });
	   </script>
<!------------------------------------------START-------------------------------------------------------------------------------------->
                               <div class="container"> <h2 class="col" >Present  Indefinite</h2>
                               <div class="col-lg-6">
                            <br>
                            <br>
                       <h1>Simple</h1>
                       <h4>(From Present Perfect TO Past Perfect) </h4>
                       <form  method="post" name="commentform" action="" >
                       <table align="left" border="1" bordercolor="#FFF" >
                       <tr><td width="1%"><h><strong><em><b>Convert Tense From</b></em></strong></h></td>
                      <td width="5%"><select name="C_tens" size="">
                         <option  value=""/>Select </option>
                         <option  value="1PresentIndifinent"/> Present indefinite </option>
                         <option  value="1Presentcontinuou"/>Present Continuous</option>
                         <option  value="1Presentperfect" />Present Perfect</option>
                         <option  value="1perfectContinuous"/>Present Perfect Continuous </option>
                         <option  value="1PastIndifinent"/>Past indefinite</option>
                         <option  value="1PastContinuous"/> Past Continuous</option>
                         <option  value="1PastPerfect"/> Past Perfect</option>
                         <option  value="1PastPerfectContinuous"/> Past Perfect Continuous</option>
                         <option  value="1futureIndifinent"/>future indefinite </option>
                         <option  value="1futureContinuous"/>future Continuous </option>
                         <option  value="1futurePerfect"/> future Perfect</option>
                         <option  value="1futurePerfectContinuous"/> future Perfect Continuous</option>
                         </select> </td></tr>
                     
                     <tr> <td > <b><i><font>Present</font></i></b></td>
                     <td> <input id="Present" name="Present" type="text" value="" size="40" r /></td></tr>
                     <tr><td ><h><strong><em><b>Convert Tense To</b></em></strong></h></td>
                      <td><select name="P_tens" size="">
                         <option  value=""/>Select </option>
                         <option  value="PresentIndifinent"/> Present indefinite </option>
                         <option  value="Presentcontinuou"/>Present Continuous</option>
                         <option  value="PresentPerfect" />Present Perfect</option>
                        <option  value="perfectContinuous"/>Present Perfect Continuous </option>
                         <option  value="PastIndifinent"/>Past indefinite</option>
                         <option  value="PastContinuous"/> Past Continuous</option>
                         <option  value="PastPerfect"/> Past Perfect</option>
                         <option  value="PastPerfectContinuous"/> Past Perfect Continuous</option>
                         <option  value="futureIndifinent"/>future indefinite </option>
                         <option  value="futureContinuous"/>future Continuous </option>
                         <option  value="futurePerfect"/> future Perfect</option>
                         <option  value="futurePerfectContinuous"/> future Perfect Continuous</option>
                         </select> </td></tr>
                          <tr><td></td><td><input type="submit" id="sumit" name="submit" value="Convert Tense " ></td> </tr>
                  <tr><td> </td></tr>
                 
                
                 </table>
                  </form>
                 </div>
<?php

   include "dbconction.php";
?>

     
                
<?php
                                    //  ................
                                   //   TYPE Checking
								   //  .................. 
								   
								   	   
 //==============================(1)======================( Present Indifinent)===============================================================
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
    $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_1st']==$i && $check1=='hi' )
						        {    
								   $temp_check='NO';
								   }
								}
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
		   echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Present Indifinent </font>";
						   
											}									
								   else
                                            {
 echo"<font color=#006600>Invalid Sentence?<br>IF you Select Present Indifinent<br>You Must be Enter Sentense in Present Indifinent<br>  </font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
		 echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Present Continuous </font>";
					   
											}									
								   else
                                            {
   echo"<font color=#FF0000>Invalid Sentence?<br>IF you Select Present Perfect <br> You Must be Enter Sentense in Present Perfect<br></font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	                              
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Present Perfect </font>";
								   
											}									
								   else
                                            {
   echo"<font color=#FF0000>Invalid Sentence?</font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Present Perfect Continuous </font>";
								   
											}									
								   else
                                            {
                      echo"<font color=#CC00FF>Invalid Sentence?";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_2nd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}//End Of Foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
			echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Past Indifinent </font>";
							   
											}									
								   else
                                            {
   echo"<font color=#FF0000>Invalid Sentence?<br>IF you Select Past Indifinent <br> You Must be Enter Sentense in Past Indifinent  </font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								     $temp_check='NO';
									}									
								}//End of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
		echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Past Continuous </font>";
											}									
								   else
                                            {
   echo"<font color=#FF0000>Invalid Sentence?<br>IF you Select Past Continuous <br> You Must be Enter Sentense in Past Continuous  </font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF>Past Perfect </font>";
											}									
								   else
                                            {
   echo"<font color=#FF0000>Invalid Sentence?<br>IF you Select Past Percet <br> You Must be Enter Sentense in Past Percet   </font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   echo"<font color=#FF0000>Select option :</font><font color=#0000FF><font color=#FF00FF>From </font>Past Perfect Continuous </font>";

											}									
								   else
                                            {
   echo"<font color=#CC00FF>Invalid Sentence?<br>IF you Select Past Percet <br> You Must be Enter Sentense in Past Perfect Continuous </font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_1st']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
 		echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Future Indifinite </font>";
								   
											}									
								   else
                                            {
   echo"<font color=#CC00FF>Invalid Sentence?<br>IF you Select Future Indifinite <br> You Must be Enter Sentense in Future Indifinite   </font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
		echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Future Continuous </font>";

											}									
								   else
                                            {
   echo"<font color=#FF0000>Invalid Sentence?<br>IF you Select Future Continuous <br> You Must be Enter Sentense in Future Continuous </font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_3rd']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
   echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Future Perfect </font>";
								   
											}									
								   else
                                            {
   echo"<font color=#CC00FF>Invalid Sentence?<br>IF you Select Past Percet <br> You Must be Enter Sentense in Future Perfect </font>";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id'];
				
      	
                            if ($row['form_5th']==$i && $check1=='hi' )
						        {    
								      $temp_check='NO';
									}									
								}// end of foreach Loop
							   if ($temp_check=='NO'&&$check1=='hi' )
						        {    
								   $check1='Yes';
		   echo"<font color=#FF0000>Select option :</font><font color=#FF00FF>From</font> <font color=#0000FF> Future Perfect Continuous </font>";
						   
											}									
								   else
                                            {
   echo"<font color=#CC00FF>Invalid Sentence?<br>IF you Select Past Percet <br> You Must be Enter Sentense in Future Perfect Continuous </font>";
											}// end of else condition
											}// End of first IF condition
//=============================================================================================================================================	
	                                  //.......................
									 // End Type of Checking
                                    // ........................ 

//=============================================================================================================================================		
									  
									  //.......................
									 // Start Conversion of Tenses
                                    // ........................ 


//==========================(6)=================(Present Indifinent To Other)======================================================		
					$Present=$_POST['Present']; 
					if($check1=='Yes')
                  {  
				     if($_POST['P_tens']=='PresentIndifinent')
				   {
   				  echo"<font color=#FF00FF>To </font><font color=#0000FF>Present Indifinent </font> <br>"; 
				  echo"<font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";

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
  	  			
   
    $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();
	//print_r($row);
    //$dbname = $row['name'];
    $record_id=$row['verb-id']; 
				
      	
                                if ($record_id!=0 )
						        {
									$i= $row['form_1st'];
								}		  
				                       $outputPI.=$i;
								       $outputPI.= " ";
				}}}		echo"<font color=#33CC66>$outputPI </font> ";					   
//==========================(2)=================(Present Continuous To Other)======================================================		
                                 $Present=$_POST['Present']; 
					               if($check1=='Yes')
                                   {  
				                  if($_POST['P_tens']=='Presentcontinuou')
				              {
   				  echo"<font color=#FF00FF>To </font><font color=#0000FF>Present Continuous </font> <br>"; 
				  echo"<font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                        
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPC </font> ";
					            }
	              ///==========(2)=================================	
				  if($_POST['C_tens']=='1Presentcontinuou')  
				    {
				  echo"<font color=#33CC66>$Present </font> ";
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
					
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					  
					            }
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
					
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					  
					            }
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
				     
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
					
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							    if($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPC.=$i;
								$outputPC.= " ";
									 
					  
					            }
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
				     
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPC </font> ";
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
   				  echo"<font color=#FF00FF>To </font><font color=#0000FF>Present Perfect </font> <br>"; 
				  echo"<font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPP </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_3rd'];
							  }		 
				                       $outputPP.=$i;
								       $outputPP.= " ";
									 
					} echo"<font color=#33CC66>$outputPP </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_3rd'];
							  }		 
				                       $outputPP.=$i;
								       $outputPP.= " ";
									 
					} echo"<font color=#33CC66>$outputPP </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPP </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_3rd'];
							  }		 
				                       $outputPP.=$i;
								       $outputPP.= " ";
									 
					} echo"<font color=#33CC66>$outputPP </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPP </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPP </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPP </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPP </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPP </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputPP </font> ";
					           }
				  	       ///===========================================
				           }  //end of peresent perfect
				          }  // end of if condition of check
				          
//==========================(6)=================(Past Continuous To Other)================================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='PastContinuous')
			      {
   				  echo"<font color=#FF00FF>To </font><font color=#0000FF>Past Continuous  </font> <br>"; 
				  echo"<font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do')
					{
					$i="";	
					}
					 if($i=='does')
					{
					$i="";	
					}
					
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
					$i="";
					$find=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
					$i="";
					$find=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
					$i="";
					$find=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
					$i="";
					$find=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
					$i="";
					$find=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
					$i="";
					$find=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
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
					$outputPTC.='have not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPTC.='has not';
					$have="";
					$i="";
				    }
					
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
							  if($have==1)
								{ $outputPTC.='have';
								  $outputPTC.= " ";
								}
								if($have==2)
								{ 
								 $outputPTC.='has';
								 $outputPTC.= " ";
							     }
						            $i= $row['form_5th'];
							  }		  
				                       $outputPTC.=$i;
								       $outputPTC.= " ";
									 
					  
					       }
					       		echo"<font color=#33CC66>$outputPTC </font> ";
					          }
	              
	              ///==========(2)=================================
	              ///==========(3)=================================
	              ///==========(4)=================================
	              ///==========(5)=================================
	              ///==========(6)=================================
	              ///==========(7)=================================
	              ///==========(8)=================================
	              ///==========(9)=================================
	              ///==========(10)=================================
	              ///==========(11)=================================
	              ///==========(12)=================================
	              
	              ///==========()=================================
	              	}
	                }
	                 
				          
//==========================(6)=================(Future Indifinent To Other)==================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='futureIndifinent')
			      {
   				  echo"<font color=#FF00FF>To </font><font color=#0000FF>Future Indifinent  </font> <br>"; 
				  echo"<font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
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
					       		echo"<font color=#33CC66>$outputFI </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
					       }
					     ///========(9)=======================================  
					      if($_POST['C_tens']=='1futureIndifinent')  
				             {
					       	echo"<font color=#33CC66>$Present </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
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
					       	echo"<font color=#33CC66>$outputFI </font> ";
					       }
					     ///========(End Of Future Indifinite Tense)=======================================  
					
	      				     }
	      				     }     
//==========================(11)=================(Future Contiuous To Other)==================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='futureContinuous')
			      {
   				  echo"<font color=#FF00FF>To </font><font color=#0000FF>Future Contiuous  </font> <br>"; 
				  echo"<font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
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
					       		echo"<font color=#33CC66>$outputFC </font> ";
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
					      }       	
					
					     ///========(10)=======================================  
			    	if($_POST['C_tens']=='1futureContinuous')  
				    {
			        
			        echo"<font color=#33CC66>$Present </font> ";
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
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
					       		echo"<font color=#33CC66>$outputFC </font> ";    
					       }					      
					     ///========(End Of Future Indifinite Tense)=======================================  
					
	      				     }
	      				     }     
				          			          

//==========================(11)=================(Future Perfect To Other)================================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='futurePerfect')
			      {
   				  echo"<font color=#FF00FF>To </font><font color=#0000FF>Future Perfect  </font> <br>"; 
				  echo"<font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
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
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputFP </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	echo"<font color=#33CC66>$outputFP </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	echo"<font color=#33CC66>$outputFP </font> ";
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
	 $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	echo"<font color=#33CC66>$outputFP </font> "; 
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       	echo"<font color=#33CC66>$outputFP </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	echo"<font color=#33CC66>$outputFP </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	echo"<font color=#33CC66>$outputFP </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       	echo"<font color=#33CC66>$outputFP </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					       }
					       	echo"<font color=#33CC66>$outputFP </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					       }
					       	echo"<font color=#33CC66>$outputFP </font> ";
					           }
			  ///============(11)===============================
				    if($_POST['C_tens']=='1futurePerfect')  
				    {
					echo"<font color=#33CC66>$Present </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_3rd'];
							  }		  
				              $outputFP.=$i;
							  $outputFP.= " ";
									 
					  
					       }
					       		echo"<font color=#33CC66>$outputFP </font> ";	
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
   				  echo"<font color=#FF00FF>To </font><font color=#0000FF>future Perfect Continuous </font> <br>"; 
				  echo"<font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
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
				    
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputFPC </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		     
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									   
									 
					} echo"<font color=#33CC66>$outputFPC </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		     
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									   
									 
					} echo"<font color=#33CC66>$outputFPC </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		     
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									   
									 
					} echo"<font color=#33CC66>$outputFPC </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
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
					       		echo"<font color=#33CC66>$outputFPC </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		 
				              $outputFPC.=$i;
						      $outputFPC.= " ";
									 
					} echo"<font color=#33CC66>$outputFPC </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				              $outputFPC.=$i;
					          $outputFPC.= " ";
									 
					  
					       }
					       		echo"<font color=#33CC66>$outputFPC </font> ";
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
					
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									 
					  
					       }
					       		echo"<font color=#33CC66>$outputFPC </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				                       $outputFPC.=$i;
								       $outputFPC.= " ";
									 
					  
					       }
					       		echo"<font color=#33CC66>$outputFPC </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				              $outputFPC.=$i;
						      $outputFPC.= " ";
									 
					  
					       }
					       		echo"<font color=#33CC66>$outputFPC </font> ";
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
   $sql = "SELECT * FROM  verbform WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verb-id'];
					            
							  if ($record_id!=0 )
						      {  
							  $i= $row['form_5th'];
							  }		  
				              $outputFPC.=$i;
							  $outputFPC.= " ";
									 
					  
					       }
					       		echo"<font color=#33CC66>$outputFPC </font> ";
					           }
				 ////=======(12)=====================================	 
				 if($_POST['C_tens']=='1futurePerfectContinuous')  
				    {
					 echo"<font color=#33CC66>$Present </font> ";
					 }
				  	       ///===========================================
				           }  //end of future perfect continuous
				          }  // end of if condition of check

