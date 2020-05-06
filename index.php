

<?php

   include "dbconction.php";
?>

     
                
<?php
                                    //  ................
                                   //   TYPE Checking
								   //  .................. 
								   
								   	   $resultALL="";
									   $option="";
									   $show="";
									   $invalid="";
 //==============================(1)================( Present Indifinent)======================
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
$invalid="<font color=#ffffff>Invalid Sentence?<br>IF you Select Present Indifinent<br>You Must be Enter Sentense in Present Indifinent<br>  </font>";
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
 $invalid="<font color=#FFFFFF>Invalid Sentence?<br>IF you Select Present Continuous <br> You Must be Enter Sentense in Present Continuous<br></font>";
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
   $invalid="<font color=#FFFFFF>Invalid Sentence?</font>";
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
                      $invalid="<font color=#CC00FF>Invalid Sentence?";
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
   $invalid="<font color=#FFFFFF>Invalid Sentence?<br>IF you Select Past Indifinent <br> You Must be Enter Sentense in Past Indifinent  </font>";
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
   $invalid="<font color=#FFFFFF>Invalid Sentence?<br>IF you Select Past Continuous <br> You Must be Enter Sentense in Past Continuous  </font>";
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
   $invalid="<font color=#FFFFFF>Invalid Sentence?<br>IF you Select Past Percet <br> You Must be Enter Sentense in Past Percet   </font>";
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
$invalid="<font color=#FFFFFF>Invalid Sentence?<br>IF you Select Past Percet <br> You Must be Enter Sentense in Past Perfect Continuous </font>";
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
$invalid="<font color=#FFFFFF>Invalid Sentence?<br>IF you Select Future Indifinite <br> You Must be Enter Sentense in Future Indifinite</font>";
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
$invalid="<font color=#FFFFFF>Invalid Sentence?<br>IF you Select Future Continuous <br> You Must be Enter Sentense in Future Continuous </font>";
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
  $invalid="<font color=#FFFFFF>Invalid Sentence?<br>IF you Select Past Percet <br> You Must be Enter Sentense in Future Perfect </font>";
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
$invalid="<font color=#FFFFFF>Invalid Sentence?<br>IF you Select Past Percet<br> You Must be Enter Sentense in Future Perfect Continuous</font>";
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
				}}}		         $resultALL=$outputPI;					   
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
//==========================(5)=================(Past Indifinent To Other)================================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='PastIndifinent')
			      {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Past Indifinent  </font> <br> 
				  <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do')
					{
					$outputPTI.='did';
				    $outputPTI.= " ";
					$i="";
					$check='1';	
					}
					if($i=='does')
					{
					$outputPTI.='did';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
					  
					          }
					       		$resultALL=$outputPTI ;
					          }
	              ///==========(2)=================================	
				  if($_POST['C_tens']=='1Presentcontinuou')  
				    {
					
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='am')
					{
					$i="";
					}
					if($i=='is')
					{
					$i="";
					}
					if($i=='are')
					{
					$i="";	
					}
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
  						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
					  
					         }
					       		$resultALL=$outputPTI ;
					          }
				  ///==========(3)=================================
				  if($_POST['C_tens']=='1Presentperfect')  
				    {
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
					{
					$i="";
					}
					if($i=='have')
					{
					$i="";	
					}
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
									 
					          }
					          $resultALL=$outputPTI ;
					          }
				  ///==========(4)=================================
				  if($_POST['C_tens']=='1perfectContinuous')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
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
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
					  
					         }
					         $resultALL=$outputPTI ;
					          }	
				  ///==========(5)=================================
				  if($_POST['C_tens']=='1PastIndifinent')  
				    {
					$resultALL=$Present ;
					}
				  ///==========(6)=================================
				  if($_POST['C_tens']=='1PastContinuous')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='was')
					{
					$i="";
					}
					if($i=='were')
					{
					$i="";	
					}
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
									 
					  
					          }
					         $resultALL=$outputPTI ;
					          }	
				  ///==========(7)=================================
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
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
									 
					          }
					         $resultALL=$outputPTI ;
					          }		
				  ///==========(8)=================================
				  if($_POST['C_tens']=='1PastPerfectContinuous')  
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
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
									 
					  
					          }
					          $resultALL=$outputPTI ;
					          }		
				  ///==========(9)=================================
				  if($_POST['C_tens']=='1futureIndifinent')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='will')
					{
					$i="";
					}
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
					  
					          }
					       $resultALL=$outputPTI ;
					          }			
				  ///==========(10)=================================
				   if($_POST['C_tens']=='1futureContinuous')  
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
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
									 
					  
					       }
					          $resultALL=$outputPTI ;
					          }				
				  ///==========(11)=================================
				     if($_POST['C_tens']=='1futurePerfect')  
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
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
					  
					       }
					          $resultALL=$outputPTI ;
					          }				
				  ///==========(12)=================================
				    if($_POST['C_tens']=='1futurePerfectContinuous')  
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
					if($i=='not')
					{
					$outputPTI.='did not';
				    $outputPTI.= " ";	
					$i="";	
					$check='1';
				  	}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					           if ($check=="" )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_2nd'];
							  }
							  }
							  if ($check=='1' )
							  { 
							  if ($record_id!=0 )
							  {  
						      $i= $row['form_1st'];
							  }
							  }
				              $outputPTI.=$i;
						      $outputPTI.= " ";
									 
					   
					         }
					         $resultALL=$outputPTI ;
					          }	
				  ///======================================
				  }// 
				  }//
                  //===============(Enf of Past Indififnit)=============================== 
//==========================(6)==================(Past Continuous )===================================================================
                   $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='PastContinuous')
			      {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Past Continuous </font> <br> 
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
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
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
					$outputPTC.='were not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPTC.='was not';
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
								$outputPTC.='were';
								$outputPTC.= " ";
								}
								if($have==2)
								{ 
								$outputPTC.='was';
								$outputPTC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTC ;
					          }
	              ///==========(2)=================================
				     if($_POST['C_tens']=='1Presentcontinuou')  
				    {
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='am')
					{
					$outputPTC.='was';	
					$outputPTC.=" ";		
		            $i="";	
					}
					if($i=='is')
					{
					$outputPTC.='were';	
					$outputPTC.=" ";		
		            $i="";		
					}
					if($i=='are')
					{
					$outputPTC.='were';	
					$outputPTC.=" ";		
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
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTC ;
					          }
				  ///==========(3)=================================
				  if($_POST['C_tens']=='1Presentperfect')  
				    {
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
					{
					$outputPTC.='was';	
					$outputPTC.=" ";		
		            $i="";	
					}
					if($i=='have')
					{
					$outputPTC.='were';	
					$outputPTC.=" ";		
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
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					          }
					       		$resultALL=$outputPTC ;
					          }	
				  ///==========(4)=================================
				  if($_POST['C_tens']=='1perfectContinuous')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
					{
					$outputPTC.='was';	
					$outputPTC.=" ";		
		            $i="";	
					}
					if($i=='have')
					{
					$outputPTC.='were';	
					$outputPTC.=" ";		
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
					            
							    if ($record_id!=0 )
						        {  
								$i= $row['form_5th'];
							    }		  
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					          }
					       		$resultALL=$outputPTC ;
					          }		
				  ///==========(5=================================
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
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
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
					$outputPTC.='were not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPTC.='was not';
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
								$outputPTC.='were';
								$outputPTC.= " ";
								}
								if($have==2)
								{ 
								$outputPTC.='was';
								$outputPTC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTC ;
					          }		
				  ///==========(6)=================================
				    if($_POST['C_tens']=='1PastContinuous')  
				    {
                       $resultALL=$Present;
					}
				  ///==========(7)=================================
				  if($_POST['C_tens']=='1PastPerfect')  
				    {
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
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
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
					$outputPTC.='were not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPTC.='was not';
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
								$outputPTC.='were';
								$outputPTC.= " ";
								}
								if($have==2)
								{ 
								$outputPTC.='was';
								$outputPTC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTC ;
					          }			
				  ///==========(8)=================================
				  if($_POST['C_tens']=='1PastPerfectContinuous')  
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
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
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
					$outputPTC.='were not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPTC.='was not';
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
								$outputPTC.='were';
								$outputPTC.= " ";
								}
								if($have==2)
								{ 
								$outputPTC.='was';
								$outputPTC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTC ;
					          }			
				  ///==========(9)=================================
				    if($_POST['C_tens']=='1futureIndifinent')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='will')
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
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
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
					$outputPTC.='were not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPTC.='was not';
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
								$outputPTC.='were';
								$outputPTC.= " ";
								}
								if($have==2)
								{ 
								$outputPTC.='was';
								$outputPTC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTC ;
					          }		
				  ///==========(10)=================================
				  if($_POST['C_tens']=='1futureContinuous')  
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
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
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
					$outputPTC.='were not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPTC.='was not';
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
								$outputPTC.='were';
								$outputPTC.= " ";
								}
								if($have==2)
								{ 
								$outputPTC.='was';
								$outputPTC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTC ;
					          }		 	
				  ///==========(11)=================================
				  if($_POST['C_tens']=='1futurePerfect')  
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
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
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
					$outputPTC.='were not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPTC.='was not';
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
								$outputPTC.='were';
								$outputPTC.= " ";
								}
								if($have==2)
								{ 
								$outputPTC.='was';
								$outputPTC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTC ;
					          }			
				  ///==========(12)=================================
				  if($_POST['C_tens']=='1futurePerfectContinuous')  
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
				    if($first_val=="")
				    {
				    $first_val=$i;
				    if($first_val=="it"||$first_val=="It")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="He"|| $first_val=="he")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="She"||$first_val=="she")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
		            $i="";
					$check=0;
		            }
					if($first_val=="They"||$first_val=="they")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="We"||$first_val=="we")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="You"||$first_val=="you")
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='were';
		            $i="";
					$check=0;
		            }
					if($first_val=="I"||$first_val=="i" )
					{
				    $outputPTC.=$i;
					$outputPTC.=" ";		
					$outputPTC.='was';
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
					$outputPTC.='were not';
					$have="";
					$i="";
				    }
					if($i=='not' && $have==2 )
					{
					$outputPTC.='was not';
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
								$outputPTC.='were';
								$outputPTC.= " ";
								}
								if($have==2)
								{ 
								$outputPTC.='was';
								$outputPTC.= " ";
							    }
								$i= $row['form_5th'];
							    }		  
				                $outputPTC.=$i;
						        $outputPTC.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTC ;
					          }			
				  //==========================(End of Past Continuous)==================================================		  
				  }//
				  }//
//==========================(7)=================(Past Perfect To Other)================================================================		
                    $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='PastPerfect')
			      {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Past Perfect  </font> <br>
				        <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do')
					{
					$outputPTP.='had ';
				    $outputPTP.= " ";
					$i="";
					$check=1;	
					}
					if($i=='does')
					{
					$outputPTP.='had';
				    $outputPTP.= " ";	
					$i="";	
					$check=1;
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
							  if($check=="")
					          {
					          $outputPTP.='had';
				              $outputPTP.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_3rd'];
							  }		  
				                       $outputPTP.=$i;
								       $outputPTP.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTP;
					          }
	              ///==========(2)=================================	
				 	if($_POST['C_tens']=='1Presentcontinuou')  
				    {
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='is')
					{
					$outputPTP.='had ';
				    $outputPTP.= " ";
					$i="";
					}
					if($i=='am')
					{
					$outputPTP.='had ';
				    $outputPTP.= " ";
					$i="";
					}
					if($i=='are')
					{
					$outputPTP.='had';
				    $outputPTP.= " ";	
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
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTP;
					          }	
				  ///==========(3)=================================	
				    if($_POST['C_tens']=='1Presentperfect')  
				    {
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
					{
					$outputPTP.='had ';
				    $outputPTP.= " ";
					$i="";
					}
					if($i=='have')
					{
					$outputPTP.='had';
				    $outputPTP.= " ";	
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
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					  
					          }
					       	 $resultALL=$outputPTP;
					          }		
				  ///==========(4)=================================	
				    if($_POST['C_tens']=='1perfectContinuous')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
					{
					$outputPTP.='had ';
				    $outputPTP.= " ";
					$i="";
					}
					if($i=='have')
					{
					$outputPTP.='had';
				    $outputPTP.= " ";	
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
					            
							  if ($record_id!=0 )
							  {
						      $i= $row['form_3rd'];
							  }		  
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTP;
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
					$outputPTP.='had ';
				    $outputPTP.= " ";
					$i="";
					$check=1;	
					}
				    
   $sql = "SELECT * FROM  verb_form WHERE form_1st ='$i' or form_2nd ='$i' or form_3rd ='$i' or  form_4th ='$i' or  form_5th ='$i'";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $record_id=$row['verbID'];
					            
							  if ($record_id!=0 )
							  {
							  if($check=="")
					          {
					          $outputPTP.='had';
				              $outputPTP.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_3rd'];
							  }		  
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					  
					       }
					       		$resultALL=$outputPTP;
					          }		
				  ///==========(6)=================================	
				  if($_POST['C_tens']=='1PastContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='wae')
					{
					$outputPTP.='had';
				    $outputPTP.= " ";		
					$i="";	
					}
					if($i=='were')
					{	
					$outputPTP.='had';
				    $outputPTP.= " ";		
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
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					  
					          }
					       		$resultALL=$outputPTP;
					          }		
				  ///==========(7)=================================
				    if($_POST['C_tens']=='1PastPerfect')  
				    {
					$resultALL=$Present;
					}
				  ///==========(8)=================================
				    if($_POST['C_tens']=='1PastPerfectContinuous')  
				    {
				    $find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='been')
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
					          $outputPTP.='had';
				              $outputPTP.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_3rd'];
							  }		  
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					          }
					       		$resultALL=$outputPTP;
					          }		
				  ///==========(9)=================================	
				    if($_POST['C_tens']=='1futureIndifinent')  
				    {
					 $find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='will')
					{
					$outputPTP.='had ';
				    $outputPTP.= " ";
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
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					  
					          }
					       	  $resultALL=$outputPTP;
					          }			
				  ///==========(10)=================================
				     if($_POST['C_tens']=='1futureContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {	
					if($i=='will')
					{
					$outputPTP.='had ';
				    $outputPTP.= " ";
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
					            
							  if ($record_id!=0 )
							  { 
						      $i= $row['form_3rd'];
							  }		  
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					  
					          }
					       $resultALL=$outputPTP;
					          }	
				  ///==========(11)=================================
				     if($_POST['C_tens']=='1futurePerfect')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {	
					if($i=='will')
					{
					$outputPTP.='had ';
				    $outputPTP.= " ";
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
					            
							  if ($record_id!=0 )
							  { 
						      $i= $row['form_3rd'];
							  }		  
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTP;
					          }	
				  ///==========(12)=================================
				     if($_POST['C_tens']=='1futurePerfectContinuous')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='will')
					{
					$outputPTP.='had ';
				    $outputPTP.= " ";
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
					            
							  if ($record_id!=0 )
							  { 
						      $i= $row['form_3rd'];
							  }		  
				              $outputPTP.=$i;
						      $outputPTP.= " ";
									 
					  
					          }
					          $resultALL=$outputPTP;
					          }		
				   ///===========================================			
				  }//
				  }//
				  ///==========(End of Past Perfect)=================================	
				  
//==========================(8)=================(Past Perfect Continuous To Other)============================================================
                     $Present=$_POST['Present']; 
	                if($check1=='Yes')
                  {  
	                if($_POST['P_tens']=='PastPerfectContinuous')
			      {
   				  $show ="<font color=#FF00FF>To </font><font color=#FFFFFF>Future Perfect Continuous  </font> <br>
				       <font color=#FF0000>User Input : </font><font color=#FF9933>$Present</font> <br><font color=#FF0000> OutPut : </font> ";
                  
				    if($_POST['C_tens']=='1PresentIndifinent')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
				    if($i=='do')
					{
					$outputPTPC.='had  not been ';
				    $outputPTPC.= " ";
					$i="";
					$check=1;	
					}
					if($i=='does')
					{
					$outputPTPC.='had  not been';
				    $outputPTPC.= " ";	
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
					          $outputPTPC.='had  been';
				              $outputPTPC.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_5th'];
							  }		  
				              $outputPTPC.=$i;
							  $outputPTPC.= " ";
									 
					  
					          }
					       $resultALL=$outputPTPC ;
					          } 
                    ///========(2)===================================
					if($_POST['C_tens']=='1Presentcontinuou')  
				    {
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='am')
					{
					$outputPTPC.='had';	
					$outputPTPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='is')
					{
					$outputPTPC.='had';
					$outputPTPC.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='are')
					{
					$outputPTPC.='had';	
					$outputPTPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputPTPC;
					$outputPTPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputPTPC.=$i;	
					$outputPTPC.=" ";
					}
					}	
					$outputPTPC.=' not been';
					$outputPTPC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputPTPC.=' been';	
					$outputPTPC.=" ";
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
				                       $outputPTPC.=$i;
								       $outputPTPC.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTPC ;
					          } 	
					///========(3)===================================
					if($_POST['C_tens']=='1Presentperfect')  
				    {
				     $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='has')
					{
					$outputPTPC.='had';
					$outputPTPC.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='have')
					{
					$outputPTPC.='had';	
					$outputPTPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputPTPC;
					$outputPTPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputPTPC.=$i;	
					$outputPTPC.=" ";
					}
					}	
					$outputPTPC.=' not been';
					$outputPTPC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputPTPC.=' been';	
					$outputPTPC.=" ";
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
				              $outputPTPC.=$i;
							  $outputPTPC.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTPC ;
					          } 		
					///========(4)===================================
					 if($_POST['C_tens']=='1perfectContinuous')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        { 
					if($i=='has')
					{
					$outputPTPC.='had';	
					$outputPTPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='have')
					{
					$outputPTPC.='had';
					$outputPTPC.=" ";
					$NoNot=1;	
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
				                       $outputPTPC.=$i;
								       $outputPTPC.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTPC ;
					          } 	
					///========(5)===================================
					if($_POST['C_tens']=='1PastIndifinent')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='did')
					{
					$outputPTPC.='had not been';
				    $outputPTPC.= " ";	
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
					          $outputPTPC.='had  been';
				              $outputPTPC.= " ";	
					          $i="";	
					          }	  
						      $i= $row['form_5th'];
							  }		  
				              $outputPTPC.=$i;
							  $outputPTPC.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTPC ;
					          } 	
					///========(6)===================================
					 if($_POST['C_tens']=='1PastContinuous')  
				    {
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='was')
					{
					$outputPTPC.='had';
					$outputPTPC.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='were')
					{
					$outputPTPC.='had';	
					$outputPTPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='not')
					{
					$temp_check22=$outputPTPC;
					$outputPTPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputPTPC.=$i;	
					$outputPTPC.=" ";
					}
					}	
					$outputPTPC.=' not been';
					$outputPTPC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputPTPC.=' been';	
					$outputPTPC.=" ";
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
				              $outputPTPC.=$i;
							  $outputPTPC.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTPC ;
					          } 	
					///========(7)===================================
					if($_POST['C_tens']=='1PastPerfect')  
				    {
					$find="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='had')
					{
					$outputPTPC.='had';
					$outputPTPC.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='not')
					{
					$temp_check22=$outputPTPC;
					$outputPTPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputPTPC.=$i;	
					$outputPTPC.=" ";
					}
					}	
					$outputPTPC.=' not been';
					$outputPTPC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputPTPC.=' been';	
					$outputPTPC.=" ";
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
				              $outputPTPC.=$i;
							  $outputPTPC.= " ";
									 
					  
					          }
					       	   $resultALL=$outputPTPC ;
					          } 		
					///========(8)===================================
					 if($_POST['C_tens']=='1PastPerfectContinuous')  
				     {
				     $resultALL=$Present;
			         }
					///========(9)===================================
					 if($_POST['C_tens']=='1futureIndifinent')  
				     {
				     $broken1 = explode (' ',$Present);
                     foreach($broken1 as $i)
			         {
					  
					if($i=='will')
					{
					$outputPTPC.='had';
					$outputPTPC.=" ";
					$NoNot=1;	
					$i="";
					} 	
					if($i=='not')
					{
					$temp_check22=$outputPTPC;
					$outputPTPC="";		
					$broken22 = explode (' ',$temp_check22);
                    foreach($broken22 as $i)
			        {
					if($i!='been')	
					{
					$outputPTPC.=$i;	
					$outputPTPC.=" ";
					}
					}	
					$outputPTPC.=' not been';
					$outputPTPC.=" ";	
					$i="";
					$NoNot=2;	 
					}
					if($NoNot==1)
					{
					$outputPTPC.=' been';	
					$outputPTPC.=" ";
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
				              $outputPTPC.=$i;
							  $outputPTPC.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTPC ;
					          } 		 
					///========(10)=================================== 
					if($_POST['C_tens']=='1futureContinuous')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='will')
					{
					$outputPTPC.='had';	
					$outputPTPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='be')
					{
					$outputPTPC.='been';
					$outputPTPC.=" ";
					$NoNot=1;	
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
				                       $outputPTPC.=$i;
								       $outputPTPC.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTPC ;
					          }
					///========(11)===================================
				    if($_POST['C_tens']=='1futurePerfect')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					if($i=='will')
					{
					$outputPTPC.='had';	
					$outputPTPC.=" ";
					$i="";
					$NoNot=1;
					}
					if($i=='have')
					{
					$outputPTPC.='been';
					$outputPTPC.=" ";
					$NoNot=1;	
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
				              $outputPTPC.=$i;
						      $outputPTPC.= " ";
									 
					  
					          }
					       	$resultALL=$outputPTPC ;
					          }
					///========(12)===================================
					if($_POST['C_tens']=='1futurePerfectContinuous')  
				    {
					$check="";	
				    $broken1 = explode (' ',$Present);
                    foreach($broken1 as $i)
			        {
					 if($i=='will')
					{
					$outputPTPC.='had';	
					$outputPTPC.=" ";
					$i="";
					$NoNot=1;
					} 	
					if($i=='have')
					{
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
				                       $outputPTPC.=$i;
								       $outputPTPC.= " ";
									 
					  
					          }
					       	   $resultALL=$outputPTPC ;
					          }	
				   ///===========================================			
				  }//
				  }//
				  ///==========(End of Past Perfect Continuous)=================================

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
					       		$resultALL=$outputFI ;
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
					       	$resultALL=$outputFI ;
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
					       $resultALL=$outputFI ;
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
					       	$resultALL=$outputFI ;
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
					       	$resultALL=$outputFI ;
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
					       	$resultALL=$outputFI ;
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
					       	$resultALL=$outputFI ;
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
					       	$resultALL=$outputFI ;
					       }
					     ///========(9)=======================================  
					      if($_POST['C_tens']=='1futureIndifinent')  
				             {
					       	   $resultALL=$Present ;
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
					       	  $resultALL=$outputFI ;
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
					       	$resultALL=$outputFI ;
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
					       	 $resultALL=$outputFI ;
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
					       		$resultALL=$outputFC;    
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
					       		$resultALL=$outputFC ;    
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
					       		$resultALL=$outputFC ;    
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
					       		$resultALL=$outputFC ;    
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
					       		$resultALL=$outputFC ;
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
					       		$resultALL=$outputFC;    
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
					       		$resultALL=$outputFC ;    
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
					       		$resultALL=$outputFC;    
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
					       		$resultALL=$outputFC ;    
					      }       	
					
					     ///========(10)=======================================  
			    	if($_POST['C_tens']=='1futureContinuous')  
				    {
			        $resultALL=$Present;
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
					       		$resultALL=$outputFC ;    
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
					       		$resultALL=$outputFC ;    
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
					       		$resultALL=$outputFP ;
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
					       	$resultALL=$outputFP ;
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
					       	$resultALL=$outputFP;
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
					       	$resultALL=$outputFP ; 
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
					       	$resultALL=$outputFP ;
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
					       	$resultALL=$outputFP;
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
					       	$resultALL=$outputFP ;
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
					       	 $resultALL=$outputFP;
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
					       	 $resultALL=$outputFP;
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
					       	$resultALL=$outputFP ;
					           }
			  ///============(11)===============================
				    if($_POST['C_tens']=='1futurePerfect')  
				    {
					$resultALL=$Present ;
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
					       		$resultALL=$outputFP ;	
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
					       		$resultALL=$outputFPC ;
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
					       $resultALL=$outputFPC ;
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
					         $resultALL=$outputFPC;
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
					         $resultALL=$outputFPC ;
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
					       		$resultALL=$outputFPC ;
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
					        $resultALL=$outputFPC ;
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
					       		$resultALL=$outputFPC;
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
					       		$resultALL=$outputFPC ;
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
					       	$resultALL=$outputFPC ;
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
					          $resultALL= $outputFPC  ;
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
					       	  $resultALL=$outputFPC ;
					           }
				 ////=======(12)=====================================	 
				 if($_POST['C_tens']=='1futurePerfectContinuous')  
				    {
					 $resultALL=$Present ;
					 }
				  	       ///===========================================
				           }  //end of future perfect continuous
				          }  // end of if condition of check
?>


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
						<center><h1></h1></center>
					</div>
			<!--			<div class="panel-body">
						<form class="form-horizontal" action="index.php" method="post">
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
                         <option  value="1futureIndifinent"/>future indefinite </option>
                         <option  value="1futureContinuous"/>future Continuous </option>
                         <option  value="1futurePerfect"/> future Perfect</option>
                         <option  value="1futurePerfectContinuous"/> future Perfect Continuous</option>
                         
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
						<!--	</div><!-- closed form-group -->
							<!--<div class="form-group">
								<label class="col-md-3 control-label" for="first_name">Enter Tense*</label>
								<div class="col-md-9">
									<input id="Present" name="Present" type="text" value="" size="40" class="form-control" />
								</div><!-- closed col-md-9 -->
						<!--	</div><!-- closed form-group -->
						<!--	<div class="form-group">
								<label class="col-md-3 control-label">Convert_To*</label>
								<div class="col-md-9">
						   <select class="form-control" name="P_tens" size="">
                         <option  value=""/>Select Tense Which You Convert To </option>
                         <option   class="alert-success"> Simple Sentens </option>
                         <option  value="futureIndifinent"/>future indefinite </option>
                         <option  value="futureContinuous"/>future Continuous </option>
                         <option  value="futurePerfect"/> future Perfect</option>
                         <option  value="futurePerfectContinuous"/> future Perfect Continuous</option>
                         
                         <option   class="alert-success"> Interrogative Sentens </option>
                         <option  value="FIndifinentInterrogative"/>Future indefinite </option>
                         <option  value="FContinuousInterrogative"/>Future Continuous </option>
                         <option  value="FPerfectInterrogative"/> Future Perfect</option>
                         <option  value="FPerfectContinuousInterrogative"/> Future Perfect Continuous</option>
                         </select>
								</div><!-- col-md-9 -->
						<!--	</div><!-- closed form-group -->
						<!--	<div class="form-group">
								<label class="col-sm-3 control-label"></label>
								<div class="col-md-9">
						<input type="submit"  id="sumit" name="submit" value="Convert Tense " class="btn btn-success btn-block form-control">
								</div><!-- closed col-md-9 -->
							<!--</div><!-- closed form-group -->
						<!--</form>
				<!--	</div>
				</div>
			</div>
			<div class="col-md-4">
			<img src="image/unnamed.png" style="margin-top: 20px;"/>	
			</div>
            <div class="box">
            <h4>Tense Convert</h4>
     <?php
     echo"$option ";
   echo" $show ";
   echo"<font color=#00FF33> $resultALL </font> ";
    echo"<font color=#ffffff> $invalid </font> ";

   ?>
          </div>
		</div>
	</div>
</div>-->
<img src="image/img_til.png" style=" margin-left:450px">
<?php //include 'footer.php';           ?>
<h1>Home Page Is Under Development</h1>
<footer id="footer" class="navbar navbar-inverse" style="margin-left: 15px; margin-right:-376px;  height: 150px; margin-top: -15px; background-color:#0c962f; ">
<div class="container-fluid">
 <p class="navbar-text pull-left" style="margin-top: 0px; color: #ffffff;">
 	Library (created by Nazim Zia)
 </p><!--end text-->
 <div id="share" style="margin-top: 40px;">
 	<a href="#" class="btn btn-success pull-right">Share</a>
 </div>
</div><!--end container-fluid-->
</footer><!--end footer-->

</body>
</html>





