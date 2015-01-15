<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <title>Commande</title>
        <style>
            a:hover {
                text-decoration: underline !important;
            }
            td.promocell p {
                color:#e1d8c1;
                font-size:16px;
                line-height:26px;
                font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
                margin-top:0;
                margin-bottom:0;
                padding-top:0;
                padding-bottom:14px;
                font-weight:normal;
            }
            td.contentblock h4 {
                color:#444444 !important;
                font-size:16px;
                line-height:24px;
                font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
                margin-top:0;
                margin-bottom:10px;
                padding-top:0;
                padding-bottom:0;
                font-weight:normal;
            }
            td.contentblock h4 a {
                color:#444444;
                text-decoration:none;
            }
            td.contentblock p {
                color:#888888;
                font-size:13px;
                line-height:19px;
                font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;
                margin-top:0;
                margin-bottom:12px;
                padding-top:0;
                padding-bottom:0;
                font-weight:normal;
            }
            td.contentblock p a {
                color:#3ca7dd;
                text-decoration:none;
            }
            @media only screen and (max-device-width: 480px) {
                div[class="header"] {
                    font-size: 16px !important;
                }
                table[class="table"], td[class="cell"] {
                    width: 300px !important;
                }
                table[class="promotable"], td[class="promocell"] {
                    width: 325px !important;
                }
                td[class="footershow"] {
                    width: 300px !important;
                }
                table[class="hide"], img[class="hide"], td[class="hide"] {
                    display: none !important;
                }
                img[class="divider"] {
                    height: 1px !important;
                }
                td[class="logocell"] {
                    padding-top: 15px !important;
                    padding-left: 15px !important;
                    width: 300px !important;
                }
                img[id="screenshot"] {
                    width: 325px !important;
                    height: 127px !important;
                }
                img[class="galleryimage"] {
                    width: 53px !important;
                    height: 53px !important;
                }
                p[class="reminder"] {
                    font-size: 11px !important;
                }
                h4[class="secondary"] {
                    line-height: 22px !important;
                    margin-bottom: 15px !important;
                    font-size: 18px !important;
                }
            }
        </style>
    </head>
    <body bgcolor="#e4e4e4" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" style="-webkit-font-smoothing: antialiased;width:100% !important;background:#e4e4e4;-webkit-text-size-adjust:none;">

        <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#e4e4e4">
            <tr>
                <td bgcolor="#e4e4e4" width="100%">

                    <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="table">
                        <tr>
                            <td width="600" class="cell">

                                <img border="0" src="{{ $message->embed(URL::asset('images/email/header.jpg')) }}" label="Bandeau image" editable="true" width="600" height="253" id="screenshot">

                                <table width="600" cellpadding="25" cellspacing="0" border="0" class="promotable">
                                    <tr>
                                        <td bgcolor="#456265" width="600" class="promocell">

                                            <multiline label="Commande"><p style="color:#e1d8c1;font-size:16px;line-height:26px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:14px;font-weight:normal;">Commande</p></multiline>

                                        </td>
                                    </tr>
                                </table>

                                <img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="1" height="15" class="divider"><br>

                                <layout label="New feature">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td bgcolor="#85bdad" nowrap><img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="5" height="1"></td>
                                            <td width="100%" bgcolor="#ffffff">

                                                <table width="100%" cellpadding="20" cellspacing="0" border="0">
                                                    <tr>
                                                        <td bgcolor="#ffffff" class="contentblock">

                                                            <h4 class="secondary"><strong><singleline label="Coordonnees">Coordonnées</singleline></strong></h4>
                                                            <multiline label="Description">
                                                                <p>{{ $civilite }}. {{ $nom }} {{ $prenom }} </p>
                                                                <p>{{ $email }}</p>
                                                                <p>{{ $adresse }}, {{ $cp }} {{ $ville }}</p>
                                                                <p>{{ $pays }}</p>
                                                            </multiline>
                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                    </table>
                                    <img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="1" height="15" class="divider"><br>
                                </layout>
                                <layout label="Article, tip or resource">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td bgcolor="#ef3101" nowrap><img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="5" height="1"></td>
                                            <td width="100%" bgcolor="#ffffff">

                                                <table width="100%" cellpadding="20" cellspacing="0" border="0">
                                                    <tr>
                                                        <td bgcolor="#ffffff" class="contentblock">

                                                            <h4 class="secondary"><strong><singleline label="Title">Vins</singleline></strong></h4>
                                                            <multiline label="Description">
                                                                @foreach($vins as $vin)
                                                                    <p>{{ $vin['qt'] }} {{ $vin['libelle'] }} {{ $vin['specificite'] }} {{ $vin['prix'] }}</p>
                                                                @endforeach
                                                                <p><strong>Total {{ number_format($total, 2, '.', '') }} €</strong></p>
                                                            </multiline>

                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                    </table>
                                    <img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="1" height="15" class="divider"><br>
                                </layout>
                                @if (!empty($text))
                                <layout label="Gallery highlights">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td bgcolor="#832701" nowrap><img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="5" height="1"></td>
                                            <td width="100%" bgcolor="#ffffff">

                                                <table width="100%" cellpadding="20" cellspacing="0" border="0">
                                                    <tr>
                                                        <td bgcolor="#ffffff" class="contentblock">

                                                            <h4 class="secondary"><strong><singleline label="Message title">Message</singleline></strong></h4>
                                                            <multiline label="message"><p>{{ $text }}</p></multiline>

                                                        </td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>
                                    </table>
                                    <img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="1" height="15" class="divider"><br>
                                </layout>
                                @endif

                            </td>
                        </tr>
                    </table>

                    <img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="1" height="25" class="divider"><br>

                    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f2f2f2">
                        <tr>
                            <td>

                                <img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="1" height="30"><br>

                                <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="table">
                                    <tr>
                                        <td width="600" nowrap bgcolor="#f2f2f2" class="cell">

                                            <table width="600" cellpadding="0" cellspacing="0" border="0" class="table">
                                                <tr>
                                                    <td width="380" valign="top" class="footershow">

                                                        <img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="1" height="8"><br>

                                                        <p style="color:#a6a6a6;font-size:12px;font-family:Helvetica,Arial,sans-serif;margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:0;line-height:18px;" class="reminder">Vous recevez cet email car vous avez été contacté par un client dans le but de passé une commande par le biais de votre site internet.</p>
                                                        <p style="color:#c9c9c9;font-size:12px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;"><preferences style="color:#3ca7dd;text-decoration:none;"><strong><a href="http://www.caveauquinard.fr/" style="color:#a6a6a6;text-decoration:underline;">caveauquinard.fr</a></strong></preferences></p>

                                                    </td>
                                                    <td align="right" width="220" style="color:#a6a6a6;font-size:12px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;text-shadow: 0 1px 0 #ffffff;" valign="top" class="hide">

                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                                <td><a href="http://www.facebook.com/pages/Caveau-Quinard/262742030464209"><img border="0" src="{{ $message->embed(URL::asset('images/email/facebook.gif')) }}" width="32" height="32" alt="Rendez-nous visite sur Facebook"></a></td>
                                                            </tr>
                                                        </table>

                                                        <img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="1" height="10"><br><p style="color:#b3b3b3;font-size:11px;line-height:15px;font-family:Helvetica,Arial,sans-serif;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-weight:bold;">Caveau Quinard</p><p style="color:#b3b3b3;font-size:11px;line-height:15px;font-family:Helvetica,Arial,sans-serif;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-weight:normal;">201 route du Lit au roi, 01300 Massignieu de Rives</p></td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                </table>

                                <img border="0" src="{{ $message->embed(URL::asset('images/email/spacer.gif')) }}" width="1" height="25"><br>

                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>

    </body>
</html>
