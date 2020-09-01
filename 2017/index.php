<?php
    error_reporting(0);
    $from = 'index';
    if(@$_GET['from'] != ''){
        $from = $_GET['from'];
    }
    $company = [];
    $company2 = [];
    $people = [];
    $fp = fopen('company.txt','r');
    while(!feof($fp)){
        $company[] = explode(',',fgets($fp));
    }
    fclose($fp);
    $fp3 = fopen('company2.txt','r');
    while(!feof($fp3)){
        $company2[] = explode(',',fgets($fp3));
    }
    fclose($fp3);
    $fp2 = fopen('people.txt','r');
    while(!feof($fp2)){
        $people[] = explode(',',fgets($fp2));
    }
    fclose($fp2);
    $people_tr = (count($people) / 3) + 1;
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
<!-- RWD Close -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--    <meta name="viewport" content="width=1024">-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="description" content="【多陪一哩路】勵馨想要陪伴家暴受虐婦幼的不只有安置或傷後醫療，更包括幫助她們重新走入社會，找到適合的工作，有能力撫養自己未成年的孩子，讓她們吃一頓真正安心踏實的年夜飯，因此，我們需要您的協助！" />
    <meta content="勵馨,公益,年菜,勵馨公益年菜,澎派圍爐海陸組,韓國綜合果醋禮盒,手工堅果酥禮盒" name="keywords" />
    <title>2018勵馨公益合作活動網站-勵馨公益年菜</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/common.js"></script> 
    <script type="text/javascript" src="js/activity.js"></script> 
    
</head>
<body>
   
   <div id="top_btn" title="回頁首"><img src="images/top_btn.png"></div>
   
    <div class="container" id="container0">
        <div class="row">
           <div class="full_img col-12">
               <img src="images/img1.png">
           </div>
<!--
            <div class="introduction col-12">
                也許，這是他們第一次沒有壓力的團圓夜，但遠離了暴力威脅<br>
                心就安定不少，團圓就有了溫度。<br>
                雖然，這次團圓一桌的不是家人，雖是陌生，但彼此眼神中流露的神情卻是熟悉<br>
                是的，他們有類似的經歷…
            </div>
            <div class="full_img col-12">
                <img class="line_img" src="images/img2.png">
            </div>
-->
            
            <div class="btn_list col-12">
                <a href="#container1"><img class="btn col" src="images/btn1.png" style="padding-left:0;"></a>
                <a href="#container2"><img class="btn col" src="images/btn2.png"></a>
                <a href="#container3"><img class="btn col" src="images/btn3.png"></a>
                <a href="#container4"><img class="btn col" src="images/btn4.png"></a>
                <a href="#container5"><img class="btn col" src="images/btn5.png" style="padding-right:0;"></a>
            </div>
            
            <div class="select_list col-12">
                <select id="scrollBtn">
                    <option value="1"><a href="#">募集初衷</a></option>
                    <option value="2"><a href="#">募集源起</a></option>
                    <option value="3"><a href="#">募資運用</a></option>
                    <option value="4"><a href="#">捐愛商品</a></option>
                    <option value="5"><a href="#">媒體響應</a></option>
                </select>
            </div>
            
        </div>
    </div>
    
    <div class="container" id="container1">
        <div class="row">
            <div class="col-md-9 col-sm-12 row title">
                <h3>每4分鐘台灣便發生一起家暴案件<br>
                    <span>每30分鐘台灣更發生一起性侵案件</span>
                    
                </h3>
                <hr>
                <div class="title_img col-2">
                    <img src="images/img3.png" style="width:100%; padding-left:0px;">
                </div>
                <div class="goh_context col-md-10 col-sm-12">
                    全台勵馨17個分會的庇護所內，隨時都有超過百位的家暴婦女和孩子被安置，半數以上的她們傷痕累累、心理恐懼，期待勵馨能夠成為幫她們脫離苦海的那雙手。然而勵馨想做的更多，除了成為那雙溫暖的手，幫助她們治癒身體與心靈上的傷，還要幫助她們徹底脫離那個傷害她們的環境，協助她們找工作、購買生財器具，讓她和孩子能夠靠自己並且有自信的活著！<br>
                    邀請大家挹注資源與勇氣，幫助150個急待協助的受暴婦幼生活重建，走出痛苦，迎向正面積極的未來，為他們「多陪一里路」。 
                </div>
            </div>
            <div class="col-md-3 col-sm-12 character">
                <img src="images/sophia1.jpg"><br>
                勵馨社會福利事業基金會<br>
                新北分事務所 劉柏君 (索非亞)
            </div>

        </div>
    </div>
    
    <div class="container" id="container2">
        <div class="row">
            <div class="col-12">
                <h3>【多陪一哩路】幫她們完成一個有溫度的團圓飯</h3>
                <hr>
            </div>
            <div class="title_img col-2">
                <img src="images/img4.png" style="width:65%; padding-right:0px;">
            </div>
            <div class="col-md-10 col-sm-12 row">
                <div class="goh_context context1 col-md-6 col-sm-12">
                    跟家人團圓歡樂的吃一頓年夜飯，對你我而言是再平凡不過的一件事，但對剛進入庇護所的婦幼而言，雖然知道已是安全的，即使勵馨也會為她們與孩子，以及其他與自己境遇一致的人準備年夜飯一起圍爐，但未來又在何處？
                </div>
                <div class="r_img col-md-6 col-sm-12 activity">
                    <img src="images/pic1.jpg">
                </div>
                
                <div class="goh_context context2 col-md-6 order-sm-4 col-sm-12">
                    【多陪一哩路】勵馨想要陪伴家暴受虐婦幼的不只有安置或傷後醫療，更包括幫助她們重新走入社會，找到適合的工作，有能力撫養自己未成年的孩子，讓她們吃一頓真正安心踏實的年夜飯，因此，我們需要您的協助！
                </div>
                <div class="l_img col-md-6 order-sm-3 col-sm-12 activity">
                    <img src="images/pic2.jpg">
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="container" id="container3">
        <div class="row">
            <div class="col-12">
                <h3>【多陪一哩路】募資應用計劃</h3>
                <hr>
            </div>
            <div class="title_img col-2">
                <img src="images/img5.png" style="width:65%; padding-right:0px;">
            </div>
            <div class="col-md-10 col-sm-12 row">
                <div class="goh_context context1 col-12">
                全台勵馨北中南共17個分會，均有提供多陪一里路專案服務，只要是勵馨服務過的個案有自立生活需求，都可以向各分會申請現金扶助。平均每位個案投入經費，約需新台幣兩萬元整。</div>
                <div class="goh_context context2 col-md-7 col-sm-12">
                    <span class="title">經濟：</span>
                    單親婦女的租屋困難，無力繳付押金及租金等。提供階段性就業服務、陪同求職或面試、提供生活物資、申請經濟扶助、提供技職訓練/醫療/急難/托育/獎助學金等現金扶助。
                    <br>
                    <span class="title">住宅：</span>
                    提供獨立宿舍、陪同找房、提供房租補助、開發愛馨房東或愛馨房仲。包括協助獨立養活自己和孩子，二度就業的扶助等。
                    <br>
                    <span class="title">關係：</span>
                    從家庭生活到一人生活，關係被迫切斷，需要重建社會支持網絡與關係。由專業社工陪伴輔導、定期辦理各項團體/活動/講座，協助建立社區支持網絡。
                </div>
                <div class="col-md-5 col-sm-12 photo">
                    <img src="images/pic3.jpg" style="width:90%;">
                </div>
            </div>
        </div>
    </div>
    
    <div class="container" id="container4">
        <div class="row">
            <div class="col-12">
                <h3>【多陪一哩路】愛送勵馨 三種捐愛選擇</h3>
                <hr>
            </div>
            <div class="title_img col-2">
                <img src="images/img6.png" style="width:65%; padding-right:0px;">
            </div>
            <div class="col-md-10 col-sm-12">
                <img src="images/img6_title.png" style="width:100%; margin:10px 0 30px 0;">
                <div class="col-12 row commodity">
                    <div class="col-md-6 order-sm-1 col-sm-12 commodity_img"><img src="images/comm1.jpg" style="width:100%;"></div>
                    <div class="goh_context col-md-6 order-sm-2 col-sm-12">
                        <h3>愛送勵馨 澎派圍爐海陸組</h3>
                        內容物：日本昆布鍋湯底1500cc、波斯頓龍蝦375g±10%、特選嫩肩牛肉片250g±10%、台灣白蝦250g±10%、澎湖手工花枝丸300g±10%、優鮮巴沙魚片175g±10%、鮮干貝6顆裝，共七項。<br>
                        <div class="btn_place"><a href="http://i3fresh.tw/cheap_829.html?utm_source=goh_<?=$from?>" target="_blank" title="愛送勵馨澎派圍爐海陸組"><img src="images/btn6.png"></a></div>
                    </div>
                    
                    <div class="col-md-6 order-sm-4 col-sm-12 commodity_img"><img src="images/comm2.jpg" style="width:100%;"></div>
                    <div class="goh_context order-sm-3 col-md-6 col-sm-12">
                       <h3>愛送勵馨 韓國綜合果醋禮盒</h3>
                        內容物：藍莓4瓶、石榴3瓶、草莓葡萄柚1瓶<br>
                        綜合蔬果1瓶、奇異果葡萄1瓶，250毫升/瓶；共10瓶<br>
                        <div class="btn_place"><a href="http://i3fresh.tw/cheap_831.html?utm_source=goh_<?=$from?>" target="_blank" title="愛送勵馨韓國綜合果醋禮盒"><img src="images/btn6.png" ></a></div>
                    </div>
                
                    <div class="col-md-6 order-sm-5 col-sm-12 commodity_img"><img src="images/comm3.jpg" style="width:100%;"></div>
                    <div class="goh_context col-md-6 order-sm-6 col-sm-12">
                       <h3>愛送勵馨 手工堅果酥禮盒</h3>
                        內容物：手工杏仁酥、手工南瓜子酥、手工黑芝麻角，250公克；共三罐。<br>
                        <div class="btn_place"><a href="http://i3fresh.tw/cheap_830.html?utm_source=goh_<?=$from?>" target="_blank" title="愛送勵馨手工堅果酥禮盒"><img src="images/btn6.png" ></a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <div class="container" id="container5">
        <div class="row">
            <div class="col-12">
                <h3>【多陪一哩路】藝人媒體響應</h3>
                <hr>
            </div>
            <div class="title_img col-2">
                <img src="images/img7.png" style="width:65%; padding-right:0px;">
            </div>
            

            <div class="col-md-10 col-sm-12 row">
                <?php for ($i=1;$i<$people_tr;$i++) { ?>
                    <?php $k=0; ?>
                <div class="col-12 artist">
                                <?php foreach($people as $key => $value) { ?>
                                    <?php
                                        if($k == 3) {
                                            echo "</div>";
                                            break;
                                        }
                                    ?>
                                    <a href="<?=(isset($value[2]))?$value[2]:'javascript:void(0);'?>" target="_blank"><img title="<?=$value[0]?>" class="d-inline" src="<?=$value[1]?>"></a>
                                    <?php
                                        unset($people[$key]);
                                        $k++;
                                    ?>
                                <?php } ?>

                        <?php } ?>
                </div>
            </div>

<!--
           <div class="col-md-10 col-sm-12 row">
                    <div class="col-12 artist">
                        <a href="#" target="_blank"><img class="d-inline" src="images/artist/artist1.png"></a>
                        <a href="#" target="_blank"><img class="d-inline" src="images/artist/artist2.png"></a>
                        <a href="#" target="_blank"><img class="d-inline" src="images/artist/artist3.png"></a>
                    </div>
                    <div class="col-12 artist">
                        <a href="#" target="_blank"><img class="d-inline" src="images/artist/artist4.png"></a>
                        <a href="#" target="_blank"><img class="d-inline" src="images/artist/artist5.png"></a>
                        <a href="#" target="_blank"><img class="d-inline" src="images/artist/artist6.png"></a>
                    </div>
                    <div class="col-12 artist">
                        <a href="#" target="_blank"><img class="d-inline" src="images/artist/artist7.png"></a>
                        <a href="#" target="_blank"><img class="d-inline" src="images/artist/artist8.png"></a>
                        <a href="#" target="_blank"><img class="d-inline" src="images/artist/artist9.png"></a>
                    </div>
            </div>
-->

            </div>
        </div>
    
    <footer class="container">
        <div class="row">
           <div class="col-12 sponsor">
               <div class="col-12 row sponsor1">
                   <div class="col-lg-12">
                       <ul class="inline-block">
                           <li class="d-inline">主辦單位</li>
                           <li class="d-inline logo" title="勵馨基金會"><a href="http://www.goh.org.tw" target="_blank"><img src="images/logo/logo1.png"></a></li>
                       </ul>
                    </div>
               </div>
               <div class="col-12 row sponsor2">
                  <div class="col-lg-12">
                       <ul class="inline-block">
                           <li class="d-inline">協辦單位</li>
                           <li class="d-inline logo">
                               <?php foreach($company as $value){ ?>
                                   <a href="<?=(empty($value[1]))?'javascript:void(0);':$value[1]?>" target="_blank"><img title="<?=$value[0]?>" src="<?=$value[2]?>"></a>
                               <?php } ?>
                           </li>
                       </ul>
                    </div>
                </div>
                <div class="col-12 row sponsor3">
                   <div class="col-lg-2 col-md-3 col-sm-3 title">協力單位</div>
                   <div class="col-lg-10 col-md-9 col-sm-9">
                       <?php foreach($company2 as $value){ ?>
                           <a href="<?=(empty($value[1]))?'javascript:void(0);':$value[1]?>" target="_blank"><img title="<?=$value[0]?>" src="<?=$value[2]?>"></a>
                       <?php } ?>
                    </div>
                </div>
           </div>
<!--
           <div class="col-12 footer_img">
                <img src="images/footer.png" style="width:100%;">
           </div>
-->
        </div>
    </footer>
</body>
</html>
