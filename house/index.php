<!doctype HTML> 
<html xmlns:fb="http://ogp.me/ns/fb#">  
   <head>  
    <title>住得起的社會住宅｜Social Housing In Taipei City</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
    <meta name="description" content="2016年版住得起的社會住宅 - 更新上線!!! 北市政府最新住宅計劃，西班牙、荷蘭、奧地利等國際新案例分享。數年過去了，這些議題有何變與不變?對未來居住的想像，我們有更具體的藍圖?">
    <link href="css/style.css" rel="stylesheet" media="screen" />
    <meta property="og:title" content="住得起的社會住宅" /> 
    <meta property="og:type" content="website" /> 
    <meta property="og:url" content="http://www.urstaipei.net/housing/" /> 
    <meta property="og:image" content="https://www.urstaipei.net/housing/imgs/fbimg.jpg" />
    <meta property="og:description" content="2016年版住得起的社會住宅 - 更新上線!!! 北市政府最新住宅計劃，西班牙、荷蘭、奧地利等國際新案例分享。數年過去了，這些議題有何變與不變?對未來居住的想像，我們有更具體的藍圖?"/>
    <link href="https://www.urstaipei.net/housing/imgs/fbimg.jpg" rel="image_src" type="image/jpeg">
    <meta name="robots" content="noindex,nofollow">
  </head>  
  <body class="hidebar">
    <div id="loadWrap"><div class="loader"><div class="spinner"></div></div></div>  
  	<div id="container">
        <section id="banner">
            <header class="fixed center">
                <div class="v100">
                    <div class="valgin">
                        <h1>SOCIAL HOUSING IN TAIPEI CITY</h1>
                        <hr />
                        <strong>住得起的社會住宅</strong>
                        <p>政府推出社會住宅方案，希望解決解決台北市居住問題。<br>
                        身為市井小民的你我，是如何選擇居住的空間呢？<br>
                        透過國際案例與居住相關數據資料彙整，<br>
                        看見人們對於居住的不同需求，也開拓我們對於未來居住的想像。</p>
                        
                        <a href="#down" class="go">START LET'S GO!</a>
                    </div> <!-- /middle -->
                </div> <!-- /v100 -->
            </header>
            <div class="cover">
                <img src="bg.svg" alt="" class="svgimg">
            </div> <!-- /cover -->
        </section>
        <section id="map" class="wrap">
            <header>
                <div class="update">2015.12.31</div>
                <h1>台北市的社會住宅</h1>
                <p>柯P新政預計2018年任期結束前，4年內增加兩萬五千戶「只租不賣」的社會住宅</p>

                <div class="count">
                    <span><strong data-number="46">0</strong>處</span>
                    <span><strong data-number="21281">0</strong>戶</span>
                </div> <!-- /count -->

                <div class="tab">
                    <a href="#all" class="active"><span>ALL</span></a>
                    <a href="#marker1" class="type1"><span>出租中</span></a>
                    <a href="#marker2" class="type2"><span>推動中</span></a>
                    <a href="#marker3" class="type3"><span>規劃中</span></a>
                </div> <!-- /tab -->
            </header>
            <div id="googlemap"></div>
            <p class="note">資料來源: <a href="http://tcgwww.taipei.gov.tw/ct.asp?xItem=147553634&ctNode=82924&mp=108051M" target="_blank">台北市政府都發局</a></p>
            <a href="#wrap5" class="scrollDown">Down</a>
        </section>
        <section id="wrap5" class="wrap">
            <header>
                <div class="update">2015.03.18</div>
                <h1>各國社會住宅比例</h1>
                <p>荷蘭是目前世界上社會住宅最普及的國家。另外，鄰近的亞洲國家韓國也預計將社<br>會住宅比例從目前的 6.5% 提高到 10%。然而，台灣只有 0.08%</p>
            </header>
            <div id="graphic7" class="graphic">
                <ul>
                    <?php 
                        // percent = 5.09
                        $array7 = array(
                            "nl" => array("荷蘭","32.0","172","blue"),
                            "hk" => array("香港","30.5","158","white"),
                            "uk" => array("英國","18.2","96","blue"),
                            "jp" => array("日本","6.1","43","white"),
                            "kor" => array("韓國","5.1","37","white"),
                            "usa" => array("美國","5.0","28","red"),
                            "aus" => array("澳洲","4.5","7","white"),
                            "tw" => array("台灣","0.08","1","red")
                        );

                        foreach ($array7 as $key => $location7) {
                    ?>
                    <li class="<?php echo $key; ?>"><div class="progress-bar"><div class="head"></div><div class="housebar <?php echo $location7[3]; ?>" data-height="<?php echo $location7[2]; ?>"></div></div><h2><?php echo $location7[0]; ?></h2><p class="runNum" data-number="<?php echo $location7[1]; ?>">0</p></li>
                    <?php
                        }
                    ?>
                </ul>
                <p class="note">資料來源 <a href="http://socialhousingtw.blogspot.tw/" target="_blank">社會住宅推動聯盟</a></p>
            </div>
            <a href="#wrap" class="scrollDown">Down</a>
        </section>
        <section id="wrap" class="wrap">
            <header>
                <div class="update">2015.03.05</div>
                <h1>世界各國 住宅自有率</h1>
                <p>文化因素, 使我們期待擁有自有住宅 , 相信有土斯有財<br>住宅自有率的數據可以體現部分的事實，顯示出我們對於擁有房子的渴望，<br>但卻無法反映出諸如絕大多數人是很痛苦才換來一棟不一定滿意的住宅，<br>又有多少人是連房子都負擔不起的。</p>
            </header>
            <div id="graphic1" class="graphic">
                <ul>
                    <?php 
                        $array1 = array(
                            "tw"  => array("台灣","79.20","210","red"),
                            "usa"  => array("美國","65.3","150","red"),
                            "aus"  => array("澳洲","64.3","142","blue"),
                            "uk"  => array("英國","64.2","139","blue"),
                            "jp"  => array("日本","61.9","125","white"),
                            "nl"  => array("荷蘭","56.2","106","blue"),
                            "kor"  => array("韓國","54.2","115","white"),
                            "hk"  => array("香港","52.0","89","red")
                        );

                        foreach ($array1 as $key => $location1) {
                    ?>
                    <li class="<?php echo $key; ?>"><div class="progress-bar"><div class="head"></div><div class="housebar <?php echo $location1[3]; ?>" data-height="<?php echo $location1[2] ?>"></div></div><h2><?php echo $location1[0]; ?></h2><p class="runNum" data-number="<?php echo $location1[1]; ?>">0%</p></li>
                    <?php
                        }
                    ?>
                    
                </ul>
                <p class="note">資料來源 <a href="http://socialhousingtw.blogspot.tw/" target="_blank">社會住宅推動聯盟</a></p>
            </div> <!-- /graphic1 -->
            <a href="#wrap8" class="scrollDown">Down</a>
        </section>
        <section id="wrap8" class="wrap">
            <header>
                <div class="update">2016.03</div>
                <h1>台北市25年房價指數走勢</h1>
                <p>不斷攀升的房價，已讓大多數在台北生活與工作的人們負擔不起購屋。<br>市民基本的居住需求，難以獲得滿足。同時，即便建商不斷推出新的建案，<br>但台灣平均空屋率仍然高達10.63%</p>
            </header>
            <div id="graphic2" class="graphic">
                <strong>基期指數</strong>
                <p class="unit">年</p>
                <table id="data" border="0" cellspacing="0" cellpadding="0">
                    <tfoot>
                        <tr>
                            <th>79</th>
                            <th>81</th>
                            <th>83</th>
                            <th>85</th>
                            <th>87</th>
                            <th>89</th>
                            <th>91</th>
                            <th>93</th>
                            <th>95</th>
                            <th>97</th>
                            <th>99</th>
                            <th>101</th>
                            <th>103</th>
                            <th>105</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td data-total="100">100</td>
                            <td data-total="117.19">117.19</td>
                            <td data-total="124.08">124.08</td>
                            <td data-total="118.9">118.9</td>
                            <td data-total="116.43">116.43</td>
                            <td data-total="112.59">112.59</td>
                            <td data-total="100.55">100.55</td>
                            <td data-total="123.3">123.3</td>
                            <td data-total="159.91">159.91</td>
                            <td data-total="183.4">183.4</td>
                            <td data-total="234.56">234.56</td>
                            <td data-total="268.28">268.28</td>
                            <td data-total="316.75">316.75</td>
                            <td data-total="259.69">295.69</td>
                         </tr>
                    </tbody>
                </table>
                <div id="holder"></div>
                <p class="note" style="line-height:200%;">基期 : 某一時期的價格水平與另一個時期價格水平對比計算的相對數。通常把作為對比基礎的時期叫做基期。<br />資料來源：<a href="http://www.land.gov.taipei/lp.asp?ctNode=84923&CtUnit=36420&BaseDSD=7&mp=111001" target="_blank">臺北市政府地政局「住宅價格指數查詢服務」</a></p>
            </div> <!-- /graphic2 -->
            <a href="#wrap1" class="scrollDown">Down</a>
        </section>
        <section id="wrap1" class="wrap">
            <header>
                <div class="update">2016.06.08</div>
                <h1>台北市成交房價</h1>
                <p>25 年過去，據統計，台北市房價從每坪 20 萬飆升，大安區甚至達到每坪91.5萬。</p>
            </header>
            <div id="graphic3" class="graphic">
                <ul>
                    <!-- percent = 2 -->
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="179"></div></div><h2>大安區</h2><p class="runNum" data-number="91.5">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="160"></div></div><h2>信義區</h2><p class="runNum" data-number="80.0">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="152"></div></div><h2>中山區</h2><p class="runNum" data-number="76.0">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="142"></div></div><h2>中正區</h2><p class="runNum" data-number="71.2">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="140"></div></div><h2>松山區</h2><p class="runNum" data-number="69.9">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="138"></div></div><h2>士林區</h2><p class="runNum" data-number="68.8">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="120"></div></div><h2>南港區</h2><p class="runNum" data-number="59.6">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="116"></div></div><h2>內湖區</h2><p class="runNum" data-number="58.1">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="112"></div></div><h2>大同區</h2><p class="runNum" data-number="56.2">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="100"></div></div><h2>北投區</h2><p class="runNum" data-number="50.1">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="99"></div></div><h2>文山區</h2><p class="runNum" data-number="49.8">0</p><p class="unit">萬 / 坪</p></li>
                    <li><div class="progress-bar"><div class="head"></div><div class="bar" data-height="99"></div></div><h2>萬華區</h2><p class="runNum" data-number="49.8">0</p><p class="unit">萬 / 坪</p></li>
                </ul>
                <p class="note">資料來源: <a href="http://www.gov.taipei/ct.asp?xItem=190167452&ctNode=65441&mp=100003" target="_blank">臺北市政府地政局</a></p>
            </div>
            <a href="#wrap2" class="scrollDown">Down</a>
        </section>
        <section id="wrap2" class="wrap">
            <header>
                <div class="update">2015.03.05</div>
                <h1>各國租屋比例</h1>
                <p>咦! 瑞士人、德國人、荷蘭人不追求購買住宅?<br>在瑞士有高達半數以上的人選擇租屋</p>
            </header>
            <div id="graphic4" class="graphic">
                <ul>
                    <?php 
                        $array4 = array(
                            "hk" => array("香港","48.0","90","red"),
                            "nl" => array("荷蘭","43.1","82","blue"),
                            "kor" => array("韓國","38.7","71","white"),
                            "jp" => array("日本","38.1","70","white"),
                            "usa" => array("美國","34.7","64","red"),
                            "uk" => array("英國","34.4","61","blue"),
                            "aus" => array("澳洲","28.7","53","blue"),
                            "tw" => array("台灣","10.9","7","red")
                        );

                        foreach ($array4 as $key => $location4) {
                    ?>
                    <li class="<?php echo $key; ?>"><div class="progress-bar"><div class="head"></div><div class="housebar <?php echo $location4[3]; ?>" data-height="<?php echo $location4[2]; ?>"></div></div><h2><?php echo $location4[0]; ?></h2><p class="runNum" data-number="<?php echo $location4[1]; ?>">0</p></li>
                    <?php
                        }
                    ?>
                </ul>

                <p class="note">資料來源 <a href="http://socialhousingtw.blogspot.tw/" target="_blank">社會住宅推動聯盟</a></p>
            </div>
            <a href="#wrap3" class="scrollDown">Down</a>
        </section>
        <section id="wrap3" class="wrap none">
            <header>
                <h1>什麼是社會住宅?</h1>
                <p>如果社會住宅可能成為人們的新選擇，<br>讓我們從來源、興建、經營單位與租期來瞭解社會住宅。</p>
            </header>
            <div id="graphic5" class="graphic">
                <ul>
                    <li class="icon1"><div class="icon"></div><h2>來源</h2><p>公有土地興建<br>重新規劃低度利用空間<br>結合其他公共設施</p></li>
                    <li class="icon2"><div class="icon"></div><h2>興建單位</h2><p>政府, 住宅法人<br>NPO ( 非營利組織)<br>建商</p></li>
                    <li class="icon3"><div class="icon"></div><h2>經營單位</h2><p>政府, 住宅法人<br>物業管理公司<br>非營利組織</p></li>
                    <li class="icon4"><div class="icon"></div><h2>租期</h2><p>有一定年限<br>無年限 ( 只要符合資格)</p></li>
                </ul>        
            </div>
        </section>
        <section id="wrap4" class="wrap">
            <header>
                <h1>社會住宅居住者</h1>
                <p>原來，社會住宅居住者的類型也可以很多元。<br>在荷蘭，教授、高收入者也積極申請居住在社會住宅。</p>
            </header>
            <div id="graphic6" class="graphic">
                <ul>
                    <li class="icon1"><div class="icon"></div><h2>災民</h2></li>
                    <li class="icon2"><div class="icon"></div><h2>老人</h2></li>
                    <li class="icon3"><div class="icon"></div><h2>低收入戶</h2></li>
                    <li class="icon4"><div class="icon"></div><h2>中收入戶</h2></li>
                    <li class="icon5"><div class="icon"></div><h2>青年</h2></li>
                    <li class="icon6"><div class="icon"></div><h2>學生</h2></li>
                    <li class="icon7"><div class="icon"></div><h2>教授</h2></li>
                </ul>
            </div>
            <a href="#wrap6" class="scrollDown">Down</a>
        </section>
        <section id="wrap6" class="wrap">
            <header>
                <h1>台灣與荷蘭</h1>
                <p>兩國數據比一比。台灣與荷蘭土地面積相似，<br>對於社會住宅的支持度截然不同。</p>
            </header>
            <div id="graphic8" class="graphic">
                <div class="col left">
                    <strong class="label">國土面積╱km2</strong>
                    <p class="runNum" data-number="36188">0</p>
                    
                    <strong class="label">人口密度╱km2</strong>
                    <p class="runNum" data-number="639">0</p>
                </div>
                <div class="col right">
                    <strong class="label">國土面積╱km2</strong>
                    <p class="runNum" data-number="41543">0</p>
                    
                    <strong class="label">人口密度╱km2</strong>
                    <p class="runNum" data-number="491">0</p>
                </div>
                <div class="clear"></div>
            </div> <!-- /graphic7 -->
            
            <div id="graphic9" class="graphic">
            	<div class="goalWrap">
                    <div class="goal">3000萬</div>
                    <div class="goal">2000萬</div>
                    <div class="goal">1000萬</div>
                    <div class="goal">0</div>
                    <div class="goal">1000萬</div>
                    <div class="goal">2000萬</div>
                    <div class="goal">3000萬</div>
                    <div class="clear"></div>
                </div> <!-- /goalWrap -->
            
                <strong class="label">人口</strong>
                <div class="table">
                    <div class="progress">
                        <div class="col left"><div class="bar" data-width="367"></div><p class="runNum" data-number="23128559">0</p></div>
                        <div class="col right"><div class="bar" data-width="262"></div><p class="runNum" data-number="16586902">0</p></div>
                    </div>
                </div> <!-- /table -->
    
                <strong class="label">住宅量</strong>
                <div class="table">
                    <div class="progress">
                        <div class="col left"><div class="bar" data-width="126"></div><p class="runNum" data-number="8074391">0</p></div>
                        <div class="col right"><div class="bar" data-width="110"></div><p class="runNum" data-number="7043212">0</p></div>
                    </div>
                </div> <!-- /table -->
                
                <strong class="label">社會住宅</strong>
                <div class="table">
                    <div class="progress">
                        <div class="col left"><div class="bar" data-width="1"></div><p class="runNum" data-number="6541"></p></div>
                        <div class="col right"><div class="bar" data-width="36"></div><p class="runNum" data-number="2400000"></p></div>
                    </div>
                </div> <!-- /table -->
                <p class="note">資料來源 : 荷蘭阿姆斯特丹住宅協會聯盟政策顧問與副會長 / 荷蘭住宅法人機制與運作國際論壇</p>
            </div> <!-- /graphic8 -->
            <a href="#wrap7" class="scrollDown">Down</a>
        </section>
        <section id="wrap7" class="wrap">
            <header>
                <h1>世界上的社會住宅形式</h1>
                <p>過去大型獨棟的社會住宅，通常單一服務弱勢族群。容易造成貧民窟標籤化等社會問題；<br>重視平等的荷蘭，在臨水景觀規劃建案，優質設計師的建築、地段極佳，週邊有豪宅，大型建築物內部混合使用，<br>讓我們看到除了擁有自宅之外，社會住宅可以提供服務並能多元居住可能性。</p>
            </header>
            <hr class="line" />
            <div class="cycle">
                <div class="item">
                    <div class="caption">
                        <h2>西班牙｜巴塞隆納｜Santa Caterina Market</h2>
                        <p>90年代鄰里發動保留市場文化運動，由法人團體 Foment de Ciutat Vella S.A發展多方合作，Santa Caterina Market改造方案衍生出一座博物館、兩棟低租金高齡者社會住宅、卸貨動線與停車場、區域有機廚餘回收系統，及全新升級攤商網路客製化銷售服務。</p>
                        <a href="#slideDown" class="down">建案細節 <span class="downImg"></span></a>
                    </div>
                    <div class="slideDown">
                        <div class="col left">
                            <div class="row">
                                <div class="label">案名</div>
                                <p>Santa Caterina Market</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">地點</div>
                                <p>Barcelona, SPAIN</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">年份</div>
                                <p>1997.4 - 2005.5</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">土地所有</div>
                                <p>公有地-老舊市場更新案</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">規模尺度</div>
                                <p>29596 m²</p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="col right">
                            <div class="row">
                                <div class="label">空間機能類型</div>
                                <p>Market shopping area, a museum, two blocks of 59 low-rent social housing for senior citizens, an underground car park and organic waste depository.</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">政策相關單位</div>
                                <p>Foment de Ciutat Vella S.A.</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">資料來源</div>
                                <p><a href="http://www.luca.lu/documents" target="_blank">01</a>,<a href="http://goo.gl/5DKDht" target="_blank">02</a>,<a href="http://goo.gl/ngm5rH" target="_blank">03</a>,<a href="https://goo.gl/yKa68M" target="_blank">04</a>,<a href="http://goo.gl/4gfD9k" target="_blank">05</a></p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="clear"></div>
                    </div> <!-- /slidedown -->
                    <img src="imgs/SantaCaterinaMarket.jpg" width="960" height="540" alt="" />
                </div> <!-- /item -->
                <div class="item">
                    <div class="caption">
                        <h2>西班牙｜巴塞隆納｜Fort Pienc</h2>
                        <p>西班牙奧運結束後，Fort Pienc鄰里向政府爭取增設老舊工業區內的公共服務設施。經市府團隊整合規劃與營運，陸續完成改建奧運游泳池、戶外廣場、市民中心、圖書館、市場、日間托兒、照護中心、學生、青年、長者社會住宅。</p>
                        <a href="#slideDown" class="down">建案細節 <span class="downImg"><span></span><span></span></a>
                    </div>
                    <div class="slideDown">
                        <div class="col left">
                            <div class="row">
                                <div class="label">案名</div>
                                <p>Fort Pienc</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">地點</div>
                                <p>Barcelona, SPAIN</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">建造期間</div>
                                <p>1999-2006</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">土地所有</div>
                                <p>公有地-老舊冶金廠位於工業區<br />（奧運遺址週邊）</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">規模尺度</div>
                                <p>3,632 m²</p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="col right">
                            <div class="row">
                                <div class="label">空間機能類型</div>
                                <p>A large variety of different programs have their entrances directly opening onto the plaza (library, school, senior home, student and young residences, market, cafe-bars).</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">政策相關單位</div>
                                <p>City Council (現在的市民中心營運單位Centre Cívic Ateneu Fort Pienc)</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">資料來源</div>
                                <p><a href="https://goo.gl/VtKyNq" target="_blank">01</a>,<a href="http://goo.gl/lml7aL" target="_blank">02</a>,<a href="https://goo.gl/fpHuuV" target="_blank">03</a>,<a href="https://goo.gl/IeKPKb" target="_blank">04</a>,<a href="http://goo.gl/C4Apgk" target="_blank">05</a></p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="clear"></div>
                    </div> <!-- /slidedown -->
                    <img src="imgs/FortPienc.jpg" width="960" height="540" alt="" />
                </div> <!-- /item -->
                <div class="item">
                    <div class="caption">
                        <h2>荷蘭｜阿姆斯特丹｜GWL-Terrein</h2>
                        <p>GWL-Terrein水廠改建計劃創造了阿姆斯特丹第一個無車生態社區。市府主導開發「半數社會住宅、半數市售住宅（2/3出售對象僅限政府補助者）」並加入Car Sharing，讓居民與建築師共同參與住宅設計。</p>
                        <a href="#slideDown" class="down">建案細節 <span class="downImg"><span></span><span></span></a>
                    </div>
                    <div class="slideDown">
                        <div class="col left">
                            <div class="row">
                                <div class="label">案名</div>
                                <p>GWL-Terrein</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">地點</div>
                                <p>Amsterdam, Netherland</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">建造期間</div>
                                <p>Amsterdam, Netherland  1993 - 1998</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">土地所有</div>
                                <p>公有地-老舊冶金廠位於工業區<br />（奧運遺址週邊）</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">規模尺度</div>
                                <p>11,050 m²</p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="col right">
                            <div class="row">
                                <div class="label">空間機能類型</div>
                                <p>78 social rented housing<br />
                                41 owner-occupied properties<br />
                                housing for elderly (block 5) and for handicapped persons<br />
                                over 50 business accommodation and communal space</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">政策相關單位</div>
                                <p>Stadgenoot (Amsterdam最大公共住宅建設組織)<br />
                                The Environmental Advisory Bureau (BOOM)<br />
                                Amsterdam city council</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">資料來源</div>
                                <p><a href="https://goo.gl/GnjKON" target="_blank">01</a>,<a href="http://goo.gl/ADgBkd" target="_blank">02</a>,<a href="http://goo.gl/5aYkFS" target="_blank">03</a>,<a href="http://goo.gl/U1HgZJ" target="_blank">04</a>,<a href="http://goo.gl/PBjCkN" target="_blank">05</a>,<a href="http://goo.gl/IcpJId" target="_blank">06</a>,<a href="http://siebeswart.photoshelter.com/image/I00004MlBWR_wQio" target="_blank">07</a></p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="clear"></div>
                    </div> <!-- /slidedown -->
                    <img src="imgs/GWL-Terrein.jpg" width="960" height="540" alt="" />
                </div> <!-- /item -->
                <div class="item">
                    <div class="caption">
                        <h2>奧地利｜維也納｜Sargfabrik</h2>
                        <p>根據奧地利政府「補貼住房」政策，住戶承擔17.5%興建資金，82.5%資金以繳交住宅租金的方式分期攤還，Association of integrative lifestyle, VIL集體生活協會成員合資買下維也納郊區廢棄棺材工廠，自主營運並協力改造Sargfabrik成為量身訂做的共享實驗住宅社區。</p>
                        <a href="#slideDown" class="down">建案細節 <span class="downImg"><span></span><span></span></a>
                    </div>
                    <div class="slideDown">
                        <div class="col left">
                            <div class="row">
                                <div class="label">案名</div>
                                <p>Sargfabrik</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">地點</div>
                                <p>Vienna, Austria</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">建造期間</div>
                                <p>1996 The Sargfabrik / 2000 Miss Sargfabrik</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">土地所有</div>
                                <p>集體持有-由協會買下原棺材工廠土地</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">規模尺度</div>
                                <p>about 5500 m²</p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="col right">
                            <div class="row">
                                <div class="label">空間機能類型</div>
                                <p>A cultural house, restaurant, kindergarten, and twenty-four-hour bathhouse that is also publically accessible. Parking spaces for cars were kept to a minimum in order to make room for the swimming area.<br />
                                A community kitchen, library, and rehearsal room serve to augment the Sargfabrik’s facilities.</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">政策相關單位</div>
                                <p>Association for Integrative Lifestyle (VIL)</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">資料來源</div>
                                <p><a href="http://goo.gl/cagnZ9" target="_blank">01</a>,<a href="http://www.sargfabrik.at/" target="_blank">02</a>,<a href="http://goo.gl/cMpM8L" target="_blank">03</a>,<a href="https://issuu.com/nushratj/docs/sargfabrik-_booklet" target="_blank">04</a>,<a href="http://www.sargfabrik.at/CustomResources/PDFs/Presse/ea6241ee-1811-4bfe-8607-17553c346a16.pdf" target="_blank">05</a>,<a href="http://goo.gl/AOF4DK" target="_blank">06</a>,<a href="http://www.acfny.org/media/press-images-texts/the-vienna-model/" target="_blank">07</a></p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="clear"></div>
                    </div> <!-- /slidedown -->
                    <img src="imgs/Sargfabrik.jpg" width="960" height="540" alt="" />
                </div> <!-- /item -->
                <div class="item">
                    <div class="caption">
                        <h2>荷蘭｜阿姆斯特丹｜the Whale</h2>
                        <p>在臨水景觀規劃建案，優質設計師的建築、地段極佳，週邊有豪宅，<br>大型建築物內部混合使用，除了社會住宅外，還有商辦、一般出租住宅與停車場。</p>
                        <a href="#slideDown" class="down">建案細節 <span class="downImg"></span></a>
                    </div>
                    <div class="slideDown">
                        <div class="col left">
                            <div class="row">
                                <div class="label">案名</div>
                                <p>the Whale</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">地點</div>
                                <p>Baron G.A. Tindalstraat, <br>southeast of city centre</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">年份</div>
                                <p>1998 - 2000</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">尺寸</div>
                                <p>35,800 sm</p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="col right">
                            <div class="row">
                                <div class="label">空間分配</div>
                                <p>150 social housing<br>64 private housing to rent<br>1.100 m2 business accomodation<br>179 parking spaces</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">資料來源</div>
                                <p><a href="http://en.cie.nl/projects/39" target="_blank">01</a>,<a href="http://www.e-architect.co.uk/amsterdam/whale-building" target="_blank">02</a>,<a href="http://www.mascontext.com/issues/4-living-winter-09/case-study-4-the-whale/" target="_blank">03</a></p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="clear"></div>
                    </div> <!-- /slidedown -->
                    <img src="imgs/p_01.jpg" width="960" height="540" alt="" />
                </div> <!-- /item -->
                <div class="item">
                    <div class="caption">
                        <h2>荷蘭｜阿姆斯特丹｜WoZoCo</h2>
                        <p>專為老年人打造的公寓，現有住宅改造，<br>在原有住宅上加上懸吊模組，成為友善老人的住宅。</p>
                        <a href="#slideDown" class="down">建案細節 <span class="downImg"><span></span><span></span></a>
                    </div>
                    <div class="slideDown">
                        <div class="col left">
                            <div class="row">
                                <div class="label">案名</div>
                                <p>WoZoCo</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">地點</div>
                                <p>Amsterdam-Osdorp</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">年份</div>
                                <p>1997</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">尺寸</div>
                                <p>7500 m2</p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="col right">
                            <div class="row">
                                <div class="label">空間分配</div>
                                <p>100間為老年人打造的公寓</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">資料來源</div>
                                <p><a href="http://www.mmag.com.tw/ad/20140210-architectural_design-856" target="_blank">01</a>,<a href="http://www.mvrdv.nl/projects/wozoco/" target="_blank">02</a></p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="clear"></div>
                    </div> <!-- /slidedown -->
                    <img src="imgs/p_02.jpg" width="960" height="540" alt="" />
                </div> <!-- /item -->
                <div class="item">
                    <div class="caption">
                        <h2>法國｜巴黎｜Tetris</h2>
                        <p>看見這個巴黎的都市再生社會住宅案例，低樓層住宅。將空間結合公營住宅與創意聚落工作空間，<br>提供了目前創意產業興盛發展時，讓青年創意工作者，有機會在負擔得起的狀況下擁有良好工作與生活空間的可能性。</p>
                        <a href="#slideDown" class="down">建案細節 <span class="downImg"><span></span><span></span></a>
                    </div>
                    <div class="slideDown">
                        <div class="col left">
                            <div class="row">
                                <div class="label">案名</div>
                                <p>Tetris, Social Housing <br>and Artist Studios</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">地點</div>
                                <p>North Paris</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">年份</div>
                                <p>2010</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">比例</div>
                                <p>社會住宅 75%</p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="col right">
                            <div class="row">
                                <div class="label">空間分配</div>
                                <p>9residences and 3 artists' studios <br>were built on three narrow plots <br>low-rise building (低層住宅形式)</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">資料來源</div>
                                <p><a href="http://www.archdaily.com/382507/tetris-social-housing-and-artist-studios-moussafir-architectes/" target="_blank">01</a>,<a href="http://www.world-architects.com/en/projects/41461_Tetris_Social_Housing_Artist_Studios" target="_blank">02</a></p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="clear"></div>
                    </div> <!-- /slidedown -->
                    <img src="imgs/p_03.jpg" width="960" height="540" alt="" />
                </div> <!-- /item -->
                <div class="item">
                    <div class="caption">
                        <h2>比利時｜布魯塞爾｜Savonnerie Heymans</h2>
                        <p>舊肥皂工廠改建，有不同的住宅單元及娛樂設施，塑造像村落一樣的氛圍<br>閒置空間除了成為創意園區，也可能成為協助解決問題住宅問題的好場所。提供時尚感滿點的居住的氛圍</p>
                        <a href="#slideDown" class="down">建案細節 <span class="downImg"><span></span><span></span></a>
                    </div>
                    <div class="slideDown">
                        <div class="col left">
                            <div class="row">
                                <div class="label">案名</div>
                                <p>Savonnerie Heymans</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">地點</div>
                                <p>Baron G.A. Tindalstraat, <br>southeast of city centre</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">年份</div>
                                <p>2011</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">比例</div>
                                <p>社會住宅 100% public housing scheme</p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="col right">
                            <div class="row">
                                <div class="label">空間分配</div>
                                <p>42 sustainable accommodations of different types including studios. <br>1 to 6-bedroom apartments, lofts, duplexes and Maisonettes. <br>"Mini-forest" garden, the 3D landscaped park and playground and the main promenade.</p>
                                <div class="clear"></div>
                            </div>
                            <div class="row">
                                <div class="label">資料來源</div>
                                <p><a href="http://www.archdaily.com/220116/savonnerie-heymans-mdw-architecture/" target="_blank">01</a>,<a href="http://v2com-newswire.com/en/newsroom/categories/real-estate/press-kits/931-01/savonnerie-heymans-e88da26f-9976-4aae-9cac-a5b5afab770a" target="_blank">02</a></p>
                                <div class="clear"></div>
                            </div>
                        </div> <!-- /col -->
                        <div class="clear"></div>
                    </div> <!-- /slidedown -->
                    <img src="imgs/p_04.jpg" width="960" height="540" alt="" />
                </div> <!-- /item -->
                
                <a href="#next" id="nextBtn">Next</a>
                <a href="#prev" id="prevBtn">Prev</a>
            </div> <!-- /cycle -->
            <ul id="pager"></ul>
            <a href="#total" class="scrollDown">Down</a>
        </section>
        <section id="total" class="wrap">
            <header>
                <img src="imgs/c_08.gif" width="102" height="101" alt="" align="middle" class="middle" />
                <h1>整體結論</h1>
            </header>
            <p>提供完善品質負擔得起的住宅，是台灣都市發展必須正視的課題。現有台灣住宅商品化的問題及住宅市場機制，早已無法提供民眾安居的需求。了解社會住宅在台北都會發展的機會，這不只是為了解決台灣住宅數量問題，而是從人的需求出發，思考如何提供機能完善的環境，創造出都市中人與人能夠自然、隨意互動的地方，提升居民都市日常生活滿足感與歸屬感。</p>
    
            <p>從國際案例中，我們看見發展社會住宅可以有多元可能。例如它的位置可以是在豪宅旁的極佳地段，住宅也非單一屬性，它可以與商辦混合、結合停車場、設有青年創業基地及藝術家工作室。甚至，現有的閒置空間，也可在利用成為社會住宅。</p>
    
            <p>從每一個市井居民自身開始，拓展對於未來居住、生活空間更豐富的想像；也期待政府能夠妥善運用公有土地，運用公辦公營的方式，邀請民眾參與，共同描繪出我們對於未來台灣都市生活的願景，以找到台灣所需要的住宅模式。這不只是解決住宅問題，同時解決都市問題!</p>
            
            <div class="links">
                <h2>社會住宅推動機構</h2>
                <a href="https://housingov.blogspot.tw/" target="_blank">巢運 無殼蝸牛全面進化</a>
                <a href="https://www.facebook.com/taiwan.snail/" target="_blank">無殼蝸牛聯盟</a>
                <a href="http://socialhousingtw.blogspot.tw/" target="_blank">社會住宅推動聯盟</a>
            </div>
        </section>
        <section id="case" class="wrap">
            <h1>相關案例資料</h1>
            
            <div class="newsWrap">
            	<hr class="leftLine" />
                <hr class="rightLine" />
                <div class="clear"></div>
                <ul>
                    <li><a href="http://www.urstaipei.net/article/18529" target="_blank">荷蘭「自造」- 低地國城市與地景 IV – 李宇中 / 台北村落之聲</a></li>
                    <li><a href="http://www.lihpao.com/?action-viewnews-itemid-101312" target="_blank">借鏡歐洲 社會住宅變好宅 / 台灣立報 </a></li>
                    <li><a href="http://opinion.cw.com.tw/blog/profile/315/article/2493" target="_blank">羅惠珍：我在法國住了20年社會住宅 / 天下獨立評論 </a></li>
                    <li><a href="http://sports.nccu.edu.tw/~SOCI/files/news/367_52327df2.pdf" target="_blank">合作住宅文化是社會住宅的未來：柏林與歐洲的規劃、設計與管理計畫</a></li>
                    <li><a href="http://opinion.cw.com.tw/blog/profile/315/article/3373" target="_blank">羅惠珍：法國的住宅部是怎麼來的？ / 天下獨立評</a></li>
                    <li><a href="https://www.youtube.com/watch?v=qQcDfp6INi4" target="_blank">智慧城市No.1　維也納7成人有國宅住 / 中天電視</a></li>
                    <li><a href="https://www.youtube.com/watch?v=Ncw6OxW2als" target="_blank">安養院變青年住宅 芬蘭社會設計力量大 / TVBS</a></li>
                    <li><a href="http://euhousing.blogspot.tw/2016/01/brusselssavonnerie-heymans.html" target="_blank">布魯塞爾 - Savonnerie Heymans 永續的另一種途徑 / 陳哲生</a></li>
                    <li><a href="http://www.equalbydesign.co.uk/" target="_blank">英國當代住房危機Equal By Design / Peg Rawes and Beth Lord</a></li>
                    <li><a href="http://www.udd.gov.taipei/phhearing" target="_blank">台北市公共住宅計劃公聽會 / 臺北市政府都市發展局</a></li>
                </ul>
                <ul>
                    <li><a href="http://opinion.cw.com.tw/blog/profile/255/article/4059" target="_blank">李永展：公共住宅，不只是居住空間 / 天下獨立評論</a></li>
                    <li><a href="http://opinion.cw.com.tw/blog/profile/255/article/3279" target="_blank">李永展：迎毗vs.鄰避：住宅政策的兩極化難題 / 天下獨立評論</a></li>
                    <li><a href="http://www.urstaipei.net/article/8100" target="_blank">出租住宅民間開發模式_大阪NICE株式會社 – 劉欣蓉 / 台北村落之聲</a></li>
                    <li><a href="http://www.urstaipei.net/article/15624" target="_blank">韓國公共租賃住宅與居住福利概念的擴大 – 江尚書 / 台北村落之聲</a></li>
                    <li><a href="https://www.youtube.com/playlist?list=PLjjrV9IhkIpfvzao_qDcHoeVTlYXlfXsm" target="_blank">社會住宅亞洲取經- 韓國公宅、新加坡組屋、香港公屋 / 公視新聞網</a></li>
                    <li><a href="http://socialhousingtw.blogspot.tw/2014/08/blog-post_66.html" target="_blank">亞洲各國社會住宅比較 (日、韓、港、新、台) / 社會住宅推動聯盟</a></li>
                    <li><a href="http://www.cpami.gov.tw/chinese/index.php?option=com_content&view=article&id=17021&Itemid=76" target="_blank">新加坡「住者有其屋」計畫與我國住宅政策之比較 / 內政部營建署</a></li>
                    <li><a href="http://www.channelnewsasia.com/tv/tvshows/buildingblocks/design-evolution/2558468.html" target="_blank">新加坡公共住宅紀錄片Design Evolution / CHANNEL NEWSASIA</a></li>
                    <li><a href="http://www.urstaipei.net/article/19994" target="_blank">「家」或「住宅」？從都市生活到住宅的文化想像與社會共識（一）/ 殷寶寧</a></li>
                    <li><a href="http://www.urstaipei.net/article/20050" target="_blank">「居住NEXT-社會住宅」手冊（電子版）/ 社會住宅推動聯盟</a></li>
                </ul>
                <div class="clear"></div>
            </div> <!-- /newsWrap -->
            <a href="#news2" class="scrollDown">Down</a>
        </section>
        <section id="news2" class="wrap">
            <h1>巢運是什麼</h1>
            <div class="gallery">
            	<div class="row">
                	<a href="https://www.youtube.com/watch?v=RHsQrwKWqgE" target="_blank" class="post">
                        <div class="mark"></div>
                        <div class="mask"></div>
                        <img src="imgs/v_1.jpg" width="293" height="162" alt="" />
                        <h2>蝸牛未退 巢運再起</h2>
                        <p>公共電視-獨立特派員367集</p>
                    </a>
                    <a href="https://www.youtube.com/watch?v=vfN7z9MZI4Y" target="_blank" class="post">
                        <div class="mark"></div>
                        <div class="mask"></div>
                        <img src="imgs/v_2.jpg" width="293" height="162" alt="" />
                        <h2>蝸牛的家在哪</h2>
                        <p>公共電視 - 獨立特派員368集</p>
                    </a>
                    <a href="https://www.youtube.com/watch?v=ZUlTIPX-4RA" target="_blank" class="post">
                        <div class="mark"></div>
                        <div class="mask"></div>
                        <img src="imgs/v_3.jpg" width="293" height="162" alt="" />
                        <h2>失落的25年</h2>
                        <p>公共電視-獨立特派員368集</p>
                    </a>
                    <div class="clear"></div>
				</div>
			</div>
            <a href="#end" class="scrollDown">Down</a>
		</section>
        <section id="end" class="wrap">
            <h1>1000個城市快拍 - 家</h1>
            
            <div class="home1000">
                <img src="imgs/1000home.gif" width="470" height="243" alt="" />
                <p>網路平台 “1000個城市快拍” ，主題「家」的募集計劃，企圖將常民底層的真實切面，翻轉為顯性的都市全貌，讓民眾從接收者轉化為參與者，廣徵民眾上傳自己的住家照片，完整城市的多元面向。大量的影像匯集，透過整理與比對，回應台北人的真實居住面貌與設計能量來源。</p>
                
                <div class="clear"></div>
            </div>
            <a href="http://www.urstaipei.net/1000/home/" target="_blank" class="linkto">1000 TAIPEI HOMES</a>
        </section>
        
        <ul class="social">
            <li><a href="javascript: void(0)" target="_blank" class="fb" onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[url]=http://www.urstaipei.net/housing/', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)"><span>facebook</span></a></li>
            <li><a href="https://plus.google.com/share?url=http://www.urstaipei.net/housing/" target="_blank" class="google"><span>google+</span></a></li>
            <li><a href="mailto:villagetaipei@gmail.com" class="email"><span>email</span></a></li>
        </ul>
        
        <a href="#top" class="gotop">go top</a>
        <footer>
            <div class="center">
                <p>Copyright <?php echo date('Y'); ?> 台北村落之聲<br>Planned by 洋蔥設計 &amp; 蔡明穎建築師事務所 &amp; 田田圈文創工作群 <a href="http://www.oniondesign.com.tw" target="_blank">Site by Onion</a></p>
                
                <nav>
                    <a href="http://www.urstaipei.net/" target="_blank" class="icon1">Urban Regeneration Station</a>
                    <span class="icon2">MY.T architects</span>
                    <a href="http://www.oniondesign.com.tw" target="_blank" class="icon3">Oniondesign</a>
                    <a href="http://tientiencircle.org" target="_blank" class="icon4">田田圈文創作群</a>
                </nav>
            </div>
        </footer><!-- #footer -->
	</div> <!-- /container -->
  </body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <script src="js/jquery.imagesloaded.min.js"></script>
    <script src="js/jquery.cycle.all.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/raphael.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=visualization&key=AIzaSyDfNQWO1pZSYL9uRc-JURX1i6FqGt5sOHk"></script>
    <script type="text/javascript" src="js/markerwithlabel.js"></script>
    <script type="text/javascript" src="js/googlemap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/table.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</html> 
  
  