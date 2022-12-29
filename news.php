<?php
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // 인증서검사 안하겠다는 뜻
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // 결과값 받기
    curl_setopt($ch, CURLOPT_HEADER, 0);  // 헤더값 받기. 0은 안받겠다는 뜻
    curl_setopt($ch, CURLOPT_URL, 'https://www.chosun.com/arc/outboundfeeds/rss/category/sports/?outputType=xml');
    $url_source=curl_exec($ch);  // $ch를 실행
    curl_close($ch);  // 실행하고 나면 닫기

    echo $url_source; // 화면에 보이게 
?>