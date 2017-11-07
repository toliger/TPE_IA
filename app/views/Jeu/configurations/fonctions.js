function dump(obj) {
    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }

    alert(out);

    // or, if you wanted to avoid alerts...

    var pre = document.createElement('pre');
    pre.innerHTML = out;
    document.body.appendChild(pre)
}
function createInstance()
{
    var req = null;
    if (window.XMLHttpRequest)
    {
        req = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e)
        {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e)
            {
                alert("XHR not created");
            }
        }
    }
    return req;
}

function queryphp(para)
{
    var req =  createInstance();

    req.onreadystatechange = function()
    {
        if(req.readyState == 4)
        {
            if(req.status == 200)
            {
            }
            else
            {
            }
        }
    };

    req.open("POST", "../configurations/ajax-recep.php" , true);
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    req.send(para);
}

function region_define(x, y, name, ressources, propriétaire)
{
      return region = {
    x:     x - 30,
    y:   y - 90,
    name:  name,
    ressources: ressources,
    propriétaire: propriétaire
};
}

function coordup(x, y, player)
{
    var data = "fonction=update_coords" + "&x=" + x +  "&y=" + y + "&player=" + player ;
    queryphp(data);

    //log('Les coordonnées ont été mise à jour, nouvelles coordonées x= '+ x + ' et y= ' + y + " pour le joueur " + player);
}

function log(message)
{
    var log = document.createElement('div');
    log.setAttribute("class","logs");
    log.style.backgroundColor = couleur_log;
    log.innerHTML = message;
    document.getElementById('logs').insertBefore(log,document.getElementById('log'));
    document.getElementById('logs').scrollTop = document.getElementById('logs').scrollHeight;
}

function chrono()
{
    if (statut_chrono == 'reset')
    {
        centi = 0 ;// initialise les dixtièmes
        secon = 0 ;//initialise les secondes
        statut_chrono = true;
    }
    if (statut_chrono == true)
    {
        centi++;
        if (centi > 9)
        {
            centi = 0;
            secon++
        }

        if (secon < 60)
        {
            document.getElementById('chrono_dix').innerHTML =  centi;
            document.getElementById('chrono_sec').innerHTML = secon;
            setTimeout('chrono()', 100);
        }

        if (secon == 60)
        {
            document.getElementById('chrono_mn_sec_dix').innerHTML =  'Plus d\'une minute';
        }
    }
}

function reset_chrono()
{
    statut_chrono = 'reset' ;
}

function stop_chrono()
{
    statut_chrono = false;
}


function pre_move(player, region)
{
    coeff = {
        x: region.x - player.x,
        y: region.y - player.y
    };

    statut = {
        x: 'on',
        y: 'on'
    };
    move(player, region, coeff, statut);
}
function  move(player, region, coeff, statut)
{
    if (coeff.x > 0)// traitement de l'abscisse
    {
        if (player.x <= region.x)
        {
            player.x = player.x + 10;
            document.getElementById(player.pseudo).style.marginLeft = player.x + 'px'; //execution des coordonnées x

        }
        else
        {
            statut.x= 'off';
        }
    }

    if (coeff.x < 0)
    {
        if (player.x >= region.x)
        {
            player.x = player.x - 10;
            document.getElementById(player.pseudo).style.marginLeft = player.x + 'px'; //execution des coordonnées x
        }
        else
        {
            statut.x= 'off';
        }
    }


    if (coeff.y > 0)// traitement de l'abscisse
    {
        if (player.y <= region.y)
        {
            player.y = player.y + 10;
            document.getElementById(player.pseudo).style.marginTop = player.y + 'px'; //execution des coordonnées x

        }
        else
        {
            statut.y = 'off';
        }
    }

    if (coeff.y < 0)
    {
        if (player.y >= region.y)
        {
            player.y = player.y - 10;
            document.getElementById(player.pseudo).style.marginTop = player.y + 'px'; //execution des coordonnées x
        }
        else
        {
            statut.y= 'off';
        }
    }
    if (statut.x != 'off' || statut.y != 'off')
    {
        setTimeout(function() {move(player, region, coeff, statut)},40);
    }
}

function f_couleur_log()
{
    couleur = random(1,5);
    switch (couleur)
    {
        default:
            couleur_log = 'green';
            break;
        case 1: // Passer son tour
            if (couleur_log == 'yellow')
            {
                f_couleur_log();
            }
            else
            {
                couleur_log = 'darkorange';
            }
            break;
        case 2: // Passer son tour
            if (couleur_log == 'red')
            {
                f_couleur_log();
            }
            else
            {
                couleur_log = 'red';
            }
            break;
        case 3: // Passer son tour
            if (couleur_log == 'green')
            {
                f_couleur_log();
            }
            else
            {
                couleur_log = 'green';
            }
            break;
        case 4: // Passer son tour
            if (couleur_log == 'blue')
            {
                f_couleur_log();
            }
            else
            {
                couleur_log = 'blue';
            }
            break;
        case 5: // Passer son tour
            if (couleur_log == 'orange')
            {
                f_couleur_log();
            }
            else
            {
                couleur_log = 'orange';
            }
            break;
    }

}

function give_ressources_traitement(player, ressource)
{
    if(ressource == "bois")
    {
        player.bois = player.bois + 10;
        document.getElementById(player.pseudo + '_bois').innerHTML = player.bois;
    }
    else if(ressource == "fer")
    {
        player.fer = player.fer + 10;
        document.getElementById(player.pseudo + '_fer').innerHTML = player.fer;
    }
    else if(ressource == "pierre")
    {
        player.pierre = player.pierre + 10;
        document.getElementById(player.pseudo + '_pierre').innerHTML = player.pierre;
    }
    else if(ressource == "or")
    {
        player.or = player.or + 10;
        document.getElementById(player.pseudo + '_or').innerHTML = player.or;
    }
}

function give_ressources()
{
    for(var i =0; i < dro.length; i++){
        if(dro[i].propriétaire == null)
        {
            console.log(dro[i].name + 'n\'appartient à personne');
        }
        else
        {

            ressource_focus = dro[i].ressources;
            player = players[dro[i].propriétaire];
            give_ressources_traitement(player, ressource_focus);
            console.log(dro[i].name + ' appartenant à ' + players[dro[i].propriétaire].pseudo + ' donne 10 ' + dro[i].ressources);

        }
    }
}



const switch_provinces_color_opacity_c = 0.20;
function switch_region_color(statut_s,region, player, switch_provinces_color_opacity)
{
        if(switch_provinces_color_opacity == undefined){switch_provinces_color_opacity = switch_provinces_color_opacity_c;}

        if (statut_s == 1) {
            document.getElementById(region.name).style.opacity = switch_provinces_color_opacity;
            switch_provinces_color_opacity = switch_provinces_color_opacity - 2 / 100;
            switch_provinces_color_opacity = Math.round(switch_provinces_color_opacity * 100) / 100;

            if (switch_provinces_color_opacity == 0) {
                statut_s++;
            }
        }

        if (statut_s == 2) {
            document.getElementById(region.name).style.color = player.color;
            statut_s++;
        }

        if (statut_s == 3) {
            document.getElementById(region.name).style.opacity = switch_provinces_color_opacity;
            switch_provinces_color_opacity = switch_provinces_color_opacity + 0.02;
            switch_provinces_color_opacity = Math.round(switch_provinces_color_opacity * 100) / 100;
            if (switch_provinces_color_opacity == 0.2) {
                statut_s = 4;
            }
        }

        if (statut_s == 1 || statut_s == 2 || statut_s == 3) {
            setTimeout(function() {switch_region_color(statut_s, region, player, switch_provinces_color_opacity)}, 100);
        }
}

function tri_need_ressources(player)
{
    var ressources = [
    {name: 'bois', valeur: player.bois},
    {name: 'fer', valeur: player.fer},
    {name: 'pierre', valeur: player.pierre},
    {name: 'or', valeur: player.or}
];

    var ranking = helper.arr.multisort(ressources, ['valeur', 'name'], ['DESC','ASC']);
    ranking = ranking[ranking.length-1];

    return ranking.name;
}

function random_distrib_ressource()
{
    for(var i = 0; i < 4; i++)
    {
        players[i].bois = random(1,5)*10;
        players[i].fer = random(1,5)*10;
        players[i].pierre = random(1,5)*10;
        players[i].or = random(1,5)*10;

        document.getElementById(players[i].pseudo + '_bois').innerHTML = players[i].bois;
        document.getElementById(players[i].pseudo + '_fer').innerHTML = players[i].fer;
        document.getElementById(players[i].pseudo + '_pierre').innerHTML = players[i].pierre;
        document.getElementById(players[i].pseudo + '_or').innerHTML = players[i].or;
    }
}

function kill(player)
{

    document.getElementById(player.pseudo).remove();
    log('Le joueur ' + player.pseudo + ' est mort.')
}


function fight(player, ville)
{

    attaquant = player;
    defenseur = players[ville.propriétaire];
    if(attaquant.hp > 0 && defenseur.hp > 0)
    {
        pre_move(attaquant , fight1);
        pre_move(defenseur , fight2);

        attaquant.hp = attaquant.hp - 10;
        defenseur.hp = defenseur.hp - 10;
        if(attaquant.hp <= 0)
        {
            kill(attaquant);
        }
        else
        {
            document.getElementById(attaquant.pseudo + '_hp').style.width =- ''+ attaquant.hp +'%';
        }
        if(defenseur.hp <= 0)
        {
            kill(defenseur);
        }
        else
        {
            document.getElementById(defenseur.pseudo + '_hp').style.width =- ''+ defenseur.hp +'%';
        }
    }

}

function action_a_faire(player)
{
    ressource_focus = tri_need_ressources(player);

    var ville_focus = [];

        for(var i =0; i < dro.length; i++){
            if(dro[i].ressources == ressource_focus && dro[i].propriétaire == null)
            {
                ville_focus.push(dro[i]);
            }
        }
    if (ville_focus.length != 0)
    {
        focus = random(0,ville_focus.length);
        return ville_focus[focus];

    }
    else
    {
        for(i = 0; i < dro.length; i++){
            if(dro[i].propriétaire == null)
            {
                ville_focus.push(dro[i]);
            }
        }
        if (ville_focus.length != 0)
        {
            focus = random(0,ville_focus.length);
            return ville_focus[focus];
        }
        else
        {
            for(i = 0; i < dro.length; i++){
                if(dro[i].ressources == ressource_focus)
                {
                    ville_focus.push(dro[i]);
                }
            }
            if (ville_focus.length != 0)
            {
                focus = random(0,ville_focus.length);
                fight(player, ville_focus[focus]);
                return ville_focus[focus];
            }
            else
            {
                for(i = 0; i < dro.length; i++){
                    if(dro[i].propriétaire != player.pseudo)
                    {
                        ville_focus.push(dro[i]);
                    }
                }
                focus = random(0,ville_focus.length);
                return ville_focus[focus];
            }
        }
    }


}


function action(player)
{
    region = action_a_faire(player);

    if(region) {
        region.propriétaire = player.id;
        pre_move(player, region);
        switch_region_color(1, region, player);
        log(player.pseudo + '  a conquéri ' + region.name)
    }
}




function jeux(mode)
        {

            f_couleur_log();
            document.getElementById('nb_tours').innerHTML = nb_tour + " / " + nb_tours_max;
            if(players[0].hp > 0){setTimeout('action(players[0])', 1000);}
            if(players[1].hp > 0){setTimeout('action(players[1])', 4000);}
            if(players[2].hp > 0){setTimeout('action(players[2])', 7000);}
            if(players[3].hp > 0){setTimeout('action(players[3])', 10000);}
            setTimeout('log(\'Tour \' + nb_tour + \' finit\')', 11000);
            setTimeout('give_ressources()', 11000);

            nb_tour++;
            if(nb_tour <= nb_tours_max){setTimeout('jeux()', 11000);reset_chrono();}else{log('Partie terminer !!');stop_chrono();}

        }
