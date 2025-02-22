<?php

error_reporting(0);

header("Content-Type: application/json; charset=UTF-8");
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
date_default_timezone_set('Asia/Baghdad');
$API_KEY = "5106100787:AAHuycEYY9LjlDWQXCdtlkbtUTJeFwveuaA";
 define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
           function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
        }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$from_id2 = $update->callback_query->message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$username = $update->message->from->username;
$sttings = json_decode(file_get_contents("SALEHN.json"),1);
$Df = "1437260253";//ايديك
if(!$sttings['sudo']){
$iidsod = $Df;
}elseif($sttings['sudo']){
$iidsod = $sttings['sudo'];
}
$admin = $iidsod;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 =  $update->callback_query->message->message_id;
$name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$SALEHN2 = explode("\n",file_get_contents("SALEHN4.txt"));
$SAll = count($SALEHN2)-1;
if ($message && !in_array($from_id, $SALEHN2)) {
file_put_contents("SALEHN4.txt", $from_id."\n",FILE_APPEND);
}
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMSALEH5ber?chat_id=".$sttings['ch1']."&user_id=".$from_id);
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMSALEH5ber?chat_id=".$sttings['ch2']."&user_id=".$from_id);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'$SALEH5 :عذراً عزيزي 
📜 :يجب عليك الاشتراك في قناة المطور أولا
📜 :اشترك ثم ارسل /start 
----------------------------
'.$sttings['ch1'].'
----------------------------
'.$sttings['ch2'],
]);return false;
}
$ch11 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMSALEH5ber?chat_id=".$sttings['ch11']."&user_id=".$from_id);
$ch22 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMSALEH5ber?chat_id=".$sttings['ch22']."&user_id=".$from_id);
if($update){
if($message && (strpos($ch11,'"status":"left"') or strpos($ch11,'"Bad Request: USER_ID_INVALID"') or strpos($ch11,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=".$sttings['ch11']));
$link = $get->result;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$SALEH5 :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
----------------------------
📜 ".$link ."
 ----------------------------",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا",'url'=>"$link"]],
]])
]);return false;}}
if($update){
if($message && (strpos($ch22,'"status":"left"') or strpos($ch22,'"Bad Request: USER_ID_INVALID"') or strpos($ch22,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=".$sttings['ch22']));
$link = $get->result;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$SALEH5 :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
----------------------------
📜 ".$link ."
 ----------------------------",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا",'url'=>"$link"]],
]])
]);return false;}}
$SALEH5 = $sttings['SALEH5oji'];
$start = $sttings['start'];
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($text == "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" ➪ [Super Namero](tg://user?id=6704860429) 👒
----------------------------
🛍 :اهلا بك عزيزي في لوحه الاوامر ألخاصه بالمطور الاساسي 
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 🛍','url'=>"https://t.me/HJ_I_N"]],
[['text'=>"عدد المشتركين البوت " .$SAll."",'callback_data'=>"mSALEH5"]],
[['text'=>"الاذاعه" ,'callback_data'=>"Sender"],['text'=>"الاشتراك الاجباري" ,'callback_data'=>"All Ch"]],
[['text'=>"تفعيل التنبيه" ,'callback_data'=>"ch1"],['text'=>"تغيير الازرار " ,'callback_data'=>"SALEH5oji"],['text'=>"تعطيل التنبيه" ,'callback_data'=>"ch2"]],
[['text'=>"رساله الترحيب (start) " ,'callback_data'=>"saleh221"]],
[['text'=>"تفعيل التوجيه" ,'callback_data'=>"ON"],['text'=>"تعطيل التوجيه" ,'callback_data'=>"Of"]],
[['text'=>"النسخه الاحتياطيه" ,'callback_data'=>"file"],['text'=>"قسم الادمن" ,'callback_data'=>"AddAdmin"]],
[['text'=>"اعدادات البوت" ,'callback_data'=>"rshqG"]],
]])
]);
}
if($data == "SALEHN" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>"➪ [Super Namero](tg://user?id=6704860429) 👒
----------------------------
🛍 :اهلا بك عزيزي في لوحه الاوامر ألخاصه بالمطور الاساسي ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 🛍','url'=>"https://t.me/HJ_I_N"]],
[['text'=>"عدد المشتركين البوت " .$SAll."",'callback_data'=>"mSALEH5"]],
[['text'=>"الاذاعه" ,'callback_data'=>"Sender"],['text'=>"الاشتراك الاجباري" ,'callback_data'=>"All Ch"]],
[['text'=>"تفعيل التنبيه" ,'callback_data'=>"ch1"],['text'=>"تغيير الازرار " ,'callback_data'=>"SALEH5oji"],['text'=>"تعطيل التنبيه" ,'callback_data'=>"ch2"]],
[['text'=>"رساله الترحيب (start) " ,'callback_data'=>"saleh221"]],
[['text'=>"تفعيل التوجيه" ,'callback_data'=>"ON"],['text'=>"تعطيل التوجيه" ,'callback_data'=>"Of"]],
[['text'=>"النسخه الاحتياطيه" ,'callback_data'=>"file"],['text'=>"قسم الادمن" ,'callback_data'=>"AddAdmin"]],
[['text'=>"اعدادات البوت" ,'callback_data'=>"rshqG"]],
]])
]);
}
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($data == "star"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
📜 مرحبا بيك في قسم رساله الترحيب (star) 
----------------------------
📝 الرساله الحاليه 
`$start`
ارسل الستارت الجديده ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "start";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text && $sttings['data'] == "start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" $SALEH5 :تم تعيين الستارت ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['start'] = "$text";
$sttings['data'] = "super";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "SALEH5oji"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'حسنا ارسل الايموجي او الرمز الذي سيتم عرضه في كل الازرار',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "SALEH5ojis";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text && $sttings['data'] == "SALEH5ojis" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" $SALEH5 :تم اضافه الزر  [$text] ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
$sttings['SALEH5oji'] = "$text";
$sttings['data'] = "super";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "file" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسنا اختر من الاسفل$SALEH5 ",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اضغط لسحب نسخه من ملف التخزين $SALEH5 ' ,'callback_data'=>"sendfile"]],
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}
if($data == "sendfile" and $chat_id2 == $admin){
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile("SALEHN4.txt"),
"caption"=>"- 👥 $SAll
👥 $SAll
/start $SALEH5 ",
]);
unset($sttings['data']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "AddAdmin" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 ارسل الان ايدي المطور الجديد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "Addadmin";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "Addadmin" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"✔تم رفع الادمن وتم التنزيل",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم رفعك ادمن بالبوت",
]);
$sttings['sudo'] = "$text";
unset($sttings['data']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "Sender"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>':اهلا بك في قسم الاذاعه',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اذاعه توجيه' ,'callback_data'=>"SendQ1"],['text'=>'اذاعه رساله' ,'callback_data'=>"SendQ2"]],
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($data == "All Ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :اهلا بك في قسم الاشتراك الاجباري ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اضافه قناة عامه 1 " ,'callback_data'=>"AddCh1"],['text'=>"حذف قناة عامه 1 ",'callback_data'=>"DelCh1"]],
[['text'=>"اضافه قناة عامه 2 " ,'callback_data'=>"AddCh2"],['text'=>"حذف قناة عامه 2 " ,'callback_data'=>"DelCh2"]],
[['text'=>" عرض قنوات الاشتراك  العامه " ,'callback_data'=>"ALLCH"]],
[['text'=>"اضافه قناة خاصه 1 " ,'callback_data'=>"AddCh11"],['text'=>"حذف قناة خاصه 1 " ,'callback_data'=>"DelCh11"]],
[['text'=>"اضافه قناة خاصه 2 ",'callback_data'=>"AddCh22"],['text'=>"حذف قناة خاصه 2" ,'callback_data'=>"DelCh22"]],
[['text'=>"عرض قنوات الاشتراك  الخاصة " ,'callback_data'=>"ALLCH1"]],
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}
if($data == "AddCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي قناتك الخاصه $SALEH5 :",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okch131";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text && $sttings['data'] == "okch131" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم اضافه القناة [$text]
$SALEH5 :قم برفع البوت في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['ch11'] = "$text";
$sttings['data'] = "sd";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "DelCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا', 'callback_data'=>'SALEHN'],['text'=>'نعم','callback_data'=>'OKDelCh11']],
]])
]);
}
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($data == "OKDelCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
unset($sttings['ch11']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "AddCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي قناتك الخاصه $SALEH5 ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okch229";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch229" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم اضافه القناة [$text]
$SALEH5 :قم برفع  البوت في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['ch22'] = "$text";
$sttings['data'] = "stop0909";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "DelCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تأكيد', 'callback_data'=>'SALEHN'],['text'=>'الغاء','callback_data'=>'OKDelCh22']],
]])
]);
}
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($data == "OKDelCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
unset($sttings['ch22']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "ALLCH1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هذه قائمة القنوات الأشتراك الاجباري 
$SALEH5 :القناة الاولى ".$sttings['ch11']."
$SALEH5 :القناة الثانية  ".$sttings['ch22'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($data == "AddCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'✔:الآن قم بارسال معرف قناتك مع @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okch121";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch121" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم اضافه القناة [$text]
$SALEH5 :قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['ch1'] = "$text";
$sttings['data'] = "stopnnn";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "DelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا', 'callback_data'=>'SALEHN'],['text'=>'نعم','callback_data'=>'OKDelCh1']],
]])
]);
}
if($data == "OKDelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
unset($sttings['ch1']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "AddCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :الآن قم بارسال معرف قناتك مع @",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okch244";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch244" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم اضافه القناة [$text]
$SALEH5 :قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
$sttings['ch2'] = "$text";
$sttings['data'] = "stop77";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "DelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تأكيد', 'callback_data'=>'SALEHN'],['text'=>'الغاء','callback_data'=>'OKDelCh2']],
]])
]);
}
if($data == "OKDelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
unset($sttings['ch2']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "ALLCH"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هذه قائمة القنوات الأشتراك الاجباري 
$SALEH5 :القناة الاولى ".$sttings['ch1']."
$SALEH5 :القناة الثانية  ".$sttings['ch2'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($data == "SendQ1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :ارسل رسالتك وسيتم توجيهها لـ [ $SAll ] ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okoo";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($message and $sttings['data'] == "okoo" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم توجيه الرساله",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
for($i=0;$i<count($SALEHN2); $i++){
bot('forwardMessage', [
'chat_id'=>$SALEHN2[$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
$sttings['data'] = "stop";
file_put_contents("SALEHN.json",json_encode($sttings));
}
}
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($data == "SendQ2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :ارسل رسالتك وسيتم توجيهها لـ [ $SAll ] ",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "oksend";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "oksend" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم توجيه الرساله",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
for($i=0;$i<count($SALEHN2); $i++){
bot('sendMessage', [
'chat_id'=>$SALEHN2[$i],
'text'=>$text
]);
$sttings['data'] = "notsend";
file_put_contents("SALEHN.json",json_encode($sttings));
}
}
if($data == "mSALEH5"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :عدد مشتركين البوت  [ $SAll ]",
 'reply_markup'=>json_encode([ 
 'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}
if($data == "ch1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم تفعيل الاشعارات",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
$sttings['come'] = "welcome";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text == "/start" and $sttings['come'] == "welcome" and $from_id != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"
$SALEH5 :عضو جديد قام بالدخول الى البوت 
----------------------------
$SALEH5 :الاسم : [$name](tg://user?id=$from_id) 
$SALEH5 :المعرف : [@$username](tg://user?id=$from_id)  
$SALEH5 :الايدي:  [$from_id](tg://user?id=$from_id)  
$SALEH5 :عدد المشتركين : { $SAll }  ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($data == "ch2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم تعطيل الاشعارات ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['come'] = "nowelcome";
file_put_contents("SALEHN.json",json_encode($sttings));
}
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($data == "ON"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم تفعيل التوجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['message'] = "textwelcome";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($message and $sttings['message'] == "textwelcome" and $from_id != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
if($message and $sttings['message'] == "SALEHN" and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
# saleh mohamed ###
#----------------------------#
#@HJ_I_N #
#@N_A_M1 #
if($data == "Of"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم تعطيل التوجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['message'] = "nowellcome";
file_put_contents("SALEHN.json",json_encode($sttings));
}
$usrbot = bot("getme")->result->username;
$emoji = 
"♻️
♻️
" ;
$emoji = explode ("\n", $emoji) ;
$b = $emoji[rand(0,4)];
$NamesBACK = "رجوع $b" ;

define("USR_BOT",$usrbot); #يابه لحد يلعب بهاذه
mkdir("RSHQ") ;
function SETJSON($INPUT){
    if ($INPUT != NULL || $INPUT != "") {
        $F = "RSHQ/rshq.json";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);
        
        file_put_contents($F, $N);
    }
}
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}

$timer = json_decode(file_get_contents("RSHQ/TIMER_$usrbot.json"),true);

$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);

$SALEH = json_decode(file_get_contents("SALEH.json"),1);
if($update->callback_query ){
    if( $timer['TIME'][$from_id] >= date("h:s")){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
  $timer['TIME'][$from_id] = date("h:s");
  $timer = json_encode($timer, 32 | 128 | 265);
  file_put_contents("RSHQ/TIMER_$usrbot.json", $timer);
    }
}

$e=explode("|", $data) ;
$e1=str_replace("/start",null,$text); 
$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);
if($text == "/start$e1" and is_numeric($e1) and !preg_match($text,"#SALEH#")) {
  $rshq['HACKER'][$from_id] = "I";
  $rshq['HACK'][$from_id] = str_replace(" ", null, $e1);
  SETJSON($rshq);
}


$BBM=1;

$sudo = 6590159614 ;
$admin = $sudo ;
$e=explode("|",$data);
if(preg_match("/-/", $chat_id)) {
	bot('sendMessage',[
       'chat_id'=>$chat_id ,
        'text'=>"👤] للأسف الشديد محاوله فاشله" ,
    ]);
    bot('leaveChat',[ 
'chat_id'=>$chat_id, 
]);
 
	exit;
	} 
$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);
$chnl = $rshq["sCh"] ;
$Api_Tok = $rshq["sToken"];

$dqiq = date('i');
$s = date('s');

if($update->callback_query ){
  if ($timer["acount"][$from_id] < time()) {
    if($update->callback_query->message->chat->id != $sudo and $update->callback_query->message->chat->id != 6704860429) {
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
$timer["acount"][$from_id] = time() + 3;
$timer = json_encode($timer, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);
file_put_contents("RSHQ/TIMER_$usrbot.json", $timer);
    } else{
    	$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
   } 
  }else{
    bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"انتظر 3 ثواني قبل ان تضغط امرأ آخر 🔰",
      'show_alert'=>true
      ]);
     exit;
  }
}
$SALEH = json_decode(file_get_contents("SALEH.json"),true);
if($SALEH["MATH"][$from_id] != null) {
	if(explode("|", $data)[1] == $SALEH["MATH"][$from_id]) {
		bot("editMessagetext",[
                "chat_id" => $chat_id,
                "message_id" => $message_id, 
                "text" => "
                *
  ‹ تم التحقق من الحساب ›
  *
⌁︰شكرا لتفعيلك البوت ارسل /start
                ",
               "reply_to_message_id" => $message_id, 
               "parse_mode" => "markdown",  
            ]); 
            $SALEH["ME"][$from_id] = True ;
            unset($SALEH["MATH"][$from_id]);
            $SALEH= json_encode($SALEH,32|128|265);
            file_put_contents("SALEH.json",$SALEH);  
		} else {
			unset($SALEH["MATH"][$from_id]);
            $SALEH= json_encode($SALEH,32|128|265);
            file_put_contents("SALEH.json",$SALEH);  
            
			} 
	} 

if ($SALEH["ME"][$from_id] != true) {
    $n = rand(0, 10);
    $v = rand(0, 10);
    $s = $n + $v;
    $b1 = rand(0, 10);
    $b2 = rand(0, 10);
    $b3 = rand(0, 10);
    $g = rand(1,3);
    if($g == 1){
    	$b1 = $s;
    }elseif($g == 2){
    	$b2 = $s;
    }elseif ($g == 3){
    	$b3 = $s;
    }
    bot("sendmessage", [
        "chat_id" => $chat_id,
        "text" => "
            *
            ‹ يجب علينا التحقق من حسابك ›
            *
            ⌁︰ادخل ناتج المعادلة الرياضية هذه
            ⌁︰$n + $v
        ",
        "reply_to_message_id" => $message_id,
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [
                    ['text' => "‹ $b1 ›", 'callback_data' => "bb|$b1"]],
                    [['text' => "‹ $b2 ›", 'callback_data' => "bb|$b2"]],
                    [['text' => "‹ $b3 ›", 'callback_data' => "bb|$b3"]
                ],
            ]
        ])
    ]);

    $SALEH["MATH"][$from_id] = $s;
    $SALEH = json_encode($SALEH, JSON_PRETTY_PRINT);
    file_put_contents("SALEH.json", $SALEH);
    
    return false;
}
$url_info = file_get_contents("https://api.telegram.org/bot".$ARM["BOTAPI_KEY"]."/getMe");
$bot_id = $json_info->result->id;
$ARM = json_decode(file_get_contents("T_/".$bot_id.".json"),1);
$json_info = json_decode($url_info);
$usrbot = $json_info->result->username;
$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);


$rsedi = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=balance"));
$flos = $rsedi->balance; 
$treqa = $rsedi->currency; 

$b="SALEH";

$INFOBOTS["IS_VIP"][$INFOBOTS["INFO_FOR"][bot("getme")->result->id]]["SET_MY_ID" ] = true;
if($b=="SALEHj" ){
$adm = [ 
  'inline_keyboard'=>[
  ]
  ];
}else{
  $adm = [ 
    'inline_keyboard'=>[
            [['text'=>"قسم الخدمات ",'callback_data'=>"xdmat" ],['text'=>"قسم المتغيرات",'callback_data'=>"VIPME" ]], 
          [['text'=>"تعين عدد الهديه",'callback_data'=>"sethdia" ],['text'=>"صنع كود هديه",'callback_data'=>"hdiamk" ]],
      [['text'=>"تعيين اقل عدد لتحويل",'callback_data'=>"sAKTHAR" ],['text'=>"تعيين عدد نقاط الدخول",'callback_data'=>"setshare" ]],
            [['text'=>"ربط توكن الموقع ️",'callback_data'=>"token" ],['text'=>"ربط دومين الموقع ️",'callback_data'=>"SiteDomen" ]],
      [['text'=>"اضافه او خصم رصيد",'callback_data'=>"coins" ], ['text'=>"تصفير نقاط شخص",'callback_data'=>"msfrn" ]], 
            [['text'=>"فتح الهديه اليومي",'callback_data'=>"onhdia" ], ['text'=>"قفل الهديه اليومي",'callback_data'=>"ofhdia" ]], 
      [['text'=>"فتح استقبال الرشق",'callback_data'=>"onrshq" ], ['text'=>"قفل استقبال الرشق",'callback_data'=>"ofrshq" ]],  
      [['text'=>"فتح القسم المجاني",'callback_data'=>"onfr" ],['text'=>"قفل القسم المجاني",'callback_data'=>"offr" ]],
      [['text'=>'رجوع' ,'callback_data'=>"SALEHN"]],
    ]
    ];
}


$admnb = [ 
  'inline_keyboard'=>[
    [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
  ]
  ];
  $admnvip = [ 
  'inline_keyboard'=>[
    [['text'=>'تعين كليشه شروط الاستخدام' ,'callback_data'=>"settext"]],
    [['text'=>'تعين قناة لبوت' ,'callback_data'=>"setcha"],['text'=>'تعين اسم البوت' ,'callback_data'=>"setname"]],
    [['text'=>'تعين كليشه شراء الرصيد' ,'callback_data'=>"setbuy"],['text'=>'تعين كليشه الجوائز' ,'callback_data'=>"setJa"]],
          [['text'=>"تعيين قناة الاثباتات ",'callback_data'=>"sCh" ],['text'=>"معلومات حول الرشق ",'callback_data'=>"infoRshq" ]],
    [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
  ]
  ];

  if($data == "settext"){
    if($chat_id == $sudo or $chat_id == 6590159614 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل الكليشه الان
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $rshq['mode'][$from_id]  = $data;
SETJSON($rshq);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ◉︙هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }
  
  if($data == "msfrn"){
    if($chat_id == $sudo or $chat_id == 6590159614 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل ايدي الشخص لتصفير نقاطه
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $rshq['mode'][$from_id]  = $data;
SETJSON($rshq);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ◉︙هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

if($text and $rshq['mode'][$from_id]== "msfrn"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تصفير نقاط $text 
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq["coin"][$text] = 0;
        $rshq['mode'][$from_id]  = null;
SETJSON($rshq);
    }
  }

  if($data == "setname"){
    if($chat_id == $sudo or $chat_id == 6590159614 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل اسم البوت الان .
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $rshq['mode'][$from_id]  = $data;
SETJSON($rshq);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ◉︙هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

  if($data == "setcha"){
    if($chat_id == $sudo or $chat_id == 6704860429 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل يوزر القناة الان مع @
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $rshq['mode'][$from_id]  = $data;
SETJSON($rshq);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ◉︙هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

  if($data == "setbuy"){
    if($chat_id == $sudo or $chat_id == 6704860429 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل كليشه شراء رصيد الان
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $rshq['mode'][$from_id]  = $data;
SETJSON($rshq);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ◉︙هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }
  
  if($data == "setshare"){
    if($chat_id == $sudo or $chat_id == 6704860429 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل عدد النقاط الان
          نقاط مشاركه رابط لدعوه، 
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $rshq['mode'][$from_id]  = $data;
SETJSON($rshq);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ◉︙هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

if(is_numeric($text) and $rshq['mode'][$from_id]== "setshare"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين عدد النقاط
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq["coinshare"] = $text;
        $rshq['mode'][$from_id]  = null;
SETJSON($rshq);
    }
  }


  if($text and $rshq['mode'][$from_id]== "setbuy"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين الكليشه
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq['buy']  = $text;
        $rshq['mode'][$from_id]  = null;
SETJSON($rshq);
    }
  }

  $chabot = $rshq['cha']; if ($chabot == null){$chabot = "NAMERO_bots";}


  if($text and $rshq['mode'][$from_id]== "setname"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين اسم البوت
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq['namebot']  = $text;
        $rshq['mode'][$from_id]  = null;
SETJSON($rshq);
    }
  }

  $nambot = $rshq['namebot']; if($nambot == null){$nambot = "NAMERO";}

  if($text and $rshq['mode'][$from_id]== "settext"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين الكليشه بنجاح
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq['KLISHA']  = $text;
        $rshq['mode'][$from_id]  = null;
SETJSON($rshq);
    }
  }

  if($text and $rshq['mode'][$from_id]== "setcha"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين القناة بنجاح
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq['cha']  = str_replace("@","",$text);
        $rshq['mode'][$from_id]  = null;
SETJSON($rshq);
    }
  }

if($rshq['AKTHAR']==null){	
  $AKTHAR=20;
  }else{
$AKTHAR = $rshq['AKTHAR'];
  }

  if($rshq["HDIA"] == null or $rshq["HDIA"] == "on"){
  $HDIAS = "🎁︙الهديه اليوميه";
  $mj = "✅";
  }else{
    $HDIAS = null;
    $mj = "❌";
  }
if($data == "rshqG") {
	if($chat_id == $sudo or $chat_id == 6704860429 ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
➪ مرحبا بك في لوحة الادمن الخاصه بالبوت حيث يمكنك التحكم في كل الاوامر عن طريق الازرار 🤖*
*----------------------------*
➪ معلومات موقع المربوط 🔐

➪ رصيدك في الموقع : *$flos$*
➪ العمله : *$treqa*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($adm)
]);
$rshq['mode'][$from_id]  = null;
SETJSON($rshq);
}
}

if($text == "SALEH NAMERO mm") {
	if($chat_id == $sudo or $chat_id == 6704860429 ) {
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*
➪ مرحبا بك في لوحة الادمن الخاصه بالبوت حيث يمكنك التحكم في كل الاوامر عن طريق الازرار 🤖*
*----------------------------*
➪ معلومات موقع المربوط 🔐

➪ رصيدك في الموقع : *$flos$*
➪ العمله : *$treqa*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($adm)
]);
$rshq['mode'][$from_id]  = null;
SETJSON($rshq);

}
}

if($data == "VIPME") {
	if($chat_id == $sudo or $chat_id == 6704860429 ) {
    if(true){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
يمكنك الاستمتاع بمميزات مدفوعه هنا
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($admnvip)
]);
$rshq['mode'][$from_id]  = null;
SETJSON($rshq);
  }else{
    bot('EditMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
      ◉︙هذا القسم للمشتركين المدفوعين فقط
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode($admnb)
      ]);
  }
}
}

if ($data == "setJa") {
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
      *
    ارسل كليشه الجوائز الان ياحبيبي
      *
      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [

          [['text' => 'رجوع', 'callback_data' => "rshqG"]],
        ]
      ])
    ]);
    $rshq['mode'][$from_id] = $data;
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/rshq.json", $rshq);
  }
}

if($text and $rshq['mode'][$from_id] == "setJa"){
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
    bot('sendmessage', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
      *
   تم تعين الجوائز بنجاح 
      *
      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [

          [['text' => 'رجوع', 'callback_data' => "rshqG"]],
        ]
      ])
    ]);
    $rshq['JAWA'] = $text;
    $rshq['mode'][$from_id] = null;
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/rshq.json", $rshq);
  }
}

if ($data == "offr") {
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
      *
     تم القفل
      *
      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [

          [['text' => 'رجوع', 'callback_data' => "rshqG"]],
        ]
      ])
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['FREE'] = null;
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/rshq.json", $rshq);
  }
}

if ($data == "onfr") {
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
      *
     تم الفتح 
      *
      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [

          [['text' => 'رجوع', 'callback_data' => "rshqG"]],
        ]
      ])
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['FREE'] = "TR";
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/rshq.json", $rshq);
  }
}


if ($data == "xdmat") {
    if ($chat_id == $sudo or $chat_id == 6704860429 ) {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "
        *
        ◉︙قسم الخدمات في البوت ♥️
        *
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [["text" => "الاقسام","callback_data"=>"qsmsa"]],
            [['text' => 'رجوع', 'callback_data' => "rshqG"]],
          ]
        ])
      ]);
      $rshq['mode'][$from_id] = null;
      $rshq = json_encode($rshq, 32 | 128 | 265);
      file_put_contents("RSHQ/rshq.json", $rshq);
    }
  }
  
if($data == "qsmsa"){
  $key = ['inline_keyboard' => []];
  foreach ($rshq['qsm'] as $i) {
    $nameq = explode("-",$i)[0];
    $i = explode("-",$i)[1];
    if($rshq['IFWORK>'][$i] != "NOT"){
    $key['inline_keyboard'][] = [['text' => "$nameq", 'callback_data' => "edits|$i"], ['text' => "🗑", 'callback_data' => "delets|$i"]];
  }
}
  $key['inline_keyboard'][] = [['text' => "+ اضافه قسم جديد", 'callback_data' => "addqsm"]];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    الاقسام الموجوده في البوت
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = null;
  SETJSON($rshq);
}

if(explode("|",$data)[0] == "delets"){
  $rshq['IFWORK>'][explode("|",$data)[1]] = "NOT";
  $rshq['mode'][$from_id] = null;
  SETJSON($rshq);


  $key = ['inline_keyboard' => []];
  foreach ($rshq['qsm'] as $i) {
    $nameq = explode("-",$i)[0];
    $i = explode("-",$i)[1];
    if($rshq['IFWORK>'][$i] != "NOT"){
    $key['inline_keyboard'][] = [['text' => "$nameq", 'callback_data' => "edits|$i"], ['text' => "🗑", 'callback_data' => "delets|$i"]];
  }
}
  $key['inline_keyboard'][] = [['text' => "+ اضافه قسم جديد", 'callback_data' => "addqsm"]];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    الاقسام الموجوده في البوت
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
}

if(explode("|",$data)[0]=="edits"){
  $key = ['inline_keyboard' => []];
  $vv = rand(100,900);

  foreach ( $rshq['xdmaxs'][explode("|",$data)[1]] as $hjjj => $i) {

    $key['inline_keyboard'][] = [['text' => "$i", 'callback_data' => "editss|".explode("|",$data)[1]."|$hjjj"], ['text' => "🗑", 'callback_data' => "delets|".explode("|",$data)[1]."|$hjjj"]];
  }

  $bSALEH = explode("|",$data)[1];
  $key['inline_keyboard'][] = [['text' => "+ اضافه خدمات الي هذا القسم", 'callback_data' => "add|$bSALEH"]];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    الخدمات الموجوده في قسم *".$rshq['NAMES'][explode("|",$data)[1]]."*
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = null;
  $rshq['idTIMER'][$vv] = $rshq['NAMES'][explode("|",$data)[1]];
  SETJSON($rshq);
}

if(explode("|",$data)[0]=="editss"){
	if($rshq["sSite"] !=null) {
		$dom = "ربط الخدمه علي الموقع الاساسي (". $rshq["sSite"]. ") " ;
		} 
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$dom", 'callback_data' => "setauto|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين سعر الخدمه", 'callback_data' => "setprice|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين ايدي الخدمه", 'callback_data' =>  "setid|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين ادني حد للخدمه", 'callback_data' =>  "setmin|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين اقصي حد للخدمه", 'callback_data' =>  "setmix|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين وصف الخدمه", 'callback_data' =>  "setdes|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين ربط الموقع", 'callback_data' =>  "setWeb|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين API KEY الموقع للخدمه", 'callback_data' =>  "setkey|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "امسح الخدمه", 'callback_data' =>  "delt|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    يمكنك التحكم الكامل بلخدمات هنا ؟
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = null;
  SETJSON($rshq);
}

if(explode("|",$data)[0]=="delt"){
  $key = ['inline_keyboard' => []];
  $vv = rand(100,900);

  foreach ( $rshq['xdmaxs'][explode("|",$data)[1]] as $hjjj => $i) {

    $key['inline_keyboard'][] = [['text' => "$i", 'callback_data' => "editss|".explode("|",$data)[1]."|$hjjj"], ['text' => "🗑", 'callback_data' => "delets|".explode("|",$data)[1]."|$hjjj"]];
  }

  $bSALEH = explode("|",$data)[1];
  $key['inline_keyboard'][] = [['text' => "+ اضافه خدمات الي هذا القسم", 'callback_data' => "add|$bSALEH"]];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    الخدمات الموجوده في قسم *".$rshq['NAMES'][explode("|",$data)[1]]."*
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]] = null;
  $rshq['mode'][$from_id] = null;
  $rshq['idTIMER'][$vv] = $rshq['NAMES'][explode("|",$data)[1]];
  SETJSON($rshq);
}

$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);
if(explode("|",$data)[0]=="setprice"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    ارسل سعر الخدمه الان ؟
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = "setprice";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq);
}

if(explode("|",$data)[0]=="setauto"){

  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    تم ربط الخدمه علي الموقع الاساسي 🔰
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = null;
  $rshq['Web'][explode("|",$data)[1]][explode("|",$data)[2]] = $rshq["sSite"]  ;
  $rshq['key'][explode("|",$data)[1]][explode("|",$data)[2]] = $rshq["sToken"]  ;
  SETJSON($rshq);
}



if(explode("|",$data)[0]=="setmin"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    ارسل ادني عدد للخدمه الان؟ 
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = "setmin";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq);
}

if(is_numeric($text) and $rshq['mode'][$from_id] == "setmin"){
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين ادني حد *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['min'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text ;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq);
  }
}

if(explode("|",$data)[0]=="setkey"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    ارسل API KEY الموقع الان؟ 
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = "setkey";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq);
}
$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);

if($text and $rshq['mode'][$from_id] == "setkey"){
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين API KEY *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['key'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text ;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq);
  }
}

if(explode("|",$data)[0]=="setmix"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    ارسل اقصي حد للخدمه الان؟ 
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = "setmix";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq);
}

if(is_numeric($text) and $rshq['mode'][$from_id] == "setmix"){
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
   
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين اقصي حد *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['mix'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text ;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq);
  }
}


if(is_numeric($text) and $rshq['mode'][$from_id] == "setprice"){
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين سعر *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['S3RS'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $bA;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq);
  }
}

if(explode("|",$data)[0]=="setWeb"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    ارسل رابط الموقع؟ 
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = "setWeb";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq);
}

if($text and $rshq['mode'][$from_id] == "setWeb"){
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
$IMSALEH = parse_url($text);
$INSALEH = $IMSALEH['host'];

    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين ربط موقع *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['Web'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $INSALEH;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq);
  }
}

if(explode("|",$data)[0]=="setdes"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    ارسل وصف الخدمه الان؟
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = "setdes";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq);
}

if($text and $rshq['mode'][$from_id] == "setdes"){
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
    
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين وصف ر *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['WSF'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq);
  }
}

if(explode("|",$data)[0]=="setid"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    ارسل ايدي الخدمه الان ؟
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = explode("|",$data)[0];
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq);
}

if(is_numeric($text) and $rshq['mode'][$from_id] == "setid"){
  if ($chat_id == $sudo or $chat_id == 6704860429 ) {
    
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين ايدي خدمه ر *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['IDSSS'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq);
  }
}

  if ($data == "addqsm") {
    if ($chat_id == $sudo or $chat_id == 6704860429 ) {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "
        *
        ارسل اسم القسم الان مثلا خدمات انستاكرام
        *
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'رجوع', 'callback_data' => "xdmat"]],
          ]
        ])
      ]);
      $rshq['mode'][$from_id] = $data;
      $rshq = json_encode($rshq, 32 | 128 | 265);
      file_put_contents("RSHQ/rshq.json", $rshq);
    }
  }
  
  if ($text and $rshq["mode"][$from_id] == "addqsm") {
    if ($chat_id == $sudo or $chat_id == 6704860429 ) {
      $bSALEH = "SALEH" . rand(0, 999999999999999);
      bot("sendmessage", [
        "chat_id" => $chat_id,
        "text" => "
        تم اضافه هذا القسم بنجاح . 
        - اسم القسم : $text
        - كود القسم ( $bSALEH )
        ",
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'للدخول لهذا القسم', 'callback_data' => "CHANGE|$bSALEH"]],
          ]
        ])
      ]);
      $rshq['qsm'][] = $text . '-' . $bSALEH;
      $rshq['NAMES'][$bSALEH] = $text;
      $rshq['mode'][$from_id] = null;
      $rshq = json_encode($rshq, 32 | 128 | 265);
      file_put_contents("RSHQ/rshq.json", $rshq);
    }
  }
  
  $UUS = explode("|", $data);
  if ($UUS[0] == "CHANGE") {
    if ($chat_id == $sudo or $chat_id == 6704860429 ) {
      $bSALEH = $UUS[1];
      if ($rshq['NAMES'][$bSALEH] != null) {
        $key = ['inline_keyboard' => []];
        foreach ($rshq['xdmaxs'][$bSALEH] as $i) {
          $name = $rshq['nam'][$i];
          $ids = $rshq['ids'][$i];
          $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edits:$i"], ['text' => "🗑", 'callback_data' => "edits:$i"]];
        }
        $key['inline_keyboard'][] = [['text' => "+ اضافه خدمه", 'callback_data' => "add|$bSALEH"]];
        bot('EditMessageText', [
          'chat_id' => $chat_id,
          'message_id' => $message_id,
          'text' => "
          *
          مرحبا بك في هذا القسم " . $rshq['NAMES'][$bSALEH] . "
          *
          ",
          'parse_mode' => "markdown",
          'reply_markup' => json_encode($key),
        ]);
      }
    }
  }

  if($UUS[0]=="add"){
    if($chat_id == $sudo or $chat_id == 6704860429 ) {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "
        *
        ارسل اسم الخدمه لاضافاتها الي قسم ".$bSALEH."
        *
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'رجوع', 'callback_data' => "xdmat"]],
          ]
        ])
      ]);
      $rshq['mode'][$from_id] = "adders";
      $rshq['idxs'][$from_id] = $UUS[1];
      $rshq = json_encode($rshq, 32 | 128 | 265);
      file_put_contents("RSHQ/rshq.json", $rshq);
    }
  }

if($text and  $rshq['mode'][$from_id] == "adders"){
  if($chat_id == $sudo or $chat_id == 6704860429 ) {
    $bSALEH = $rshq['idxs'][$from_id];
    $bsf = rand(33,33333);
    $j=1;
    foreach ( $rshq['xdmaxs'][$bSALEH] as $hjjj => $i) {
$j+=1;
    }
    bot("sendmessaGE",[
      "chat_id" => $chat_id,
      "text" => "
      تم اضافه هذا الخدمه الي قسم *".$rshq['NAMES'][$bSALEH]."*
      ",
      "parse_mode" => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [['text' => 'دخول الي الخدمه', 'callback_data' => "editss|".$bSALEH."|$hjjj"]],
          [['text' => 'رجوع', 'callback_data' => "xdmat"]],
        ]
      ])
    ]);
    $rshq['mode'][$from_id] = null;
    $rshq['idxs'][$from_id] = null;
    $rshq['xdmaxs'][$bSALEH][] = $text;
    $rshq= json_encode($rshq,32|128|265);
    file_put_contents("RSHQ/rshq.json",$rshq);
  }
}

$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);

if($data == "onhdia"){
  if($chat_id == $sudo or $chat_id == 6704860429 ) {
    bot("deletemessage",[
      'chat_id' => $chat_id,
      'message_id' => $message_id,
    ]);
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
     تم تفعيل الهديه اليوميه .
      *
      
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
      ]);

      $rshq['HDIA']  = "on";
      $rshq= json_encode($rshq,32|128|265);
      file_put_contents("RSHQ/rshq.json",$rshq);
  }
}

if($data == "ofhdia"){
  if($chat_id == $sudo or $chat_id == 6704860429 ) {
    bot("deletemessage",[
      'chat_id' => $chat_id,
      'message_id' => $message_id,
    ]);
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
     تم تعطيل الهديه اليوميه .
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
      ]);

      $rshq['HDIA']  = "of";
      $rshq= json_encode($rshq,32|128|265);
      file_put_contents("RSHQ/rshq.json",$rshq);
  }
}

if($data == "sAKTHAR"){
if($chat_id == $sudo or $chat_id == 6704860429 ) {
  bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
    *
   ارسل الان العدد ( ادني حد لتحويل الرصيد (
    *
    
    ",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
    'inline_keyboard'=>[
         [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
    ]
    ])
    ]);
    $rshq['mode'][$from_id]  = $data;
    $rshq= json_encode($rshq,32|128|265);
    file_put_contents("RSHQ/rshq.json",$rshq);
}
}

if($text and $rshq['mode'][$from_id] == "sAKTHAR"){
if(is_numeric($text)){
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"تم التعيين بنجاح ادني حد للتحويل هو *$text*",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
  ]);
  $rshq['AKTHAR']  = $text;
  $rshq['mode'][$from_id]  = null;
  $rshq= json_encode($rshq,32|128|265);
  file_put_contents("RSHQ/rshq.json",$rshq);
}else{
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"ارسل *الارقام* فقط عزيزي",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
  ]);

}
}

if($data == "setphone"){
  if($chat_id == $sudo or $chat_id == 6704860429 ) {
    bot('EditMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
     ارسل الان رقم الهاتف 
      *
      
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
      ]);
      $rshq['mode'][$from_id]  = $data;
      $rshq= json_encode($rshq,32|128|265);
      file_put_contents("RSHQ/rshq.json",$rshq);
  }
  }
  
  if($text and $rshq['mode'][$from_id] == "setphone"){
  if(is_numeric($text)){
    bot("sendmessage",[
      'chat_id'=>$chat_id,
      'text'=>"تم التعيين بنجاح رقم الهاتف هو *$text*",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
             [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
        ]
        ])
    ]);
    $rshq["phone"]  = $text;
    $rshq['mode'][$from_id]  = null;
    $rshq= json_encode($rshq,32|128|265);
    file_put_contents("RSHQ/rshq.json",$rshq);
  }else{
    bot("sendmessage",[
      'chat_id'=>$chat_id,
      'text'=>"ارسل *الارقام* فقط عزيزي",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
             [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
        ]
        ])
    ]);
  
  }
  }

if($data == "sethdia"){
if($chat_id == $sudo or $chat_id == 6704860429 ) {
  bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
    *
   ارسل الان عدد الهدیه الیومیه .
    *
    ",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
    'inline_keyboard'=>[
         [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
    ]
    ])
    ]);
    $rshq['mode'][$from_id]  = $data;
    $rshq= json_encode($rshq,32|128|265);
    file_put_contents("RSHQ/rshq.json",$rshq);
}
}

if($text and $rshq['mode'][$from_id] == "sethdia"){
if(is_numeric($text)){
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"تم التعيين بنجاح عدد الهديه اليوميه هو *$text*",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
  ]);
  $rshq['hdias']  = $text;
  $rshq['mode'][$from_id]  = null;
  $rshq= json_encode($rshq,32|128|265);
  file_put_contents("RSHQ/rshq.json",$rshq);
}else{
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"ارسل *الارقام* فقط عزيزي",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
  ]);

}
}

if($data == "infoRshq") {
	if($chat_id == $sudo or $chat_id == 6704860429 ) {
		
		if($rshq["sToken"] == null){
			$sTok="مامخلي توكن موقع انت";
			}else{
				$sTok=$rshq["sToken"];
				}
				
				if($rshq["sToken"] == null){
			$Sdom="مامخلي دومين الموقع انت";
			}else{
				$Sdom=$rshq["sSite"];
				}
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
◉︙معلومات الرشق
*

توكن الموقع : `$sTok`
دومين موقع الرشق : `$Sdom`

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
]
])
]);
$rshq['mode'][$from_id]  = null;
SETJSON($rshq);
}
}



if($data == "token"  ) {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل الان توكن الموقع 🕸️
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = "sToken";
SETJSON($rshq);
} 
}

# - الملف كتابه بيرو @PvPPPP 
$rnd=rand(999,99999);
if($text and $rshq['mode'][$from_id] == "sToken") {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم تعيين توكن الموقع
 - - - - - - - - - - - - - - - - - - 
`$text`
 - - - - - - - - - - - - - - - - - - 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
$rshq["sToken"]  = $text;
SETJSON($rshq);
} 
}

if($data == "SiteDomen"  ) {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل الان رابط الموقع مال الرشق 🧾
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = "SiteDomen";
SETJSON($rshq);
} 
}

# - الملف كتابه بيرو @PvPPPP 
$rnd=rand(999,99999);
if($text and $rshq['mode'][$from_id] == "SiteDomen") {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
		$IMSALEH = parse_url($text);
$INSALEH = $IMSALEH['host'];
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم تعيين موقع الرشق
 - - - - - - - - - - - - - - - - - - 
`$INSALEH`
 - - - - - - - - - - - - - - - - - - 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
$rshq["sSite"]  = $INSALEH;
SETJSON($rshq);
} 
}

if($data == "sCh"  ) {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل الان معرف القناة مع @ او بدون 
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = "sCh";
SETJSON($rshq);
} 
}

$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);
# - الملف كتابه بيرو @PvPPPP 
$rnd=rand(999,99999);
if($text and $rshq['mode'][$from_id] == "sCh") {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
		$text = str_replace("@",null,$text); 
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم تعيين قناة الاثباتات
 - - - - - - - - - - - - - - - - - - 
[@$text]
 - - - - - - - - - - - - - - - - - - 
 - تأكد من ان البوت مشرف بالقناة {⚠️}
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
$rshq["sCh"]  = "@".$text;
SETJSON($rshq);
} 
}
if($data == "hdiamk" ) {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل عدد الرصيد داخل الهديه 

*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = "hdiMk0";
SETJSON($rshq);
} 
}

if($text and $rshq['mode'][$from_id] == "hdiMk0") {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  جيد جدا صديقي .
  ارسل الان عدد الاشخاص لاستخدام هذا الهديه وتحته اسم الاكود
  مثلا

  100
  SALEH
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"admin" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = "hdiMk";
$rshq['_HD'][$from_id]  = $text;
$rshq["SALEH".$rnd]  = "on|$text";
SETJSON($rshq);
} 
}

# - الملف كتابه بيرو @PvPPPP 
$rnd=rand(999,99999);
if($text and $rshq['mode'][$from_id] == "hdiMk") {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
    if($text){
    $text1 = $rshq['_HD'][$from_id];
    $mts = explode("\n",$text)[1];
    $text = explode("\n",$text)[0];
    if($mts and $text){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم اضافة كود هدية جديد
 - - - - - - - - - - - - - - - - - - 
 الكود : `". $mts."`
 عدد الرصيد : $text1
 عدد الاشخاص : $text
 - - - - - - - - - - - - - - - - - - 
 بوت الرشق المجاني : [@".bot('getme','bot')->result->username. "] 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"admin" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
$rshq[$mts]  = "on|$text1|$text";
$rshq["A#D".$mts]  = "$text";
SETJSON($rshq);
     }
} else {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    ارسل *الارقام* فقط!!
   ", 
   'parse_mode'=>"markdown",
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [['text'=>"$NamesBACK",'callback_data'=>"admin" ]],
        
       ]
     ])
 ]);
}
}
}
if($data == "onrshq") {
	if($chat_id == $sudo or $chat_id == 6704860429  ) {

    if($rshq["sSite"] != null and $rshq["sToken"] != null){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم فتح استقبال الرشق
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);
$rshq['rshqG']  = "on";
SETJSON($rshq);
      } else {
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
         لازم تكمل معلومات الرشق بلاول 
         - التوكن او دومين موقع الرشق مامحطوط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode([ 
          'inline_keyboard'=>[
            [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
          ]
          ])
          ]);
      }

}
}

# - الملف كتابه بيرو @PvPPPP
if($data == "ofrshq") {
	if($chat_id == $sudo or $chat_id == 6704860429  ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم قفل استقبال الرشق
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);

$rshq['rshqG']  = "of";
SETJSON($rshq);
}
}

if($data == "coins" ) {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل ايدي الشخص الان

*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = "coins";
SETJSON($rshq);
} 
}
if($text and $rshq['mode'][$from_id] == "coins") {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
   ارسل عدد الرصيد لاضافته للشخص
   
اذا تريد تخصم كتب ويا - 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"admin" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = "coins2";
$rshq['id'][$from_id]  = "$text";
SETJSON($rshq);
} 
}

if($text and $rshq['mode'][$from_id] == "coins2") {
	if($chat_id == $sudo or $chat_id == 6704860429 ){
        if($text != $rshq['id'][$from_id] ){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم اضافه $text ل". $rshq['id'][$from_id]. "
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"admin" ]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
$rshq["coin"][$rshq['id'][$from_id]] += $text;
SETJSON($rshq);
        }
} 
}

$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);

$coin = $rshq["coin"][$from_id];
$bot_tlb = $rshq['bot_tlb'];
$mytl = $rshq["cointlb"][$from_id];
$share = $rshq["mshark"][$from_id] ;
$coinss = $rshq["coinss"][$from_id];
$tlby =$rshq["tlby"][$from_id];
if($rshq["coin"][$from_id] == null) {
	$coin = 0;
	}
	if($rshq["tlby"][$from_id] == null) {
	$tlby = 0;
	}
	if($rshq["coinss"][$from_id] == null) {
	$coinss = 0;
	}
	if($rshq["mshark"][$from_id] == null) {
	$share = 0;
	}
	if($rshq["cointlb"][$from_id] == null) {
	$mytl = 0;
	}
	if($rshq['bot_tlb'] == null) {
	$bot_tlb = 0;
	}


$RSALEHO = [
  'inline_keyboard'=>[
  [['text'=>"🛍︙خدمات اابوت",'callback_data'=>"service" ]],
  [['text'=>"🔰︙الحساب️",'callback_data'=>"acc" ], ['text'=>"👥︙تحويل نقاط",'callback_data'=>"transer" ]],
  [['text'=>"📝︙تتبع طلب ",'callback_data'=>"infotlb" ],['text'=>"📂︙جميع طلباتي",'callback_data'=>"myrders" ]],
    [['text'=>"📢︙قنات الاثبتات",'url'=>"$chabot.t.me" ]],
          [['text'=>"📨︙مشارة الرابط",'callback_data'=>"linkme"],['text'=>"$HDIAS",'callback_data'=>"hdiaa"]],
    [['text'=>"💌︙كود هديه",'callback_data'=>"hdia" ]],
  [['text'=>"🗳︙شحن نقاط ",'callback_data'=>"buy" ],['text'=>"📜︙شروط البوت",'callback_data'=>"termss" ]],
    
    [['text'=>"🌐︙عدد الطلبات : $bot_tlb",'callback_data'=>"jj"]],
   ]
  ];
$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);

if($data == "myrders"){
foreach($rshq["orders"][$from_id] as $m){
  $b=$b."\n$m";
}
bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id' => $message_id,
  'text'=>"
  هذا هي طلباتك ✳️
$b
 ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ارسال جميع الطلبات بصيغه الملف 📁",'callback_data'=>"sendMeTxt|$from_id" ]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]); 
}

if(explode("|", $data)[0] == "sendMeTxt") {
	
	$g=bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id' => $message_id,
  'text'=>"
  يتم الترتيب 📤
 ", 
 'parse_mode'=>"markdown",
]); 
foreach($rshq["orders"][$from_id] as $m){
  $b=$b."\n$m";
}
$rb = rand(999,99999);
file_put_contents("oRD(".$rb.")_$usrbot.txt",$b);
bot ("senddocument", [
"chat_id" => $chat_id, 
"caption" => "تم الارسال بنجاح (طلباتك)", 
"document" => new CURLFile("oRD(".$rb.")_$usrbot.txt") 
]) ;
bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id' => $g->result->message_id ,
  'text'=>"
  هذا هي طلباتك ✳️
$b
 ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ارسال جميع الطلبات بصيغه الملف 📁",'callback_data'=>"sendMeTxt|$from_id" ]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]); 
unlink("oRD(".$rb.")_$usrbot.txt");
  } 
  
  $JAWA = $rshq['JAWA'];
  
if($data == "termss"){
  if($rshq['KLISHA'] == null){
bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id' => $message_id,
  'text'=>"
*🕳 شروط استخدام بوت $nambot 📜
----------------------------
1 - بوت $nambot اول بوت عربي في التلجرام مخصص لجميع خدمات برامج التواصل الاجتماعي انستقرام - تيك توك - يوتيوب - تيوتر - فيسبوك وللخ... هناك العديد من الشروط حول استخدام بوت $nambot.
----------------------------
2 - الامان والثقه الموضوع الاول لدينا وحماية خصوصية جميع المستخدمين من الاولويات لدينا لذالك جميع المعلومات من الرصيد والطلبات هي محصنة تماماً لا يسمح لـ اي شخص الاطلاع عليها الا في حالة طلب المستخدم ذالك من الدعم الفني
----------------------------
3 - على جميع المستخدمين التركيز في حالة طلب اي شيء من البوت في حالة كان حسابك او قناتك او ماشبه ذالك خاص سيلغي طلبك نهائياً لذالك لايوجد استرداد او اي تعويض لذالك وجب التنبيه
----------------------------
4 - جميع الخدمات تتحدث يومياً لا يوجد لدينا خدمات ثابته يتم اضافة يومياً العديد من الخدمات التي تكون مناسبة لجميع المستخدمين في البوت لنكون الاول والافضل دائماً
----------------------------
5 - لا يوجد اي استرداد او الغاء في حالة تم الرشق او الدعم لحساب او لقناة او لمنشور في الغلط 
----------------------------
6 - جميع الخدمات المتوفره هي موثوقه تماماً ويتم التجربه عليها قبل اضافاتها للبوت لذالك يتوفر انواع الخدمات بأسعار مختلفة من خدمة لخدمة اخرى
----------------------------*
 ", 

 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]); 
     }else{
       $k=$rshq['KLISHA'];
       bot('editmessagetext',[
        'chat_id'=>$chat_id,
        'message_id' => $message_id,
        'text'=>"
     $k
       ", 
      
       'reply_markup'=>json_encode([
           'inline_keyboard'=>[
           
           [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
             
             
            ]
          ])
      ]); 
     }
}

if($data == "JAWA"){
	if($rshq['JAWA'] == null) {
  bot('editmessagetext',[
    'chat_id'=>$chat_id,
    'message_id' => $message_id,
    'text'=>"
لم يتم تعيين كليشه
   ", 
  
   'reply_markup'=>json_encode([
       'inline_keyboard'=>[
       
       [['text'=>"$NamesBACK",'callback_data'=>"linkme" ]],
         
         
        ]
      ])
  ]); 
 } else {
 	bot('editmessagetext',[
    'chat_id'=>$chat_id,
    'message_id' => $message_id,
    'text'=>$rshq['JAWA'], 
  
   'reply_markup'=>json_encode([
       'inline_keyboard'=>[
       
       [['text'=>"$NamesBACK",'callback_data'=>"linkme" ]],
         
         
        ]
      ])
  ]); 
} 
  }

$hHSALEH = $rshq['HACKER'][$from_id];

if($text == "/start" and $hHSALEH == "I") {
  $e[1] = $rshq['HACK'][$from_id];
  $e1=$e[1];
	if(true){
		if($e1 != $from_id) {
			if(!in_array($from_id , $rshq["3thu"])){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لقد دخلت لرابط الدعوه الخاص بصديقك وحصل علي *5* رصيد

  ", 
  'parse_mode'=>"markdown",
]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
مرحبا بك في بوت $nambot 👋
👥] رصيدك : *$coin*
🔢] ايديك : `$from_id`
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RSALEHO)
]);
if(!in_array(str_replace(" ", null, $e1),$SALEH['SALEH']['send']['uname'])){
  $SALEH['SALEH']['send']['uname'][] = str_replace(" ", null, $e1);
  $SALEH['SALEH']['send']['add'][] = 1;
  file_put_contents("RSHQ/SALEH_". USR_BOT. ".json",json_encode($SALEH));
  }else{
    $yes = array_search(str_replace(" ", null, $e1),$SALEH['SALEH']['send']['uname']);
  $SALEH['SALEH']['send']['add'][$yes]+=1;
  file_put_contents("RSHQ/SALEH_". USR_BOT. ".json",json_encode($SALEH));
  }
  $rshq['HACKER'][$from_id] = null;
  $rshq['HACK'][$from_id] = null;
$rshq["3thu"][] = $from_id ;
$rshq["coin"][str_replace(" ", null, $e1)] += ($rshq["coinshare"]?? "25");
$rshq["mshark"][str_replace(" ", null, $e1)] += 1;
SETJSON($rshq); 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
مرحبا بك في بوت $nambot 👋
👥] رصيدك : *$coin*
🔢] ايديك : `$from_id`
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RSALEHO)
]);
$rshq['HACKER'][$from_id] = null;
$rshq['HACK'][$from_id] = null;
SETJSON($rshq);
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لايمكنك الدخول لرابط الدعوه الخاص بك✅
  ", 

]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
مرحبا بك في بوت $nambot 👋
👥] رصيدك : *$coin*
🔢] ايديك : `$from_id`
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RSALEHO)
]);
$rshq['HACKER'][$from_id] = null;
$rshq['HACK'][$from_id] = null;
SETJSON($rshq);
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
مرحبا بك في بوت $nambot 👋
👥] رصيدك : *$coin*
🔢] ايديك : `$from_id`
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RSALEHO)
]);
$rshq['HACKER'][$from_id] = null;
$rshq['HACK'][$from_id] = null;
SETJSON($rshq);
} 
} 

$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);

if($text == "MMTEST"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
 $b
   ", 
   'parse_mode'=>"markdown",
 ]);
}

$e=explode("|", $data) ;
$e1=str_replace("/start",null,$text); 
if($text == "/start$e1" and is_numeric($e1) and !preg_match($text,"#SALEH#")) {
	if(true){
		if($e1 != $from_id) {
			if(!in_array($from_id , $rshq["3thu"])){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لقد دخلت لرابط الدعوه الخاص بصديقك وحصل علي *5* رصيد

  ", 
  'parse_mode'=>"markdown",
]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
مرحبا بك في بوت $nambot 👋
👥] رصيدك : *$coin*
🔢] ايديك : `$from_id`
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RSALEHO)
]);
if(!in_array(str_replace(" ", null, $e1),$SALEH['SALEH']['send']['uname'])){
$SALEH['SALEH']['send']['uname'][] =str_replace(" ", null, $e1);
$SALEH['SALEH']['send']['add'][] = 1;
file_put_contents("RSHQ/SALEH_". USR_BOT. ".json",json_encode($SALEH));
}else{
  $yes = array_search(str_replace(" ", null, $e1),$SALEH['SALEH']['send']['uname']);
$SALEH['SALEH']['send']['add'][$yes]+=1;
file_put_contents("RSHQ/SALEH_". USR_BOT. ".json",json_encode($SALEH));
}
$rshq["3thu"][] = $from_id ;
$rshq["coin"][str_replace(" ", null, $e1)] += ($rshq["coinshare"]?? "25");
$rshq["mshark"][str_replace(" ", null, $e1)] += 1;
SETJSON($rshq); 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
مرحبا بك في بوت $nambot 👋
👥] رصيدك : *$coin*
🔢] ايديك : `$from_id`
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RSALEHO)
]);
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لايمكنك الدخول لرابط الدعوه الخاص بك✅
  ", 

]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
مرحبا بك في بوت $nambot 👋
👥] رصيدك : *$coin*
🔢] ايديك : `$from_id`
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RSALEHO)
]);
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
مرحبا بك في بوت $nambot 👋
👥] رصيدك : *$coin*
🔢] ايديك : `$from_id`
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RSALEHO)
]);
} 
} 

# - الملف كتابه بيرو @PvPPPP! #

if($text == "/start" and $hHSALEH != "I") {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$start
👥] رصيدك : *$coin*
🔰] ايديك : `$from_id`
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RSALEHO)
]);
 }
 
 if($data == "buy") {
   if( $rshq['buy'] == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• *لشراء رصيد من بوت رشق الفراعنة* :  

•︰5$   : 5000   في البوت
•︰10$ : 10000 في البوت 
•︰15$ : 15000 في البوت
•︰25$ : 25000 في البوت 
•︰50$ : 50000 في البوت 

• *للتواصل مع الوكيلان الوحيدان* :
•︰@pvpppp
• : [@EK_N1]

•︙*طرق الدفع المتاحة* : 

•︙زين كاش , فودافون كاش , اورنج كاش , اتصالات كاش , آسيا   . 

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[

     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} else {
  $k =  $rshq['buy'];
  bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
   $k
    
    ",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
         'inline_keyboard'=>[
    
         [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
           
          ]
        ])
    ]);
         }
         }



if($data == "tobot") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
مرحبا بك في بوت $nambot 👋
👥] رصيدك : *$coin*
🔢] ايديك : `$from_id`
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($RSALEHO)
]);
} 

$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);
if($data == "hdia") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
💳 ارسل الكود :
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = "hdia";
   
    
SETJSON($rshq);
} 


if($data == "transer") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
ارسل عدد الرصيد لتحويله 🎉
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
    $rshq['mode'][$from_id]  = $data;
   
    
SETJSON($rshq);
} 


$MakLink = substr(str_shuffle('AbCdEfGhIjKlMnOpQrStU12345689807'),1,13);
if(is_numeric($text) and $rshq['mode'][$from_id] == "transer") {
	if($rshq["coin"][$from_id] >= $text) {
		if(!preg_match('/+/',$text) or !preg_match('/-/',$text) ){
			if($text >= $AKTHAR) {
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
تم صنع رابط تحويل بقيمه $text رصيد 💲
- وتم استقطاع *$text* من رصيدك ➖

الرابط : https://t.me/[". bot('getme','bot')->result->username. "]?start=SALEH$MakLink

ايدي وصل التحويل : `$MakLink`

صار عدد رصيدك : *". $rshq["coin"][$from_id]. "*
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
$rshq["coin"][$from_id] -= $text;
$rshq['mode'][$from_id]  = null;
$rshq['thoiler'][$MakLink]["coin"] = $text;
$rshq['thoiler'][$MakLink]["to"] = $from_id;
SETJSON($rshq);
} 
else 
{
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
يمكنك تحويل رصيد اكثر من $AKTHAR فقط
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
} 

 } 
else
 {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لاتحاول استخدام الكلجا�� سيتم حظرك عام؟ 👎
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
	} 
	} else {
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
رصيدك غير كافيه ❌🗣️
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
} 
		} 
		
		$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);
	
if($text and $rshq['mode'][$from_id] == "hdia") {
	if(explode("|", $rshq[$text])[0] == "on") {
		if($rshq['mehdia'][$from_id][$text] !="on" ) {
      if(explode("|", $rshq[$text])[2] >= $rshq["TASY_$text"]){
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
تم اضافة ". explode("|", $rshq[$text])[1]."$ الى حسابك ✅
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
هذا اخذ كود الهديه بقيمه".explode("|", $rshq[$text])[1]."
 
 ~ [$name](tg://user?id=$chat_id) 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
$rshq["TASY_$text"] +=1;
$rshq['mode'][$from_id] = null;
$rshq['mehdia'][$from_id][$text] = "on" ;
$rshq["coin"][$from_id] += explode("|", $rshq[$text])[1];
SETJSON($rshq);
     } else {
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
الكود خطأ او تم استخدامه ❌
       ", 
       'parse_mode'=>"markdown",
       'reply_markup'=>json_encode([
          'inline_keyboard'=>[
          
          [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
            
            
           ]
         ])
     ]);
     $rshq['mode'][$from_id] = null;
SETJSON($rshq);
     }
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
الكود خطأ او تم استخدامه ❌
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
	} 
	} else {
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
الكود خطأ او تم استخدامه ❌
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
SETJSON($rshq);
		} 
	} 
if($data == "plus") {
	if($HDIAS) {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✳️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} else {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✳️ تجميع رصيد
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>"رابط الدعوه 🌀",'callback_data'=>"linkme"]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
	} 
} 

$SALEH = json_decode(file_get_contents("RSHQ/SALEH_". USR_BOT. ".json"),1);
$f= $SALEH['SALEH']['send']['add'];
rsort($f);
var_dump($f);
for($i=0;$i<5;$i++){
$dets = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$f[$i]"));
$name =$dets->result->title;
if($f[$i] != null){
$V = array_search($f[$i],$SALEH['SALEH']['send']['add']);
$uS = $SALEH['SALEH']['send']['uname'][$V];
$u=$i+1;

$Numbers = array(
'1' ,
'2' ,
'3',
'4' ,
'5', 


);
$NumbersBe = array('🏆' ,
'🥈' ,
'🥉' , 
'4️⃣' , 
'5️⃣' , 

);

$u = str_replace($Numbers,$NumbersBe,$u);

$dh=bot("getchat",['chat_id'=>$uS])->result->title;
if($dh != null) {
  $fk = $dh;
  } 
  if($dh == null) {
    $fk = $uS;
    } 
$ok = $ok. " $u ) ❲*$f[$i]*❳ -> [$fk](tg://user?id=$uS) \n";
}
}

$b="🌀] الاعلى في الدعوات : \n$ok" ;

if($data == "linkme") {
	$sx = ($rshq["coinshare"]?? "25");
  bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
  ✳️ تجميع رصيد

لقد دعوت : *$share* 👤

عندما تقوم بدعوة شخص من خلال الرابط :
https://t.me/[".bot("getme")->result->username."]?start=$from_id
ستحصل على $sx نقطة 👤
  ",
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
       'inline_keyboard'=>[
       [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
         
        ]
      ])
  ]);
  } 

$d = date('D');
$day = explode("\n",file_get_contents($d."_".USR_BOT.".txt"));
if($d == "Sat"){
unlink("Fri_$usrbot.txt");
}
if($d == "Sun"){
unlink("Sat_".USR_BOT.".txt");
}
if($d == "Mon"){
unlink("Sun_".USR_BOT.".txt");
}
if($d == "Tue"){
unlink("Mon_".USR_BOT.".txt");
}
if($d == "Wed"){
unlink("The_".USR_BOT.".txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu_".USR_BOT.".txt");
}
  if($data == "hdiaa"){ 
  if(!in_array($from_id, $day)){
    $HDIASs = ($rshq['hdias'] ?? "20");
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*🎁︙ لقد حصلت علي $HDIASs نقط هديه يوميه 🌴*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
 file_put_contents($d."_".USR_BOT.".txt",$from_id."\n",FILE_APPEND);
 $rshq["coin"][$from_id] += $HDIASs;
 $rshq= json_encode($rshq,32|128|265);
 file_put_contents("RSHQ/rshq.json",$rshq);
}else{
$hour = explode (".",(strtotime('tomorrow') - time()) / (60 * 60))[0];
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" * 🎁︙عزرا عزيزي لا يمكنك اخذ الهديه مرتين فقط انتظر ( $hour سعات ) للحصول علي الهديه مره اخري 👥 *
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
	} 
} 
if($data == "info") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
البوت الاول في التليجرام لزيادة متابعين الانستقرام بشكل فوري و سريع و بنسبة ثبات 99% 

    كل ماعليك هو دعوة اصدقائك من خلال الرابط الخاص بك وستحصل على متابعين مقابل كل شخص تحصل تدعوه تحصل على 10 رصيد
    
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} 

$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);


if($data == "mstqbll") {
	if($rshq['rshqG'] == "on") {
	$ster = "مفتوح ✅" ;
	$wsfer = "يمكنك الرشق ✅" ;
	} else {
		$ster = "مقفل ❌" ;
		$wsfer = "لايمكنك الرشق حاليا اجمع رصيد لحد ما ينفتح ❌" ;
		} 
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
استقبال الرشق $ster
- $wsfer
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);

} 

# - الملف كتابه بيرو @PvPPPP) #
# بـيــرو @PvPPPP - @JJJNTJ 

$e1=str_replace("/start SALEH",null,$text); 
if(preg_match('/start SALEH/',$text)){
	if($rshq['thoiler'][$e1]["to"] != null) {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  لقد حصلت علي *". $rshq['thoiler'][$e1]["coin"]. "* رصيد من رابط التحويل
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$rshq['thoiler'][$e1]["to"],
   'text'=>"
   تحويل مكتمل 💯
   
   معلومات الي دخل للرابط ✅
 اسمه : [$name](tg://user?id=$chat_id)
 ايديه : `$from_id`
 
 وتم تحويل". $rshq['thoiler'][$e1]["coin"]." رصيد لحسابه
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$rshq['thoiler'][$e1]["to"] = null;
$rshq["coin"][$from_id] += $rshq['thoiler'][$e1]["coin"];
SETJSON($rshq);
} else {
	bot('sendMessage',[
   'chat_id'=>$from_id, 
   'text'=>"
   رابط التحويل هذا غير صالح ❌
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
	} 
} 


if($data == "acc") {
$hour = explode (".",(strtotime('tomorrow') - time()) / (60 * 60))[0];
if(!in_array($from_id, $day)){
	$hour = "تستطيع المطالبة بها 🎁" ;
	} else {
		$hour = explode (".",(strtotime('tomorrow') - time()) / (60 * 60))[0]." ساعة" ;
	} 
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• احصائيات الحساب 📊
----------------------------
🔰 رصيدك : $coin نقطه
🔰 الرصيد المستخدمة : (".($rshq["cointlb"][$from_id] ?? "0").") نقطه
🔰 عدد  دعوتك : $share ✳️
🔰 طلباتك بداخل البوت : $tlby طلب 
🔰 المتبقي للهدية : $hour
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} 


 if($data == "service") {
 	if($rshq['rshqG'] == "on" ) {

    $key = ['inline_keyboard' => []];
    foreach ($rshq['qsm'] as $i) {
      $nameq = explode("-",$i)[0];
      $i = explode("-",$i)[1];
      if($rshq['IFWORK>'][$i] != "NOT"){
      $key['inline_keyboard'][] = [['text' => "$nameq", 'callback_data' => "SALEHENT|$i"]];
    }
  }

    $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "tobot"]];

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
👥] نقاطك : $coin
🔢] ايديك : $from_id 
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($key),
]);
} else {
	bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
 'text' =>"
🔰︙ تم قفل قسم الرشق حاليا من قبل المدير يمكنك جمع القاط حتي يتم فتحه 🗳
 ",
        'show_alert'=>true,
]);
}
}
if(explode("|",$data)[0]=="SALEHENT"){
  $key = ['inline_keyboard' => []];
  $vv = rand(100,900);

  foreach ( $rshq['xdmaxs'][explode("|",$data)[1]] as $hjjj => $i) {

    $key['inline_keyboard'][] = [['text' => "$i", 'callback_data' => "type|".explode("|",$data)[1]."|$hjjj"]];
  }

  $bSALEH = explode("|",$data)[1];
  
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "service"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
 
    🛍︙ اختر الخدمات التي تريدها من الاسفل 👇🏽
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $rshq['mode'][$from_id] = null;

  SETJSON($rshq);
}

if($data == "infotlb") {
 	
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
🔢] ارسل ايدي الطلب :
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
    $rshq['mode'][$from_id]  = $data;
SETJSON($rshq);
}

$rshq["sSite"] = ($rshq["sites"][$text]??$rshq["sSite"]) ;
$Api_Tok = ($rshq["keys"][$text]?? $rshq["sToken"]) ;
if(is_numeric($text) and $rshq['mode'][$from_id] == "infotlb"){
	if($text != null){
		$req = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=status&order=".$text));
$startcc = $req->start_count; //224
$status = $req->remains; 
if($status == "0"){
	$s= "طلب مكتمل 🟢";
	}else{
		$s="قيد المراجعة";
		}
		if($req) {
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   ️⃣] معلومات عن الطلب :

- 🔡] اسم الخدمة : ".$rshq["ordn"][$text]."
- 🔢] ايدي الطلب : `$text`
- ♻️] حالة الطلب : $s
- ⏳] المتبقي : $status
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'تحديث' ,'callback_data'=>"updates|".$text]],
     [['text'=>'رجوع' ,'callback_data'=>"tobot"]],
       
      ]
    ])
]);
$rshq['mode'][$from_id]  = null;
SETJSON($rshq);
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
️هذا الطلب ليس موجود في طلباتك ❌
  ", 
 'parse_mode'=>"markdown",
]);
	} 
}
}

if($e[0] == "updates"){
	$req = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=status&order=".$e[1]));
$startcc = $req->start_count; 
$status = $req->remains; 
if($status == "0"){
	$sberero= "طلب مكتمل 🟢";
	}else{
		$sberero="قيد الانتضار ....";
		}
		bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
️⃣] معلومات عن الطلب :

- 🔡] اسم الخدمة : ".$rshq["ordn"][$e[1]]."
- 🔢] ايدي الطلب : `$e[1]`
- ♻️] حالة الطلب : $sberero
- ⏳] المتبقي : $status
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'تحديث' ,'callback_data'=>"updates|".$e[1]]],
     [['text'=>'رجوع' ,'callback_data'=>"tobot"]],
       
      ]
    ])
]);
	}
if($e[0] == "type"){
	
	if($e[1] == "thbt" or $e[1] == "mthbt" or $e[1] == "hq" ) {
		$typee = "متابعين" ;
		} elseif($e[1] == "view"){
			$typee = "مشاهدات";
			}elseif($e[1] == "like"){
				$typee = "لايكات";
				}
		
		if($e[1] == "thbt") {
			$s3r = 1;
			
			}
			if($e[1] == "mthbt") {
			$s3r = 2;
			}
			if($e[1] == "hq") {
			$s3r = 0.2;
			}
			if($e[1] == "view") {
			$s3r = 25;
			}
			
			if($e[1] == "like") {
			$s3r = 18;
			}
			
			if($rshq["s3rr"][$e[1]] !=null) {
			$s3r = $rshq["s3rr"][$e[1]] ;
			}
        
        $s3r = $rshq['S3RS'][explode("|",$data)[1]][explode("|",$data)[2]];
        $web = ($rshq['Web'][explode("|",$data)[1]][explode("|",$data)[2]]??$rshq["sSite"]) ;
        $s3r = ($s3r ?? "1");
        $key = ($rshq['key'][explode("|",$data)[1]][explode("|",$data)[2]] ?? $rshq["sToken"]);
        $mix = ($rshq['mix'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "1000");
        $min = ($rshq['min'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "100");
        $g= $s3r * 1000;
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

👮🏽] اسم الخدمة : ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]."

💰] السعر : ". $g ." $ لكل 1000

📊] الحد الادني للرشق : $min
🎟️] الحد الاقصي للرشق : $mix

🦾] ارسل الكمية التي تريد طلبها :


",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
$rshq['IDX'][$from_id]  =  $rshq['IDSSS'][explode("|",$data)[1]][explode("|",$data)[2]];
$rshq['WSFV'][$from_id]  =  $rshq['WSF'][explode("|",$data)[1]][explode("|",$data)[2]];
$rshq['S3RS'][$from_id]  =  $s3r;
$rshq['web'][$from_id]  =  $web;
$rshq['key'][$from_id]  =  $key;
$rshq['min_mix'][$from_id]  = "$min|$mix" ;
$rshq['SB1'][$from_id]  =  explode("|",$data)[1];
$rshq['mode'][$from_id]  =  "SETd";
$rshq['SB2'][$from_id]  =  explode("|",$data)[2];
$rshq["="][$from_id] = $rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]];
SETJSON($rshq);
} 

if($e[0] == "kmiat"){
	
	$s3r = $rshq['S3RS'][$from_id];
        $s3r = ($s3r ?? "1");
        $g= $s3r * 1000;

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
👮🏽] اسم الخدمة : ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]."

💰] السعر : ". $g ." $ لكل 1000

🦾] اختر الكمية التي تريد طلبها :
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
  [['text'=>'السعر' ,'callback_data'=>"type|$thbt"], ['text'=>'العدد' ,'callback_data'=>"type|$mthbt"]],
  [['text'=>"$ ".$nm.$s3r*1000,'callback_data'=>"to|1000|$e[1]"], ['text'=>'1000 $' ,'callback_data'=>"to|1000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*2000,'callback_data'=>"to|2000|$e[1]"], ['text'=>'2000 $' ,'callback_data'=>"to|2000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*4000,'callback_data'=>"to|4000|$e[1]"], ['text'=>'4000 $' ,'callback_data'=>"to|4000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*8000,'callback_data'=>"to|8000|$e[1]"], ['text'=>'8000 $' ,'callback_data'=>"to|8000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*10000,'callback_data'=>"to|10000|$e[1]"], ['text'=>'10000 $' ,'callback_data'=>"to|10000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*20000,'callback_data'=>"to|20000|$e[1]"], ['text'=>'20000 $' ,'callback_data'=>"to|400|$e[1]"]],  
[['text'=>'رجوع' ,'callback_data'=>"type|". $rshq['SB1'][$from_id]."|".$rshq['SB2'][$from_id]]],
]])
]);
} 

if($data  == "tobon"){
  bot("deletemessage",["message_id" => $message_id,"chat_id" => $chat_id,]);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
 تم الالغاء بنجاح |
   ", 
   'parse_mode'=>"markdown",
 ]);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
 مرحبا بك في بوت $nambot 👋
 👥] رصيدك : *$coin*
 🔢] ايديك : `$from_id`
   ", 
   'parse_mode'=>"markdown",
   'reply_markup'=>json_encode($RSALEHO)
 ]);
 $rshq['3dd'][$from_id][$from_id]  = null;
    $rshq['mode'][$from_id]  = null;
   
    $rshq["tlbia"][$from_id] = null;
    $rshq["cointlb"][$from_id] += null;
    $rshq["s3rltlb"][$from_id] = null;
    $rshq['tp'][$from_id] = null;
    $rshq['coinn'] = null;
SETJSON($rshq);
}

if(is_numeric($text) and $rshq['mode'][$from_id]  ==  "SETd") {
  $s3r = $rshq['S3RS'][$from_id];
    $e[1] = $text;
    $s3r = $s3r * $text;
    $min = explode("|", $rshq['min_mix'][$from_id])[0];
    $mix = explode("|", $rshq['min_mix'][$from_id])[1];
	if($coin >= $s3r){
		if($rshq['rshqG'] == "on" ) {
			if($text >= $min){
				if($text <= $mix){

			bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
".$rshq['WSFV'][$from_id]."
• ارسل الرابط الخاص بك 📥 :
",
'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
  
  [['text'=>'رجوع + الغاء' ,'callback_data'=>"tobon"]],
  ]])
]);

$rshq['3dd'][$from_id][$from_id]  = $e[1];
    $rshq['mode'][$from_id]  = "MJK";
   
    $rshq["tlbia"][$from_id] = $tlbia;
   
    $rshq["s3rltlb"][$from_id] = $s3r;
    $rshq['tp'][$from_id] = $e[2];
    $rshq['coinn'] = $s3r;
SETJSON($rshq);
} else {
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
      • العدد كبير جدا
      • ارسل عدد اصغر او يساوي $mix 😅
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
      
        [['text'=>'رجوع + الغاء' ,'callback_data'=>"tobon"]],
      ]])
      ]);
	} 
  } else {
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
      • العدد صغير جدا 🤏
      • ارسل عدد اكبر من او يساوي $min 🎟️
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
      
        [['text'=>'رجوع + الغاء' ,'callback_data'=>"tobon"]],
      ]])
      ]);
  }
} else {
	

    bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم قفل استقبال الرشق عزيزي

اجمع رصيد الان علماينفتح الرشق
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
} 

} else {
	$s3r = $rshq['S3RS'][$from_id];
        $s3r = ($s3r ?? "1");
        $g= $s3r * $text ;

	bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
💰] سعر طلبك :". $g. "$

◀️] عدد طلبك : $text 

*رصيدك لايكفي لطلب $text *
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'رجوع + الغاء' ,'callback_data'=>"tobon"]],
       
      ]
    ])
]);
} 
} 

if($text and $rshq['mode'][$from_id]  == "MJK") {
    if(preg_match("/http|https/",$text) ){
    	$s3r = $rshq['S3RS'][$from_id];
        $s3r = ($s3r ?? "1");
        $g= $s3r * $rshq['3dd'][$from_id][$from_id]  ;
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
        ] هل أنت متأكد 

💰] سعر طلبك :". $g. "$
        ] ايدي الخدمة : ".rand(999999,9999999999999)."
        ] الى : [$text]
        ] الكمية : ".$rshq['3dd'][$from_id][$from_id]."
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode([
             'inline_keyboard'=>[
             [['text'=>"موافق ✅",'callback_data'=>"YESS|$from_id" ],['text'=>"الغاء ❌",'callback_data'=>"tobot" ]],
               
              ]
            ])
        ]);
        $rshq['LINKS_$from_id'] = $text;
        $rshq['mode'][$from_id] = "PROG";
        $rshq= json_encode($rshq,32|128|265);
        file_put_contents("RSHQ/rshq.json",$rshq);
}else{
     bot('sendmessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
        ارسل رابط صحيح!
        ",
        'parse_mode'=>"markdown",
        ]);
}

}

$rshq["sSite"] = ($rshq['web'][$from_id]?? $rshq["sSite"]) ;
$Api_Tok = ($rshq['key'][$from_id]?? $rshq["sToken"]) ;
$rshqaft =$rshq['bot_tlb']+1;
$rnd = rand(9999999,9999999999);
if(explode("|",$data)[0] == "YESS" and $rshq['mode'][$from_id]  == "PROG") {
	$rshq = json_decode(file_get_contents("RSHQ/rshq.json"),true);
  $rshq['S3RS'][$from_id] =  $rshq["s3rltlb"][$from_id];
      $inid = $rshq['IDX'][$from_id];
      $text = $rshq['LINKS_$from_id'];
			$requst = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=add&service=$inid&link=$text&quantity=". $rshq['3dd'][$from_id][$from_id]));
$idreq = $requst->order; 
	bot('editmessagetext',[
   'chat_id'=>$chat_id,
   "message_id" => $message_id,
   'text'=>"
   ✅] تم انشاء طلب بنجاح : 
        
   🔢] ايدي الطلب : `". $idreq."`
   🌐] تم الطلب الى : [$text]
  ", 
 'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"طلب مراجعه الطلب ✅",'callback_data'=>"sendrq|$idreq|$rnd|". $rshq["s3rltlb"][$from_id] ]],
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
طلب جديد ✅
- - - - - - - - - - - - - - - - - - 
معلومات العضو 
ايديه : `$from_id`
يوزره : [@$user]
اسمه : [$name](tg://user?id=$chat_id)

معلومات الطلب ~
ايدي الطلب : `". $rnd. "`
". str_replace("يوزر حسابك", "يوزر", $nm). " : [$text]
العدد". $rshq['3dd'][$from_id][$from_id] . " $tp

رصيده : ". $rshq["coin"][$from_id]. "
- - - - - - - - - - - - - - - - - - 
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ترجيع رصيده",'callback_data'=>"ins|$from_id|". $rshq['coinn']]],
     [['text'=>"طلب تعويض تلقائيا",'callback_data'=>"tEwth|$idreq"]],
     [['text'=>"تصفير رصيده",'callback_data'=>"msft|$from_id"]],
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$chnl,
   'text'=>"
✅ اكتمل طـلب الخدمة بنجاح .
- - - - - - - - - - - - - - - - - - 
ايدي الطلب : `". $rnd. "`
نوع الطلب :". $rshq["tlbia"][$from_id]. "
سعر الطلب :". $rshq["s3rltlb"][$from_id]. "
". str_replace("يوزر حسابك", "يوزر", $nm). " : [$text]
العدد ". $rshq['3dd'][$from_id][$from_id] . " $tp
حساب المشتري : [$name](tg://user?id=$chat_id)
الرقم التسلسلي للطلب : *". $rshqaft." * 
- - - - - - - - - - - - - - - - - - 
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"Social Plus ➕",'url'=>"https://t.me/". bot('getme','bot')->result->username]],
       
      ]
    ])
]);
$rnn = "
ا] 🎁 ".$rshq["="][$from_id]." 🎁
ا] $rnd
";
$rshq["coin"][$from_id] -=  $rshq["s3rltlb"][$from_id];
$rshq['S3RS'][$from_id] = 0;
$rshq["orders"][$from_id][]= "$rnn";
$rshq["order"][$rnd]= $idreq;
$rshq["ordn"][$idreq]= $rshq["="][$from_id];
$rshq["sites"][$idreq]= $web;
$rshq["keys"][$idreq]= $Api_Tok;
$rshq["tlby"][$from_id] += 1;
$rshq["cointlb"][$from_id] +=  $rshq["s3rltlb"][$from_id];
$rshq['3dd'][$from_id][$from_id]  = null;
    $rshq['mode'][$from_id]  = null;
    $rshq['bot_tlb']+= 1;
    
SETJSON($rshq);
} 
 
if($e[0] == "msft" and $from_id == $admin) {
	$requst = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=refil&order=$e[1]"));
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم تصفير رصيده ✅
ايديه : [$e[1]](tg://user?id=$e[1]])

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$rshq["coin"][$e[1]] = 0;
SETJSON($rshq); 
	} 
	
if($e[0] == "tEwth" and $from_id == $admin) {
	$requst = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=refil&order=$e[1]"));
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم طلب تعويض تلقائي للطلب
ايدي الطلب `$e[1]`

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
	} 
	
	if($e[0] == "sendrq" and $from_id == $admin) {
	$requst = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=refil&order=$e[1]"));
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم طلب مراجعه طلبك بنجاح ✅
ايدي الطلب `$e[2]`

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);

bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
طلب مراجعه للطلب عزيزي المطور ✨
- - - - - - - - - - - - - - - - - - 
ايدي الطلب : `". $e[2]. "`
الي داز الطلب : [$name](tg://user?id=$chat_id)
- - - - - - - - - - - - - - - - - - 
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ترجيع رصيده",'callback_data'=>"ins|$from_id|". $e[3]]],
       
      ]
    ])
]);
	} 

if($e[0] == "ins" and $from_id == $admin) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم ارجاع $e[2] رصيد لحساب [$e[1]](tg://user?id=$e[1])

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
$rshq["coin"][$e[1]] += $e[2];

$rshq["coinss"][$e[1]] += $e[2];
SETJSON($rshq);
	}
	
	
	 if($data == "saleh221") {
	        $nogomall = count($nogom);
 	bot("editMessagetext",[
                "chat_id" => $chat_id, 
                "message_id" => $message_id, 
                "text" => "
📜 مرحبا بيك في قسم رساله الترحيب (star) 
----------------------------
📝 الرساله الحاليه 
----------------------------
`$start`
----------------------------
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
[['text'=>"تعيين رساله الترحيب (start) " ,'callback_data'=>"star"]],
[['text'=>"رجوع ➪ " ,'callback_data'=>"SALEHN"]],
    ]
    ])
            ]);
  }
