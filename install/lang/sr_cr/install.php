<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Администраторски директоријум';
$string['availablelangs'] = 'Доступни језички пакети';
$string['chooselanguagehead'] = 'Изаберите језик';
$string['chooselanguagesub'] = 'Молимо изаберите језик који ће се користити током инсталације. Овај језик ће, такође, бити коришћен на нивоу сајта као подразумевани, мада то накнадно може бити промењено.';
$string['clialreadyconfigured'] = 'Датотека config.php већ постоји. Молимо, употребите команду admin/cli/install_database.php ако желите да инсталирате Moodle на овај сајт.';
$string['clialreadyinstalled'] = 'Датотека config.php већ постоји. Употребите admin/cli/install_database.php ако желите да надоградите свој сајт.';
$string['cliinstallheader'] = 'Moodle {$a} програм за инсталацију из командне линије';
$string['databasehost'] = 'Сервер базе података';
$string['databasename'] = 'Име базе података';
$string['databasetypehead'] = 'Изаберите драјвер базе података';
$string['dataroot'] = 'Директоријум података';
$string['datarootpermission'] = 'Овлашћења над директоријумом података';
$string['dbprefix'] = 'Префикс табеле';
$string['dirroot'] = 'Moodle директоријум';
$string['environmenthead'] = 'Проверавање Вашег окружења...';
$string['environmentsub2'] = 'Свако издање Moodlea има минимум захтева по питању одговарајуће PHP верзије и неколико обавезних PHP екстензија.
Комплетна провера окружења се врши пре сваке инсталације и надоградње постојеће верзије. Уколико не знате како да инсталирате нову верзију или омогућите PHP екстензије контактирајте свог администратора сервера.';
$string['errorsinenvironment'] = 'Провера окружења није прошла!';
$string['installation'] = 'Инсталација';
$string['langdownloaderror'] = 'Нажалост, језик "{$a}" се не може преузети. Процес инсталације биће настављен на енглеском језику.';
$string['memorylimithelp'] = '<p>PHP ограничење меморије за ваш сервер је тренутно подешено на {$a}.</p>

<p>Ово подешавање може касније да проузрокује да Moodle има проблема са меморијом, посебно ако имате много активираних модула и/или много корисника.</p>

<p>Препоручујемо да конфигуришете PHP са вишим ограничењем ако је могуће, рецимо 40М. Постоји неколико начина на које то може да се то уради:</p><ol>
<li>Ако можете, рекомпајлирајте PHP са <i>--enable-memory-limit</i>. Ово ће омогућити Moodle систему да сам постави меморијско ограничење.</li>
<li>Ако имате приступ својој php.ini датотеци, можете променити вредност за <b>memory_limit</b> на, рецимо, 40М. Ако немате приступ тој датотеци можете питати свог администратора да то уради уместо вас.</li>
<li>На неким PHP серверима можете да креирате .htaccess датотеку у Moodle директоријуму која садржи ред:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Међутим, на неким серверима то ће спречити приказивање <b>свих</b> PHP страница (видећете поруку о грешци када будете гледали странице), па ћете са тих сервера морати да уклоните .htaccess датотеку.</p></li>
</ol>';
$string['paths'] = 'Путање';
$string['pathserrcreatedataroot'] = 'Инсталациона процедура не може да креира директоријум базе података ({$a->dataroot}).';
$string['pathshead'] = 'Потврди путање';
$string['pathsrodataroot'] = 'У директоријум за податке није могућ упис';
$string['pathsroparentdataroot'] = 'Није могућ упис у надређени директоријум ({$a->parent}).  Инсталациони програм не може да креира директоријум за податке ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Врло мали број веб сервера користи /admin као специјални URL за приступ разним подешавањима (контролни панел и сл.). Нажалост, то доводи до конфликта са стандардном локацијом за администраторске странице у Moodleu. Овај проблем можете решити тако што ћете променити име администраторског директоријума у вашој инсталацији, и овде уписати то ново име. На пример <em>moodleadmin</em>. Ово подешавање ће преправити администраторске линкове у Moodle систему.';
$string['pathssubdataroot'] = '<p>Директоријум у којем  ћe Moodle чувати садржај свих датотека које су корисници поставили на сервер.</p>
<p>Овај директоријум мора да има одобрена овлашћења за читање и уписивање од стране корисника веб сервера (обично \'www-data\', \'nobody\', или \'apache\').</p>
<p>Директоријум не сме да буде директно доступан преко интернета.</p>
<p>Ако директоријум тренутно не постоји процес за инсталацију ће покушати да га креира.</p>';
$string['pathssubdirroot'] = '<p>Пуна путања до директоријума који садржи код Moodlea.</p>';
$string['pathssubwwwroot'] = '<p> Пуна интернет адреса путем које ће се приступати Moodleu тј. адреса коју ће корисници унети у  поље за веб адресу својих читача  како би приступили сајту.</p>
<p> Није могуће приступати Moodleu коришћењем више адреса. Ако се вашем сајту може приступити преко више адреса онда изаберите најлакшу и подесите перманентну редирекцију за све преостале адресе.</p>
<p>Ако је ваш сајт доступан и преко интернета и унутар локалне мреже (интранет), онда овде унесите јавну адресу.</p>
<p>Ако тренутна адреса није исправна, молимо вас промените URL у пољу за адресу вашег читача и поново покрените инсталацију.</p>';
$string['pathsunsecuredataroot'] = 'Dataroot локација није безбедна';
$string['pathswrongadmindir'] = 'Админ директоријум не постоји';
$string['phpextension'] = '{$a} PHP екстензија';
$string['phpversion'] = 'PHP верзија';
$string['phpversionhelp'] = '<p>Moodle захтева најмање PHP верзију 4.3.0 или 5.1.0 (5.0.x има  бројне уочене проблеме).</p>
<p>Тренутно користите верзију {$a}</p>
<p>Морате надоградити PHP или преместити Moodle на веб сервер са новијом верзијом PHP-a!</br>
(У случају верзије 5.0.x можете, такође, да се вратите на 4.4.x верзију)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Ову страницу видите зато што сте успешно инсталирали и покренули <strong>{$a->packname} {$a->packversion}</strong> пакет на свом серверу. Честитамо!';
$string['welcomep30'] = 'Ово издање <strong>{$a->installername}</strong> укључује апликације за креирање окружења у којем ће <strong>Moodle</strong> успешно функционисати, конкретно:';
$string['welcomep40'] = 'Овај пакет обухвата и <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Коришћење свих апликација овог пакета је уређено њиховим лиценцама. Комплетан<strong>{$a->installername}</strong> пакет је <a href="http://www.opensource.org/docs/definition_plain.html">отвореног кода</a> и дистрибуира се под <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> лиценцом.';
$string['welcomep60'] = 'Наредне странице ће вас провести кроз неколико једноставних корака током којих ћете конфигурисати и подесити <strong>Moodle</strong> на свом рачунару. Можете прихватити подразумевана подешавања или их, опционо, прилагодити сопственим потребама.';
$string['welcomep70'] = 'Кликните на дугме за наставак да бисте даље подешавали <strong>Moodle</strong>.';
$string['wwwroot'] = 'Веб адреса';
