var user = document.getElementById('user');

document.getElementById('opt_user').onclick = function()
{
    if(!document.getElementById('user').classList.contains("hidden"))
    {
        user.classList.add('hidden');
    }
    else
    {
        user.classList.remove('hidden');
    }
}
