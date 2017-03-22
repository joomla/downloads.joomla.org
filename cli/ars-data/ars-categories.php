<?php
// Build our array of categories
$categories = [
	// ID: 1
	[
		'title'        => 'Joomla! 1.0',
		'alias'        => 'joomla10',
		'description'  => '<p>Category containing all official Joomla! 1.0 releases.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/joomla10',
		'vgroup_id'    => '1',
		'is_supported' => '0',
	],
	// ID: 2
	[
		'title'        => 'Joomla! 1.5',
		'alias'        => 'joomla15',
		'description'  => '<p>Category containing all official Joomla! 1.5 releases.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/joomla15',
		'vgroup_id'    => '1',
		'is_supported' => '0',
	],
	// ID: 3
	[
		'title'        => 'Joomla! 2.5',
		'alias'        => 'joomla25',
		'description'  => '<p>Category containing all official Joomla! 2.5 releases, to include versions 1.6 and 1.7.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/joomla25',
		'vgroup_id'    => '1',
		'is_supported' => '0',
	],
	// ID: 4
	[
		'title'        => 'Joomla! 3',
		'alias'        => 'joomla3',
		'description'  => '<p>Category containing all official Joomla! 3 releases.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/joomla3',
		'vgroup_id'    => '1',
		'is_supported' => '1',
	],
	// ID: 5
	[
		'title'        => 'Joomla! 1.5 - Afrikaans',
		'alias'        => 'joomla15-afrikaans',
		'description'  => '<p>Language: Afrikaans (af-ZA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=84994">Gerrit Hoekstra</a><br />Team members: 1<br />Contact: <a href="mailto:gerrit@hoekstra.co.uk">gerrit@hoekstra.co.uk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/af-ZA',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 6
	[
		'title'        => 'Joomla! 1.5 - Albanian',
		'alias'        => 'joomla15-albanian',
		'description'  => '<p>Language: Albanian (sq-AL)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=130308">Albagen</a><br />Team members: 1<br/>Contact: <a href="mailto:pluhun@gmail.com">pluhun@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/sq-AL',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 7
	[
		'title'        => 'Joomla! 1.5 - Arabic Unitag',
		'alias'        => 'joomla15-arabic-unitag',
		'description'  => '<p>Language: Arabic Unitag (ar-AA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=172649">Mahmood Alhaj Kassem</a><br />Team Members: 2<br />Contact: <a href="mailto:suneye3@gmail.com">suneye3@gmail.com</a></p><p><span class="label label-info">Information</span> As an ISO tag is necessary to comply with IT standards, we chose a UNITAG for Arabic, thus usable in any country. ar-AA is the new tag. It is Classic Arabic.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ar-AA',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 8
	[
		'title'        => 'Joomla! 1.5 - Azeri / Azerbaijani',
		'alias'        => 'joomla15-azeri',
		'description'  => '<p>Language: Azeri (Azerbaijan) (az-AZ)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=203862">Mahmud</a><br />Team Members: 2<br />Contact: <a href="mailto:joomlazer@gmail.com">joomlazer@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/az-AZ',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 9
	[
		'title'        => 'Joomla! 1.5 - Belarusian',
		'alias'        => 'joomla15-belarusian',
		'description'  => '<p>Language: Belarusian (be-BY)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=27443">Dennis Hermatski</a><br />Team Members: 1<br />Contact: <a href="mailto:pandenitz@mail.ru">pandenitz@mail.ru</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/be-BY',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 10
	[
		'title'        => 'Joomla! 1.5 - Bengali (Bangladesh)',
		'alias'        => 'joomla15-bengali',
		'description'  => '<p>Language: Bengali (Bangladesh) (bn-BD)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=114153">Kamal Sikder</a><br />Team Members: 1<br />Contact: <a href="mailto:kamalsikder@yahoo.co.uk">kamalsikder@yahoo.co.uk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/bn-BD',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 11
	[
		'title'        => 'Joomla! 1.5 - Bosnian',
		'alias'        => 'joomla15-bosnian',
		'description'  => '<p>Language: Bosnian (bs-BA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=434037">Admir Agic</a><br />Team Members: 1<br />Contact: <a href="mailto:admir.agic@joomla.ba">admir.agic@joomla.ba</a><br />Website: <a href="http://www.joomla.ba">www.joomla.ba</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/bs-BA',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 12
	[
		'title'        => 'Joomla! 1.5 - Bulgarian',
		'alias'        => 'joomla15-bulgarian',
		'description'  => '<p>Language: Bulgarian (bg-BG)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=54803">Yury Boev</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=36211">Plamen Gradinarov</a><br />Team Members: 2<br />Contact: <a href="mailto:imago@abv.bg">imago@abv.bg</a><br />Website: <a href="http://www.joomaker.com/">www.joomaker.com/</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/bg-BG',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 13
	[
		'title'        => 'Joomla! 1.5 - Catalan',
		'alias'        => 'joomla15-catalan',
		'description'  => '<p>Language: Catalan (ca-ES)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=53800">Damià Verger</a><br />Team Members: 2<br />Contact: <a href="mailto:info@joomla.cat">info@joomla.cat</a><br />Website: <a href="http://www.joomla.cat/">www.joomla.cat</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ca-ES',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 14
	[
		'title'        => 'Joomla! 1.5 - Chinese (Simplified)',
		'alias'        => 'joomla15-chinese-simplified',
		'description'  => '<p>Language: Chinese (Simplified) (zh-CN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=29778">Jonathan Cheung</a><br />Team Members: 1<br /> Contact: <a href="mailto:osulcn@gmail.com">osulcn@gmail.com</a><br />Website: <a href="http://www.joomla.cn">www.joomla.cn</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/zh-CN',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 15
	[
		'title'        => 'Joomla! 1.5 - Chinese (Traditional)',
		'alias'        => 'joomla15-chinese-traditional',
		'description'  => '<p>Language: Chinese (Traditional) (zh-TW)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1604">Eddy Chang</a><br />Team Members: 1<br />Contact: <a href="mailto:taiwanmambo@gmail.co">taiwanmambo@gmail.co</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/zh-TW',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 16
	[
		'title'        => 'Joomla! 1.5 - Croatian',
		'alias'        => 'joomla15-croatian',
		'description'  => '<p>Language: Croatian (hr-HR)<br />Coordinator: Bernard Toplak (1.6/1.7)<br />Team Members: 1<br />Contact: <a href="mailto:bernard@joomla-hrvatska.com">bernard@joomla-hrvatska.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/hr-HR',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 17
	[
		'title'        => 'Joomla! 1.5 - Czech',
		'alias'        => 'joomla15-czech',
		'description'  => '<p>Language: Czech (cs-CZ)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=449">Svatas</a><br />Team Members: 2<br />Contact: <a href="mailto:svatopluk.vit@joomlaportal.cz">svatopluk.vit@joomlaportal.cz</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/cs-CZ',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 18
	[
		'title'        => 'Joomla! 1.5 - Danish',
		'alias'        => 'joomla15-danish',
		'description'  => '<p>Language: Danish (da-DK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=94264">Ronny Buelund</a><br />Team Members: 1<br />Contact: <a href="mailto:rbluelund@email.dk">rbluelund@email.dk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/da-DK',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 19
	[
		'title'        => 'Joomla! 1.5 - Dari (Afghanistan)',
		'alias'        => 'joomla15-dari-afghanistan',
		'description'  => '<p>Language: Dari (Afghanistan) (fa-AF)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=311081">Daud Nigaresh</a><br />Team Members: 1<br />Contact: <a href="mailto:d.nigaresh@paiwastoon.com.af">d.nigaresh@paiwastoon.com.af</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/fa-AF',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 20
	[
		'title'        => 'Joomla! 1.5 - Dutch',
		'alias'        => 'joomla15-dutch',
		'description'  => '<p>Language: Dutch (nl-NL)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=159718">Marijke Stuivenberg</a><br />Team Members: 2<br />Contact: <a href="mailto:taal@joomlacommunity.eu">taal@joomlacommunity.eu</a><br />Website: <a href="http://www.joomlacommunity.eu/">www.joomlacommunity.eu</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/nl-NL',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 21
	[
		'title'        => 'Joomla! 1.5 - English (Australia)',
		'alias'        => 'joomla15-english-australia',
		'description'  => '<p>Language: English (Australia) (en-AU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=368245">Leonard Fitzgerald</a><br />Team Members: 1<br />Contact: <a href="mailto:admin@aussiesrus.com.au">admin@aussiesrus.com.au</a></p><p><span class="label label-important">Important!</span> This variant of en-GB is provided to help some search engines recognize the site\'s country (Bing for example). Otherwise, its contents are exactly the same as the default en-GB files.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/en-AU',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 22
	[
		'title'        => 'Joomla! 1.5 - English (USA)',
		'alias'        => 'joomla15-english-us',
		'description'  => '<p>Language: English (USA) (en-US)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1257">Jennifer Marriot</a><br />Team Members: 1<br />Contact: <a href="mailto:jennifer.marriott@community.joomla.org">jennifer.marriott@community.joomla.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/en-US',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 23
	[
		'title'        => 'Joomla! 1.5 - Esperanto',
		'alias'        => 'joomla15-esperanto',
		'description'  => '<p>Language: Esperanto (eo-XX)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=129969">Cindy McKee</a><br />Team members: 1<br />Contact: <a href="mailto:cfmckee@gmail.com">cfmckee@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/eo-XX',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 24
	[
		'title'        => 'Joomla! 1.5 - Estonian',
		'alias'        => 'joomla15-estonian',
		'description'  => '<p>Language: Estonian (et-EE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1040">Rivo Zängov</a><br />Team members: 1<br />Contact: <a href="mailto:eraser@eraser.ee">eraser@eraser.ee</a><br />Website: <a href="http://www.eraser.ee">www.eraser.ee</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/et-EE',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 25
	[
		'title'        => 'Joomla! 1.5 - Finnish',
		'alias'        => 'joomla15-finnish',
		'description'  => '<p>Language: Finnish (fi-FI)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=34">Markku Suominen</a><br />Team Members: 1<br />Contact: <a href="mailto:admin@joomlaportal.fi">admin@joomlaportal.fi</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/fi-FI',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 26
	[
		'title'        => 'Joomla! 1.5 - French',
		'alias'        => 'joomla15-french',
		'description'  => '<p>Language: French (fr-FR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=25574">Nicolas OGIER</a><br />Team Members: 30<br />Contact: <a href="mailto:opware.joomla@gmail.com">opware.joomla@gmail.com</a><br />Website: <a href="http://www.joomla.fr/">www.joomla.fr</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/fr-FR',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 27
	[
		'title'        => 'Joomla! 1.5 - Galician',
		'alias'        => 'joomla15-galician',
		'description'  => '<p>Language: Galician (gl-ES)<br /> Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=202374">damufo</a><br />Team Members: 1<br />Contact: <a href="mailto:damufo@gmail.com">damufo@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/gl-ES',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 28
	[
		'title'        => 'Joomla! 1.5 - Georgian',
		'alias'        => 'joomla15-georgian',
		'description'  => '<p>Language: Georgian (ka-GE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=460618">j.chutlashvili</a><br />Team Members: 1<br />Contact: <a href="mailto:j.chutlashvili@personal-it.ge">j.chutlashvili@personal-it.ge</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ka-GE',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 29
	[
		'title'        => 'Joomla! 1.5 - German',
		'alias'        => 'joomla15-german',
		'description'  => '<p>Language: German (de-DE/de-AT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=60422">Jan Erik Zassenhaus</a><br />Team Members: 10<br />Contact: <a href="mailto:info@jgerman.de">info@jgerman.de</a><br />Website: <a href="http://www.jgerman.de">www.jgerman.de</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/de-DE',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 30
	[
		'title'        => 'Joomla! 1.5 - Greek',
		'alias'        => 'joomla15-greek',
		'description'  => '<p>Language: Greek (el-GR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=544">Aris Ntatsis</a><br />Team Members: 30<br />Contact: <a href="mailto:joomla@myjoomla.gr">joomla@myjoomla.gr</a><br />Website: <a href="http://www.joomla.gr">www.joomla.gr</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/el-GR',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 31
	[
		'title'        => 'Joomla! 1.5 - Gujarati',
		'alias'        => 'joomla15-gujarati',
		'description'  => '<p>Language: Gujarati (gu-IN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=173519">Ronak Bhagdev</a><br />Team Members: 6<br />Contact: <a href="mailto:ronak@gujaratijoomla.com">ronak@gujaratijoomla.com</a><br />Website: <a href="http://www.gujaratijoomla.com">www.gujaratijoomla.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/gu-IN',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 32
	[
		'title'        => 'Joomla! 1.5 - Hebrew',
		'alias'        => 'joomla15-hebrew',
		'description'  => '<p>Language: Hebrew (he-IL)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=147303">Ofer Cohen</a><br />Team Members: 1<br />Contact: <a href="mailto:oc666@netvision.net.il">oc666@netvision.net.il</a><br />Website: <a href="http://www.joomla.org.il">www.joomla.org.il</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/he-IL',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 33
	[
		'title'        => 'Joomla! 1.5 - Hindi (India)',
		'alias'        => 'joomla15-hindi',
		'description'  => '<p>Language: Hindi (India) (hi-IN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=367808">Sanjeev Naroliya</a><br />Team Members: 3<br />Contact: <a href="mailto:sanjeev.naroliya@gmail.com">sanjeev.naroliya@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/hi-IN',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 34
	[
		'title'        => 'Joomla! 1.5 - Hungarian',
		'alias'        => 'joomla15-hungarian',
		'description'  => '<p>Language: Hungarian (hu-HU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=4846">Herczeg</a><br />Team Members: 3<br />Contact: <a href="mailto:herczegjt@joomla.org.hu">herczegjt@joomla.org.hu</a><br />Website: <a href="http://www.joomla.org.hu">www.joomla.org.hu</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/hu-HU',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 35
	[
		'title'        => 'Joomla! 1.5 - Icelandic',
		'alias'        => 'joomla15-icelandic',
		'description'  => '<p>Language: Icelandic (is-IS)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=179205">Magnus Gudlaugsson</a><br />Team Members: 8<br />Contact: <a href="mailto:joomlis@joomlis.net">joomlis@joomlis.net</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/is-IS',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 36
	[
		'title'        => 'Joomla! 1.5 - Indonesian (Bahasa Indonesia)',
		'alias'        => 'joomla15-indonesian',
		'description'  => '<p>Language: Indonesian (Bahasa Indonesia) (id-ID)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=635">Andy Sikumbang</a><br />Team Members: 12<br />Contact: <a href="mailto:sikumbang@gmail.com">sikumbang@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/id-ID',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 37
	[
		'title'        => 'Joomla! 1.5 - Italian',
		'alias'        => 'joomla15-italian',
		'description'  => '<p>Language: Italian (it-IT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1426">Stefania Gaianigo</a><br />Team Members: 3<br />Contact: <a href="mailto:info@joomla.it">info@joomla.it</a><br />Website: <a href="http://www.joomla.it">www.joomla.it</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/it-IT',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 38
	[
		'title'        => 'Joomla! 1.5 - Japanese',
		'alias'        => 'joomla15-japanese',
		'description'  => '<p>Language: Japanese (ja-JP)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=2401">Nori</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=3018">richell</a><br />Team Members: 7<br />Website: <a href="http://joomla.jp">joomla.jp</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ja-JP',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 39
	[
		'title'        => 'Joomla! 1.5 - Khmer (Cambodia)',
		'alias'        => 'joomla15-khmer',
		'description'  => '<p>Language: Khmer (Cambodia) (km-KH)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=330483">Heng Sovann</a><br />Team Members: 1<br />Contact: <a href="mailto:hengsovann@gmail.com">hengsovann@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/km-KH',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 40
	[
		'title'        => 'Joomla! 1.5 - Laotian',
		'alias'        => 'joomla15-laotian',
		'description'  => '<p>Language: Laotian (lo-LA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=264833">vskphanthanousy</a><br />Team Members: 4<br />Contact: <a href="mailto:info@joomlalaolao.com">info@joomlalaolao.com</a><br />Website: <a href="http://www.joomlalaolao.com">www.joomlalaolao.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/lo-LA',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 41
	[
		'title'        => 'Joomla! 1.5 - Latvian',
		'alias'        => 'joomla15-latvian',
		'description'  => '<p>Language: Latvian (lv-LV)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=8175">Lemings</a><br />Team Members: 1<br />Contact: <a href="mailto:lemings@inbox.lv">lemings@inbox.lv</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/lv-LV',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 42
	[
		'title'        => 'Joomla! 1.5 - Lithuanian',
		'alias'        => 'joomla15-lithuanian',
		'description'  => '<p>Language: Lithuanian (lt-LT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=44">Stasys</a><br />Team Members: 7<br />Website: <a href="http://www.lithuanianjoomla.com">www.lithuanianjoomla.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/lt-LT',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 43
	[
		'title'        => 'Joomla! 1.5 - Macedonian',
		'alias'        => 'joomla15-macedonian',
		'description'  => '<p>Language: Macedonian (mk-MK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=149928">lija Iliev</a><br />Team Members: 1<br />Contact: <a href="mailto:info@joomla.mk">info@joomla.mk</a><br />Website: <a href="http://www.joomla.mk">www.joomla.mk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/mk-MK',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 44
	[
		'title'        => 'Joomla! 1.5 - Malay',
		'alias'        => 'joomla15-malay',
		'description'  => '<p>Language: Malay (ms-MY)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=279622">Sam Suresh</a><br />Team Members: 1<br />Contact: <a href="mailto:support@mu.my">support@mu.my</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ms-MY',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 45
	[
		'title'        => 'Joomla! 1.5 - Malayalam',
		'alias'        => 'joomla15-malayalam',
		'description'  => '<p>Language: Malayalam (India) (ml-IN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=366210">Sujith</a><br />Team Members: 1<br />Contact: <a href="mailto:sujith@sujith.co.in">sujith@sujith.co.in</a><br />Website: <a href="http://techlineinfo.com">techlineinfo.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ml-IN',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 46
	[
		'title'        => 'Joomla! 1.5 - Mongolian',
		'alias'        => 'joomla15-mongolian',
		'description'  => '<p>Language: Mongolian (mn-MN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=109009">Altansukh</a><br />Team Members: 6<br />Contact: <a href="mailto:altansukh@altansukh.com">altansukh@altansukh.com</a><br />Website: <a href="http://www.n20.mn">www.n20.mn</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/mn-MN',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 47
	[
		'title'        => 'Joomla! 1.5 - Montenegrin',
		'alias'        => 'joomla15-montenegrin',
		'description'  => '<p>Language: Montenegrin (sr-ME)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=79307">Miljan Vujosevic AKA Leftfield</a><br />Team Members: 2<br />Contact: <a href="mailto:leftfield@joomlamontenegro.com">leftfield@joomlamontenegro.com</a><br />Website: <a href="http://www.joomlamontenegro.com">www.joomlamontenegro.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/sr-ME',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 48
	[
		'title'        => 'Joomla! 1.5 - Norwegian',
		'alias'        => 'joomla15-norwegian',
		'description'  => '<p>Language: Norwegian (nb-NO)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=5511">Rune Rasmussen</a><br />Team Members: 4<br />Contact: <a href="mailto:oversettelser@joomlainorge.no">oversettelser@joomlainorge.no</a><br />Website: <a href="http://www.joomlainorge.no/">www.joomlainorge.no</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/nb-NO',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 49
	[
		'title'        => 'Joomla! 1.5 - Pashto (Afghanistan)',
		'alias'        => 'joomla15-pashto-afghanistan',
		'description'  => '<p>Language: Pashto (Afghanistan) (ps-AF)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=311081">Daud Nigaresh</a><br />Team Members: 1<br />Contact: <a href="mailto:d.nigaresh@paiwastoon.com.af">d.nigaresh@paiwastoon.com.af</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ps-AF',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 50
	[
		'title'        => 'Joomla! 1.5 - Persian (Farsi)',
		'alias'        => 'joomla15-persian-farsi',
		'description'  => '<p>Language: Persian (Farsi) (fa-IR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=59896">Mostafa Alavi Nik</a><br />Team Members: 8<br />Contact: <a href="mailto:joomfa@gmail.com">joomfa@gmail.com</a><br />Website: <a href="http://joomfa.org">www.joomfa.org</a></p><p><span class="label label-info">Information</span> A specific hack is available to implement jalali date. This is the responsibility of the Translation Team.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/fa-IR',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 51
	[
		'title'        => 'Joomla! 1.5 - Polish',
		'alias'        => 'joomla15-polish',
		'description'  => '<p>Language: Polish (pl-PL)<br />Coordinators: zwiastun, dylek<br />Team Members: 2<br />Contact: <a href="mailto:zwiastun@joomla.pl">zwiastun@joomla.pl</a><br />Website: <a href="http://www.joomla.pl">www.joomla.pl</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/pl-PL',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 52
	[
		'title'        => 'Joomla! 1.5 - Portuguese (Brazil)',
		'alias'        => 'joomla15-portuguese-brazil',
		'description'  => '<p>Language: Portuguese (Brazil) (pt-BR)<br />Coordinators: Costa, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=590">FaBMAK</a><br />Team Members: 2<br />Contact: <a href="mailto:traducao@joomla.com.br">traducao@joomla.com.br</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/pt-BR',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 53
	[
		'title'        => 'Joomla! 1.5 - Portuguese (Portugal)',
		'alias'        => 'joomla15-portuguese-portugal',
		'description'  => '<p>Language: Portuguese (Portugal) (pt-PT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=6515">Paulo Izidoro</a><br />Team Members: 28<br />Contact: Translators Wiki at <a href="http://joomlapt.wetpaint.com">joomlapt.wetpaint.com</a><br />Website: <a href="http://www.joomlapt.com">www.joomlapt.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/pt-PT',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 54
	[
		'title'        => 'Joomla! 1.5 - Romanian',
		'alias'        => 'joomla15-romanian',
		'description'  => '<p>Language: Romanian (ro-RO)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=254">Cosmin Lebu</a><br />Team Members: 13<br />Contact: <a href="mailto:contact@joomla.ro">contact@joomla.ro</a><br />Website: <a href="http://www.joomla.ro">www.joomla.ro</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ro-RO',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 55
	[
		'title'        => 'Joomla! 1.5 - Russian',
		'alias'        => 'joomla15-russian',
		'description'  => '<p>Language: Russian (ru-RU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=250">Sergey Litvinov</a><br />Team Members: 1<br />Contact: <a href="mailto:serge.litvinov@gmail.com">serge.litvinov@gmail.com</a><br />Website: <a href="http://www.joomlaportal.ru">www.joomlaportal.ru</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ru-RU',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 56
	[
		'title'        => 'Joomla! 1.5 - Serbian',
		'alias'        => 'joomla15-serbian',
		'description'  => '<p>Language: Serbian (sr-RS)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=147895">cicans</a><br />Team Members: 1<br />Contact: <a href="mailto:svetlana.zec@gmail.com">svetlana.zec@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/sr-RS',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 57
	[
		'title'        => 'Joomla! 1.5 - Sindhi',
		'alias'        => 'joomla15-sindhi',
		'description'  => '<p>Language: Sindhi (sd-PK)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=150871">Raheel Hussain Kaghzi</a>, Shafiq-ur-rehman Khatri<br />Team Members: 2<br />Contact: <a href="mailto:raheelkaghzi@gmail.com">raheelkaghzi@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/sd-PK',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 58
	[
		'title'        => 'Joomla! 1.5 - Sinhala',
		'alias'        => 'joomla15-sinhala',
		'description'  => '<p>Language: Sinhala (si-LK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=129016">Rashan Anushka</a><br />Team Members: 1<br />Contact: <a href="mailto:rashan.uoc@gmail.com">rashan.uoc@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/si-LK',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 59
	[
		'title'        => 'Joomla! 1.5 - Slovak',
		'alias'        => 'joomla15-slovak',
		'description'  => '<p>Language: Slovak (sk-SK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=11439">Karol Čejka</a><br />Team Members: 1<br />Contact: <a href="mailto:karol.cejka@joomlahelp.sk">karol.cejka@joomlahelp.sk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/sk-SK',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 60
	[
		'title'        => 'Joomla! 1.5 - Slovenian',
		'alias'        => 'joomla15-slovenian',
		'description'  => '<p>Language: Slovenian (sl-SI)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=350939">Borut Planinc</a><br />Team Members: 1<br />Contact: <a href="mailto:info@europa-check.de">info@europa-check.de</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/sl-SI',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 61
	[
		'title'        => 'Joomla! 1.5 - Spanish',
		'alias'        => 'joomla15-spanish',
		'description'  => '<p>Language: Spanish (es-ES)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=813">Gustavo Raúl Aragón</a><br />Team Members: 6<br />Contact: <a href="mailto:info@comunidadjoomla.org">info@comunidadjoomla.org</a><br />Website: <a href="http://comunidadjoomla.org">comunidadjoomla.org</a> | Forum: <a href="http://foro.comunidadjoomla.org">foro.comunidadjoomla.org</a> | Twitter: <a href="https://twitter.com/comunidadjoomla">twitter.com/comunidadjoomla</a> | Facebook: <a href="https://www.facebook.com/comunidadjoomla.org">www.facebook.com/comunidadjoomla.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/es-ES',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 62
	[
		'title'        => 'Joomla! 1.5 - Swedish',
		'alias'        => 'joomla15-swedish',
		'description'  => '<p>Language: Swedish (sv-SE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=2468">Sune Hultman</a><br />Team Members: 3<br />Contact: <a href="mailto:info@svenskjoomla.se">info@svenskjoomla.se</a><br />Website: <a href="http://www.svenskjoomla.se">www.svenskjoomla.se</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/sv-SE',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 63
	[
		'title'        => 'Joomla! 1.5 - Syriac (East)',
		'alias'        => 'joomla15-syriac-east',
		'description'  => '<p>Language: Syriac (East) (sy-IQ)<br />Coordinators: Dinka, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=120314">Ninwaya</a><br />Team Members: 2<br />Contact: <a href="mailto:pauls@nohadra.com">pauls@nohadra.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/sy-IQ',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 64
	[
		'title'        => 'Joomla! 1.5 - Tagalog (Philippines)',
		'alias'        => 'joomla15-tagalog-philippines',
		'description'  => '<p>Language: Tagalog (Philippines) (tl-PH)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=325364">Aristedes Royo</a><br />Team Members: 1<br />Contact: <a href="mailto:aris_royo@yahoo.com">aris_royo@yahoo.com</a><br />Website: <a href="http://www.joomla.org.ph">www.joomla.org.ph</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/tl-PH',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 65
	[
		'title'        => 'Joomla! 1.5 - Tamil (India)',
		'alias'        => 'joomla15-tamil-india',
		'description'  => '<p>Language: Tamil (India) (ta-IN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=224484">Ilagnayeru \'MIG\' Manickam</a><br />Team Members: 2<br />Contact: <a href="mailto:manickam_mig@yahoo.com">manickam_mig@yahoo.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ta-IN',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 66
	[
		'title'        => 'Joomla! 1.5 - Tamil (Sri Lanka)',
		'alias'        => 'joomla15-tamil-sri-lanka',
		'description'  => '<p>Language: Tamil (Sri Lanka) (ta-LK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=183546">Sarves</a><br />Team Members: 1<br />Contact: <a href="mailto:iamsarves@gmail.com">iamsarves@gmail.com</a><br />Website: <a href="http://joomla.tamil-it.org">joomla.tamil-it.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ta-LK',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 67
	[
		'title'        => 'Joomla! 1.5 - Thai',
		'alias'        => 'joomla15-thai',
		'description'  => '<p>Language: Thai (th-TH)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=157">Supachai Teasakul</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=4527">Pisan Chueachatchai</a><br />Team Members: 5<br />Contact: <a href="mailto:tt@joomlacorner.com">tt@joomlacorner.com</a><br />Website: <a href="http://www.joomlacorner.com">www.joomlacorner.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/th-TH',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 68
	[
		'title'        => 'Joomla! 1.5 - Turkish',
		'alias'        => 'joomla15-turkish',
		'description'  => '<p>Language: Turkish (tr-TR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=100326">Ümit Kenan Gönüllü</a><br />Team Members: 1<br />Contact: <a href="mailto:kenan@ukenan.com">kenan@ukenan.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/tr-TR',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 69
	[
		'title'        => 'Joomla! 1.5 - Ukrainian',
		'alias'        => 'joomla15-ukrainian',
		'description'  => '<p>Language: Ukrainian (uk-UA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=30343">Denys Nosov</a><br />Team Members: 1<br />Contact: <a href="mailto:denys@joomla-ua.org">denys@joomla-ua.org</a><br />Website: <a href="http://www.joomla-ua.org">www.joomla-ua.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/uk-UA',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 70
	[
		'title'        => 'Joomla! 1.5 - Urdu (Pakistan)',
		'alias'        => 'joomla15-urdu-pakistan',
		'description'  => '<p>Language: Urdu (Pakistan) (ur-PK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=88724">basim74_36</a><br />Team Members: 1<br />Contact: <a href="mailto:basim74_36@hotmail.com">basim74_36@hotmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/ur-PK',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 71
	[
		'title'        => 'Joomla! 1.5 - Vietnamese',
		'alias'        => 'joomla15-vietnamese',
		'description'  => '<p>Language: Vietnamese (vi-VN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=30421">Viet Hoang Vu</a><br />Team Members: 1<br />Contact: <a href="mailto:banquantri@joomlaviet.org">banquantri@joomlaviet.org</a><br />Website: <a href="http://www.joomlaviet.org">www.joomlaviet.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla15/vi-VN',
		'vgroup_id'    => '2',
		'is_supported' => '0',
	],
	// ID: 72
	[
		'title'        => 'Joomla! 2.5 - Afrikaans',
		'alias'        => 'joomla25-afrikaans',
		'description'  => '<p>Language: Afrikaans (af-ZA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=84994">Gerrit Hoekstra</a><br />Team members: 1<br />Contact: <a href="mailto:gerrit@hoekstra.co.uk">gerrit@hoekstra.co.uk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/af-ZA',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 73
	[
		'title'        => 'Joomla! 2.5 - Albanian',
		'alias'        => 'joomla25-albanian',
		'description'  => '<p>Language: Albanian (sq-AL)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=130308">Albagen</a><br />Team members: 1<br/>Contact: <a href="mailto:blendi@blendikraja.info">blendi@blendikraja.info</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/sq-AL',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 74
	[
		'title'        => 'Joomla! 2.5 - Arabic Unitag',
		'alias'        => 'joomla25-arabic-unitag',
		'description'  => '<p>Language: Arabic Unitag (ar-AA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=172649">Mahmood Alhaj Kassem</a><br />Team Members: 2<br />Contact: <a href="mailto:suneye3@gmail.com">suneye3@gmail.com</a></p><p><span class="label label-info">Information</span> As an ISO tag is necessary to comply with IT standards, we chose a UNITAG for Arabic, thus usable in any country. ar-AA is the new tag. It is Classic Arabic.</p><p><span class="label label-info">Information</span> New in Joomla! 2.5 is the plg_system_languagecode plugin that allows site administrators to choose the language tag that will display on their site for SEO purposes.  It allows users to use this package and change the language tag to ar-DZ, ar-SA, ar-EG, ar-TN, etc.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ar-AA',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 75
	[
		'title'        => 'Joomla! 2.5 - Armenian',
		'alias'        => 'joomla25-armenian',
		'description'  => '<p>Language: Armenian (hy-AM)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=690540">Andrey Aleksanyants</a><br />Team members: 1<br/>Contact: <a href="mailto:aaleksanyants@yahoo.com">aaleksanyants@yahoo.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/hy-AM',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 76
	[
		'title'        => 'Joomla! 2.5 - Azeri',
		'alias'        => 'joomla25-azeri',
		'description'  => '<p>Language: Azeri (az-AZ)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=532498">Guluzade Farhad</a><br />Team Members: 1<br />Contact: <a href="mailto:jumancy@yahoo.com">jumancy@yahoo.com</a><br />Website: <a href="http://joomla-az.org">joomla-az.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/az-AZ',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 77
	[
		'title'        => 'Joomla! 2.5 - Basque',
		'alias'        => 'joomla25-basque',
		'description'  => '<p>Language: Basque (eu-ES)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=604481">elurnet</a><br />Team members: 1<br/>Contact: <a href="mailto:kontsultak@elurnet.net">kontsultak@elurnet.net</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/eu-ES',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 78
	[
		'title'        => 'Joomla! 2.5 - Belarusian',
		'alias'        => 'joomla25-belarusian',
		'description'  => '<p>Language: Belarusian (be-BY)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=27443">Dennis Hermatski</a><br />Team Members: 1<br />Contact: <a href="mailto:pandenitz@mail.ru">pandenitz@mail.ru</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/be-BY',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 79
	[
		'title'        => 'Joomla! 2.5 - Bengali (Bangladesh)',
		'alias'        => 'joomla25-bengali',
		'description'  => '<p>Language: Bengali (Bangladesh) (bn-BD)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=114153">Kamal Sikder</a><br />Team Members: 1<br />Contact: <a href="mailto:kamalsikder@yahoo.co.uk">kamalsikder@yahoo.co.uk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/bn-BD',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 80
	[
		'title'        => 'Joomla! 2.5 - Bosnian',
		'alias'        => 'joomla25-bosnian',
		'description'  => '<p>Language: Bosnian (bs-BA)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=434037">Admir Agic</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=514368">Dantes Delic</a><br />Team Members: 2<br />Contact: <a href="mailto:admir.agic@joomla.ba">admir.agic@joomla.ba</a><br />Website: <a href="http://www.joomla.ba">www.joomla.ba</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/bs-BA',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 81
	[
		'title'        => 'Joomla! 2.5 - Bulgarian',
		'alias'        => 'joomla25-bulgarian',
		'description'  => '<p>Language: Bulgarian (bg-BG)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=54803">Yury Boev</a><br />Team Members: 1<br />Contact: <a href="mailto:yuriy_boev@mail.bg">yuriy_boev@mail.bg</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/bg-BG',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 82
	[
		'title'        => 'Joomla! 2.5 - Catalan',
		'alias'        => 'joomla25-catalan',
		'description'  => '<p>Language: Catalan (ca-ES)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=117349">Joan Libre</a><br />Team Members: 1<br />Contact: <a href="mailto:el.libre@gmail.com">el.libre@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ca-ES',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 83
	[
		'title'        => 'Joomla! 2.5 - Central Kurdish (Soranî)',
		'alias'        => 'joomla25-kurdish-sorani',
		'description'  => '<p>Language: Kurdish (Soranî) (ckb-IQ)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=490340">Chalak S. Kareem</a><br />Team Members: 2<br />Contact: <a href="mailto:joomla@kurdd.com">joomla@kurdd.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ckb-IQ',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 84
	[
		'title'        => 'Joomla! 2.5 - Chinese (Simplified)',
		'alias'        => 'joomla25-chinese-simplified',
		'description'  => '<p>Language: Chinese (Simplified) (zh-CN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=29778">Jonathan Cheung</a><br />Team Members: 1<br /> Contact: <a href="mailto:osulcn@gmail.com">osulcn@gmail.com</a><br />Website: <a href="http://www.joomla.cn">www.joomla.cn</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/zh-CN',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 85
	[
		'title'        => 'Joomla! 2.5 - Chinese (Traditional)',
		'alias'        => 'joomla25-chinese-traditional',
		'description'  => '<p>Language: Chinese (Traditional) (zh-TW)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1604">Eddy Chang</a><br />Team Members: 1<br />Contact: <a href="mailto:taiwanmambo@gmail.co">taiwanmambo@gmail.co</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/zh-TW',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 86
	[
		'title'        => 'Joomla! 2.5 - Croatian',
		'alias'        => 'joomla25-croatian',
		'description'  => '<p>Language: Croatian (hr-HR)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=43345">Bernard Toplak</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=109714">Wooer</a><br />Team Members: 2<br />Contact: <a href="mailto:prijevod@joomla.hr">prijevod@joomla.hr</a><br />Website: <a href="http://www.joomla.hr">www.joomla.hr</a> | Forum: <a href="http://forum.joomla.hr">forum.joomla.hr</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/hr-HR',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 87
	[
		'title'        => 'Joomla! 2.5 - Czech',
		'alias'        => 'joomla25-czech',
		'description'  => '<p>Language: Czech (cs-CZ)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=702152">HonzaKr</a><br />Team Members: 2<br />Contact: <a href="mailto:jk@krob.cz">jk@krob.cz</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/cs-CZ',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 88
	[
		'title'        => 'Joomla! 2.5 - Danish',
		'alias'        => 'joomla25-danish',
		'description'  => '<p>Language: Danish (da-DK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=94264">Ronny Buelund</a><br />Team Members: 1<br />Contact: <a href="mailto:mail@danskjoomla.dk">mail@danskjoomla.dk</a><br />Website: <a href="http://danskjoomla.dk">danskjoomla.dk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/da-DK',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 89
	[
		'title'        => 'Joomla! 2.5 - Dutch',
		'alias'        => 'joomla25-dutch',
		'description'  => '<p>Language: Dutch (nl-NL)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=159718">Marijke Stuivenberg</a><br />Team Members: 2<br />Contact: <a href="mailto:taal@joomlacommunity.eu">taal@joomlacommunity.eu</a><br />Website: <a href="http://www.joomlacommunity.eu/">www.joomlacommunity.eu</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/nl-NL',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 90
	[
		'title'        => 'Joomla! 2.5 - English (Australia)',
		'alias'        => 'joomla25-english-australia',
		'description'  => '<p>Language: English (Australia) (en-AU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=368245">Leonard Fitzgerald</a><br />Team Members: 1<br />Contact: <a href="mailto:admin@aussiesrus.com.au">admin@aussiesrus.com.au</a></p><p><span class="label label-important">Important!</span> This variant of en-GB is provided to help some search engines recognize the site\'s country (Bing for example). Otherwise, its contents are exactly the same as the default en-GB files.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/en-AU',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 91
	[
		'title'        => 'Joomla! 2.5 - English (USA)',
		'alias'        => 'joomla25-english-us',
		'description'  => '<p>Language: English (USA) (en-US)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=368245">Leonard Fitzgerald</a><br />Team Members: 1<br />Contact: <a href="mailto:admin@aussiesrus.com.au">admin@aussiesrus.com.au</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/en-US',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 92
	[
		'title'        => 'Joomla! 2.5 - Esperanto',
		'alias'        => 'joomla25-esperanto',
		'description'  => '<p>Language: Esperanto (eo-XX)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=162593">Stella Lindblom</a><br />Team members: 3<br />Contact: <a href="mailto:tradukoj@esperantosverige.se">tradukoj@esperantosverige.se</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/eo-XX',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 93
	[
		'title'        => 'Joomla! 2.5 - Estonian',
		'alias'        => 'joomla25-estonian',
		'description'  => '<p>Language: Estonian (et-EE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1040">Rivo Zängov</a><br />Team members: 1<br />Contact: <a href="mailto:eraser@eraser.ee">eraser@eraser.ee</a><br />Website: <a href="http://www.eraser.ee">www.eraser.ee</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/et-EE',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 94
	[
		'title'        => 'Joomla! 2.5 - Finnish',
		'alias'        => 'joomla25-finnish',
		'description'  => '<p>Language: Finnish (fi-FI)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=45207">Sami Haaranen</a><br />Team Members: 4<br />Contact: <a href="mailto:mortti@joomla.fi">mortti@joomla.fi</a><br />Website: <a href="http://www.joomla.fi">www.joomla.fi</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/fi-FI',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 95
	[
		'title'        => 'Joomla! 2.5 - Flemish',
		'alias'        => 'joomla25-flemish',
		'description'  => '<p>Language: Flemish (nl-BE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=458323">Frank Joris</a><br />Team Members: 1<br />Contact: <a href="mailto:frank.joris@skynet.be">frank.joris@skynet.be</a><br />Website: <a href="http://pangea.suburbs.be">pangea.suburbs.be</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/nl-BE',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 96
	[
		'title'        => 'Joomla! 2.5 - French',
		'alias'        => 'joomla25-french',
		'description'  => '<p>Language: French (fr-FR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=5894">Mihàly Marti</a><br />Team Members: 30<br />Contact: <a href="mailto:traduction@joomla.fr">traduction@joomla.fr</a><br />Website: <a href="http://www.joomla.fr/">www.joomla.fr</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/fr-FR',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 97
	[
		'title'        => 'Joomla! 2.5 - Galician',
		'alias'        => 'joomla25-galician',
		'description'  => '<p>Language: Galician (gl-ES)<br /> Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=202374">damufo</a><br />Team Members: 1<br />Contact: <a href="mailto:damufo@gmail.com">damufo@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/gl-ES',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 98
	[
		'title'        => 'Joomla! 2.5 - Georgian',
		'alias'        => 'joomla25-georgian',
		'description'  => '<p>Language: Georgian (ka-GE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=492675">Manana Gedevanishvili</a><br />Team Members: 1<br />Contact: <a href="mailto:mananagedevanishvili@yahoo.com">mananagedevanishvili@yahoo.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ka-GE',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 99
	[
		'title'        => 'Joomla! 2.5 - German',
		'alias'        => 'joomla25-german',
		'description'  => '<p>Language: German (de-DE/de-AT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=60422">Jan Erik Zassenhaus</a><br />Team Members: 10<br />Contact: <a href="mailto:Jan.Zassenhaus@jgerman.de">Jan.Zassenhaus@jgerman.de</a><br />Website: <a href="http://www.jgerman.de">www.jgerman.de</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/de-DE',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 100
	[
		'title'        => 'Joomla! 2.5 - Greek',
		'alias'        => 'joomla25-greek',
		'description'  => '<p>Language: Greek (el-GR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=544">Aris Ntatsis</a><br />Team Members: 30<br />Contact: <a href="mailto:joomla@myjoomla.gr">joomla@myjoomla.gr</a><br />Website: <a href="http://www.joomla.gr">www.joomla.gr</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/el-GR',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 101
	[
		'title'        => 'Joomla! 2.5 - Hebrew',
		'alias'        => 'joomla25-hebrew',
		'description'  => '<p>Language: Hebrew (he-IL)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=147303">Ofer Cohen</a><br />Team Members: 3<br />Contact: <a href="mailto:info@joomla.org.il">info@joomla.org.il</a><br />Website: <a href="http://www.joomla.org.il">www.joomla.org.il</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/he-IL',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 102
	[
		'title'        => 'Joomla! 2.5 - Hindi (India)',
		'alias'        => 'joomla25-hindi',
		'description'  => '<p>Language: Hindi (India) (hi-IN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=367808">Sanjeev Naroliya</a><br />Team Members: 4<br />Contact: <a href="mailto:sanjeev.naroliya@gmail.com">sanjeev.naroliya@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/hi-IN',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 103
	[
		'title'        => 'Joomla! 2.5 - Hungarian',
		'alias'        => 'joomla25-hungarian',
		'description'  => '<p>Language: Hungarian (hu-HU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=41482">Tibor Tóth</a><br />Team Members: 3<br />Contact: <a href="mailto:totht@joomla.org.hu">totht@joomla.org.hu</a><br />Website: <a href="http://www.joomla.org.hu">www.joomla.org.hu</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/hu-HU',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 104
	[
		'title'        => 'Joomla! 2.5 - Indonesian (Bahasa Indonesia)',
		'alias'        => 'joomla25-indonesian',
		'description'  => '<p>Language: Indonesian (Bahasa Indonesia) (id-ID)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=635">Andy Sikumbang</a><br />Team Members: 12<br />Contact: <a href="mailto:sikumbang@gmail.com">sikumbang@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/id-ID',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 105
	[
		'title'        => 'Joomla! 2.5 - Italian',
		'alias'        => 'joomla25-italian',
		'description'  => '<p>Language: Italian (it-IT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1426">Stefania Gaianigo</a><br />Team Members: 3<br />Contact: <a href="mailto:info@joomla.it">info@joomla.it</a><br />Website: <a href="http://www.joomla.it">www.joomla.it</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/it-IT',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 106
	[
		'title'        => 'Joomla! 2.5 - Japanese',
		'alias'        => 'joomla25-japanese',
		'description'  => '<p>Language: Japanese (ja-JP)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=2401">Nori</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=3018">richell</a><br />Team Members: 7<br />Website: <a href="http://www.joomla.jp">www.joomla.jp</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ja-JP',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 107
	[
		'title'        => 'Joomla! 2.5 - Khmer (Cambodia)',
		'alias'        => 'joomla25-khmer',
		'description'  => '<p>Language: Khmer (Cambodia) (km-KH)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=330483">Heng Sovann</a><br />Team Members: 1<br />Contact: <a href="mailto:hengsovann@gmail.com">hengsovann@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/km-KH',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 108
	[
		'title'        => 'Joomla! 2.5 - Korean',
		'alias'        => 'joomla25-korean',
		'description'  => '<p>Language: Korean (ko-KR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=631113">Mingu Kang</a><br />Team Members: 1<br />Contact: <a href="mailto:kangc@kilmeny.net">kangc@kilmeny.net</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ko-KR',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 109
	[
		'title'        => 'Joomla! 2.5 - Laotian',
		'alias'        => 'joomla25-laotian',
		'description'  => '<p>Language: Laotian (lo-LA)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=264833">vskphanthanousy</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=401443">Chittavong</a><br />Team Members: 4<br />Contact: <a href="mailto:info@joomlalaolao.com">info@joomlalaolao.com</a><br />Website: <a href="http://www.joomlalaolao.com">www.joomlalaolao.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/lo-LA',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 110
	[
		'title'        => 'Joomla! 2.5 - Latvian',
		'alias'        => 'joomla25-latvian',
		'description'  => '<p>Language: Latvian (lv-LV)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=8175">Lemings</a><br />Team Members: 1<br />Contact: <a href="mailto:lemings@inbox.lv">lemings@inbox.lv</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/lv-LV',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 111
	[
		'title'        => 'Joomla! 2.5 - Lithuanian',
		'alias'        => 'joomla25-lithuanian',
		'description'  => '<p>Language: Lithuanian (lt-LT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=419732">Martynas</a><br />Team Members: 1<br />Contact: <a href="mailto:martynas@joomla123.lt">martynas@joomla123.lt</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/lt-LT',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 112
	[
		'title'        => 'Joomla! 2.5 - Macedonian',
		'alias'        => 'joomla25-macedonian',
		'description'  => '<p>Language: Macedonian (mk-MK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=149928">lija Iliev</a><br />Team Members: 1<br />Contact: <a href="mailto:info@joomla.mk">info@joomla.mk</a><br />Website: <a href="http://joomla.mk">joomla.mk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/mk-MK',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 113
	[
		'title'        => 'Joomla! 2.5 - Malayalam',
		'alias'        => 'joomla25-malayalam',
		'description'  => '<p>Language: Malayalam (India) (ml-IN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=366210">Sujith</a><br />Team Members: 1<br />Contact: <a href="mailto:sujith@sujith.co.in">sujith@sujith.co.in</a><br />Website: <a href="http://techlineinfo.com">techlineinfo.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ml-IN',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 114
	[
		'title'        => 'Joomla! 2.5 - Mongolian',
		'alias'        => 'joomla25-mongolian',
		'description'  => '<p>Language: Mongolian (mn-MN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=109009">Altansukh</a><br />Team Members: 6<br />Contact: <a href="mailto:altansukh@altansukh.com">altansukh@altansukh.com</a><br />Website: <a href="http://www.n20.mn">www.n20.mn</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/mn-MN',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 115
	[
		'title'        => 'Joomla! 2.5 - Norwegian (Bokmål)',
		'alias'        => 'joomla25-norwegian-bokmal',
		'description'  => '<p>Language: Norwegian (Bokmål) (nb-NO)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=5511">Rune Rasmussen</a><br />Team Members: 4<br />Contact: <a href="mailto:oversettelser@joomlainorge.no">oversettelser@joomlainorge.no</a><br />Website: <a href="http://www.joomlainorge.no/">www.joomlainorge.no</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/nb-NO',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 116
	[
		'title'        => 'Joomla! 2.5 - Norwegian (Nynorsk)',
		'alias'        => 'joomla25-norwegian-nynorsk',
		'description'  => '<p>Language: Norwegian (Nynorsk) (nn-NO)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=244021">toyni</a><br />Team Members: 4<br />Contact: <a href="mailto:oversettelser@joomlainorge.no">oversettelser@joomlainorge.no</a><br />Website: <a href="http://www.joomlainorge.no/">www.joomlainorge.no</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/nn-NO',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 117
	[
		'title'        => 'Joomla! 2.5 - Persian (Farsi)',
		'alias'        => 'joomla25-persian-farsi',
		'description'  => '<p>Language: Persian (Farsi) (fa-IR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1958">Mohsen Firoozmandan</a><br />Team Members: 11<br />Contact: <a href="mailto:info@joomlafarsi.com">info@joomlafarsi.com</a><br />Website: <a href="http://joomlafarsi.com">www.joomlafarsi.com</a></p><p><span class="label label-info">Note</span> Jalali date is included in this package</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/fa-IR',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 118
	[
		'title'        => 'Joomla! 2.5 - Polish',
		'alias'        => 'joomla25-polish',
		'description'  => '<p>Language: Polish (pl-PL)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=2152">zwiastun</a>, dylek<br />Team Members: 15<br />Contact: <a href="mailto:zwiastun@joomla.pl">zwiastun@joomla.pl</a><br />Website: <a href="http://www.joomla.pl">www.joomla.pl</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/pl-PL',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 119
	[
		'title'        => 'Joomla! 2.5 - Portuguese (Brazil)',
		'alias'        => 'joomla25-portuguese-brazil',
		'description'  => '<p>Language: Portuguese (Brazil) (pt-BR)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=590">FaBMAK</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=360346">Ariadne Pinheiro</a><br />Team Members: 2<br />Contacts: <a href="mailto:joomla@joomla.com.br">joomla@joomla.com.br</a>, <a href="mailto:ariadne.pineiro@gmail.com">ariadne.pineiro@gmail.com</a><br />Website: <a href="http://www.joomla.com.br">www.joomla.com.br</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/pt-BR',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 120
	[
		'title'        => 'Joomla! 2.5 - Portuguese (Portugal)',
		'alias'        => 'joomla25-portuguese-portugal',
		'description'  => '<p>Language: Portuguese (Portugal) (pt-PT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=6515">Paulo Izidoro</a><br />Team Members: 180<br />Contact: <a href="mailto:geral@joomlapt.com">geral@joomlapt.com</a><br />Website: <a href="http://www.joomlapt.com">www.joomlapt.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/pt-PT',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 121
	[
		'title'        => 'Joomla! 2.5 - Romanian',
		'alias'        => 'joomla25-romanian',
		'description'  => '<p>Language: Romanian (ro-RO)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=254">Cosmin Lebu</a><br />Team Members: 13<br />Contact: <a href="mailto:contact@joomla.ro">contact@joomla.ro</a><br />Website: <a href="http://www.joomla.ro">www.joomla.ro</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ro-RO',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 122
	[
		'title'        => 'Joomla! 2.5 - Russian',
		'alias'        => 'joomla25-russian',
		'description'  => '<p>Language: Russian (ru-RU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=250">Sergey Litvinov</a><br />Team Members: 1<br />Contact: <a href="mailto:serge.litvinov@gmail.com">serge.litvinov@gmail.com</a><br />Website: <a href="http://www.joomlaportal.ru">www.joomlaportal.ru</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ru-RU',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 123
	[
		'title'        => 'Joomla! 2.5 - Scottish Gaelic',
		'alias'        => 'joomla25-scottish-gaelic',
		'description'  => '<p>Language: Scottish Gaelic (gd-GB)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=579806">Michael Bauer</a><br />Team Members: 1<br />Contact: <a href="mailto:fios@akerbeltz.org">fios@akerbeltz.org</a></p><p><span class="label label-info">Note</span> The package available here is a site package.  As some plugin language files are required in the front end, it also installs a limited administrator package.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/gd-GB',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 124
	[
		'title'        => 'Joomla! 2.5 - Serbian (Cyrillic)',
		'alias'        => 'joomla25-serbian-cyrillic',
		'description'  => '<p>Language: Serbian (Cyrillic) (sr-RS)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=147895">cicans</a><br />Team Members: 1<br />Contact: <a href="mailto:svetlana.zec@gmail.com">svetlana.zec@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/sr-RS',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 125
	[
		'title'        => 'Joomla! 2.5 - Serbian (Latin)',
		'alias'        => 'joomla25-serbian-latin',
		'description'  => '<p>Language: Serbian (Latin) (sr-YU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=147895">cicans</a><br />Team Members: 1<br />Contact: <a href="mailto:svetlana.zec@gmail.com">svetlana.zec@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/sr-YU',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 126
	[
		'title'        => 'Joomla! 2.5 - Slovak',
		'alias'        => 'joomla25-slovak',
		'description'  => '<p>Language: Slovak (sk-SK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=341717">Peter Michnica</a><br />Team Members: 1<br />Contact: <a href="mailto:drobec@seznam.cz">drobec@seznam.cz</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/sk-SK',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 127
	[
		'title'        => 'Joomla! 2.5 - Spanish',
		'alias'        => 'joomla25-spanish',
		'description'  => '<p>Language: Spanish (es-ES)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=813">Gustavo Raúl Aragón</a><br />Team Members: 6<br />Contact: <a href="mailto:info@comunidadjoomla.org">info@comunidadjoomla.org</a><br />Website: <a href="http://comunidadjoomla.org">comunidadjoomla.org</a> | Forum: <a href="http://foro.comunidadjoomla.org">foro.comunidadjoomla.org</a> | Twitter: <a href="https://twitter.com/comunidadjoomla">twitter.com/comunidadjoomla</a> | Facebook: <a href="https://www.facebook.com/comunidadjoomla.org">www.facebook.com/comunidadjoomla.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/es-ES',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 128
	[
		'title'        => 'Joomla! 2.5 - Swahili',
		'alias'        => 'joomla25-swahili',
		'description'  => '<p>Language: Swahili (sw-KE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=683687">Hassan Abdalla</a><br />Team Members: 1<br />Contact: <a href="mailto:hassan@att-center.com">hassan@att-center.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/sw-KE',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 129
	[
		'title'        => 'Joomla! 2.5 - Swedish',
		'alias'        => 'joomla25-swedish',
		'description'  => '<p>Language: Swedish (sv-SE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=61631">Stefan Gagner</a><br />Team Members: 3<br />Contact: <a href="mailto:info@svenskjoomla.se">info@svenskjoomla.se</a><br />Website: <a href="http://www.svenskjoomla.se">www.svenskjoomla.se</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/sv-SE',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 130
	[
		'title'        => 'Joomla! 2.5 - Syriac (East)',
		'alias'        => 'joomla25-syriac-east',
		'description'  => '<p>Language: Syriac (East) (sy-IQ)<br />Coordinators: Dinka, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=120314">Ninwaya</a><br />Team Members: 2<br />Contact: <a href="mailto:pauls@nohadra.com">pauls@nohadra.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/sy-IQ',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 131
	[
		'title'        => 'Joomla! 2.5 - Tamil (India)',
		'alias'        => 'joomla25-tamil-india',
		'description'  => '<p>Language: Tamil (India) (ta-IN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=224484">Ilagnayeru \'MIG\' Manickam</a><br />Team Members: 2<br />Contact: <a href="mailto:manickam_mig@yahoo.com">manickam_mig@yahoo.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ta-IN',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 132
	[
		'title'        => 'Joomla! 2.5 - Thai',
		'alias'        => 'joomla25-thai',
		'description'  => '<p>Language: Thai (th-TH)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=67">Akarawuth Tamrareang</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=157">Supachai Teasakul</a><br />Team Members: 5<br />Contact: <a href="mailto:tt@joomlacorner.com">tt@joomlacorner.com</a><br />Website: <a href="http://www.joomlacorner.com">www.joomlacorner.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/th-TH',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 133
	[
		'title'        => 'Joomla! 2.5 - Turkish',
		'alias'        => 'joomla25-turkish',
		'description'  => '<p>Language: Turkish (tr-TR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=100326">Ümit Kenan Gönüllü</a><br />Team Members: 1<br />Contact: <a href="mailto:kenan@ukenan.com">kenan@ukenan.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/tr-TR',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 134
	[
		'title'        => 'Joomla! 2.5 - Ukrainian',
		'alias'        => 'joomla25-ukrainian',
		'description'  => '<p>Language: Ukrainian (uk-UA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=30343">Denys Nosov</a><br />Team Members: 1<br />Contact: <a href="mailto:denys@joomla-ua.org">denys@joomla-ua.org</a><br />Website: <a href="http://www.joomla-ua.org">www.joomla-ua.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/uk-UA',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 135
	[
		'title'        => 'Joomla! 2.5 - Urdu (Pakistan)',
		'alias'        => 'joomla25-urdu-pakistan',
		'description'  => '<p>Language: Urdu (Pakistan) (ur-PK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=88724">basim74_36</a><br />Team Members: 1<br />Contact: <a href="mailto:basim74_36@hotmail.com">basim74_36@hotmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/ur-PK',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 136
	[
		'title'        => 'Joomla! 2.5 - Uyghur',
		'alias'        => 'joomla25-uyghur',
		'description'  => '<p>Language: Uyghur (ug-CN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=629034">Akber Tursun</a><br />Team Members: 3<br />Contact: <a href="mailto:ihbal.net@gmail.com">ihbal.net@gmail.com</a><br />Website: <a href="http://www.joomlauy.org">www.joomlauy.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/uk-UA',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 137
	[
		'title'        => 'Joomla! 2.5 - Vietnamese',
		'alias'        => 'joomla25-vietnamese',
		'description'  => '<p>Language: Vietnamese (vi-VN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=626204">Nguyen Huu Hien</a><br />Team Members: 4<br />Contact: <a href="mailto:hiennh@joomlashine.com">hiennh@joomlashine.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/vi-VN',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 138
	[
		'title'        => 'Joomla! 2.5 - Welsh',
		'alias'        => 'joomla25-welsh',
		'description'  => '<p>Language: Welsh (cy-GB)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=224274">Kieran Kelly</a><br />Team Members: 1<br />Contact: <a href="mailto:mail@cefnllys.com">mail@cefnllys.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla25/cy-GB',
		'vgroup_id'    => '3',
		'is_supported' => '0',
	],
	// ID: 139
	[
		'title'        => 'Joomla! 3 - Afrikaans',
		'alias'        => 'joomla3-afrikaans',
		'description'  => '<p>Language: Afrikaans (af-ZA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=84994">Gerrit Hoekstra</a><br />Team members: 1<br />Contact: <a href="mailto:gerrit@hoekstra.co.uk">gerrit@hoekstra.co.uk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/af-ZA',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 140
	[
		'title'        => 'Joomla! 3 - Albanian',
		'alias'        => 'joomla3-albanian',
		'description'  => '<p>Language: Albanian (sq-AL)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=708073">Besiana Bici</a><br />Team members: 1<br/>Contact: <a href="mailto:besianabici@gmail.com">besianabici@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/sq-AL',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 141
	[
		'title'        => 'Joomla! 3 - Arabic Unitag',
		'alias'        => 'joomla3-arabic-unitag',
		'description'  => '<p>Language: Arabic Unitag (ar-AA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=56979">Ashraf Damra</a><br />Team Members: 2<br />Contact: <a href="mailto:dr.d.ashraf@gmail.com">dr.d.ashraf@gmail.com</a></p><p><span class="label label-info">Information</span> As an ISO tag is necessary to comply with IT standards, we chose a UNITAG for Arabic, thus usable in any country. ar-AA is the new tag. It is Classic Arabic.</p><p><span class="label label-info">Information</span> In Joomla! 3 is the plg_system_languagecode plugin that allows site administrators to choose the language tag that will display on their site for SEO purposes.  It allows users to use this package and change the language tag to ar-DZ, ar-SA, ar-EG, ar-TN, etc.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ar-AA',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 142
	[
		'title'        => 'Joomla! 3 - Armenian',
		'alias'        => 'joomla3-armenian',
		'description'  => '<p>Language: Armenian (hy-AM)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=690540">Andrey Aleksanyants</a><br />Team Members: 1<br />Contact: <a href="mailto:aaleksanyants@yahoo.com">aaleksanyants@yahoo.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/hy-AM',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 143
	[
		'title'        => 'Joomla! 3 - Basque',
		'alias'        => 'joomla3-basque',
		'description'  => '<p>Language: Basque (eu-ES)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=790542">Miel Loinaz</a><br />Team Members: 4<br />Contact: <a href="mailto:joomlaeuskaraz@gmail.com">joomlaeuskaraz@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/eu-ES',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 144
	[
		'title'        => 'Joomla! 3 - Belarusian',
		'alias'        => 'joomla3-belarusian',
		'description'  => '<p>Language: Belarusian (be-BY)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=27443">Dennis Hermatski</a><br />Team Members: 1<br />Contact: <a href="mailto:pandenitz@mail.ru">pandenitz@mail.ru</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/be-BY',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 145
	[
		'title'        => 'Joomla! 3 - Bosnian',
		'alias'        => 'joomla3-bosnian',
		'description'  => '<p>Language: Bosnian (bs-BA)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=434037">Admir Agic</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=514368">Dantes Delic</a><br />Team Members: 2<br />Contact: <a href="mailto:admir.agic@joomla.ba">admir.agic@joomla.ba</a><br />Website: <a href="http://www.joomla.ba">www.joomla.ba</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/bs-BA',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 146
	[
		'title'        => 'Joomla! 3 - Bulgarian',
		'alias'        => 'joomla3-bulgarian',
		'description'  => '<p>Language: Bulgarian (bg-BG)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=54803">Yury Boev</a><br />Team Members: 1<br />Contact: <a href="mailto:joomla@yboev.eu">joomla@yboev.eu</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/bg-BG',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 147
	[
		'title'        => 'Joomla! 3 - Catalan',
		'alias'        => 'joomla3-catalan',
		'description'  => '<p>Language: Catalan (ca-ES)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=117349">Joan Libre</a><br />Team Members: 1<br />Contact: <a href="mailto:el.libre@gmail.com">el.libre@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ca-ES',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 148
	[
		'title'        => 'Joomla! 3 - Chinese (Simplified)',
		'alias'        => 'joomla3-chinese-simplified',
		'description'  => '<p>Language: Chinese (Simplified) (zh-CN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=2659">Zhous</a><br />Team Members: 1<br /> Contact: <a href="mailto:zhous1998@gmail.com">zhous1998@gmail.com</a><br />Website: <a href="http://www.joomla.cn">www.joomla.cn</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/zh-CN',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 149
	[
		'title'        => 'Joomla! 3 - Chinese (Traditional)',
		'alias'        => 'joomla3-chinese-traditional',
		'description'  => '<p>Language: Chinese (Traditional) (zh-TW)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1604">Eddy Chang</a><br />Team Members: 1<br />Contact: <a href="mailto:taiwanmambo@gmail.co">taiwanmambo@gmail.co</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/zh-TW',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 150
	[
		'title'        => 'Joomla! 3 - Croatian',
		'alias'        => 'joomla3-croatian',
		'description'  => '<p>Language: Croatian (hr-HR)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=43345">Bernard Toplak</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=109714">Wooer</a><br />Team Members: 2<br />Contact: <a href="mailto:prijevod@joomla.hr">prijevod@joomla.hr</a><br />Website: <a href="http://www.joomla.hr">www.joomla.hr</a> | Forum: <a href="http://forum.joomla.hr">forum.joomla.hr</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/hr-HR',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 151
	[
		'title'        => 'Joomla! 3 - Czech',
		'alias'        => 'joomla3-czech',
		'description'  => '<p>Language: Czech (cs-CZ)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=702152">HonzaKr</a><br />Team Members: 2<br />Contact: <a href="mailto:jk@krob.cz">jk@krob.cz</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/cs-CZ',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 152
	[
		'title'        => 'Joomla! 3 - Danish',
		'alias'        => 'joomla3-danish',
		'description'  => '<p>Language: Danish (da-DK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=94264">Ronny Buelund</a><br />Team Members: 1<br />Contact: <a href="mailto:mail@danskjoomla.dk">mail@danskjoomla.dk</a><br />Website: <a href="http://danskjoomla.dk">danskjoomla.dk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/da-DK',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 153
	[
		'title'        => 'Joomla! 3 - Dari Persian',
		'alias'        => 'joomla3-dari-persian',
		'description'  => '<p>Language: Dari Persian (prs-AF)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=94264">Ronny Buelund</a><br />Team Members: 1<br />Contact: <a href="mailto:mail@danskjoomla.dk">mail@danskjoomla.dk</a><br />Website: <a href="http://danskjoomla.dk">danskjoomla.dk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/prs-AF',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 154
	[
		'title'        => 'Joomla! 3 - Dutch',
		'alias'        => 'joomla3-dutch',
		'description'  => '<p>Language: Dutch (nl-NL)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=159718">Marijke Stuivenberg</a><br />Team Members: 2<br />Contact: <a href="mailto:taal@joomlacommunity.eu">taal@joomlacommunity.eu</a><br />Website: <a href="http://www.joomlacommunity.eu/">www.joomlacommunity.eu</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/nl-NL',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 155
	[
		'title'        => 'Joomla! 3 - Dzongkha',
		'alias'        => 'joomla3-dzongkha',
		'description'  => '<p>Language: Dzongkha (dz-BT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=779749">Yeshi Wangchuk</a><br />Team Members: 3<br />Contact: <a href="mailto:heesay@gmail.com">heesay@gmail.com</a></p><p><span class="label label-info">Note</span> For the moment, the language pack available here is a site pack. As some plugins language files are required in the front-end it also installs a minimally translated admin pack.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/dz-BT',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 156
	[
		'title'        => 'Joomla! 3 - English (Australia)',
		'alias'        => 'joomla3-english-australia',
		'description'  => '<p>Language: English (Australia) (en-AU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=368245">Leonard Fitzgerald</a><br />Team Members: 1<br />Contact: <a href="mailto:admin@aussiesrus.com.au">admin@aussiesrus.com.au</a></p><p><span class="label label-important">Important!</span> This variant of en-GB is provided to help some search engines recognize the site\'s country (Bing for example). Otherwise, its contents are exactly the same as the default en-GB files.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/en-AU',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 157
	[
		'title'        => 'Joomla! 3 - English (Canada)',
		'alias'        => 'joomla3-english-canada',
		'description'  => '<p>Language: English (Canada) (en-CA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=746294">Martin Lamothe</a><br />Team Members: 1<br />Contact: <a href="mailto:admin@wiserweb.com">admin@wiserweb.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/en-AU',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 158
	[
		'title'        => 'Joomla! 3 - English (USA)',
		'alias'        => 'joomla3-english-us',
		'description'  => '<p>Language: English (USA) (en-US)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=368245">Leonard Fitzgerald</a><br />Team Members: 1<br />Contact: <a href="mailto:admin@aussiesrus.com.au">admin@aussiesrus.com.au</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/en-US',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 159
	[
		'title'        => 'Joomla! 3 - Estonian',
		'alias'        => 'joomla3-estonian',
		'description'  => '<p>Language: Estonian (et-EE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1040">Rivo Zängov</a><br />Team members: 1<br />Contact: <a href="mailto:eraser@eraser.ee">eraser@eraser.ee</a><br />Website: <a href="http://www.eraser.ee">www.eraser.ee</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/et-EE',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 160
	[
		'title'        => 'Joomla! 3 - Finnish',
		'alias'        => 'joomla3-finnish',
		'description'  => '<p>Language: Finnish (fi-FI)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=45207">Sami Haaranen</a><br />Team Members: 4<br />Contact: <a href="mailto:mortti@joomla.fi">mortti@joomla.fi</a><br />Website: <a href="http://www.joomla.fi">www.joomla.fi</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/fi-FI',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 161
	[
		'title'        => 'Joomla! 3 - Flemish',
		'alias'        => 'joomla3-flemish',
		'description'  => '<p>Language: Flemish (nl-BE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=458323">Frank Joris</a><br />Team Members: 1<br />Contact: <a href="mailto:frank.joris@skynet.be">frank.joris@skynet.be</a><br />Website: <a href="http://pangea.suburbs.be">pangea.suburbs.be</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/nl-BE',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 162
	[
		'title'        => 'Joomla! 3 - French (Canada)',
		'alias'        => 'joomla3-french-canada',
		'description'  => '<p>Language: French (Canada) (fr-CA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=746294">Martin Lamothe</a><br />Team Members: 1<br />Contact: <a href="mailto:admin@wiserweb.com">admin@wiserweb.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/fr-FR',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 163
	[
		'title'        => 'Joomla! 3 - French',
		'alias'        => 'joomla3-french',
		'description'  => '<p>Language: French (fr-FR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=5894">Mihàly Marti</a><br />Team Members: 30<br />Contact: <a href="mailto:traduction@joomla.fr">traduction@joomla.fr</a><br />Website: <a href="http://www.joomla.fr/">www.joomla.fr</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/fr-FR',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 164
	[
		'title'        => 'Joomla! 3 - Galician',
		'alias'        => 'joomla3-galician',
		'description'  => '<p>Language: Galician (gl-ES)<br /> Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=202374">damufo</a><br />Team Members: 1<br />Contact: <a href="mailto:damufo@gmail.com">damufo@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/gl-ES',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 165
	[
		'title'        => 'Joomla! 3 - Georgian',
		'alias'        => 'joomla3-georgian',
		'description'  => '<p>Language: Georgian, Georgia (ka-GE)<br /> Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=794726">Zurab Cherkezishvili</a><br />Team Members: 1<br />Contact: <a href="mailto:z.cherkezishvili@gmail.com">z.cherkezishvili@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ka-GE',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 166
	[
		'title'        => 'Joomla! 3 - German',
		'alias'        => 'joomla3-german',
		'description'  => '<p>Language: German (de-DE/de-AT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=60422">Jan Erik Zassenhaus</a><br />Team Members: 10<br />Contact: <a href="mailto:Jan.Zassenhaus@jgerman.de">Jan.Zassenhaus@jgerman.de</a><br />Website: <a href="http://www.jgerman.de">www.jgerman.de</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/de-DE',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 167
	[
		'title'        => 'Joomla! 3 - Greek',
		'alias'        => 'joomla3-greek',
		'description'  => '<p>Language: Greek (el-GR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=26871">Nicholas Dionysopoulos</a><br />Team Members: 30<br />Contact: <a href="mailto:nikosdion@gmail.com">nikosdion@gmail.com</a><br />Website: <a href="http://www.joomla.gr">www.joomla.gr</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/el-GR',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 168
	[
		'title'        => 'Joomla! 3 - Hebrew',
		'alias'        => 'joomla3-hebrew',
		'description'  => '<p>Language: Hebrew (he-IL)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=147303">Ofer Cohen</a><br />Team Members: 4<br />Contact: <a href="mailto:info@joomla.org.il">info@joomla.org.il</a><br />Website: <a href="http://www.joomla.org.il">www.joomla.org.il</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/he-IL',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 169
	[
		'title'        => 'Joomla! 3 - Hindi (India)',
		'alias'        => 'joomla3-hindi',
		'description'  => '<p>Language: Hindi (India) (hi-IN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=367808">Sanjeev Naroliya</a><br />Team Members: 4<br />Contact: <a href="mailto:sanjeev.naroliya@gmail.com">sanjeev.naroliya@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/hi-IN',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 170
	[
		'title'        => 'Joomla! 3 - Hungarian',
		'alias'        => 'joomla3-hungarian',
		'description'  => '<p>Language: Hungarian (hu-HU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=41482">Tibor Tóth</a><br />Team Members: 3<br />Contact: <a href="mailto:totht@joomla.org.hu">totht@joomla.org.hu</a><br />Website: <a href="http://www.joomla.org.hu">www.joomla.org.hu</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/hu-HU',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 171
	[
		'title'        => 'Joomla! 3 - Indonesian (Bahasa Indonesia)',
		'alias'        => 'joomla3-indonesian',
		'description'  => '<p>Language: Indonesian (Bahasa Indonesia) (id-ID)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=635">Andy Sikumbang</a><br />Team Members: 12<br />Contact: <a href="mailto:sikumbang@gmail.com">sikumbang@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/id-ID',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 172
	[
		'title'        => 'Joomla! 3 - Irish',
		'alias'        => 'joomla3-irish',
		'description'  => '<p>Language: Irish (ga-IE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=781792">Kevin Scannell</a><br />Team Members: 3<br />Contact: <a href="mailto:kscanne@gmail.com">kscanne@gmail.com</a></p><p><span class="label label-info">Note</span> For the moment, the language pack available here is a site pack. As some plugins language files are required in the front-end it also installs a minimally translated admin pack.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ga-IE',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 173
	[
		'title'        => 'Joomla! 3 - Italian',
		'alias'        => 'joomla3-italian',
		'description'  => '<p>Language: Italian (it-IT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1426">Stefania Gaianigo</a><br />Team Members: 3<br />Contact: <a href="mailto:info@joomla.it">info@joomla.it</a><br />Website: <a href="http://www.joomla.it">www.joomla.it</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/it-IT',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 174
	[
		'title'        => 'Joomla! 3 - Japanese',
		'alias'        => 'joomla3-japanese',
		'description'  => '<p>Language: Japanese (ja-JP)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=2401">Nori</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=3018">richell</a><br />Team Members: 7<br />Website: <a href="http://www.joomla.jp">www.joomla.jp</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ja-JP',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 175
	[
		'title'        => 'Joomla! 3 - Khmer (Cambodia)',
		'alias'        => 'joomla3-khmer',
		'description'  => '<p>Language: Khmer (Cambodia) (km-KH)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=330483">Heng Sovann</a><br />Team Members: 1<br />Contact: <a href="mailto:hengsovann@gmail.com">hengsovann@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/km-KH',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 176
	[
		'title'        => 'Joomla! 3 - Korean',
		'alias'        => 'joomla3-korean',
		'description'  => '<p>Language: Korean (ko-KR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=631113">Mingu Kang</a><br />Team Members: 1<br />Contact: <a href="mailto:kangc@kilmeny.net">kangc@kilmeny.net</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ko-KR',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 177
	[
		'title'        => 'Joomla! 3 - Latvian',
		'alias'        => 'joomla3-latvian',
		'description'  => '<p>Language: Latvian (lv-LV)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=8175">Lemings</a><br />Team Members: 1<br />Contact: <a href="mailto:lemings@inbox.lv">lemings@inbox.lv</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/lv-LV',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 178
	[
		'title'        => 'Joomla! 3 - Macedonian',
		'alias'        => 'joomla3-macedonian',
		'description'  => '<p>Language: Macedonian (mk-MK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=149928">lija Iliev</a><br />Team Members: 1<br />Contact: <a href="mailto:info@joomla.mk">info@joomla.mk</a><br />Website: <a href="http://joomla.mk">joomla.mk</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/mk-MK',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 179
	[
		'title'        => 'Joomla! 3 - Malay',
		'alias'        => 'joomla3-malay',
		'description'  => '<p>Language: Malay (ms-MY)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=279622">Sam Suresh</a><br />Team Members: 1<br />Contact: <a href="mailto:support@mu.my">support@mu.my</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ms-MY',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 180
	[
		'title'        => 'Joomla! 3 - Montenegrin',
		'alias'        => 'joomla3-montenegrin',
		'description'  => '<p>Language: Montenegrin (srp-ME)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=715101">Tolja Djurisic</a><br />Team Members: 1<br />Contact: <a href="mailto:toljadj@gmail.com">toljadj@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/mn-MN',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 181
	[
		'title'        => 'Joomla! 3 - Norwegian (Bokmål)',
		'alias'        => 'joomla3-norwegian-bokmal',
		'description'  => '<p>Language: Norwegian (Bokmål) (nb-NO)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=5511">Rune Rasmussen</a><br />Team Members: 4<br />Contact: <a href="mailto:oversettelser@joomlainorge.no">oversettelser@joomlainorge.no</a><br />Website: <a href="http://www.joomlainorge.no/">www.joomlainorge.no</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/nb-NO',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 182
	[
		'title'        => 'Joomla! 3 - Norwegian (Nynorsk)',
		'alias'        => 'joomla3-norwegian-nynorsk',
		'description'  => '<p>Language: Norwegian (Nynorsk) (nn-NO)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=5511">Rune Rasmussen</a><br />Team Members: 4<br />Contact: <a href="mailto:oversettelser@joomlainorge.no">oversettelser@joomlainorge.no</a><br />Website: <a href="http://www.joomlainorge.no/">www.joomlainorge.no</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/nn-NO',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 183
	[
		'title'        => 'Joomla! 3 - Persian (Farsi)',
		'alias'        => 'joomla3-persian-farsi',
		'description'  => '<p>Language: Persian (Farsi) (fa-IR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=1958">Mohsen Firoozmandan</a><br />Team Members: 11<br />Contact: <a href="mailto:info@joomlafarsi.com">info@joomlafarsi.com</a><br />Website: <a href="http://joomlafarsi.com">www.joomlafarsi.com</a></p><p><span class="label label-info">Note</span> Jalali date is included in this package</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/fa-IR',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 184
	[
		'title'        => 'Joomla! 3 - Polish',
		'alias'        => 'joomla3-polish',
		'description'  => '<p>Language: Polish (pl-PL)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=2152">zwiastun</a>, dylek<br />Team Members: 15<br />Contact: <a href="mailto:zwiastun@joomla.pl">zwiastun@joomla.pl</a><br />Website: <a href="http://www.joomla.pl">www.joomla.pl</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/pl-PL',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 185
	[
		'title'        => 'Joomla! 3 - Portuguese (Brazil)',
		'alias'        => 'joomla3-portuguese-brazil',
		'description'  => '<p>Language: Portuguese (Brazil) (pt-BR)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=590">FaBMAK</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=360346">Ariadne Pinheiro</a><br />Team Members: 2<br />Contacts: <a href="mailto:joomla@joomla.com.br">joomla@joomla.com.br</a>, <a href="mailto:ariadne.pineiro@gmail.com">ariadne.pineiro@gmail.com</a><br />Website: <a href="http://www.joomla.com.br">www.joomla.com.br</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/pt-BR',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 186
	[
		'title'        => 'Joomla! 3 - Portuguese (Portugal)',
		'alias'        => 'joomla3-portuguese-portugal',
		'description'  => '<p>Language: Portuguese (Portugal) (pt-PT)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=6515">Paulo Izidoro</a><br />Team Members: 180<br />Contact: <a href="mailto:geral@joomlapt.com">geral@joomlapt.com</a><br />Website: <a href="http://www.joomlapt.com">www.joomlapt.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/pt-PT',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 187
	[
		'title'        => 'Joomla! 3 - Romanian',
		'alias'        => 'joomla3-romanian',
		'description'  => '<p>Language: Romanian (ro-RO)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=189833">Horia Ștefan Negură</a><br />Team Members: 1<br />Contact: <a href="mailto:fakemoth@gmail.com">fakemoth@gmail.com</a><br />Website: <a href="http://www.liquidcore.ro">www.liquidcore.ro</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ro-RO',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 188
	[
		'title'        => 'Joomla! 3 - Russian',
		'alias'        => 'joomla3-russian',
		'description'  => '<p>Language: Russian (ru-RU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=250">Sergey Litvinov</a><br />Team Members: 1<br />Contact: <a href="mailto:serge.litvinov@gmail.com">serge.litvinov@gmail.com</a><br />Website: <a href="http://www.joomlaportal.ru">www.joomlaportal.ru</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ru-RU',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 189
	[
		'title'        => 'Joomla! 3 - Serbian (Cyrillic)',
		'alias'        => 'joomla3-serbian-cyrillic',
		'description'  => '<p>Language: Serbian (Cyrillic) (sr-RS)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=147895">cicans</a><br />Team Members: 1<br />Contact: <a href="mailto:svetlana.zec@gmail.com">svetlana.zec@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/sr-RS',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 190
	[
		'title'        => 'Joomla! 3 - Serbian (Latin)',
		'alias'        => 'joomla3-serbian-latin',
		'description'  => '<p>Language: Serbian (Latin) (sr-YU)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=147895">cicans</a><br />Team Members: 1<br />Contact: <a href="mailto:svetlana.zec@gmail.com">svetlana.zec@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/sr-YU',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 191
	[
		'title'        => 'Joomla! 3 - Sinhala',
		'alias'        => 'joomla3-sinhala',
		'description'  => '<p>Language: Sinhala (si-LK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=505166">Denuwan Wijewardena</a><br />Team Members: 1<br />Contact: <a href="mailto:denuwan@gmail.com">denuwan@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/si-LK',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 192
	[
		'title'        => 'Joomla! 3 - Slovak',
		'alias'        => 'joomla3-slovak',
		'description'  => '<p>Language: Slovak (sk-SK)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=341717">Peter Michnica</a><br />Team Members: 1<br />Contact: <a href="mailto:peter.michnica@gmail.com">peter.michnica@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/sk-SK',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 193
	[
		'title'        => 'Joomla! 3 - Slovenian',
		'alias'        => 'joomla3-slovenian',
		'description'  => '<p>Language: Slovenian (sl-SI)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=791149">Sretko Devič</a><br />Team Members: 1<br />Contact: <a href="mailto:chico@chico.si">chico@chico.si</a><br />Website: <a href="http://www.slojoomla.si">www.slojoomla.si</a> | Forum: <a href="http://www.slojoomla.si/forum">www.slojoomla.si/forum</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/sl-SI',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 194
	[
		'title'        => 'Joomla! 3 - Spanish (Colombia)',
		'alias'        => 'joomla3-spanish-colombia',
		'description'  => '<p>Language: Spanish (Colombia) (es-CO)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=448924">Oscar Ortiz</a><br />Team Members: 1<br />Contact: <a href="mailto:info@jugbogota.org">info@jugbogota.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/es-CO',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 195
	[
		'title'        => 'Joomla! 3 - Spanish',
		'alias'        => 'joomla3-spanish',
		'description'  => '<p>Language: Spanish (es-ES)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=813">Gustavo Raúl Aragón</a><br />Team Members: 6<br />Contact: <a href="mailto:info@comunidadjoomla.org">info@comunidadjoomla.org</a><br />Website: <a href="http://comunidadjoomla.org">comunidadjoomla.org</a> | Forum: <a href="http://foro.comunidadjoomla.org">foro.comunidadjoomla.org</a> | Twitter: <a href="https://twitter.com/comunidadjoomla">twitter.com/comunidadjoomla</a> | Facebook: <a href="https://www.facebook.com/comunidadjoomla.org">www.facebook.com/comunidadjoomla.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/es-ES',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 196
	[
		'title'        => 'Joomla! 3 - Swahili',
		'alias'        => 'joomla3-swahili',
		'description'  => '<p>Language: Swahili (sw-KE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=683687">Hassan Abdalla</a><br />Team Members: 1<br />Contact: <a href="mailto:hassan@att-center.com">hassan@att-center.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/sw-KE',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 197
	[
		'title'        => 'Joomla! 3 - Swedish',
		'alias'        => 'joomla3-swedish',
		'description'  => '<p>Language: Swedish (sv-SE)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=61631">Stefan Gagner</a><br />Team Members: 3<br />Contact: <a href="mailto:info@svenskjoomla.se">info@svenskjoomla.se</a><br />Website: <a href="http://www.svenskjoomla.se">www.svenskjoomla.se</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/sv-SE',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 198
	[
		'title'        => 'Joomla! 3 - Syriac (East)',
		'alias'        => 'joomla3-syriac-east',
		'description'  => '<p>Language: Syriac (East) (sy-IQ)<br />Coordinators: Dinka, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=120314">Ninwaya</a><br />Team Members: 2<br />Contact: <a href="mailto:pauls@nohadra.com">pauls@nohadra.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/sy-IQ',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 199
	[
		'title'        => 'Joomla! 3 - Tamil (India)',
		'alias'        => 'joomla3-tamil-india',
		'description'  => '<p>Language: Tamil (India) (ta-IN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=224484">Ilagnayeru \'MIG\' Manickam</a><br />Team Members: 2<br />Contact: <a href="mailto:manickam_mig@yahoo.com">manickam_mig@yahoo.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/ta-IN',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 200
	[
		'title'        => 'Joomla! 3 - Thai',
		'alias'        => 'joomla3-thai',
		'description'  => '<p>Language: Thai (th-TH)<br />Coordinators: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=67">Akarawuth Tamrareang</a>, <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=157">Supachai Teasakul</a><br />Team Members: 5<br />Contact: <a href="mailto:tt@joomlacorner.com">tt@joomlacorner.com</a><br />Website: <a href="http://www.joomlacorner.com">www.joomlacorner.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/th-TH',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 201
	[
		'title'        => 'Joomla! 3 - Turkish',
		'alias'        => 'joomla3-turkish',
		'description'  => '<p>Language: Turkish (tr-TR)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=100326">Ümit Kenan Gönüllü</a><br />Team Members: 1<br />Contact: <a href="mailto:bilgi@jt.gen.tr">bilgi@jt.gen.tr</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/tr-TR',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 202
	[
		'title'        => 'Joomla! 3 - Turkmen',
		'alias'        => 'joomla3-turkmen',
		'description'  => '<p>Language: Turkmen (tk-TM)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=733680">Shohrat Permanov</a><br />Team Members: 1<br />Contact: <a href="mailto:sohrat@gmail.com">sohrat@gmail.com</a></p><p><span class="label label-info">Note</span> The package available here is a site package.  As some plugin language files are required in the front end, it also installs a limited administrator package.</p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/tk-TM',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 203
	[
		'title'        => 'Joomla! 3 - Ukrainian',
		'alias'        => 'joomla3-ukrainian',
		'description'  => '<p>Language: Ukrainian (uk-UA)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=30343">Denys Nosov</a><br />Team Members: 1<br />Contact: <a href="mailto:denys@joomla-ua.org">denys@joomla-ua.org</a><br />Website: <a href="http://www.joomla-ua.org">www.joomla-ua.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/uk-UA',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 204
	[
		'title'        => 'Joomla! 3 - Uyghur',
		'alias'        => 'joomla3-uyghur',
		'description'  => '<p>Language: Uyghur (ug-CN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=629034">Akber Tursun</a><br />Team Members: 3<br />Contact: <a href="mailto:ihbal.net@gmail.com">ihbal.net@gmail.com</a><br />Website: <a href="http://www.joomlauy.org">www.joomlauy.org</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/uk-UA',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 205
	[
		'title'        => 'Joomla! 3 - Vietnamese',
		'alias'        => 'joomla3-vietnamese',
		'description'  => '<p>Language: Vietnamese (vi-VN)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=626204">n2h</a><br />Team Members: 1<br />Contact: <a href="mailto:hiennh80@gmail.com">hiennh80@gmail.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/vi-VN',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
	// ID: 206
	[
		'title'        => 'Joomla! 3 - Welsh',
		'alias'        => 'joomla3-welsh',
		'description'  => '<p>Language: Welsh (cy-GB)<br />Coordinator: <a href="http://forum.joomla.org/memberlist.php?mode=viewprofile&amp;u=266816">Trevor Godbold</a><br />Team Members: 1<br />Contact: <a href="mailto:admin@lyntonwebdesign.com">admin@lyntonwebdesign.com</a></p>',
		'type'         => 'normal',
		'directory'    => 's3://joomladownloads/translations/joomla3/cy-GB',
		'vgroup_id'    => '4',
		'is_supported' => '1',
	],
];
