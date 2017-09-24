<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="menu_background">

            <div class="office_menu">
                <ul class="user_menu">
                    <li>
                        <a href="#" title="Вход" class="">
                            <span><span>Вход</span></span>
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="login_form" title="Вход в личный кабинет">Личный кабинет</a>
                            </li>
                            <li>
                                <a href="http://nsau.edu.ru/mail/" class="" title="Проверить почту">Корпоративная почта</a>
                            </li>
                            <li>
                                <a href="/remember/" class="" title="Восстановить пароль профиля">Восстановить пароль</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/support/registration/" title="Регистрация" class="">
                            <span><span>Регистрация</span></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Задать вопрос" class="">
                            <span><span>Задать вопрос</span></span>
                        </a>
                        <ul>
                            <li>
                                <a href="/entrant/answers/" class="" title="Если вы абитуриент">Абитуриент</a>
                            </li>
                            <li>
                                <a href="/student/answers/" class="" title="Если вы студент">Студент</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $('.login_form').click(function () {
                            $('#login_form').toggle();
                        });

                    });

                </script>
                <form id="login_form" action="/" method="post">
                    <!--fieldset class="retrieve">
                        <a href="/remember/">Вспомнить</a>
                        <br />
                        <a href="/support/registration/">Регистрация</a>

                    </fieldset-->
                    <fieldset>
                        <h3>Авторизация</h3> <a href="#" id="close" class="login_form">Закрыть</a><br><br>

                        <div>
                            <input name="1266[login][username]" type="text" title="логин" placeholder="логин">
                            <div>&nbsp;</div>
                        </div>
                        <div>

                            <input name="1266[login][password]" type="password" title="пароль" placeholder="пароль">
                            <div>&nbsp;</div>

                        </div>
                        <input id="login" type="submit" value="Войти">

                    </fieldset>
                </form>
            </div>
        </div>
    <div class="wrapper">
        <div id="header">
            <a id="logo" href="/">
                <span><span>&nbsp;</span></span>
            </a>
            <!--        --><?php	//$NODEGROUP = "daystogo";
            //        if ($EE["modules_data"][$NODEGROUP])
            //            include $EE["theme"] . "_nodegroup" . TEMPLATE_EXT; ?>

            <div class="vsds" >

                <!-- <strong><a href="/vds/" itemprop="Copy" >Версия для слабовидящих</a>  -->
                <a href="/vds/" itemprop="Copy"  title="Версия для слабовидящих"><img id="eyes_icon" src="/images/eyes_icon.png"></img></a>
                </strong>
            </div>
            <div id="login_search">


                <form id="FormSearch" method="get" action="/search/" accept-charset="UTF-8">
                    <input type="search" name="search" placeholder="Поиск по сайту">
                    <button type="submit" class="submit" type="submit" value="Искать"></button>
                </form>

                <fieldset class="map">
                    <a href="/map/" title="Карта сайта"><img id="site_map" src="/images/site_map.png"></img></a>
                </fieldset>
            </div>

                <div id="header_menu">
                    <ul id="main_submenu">
                        <li>
                            <a href="/" class="current" title="На главную страницу сайта">Главная<span><span></span></span></a>
                            <em>&nbsp;</em>
                            <div class="sum_menu">
                                <ul>
                                    <li>
                                        <a href="/about/" title="О вузе">
                                            О вузе									</a>
                                    </li>
                                    <li>
                                        <a href="/entrant/" title="Добро пожаловать в наш университет">
                                            Абитуриенту									</a>
                                    </li>
                                    <li>
                                        <a href="/student/" title="Студенту">
                                            Студенту									</a>
                                    </li>
                                    <li>
                                        <a href="/nir/" title="Научно-исследовательская работа">
                                            Наука									</a>
                                    </li>
                                    <li>
                                        <a href="/library/" title="Библиотека университета">
                                            Библиотека									</a>
                                    </li>
                                    <li>
                                        <a href="/directory/" title="В помощь преподавателю">
                                            Преподавателю									</a>
                                    </li>
                                    <li>
                                        <a href="/sveden/" title="Сведения об образовательной организации">
                                            Сведения об образовательной организации									</a>
                                    </li>
                                </ul>
                                <div class="clear">&nbsp;</div>
                            </div>
                        </li>
                        <li>
                            <a href="/department/" class="current" title="Подразделения">Подразделения<span><span></span></span></a>
                            <em>&nbsp;</em>
                            <div class="sum_menu">
                                <ul>
                                    <li>
                                        <a href="/department/oks/" title="Отдел капитального строительства">
                                            Отдел капитального строительства									</a>
                                    </li>
                                    <li>
                                        <a href="/department/hr-dep/" title="Отдел кадров">
                                            Отдел кадров									</a>
                                    </li>
                                    <li>
                                        <a href="/department/voenuch-dep/" title="Военно-учётный стол">
                                            Военно-учётный стол									</a>
                                    </li>
                                    <li>
                                        <a href="/department/ot-tb-dep/" title="Отдел охраны труда и техники безопасности">
                                            Отдел охраны труда и техники безопасности									</a>
                                    </li>
                                    <li>
                                        <a href="/department/international/" title="Отдел международных отношений">
                                            Отдел международных отношений									</a>
                                    </li>
                                    <li>
                                        <a href="/department/cit/" class="current" title="Центр информационных технологий">
                                            Центр информационных технологий									</a>
                                    </li>
                                    <li>
                                        <a href="/department/commission/" title="Приёмная комисcия">
                                            Приёмная комисcия									</a>
                                    </li>
                                    <li>
                                        <a href="/department/asp/" title="Аспирантура">
                                            Аспирантура									</a>
                                    </li>
                                    <li>
                                        <a href="/department/quality/" title="Отдел менеджмента качества (НК-342)">
                                            Отдел менеджмента качества									</a>
                                    </li>
                                    <li>
                                        <a href="/department/uchotdel/" title="Учебный отдел">
                                            Учебный отдел									</a>
                                    </li>
                                    <li>
                                        <a href="/department/practice_placement/" title="Отдел практик и трудоустройства">
                                            Отдел практик и трудоустройства									</a>
                                    </li>
                                    <li>
                                        <a href="/department/record_student/" title="Отдел по учёту студентов">
                                            Отдел по учёту студентов									</a>
                                    </li>
                                    <li>
                                        <a href="/department/clinic/" title="Здравпункт">
                                            Здравпункт									</a>
                                    </li>
                                    <li>
                                        <a href="/department/sportivnyj-klub/" title="Спортивный клуб">
                                            Спортивный клуб									</a>
                                    </li>
                                    <li>
                                        <a href="/department/stud-club/" title="Студенческий клуб">
                                            Студенческий клуб									</a>
                                    </li>
                                    <li>
                                        <a href="/department/profkom/" title="Профком студентов ">
                                            Профком студентов 									</a>
                                    </li>
                                    <li>
                                        <a href="/department/vvr/" title="Отдел внеучебной и воспитательной работы">
                                            Отдел внеучебной и воспитательной работы									</a>
                                    </li>
                                    <li>
                                        <a href="/department/pervyj-otdel/" title="Первый отдел">
                                            Первый отдел									</a>
                                    </li>
                                    <li>
                                        <a href="/department/shtab-go-i-chs/" title="Штаб ГО и ЧС">
                                            Штаб ГО и ЧС									</a>
                                    </li>
                                    <li>
                                        <a href="/department/yur/" title="Юридический отдел">
                                            Юридический отдел									</a>
                                    </li>
                                    <li>
                                        <a href="/department/dogovornoj-otdel/" title="Договорной отдел">
                                            Договорной отдел									</a>
                                    </li>
                                    <li>
                                        <a href="/department/peo/" title="Планово-экономический отдел">
                                            Планово-экономический отдел									</a>
                                    </li>
                                    <li>
                                        <a href="/department/o-del/" title="Отдел делопроизводства">
                                            Отдел делопроизводства									</a>
                                    </li>
                                </ul>
                                <div class="clear">&nbsp;</div>
                            </div>
                        </li>
                        <li>
                            <a href="/department/cit/" class="current" title="Центр информационных технологий">Центр информационных технологий<span><span></span></span></a>
                            <em>&nbsp;</em>
                            <div class="sum_menu">
                                <ul>
                                    <li>
                                        <a href="/department/cit/archive/" title="История ЦИТ">
                                            История									</a>
                                    </li>
                                    <li>
                                        <a href="/department/cit/news/" title="Новости ЦИТ">
                                            Новости									</a>
                                    </li>
                                    <li>
                                        <a href="/department/cit/rukovod/" title="Руководство">
                                            Руководство									</a>
                                    </li>
                                    <li>
                                        <a href="/department/cit/departments/" class="current" title="Отделы ЦИТ">
                                            Отделы									</a>
                                    </li>
                                    <li>
                                        <a href="/department/cit/matbase/" title="О доступе к информационно-телекоммуникационным сетям">
                                            О доступе к информационно-телекоммуникационным сетям									</a>
                                    </li>
                                    <li>
                                        <a href="/department/cit/spravki/" title="Документация">
                                            Документация									</a>
                                    </li>
                                </ul>
                                <div class="clear">&nbsp;</div>
                            </div>
                        </li>
                        <li>
                            <a href="/department/cit/departments/" class="current" title="Отделы ЦИТ">Отделы<span><span></span></span></a>
                            <em>&nbsp;</em>
                            <div class="sum_menu">
                                <ul>
                                    <li>
                                        <a href="/department/cit/departments/portal/" class="current" title="Отдел сопровождения образовательного портала">
                                            Отдел сопровождения образовательного портала									</a>
                                    </li>
                                    <li>
                                        <a href="/department/cit/departments/ksit/" title="Отдел компьютерных сетей и телекоммуникаций">
                                            Отдел компьютерных сетей и телекоммуникаций									</a>
                                    </li>
                                    <li>
                                        <a href="/department/cit/departments/top/" title="Отдел технического обслуживания подразделений">
                                            Отдел технического обслуживания подразделений									</a>
                                    </li>
                                    <li>
                                        <a href="/department/cit/departments/ois/" title="Отдел обслуживания информационных систем">
                                            Отдел обслуживания информационных систем									</a>
                                    </li>
                                </ul>
                                <div class="clear">&nbsp;</div>
                            </div>
                        </li>
                        <li>
                            <a href="/department/cit/departments/portal/" class="current" title="Отдел сопровождения образовательного портала">Отдел сопровождения образовательного портала<span><span></span></span></a>
                            <em>&nbsp;</em>
                            <div class="sum_menu">
                                <ul>
                                    <li>
                                        <a href="/department/cit/departments/portal/responsible/" title="Ответственные лица">
                                            Ответственные лица									</a>
                                    </li>
                                </ul>
                                <div class="clear">&nbsp;</div>
                            </div>
                        </li>
                    </ul>
                    <div id="menu_left_bg">&nbsp;</div>
                </div>

        </div>
    </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>


<div id="footer">
    <div class="wrapper">
        <div id="copyright">
            <div class="footer-left">
                &copy;&nbsp;1998-<?php echo date('Y') ?> Новосибирский государственный аграрный университет <br>
                630039, г. Новосибирск, ул. Добролюбова, 160<br/>
                Свидетельство о регистрации СМИ <a href="http://nsau.edu.ru/images/about/smi_license.jpg">Эл №ФС77-43853 от 9 февраля 2011 года.</a>
            </div>
            <div class="footer-right">
                <div class="age"><span class="age_limit">12+</span></div>
                <a href="/support/"> Служба технической поддержки</a><br>
                <a href="/department/commission/">Приемная комиссия</a>
            </div>
        </div>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
