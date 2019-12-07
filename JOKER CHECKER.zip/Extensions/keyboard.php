<?php

 $rawboard1 = ['inline_keyboard' => [[
           ['text' => 'Gates', 'callback_data' => 'gates'], 
           ['text' => 'Tools', 'callback_data' => 'tools'], 
           ['text' => 'Channel', 'callback_data' => 'channel']],]];

$welcomeboard = json_encode($rawboard1);

$welcomecmd = '<b>Hi, '.$firstname.' [ '.$userId.' ]%0AWhat would you like to checkout first ?</b>';

 $rawback1 = [
    'inline_keyboard' => [[     ['text' => 'Tools', 'callback_data' => 'tools'], ['text' => 'Back', 'callback_data' => 'back'], ]]];

$back = json_encode($rawback1);

 $rawback2 = [
    'inline_keyboard' => [[     ['text' => 'Gates', 'callback_data' => 'gates'], ['text' => 'Back', 'callback_data' => 'back2'], ]]];

$back2 = json_encode($rawback2);

      $channel = json_encode([
'inline_keyboard' => [
[['text' => "CHANNEL UPDATE", 'url' => "https://t.me/TEAM_JOK"],
['text' => "GROUP", 'url' => "https://t.me/GROUP_JOK"],]
]]);

if ($cdata2 == "gates"){
  $freecommands = urlencode("<b>
𝙏𝙤𝙩𝙖𝙡 𝘾𝙝𝙠 𝘾𝙤𝙢𝙢𝙖𝙣𝙙𝙨 - _
━━━━━━━━🔥🇪🇬🔥━━━━━━━━━━
↳ 𝘚𝘛𝘙𝘐𝘗𝘌 𝘎𝘈𝘛𝘌𝘚
- /chh Stripe 2$ - [ON] ✅
- /chk Stripe 4$ - [ON] ✅
━━━━━━━━🔥🇪🇬🔥━━━━━━━━━━
↳ Google Play 𝘎𝘈𝘛𝘌𝘚
- /go Google - [ON] ✅
━━━━━━━━🔥🇪🇬🔥━━━━━━━━━━
↳ PAY PAL 𝘎𝘈𝘛𝘌𝘚
- /pp PayPal 4$ - [ON] ✅
━━━━━━━━🔥🇪🇬🔥━━━━━━━━━━
↳𝘈𝘜𝘛𝘏 𝘎𝘈𝘛𝘌 
- /au Stripe Auth - [ON] ✅
</b>");
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$freecommands&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$back");
}

if ($cdata2 == "tools"){
  $toolcmds = urlencode("<b>
𝗧𝗢𝗢𝗟𝗦 | 𝗨𝗦𝗔𝗚𝗘
𝗦𝗵𝗼𝘄 𝗮𝗰𝗰𝗼𝘂𝗻𝘁 𝘀𝘁𝗮𝘁𝘂𝘀 - /status
𝗜𝗣 𝗟𝗼𝗼𝗸𝘂𝗽 - /ip
𝗕𝗶𝗻 𝗟𝗼𝗼𝗸𝘂𝗽 - /bin
Sk Checker - /sk
</b>");
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$toolcmds&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$back2");
}

if ($cdata2 == "channel"){
  $chnnl = urlencode("<b>
𝗖𝗹𝗶𝗰𝗸 𝗮𝗻𝘆 𝗯𝘂𝘁𝘁𝗼𝗻 𝗯𝗲𝗹𝗼𝘄
</b>");
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$chnnl&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$channel");
}

if ($cdata2 == "back"){
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$welcomecmd&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$welcomeboard");
}  

if ($cdata2 == "back2"){
file_get_contents("https://api.telegram.org/bot$botToken/editMessageText?chat_id=$cchatid2&text=$welcomecmd&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$welcomeboard");
}    
  
?>
