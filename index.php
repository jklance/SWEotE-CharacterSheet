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
    <link rel="stylesheet" type="text/css" href="css/default.css" />
  </head>
  <body>
    <div id="characterSheet" ng-controller="characterData">
        <div id="sheetControls">
            <input type="text" ng-model="characterName" placeholder="Character Name" />
            <button type="button" ng-click="loadCharacter()">Load</button>
        </div>
        <div class="clearFix"></div>

        <div id="generalInfo" class="sectionBlock">
            <div id="characterName" class="dataField">
                <div class="dataLabel">Name</div> 
                <div class="dataMember">{{character.getName()}}</div>
            </div>
            <div id="playerName" class="dataField">
                <div class="dataLabel">Player</div> 
                <div class="dataMember">{{character.getPlayer()}}</div>
            </div>
            <div id="characterSpecies" class="dataField">
                <div class="dataLabel">Species</div> 
                <div class="dataMember">{{character.getSpecies()}}</div>
            </div>
            <div id="characterCareers" class="dataField">
                <div class="dataLabel">Careers</div>
                <div class="dataMember">
                    <span ng-repeat="career in character.getCareers()">
                        {{career.class}} ({{career.specialization}}) &nbsp;&nbsp;
                    </span> 
                </div>
            </div>
        </div>
        <div class="clearFix"></div>

        <div id="currentStatus" class="sectionBlock">
            <div class="sectionLabel">Status</div>
            <div id="characterSoak" class="dataBlock four">
                <div class="dataBlockLabel">Soak Value</div> 
                <div class="dataBlockMember">{{character.getSoak()}}</div>
            </div>
            <div id="characterWounds" class="dataBlock four">
                <div class="dataBlockLabel">Wounds</div>
                <div class="dataBlockMember">
                    <div id="characterWoundThreshold" class="subdataBlock">
                        <div class="subDataMember">{{character.getWoundThreshold()}}</div>
                        <div class="subDataLabel left">Threshold</div>
                    </div>
                    <div id="characterWoundCurrent" class="subdataBlock">
                        <div class="subDataMember">{{character.getWoundCurrent()}}</div>
                        <div class="subDataLabel right">Current</div>
                    </div>
                </div>
            </div>
            <div id="characterStrain" class="dataBlock four">
                <div class="dataBlockLabel">Strain</div> 
                <div class="dataBlockMember">
                    <div id="characterStrainThreshold" class="subdataBlock">
                        <div class="subDataMember">{{character.getStrainThreshold()}}</div>
                        <div class="subDataLabel left">Threshold</div>
                    </div>
                    <div id="characterStrainCurrent" class="subdataBlock">
                        <div class="subDataMember">{{character.getStrainCurrent()}}</div>
                        <div class="subDataLabel right">Current</div>
                    </div>
                </div>
            </div>
            <div id="characterDefense" class="dataBlock four">
                <div class="dataBlockLabel">Defense</div> 
                <div class="dataBlockMember">
                    <div id="characterDefenseRanged" class="subdataBlock">
                        <div class="subDataMember">{{character.getDefenseRanged()}}</div>
                        <div class="subDataLabel left">Ranged</div>
                    </div>
                    <div id="characterDefenseMelee" class="subdataBlock">
                        <div class="subDataMember">{{character.getDefenseMelee()}}</div>
                        <div class="subDataLabel right">Melee</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearFix"></div>

        <div id="characterStats" class="sectionBlock">
            <div class="sectionLabel">Characteristics</div> 
            <div id="characterBrawn" class="dataBlock six">
                <div class="dataBlockLabel">Brawn</div> 
                <div class="dataBlockMember">{{character.getBrawn()}}</div>
            </div>
            <div id="characterAgility" class="dataBlock six">
                <div class="dataBlockLabel">Agility</div> 
                <div class="dataBlockMember">{{character.getAgility()}}</div>
            </div>
            <div id="characterIntellect" class="dataBlock six">
                <div class="dataBlockLabel">Intellect</div> 
                <div class="dataBlockMember">{{character.getIntellect()}}</div>
            </div>
            <div id="characterCunning" class="dataBlock six">
                <div class="dataBlockLabel">Cunning</div> 
                <div class="dataBlockMember">{{character.getCunning()}}</div>
            </div>
            <div id="characterWillpower" class="dataBlock six">
                <div class="dataBlockLabel">Willpower</div> 
                <div class="dataBlockMember">{{character.getWillpower()}}</div>
            </div>
            <div id="characterPresence" class="dataBlock six">
                <div class="dataBlockLabel">Presence</div> 
                <div class="dataBlockMember">{{character.getPresence()}}</div>
            </div>
        </div>
        <div class="clearFix"></div>

        <div id="background" class="sectionBlock">
            <div class="sectionLabel">Background</div>
            <div id="characterMotivations" class="dataBlock two">
                <div class="dataBlockLabel">Motivations</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Type</th><th>Description</th>
                        </tr>
                        <tr ng-repeat="element in character.getMotivations()">
                            <td>{{element.type}}</td>
                            <td>{{element.description}} </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="characterObligations" class="dataBlock two">
                <div class="dataBlockLabel">Obligations</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Type</th><th>Description</th><th>Size</th>
                        </tr>
                        <tr ng-repeat="element in character.getObligations()">
                            <td>{{element.type}}</td>
                            <td>{{element.description}} </td>
                            <td>{{element.size}}pt </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearFix"></div>

        <div id="characterDescription" class="sectionBlock">
            <div class="sectionLabel">Character Description</div>
            <div id="characterGender" class="dataBlock six">
                <div class="dataBlockLabel">Gender</div> 
                <div class="dataBlockText">{{character.getGender()}}&nbsp;</div>
            </div>
            <div id="characterAge" class="dataBlock six">
                <div class="dataBlockLabel">Age</div> 
                <div class="dataBlockText">{{character.getAge()}}&nbsp;</div>
            </div>
            <div id="characterHsix" class="dataBlock six">
                <div class="dataBlockLabel">Height</div> 
                <div class="dataBlockText">{{character.getHeight()}}&nbsp;</div>
            </div>
            <div id="characterBuild" class="dataBlock six">
                <div class="dataBlockLabel">Build</div> 
                <div class="dataBlockText">{{character.getBuild()}}&nbsp;</div>
            </div>
            <div id="characterHair" class="dataBlock six">
                <div class="dataBlockLabel">Hair</div> 
                <div class="dataBlockText">{{character.getHair()}}&nbsp;</div>
            </div>
            <div id="characterEyes" class="dataBlock six">
                <div class="dataBlockLabel">Eyes</div> 
                <div class="dataBlockText">{{character.getEyes()}}&nbsp;</div>
            </div>
            <div id="characterConcept" class="dataBlock">
                <div class="dataBlockLabel">Concept</div>
                <div class="dataBlockText">{{character.getConcept()}}&nbsp;</div>
            </div>
            <div id="characterFeatures" class="dataBlock">
                <div class="dataBlockLabel">Features</div> 
                <div class="dataBlockText">{{character.getFeatures()}}&nbsp;</div>
            </div>
        </div>
        <div class="clearFix"></div>

        <div id="characterEquipmentLog" class="sectionBlock">
            <div class="sectionLabel">Character Equipment Log</div>
            <div id="characterCredits" class="dataBlock">
                <div class="dataBlockLabel">Credits</div>
                <div class="dataBlockText">{{character.getCharacterCredits()}}</div>
            </div>
            <div id="characterWeapons" class="dataBlock">
                <div class="dataBlockLabel">Weapons</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Name</th><th>Value</th><th>Description</th><th>Range</th><th>Damage</th><th>Critical</th><th>Skill</th><th>Hard Points</th><th>Notes</th>
                        </tr>
                        <tr class="animate-repeat" ng-repeat="piece in character.getCharacterWeapons()">
                            <td>{{piece.name}}</td>
                            <td>{{piece.value}}</td>
                            <td>{{piece.range}} </td>
                            <td>{{piece.damage}} </td>
                            <td>{{piece.critical}} </td>
                            <td>{{piece.skill}} </td>
                            <td>{{piece.hard_points}} </td>
                            <td>{{piece.description}} </td>
                            <td>{{piece.notes}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="characterArmor" class="dataBlock">
                <div class="dataBlockLabel">Armor</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Name</th><th>Value</th><th>Description</th><th>Armor Value</th>
                        </tr>
                        <tr class="animate-repeat" ng-repeat="piece in character.getCharacterArmor()">
                            <td>{{piece.name}}</td>
                            <td>{{piece.value}}</td>
                            <td>{{piece.description}} </td>
                            <td>{{piece.armor_value}} </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="characterMisc" class="dataBlock">
                <div class="dataBlockLabel">Other</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Name</th><th>Value</th><th>Description</th>
                        </tr>
                        <tr class="animate-repeat" ng-repeat="piece in character.getCharacterMisc()">
                            <td>{{piece.name}}</td>
                            <td>{{piece.value}}</td>
                            <td>{{piece.description}} </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearFix"></div>

        <div id="groupEquipmentLog" class="sectionBlock">
            <div class="sectionLabel">Group Equipment Log</div>
            <div id="characterCredits" class="dataBlock">
                <div class="dataBlockLabel">Credits</div>
                <div class="dataBlockText">{{character.getGroupCredits()}}</div>
            </div>
            <div id="characterWeapons" class="dataBlock">
                <div class="dataBlockLabel">Weapons</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Name</th><th>Value</th><th>Description</th><th>Range</th><th>Damage</th><th>Critical</th><th>Skill</th><th>Hard Points</th><th>Notes</th>
                        </tr>
                        <tr class="animate-repeat" ng-repeat="piece in character.getGroupWeapons()">
                            <td>{{piece.name}}</td>
                            <td>{{piece.value}}</td>
                            <td>{{piece.range}} </td>
                            <td>{{piece.damage}} </td>
                            <td>{{piece.critical}} </td>
                            <td>{{piece.skill}} </td>
                            <td>{{piece.hard_points}} </td>
                            <td>{{piece.description}} </td>
                            <td>{{piece.notes}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="characterArmor" class="dataBlock">
                <div class="dataBlockLabel">Armor</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Name</th><th>Value</th><th>Description</th><th>Armor Value</th>
                        </tr>
                        <tr class="animate-repeat" ng-repeat="piece in character.getGroupArmor()">
                            <td>{{piece.name}}</td>
                            <td>{{piece.value}}</td>
                            <td>{{piece.description}} </td>
                            <td>{{piece.armor_value}} </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="characterMisc" class="dataBlock">
                <div class="dataBlockLabel">Other</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Name</th><th>Value</th><th>Description</th>
                        </tr>
                        <tr class="animate-repeat" ng-repeat="piece in character.getGroupMisc()">
                            <td>{{piece.name}}</td>
                            <td>{{piece.value}}</td>
                            <td>{{piece.description}} </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearFix"></div>

        <div id="characterTalents" class="sectionBlock">
            <div class="sectionLabel">Talents &amp; Skills</div>
            <div class="dataBlock two">
                <div class="dataBlockLabel">Talents</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Name</th><th>Function</th>
                        </tr>
                        <tr  ng-repeat="talent in character.getTalents()">
                            <td>{{talent.name}}</td>
                            <td>{{talent.function}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="dataBlock two">
                <div class="dataBlockLabel">Skills</div>
                <div class="dataBlockText">
                    <table class="tabularData">
                        <tr>
                            <th>Name</th><th>Trait</th><th>Level</th>
                        </tr>
                        <tr  ng-repeat="skill in character.getSkills()">
                            <td>{{skill.name}}</td>
                            <td>{{skill.char}}</td>
                            <td>{{skill.level}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearFix"></div>

        <div id="characterExperience" class="sectionBlock">
            <div class="sectionLabel">Experience</div>
            <div id="characterTotalExp" class="dataBlock two">
                <div class="dataBlockLabel">Total Experience</div> 
                <div class="dataBlockMember">{{character.getTotalExperience()}}</div>
            </div>
            <div id="characterAvailExp" class="dataBlock two">
                <div class="dataBlockLabel">Available Experience</div> 
                <div class="dataBlockMember">{{character.getAvailExperience()}}</div>
            </div>
        </div>
    </div>
  </body>
</html>
