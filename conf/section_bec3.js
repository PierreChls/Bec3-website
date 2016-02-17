//------------------------------------//
//                                    //
//  Data for section : BeC... what ?  //
//                                    //
//------------------------------------//

var json =
' { ' +
' 	"header" : ' +
' 	{ ' +
'		"title"       : "BeC... what ?", ' +
'		"description" : "BeC3 est une plateforme pour le développement rapide d&#039;application pour l&#039;Internet des Objets développée au sein de l&#039;université, plus particulièrement à destination des objets communicants. Elle est opérationnelle et permet de faire interagir des objets virtuels, quelques fonctionnalités sur des ordinateurs et des objets spécialisés." ' +
' 	}, ' +

'	"container" : ' +
'	[ ' + 
'		{'  + 
'			"title" : "What can I do with BeC3 ?", ' + 
'			"content" : "Build your own application without any programing skill, just by linking your devices with one another and selecting some pre-written piece of software (behaviours) for each one of them. You can create and re-create dynamically brand new interactions between your things throughout the Internet." ' + 
' 		},' + 
'		{'  + 
'			"title" : "How my Things communicate ?", ' + 
'			"content" : "Your Objects must talk to each other throught networks. To recognize them, you must use a Jabber account, as you use to talk to your friends. Each objet discovers other friendly objects online, and talks to them just like you, when you are chatting on the Internet. Just configure your device with your Jabber account, as the software asks." ' + 
' 		},' + 
'		{'  + 
'			"title" : "What do I need ?", ' + 
'			"content" : "First, your objects must understand be compatible with our system. We provide a solution for some platform, and people can adapt and create a port on new devices (see Contribute section if you want to involve in our work)" ' + 
' 		}'  + 
'	]' + 
'}';




//------------------------------------//
//         PARSAGE AND INSERT         //
//------------------------------------//

var data = JSON.parse(json);
var nbArticle = 3;

//Header
$("section#bec-what div.container div.row div").append(
	'<h2>' + data.header.title + '</h2>' +
    '<p class="lead">' + data.header.description + '</p>'
);


//Container
for(i = 0; i < nbArticle; i++)
{
	$("section#main-info div.container div.row").append(
		'<div class="col-sm-4">' + 
			'<hr class="line">' +
			'<h3>' +  data.container[i].title   + '</h3>' + 
			'<p>'  +  data.container[i].content + '</p>' +
		'</div>'
	);
}