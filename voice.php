<?php

if (isset($_POST['command'])){

        $command = $_POST['command'];

        $output = shell_exec('sudo voicecommand -I "'.$command.'"');

        if (strpos($output, "command") === false) {
                $result = array("success" => "false", "message" => "Command not found");
        }else{
                $result = array("success" => "true", "message" => "Command found");
        }

}else{
     $result = array("success" => "false", "message" => "No command posted");
}
echo json_encode($result);

?>
