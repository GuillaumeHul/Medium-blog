document.getElementById('listuser').onchange = function ()
{
    if (document.getElementById('listuser').value == 0)
    {
        var url = "?module=commentaire&action=admin";
    }
    else
    {
        var url = "?module=commentaire&action=admin&user=" + document.getElementById('listuser').value;
    }
    //alert(url);

    window.location = url;
}
