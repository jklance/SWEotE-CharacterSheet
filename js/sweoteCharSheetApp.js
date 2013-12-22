var thisApp = angular.module('sweoteCharSheetApp', []);

thisApp.controller('characterData', function($scope, $http) {
    $scope.titleBarText = "Character Sheet";
    $scope.characterName = null;
    
    $scope.character = new SWEotECharacter();

    $scope.loadCharacter = function() {
        if ($scope.characterName) {
            $scope.retrieveCharacter($scope.characterName);
        }
    };

    $scope.retrieveCharacter = function(charName) {
        $http.get('api/character.php?name=' + charName)
            .success(
                function(response, status, headers, config) {
                    $scope.character.setCharacterComponents(response);
                }
            )
            .error(
                function(data, status, headers, config) {
                    // TODO: handle failures
                }
            );
    };


});
