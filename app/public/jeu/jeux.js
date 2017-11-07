/**
 * Created by Fraxy on 10/3/2014.
 */
var Player1 = {
    hp: 100,
    id: 0,
    pseudo : 'Player_IA1',
    x : 100,
    y : 100,
    statut : 'spawn',
    bois : 0,
    fer : 0,
    pierre : 0,
    or : 0,
    color : 'pink'
    };

var Player2 = {
    hp: 100,
    id: 1,
    pseudo : 'Player_IA2',
    x : 650,
    y : 100,
    statut : 'spawn',
    bois : 0,
    fer : 0,
    pierre : 0,
    or : 0,
    color : 'yellow'
};


var Player3 = {
    hp: 100,
    id: 2,
    pseudo : 'Player_IA3',
    x : 100,
    y : 310,
    statut : 'spawn',
    bois : 0,
    fer : 0,
    pierre : 0,
    or : 0,
    color : 'blue'
};


var Player4 = {
    hp: 100,
    id: 3,
    pseudo : 'Player_IA4',
    x : 650,
    y : 310,
    statut : 'spawn',
    bois : 0,
    fer : 0,
    pierre : 0,
    or : 0,
    color : 'red'
};

var fight1 = region_define(300,300,  '','',     null);
var fight2 = region_define(600,300,  '','',     null);
var A1 = region_define(84,116,  'Forgefier','bois',     null);
var A2 = region_define(300,108, 'Picdur','pierre',      null);
var A3 = region_define(543,120, 'Richepuy','bois',      null);
var A4 = region_define(759,131, 'Fondroche','pierre',   null);
var A5 = region_define(932,70,  'Port-sur-suif','or',   null);
var A6 = region_define(1292,72, 'Eaumorte','bois',      null);
var B1 = region_define(50,352,  'Rocheneuve','or',      null);
var B2 = region_define(252,292, 'Castelfer','fer',      null);
var B3 = region_define(502,304, 'Mortebutte','or',      null);
var B4 = region_define(712,368, 'Castelnoir','fer',     null);
var B5 = region_define(1020,342,'Rudeterre','bois',     null);
var B6 = region_define(1384,248,'Bourgours','pierre',   null);
var C1 = region_define(136,576, 'Rocheroyale','fer',    null);
var C2 = region_define(326,540, 'Moulincalme','pierre', null);
var C3 = region_define(532,514, 'Ocrechamps','pierre',  null);
var C4 = region_define(768,642, 'Forgeroyal','bois',   null);
var C5 = region_define(1000,624,'Rivesainte','or',     null);
var C6 = region_define(1360,638,'Chateauecume','pierre',null);

var dro = [ A1, A2, A3, A4, A5, A6, B1, B2, B3, B4, B5, B6, C1, C2, C3, C4, C5,C6];
var players = [Player1, Player2, Player3, Player4];

random_distrib_ressource();
chrono();
jeux();


