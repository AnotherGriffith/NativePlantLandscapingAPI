<?php
 /**
 * api.php is a sample API file to be called via AJAX to 
 * deliver the contents of 2 JSON files, one of which orders the 
 * data by plant type, the other by name
 *
 * The page can be called via AJAX either via GET or POST, using a variable 
 * named "cat":
 *
 * <code>
 * api.php?cat=planttype
 * </code>
 *
 * In the example above, the parameter cat is loaded with the string "box" 
 * which will indicate to the API to load the JSON file containing 
 * box office results.
 *
 * @package plant-web-service
 * @author Katy Griffith
 * @version 1.00 2015/28/15
 * @link https://github.com/AnotherGriffith/plant-web-service 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see index.htm
 * @todo none
 */

if(isset($_REQUEST['cat']))
{//check to be sure data has been transmitted via GET or POST
	switch($_REQUEST['cat'])
	{//determine contents of 'cat'
		case "PlantType":
			include('data/plantsByType.json'); //"box" orders by box office results
			break;
		default:
			include('data/plantsByCommonName.json'); //default orders by year
	}
}else{//if not data sent, inform calling application
	echo "Incorrect parameter sent";
}
