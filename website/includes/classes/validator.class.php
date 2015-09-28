<?php
/*	======================================================
	Diderson Baka Web Developer Developer - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka  and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2014 Diderson Baka Web Developer 
	======================================================	*/

class Validator {		
	
	/*******************************************************/
	/*******************************************************/	
	 var $errors; 
	 var $formData;
	 
	function __construct( $form_data ){
		$this->formData = $form_data;
		$this->errorPostfix = '_error';
		$this->errorPostfix = '';		
	}

/*******************************************************/
//General Validation function
/*
	Class has two function:
		function Required() -  Used to check required fields.
		function Validate() -  Used to validate fields that are not required.
	
	example code:
	
	$validatorObj = new Validator( $_POST ); //Could be $_GET.
	$validatorObj->validate( 'email', 'email_address', 'Please enter a valid email address.' );
	
	where: 
		'email' - Validation function.
		'email_address' - the element name you're validating.
		'Please enter a valid email address' - The description.
*/
/*******************************************************/	
	function Required( $function_alias, $element_name, $description, $max_length = 0 ) {
					
		if( '' != $function_alias && '' != $element_name ) {
		 	
			switch( $function_alias ) {
				
				case 'email': 
					$this->ValidateEmail( $this->formData[$element_name], $element_name, $description);
					break;
					
				case 'number':
					$this->ValidateNumber( $this->formData[$element_name], $element_name, $description );
					break;
					
				case 'integer':
					$this->ValidateInteger( $this->formData[$element_name], $element_name, $description );
					break;															
					
				case 'array':
					$this->ValidateTextInArray( $this->formData[$element_name], $element_name, $description );
					break;	
				
				case 'date':
					$this->ValidateDate( $this->formData[$element_name],$element_name,  $description );
					break;
					
				case 'dates':
					$this->ValidateTwoDates( $this->formData[$element_name['date1']], $this->formData[$element_name['date2']], $element_name['date1'], $element_name['date2'], $description );	
					break;
				case 'maxlength':
					$this->ValidateNumberOfCharacters( $this->formData[$element_name['element_name']], $element_name, $element_name['max_charaters'], $description);
					break;
					
				case 'minlength':
					$this->ValidateNumberOfCharacters( $this->formData[$element_name['element_name']], $element_name, $element_name['max_charaters'], $description);
					break;					
					
				case 'equalTo':
					if(is_array( $element_name ) && sizeof( $element_name) > 0 ) {
						$this->ValidateEqualTo(  $this->formData[$element_name['first_element']], $this->formData[$element_name['second_element']], $element_name,$description );
					}
					break;		
					
				case 'range':
					if(is_array( $form_data) && sizeof( $form_data ) > 0 ) {
						$this->ValidateRange( $this->formData[$element_name['element_name']], $this->formData[$element_name['min']], $this->formData[$element_name['max']], $element_name, $description = '' );	
					}					
					break;
										
				case 'onoffstatus':
						$this->ValidateOnOffStatus( $this->formData[$element_name] , $element_name, $description);
					break;					
				case 'checkbox':
						$this->ValidateCheckbox( $this->formData[$element_name] , $element_name, $description);
					break;
					
				case 'checkboxes':
						$formData = ( is_array( $this->formData[$element_name] ) && $this->formData[$element_name] != '' ) ? $this->formData[$element_name]: array( );						
						$this->ValidateMultipleCheckbox( $formData, $element_name, $description, $max_length );
					break;								
					
				case 'telephone':
						$this->ValidateTelephone( $this->formData[$element_name] , $element_name, $description);
					break;
					
				case 'text':	
				default:
					$this->ValidateTextOnly( $this->formData[$element_name], $element_name, $description, $max_length );	
					break;
			}
		}
	}
/*******************************************************/
//Validate inputs that are not required.
/*******************************************************/
	function Validate( $function_alias, $element_name, $description ) {
						
			if( '' != $function_alias && '' != $element_name && $this->formData[ $element_name ] != '' ) {
				$this->Required( $function_alias, $element_name, $description );
			}
		}
/*******************************************************/
//General Function to validate empty fields.
/*******************************************************/
    function ValidateGeneral( $the_input, $description = '' ){
        if ( trim( $the_input ) != "" ) {
            return true;
        }else{
            $this->errors[] = $description;
            return false;
        }
    }
/*******************************************************/	    
 // Validate array
/*******************************************************/
	function ValidateTextInArray( $the_array, $element_name, $description ) {
		
		if( '' == $description  ) {
			$description = "This field is required.";
		}
		
		if( is_array( $the_array ) && sizeof( $the_array ) > 0 ) {
			return true;
		} else {

			$this->errors[$element_name.$this->errorPostfix] = $description;
			return false;
			
		}

	}
	
/*******************************************************/
// Validate Max Size
/*******************************************************/
function ValidateNumberOfCharacters( $the_input, $element_name, $number_of_characters, $description = '' ) {
		
		if( '' == $description  ) {
			$description = "Please enter no more than ".$number_of_characters." characters.";
		}

		$result = strlen( $the_input );

		if ($result <= $number_of_characters){
			return true;
		}else{
			$this->errors[$element_name['element_name'].$this->errorPostfix] = $description;
			return false;
		}

}

/*******************************************************/
 // Validate text only
/*******************************************************/
    function ValidateTextOnly( $the_input, $element_name, $description = '', $max_length = 0){

		$max_length = intval( $max_length );
		
		if( '' == $description  ) {
			$description = "This field is required.";
		}
		//$result = ereg ("^[A-Za-z0-9\_ ]+$", $the_input );
        if ( trim( $the_input ) != '' ){
			
			if( $max_length > 0 && strlen( trim( $the_input ) ) > $max_length  ) {
	            $this->errors[$element_name.$this->errorPostfix] = $description;
				// $this->errors[] = $description;				
			} else {
	            return true;
			}
        }else{
            $this->errors[$element_name.$this->errorPostfix] = $description;
			// $this->errors[] = $description;
            return false;
        }
    }
	
/*******************************************************/
/*******************************************************/
    function ValidateTelephone( $the_input, $element_name, $description = '') {

		if( '' == $description  ) {
			$description = "Please enter telephone number.";
		}
		$result = 0;

		$the_input = str_replace(" ", "", $the_input);
		$check_plus	 = substr($the_input, 0,1);
		$check_numbers = $the_input;
		if( $check_plus == '+') {
			$check_numbers = substr($the_input, 1);
		}
		$numbers_array = array();
		$numbers_array = explode('(',$check_numbers);

		$number_array_size = sizeof( $numbers_array);
		if( $number_array_size == 1  ) {
			$check_string = '';
			$check_string = $numbers_array[0];
			if( is_numeric( $check_string) ) {
				$result = 1;
			}	

		} else if(  $number_array_size == 2)  {
			//check if nu
			$check_closing_bracket = array();

			$check_closing_bracket = explode(')',$numbers_array[1]);
			if(sizeof($check_closing_bracket ) == 2 ) {
				if( is_numeric($check_closing_bracket[0]) && is_numeric($check_closing_bracket[1]) ) {
					$result = 1;
				}
			}
		} 
		if( $result == 1) {
			
            return true;
        }else{
            $this->errors[$element_name.$this->errorPostfix] = $description;
            return false;
        }


    }
	
/*******************************************************/	    
//Validate text only, no spaces allowed
/*******************************************************/	
    function ValidateTextOnlyNoSpaces( $the_input,$element_name,  $description = '' ){
		
		if( '' == $description  ) {
			$description = "This field is required.";
		}
		
        $result = ereg ("^[A-Za-z0-9]+$", $the_input );
        if ($result){
            return true;
        }else{
            $this->errors[$element_name.$this->errorPostfix] = $description;
			// $this->errors[] = $description;
            return false;
        }
    }
/*******************************************************/	        
// Validate email address
/*******************************************************/		
    function ValidateEmail( $the_email, $element_name, $description = '' ){
		
		if( '' == $description  ) {
			$description = "Please enter a valid email address.";
		}
			
//		$result = ereg ("^[^@ ]+@[^@ ]+\.[^@ \.]+$", $the_email ); // deprecated
		$result = preg_match ("/^[^@ ]+@[^@ ]+\.[^@ \.]+$/i", $the_email ); // deprecated				
			
		if ($result){
			return true;
		}else{
			$this->errors[$element_name.$this->errorPostfix] = $description;
			//  $this->errors[] = $description;
			return false;
		}
            
    }
/*******************************************************/	   
// Validate On/Off Status
/*******************************************************/
	function ValidateOnOffStatus(  $the_input, $element_name, $description = ''){
	
		if( '' == $description  ) {
			$description = "This field is required.";
		}

        if ( $the_input == '1' || $the_input == '0' ) {
            return true;
        }else{
            $this->errors[$element_name.$this->errorPostfix] = $description;
            return false;
        }
    }
		
/*******************************************************/	   
// Validate Checkbox
/*******************************************************/
	function ValidateCheckbox(  $the_input, $element_name, $description = ''){
	
		if( '' == $description  ) {
			$description = "This field is required.";
		}

        if ( $the_input == '1' && $the_input != ''){
            return true;
        }else{
            $this->errors[$element_name.$this->errorPostfix] = $description;
            return false;
        }
    }
	
/*******************************************************/	   
// Validate Multiple Checkbox
/*******************************************************/
	function ValidateMultipleCheckbox(  $the_checkboxes, $element_name, $description = '', $max_length = 0){
	
		if( '' == $description  ) {
			$description = "This field is required.";
		}

		if( !is_array( $the_checkboxes ) || sizeof( $the_checkboxes ) == 0 || ( $max_length > 0 && sizeof( $the_checkboxes ) > $max_length ) ) {			
            $this->errors[$element_name.$this->errorPostfix] = $description;
            return false;			
        }else{
			
			$found = false;
			for($t=0;$t<sizeof($the_checkboxes);$t++) {
				if( trim( $the_checkboxes[$t] ) != '' ) {
					$found = true;
					break;
				}
			}
			
			if( !$found ) {
    	        $this->errors[$element_name.$this->errorPostfix] = $description;
	            return false;							
			} else {				
	            return true;			
			}
        }
    }	
		
/*******************************************************/
// Validate numbers only
/*******************************************************/
    function ValidateNumber($input_field, $element_name, $description = ''){
		
		if( '' == $description  ) {
			$description = "Please enter a valid number.";
		}
        if (is_numeric($input_field)) {
            return true; 
        }else{
            $this->errors[$element_name.$this->errorPostfix] = $description;
		    // $this->errors[] = $description;
            return false; 
        }
    }
/*******************************************************/
// Validate integer numbers only
/*******************************************************/
    function ValidateInteger($input_field, $element_name, $description = ''){
		
		if( '' == $description  ) {
			$description = "Please enter a valid number.";
		}
        if (intval($input_field) > 0) {
            return true; 
        }else{
            $this->errors[$element_name.$this->errorPostfix] = $description;
		    // $this->errors[] = $description;
            return false; 
        }
    }	
/*******************************************************/
// Validate date
/*******************************************************/	
    function ValidateDate($thedate, $element_name, $description = ''){
		

		if( '' == $description  ) {
			$description = "Please enter a valid date.";
		}

        if (strtotime($thedate) === false) {
            $this->errors[$element_name.$this->errorPostfix ] = $description;
            return false;
        }else{
			$checking_valid_date = explode('-',$thedate );
			
			if( is_array( $checking_valid_date ) && sizeof( $checking_valid_date) > 0  ) {
				$year = $checking_valid_date[0];
				$month = $checking_valid_date[1];
				$date = $checking_valid_date[2];

				if ( checkdate($month,$date,$year) ) {
					 return true;
				} else {
					$this->errors[$element_name.$this->errorPostfix ] = $description;
					return false;
				}
			} else {
				$this->errors[$element_name.$this->errorPostfix ] = $description;
				return false;
			}
				
           
        }
    }
/*******************************************************/	    
/*******************************************************/	    
	function ValidateTwoDates( $date1, $date2, $element_name1, $element_name2, $description = '' ) {

		if( '' == $description  ) {
			$description = "Please enter a valid date.";
		}	
		
		if (strtotime( $date1 ) === false) {
            $this->errors[$element_name1.$this->errorPostfix ] = $description;
            return false;
		}
		
		if (strtotime( $date2 ) === false) {
            $this->errors[$element_name2.$this->errorPostfix ] = $description;
            return false;
		}

		if( strtotime( $date1 ) != false && strtotime( $date2 ) != false ) {
		
			if( $date1 <= $date2 ) {
				return true;
			} else {
				$this->errors[$element_name2.$this->errorPostfix ] = $description;
				return false;
			}
        }

	}
/*******************************************************/
// Check whether any errors have been found (i.e. validation has returned false)
/*******************************************************/		
    function FoundErrors() {
        if (count($this->errors) > 0){
            return true;
        }else{
            return false;
        }
    }

/*******************************************************/		
// Return a string containing a list of errors found,
// Seperated by a given deliminator
/*******************************************************/			
    function ListErrors(){

		return $this->errors;
    }
/*******************************************************/
// Manually add something to the list of errors
/*******************************************************/
    function AddError($description){
        $this->errors[] = $description;
    }    

/*******************************************************/
// Checks if the values are the same
// Useful for passwords.
/*******************************************************/
	function ValidateEqualTo( $input_field, $second_input_field, $element_name, $description = '' ) {

			if( '' == $description  ) {
				$description = "Please enter the same value again.";
			}

			if( strcmp($input_field,$second_input_field) == 0 && '' != trim( $input_field) && '' != trim($second_input_field )) {
				return true;	
			} else {
				$this->errors[$element_name['second_element'].'_equalTo_error'] = $description;
				//$this->errors[] = $description;
				return false;	
			}
	}
/*******************************************************/
// Checks if the number entered is between the specified range
/*******************************************************/
	function ValidateRange( $input_field, $min_field,  $max_field, $element_name,  $description = '' ) {
	
		if( '' == $description  ) {
			$description = "Please enter a value between ".$min_field." and ".$max_field.".";
		}

		if( is_numeric( $input_field ) ) {
			
			if( $input_field >= $min_field && $input_field <= $max_field ) {
				return true;	
			} else {
				$this->errors[ $element_name['element_name'].'_range_error' ] = $description;
				//  $this->errors[] = $description;
			}
		} else {
			$this->errors[$element_name['element_name'].$this->errorPostfix] = $input_field.' needs to be an integer value.';
			//$this->errors[] = $input_field.' needs to be an integer value.';
			return false;
		}
	}
}
?>