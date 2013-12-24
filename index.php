<!doctype html>
<html ng-app="sweoteCharSheetApp">
  <head>
    <title>{{titleBarText}}</title>
    <meta charset="utf-8">
    <meta name="description" content="Character Sheet and Roleplaying Companion for Star Wars Edge of the Empire" />
    <meta name="author" content="Jer Lance <me@jerlance.com>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Application files -->
    <script src="js/sweoteCharSheetApp.js"></script>
    <script src="js/sweoteCharacter.js"></script>
    <link rel="stylesheet" type="text/css" href="css/default.css" />
  </head>
  <body>
    <div id="characterSheet" ng-controller="characterData">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SW:EotE</a>
                </div>
                <div class="navbar-collapse collapse">
                    <div class="nav navbar-nav navbar-form">
                        <input type="text" class="form-control" ng-model="characterName" placeholder="Character Name" />
                        <button type="button" class="btn btn-success" ng-click="loadCharacter()">Load</button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">New Char</a></li>
                        <li class="active"><a href="#load">Load Char</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        
        <div class="container">
            <div id="generalInfo">
                <dl class="dl-horizontal">
                    <dt>Name</dt><dd>{{character.getName()}}</dd>
                    <dt>Player</dt><dd>{{character.getPlayer()}}</dd>
                    <dt>Species</dt><dd>{{character.getSpecies()}}</dd>
                    <dt>Careers</dt><dd>
                        <ul class="list-inline">
                            <li ng-repeat="career in character.getCareers()">
                                {{career.class}} ({{career.specialization}})
                            </li> 
                        </ul>
                    </dd>
                </dl>
            </div>

            <div id="currentStatus" class="row">
                <h3 class="sectionLabel">Status</h3>
                <div class="sectionBody">
                    <div id="characterSoak" class="col-xs-6 col-sm-3 text-center">
                        <div class="stat-item">
                            <h4>Soak</h4> 
                            <div class="stat-value">{{character.getSoak()}}</div>
                        </div>
                    </div>
                    <div id="characterWounds" class="col-xs-6 col-sm-3 text-center">
                        <div class="stat-sub-item">
                            <h4>Wounds</h4>
                            <div>
                                <div id="characterWoundCurrent" class="col-xs-6">
                                    <div class="stat-sub-value-left">{{character.getWoundCurrent()}}</div>
                                    <div class="h5">
                                        <div class="visible-xs stat-sub-label-left"><abbr title="Current">Cu</abbr></div>
                                        <div class="hidden-xs stat-sub-label-left">Current</div>
                                    </div>
                                </div>
                                <div id="characterWoundThreshold" class="col-xs-6">
                                    <div class="stat-sub-value-right">{{character.getWoundThreshold()}}</div>
                                    <div class="h5">
                                        <div class="visible-xs stat-sub-label-right"><abbr title="Threshold">Th</abbr></div>
                                        <div class="hidden-xs stat-sub-label-right">Threshold</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="characterStrain" class="col-xs-6 col-sm-3 text-center">
                        <div class="stat-sub-item">
                            <h4>Strain</h4> 
                            <div>
                                <div id="characterStrainCurrent" class="col-xs-6">
                                    <div class="stat-sub-value-left">{{character.getStrainCurrent()}}</div>
                                    <div class="h5">
                                        <div class="visible-xs stat-sub-label-left"><abbr title="Current">Cu</abbr></div>
                                        <div class="hidden-xs stat-sub-label-left">Current</div>
                                    </div>
                                </div>
                                <div id="characterStrainThreshold" class="col-xs-6">
                                    <div class="stat-sub-value-right">{{character.getStrainThreshold()}}</div>
                                    <div class="h5">
                                        <div class="visible-xs stat-sub-label-right"><abbr title="Threshold">Th</abbr></div> 
                                        <div class="hidden-xs stat-sub-label-right">Threshold</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="characterDefense" class="col-xs-6 col-sm-3 text-center">
                        <div class="stat-sub-item">
                            <h4>Defense</h4> 
                            <div>
                                <div id="characterDefenseRanged" class="col-xs-6">
                                    <div class="stat-sub-value-left">{{character.getDefenseRanged()}}</div>
                                    <div class="h5">
                                        <div class="visible-xs stat-sub-label-left"><abbr title="Ranged">Ra</abbr></div>
                                        <div class="hidden-xs stat-sub-label-left">Ranged</div>
                                    </div>
                                </div>
                                <div id="characterDefenseMelee" class="col-xs-6">
                                    <div class="stat-sub-value-right">{{character.getDefenseMelee()}}</div>
                                    <div class="h5">
                                        <div class="visible-xs stat-sub-label-right"><abbr title="Melee">Me</abbr></div>
                                        <div class="hidden-xs stat-sub-label-right">Melee</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="characterStats" class="row">
                <h3 class="sectionLabel">Stats</h3> 
                <div>
                    <div id="characterBrawn" class="col-xs-4 col-sm-2 text-center">
                        <div class="stat-item">
                            <h4 class="visible-xs">Brwn</h4> 
                            <h4 class="hidden-xs">Brawn</h4> 
                            <div class="stat-value">{{character.getBrawn()}}</div>
                        </div>
                    </div>
                    <div id="characterAgility" class="col-xs-4 col-sm-2 text-center">
                        <div class="stat-item">
                            <h4 class="visible-xs">Agil</h4> 
                            <h4 class="hidden-xs">Agility</h4> 
                            <div class="stat-value">{{character.getAgility()}}</div>
                        </div>
                    </div>
                    <div id="characterIntellect" class="col-xs-4 col-sm-2 text-center">
                        <div class="stat-item">
                            <h4 class="visible-xs">Int</h4> 
                            <h4 class="hidden-xs">Intellect</h4> 
                            <div class="stat-value">{{character.getIntellect()}}</div>
                        </div>
                    </div>
                    <div id="characterCunning" class="col-xs-4 col-sm-2 text-center">
                        <div class="stat-item">
                            <h4 class="visible-xs">Cun</h4> 
                            <h4 class="hidden-xs">Cunning</h4> 
                            <div class="stat-value">{{character.getCunning()}}</div>
                        </div>
                    </div>
                    <div id="characterWillpower" class="col-xs-4 col-sm-2 text-center">
                        <div class="stat-item">
                            <h4 class="visible-xs">Will</h4> 
                            <h4 class="hidden-xs">Willpower</h4> 
                            <div class="stat-value">{{character.getWillpower()}}</div>
                        </div>
                    </div>
                    <div id="characterPresence" class="col-xs-4 col-sm-2 text-center">
                        <div class="stat-item">
                            <h4 class="visible-xs">Pres</h4> 
                            <h4 class="hidden-xs">Presence</h4> 
                            <div class="stat-value">{{character.getPresence()}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="characterTalents" class="row">
                <h3 class="sectionLabel">Talents &amp; Skills</h3>
                <div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-textarea">
                            <h4>Talents</h4>
                            <dl ng-repeat="element in character.getTalents()">
                               <dt>{{element.name}}</dt>
                               <dd>{{element.function}}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="section-textarea">
                            <h4>Skills</h4>
                            <dl class="dl-horizontal" ng-repeat="element in character.getSkills()">
                               <dt>{{element.name}}</dt>
                               <dd>{{element.level}} {{element.char}} {{element.dice_pool}}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div id="characterEquipmentLog" class="row">
                <h3 class="sectionLabel">Character Equipment Log</h3>
                <div class="container">
                    <div id="characterCredits">
                        <div class="section-textrow">
                            <h4>Credits</h4>
                            <div class="text-center stat-value">{{character.getCharacterCredits()}}</div>
                        </div>
                    </div>
                    <div id="characterWeapons">
                        <div class="section-textrow">
                            <h4>Weapons</h4>
                            <div ng-repeat="piece in character.getCharacterWeapons()">
                                <div class="col-xs-12">
                                    <h5>{{piece.name}}</h5>
                                </div>
                                <div class="equipment-detail">
                                    <div class="col-xs-3 col-md-2">
                                        <h6><abbr title="Dice Pool">Dice</abbr></h6>
                                        <div>{{piece.die_pool}}GGY</div>
                                    </div>
                                    <div class="col-xs-3 col-md-2">
                                        <h6><abbr title="Damage">Dam</abbr></h6>
                                        <div>{{piece.damage}}</div>
                                    </div>
                                    <div class="col-xs-3 col-md-2">
                                        <h6><abbr title="Critical">Crit</abbr></h6>
                                        <div>{{piece.critical}}</div>
                                    </div>
                                    <div class="col-xs-3 col-md-2">
                                        <h6><abbr title="Hard Points">Hard</abbr></h6>
                                        <div>{{piece.hard_points}}</div>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-md-4 col-lg-2">
                                        <h6><abbr title="Value">Value</abbr></h6>
                                        <div>{{piece.value}}</div>
                                    </div>
                                    <div class="col-xs-6 col-sm-5 col-md-2">
                                        <h6><abbr title="Range">Range</abbr></h6>
                                        <div>{{piece.range}}</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-4">
                                        <h6>Skill</h6>
                                        <div>{{piece.skill}}</div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                        <h6>Description</h6>
                                        <div>{{piece.description}}</div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                        <h6>Notes</h6>
                                        <div>{{piece.notes}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="characterArmor">
                        <div class="section-textrow">
                            <h4>Armor</h4>
                            <div ng-repeat="piece in character.getCharacterArmor()">
                                <div class="col-xs-12">
                                    <h5>{{piece.name}}</h5>
                                </div>
                                <div class="equipment-detail">
                                    <div class="col-xs-6 col-md-6 col-lg-1">
                                        <h6>Armor</h6>
                                        <div>{{piece.armor_value}}</div>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-md-6 col-lg-1">
                                        <h6>Value</h6>
                                        <div>{{piece.value}}</div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-5">
                                        <h6>Description</h6>
                                        <div>{{piece.description}}</div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-5">
                                        <h6>Notes</h6>
                                        <div>{{piece.notes}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="characterMisc">
                        <div class="section-textrow">
                            <h4>Other</h4>
                            <div ng-repeat="piece in character.getCharacterMisc()">
                                <div class="col-sm-4">
                                    <h5>{{piece.name}}</h5>
                                </div>
                                <div class="equiptment-detail">
                                    <div class="col-sm-2">
                                        <h6>Value</h6>
                                        <div>{{piece.value}}</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6>Description</h6>
                                        <div>{{piece.description}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="groupEquipmentLog" class="row">
                <h3 class="sectionLabel">Group Equipment Log</h3>
                <div class="container">
                    <div id="characterCredits">
                        <div class="section-textrow">
                            <h4>Credits</h4>
                            <div class="text-center stat-value">{{character.getGroupCredits()}}</div>
                        </div>
                    </div>
                    <div id="characterWeapons">
                        <div class="section-textrow">
                            <h4>Weapons</h4>
                            <div ng-repeat="piece in character.getGroupWeapons()">
                                <div class="col-xs-12">
                                    <h5>{{piece.name}}</h5>
                                </div>
                                <div class="equipment-detail">
                                    <div class="col-xs-3 col-md-2">
                                        <h6><abbr title="Dice Pool">Dice</abbr></h6>
                                        <div>{{piece.die_pool}}GGY</div>
                                    </div>
                                    <div class="col-xs-3 col-md-2">
                                        <h6><abbr title="Damage">Dam</abbr></h6>
                                        <div>{{piece.damage}}</div>
                                    </div>
                                    <div class="col-xs-3 col-md-2">
                                        <h6><abbr title="Critical">Crit</abbr></h6>
                                        <div>{{piece.critical}}</div>
                                    </div>
                                    <div class="col-xs-3 col-md-2">
                                        <h6><abbr title="Hard Points">Hard</abbr></h6>
                                        <div>{{piece.hard_points}}</div>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-md-4 col-lg-2">
                                        <h6><abbr title="Value">Value</abbr></h6>
                                        <div>{{piece.value}}</div>
                                    </div>
                                    <div class="col-xs-6 col-sm-5 col-md-2">
                                        <h6><abbr title="Range">Range</abbr></h6>
                                        <div>{{piece.range}}</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-4">
                                        <h6>Skill</h6>
                                        <div>{{piece.skill}}</div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                        <h6>Description</h6>
                                        <div>{{piece.description}}</div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                        <h6>Notes</h6>
                                        <div>{{piece.notes}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="characterArmor">
                        <div class="section-textrow">
                            <h4>Armor</h4>
                            <div ng-repeat="piece in character.getGroupArmor()">
                                <div class="col-xs-12">
                                    <h5>{{piece.name}}</h5>
                                </div>
                                <div class="equipment-detail">
                                    <div class="col-xs-6 col-md-6 col-lg-1">
                                        <h6>Armor</h6>
                                        <div>{{piece.armor_value}}</div>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-md-6 col-lg-1">
                                        <h6>Value</h6>
                                        <div>{{piece.value}}</div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-5">
                                        <h6>Description</h6>
                                        <div>{{piece.description}}</div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-5">
                                        <h6>Notes</h6>
                                        <div>{{piece.notes}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="characterMisc">
                        <div class="section-textrow">
                            <h4>Other</h4>
                            <div ng-repeat="piece in character.getGroupMisc()">
                                <div class="col-xs-12">
                                    <h5>{{piece.name}}</h5>
                                </div>
                                <div class="equipment-detail">
                                    <div class="col-xs-2">
                                        <h6>Value</h6>
                                        <div>{{piece.value}}</div>
                                    </div>
                                    <div class="col-xs-10">
                                        <h6>Description</h6>
                                        <div>{{piece.description}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="background" class="row">
                <h3 class="sectionLabel">Background</h3>
                <div id="characterMotivations" class="col-md-6">
                    <div class="section-textarea"> 
                        <h4>Motivations</h4>
                        <div ng-repeat="element in character.getMotivations()">
                            <div class="col-xs-4 col-sm-3">{{element.type}}</div>
                            <div class="col-xs-8 col-sm-9">{{element.description}}</div>
                        </div>
                    </div>
                </div>
                <div id="characterObligations" class="col-md-6">
                    <div class="section-textarea">
                        <h4>Obligations</h4>
                        <div ng-repeat="element in character.getObligations()">
                            <div class="col-xs-10 col-sm-3">{{element.type}}</div>
                            <div class="col-xs-2 col-sm-1">{{element.size}}</div>
                            <div class="col-xs-10 col-xs-offset-2 col-sm-offset-0 col-sm-8">{{element.description}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="characterDescription" class="row">
                <h3 class="sectionLabel">Description</h3>
                <div class="text-center">
                    <div id="characterGender" class="col-xs-4 col-sm-2">
                        <div class="description-item">
                            <h4>Gender</h4> 
                            <div class="description-value">{{character.getGender()}}&nbsp;</div>
                        </div>
                    </div>
                    <div id="characterAge" class="col-xs-4 col-sm-2">
                        <div class="description-item">
                            <h4>Age</h4> 
                            <div class="description-value">{{character.getAge()}}&nbsp;</div>
                        </div>
                    </div>
                    <div id="characterHeight" class="col-xs-4 col-sm-2">
                        <div class="description-item">
                            <h4>Height</h4> 
                            <div class="description-value">{{character.getHeight()}}&nbsp;</div>
                        </div>
                    </div>
                    <div id="characterBuild" class="col-xs-4 col-sm-2">
                        <div class="description-item">
                            <h4>Build</h4> 
                            <div class="description-value">{{character.getBuild()}}&nbsp;</div>
                        </div>
                    </div>
                    <div id="characterHair" class="col-xs-4 col-sm-2">
                        <div class="description-item">
                            <h4>Hair</h4> 
                            <div class="description-value">{{character.getHair()}}&nbsp;</div>
                        </div>
                    </div>
                    <div id="characterEyes" class="col-xs-4 col-sm-2">
                        <div class="description-item">
                            <h4>Eyes</h4> 
                            <div class="description-value">{{character.getEyes()}}&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="characterConcept" class="container">
                        <div class="description-item">
                            <h4>Concept</h4>
                            <div class="description-value">{{character.getConcept()}}&nbsp;</div>
                        </div>
                    </div>
                    <div id="characterFeatures" class="container">
                        <div class="description-item">
                            <h4>Features</h4> 
                            <div class="description-value">{{character.getFeatures()}}&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="characterExperience" class="row">
                <h3 class="sectionLabel">Experience</h3>
                <div id="characterTotalExp" class="col-xs-6 text-center">
                    <div class="stat-item">
                        <h4>Total</h4> 
                        <div class="stat-value">{{character.getTotalExperience()}}</div>
                    </div>
                </div>
                <div id="characterAvailExp" class="col-xs-6 text-center">
                    <div class="stat-item">
                        <h4>Available</h4> 
                        <div class="stat-value">{{character.getAvailExperience()}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer navbar-inverse">
            <p>Copyright &copy; 2013 Jer Lance</p>
        </div>
    </div>
</body>
</html>
