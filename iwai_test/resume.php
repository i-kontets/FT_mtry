<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>
    <link rel="stylesheet" href="css/resume.css">
</head>
<body>
    <?php
        $name = $_REQUEST["name"];
        $name_huri = $_REQUEST["name_huri"];
        $post_number = $_REQUEST["post_number"];
        $post = $_REQUEST['post'];
        $post_name = $_REQUEST["post_name"];
        $gaku1 = isset($_REQUEST["gaku1"]) ? $_REQUEST["gaku1"] : '';
        $gaku2 = isset($_REQUEST["gaku2"]) ? $_REQUEST["gaku2"] : '';
        $gaku3 = isset($_REQUEST["gaku3"]) ? $_REQUEST["gaku3"] : '';
        $gaku4 = isset($_REQUEST["gaku4"]) ? $_REQUEST["gaku4"] : '';
        $gaku5 = isset($_REQUEST["gaku5"]) ? $_REQUEST["gaku5"] : '';
        $gaku6 = isset($_REQUEST["gaku6"]) ? $_REQUEST["gaku6"] : '';
        $gaku7 = isset($_REQUEST["gaku7"]) ? $_REQUEST["gaku7"] : '';
        $gaku8 = isset($_REQUEST["gaku8"]) ? $_REQUEST["gaku8"] : '';
        $gaku9 = isset($_REQUEST["gaku9"]) ? $_REQUEST["gaku9"] : '';
        $gaku10 = isset($_REQUEST["gaku10"]) ? $_REQUEST["gaku10"] : '';
        $gaku11 = isset($_REQUEST["gaku11"]) ? $_REQUEST["gaku11"] : '';
        $gaku12 = isset($_REQUEST["gaku12"]) ? $_REQUEST["gaku12"] : '';
        $gaku13 = isset($_REQUEST["gaku13"]) ? $_REQUEST["gaku13"] : '';
        $gaku14 = isset($_REQUEST["gaku14"]) ? $_REQUEST["gaku14"] : '';
        $gaku15 = isset($_REQUEST["gaku15"]) ? $_REQUEST["gaku15"] : '';
        $gaku16 = isset($_REQUEST["gaku16"]) ? $_REQUEST["gaku16"] : '';
        $sikaku1 = isset($_REQUEST["sikaku"]) ? $_REQUEST["sikaku"] : '';
        $sikaku2 = isset($_REQUEST["sikaku2"]) ? $_REQUEST["sikaku2"] : '';
        $sikaku3 = isset($_REQUEST["sikaku3"]) ? $_REQUEST["sikaku3"] : '';
        $sikaku4 = isset($_REQUEST["sikaku4"]) ? $_REQUEST["sikaku4"] : '';
        $sikaku5 = isset($_REQUEST["sikaku5"]) ? $_REQUEST["sikaku5"] : '';
        $sikaku6 = isset($_REQUEST["sikaku6"]) ? $_REQUEST["sikaku6"] : '';
        $kamoku1 = isset($_REQUEST["kamoku"]) ? $_REQUEST["kamoku"] : '';
        $kamoku2 = isset($_REQUEST["kamoku2"]) ? $_REQUEST["kamoku2"] : '';
        $kamoku3 = isset($_REQUEST["kamoku3"]) ? $_REQUEST["kamoku3"] : '';
        $kenkou = isset($_REQUEST["kenkou"]) ? $_REQUEST["kenkou"] : '';
        $sports = isset($_REQUEST["sports"]) ? $_REQUEST["sports"] : '';
        $syumi = isset($_REQUEST["syumi"]) ? $_REQUEST["syumi"] : '';
        
        
    echo <<< HTML
    <main>
        <div id="capture">
            <!-- 左側 -->
            <div class="r_main_left">
                <div class="r_photo">
                </div>
                <!-- タイトル -->
                <div class="r_title">
                    <p class="title">履歴書</p>
                </div>
                <!-- ここまで -->
                <!-- 日にち -->
                <div class="r_day">
                    <p>年月日現在</p>
                </div>
                <!-- ここまで -->
                <!-- 名前 -->
                <div style="vertical-align:middle;position:absolute;top:26mm;left:21mm;width:88.5mm;height:5.2mm;border-width:0.5mm 0.2mm 0.2mm 0.5mm;border-style:solid solid solid solid"></div>
                <div style="position:absolute;top:25mm;left:22mm;width:88.5mm;height:5.2mm">
                    <font class="furi">
                        ふりがな
                    </font>
                </div>
                <div style="position:absolute;top:25mm;left:21mm;width:88.5mm;height:5.2mm;text-align:center">
                    <font class="furix3">
                        $name_huri
                    </font>
                </div>
                <!-- 性別 -->
                <div style="position:absolute;top:26mm;left:109mm;width:12mm;height:5.2mm;border-width:0.5mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                <div style="position:absolute;top:25mm;left:109.5mm;width:12mm;height:5.2mm">
                    <font class="idx">
                        ※男･女
                    </font>
                </div>
                <div style="position:absolute;top:26.6mm;left:111.8mm;width:12mm;height:5mm">
                    <font style="font-size:12pt">
                        ○
                    </font>
                </div>
                <!-- 名前 -->
                <div style="position:absolute;top:31mm;left:21mm;width:99.8mm;height:16.5mm;border-width:0.2mm 0.5mm 0.2mm 0.5mm;border-style:solid solid solid solid"></div>
                <div style="position:absolute;top:32mm;left:22mm;width:88.5mm;height:16.5mm">
                    <font class="idx">
                        氏　　名
                    </font>
                </div>
                <div style="position:absolute;top:36mm;left:21mm;width:88.5mm;height:16.5mm;text-align:center">
                    <font class="shimei">
                        $name
                    </font>
                </div>
                <!-- 印鑑 -->
                <!-- <div style="position:absolute;top:31mm;left:109mm;width:12mm;height:16.5mm;border-width:0.2mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                <div style="position:absolute;top:32mm;left:110mm;width:12mm;height:16.5mm">
                    <font class="furi">
                        印
                    </font>
                </div> -->
                <!-- 生年月日 -->
                <div style="position:absolute;top:47mm;left:21mm;width:99.8mm;height:10mm;border-width:0.2mm 0.5mm 0.2mm 0.5mm;border-style:solid solid solid solid"></div>
                <div style="position:absolute;top:51mm;left:22mm;width:100mm;height:10mm">
                    <font class="idx">
                        生年月日　
                    </font>
                    &nbsp;
                    <font class="idx">
                        平成　
                    </font>
                    <font class="furix">
                        50
                    </font>
                    <font class="idx">
                        　年　　
                    </font>
                    <font class="furix">
                        &nbsp;1
                    </font>
                    <font class="idx">
                        　月　
                    </font>
                    <font class="furix">
                        &nbsp;1
                    </font>
                    <font class="idx">
                        　日生 (満 
                    </font>
                    <font class="furix">
                    </font>
                    <font class="idx">
                        才)
                    </font>
                </div>
                <!-- 住所 -->
                <div style="position:absolute;top:57mm;left:21mm;width:100mm;height:5mm;border-width:0.2mm 0.2mm 0.2mm 0.5mm;border-style:solid none none solid"></div>
                <div style="position:absolute;top:55.5mm;left:22mm;width:100mm;height:5mm">
                    <font class="furi">
                        ふりがな
                    </font>
                </div>
                <div style="position:absolute;top:55.5mm;left:40mm;width:100mm;height:5mm">
                    <font class="furix2">
                        $post_name
                    </font>
                </div>
                <div style="position:absolute;top:62mm;left:21mm;width:120mm;height:11mm;border-width:0.2mm 0.2mm 0.2mm 0.5mm;border-style:solid none solid solid"></div>
                <div style="position:absolute;top:60mm;left:22mm;width:120mm;height:11.5mm">
                    <font class="idx">
                        現住所　〒
                    </font>
                    <font class="furix">
                        $post_number
                    </font>
                </div>
                <div style="position:absolute;top:67.5mm;left:23mm;width:120mm;height:11.5mm">
                    <font class="adr">
                        $post
                    </font>
                </div>
                <!-- 電話番号 -->
                <div style="position:absolute;top:56.9mm;left:121.5mm;width:52.3mm;height:5mm;border-width:0.5mm 0.2mm 0.2mm 0.2mm;border-style:solid solid none none"></div>
                <div style="position:absolute;top:56.9mm;left:141mm;width:32.5mm;height:4.8mm;border-width:0.5mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                <div style="position:absolute;top:56mm;left:142mm;width:32mm;height:5.5mm">
                    <font class="idx">
                        電話市外(　　　　)
                    </font>
                </div>
                <div style="position:absolute;top:56mm;left:153mm;width:16.5mm;height:5.55mm;text-align:center">
                    <font class="furix">
                        a
                    </font>
                </div>
                <div style="position:absolute;top:62.0mm;left:141mm;width:32.5mm;height:5.5mm;border-width:0.2mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid;text-align:center"></div>
                <div style="position:absolute;top:62mm;left:141mm;width:32mm;height:5.5mm;text-align:center">
                    <font class="furix">
                        a&nbsp;－&nbsp;a
                    </font>
                </div>
                <div style="position:absolute;top:67.3mm;left:141mm;width:32.5mm;height:6mm;border-width:0.2mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                <div style="text-align:center;position:absolute;top:67mm;left:141mm;width:32mm;height:6mm">
                    <font class="idx">
                        (　　　　　　方呼出)
                    </font>
                </div>
                <div style="position:absolute;top:67mm;left:137mm;width:22mm;height:5.5mm;text-align:right">
                    <font class="furix_n">
                        あいうえお
                    </font>
                </div>
                <!-- 住所２ -->
                <div style="position:absolute;top:73.1mm;left:21mm;width:152.2mm;height:5mm;border-width:0.2mm 0.5mm 0.2mm 0.5mm;border-style:solid solid none solid"></div>
                <div style="position:absolute;top:73mm;left:22mm;width:152.2mm;height:5mm;">
                    <font class="furi">
                        ふりがな
                    </font>
                </div>
                <div style="position:absolute;top:73mm;left:40mm;width:152.2mm;height:5mm;">
                    <font class="furix2">
                        a
                    </font>
                </div>
                <div style="position:absolute;top:78.1mm;left:21mm;width:152.2mm;height:11.5mm;border-width:0.2mm 0.5mm 0.5mm 0.5mm;border-style:solid solid solid solid;text-align:right"></div>
                <div style="position:absolute;top:77mm;left:21mm;width:152.2mm;height:11.5mm;text-align:right">
                    <font class="idx">
                        　　　　　　　　　　(現住所以外の連絡を希望する場合のみ記入)&nbsp;
                    </font>
                </div>
                <div style="position:absolute;top:77mm;left:22mm;width:152.2mm;height:11.5mm">
                    <font class="idx">
                        連絡先　〒 
                    </font>
                    <font class="furix">
                        aaaaaa
                    </font>
                </div>
                <div style="position:absolute;top:84mm;left:23mm;width:152mm;height:11.5mm">
                    <font class="adr">
                        a
                    </font>
                </div>
                <div style="vertical-align:middle;text-align:right;position:absolute;top:84.5mm;left:111mm;width:60mm;height:6.5mm;border-width:0.2mm 0.2mm 0.2mm 0.5mm;border-style:none none none none">
                    <font class="furix">
                        a
                    </font>
                </div>
                <!-- 学歴・経歴 -->
                <div style="text-align:center;vertical-align:middle;position:absolute;top:92mm;left:21mm;width:16.4mm;height:7.1mm;border-width:0.5mm 0.2mm 0.2mm 0.5mm;border-style:solid solid solid solid"></div>
                <div style="text-align:center;position:absolute;top:94mm;left:21mm;width:16.4mm;height:7.1mm">
                    <font class="idx">
                        年
                    </font>
                </div>
                <div style="text-align:center;vertical-align:middle;position:absolute;top:92mm;left:37mm;width:8.2mm;height:7.1mm;border-width:0.5mm 0.2mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                <div style="text-align:center;position:absolute;top:94mm;left:37mm;width:8.2mm;height:7.1mm">
                    <font class="idx">
                        月
                    </font>
                </div>
                <div style="text-align:center;vertical-align:middle;position:absolute;top:92mm;left:45mm;width:128.5mm;height:7.1mm;border-width:0.5mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                <div style="text-align:center;vertical-align:middle;position:absolute;top:94mm;left:45mm;width:128mm;height:7.1mm">
                    <font class="idx">
                        学歴・職歴(各別まとめて書く)
                    </font>
                </div>
    HTML;
                
                $data=99;
                for ($i=0; $i < 15; $i++) { 
                    echo <<< HTML
                    <div style="text-align:center;position:absolute;top:{$data}mm;left:21mm;width:16.4mm;height:9.2mm;border-width:0.2mm 0.2mm 0.2mm 0.5mm;border-style:solid solid solid solid"></div>
                    <div style="text-align:center;vertical-align:middle;position:absolute;top:{$data}mm;left:37mm;width:8.2mm;height:9.2mm;border-width:0.2mm 0.2mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                    <div style="text-align:center;vertical-align:middle;position:absolute;top:{$data}mm;left:45mm;width:128.5mm;height:9.2mm;border-width:0.2mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                    HTML;
                    $data+=9;
                }
        echo <<< HTML
                
                <div style="position:absolute;top:99.8mm;left:46mm;width:125.8mm;height:143mm;">
                    <font class="textlist">
                    $gaku1<br> $gaku2<br>$gaku3<br>$gaku4<br>$gaku5<br>$gaku6<br>$gaku7<br>$gaku8<br>$gaku9<br>$gaku10<br>$gaku11<br>$gaku12<br>$gaku13<br>$gaku14<br>$gaku15<br>$gaku16<br>
                    </font>
                </div>
                <div style="position:absolute;top:99.8mm;left:22mm;width:20mm;height:143mm;z-index:-1">
                    <font class="textlist">
                        23<br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </font>
                </div>
                <div style="text-align:center;position:absolute;top:99.8mm;left:37.5mm;width:7.2mm;height:143mm;z-index:-1">
                    <font class="textlist">
                        3<br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </font>
                </div>
                <div style="text-align:center;position:absolute;top:234mm;left:21mm;width:16.4mm;height:9.2mm;border-width:0.2mm 0.2mm 0.5mm 0.5mm;border-style:solid solid solid solid"></div>
                <div style="text-align:center;vertical-align:middle;position:absolute;top:234mm;left:37mm;width:8.2mm;height:9.2mm;border-width:0.2mm 0.2mm 0.5mm 0.2mm;border-style:solid solid solid solid"></div>
                <div style="text-align:center;vertical-align:middle;position:absolute;top:234mm;left:45mm;width:128.5mm;height:9.2mm;border-width:0.2mm 0.5mm 0.5mm 0.2mm;border-style:solid solid solid solid"></div>
                <div style="position:absolute;top:243.1mm;left:21mm;width:125mm;height:8mm">
                    <font class="pic">
                        記入注意　　数字はアラビア数字で、半角２文字または全角１文字で収める
                    </font>
                </div>
            </div>
            <!-- 右側 -->
            <div class="r_main_right">
            <div style="text-align:center;position:absolute;top:20mm;left:200mm;width:16.2mm;height:7.1mm;border-width:0.5mm 0.2mm 0.2mm 0.5mm;border-style:solid solid solid solid"></div>
            <div style="text-align:center;position:absolute;top:22mm;left:200mm;width:16.2mm;height:7.1mm\">
                <font class="idx">
                    年
                </font>
            </div>
            <div style="text-align:center;;position:absolute;top:20mm;left:216.5mm;width:8.4mm;height:7.1mm;border-width:0.5mm 0.2mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
            <div style="text-align:center;position:absolute;top:22mm;left:216.5mm;width:8.4mm;height:7.1mm\">
                <font class="idx">
                    月
                </font>
            </div>
            <div style="text-align:center;position:absolute;top:20mm;left:225mm;width:128mm;height:7.1mm;border-width:0.5mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
            <div style="text-align:center;position:absolute;top:22mm;left:225mm;width:128mm;height:7.1mm\">
                <font class="idx">
                    免 許・資 格
                </font>
            </div>
            HTML;
            $top=27;
        
            for ($i=0; $i < 5; $i++) { 
                echo <<< HTML
                <div style="text-align:center;position:absolute;top:{$top}mm;left:200mm;width:16.2mm;height:9.2mm;border-width:0.2mm 0.2mm 0.2mm 0.5mm;border-style:solid solid solid solid"></div>
                <div style="text-align:center;position:absolute;top:{$top}mm;left:216.5mm;width:8.4mm;height:9.2mm;border-width:0.2mm 0.2mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                <div style="text-align:center;position:absolute;top:{$top}mm;left:225mm;width:128mm;height:9.2mm;border-width:0.2mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
                HTML;
                $top+=9;
            }
echo <<< HTML
            <div style="position:absolute;top:28mm;left:200mm;width:20mm;height:52mm">
                <font class="textlist">
                    平成12<br> <br><br><br><br><br>
                </font>
            </div>
            <div style="text-align:center;position:absolute;top:28mm;left:216.5mm;width:8mm;height:52mm">
                <font class="textlist">
                    12<br> <br><br><br><br><br>
                </font>
            </div>
            <div style="position:absolute;top:28mm;left:225mm;width:126mm;height:52mm">
                <font class="textlist">
                    $sikaku1<br>$sikaku2<br>$sikaku3<br>$sikaku4<br>$sikaku5<br>$sikaku6
                </font>
            </div>
            <div style="text-align:center;position:absolute;top:72mm;left:200mm;width:16.2mm;height:9.2mm;border-width:0.2mm 0.2mm 0.5mm 0.5mm;border-style:solid solid solid solid"></div>
            <div style="text-align:center;position:absolute;top:72mm;left:216.5mm;width:8.4mm;height:9.2mm;border-width:0.2mm 0.2mm 0.5mm 0.2mm;border-style:solid solid solid solid"></div>
            <div style="text-align:center;position:absolute;top:72mm;left:225mm;width:128mm;height:9.2mm;border-width:0.2mm 0.5mm 0.5mm 0.2mm;border-style:solid solid solid solid"></div>
            <div style="position:absolute;top:82mm;left:200mm;width:76.1mm;height:36.2mm;border-width:0.5mm 0.2mm 0.2mm 0.5mm;border-style:solid solid solid solid"></div>
            <div style="position:absolute;top:83mm;left:201mm;width:76.1mm;height:37.2mm">
                <font class="idx">
                    得意な科目・分野
                </font>
            </div>
            <div style="position:absolute;top:84mm;left:198mm;width:76mm;height:36mm">
                <table border="0" width="100%" height="100%">
                    <tbody>
                        <tr>
                            <td align="center">
                                <table width="80%">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <font class="textlist">
                                                    $kamoku1<br>$kamoku2<br>$kamoku3<br>
                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="position:absolute;top:82mm;left:276.5mm;width:76.1mm;height:36.2mm;border-width:0.5mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
            <div style="position:absolute;top:83mm;left:277mm;width:76.1mm;height:37.2mm">
                <font class="idx">
                    健康状態
                </font>
            </div>
            <div style="position:absolute;top:84mm;left:277mm;width:76mm;height:36mm">
                <table width="100%" height="100%">
                    <tbody>
                        <tr>
                            <td align="center">
                                <table width="80%">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <font class="textlist">
                                                    $kenkou<br><br><br>
                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="position:absolute;top:118mm;left:200mm;width:76.1mm;height:36.2mm;border-width:0.2mm 0.2mm 0.2mm 0.5mm;border-style:solid solid solid solid"></div>
            <div style="position:absolute;top:119mm;left:201mm;width:76.1mm;height:36.2mm\">
                <font class="idx">
                    スポーツ・クラブ活動・文化活動など
                </font>
            </div>
            <div style="position:absolute;top:120mm;left:198mm;width:76.1mm;height:36.2mm">
                <table border="0" width="100%" height="100%">
                    <tbody>
                        <tr>
                            <td align="center">
                                <table width="80%">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <font class="textlist">
                                                    $sports<br><br><br>
                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="position:absolute;top:118mm;left:276.5mm;width:76.1mm;height:36.2mm;border-width:0.2mm 0.5mm 0.2mm 0.2mm;border-style:solid solid solid solid"></div>
            <div style="position:absolute;top:119mm;left:277mm;width:76.1mm;height:36.2mm\">
                <font class="idx">
                    趣味・特技
                </font>
            </div>
            <div style="position:absolute;top:120mm;left:277mm;width:76.1mm;height:36.2mm">
                <table border="0" width="100%" height="100%">
                    <tbody>
                        <tr>
                            <td align="center">
                                <table width="80%">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <font class="textlist">
                                                    $syumi<br><br><br>
                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="position:absolute;top:154mm;left:200mm;width:152.3mm;height:35.3mm;border-width:0.2mm 0.5mm 0.5mm 0.5mm;border-style:solid solid solid solid"></div>
            <div style="position:absolute;top:153mm;left:201mm;width:152.1mm;height:35.3mm\">
                <font class="idx">
                    志望の動機
                </font>
            </div>
            <div style="position:absolute;top:154mm;left:201mm;width:152.1mm;height:35.3mm">
                <table border="0" width="100%" height="100%" cellpadding="16">
                    <tbody>
                        <tr>
                            <td valign="top">
                                <font class="textlist3">
                                    a<br><br><br><br><br><br>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="z-index:-10;position:absolute;top:189mm;left:200mm;width:152.1mm;height:56mm;border-width:0.2mm 0.5mm 0.5mm 0.5mm;border-style:solid solid solid solid"></div>
            <div style="z-index:-10;position:absolute;top:190mm;left:201mm;width:152.1mm;height:56mm\">
                <font class="idx">
                    本人希望記入欄（特に給料・職種・勤務時間・勤務地・その他について希望があれば記入）
                </font>
            </div>
            <div style="z-index:-10;position:absolute;top:189mm;left:202mm;width:152.1mm;height:56mm">
                <table border="0" width="100%" height="100%" cellpadding="16">
                    <tbody>
                        <tr>
                            <td valign="top">
                                <font class="textlist3">
                                    a<br><br><br><br><br><br><br><br><br><br>
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button onclick="captureH1()">画像として保存</button>
    </main>
HTML;
?>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script>
        function captureH1() {
            const element = document.getElementById('capture');
            const pdfWidth = 1400; // PDFの幅 (必要に応じて調整)
            const pdfHeight = 1000; // PDFの高さ (必要に応じて調整)

            html2canvas(element, { width: pdfWidth, height: pdfHeight }).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const pdf = new jspdf.jsPDF({
                    orientation: (pdfWidth > pdfHeight) ? 'landscape' : 'portrait', // 横長ならlandscape、縦長ならportrait
                    unit: 'px',
                    format: [pdfWidth, pdfHeight]
                });
                pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
                pdf.save('konnichiwa.pdf');
            });
        }
</script>
</body>
</html>