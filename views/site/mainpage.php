<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use app\modules\dispatcher\Module;

?>
<div id="content">

    <div class="left_cont"><!-- Left Cont -->
        <?php if (isset($modules[Module::POSITION_LEFT])) { ?>
            <div class="row">
                <?php foreach ($modules[Module::POSITION_LEFT] as $module) {
                    echo $module;
                } ?>
            </div>
        <?php } ?>
        <ul class="drop_vert_menu">
            <li class="dropdown-top">
                <a href="/about/personnel/" title="Сведения об руководстве вуза" class="dropdown-top">
                    <span>Ректорат							</span>
                </a>
                <!-- <img class="drop_arrow" src="/themes/images/blockcontentbullets.png"> -->
            </li>
            <li class="dropdown-top">

                <a title="Главная страница сайта" class="dropdown-top">
                    <span>Факультеты и институты<img class="menu_arrow" src="/themes/images/menu_arrow.PNG">							</span>
                </a>
                <!-- <img class="drop_arrow" src="/themes/images/blockcontentbullets.png"> -->
                <ul class="dropdown-inside">
                    <li id="drop">
                        <a href="/agro/" class="" title="Агрономический факультет">Агрономический факультет</a>
                    </li>
                    <li id="drop">
                        <a href="/biotech/" class="" title="Биолого-технологический факультет">Биолого-технологический факультет</a>
                    </li>
                    <li id="drop">
                        <a href="/vetfac/" class="" title="Факультет ветеринарной медицины">Факультет ветеринарной медицины</a>
                    </li>
                    <li id="drop">
                        <a href="/smm/" class="" title="Факультет государственного и муниципального управления">Факультет государственного и муниципального управления</a>
                    </li>
                    <li id="drop">
                        <a href="/mechfac/" class="" title="Инженерный институт">Инженерный институт</a>
                    </li>
                    <li id="drop">
                        <a href="/econ/" class="" title="Экономический факультет">Экономический факультет</a>
                    </li>
                    <li id="drop">
                        <a href="/law/" class="" title="Юридический факультет">Юридический факультет</a>
                    </li>
                    <li id="drop">
                        <a href="/spo-fac/" class="" title="Факультет среднего профессионального образования НГАУ">Факультет среднего профессионального образования НГАУ</a>
                    </li>
                    <li id="drop">
                        <a href="/izop/" class="" title="Институт заочного образования и повышения квалификации">Институт заочного образования и повышения квалификации</a>
                    </li>
                    <li id="drop">
                        <a href="/idpo/" class="" title="Институт дополнительного профессионального образования">Институт дополнительного профессионального образования</a>
                    </li>
                    <li id="drop">
                        <a href="/nir/depart_teaching/" class="" title="Отдел по подготовке научно-педагогических кадров">Отдел по подготовке научно-педагогических кадров</a>
                    </li>
                    <li id="drop">
                        <a href="/kainsk/" class="" title="Куйбышевский сельскохозяйственный техникум">Куйбышевский сельскохозяйственный техникум</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown-top">

                <a title="Главная страница сайта" class="dropdown-top">
                    <span>Филиалы<img class="menu_arrow" src="/themes/images/menu_arrow.PNG">							</span>
                </a>
                <!-- <img class="drop_arrow" src="/themes/images/blockcontentbullets.png"> -->
                <ul class="dropdown-inside">
                    <li id="drop">
                        <a href="/tomsk/" class="" title="Томский сельскохозяйственный институт – филиал НГАУ">Томский сельскохозяйственный институт</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown-top">

                <a title="Главная страница сайта" class="dropdown-top">
                    <span>Учебные и ресурсные центры<img class="menu_arrow" src="/themes/images/menu_arrow.PNG">							</span>
                </a>
                <!-- <img class="drop_arrow" src="/themes/images/blockcontentbullets.png"> -->
                <ul class="dropdown-inside">
                    <li id="drop">
                        <a href="/entrant/preparation/" class="" title="Центр довузовской подготовки">Центр довузовской подготовки</a>
                    </li>
                    <li id="drop">
                        <a href="/ct-ngau/" class="" title="Центр тестирования НГАУ">Центр тестирования НГАУ</a>
                    </li>
                    <li id="drop">
                        <a href="/lc-perfekt/" class="" title="Лингвистический центр Перфект">Лингвистический центр Перфект</a>
                    </li>
                    <li id="drop">
                        <a href="/landscape/" class="" title="Ландшафтный центр">Ландшафтный центр</a>
                    </li>
                    <li id="drop">
                        <a href="http://nsau.edu.ru/agro/esm/" class="" title="">Учебно-производственное хозяйство «Сад Мичуринцев»</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown-top">

                <a title="Главная страница сайта" class="dropdown-top">
                    <span>Внеучебные подразделения<img class="menu_arrow" src="/themes/images/menu_arrow.PNG">							</span>
                </a>
                <!-- <img class="drop_arrow" src="/themes/images/blockcontentbullets.png"> -->
                <ul class="dropdown-inside">
                    <li id="drop">
                        <a href="http://nsau.edu.ru/department/vvr/" class="" title="">Отдел по внеучебной и воспитательной работе</a>
                    </li>
                    <li id="drop">
                        <a href="http://nsau.edu.ru/department/vvr/obedinennyj-sovet-obuchayuschikhsya/" class="" title="">Объединенный Совет обучающихся</a>
                    </li>
                    <li id="drop">
                        <a href="http://nsau.edu.ru/department/vvr/studencheskie-otryady/shtab-so/" class="" title="">Штаб СО НГАУ</a>
                    </li>
                    <li id="drop">
                        <a href="/profkom/" class="" title="Профком студентов">Профком студентов</a>
                    </li>
                    <li id="drop">
                        <a href="/department/stud-club/" class="" title="Студенческий клуб">Студенческий клуб</a>
                    </li>
                    <li id="drop">
                        <a href="/department/sportivnyj-klub/" class="" title="Спортивный клуб">Спортивный клуб</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown-top">

                <a title="Главная страница сайта" class="dropdown-top">
                    <span>Административные подразделения<img class="menu_arrow" src="/themes/images/menu_arrow.PNG">							</span>
                </a>
                <!-- <img class="drop_arrow" src="/themes/images/blockcontentbullets.png"> -->
                <ul class="dropdown-inside">
                    <li id="drop">
                        <a href="http://nsau.edu.ru/about/uchyonyj-sovet/" class="" title="">Ученый совет</a>
                    </li>
                    <li id="drop">
                        <a href="http://nsau.edu.ru/about/uni-econ/buch-otchet/" class="" title="">Бухгалтерия</a>
                    </li>
                    <li id="drop">
                        <a href="/department/hr-dep/" class="" title="Отдел кадров">Отдел кадров</a>
                    </li>
                    <li id="drop">
                        <a href="/department/o-del/" class="" title="Отдел делопроизводства">Отдел делопроизводства</a>
                    </li>
                    <li id="drop">
                        <a href="/department/peo/" class="" title="Планово-экономический отдел">Планово-экономический отдел</a>
                    </li>
                    <li id="drop">
                        <a href="/department/dogovornoj-otdel/" class="" title="Договорной отдел">Договорной отдел</a>
                    </li>
                    <li id="drop">
                        <a href="/department/voenuch-dep/" class="" title="Военно-учётный стол">Военно-учётный стол</a>
                    </li>
                    <li id="drop">
                        <a href="/department/international/" class="" title="Отдел международных отношений">Отдел международных отношений</a>
                    </li>
                    <li id="drop">
                        <a href="/department/uchotdel/" class="" title="Учебный отдел">Учебный отдел</a>
                    </li>
                    <li id="drop">
                        <a href="/department/record_student/" class="" title="Отдел по учёту студентов">Отдел по учёту студентов</a>
                    </li>
                    <li id="drop">
                        <a href="/department/practice_placement/" class="" title="Отдел практик и трудоустройства">Отдел практик и трудоустройства</a>
                    </li>
                    <li id="drop">
                        <a href="/department/quality/" class="" title="Отдел менеджмента качества (НК-342)">Отдел менеджмента качества</a>
                    </li>
                    <li id="drop">
                        <a href="/department/ot-tb-dep/" class="" title="Отдел охраны труда и техники безопасности">Отдел охраны труда и техники безопасности</a>
                    </li>
                    <li id="drop">
                        <a href="/department/shtab-go-i-chs/" class="" title="Штаб ГО и ЧС">Штаб ГО и ЧС</a>
                    </li>
                    <li id="drop">
                        <a href="/department/oks/" class="" title="Отдел капитального строительства">Отдел капитального строительства</a>
                    </li>
                    <li id="drop">
                        <a href="/department/yur/" class="" title="Юридический отдел">Юридический отдел</a>
                    </li>
                    <li id="drop">
                        <a href="/department/pervyj-otdel/" class="" title="Первый отдел">Первый отдел</a>
                    </li>
                    <li id="drop">
                        <a href="/department/cit/" class="" title="Центр информационных технологий">Центр информационных технологий</a>
                    </li>
                    <li id="drop">
                        <a href="/department/commission/" class="" title="Приёмная комисcия">Приёмная комисcия</a>
                    </li>
                    <li id="drop">
                        <a href="/popechitelskij-sovet/" class="" title="Попечительский совет универститета">Попечительский совет</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown-top">

                <a title="Главная страница сайта" class="dropdown-top">
                    <span>Научные подразделения<img class="menu_arrow" src="/themes/images/menu_arrow.PNG">							</span>
                </a>
                <!-- <img class="drop_arrow" src="/themes/images/blockcontentbullets.png"> -->
                <ul class="dropdown-inside">
                    <li id="drop">
                        <a href="/nir/depart_science/" class="" title="Научно-исследовательская часть">Научно-исследовательская часть</a>
                    </li>
                    <li id="drop">
                        <a href="/nir/o-nich/" class="" title="Отдел по инновационно-внедренческой деятельности">Отдел по инновационно-внедренческой деятельности</a>
                    </li>
                    <li id="drop">
                        <a href="/nir/ocpmntrapk/" class="" title="Отраслевой центр прогнозирования и мониторинга научно-технологического развития АПК">Отраслевой центр прогнозирования и мониторинга научно-технологического развития АПК</a>
                    </li>
                    <li id="drop">
                        <a href="/nir/ilk/" class="" title="Испытательный лабораторный комплекс">Испытательный лабораторный комплекс</a>
                    </li>
                    <li id="drop">
                        <a href="/nir/sovet-molodykh-uchyonykh/" class="" title="Совет молодых учёных">Совет молодых учёных</a>
                    </li>
                    <li id="drop">
                        <a href="/nir/incubator/" class="" title="Бизнес-инкубатор">Бизнес-инкубатор</a>
                    </li>
                    <li id="drop">
                        <a href="http://nsau.edu.ru/nir/publishing/" class="" title="">Издательский центр НГАУ</a>
                    </li>
                    <li id="drop">
                        <a href="http://nsau.edu.ru/nir/centr-kollektivnogo-polzovaniya-nauchnym-oborudovaniem/" class="" title="">Испытательный центр межфакультетской научной лаборатории</a>
                    </li>
                    <li id="drop">
                        <a href="/nir/o-nich/vystavochnyj-kompleks/" class="" title="Выставочный комплекс">Выставочный комплекс</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="translation">
            <a href="http://nsau.edu.ru/dissertation/?cast=true"><img src="/themes/images/logo_camera.png"><span class="translation_text">Видеотрансляция событий</span></a>
        </div>

        <div class="announce_tabs_container">
            <ul class="tabs">
                <li class="current">Анонсы</li>
                <li>Объявления</li>
                <li>События</li>
            </ul>
            <div class="box2 visible">

                <div class="event_block">
                    <div class="event_block_date">
                        <p>01<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/47751.html">Новая форма Договора возмездного оказания услуг</a></p>

                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>

                <div class="event_block">
                    <div class="event_block_date">
                        <p>01<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/46901.html">Национальная премия имени А.А. Ежевского</a></p>

                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>

                <div class="event_block">
                    <div class="event_block_date">
                        <p>01<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/47671.html">Областной фотоконкурс «Я хочу жить здесь!»</a></p>

                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>

                <div class="event_block">
                    <div class="event_block_date">
                        <p>04<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/45411.html">XX Международная научно-практическая конференция «Аграрная наука – сельскохозяйственному производству Сибири, Казахстана, Монголии, Беларуси и Болгарии»</a></p>

                    </div>
                    <div class="event_block_category"><p><a href="/news/category/7">Конференции и семинары</a></p></div>
                    <div class="clear"></div>
                </div>

                <div class="event_block">
                    <div class="event_block_date">
                        <p>09<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/47601.html">II Международная школа молодых ученых «ТЯЖЕЛЫЕ МЕТАЛЛЫ В ОКРУЖАЮЩЕЙ СРЕДЕ»</a></p>

                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>

                <div class="event_block">
                    <div class="event_block_date">
                        <p>15<br><span>ноя.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/47531.html">Объявлен конкурсный отбор  по программам  «СТАРТ» И «БИЗНЕС-СТАРТ»</a></p>

                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="box2">
                <div class="event_block">
                    <div class="event_block_date">
                        <p>01<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/47751.html">Новая форма Договора возмездного оказания услуг</a></p>
                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>
                <div class="event_block">
                    <div class="event_block_date">
                        <p>01<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/46901.html">Национальная премия имени А.А. Ежевского</a></p>
                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>
                <div class="event_block">
                    <div class="event_block_date">
                        <p>01<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/47671.html">Областной фотоконкурс «Я хочу жить здесь!»</a></p>
                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>
                <div class="event_block">
                    <div class="event_block_date">
                        <p>09<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/47601.html">II Международная школа молодых ученых «ТЯЖЕЛЫЕ МЕТАЛЛЫ В ОКРУЖАЮЩЕЙ СРЕДЕ»</a></p>
                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>
                <div class="event_block">
                    <div class="event_block_date">
                        <p>15<br><span>ноя.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/47531.html">Объявлен конкурсный отбор  по программам  «СТАРТ» И «БИЗНЕС-СТАРТ»</a></p>
                    </div>
                    <div class="event_block_category"><p><a href="/news/category/6">Объявления</a></p></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="box2">
                <div class="event_block">
                    <div class="event_block_date">
                        <p>04<br><span>окт.</span></p>
                    </div>
                    <div class="event_block_text">
                        <p><a href="/news/45411.html">XX Международная научно-практическая конференция «Аграрная наука – сельскохозяйственному производству Сибири, Казахстана, Монголии, Беларуси и Болгарии»</a></p>
                        <p><a href="/news/category/7">Конференции и семинары</a></p>
                    </div>
                    <div class="event_block_category"><p><a href="/news/category/7">Конференции и семинары</a></p></div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div><!-- End Left Cont -->
    <div class="center_cont">
        <div class="cn"><!-- Center Cont -->


            <div class="" id="news_annonse">
                <!--h1>
                <a href="/news/" title="Читать все новости">Новости</a>
            </h1-->

                <script src="/scripts/jquery.dotdotdot.min.js" type="text/javascript"></script>

                <div id="newscat1" class="newscat">
                    <div class="postBox">
                        <div class="imgNews">
                            <a href="/news/48491.html" title="Читать подробнее"><img src="/images/news/48491_tn.jpg" alt="Спартакиада студенческих отрядов Сибирского Федерального Округа"></a>											</div>
                        <div class="dateBg"></div>
                        <div class="dateNews">22.09</div>

                        <div class="noticeTitle" style="word-wrap: break-word; white-space: normal;"><a href="/news/48491.html" title="Читать подробнее">Спартакиада студенческих отрядов Сибирского Федерального Округа</a></div>
                        <div class="shortText" id="auto_cut_1"><p style="word-wrap: break-word;"><span>С 15 по 17 сентября 2017 г. в г. Бердск на базе ДОСКЛД «Юбилейный» прошла Межрегиональная спартакиада студенческих отрядов Сибирского федерального округа.&nbsp;</span></p></div>


                        <!-- 				<div class="noticeTitle"><a href="/news/48491.html" title="Читать подробнее">Спартакиада студенческих отрядов Сибирского Федерального Округа</a></div>
                                            <div class="shortText"><p><span>С 15 по 17 сентября 2017 г. в г. Бердск на базе ДОСКЛД &laquo;Юбилейный&raquo; прошла Межрегиональная спартакиада студенческих отрядов Сибирского федерального округа.&nbsp;</span></p></div> -->

                        <script type="text/javascript">
                            function get_name_browser()
                            {
                                var ua = navigator.userAgent;
                                // if (ua.search(/Chrome/) > 0) return 'Google Chrome';
                                if (ua.search(/Firefox/) > 0) return 'ff';
                                // if (ua.search(/Opera/) > 0) return 'Opera';
                                // if (ua.search(/Safari/) > 0) return 'Safari';
                                // if (ua.search(/MSIE/) > 0) return 'Internet Explorer';
                                return 'Не определен';
                            }

                            var browser = get_name_browser();
                            if (browser!="ff")
                            {
                                $(".noticeTitle").dotdotdot(
                                    {
                                        ellipsis: "... ",
                                        wrap: "word",
                                        fallbackToLetter: true,
                                        after: null,
                                        watch: "window",
                                        height: null,
                                        tolerance: 0,
                                        callback: function(isTruncated, orgContent){},
                                        lastCharacter: {
                                            remove: [" ", ",", ";", ".", "!", "?"],
                                            noEllipsis: []
                                        }
                                    });

                                $(".shortText").children().dotdotdot(
                                    {
                                        ellipsis: "... ",
                                        wrap: "word",
                                        fallbackToLetter: true,
                                        after: null,
                                        watch: "window",
                                        height: null,
                                        tolerance: 0,
                                        callback: function(isTruncated, orgContent){},
                                        lastCharacter: {
                                            remove: [" ", ",", ";", ".", "!", "?"],
                                            noEllipsis: []
                                        }
                                    });
                            };



                        </script>

                        <div class="categoryNews blue"><a href="/news/category/5">Творчество и спорт</a>					</div>
                        <div class="clear"></div>
                    </div>

                    <div class="postBox">
                        <div class="imgNews">
                            <a href="/news/48451.html" title="Читать подробнее"><img src="/images/news/48451_tn.jpg" alt="Квест для первокурсников"></a>											</div>
                        <div class="dateBg"></div>
                        <div class="dateNews">21.09</div>

                        <div class="noticeTitle" style="word-wrap: break-word; white-space: normal;"><a href="/news/48451.html" title="Читать подробнее">Квест для первокурсников</a></div>
                        <div class="shortText" id="auto_cut_2"><p style="word-wrap: break-word;">Состоялся квест для первокурсников " Студент 2017.Первокурсник в стране чудес"</p></div>


                        <!-- 				<div class="noticeTitle"><a href="/news/48451.html" title="Читать подробнее">Квест для первокурсников</a></div>
                                            <div class="shortText"><p>Состоялся квест для первокурсников " Студент 2017.Первокурсник в стране чудес"</p></div> -->

                        <script type="text/javascript">
                            function get_name_browser()
                            {
                                var ua = navigator.userAgent;
                                // if (ua.search(/Chrome/) > 0) return 'Google Chrome';
                                if (ua.search(/Firefox/) > 0) return 'ff';
                                // if (ua.search(/Opera/) > 0) return 'Opera';
                                // if (ua.search(/Safari/) > 0) return 'Safari';
                                // if (ua.search(/MSIE/) > 0) return 'Internet Explorer';
                                return 'Не определен';
                            }

                            var browser = get_name_browser();
                            if (browser!="ff")
                            {
                                $(".noticeTitle").dotdotdot(
                                    {
                                        ellipsis: "... ",
                                        wrap: "word",
                                        fallbackToLetter: true,
                                        after: null,
                                        watch: "window",
                                        height: null,
                                        tolerance: 0,
                                        callback: function(isTruncated, orgContent){},
                                        lastCharacter: {
                                            remove: [" ", ",", ";", ".", "!", "?"],
                                            noEllipsis: []
                                        }
                                    });

                                $(".shortText").children().dotdotdot(
                                    {
                                        ellipsis: "... ",
                                        wrap: "word",
                                        fallbackToLetter: true,
                                        after: null,
                                        watch: "window",
                                        height: null,
                                        tolerance: 0,
                                        callback: function(isTruncated, orgContent){},
                                        lastCharacter: {
                                            remove: [" ", ",", ";", ".", "!", "?"],
                                            noEllipsis: []
                                        }
                                    });
                            };



                        </script>

                        <div class="categoryNews green"><a href="/news/category/2">Студенческая жизнь</a>					</div>
                        <div class="clear"></div>
                    </div>

                    <div class="postBox">
                        <div class="imgNews">
                            <a href="/news/48441.html" title="Читать подробнее"><img src="/images/news/48441_tn.jpg" alt="Международный день мира"></a>											</div>
                        <div class="dateBg"></div>
                        <div class="dateNews">21.09</div>

                        <div class="noticeTitle" style="word-wrap: break-word; white-space: normal;"><a href="/news/48441.html" title="Читать подробнее">Международный день мира</a></div>
                        <div class="shortText" id="auto_cut_3"><p style="word-wrap: break-word;">&nbsp;Каждый год 21 сентября международная общественность отмечает Международный день мира</p></div>


                        <!-- 				<div class="noticeTitle"><a href="/news/48441.html" title="Читать подробнее">Международный день мира</a></div>
                                            <div class="shortText"><p>&nbsp;Каждый год 21 сентября международная общественность отмечает Международный день мира</p></div> -->

                        <script type="text/javascript">
                            function get_name_browser()
                            {
                                var ua = navigator.userAgent;
                                // if (ua.search(/Chrome/) > 0) return 'Google Chrome';
                                if (ua.search(/Firefox/) > 0) return 'ff';
                                // if (ua.search(/Opera/) > 0) return 'Opera';
                                // if (ua.search(/Safari/) > 0) return 'Safari';
                                // if (ua.search(/MSIE/) > 0) return 'Internet Explorer';
                                return 'Не определен';
                            }

                            var browser = get_name_browser();
                            if (browser!="ff")
                            {
                                $(".noticeTitle").dotdotdot(
                                    {
                                        ellipsis: "... ",
                                        wrap: "word",
                                        fallbackToLetter: true,
                                        after: null,
                                        watch: "window",
                                        height: null,
                                        tolerance: 0,
                                        callback: function(isTruncated, orgContent){},
                                        lastCharacter: {
                                            remove: [" ", ",", ";", ".", "!", "?"],
                                            noEllipsis: []
                                        }
                                    });

                                $(".shortText").children().dotdotdot(
                                    {
                                        ellipsis: "... ",
                                        wrap: "word",
                                        fallbackToLetter: true,
                                        after: null,
                                        watch: "window",
                                        height: null,
                                        tolerance: 0,
                                        callback: function(isTruncated, orgContent){},
                                        lastCharacter: {
                                            remove: [" ", ",", ";", ".", "!", "?"],
                                            noEllipsis: []
                                        }
                                    });
                            };



                        </script>

                        <div class="categoryNews green"><a href="/news/category/2">Студенческая жизнь</a>					</div>
                        <div class="clear"></div>
                    </div>

                    <div class="postBox">
                        <div class="imgNews">
                            <a href="/news/48271.html" title="Читать подробнее"><img src="/images/news/48271_tn.jpg" alt="Акселерационная программа «Навигатор инноватора»"></a>											</div>
                        <div class="dateBg"></div>
                        <div class="dateNews">14.09</div>

                        <div class="noticeTitle" style="word-wrap: break-word; white-space: normal;"><a href="/news/48271.html" title="Читать подробнее">Акселерационная программа «Навигатор инноватора»</a></div>
                        <div class="shortText" id="auto_cut_4"><p style="word-wrap: break-word;"><span><strong>С 12 по 15 октября</strong> Открытый университет Сколково совместно с Технопарком Новосибирского Академгородка приглашает вас принять участие в программе... </span></p></div>


                        <!-- 				<div class="noticeTitle"><a href="/news/48271.html" title="Читать подробнее">Акселерационная программа «Навигатор инноватора»</a></div>
                                            <div class="shortText"><p><span><strong>С 12 по 15 октября</strong> Открытый университет Сколково совместно с Технопарком Новосибирского Академгородка приглашает вас принять участие в программе &laquo;Навигатор инноватора&raquo;!</span></p></div> -->

                        <script type="text/javascript">
                            function get_name_browser()
                            {
                                var ua = navigator.userAgent;
                                // if (ua.search(/Chrome/) > 0) return 'Google Chrome';
                                if (ua.search(/Firefox/) > 0) return 'ff';
                                // if (ua.search(/Opera/) > 0) return 'Opera';
                                // if (ua.search(/Safari/) > 0) return 'Safari';
                                // if (ua.search(/MSIE/) > 0) return 'Internet Explorer';
                                return 'Не определен';
                            }

                            var browser = get_name_browser();
                            if (browser!="ff")
                            {
                                $(".noticeTitle").dotdotdot(
                                    {
                                        ellipsis: "... ",
                                        wrap: "word",
                                        fallbackToLetter: true,
                                        after: null,
                                        watch: "window",
                                        height: null,
                                        tolerance: 0,
                                        callback: function(isTruncated, orgContent){},
                                        lastCharacter: {
                                            remove: [" ", ",", ";", ".", "!", "?"],
                                            noEllipsis: []
                                        }
                                    });

                                $(".shortText").children().dotdotdot(
                                    {
                                        ellipsis: "... ",
                                        wrap: "word",
                                        fallbackToLetter: true,
                                        after: null,
                                        watch: "window",
                                        height: null,
                                        tolerance: 0,
                                        callback: function(isTruncated, orgContent){},
                                        lastCharacter: {
                                            remove: [" ", ",", ";", ".", "!", "?"],
                                            noEllipsis: []
                                        }
                                    });
                            };



                        </script>

                        <div class="categoryNews coral"><a href="/news/category/12">Наука и инновации</a>					</div>
                        <div class="clear"></div>
                    </div>

                </div>

                <div class="clear"></div>
                <a href="/news/" title="Читать все новости" class="allNews">
                    Все новости			</a>

            </div>
            <a onclick="show()" id="show_sub"><img src="themes/images/subs.png">Подписаться на новости</a>
            <div class="clear"></div>

            <div id="subscribe_form" style="display:none;">
                <form action="/" method="post">
                    <fieldset>

                        <p>
                            <input type="text" size="20" name="164[subscribe][email]" value="ваш e-mail" onclick="this.value='';" onblur="if(!this.value) this.value='ваш e-mail';">
                            <input type="submit" value="Готово" class="button">
                        </p>
                        <a href="unsubscribe/">Отписаться от новостей</a>
                    </fieldset>
                </form>
            </div>

            <script type="text/javascript">
                function show()
                {
                    if (document.getElementById('subscribe_form').style.display == 'block')
                    {
                        document.getElementById('subscribe_form').style.display = 'none';
                    } else
                    {
                        document.getElementById('subscribe_form').style.display = 'block';
                    }
                }
            </script>
            <?php if (isset($modules[Module::POSITION_CONTENT])) { ?>
                <div class="row">
                    <?php foreach ($modules[Module::POSITION_CONTENT] as $module) {
                        echo $module;
                    } ?>
                </div>
            <?php } ?>
        </div>
    </div><!-- End Center Cont $EE["modules_data"]["people_menu"] || -->
    <div class="clear">&nbsp;</div>
</div>
