//domain to script ID mapping
var typekit={
//kit #1
	"default":"ccg1fyc",
//kit #2
	"dz":"ysp2kfh",
	"ao":"ysp2kfh",
	"ar":"ysp2kfh",
	"am":"ysp2kfh",
	"au":"ysp2kfh",
	"at":"ysp2kfh",
	"az":"ysp2kfh",
	"bh":"ysp2kfh",
	"bd":"ysp2kfh",
//kit #3
	"be":"doz6ieu",
	"bo":"doz6ieu",
	"ba":"doz6ieu",
	"br":"doz6ieu",
	"bn":"doz6ieu",
	"bg":"doz6ieu",
	"cm":"doz6ieu",
	"ca":"doz6ieu",
//kit #4
	"ca":"fsa6sjb",
	"cl":"fsa6sjb",
	"cn":"fsa6sjb",
	"co":"fsa6sjb",
	"cg":"fsa6sjb",
	"cd":"fsa6sjb",
	"cr":"fsa6sjb",
	"hr":"fsa6sjb",
//kit #5
	"cy":"frb7tsp",
	"cz":"frb7tsp",
	"dk":"frb7tsp",
	"do":"frb7tsp",
	"ec":"frb7tsp",
	"eg":"frb7tsp",
	"sv":"frb7tsp",
	"ee":"frb7tsp",
	"eu":"frb7tsp",
//kit #6
	"fi":"shu6esf",
	"fr":"shu6esf",
	"biz":"shu6esf",
	"com":"shu6esf",
	"info":"shu6esf",
	"org":"shu6esf",
	"ge":"shu6esf",
	"de":"shu6esf",
	"gh":"shu6esf",
//kit #7
	"gr":"fww8twa",
	"gt":"fww8twa",
	"ht":"fww8twa",
	"hn":"fww8twa",
	"hk":"fww8twa",
	"hu":"fww8twa",
	"is":"fww8twa",
	"in":"fww8twa",
//kit #8
	"id":"vhp3lkz",
	"ie":"vhp3lkz",
	"il":"vhp3lkz",
	"it":"vhp3lkz",
	"jm":"vhp3lkz",
	"jp":"vhp3lkz",
	"jo":"vhp3lkz",
	"kz":"vhp3lkz",
	"ke":"vhp3lkz",
//kit #9
	"kr":"jax1kye",
	"kw":"jax1kye",
	"lv":"jax1kye",
	"lt":"jax1kye",
	"lu":"jax1kye",
	"mw":"jax1kye",
	"my":"jax1kye",
	"mt":"jax1kye",
//kit #10
	"mx":"odr0kqj",
	"md":"odr0kqj",
	"me":"odr0kqj",
	"nl":"odr0kqj",
	"nz":"odr0kqj",
	"ni":"odr0kqj",
	"ng":"odr0kqj",
	"no":"odr0kqj",
	"om":"odr0kqj",
//kit #11
	"pk":"lox4yeo",
	"pa":"lox4yeo",
	"py":"lox4yeo",
	"pe":"lox4yeo",
	"ph":"lox4yeo",
	"pl":"lox4yeo",
	"pr":"lox4yeo",
	"qa":"lox4yeo",
//kit #12
	"ro":"uwe1cvk",
	"ru":"uwe1cvk",
	"rw":"uwe1cvk",
	"sa":"uwe1cvk",
	"sg":"uwe1cvk",
	"sk":"uwe1cvk",
	"si":"uwe1cvk",
	"za":"uwe1cvk",
//kit #13
	"es":"luc0ezw",
	"asia":"luc0ezw",
	"mobi":"luc0ezw",
	"travel":"luc0ezw",
	"se":"luc0ezw",
	"ch":"luc0ezw",
	"tw":"luc0ezw",
	"tz":"luc0ezw",
	"th":"luc0ezw",
//kit #14
	"tt":"ckp4vro",
	"tn":"ckp4vro",
	"tr":"ckp4vro",
	"tm":"ckp4vro",
	"ug":"ckp4vro",
	"ua":"ckp4vro",
	"ae":"ckp4vro",
	"uk":"ckp4vro",
//kit #15	
	"us":"htq6hdm",
	"uy":"htq6hdm",
	"uz":"htq6hdm",
	"ve":"htq6hdm",
	"vn":"htq6hdm",
}

function getDomainName(hostName){
	console.log(hostName);
	console.log(hostName.substring(hostName.lastIndexOf(".", hostName.lastIndexOf(".")) + 1));
    return hostName.substring(hostName.lastIndexOf(".", hostName.lastIndexOf(".")) + 1);
}

var domainName=getDomainName(window.location.host);
console.log(domainName);
var kitId=typekit[domainName];
if(kitId===undefined) kitId=typekit['default'];

var script = document.createElement('script');
script.src = "https://use.typekit.net/"+kitId+".js";
script.onload = function () {
    try{Typekit.load({ async: true });}catch(e){}
};
//insert to HEAD
document.head.insertBefore(script,document.head.firstChild);

//END