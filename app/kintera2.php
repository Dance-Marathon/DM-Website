<?php 



$username = "iancmaccallum";
$password = "hup4652coit";

/*
if (isset($_GET["username"])) {
	$username = $_GET["username"];
} else {
	echo "USERNAME NOT SET";
}

if (isset($_GET["password"])) {
	$password = $_GET["password"];
} else {
	echo "PASSWORD NOT SET";
}
*/


$info = (object) array('sessionID' => null, 
                       'accountID' => 403651,
                       'eventID' => 114670,
                       'username' => $username,
                       'password' => $password,
                       'stats' => null);

$info->sessionID = loginAuth($info->username,$info->password,403651);
/* $info->eventID = getEventID($info->sessionID, $info->accountID); */
/* $info->stats = getUserInfo($info->sessionID, $info->eventID); */

/*
$test = getUserInfo($info->sessionID, $info->eventID);
echo $test;
*/


/*
if ($info->stats->ParticipantName &&
    $info->stats->PersonalRaised &&
    $info->stats->PersonalGoal) {


	echo json_encode($info->stats);
	$user = $info->stats->ParticipantName;
	$raised = $info->stats->PersonalRaised[0];
	$goal = $info->stats->PersonalGoal[0];
	$dict = array("user" => $user, "raised" => $raised, "goal" => $goal);
	echo json_encode($dict);
}else{
  echo "Error";
}

*/


function loginAuth($username, $password, $accountID) {

    $post = http_build_query(array('username' => $username,'password' => $password));
    $postLength = strlen($post);

	echo $post . " length: " . $postLength;
	
	
/*
$ch = curl_init(); 
	
	
	
    curl_setopt($ch, CURLOPT_URL, "https://www.kintera.org/api/Authentication/Login.ashx?accountid=".$accountID);
    
    curl_setopt($ch, CURLOPT_POST, $postLength);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   
    $result = curl_exec($ch);
    echo $result;
    return 4494949;
*/
    /*
if (($result = curl_exec($ch)) === FALSE) {
    	curl_close($ch);
        return false;
    }else{
    	$xml = new SimpleXMLElement($result);
		$sessionID = $xml->SessionId;
		curl_close($ch);
		return $sessionID;
	}
*/

}

/*
function getEventID($sessionID, $accountID) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "http://www.kintera.org/api/friendsaskingfriends/Account.ashx?accountid=".$accountID."&sessionid=".$sessionID);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      if (($result = curl_exec($ch)) === FALSE) {
            echo 'Curl error: ' . curl_error($ch);
            curl_close($ch);
          return false;
      }else{
            $xml = new SimpleXMLElement($result);
            $accountEvents = $xml->AccountEvents;
            $accountEvent = $accountEvents->AccountEvent;
            for ($i = 0; $i < count($accountEvent); $i++) {
                  if ($accountEvent[$i]->EventName == "Dance Marathon at UF 2015") {
                        curl_close($ch);
                        return $accountEvent[$i]->EventID;
                  }
            }
      }
      curl_close($ch);
      return false;
}

function getUserInfo($sessionID, $eventID) {
       $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "http://www.kintera.org/api/FriendsAskingFriends/Info.ashx?eventid=".$eventID."&sessionid=".$sessionID);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      if (($result = curl_exec($ch)) === FALSE) {
            echo 'Curl error: ' . curl_error($ch);
            curl_close($ch);
          return false;
      }else{
            $xml = new SimpleXMLElement($result);
            return $xml;
      }
      curl_close($ch);
      return false;
}
*/

?>