<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Model\Country;
    

class CountriesTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		
    	$insert_arr = array();
    	$date = Carbon::now()->toDateTimeString();

    	$insert_arr = [
    		[	'name' => "Afghanistan",
    			'code' =>93,
    			'short_name' =>'AF',    			
    			'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
    		],

			[
				'name' => "Albania",
				'code' =>355,
				'short_name' =>'AL',				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Algeria",
				'code' =>213,
				'short_name' =>'DZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "American Samoa",
				'code' =>1684,
				'short_name' =>'AS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  			
			],

			[
				'name' => "Andorra",
				'code' =>376,
				'short_name' =>'AD',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Angola",
				'code' =>244,
				'short_name' =>'AO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Anguilla",
				'code' =>1264,
				'short_name' =>'AI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Antarctica",
				'code' =>0,
				'short_name' =>'AQ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Antigua And Barbuda",
				'code' =>1268,
				'short_name' =>'AG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Argentina",
				'code' =>54,
				'short_name' =>'AR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Armenia",
				'code' =>374,
				'short_name' =>'AM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Aruba",
				'code' =>297,
				'short_name' =>'AW',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Australia",
				'code' =>61,
				'short_name' =>'AU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Austria",
				'code' =>43,
				'short_name' =>'AT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Azerbaijan",
				'code' =>994,
				'short_name' =>'AZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Bahamas The",
				'code' =>1242,
				'short_name' =>'BS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Bahrain",
				'code' =>973,
				'short_name' =>'BH',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Bangladesh",
				'code' =>880,
				'short_name' =>'BD',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Barbados",
				'code' =>1246,
				'short_name' =>'BB',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Belarus",
				'code' =>375,
				'short_name' =>'BY',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Belgium",
				'code' =>32,
				'short_name' =>'BE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Belize",
				'code' =>501,
				'short_name' =>'BZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Benin",
				'code' =>229,
				'short_name' =>'BJ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Bermuda",
				'code' =>1441,
				'short_name' =>'BM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Bhutan",
				'code' =>975,
				'short_name' =>'BT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Bolivia",
				'code' =>591,
				'short_name' =>'BO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Bosnia and Herzegovina",
				'code' =>387,
				'short_name' =>'BA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Botswana",
				'code' =>267,
				'short_name' =>'BW',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Bouvet Island",
				'code' =>0,
				'short_name' =>'BV',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  				
			],

			[
				'name' => "Brazil",
				'code' =>55,
				'short_name' =>'BR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "British Indian Ocean Territory",
				'code' =>246,
				'short_name' =>'IO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Brunei",
				'code' =>673,
				'short_name' =>'BN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Bulgaria",
				'code' =>359,
				'short_name' =>'BG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Burkina Faso",
				'code' =>226,
				'short_name' =>'BF',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  					
			],

			[
				'name' => "Burundi",
				'code' =>257,
				'short_name' =>'BI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Cambodia",
				'code' =>855,
				'short_name' =>'KH',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Cameroon",
				'code' =>237,
				'short_name' =>'CM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Canada",
				'code' =>1,
				'short_name' =>'CA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Cape Verde",
				'code' =>238,
				'short_name' =>'CV',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Cayman Islands",
				'code' =>1345,
				'short_name' =>'KY',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  			
			],

			[
				'name' => "Central African Republic",
				'code' =>236,
				'short_name' =>'CF',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Chad",
				'code' =>235,
				'short_name' =>'TD',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Chile",
				'code' =>56,
				'short_name' =>'CL',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "China",
				'code' =>86,
				'short_name' =>'CN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Christmas Island",
				'code' =>61,
				'short_name' =>'CX',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  	
			],

			[
				'name' => "Cocos (Keeling) Islands",
				'code' =>672,
				'short_name' =>'CC',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Colombia",
				'code' =>57,
				'short_name' =>'CO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Comoros",
				'code' =>269,
				'short_name' =>'KM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Congo",
				'code' =>242,
				'short_name' =>'CG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Congo The Democratic Republic Of The",
				'code' =>242,
				'short_name' =>'CD',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Cook Islands",
				'code' =>682,
				'short_name' =>'CK',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  					
			],

			[
				'name' => "Costa Rica",
				'code' =>506,
				'short_name' =>'CR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Cote D Ivoire (Ivory Coast)",
				'code' =>225,
				'short_name' =>'CI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Croatia (Hrvatska)",
				'code' =>385,
				'short_name' =>'HR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Cuba",
				'code' =>53,
				'short_name' =>'CU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Cyprus",
				'code' =>357,
				'short_name' =>'CY',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Czech Republic",
				'code' =>420,
				'short_name' =>'CZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  			
			],

			[
				'name' => "Denmark",
				'code' =>45,
				'short_name' =>'DK',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Djibouti",
				'code' =>253,
				'short_name' =>'DJ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Dominica",
				'code' =>1767,
				'short_name' =>'DM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Dominican Republic",
				'code' =>1809,
				'short_name' =>'DO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2, 
			],

			[
				'name' => "East Timor",
				'code' =>670,
				'short_name' =>'TP',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Ecuador",
				'code' =>593,
				'short_name' =>'EC',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Egypt",
				'code' =>20,
				'short_name' =>'EG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "El Salvador",
				'code' =>503,
				'short_name' =>'SV',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Equatorial Guinea",
				'code' =>240,
				'short_name' =>'GQ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Eritrea",
				'code' =>291,
				'short_name' =>'ER',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Estonia",
				'code' =>372,
				'short_name' =>'EE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Ethiopia",
				'code' =>251,
				'short_name' =>'ET',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "External Territories of Australia",
				'code' =>61,
				'short_name' =>'XA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Falkland Islands",
				'code' =>500,
				'short_name' =>'FK',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  	
			],

			[
				'name' => "Faroe Islands",
				'code' =>298,
				'short_name' =>'FO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  				
			],

			[
				'name' => "Fiji Islands",
				'code' =>679,
				'short_name' =>'FJ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  					
			],

			[
				'name' => "Finland",
				'code' =>358,
				'short_name' =>'FI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "France",
				'code' =>33,
				'short_name' =>'FR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "French Guiana",
				'code' =>594,
				'short_name' =>'GF',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  				
			],

			[
				'name' => "French Polynesia",
				'code' =>689,
				'short_name' =>'PF',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  	
			],

			[
				'name' => "French Southern Territories",
				'code' =>0,
				'short_name' =>'TF',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Gabon",
				'code' =>241,
				'short_name' =>'GA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Gambia The",
				'code' =>220,
				'short_name' =>'GM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Georgia",
				'code' =>995,
				'short_name' =>'GE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Germany",
				'code' =>49,
				'short_name' =>'DE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Ghana",
				'code' =>233,
				'short_name' =>'GH',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Gibraltar",
				'code' =>350,
				'short_name' =>'GI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Greece",
				'code' =>30,
				'short_name' =>'GR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Greenland",
				'code' =>299,
				'short_name' =>'GL',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Grenada",
				'code' =>1473,
				'short_name' =>'GD',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Guadeloupe",
				'code' =>590,
				'short_name' =>'GP',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Guam",
				'code' =>1671,
				'short_name' =>'GU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Guatemala",
				'code' =>502,
				'short_name' =>'GT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Guernsey and Alderney",
				'code' =>44,
				'short_name' =>'XU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Guinea",
				'code' =>224,
				'short_name' =>'GN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Guinea-Bissau",
				'code' =>245,
				'short_name' =>'GW',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  				
			],

			[
				'name' => "Guyana",
				'code' =>592,
				'short_name' =>'GY',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Haiti",
				'code' =>509,
				'short_name' =>'HT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Heard and McDonald Islands",
				'code' =>0,
				'short_name' =>'HM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Honduras",
				'code' =>504,
				'short_name' =>'HN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Hong Kong S.A.R.",
				'code' =>852,
				'short_name' =>'HK',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  	
			],

			[
				'name' => "Hungary",
				'code' =>36,
				'short_name' =>'HU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Iceland",
				'code' =>354,
				'short_name' =>'IS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "India",
				'code' =>91,
				'short_name' =>'IN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 1,  												
			],

			[
				'name' => "Indonesia",
				'code' =>62,
				'short_name' =>'ID',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Iran",
				'code' =>98,
				'short_name' =>'IR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Iraq",
				'code' =>964,
				'short_name' =>'IQ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Ireland",
				'code' =>353,
				'short_name' =>'IE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Israel",
				'code' =>972,
				'short_name' =>'IL',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Italy",
				'code' =>39,
				'short_name' =>'IT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Jamaica",
				'code' =>1876,
				'short_name' =>'JM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Japan",
				'code' =>81,
				'short_name' =>'JP',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Jersey",
				'code' =>44,
				'short_name' =>'XJ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Jordan",
				'code' =>962,
				'short_name' =>'JO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Kazakhstan",
				'code' =>7,
				'short_name' =>'KZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Kenya",
				'code' =>254,
				'short_name' =>'KE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Kiribati",
				'code' =>686,
				'short_name' =>'KI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Korea North",
				'code' =>850,
				'short_name' =>'KP',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Korea South",
				'code' =>82,
				'short_name' =>'KR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Kuwait",
				'code' =>965,
				'short_name' =>'KW',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Kyrgyzstan",
				'code' =>996,
				'short_name' =>'KG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Laos",
				'code' =>856,
				'short_name' =>'LA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Latvia",
				'code' =>371,
				'short_name' =>'LV',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Lebanon",
				'code' =>961,
				'short_name' =>'LB',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Lesotho",
				'code' =>266,
				'short_name' =>'LS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Liberia",
				'code' =>231,
				'short_name' =>'LR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Libya",
				'code' =>218,
				'short_name' =>'LY',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Liechtenstein",
				'code' =>423,
				'short_name' =>'LI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  				
			],

			[
				'name' => "Lithuania",
				'code' =>370,
				'short_name' =>'LT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Luxembourg",
				'code' =>352,
				'short_name' =>'LU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Macau S.A.R.",
				'code' =>853,
				'short_name' =>'MO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  					
			],

			[
				'name' => "Macedonia",
				'code' =>389,
				'short_name' =>'MK',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Madagascar",
				'code' =>261,
				'short_name' =>'MG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Malawi",
				'code' =>265,
				'short_name' =>'MW',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Malaysia",
				'code' =>60,
				'short_name' =>'MY',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Maldives",
				'code' =>960,
				'short_name' =>'MV',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Mali",
				'code' =>223,
				'short_name' =>'ML',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Malta",
				'code' =>356,
				'short_name' =>'MT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Man (Isle of)",
				'code' =>44,
				'short_name' =>'XM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  				
			],

			[
				'name' => "Marshall Islands",
				'code' =>692,
				'short_name' =>'MH',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  	
			],

			[
				'name' => "Martinique",
				'code' =>596,
				'short_name' =>'MQ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Mauritania",
				'code' =>222,
				'short_name' =>'MR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Mauritius",
				'code' =>230,
				'short_name' =>'MU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Mayotte",
				'code' =>269,
				'short_name' =>'YT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Mexico",
				'code' =>52,
				'short_name' =>'MX',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Micronesia",
				'code' =>691,
				'short_name' =>'FM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Moldova",
				'code' =>373,
				'short_name' =>'MD',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Monaco",
				'code' =>377,
				'short_name' =>'MC',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Mongolia",
				'code' =>976,
				'short_name' =>'MN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Montserrat",
				'code' =>1664,
				'short_name' =>'MS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Morocco",
				'code' =>212,
				'short_name' =>'MA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Mozambique",
				'code' =>258,
				'short_name' =>'MZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Myanmar",
				'code' =>95,
				'short_name' =>'MM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Namibia",
				'code' =>264,
				'short_name' =>'NA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Nauru",
				'code' =>674,
				'short_name' =>'NR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Nepal",
				'code' =>977,
				'short_name' =>'NP',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Netherlands Antilles",
				'code' =>599,
				'short_name' =>'AN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Netherlands The",
				'code' =>31,
				'short_name' =>'NL',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  		
			],

			[
				'name' => "New Caledonia",
				'code' =>687,
				'short_name' =>'NC',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  				
			],

			[
				'name' => "New Zealand",
				'code' =>64,
				'short_name' =>'NZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Nicaragua",
				'code' =>505,
				'short_name' =>'NI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Niger",
				'code' =>227,
				'short_name' =>'NE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Nigeria",
				'code' =>234,
				'short_name' =>'NG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Niue",
				'code' =>683,
				'short_name' =>'NU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Norfolk Island",
				'code' =>672,
				'short_name' =>'NF',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  			
			],

			[
				'name' => "Northern Mariana Islands",
				'code' =>1670,
				'short_name' =>'MP',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Norway",
				'code' =>47,
				'short_name' =>'NO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Oman",
				'code' =>968,
				'short_name' =>'OM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Pakistan",
				'code' =>92,
				'short_name' =>'PK',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Palau",
				'code' =>680,
				'short_name' =>'PW',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Palestinian Territory Occupied",
				'code' =>970,
				'short_name' =>'PS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Panama",
				'code' =>507,
				'short_name' =>'PA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Papua new Guinea",
				'code' =>675,
				'short_name' =>'PG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  	
			],

			[
				'name' => "Paraguay",
				'code' =>595,
				'short_name' =>'PY',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Peru",
				'code' =>51,
				'short_name' =>'PE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Philippines",
				'code' =>63,
				'short_name' =>'PH',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Pitcairn Island",
				'code' =>0,
				'short_name' =>'PN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  		
			],

			[
				'name' => "Poland",
				'code' =>48,
				'short_name' =>'PL',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Portugal",
				'code' =>351,
				'short_name' =>'PT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Puerto Rico",
				'code' =>1787,
				'short_name' =>'PR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Qatar",
				'code' =>974,
				'short_name' =>'QA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Reunion",
				'code' =>262,
				'short_name' =>'RE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Romania",
				'code' =>40,
				'short_name' =>'RO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Russia",
				'code' =>70,
				'short_name' =>'RU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Rwanda",
				'code' =>250,
				'short_name' =>'RW',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Saint Helena",
				'code' =>290,
				'short_name' =>'SH',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  					
			],

			[
				'name' => "Saint Kitts And Nevis",
				'code' =>1869,
				'short_name' =>'KN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Saint Lucia",
				'code' =>1758,
				'short_name' =>'LC',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Saint Pierre and Miquelon",
				'code' =>508,
				'short_name' =>'PM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Saint Vincent And The Grenadines",
				'code' =>1784,
				'short_name' =>'VC',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Samoa",
				'code' =>684,
				'short_name' =>'WS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "San Marino",
				'code' =>378,
				'short_name' =>'SM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Sao Tome and Principe",
				'code' =>239,
				'short_name' =>'ST',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Saudi Arabia",
				'code' =>966,
				'short_name' =>'SA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  					
			],

			[
				'name' => "Senegal",
				'code' =>221,
				'short_name' =>'SN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Serbia",
				'code' =>381,
				'short_name' =>'RS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Seychelles",
				'code' =>248,
				'short_name' =>'SC',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Sierra Leone",
				'code' =>232,
				'short_name' =>'SL',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  					
			],

			[
				'name' => "Singapore",
				'code' =>65,
				'short_name' =>'SG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Slovakia",
				'code' =>421,
				'short_name' =>'SK',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Slovenia",
				'code' =>386,
				'short_name' =>'SI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Smaller Territories of the UK",
				'code' =>44,
				'short_name' =>'XG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Solomon Islands",
				'code' =>677,
				'short_name' =>'SB',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  		
			],

			[
				'name' => "Somalia",
				'code' =>252,
				'short_name' =>'SO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "South Africa",
				'code' =>27,
				'short_name' =>'ZA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  					
			],

			[
				'name' => "South Georgia",
				'code' =>0,
				'short_name' =>'GS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  				
			],

			[
				'name' => "South Sudan",
				'code' =>211,
				'short_name' =>'SS',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Spain",
				'code' =>34,
				'short_name' =>'ES',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Sri Lanka",
				'code' =>94,
				'short_name' =>'LK',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Sudan",
				'code' =>249,
				'short_name' =>'SD',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Suriname",
				'code' =>597,
				'short_name' =>'SR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Svalbard And Jan Mayen Islands",
				'code' =>47,
				'short_name' =>'SJ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Swaziland",
				'code' =>268,
				'short_name' =>'SZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Sweden",
				'code' =>46,
				'short_name' =>'SE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Switzerland",
				'code' =>41,
				'short_name' =>'CH',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  						
			],

			[
				'name' => "Syria",
				'code' =>963,
				'short_name' =>'SY',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Taiwan",
				'code' =>886,
				'short_name' =>'TW',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Tajikistan",
				'code' =>992,
				'short_name' =>'TJ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Tanzania",
				'code' =>255,
				'short_name' =>'TZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Thailand",
				'code' =>66,
				'short_name' =>'TH',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

			[
				'name' => "Togo",
				'code' =>228,
				'short_name' =>'TG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  													
			],

			[
				'name' => "Tokelau",
				'code' =>690,
				'short_name' =>'TK',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Tonga",
				'code' =>676,
				'short_name' =>'TO',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Trinidad And Tobago",
				'code' =>1868,
				'short_name' =>'TT',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Tunisia",
				'code' =>216,
				'short_name' =>'TN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Turkey",
				'code' =>90,
				'short_name' =>'TR',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Turkmenistan",
				'code' =>7370,
				'short_name' =>'TM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  					
			],

			[
				'name' => "Turks And Caicos Islands",
				'code' =>1649,
				'short_name' =>'TC',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Tuvalu",
				'code' =>688,
				'short_name' =>'TV',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Uganda",
				'code' =>256,
				'short_name' =>'UG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Ukraine",
				'code' =>380,
				'short_name' =>'UA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "United Arab Emirates",
				'code' =>971,
				'short_name' =>'AE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "United Kingdom",
				'code' =>44,
				'short_name' =>'GB',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  			
			],

			[
				'name' => "United States",
				'code' =>1,
				'short_name' =>'US',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  				
			],

			[
				'name' => "United States Minor Outlying Islands",
				'code' =>1,
				'short_name' =>'UM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Uruguay",
				'code' =>598,
				'short_name' =>'UY',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Uzbekistan",
				'code' =>998,
				'short_name' =>'UZ',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Vanuatu",
				'code' =>678,
				'short_name' =>'VU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Vatican City State (Holy See)",
				'code' =>39,
				'short_name' =>'VA',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Venezuela",
				'code' =>58,
				'short_name' =>'VE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  								
			],

			[
				'name' => "Vietnam",
				'code' =>84,
				'short_name' =>'VN',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  										
			],

			[
				'name' => "Virgin Islands (British)",
				'code' =>1284,
				'short_name' =>'VG',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  	
			],

			[
				'name' => "Virgin Islands (US)",
				'code' =>1340,
				'short_name' =>'VI',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Wallis And Futuna Islands",
				'code' =>681,
				'short_name' =>'WF',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  
			],

			[
				'name' => "Western Sahara",
				'code' =>212,
				'short_name' =>'EH',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  		
			],

			[
				'name' => "Yemen",
				'code' =>967,
				'short_name' =>'YE',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  												
			],

			[
				'name' => "Yugoslavia",
				'code' =>38,
				'short_name' =>'YU',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  							
			],

			[
				'name' => "Zambia",
				'code' =>260,
				'short_name' =>'ZM',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  											
			],

			[
				'name' => "Zimbabwe",
				'code' =>263,
				'short_name' =>'ZW',
				
				'created_at' => $date,
            	'updated_at' => $date,
            	'status' => 2,  									
			],

    	];
    	
    	Country::insert($insert_arr);	
		
	}
}
