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

    req.open("POST", "upload_action.php" , true);
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    req.send(para);
}