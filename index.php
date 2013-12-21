<!doctype html>
<html ng-app="sweoteCharSheetApp">
  <head>
    <title>{{titleBarText}}</title>
    <meta charset="utf-8">
    <meta name="description" content="Character Sheet and Roleplaying Companion for Star Wars Edge of the Empire">
    <meta name="author" content="Jer Lance <me@jerlance.com>">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js"></script>
    <script src="js/sweoteCharSheetApp.js"></script>
    <script src="js/sweoteCharacter.js"></script>
    <script src="js/filters.js"></script>
    <link rel="stylesheet" type="text/css" href="css/default.css" />
  </head>
  <body>
    <div id="characterSheet" ng-conroller="characterData">
        <div id="generalInfo">
            <div id="characterName">{{characterName}}</div>
            <div id="playerName">{{playerName}}</div>
            <div id="characterRace">{{characterRace}}{{characterName}}
        </div>
    </div>
  </body>
</html>
