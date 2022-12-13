<?php
    while($row = $searchQueryResult->fetch_assoc()){
        $searchQuery2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['code']}
                OR outgoing_msg_id = {$row['code']}) AND (outgoing_msg_id = {$userPersonalData['code']} 
                OR incoming_msg_id = {$userPersonalData['code']}) ORDER BY msg_id DESC LIMIT 1";
        $searchQueryResult2 = $dbcon->query($searchQuery2);
        $row2 =  $searchQueryResult2->fetch_assoc();
        ($searchQueryResult2->num_rows > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($userPersonalData['code'] == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline") ? $offline = "offline" : $offline = "";
        ($userPersonalData['code'] == $row['code']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['code'] .'">
                    <div class="content">
                    <img src="../../client/img/profile/'. $row['image'] .'" alt="">
                    <div class="details">
                        <span>'. $row['name'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>