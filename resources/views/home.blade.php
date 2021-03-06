@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SchoolBook - Profil</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/style_profile.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-4">
                <div class="colonne">
                    <div class="avatarnom">
                        <div class="avatar"></div>
                        <div class="parentsname">
                            D'angelo Nathan
                        </div>
                        <a href="#"><img src="../images/picto_edit.svg" style="float: right;width: 4vh;"></a>
                    </div>

                    <span class="elementlist">Métier : Développeur Web </span><br>
                    <span class="elementlist">Situation : Célibataire </span><br>
                    <span class="elementlist">Téléphone : Inconnu </span><br>
                    <span class="elementlist">Email : nathan.dan@hotmail.fr </span><br>
                    <span class="elementlist">Adresse : 8 rue asile fournas </span><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="colonne">
                    <div class="categorie">Communautés</div><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="colonne">
                    <div class="categorie">Enfants</div><br>
                    <div class="enfant">
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="avatarenfant"></div>
                                </td>
                                <td>
                                    <span class="kidsname">Jeanne</span><br>
                                    <span class="kidsetablissement">Collège Honoré d'Urfé</span>
                                </td>
                                <td>
                                    <span class="kidsage">12 ans</span><br><span class="kidslevel">6ème</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="enfant">
                           <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="avatarenfant"></div>
                                </td>
                                <td>
                                    <span class="kidsname">Marc</span><br>
                                    <span class="kidsetablissement">Ecole primaire de la cotonne</span>
                                </td>
                                <td>
                                    <span class="kidsage">9 ans</span><br><span class="kidslevel">CM1</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

@endsection
