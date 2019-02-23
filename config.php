<?php
return array(
    'WXAPPID' => 'wx2f80c2606e77156f',
    'WXAPPSECRET' => 'a14aed9bce1d6f8732f1f3be83c8d774',
    'LOGINURL' =>  "https://api.weixin.qq.com/sns/jscode2session?".
                    "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",
    'TOKENURL' => "https://api.weixin.qq.com/cgi-bin/token?".
                    "grant_type=client_credential&appid=%s&secret=%s",
    'TPLMSGURL' => "https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send?".
                    "access_token=%s"
);