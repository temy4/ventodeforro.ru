<?php
/*
[
	{ "date": "1365638400000", "type": "meeting", "title": "Project A meeting", "description": "Lorem Ipsum dolor set", "url": "http://www.event1.com/" },
	{ "date": "1337677200000", "type": "demo", "title": "Project B demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event2.com/" },
	{ "date": "1337686200000", "type": "meeting", "title": "Test Project Brainstorming", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },
	{ "date": "1337696100000", "type": "test", "title": "A very very long name for a f*cking project events", "description": "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.", "url": "http://www.event5.com/" },
	{ "date": "1338890400000", "type": "meeting", "title": "Project B meeting", "description": "Lorem Ipsum dolor set", "url": "http://www.event5.com/" },
	{ "date": "1339927200000", "type": "demo", "title": "Project A demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event6.com/" },
	{ "date": "1334656800000", "type": "meeting", "title": "Test Project C Brainstorming", "description": "Lorem Ipsum dolor set", "url": "http://www.event7.com/" }
]
*/
	$events = array(
		array('date' => '2013-11-15 00:00:00', 'title' => "Festival Rootstock (Cabrueva Сан-Паулу, Бразилия)", 'description' => 'Фестиваль пройдет 15-17 ноября', 'url' => 'http://www.festivalrootstock.com'),
		array('date' => '2013-11-22 00:00:00', 'title' => "Кёльн, Германия", 'description' => 'Фестиваль пройдет 22-24 ноября', 'url' => 'http://www.forrodecolonia.com/festival/index.html'),
		array('date' => '2013-12-12 00:00:00', 'title' => "Forró de Lampião Festival (Лиссабон, Португалия)", 'description' => 'Фестиваль пройдет 12-15 декабря', 'url' => 'http://www.projectoforrodelampiao.org')
 	
	);
	echo json_encode($events);
?>