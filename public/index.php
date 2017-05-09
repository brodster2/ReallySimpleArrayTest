<?php

/**
 * A simple array test for PHP developers. There are numerous ways to complete
 * the tasks involved in this test and there are no right, or perfect, answers.
 * The test though will reveal roughly how knowledgeable and experienced a
 * developer is.
 *
 * For more information on how to complete this test please read the ReadMe.
 *
 * @author Rob Waller <rdwaller1984@gmail.com>
 */

require_once(__DIR__ . '/../src/Functions.php');
$userArray = require_once(__DIR__ . '/../src/UserArray.php');

dump($userArray);

/**
 * Task One
 *
 * From the $userArray array create a new array that only includes users under
 * the age of 30.
 */

/**
* Callback function returns users with an age less than 30 from $userArray.
*
* @param array $arrayItem, the current iterated array element of $userArray.
*
* @return two dimensional array $usersUnderThirty.
*/
$usersUnderThirty = array_filter($userArray, function ($arrayItem){
    return $arrayItem['age'] < 30;
});

echo "\n----- Users under 30 -----\n"; //Seperate output and make easier to read
dump($usersUnderThirty);

/**
 * Task Two
 *
 * From the $userArray array create a new array that adds a new field called
 * full_name to each array item. This field should concatenate the values of the
 * forename and surname fields.
 */

/**
* Callback function appends new key: 'full_name' to all elements of $userArray
* with the value of forename and the surname values of the current $userArray element
*
* array_map applies callback function to all elements of $userArray.
*
* @param array $arrayItem, the current iterated array element of $userArray.
*
* @return two dimensional array $usersWithFullName.
*/

$usersWithFullName = array_map(function ($arrayItem){
    return $arrayItem + ['full_name' => $arrayItem['forename'] . ' ' . $arrayItem['surname']];
}, $userArray);

echo "\n----- Full Name Field Added -----\n";
dump($usersWithFullName);

/**
 * Task Three
 *
 * From the $userArray array create a new array where each array item has had
 * the email field removed.
 */

/**
* Callback function removes the 'email' field from a $userArray associative array.
*
* array_map applies callback function to all elements of $userArray.
*
* @param array $arrayItem, the current iterated array element of $userArray.
*
* @return two dimensional array $usersWithEmailRemoved.
*/

$usersWithEmailRemoved = array_map(function ($arrayItem){
    unset($arrayItem['email']);
    return $arrayItem;
}, $userArray);

print "\n----- Email Field Removed -----\n";
dump($usersWithEmailRemoved);
