<?php

function czyZalogowany()
{
    if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true && isset($_SESSION['user_id']))
    {
        return true;
    }

    return false;
}
$__zalogowanyUzytkownik = null;
function zalogowanyUzytkownik($pole = null)
{
    global $__zalogowanyUzytkownik;
    $CI = &get_instance();

    if(!czyZalogowany()) return null;

    if($__zalogowanyUzytkownik === null)
    {
        $CI->load->model('Uzytkownicy_model');
        $user = $CI->Uzytkownicy_model->get_uzytkownik($_SESSION['user_id']);
        if(isset($user['id']))
        {
            $__zalogowanyUzytkownik = $user;
        }
    }

    if($pole !== null && isset($__zalogowanyUzytkownik[$pole]))
    {
        return $__zalogowanyUzytkownik[$pole];
    }

    return $__zalogowanyUzytkownik;
}

function czyAdmin()
{
    if(zalogowanyUzytkownik('typ')==='admin')
    {
        return true;
    }

    return false;
}

function czyOpiekun()
{
    if(zalogowanyUzytkownik('typ')==='opiekun')
    {
        return true;
    }

    return false;
}

function czyRodzic()
{
    if(zalogowanyUzytkownik('typ')==='rodzic')
    {
        return true;
    }

    return false;
}

