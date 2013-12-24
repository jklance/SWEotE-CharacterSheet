var NBSP = '\u00A0';

function SWEotECharacter() {
    this._player          = NBSP;
    this._name            = NBSP;
    this._concept         = NBSP;
    this._description     = new Array();
    this._background      = new Array();
    this._careers         = new Array();
    this._characteristics = new Array();
    this._talents         = new Array();
    this._skills          = new Array();
    this._inventory       = new Array();
    this._experience      = new Array();
    this._status          = new Array();
}

SWEotECharacter.prototype.setCharacterComponents = function(parsedData) {
    this.setPlayer(parsedData.player);
    this.setName(parsedData.name);
    this.setDescription(parsedData.description);
    this.setBackground(parsedData.background);
    this.setCareers(parsedData.careers);
    this.setTalents(parsedData.talents);
    this.setSkills(parsedData.skills);
    this.setCharacteristics(parsedData.characteristics);
    this.setInventory(parsedData.inventory);
    this.setExperience(parsedData.experience);
    this.setStatus(parsedData.status);
}

// Player name 
SWEotECharacter.prototype.setPlayer = function(inData) {
    this._player = inData;
}
SWEotECharacter.prototype.getPlayer = function() {
    return this._player;
}

// Character name
SWEotECharacter.prototype.setName = function(inData) {
    this._name = inData;
}
SWEotECharacter.prototype.getName = function() {
    return this._name;
}

// Concept 
SWEotECharacter.prototype.setConcept = function(inData) {
    this._concept = inData;
}
SWEotECharacter.prototype.getConcept = function() {
    return this._concept;
}

// Description fields 
SWEotECharacter.prototype.setDescription = function(inData) {
    this.setSpecies(inData.species);
    this.setGender(inData.gender);
    this.setAge(inData.age);
    this.setHeight(inData.height);
    this.setBuild(inData.build);
    this.setHair(inData.hair);
    this.setEyes(inData.eyes);
    this.setFeatures(inData.features);
}
    // Species 
    SWEotECharacter.prototype.setSpecies = function(inData) {
        this._description['species'] = inData;
    }
    SWEotECharacter.prototype.getSpecies = function() {
        if (this._description.species) {
            return this._description.species;
        }
        return NBSP;
    }

    // Gender
    SWEotECharacter.prototype.setGender = function(inData) {
        this._description['gender'] = inData;
    }
    SWEotECharacter.prototype.getGender = function() {
        if (this._description.gender) {
            return this._description.gender;
        }
        return NBSP;
    }

    // Age
    SWEotECharacter.prototype.setAge = function(inData) {
        this._description['age'] = inData;
    }
    SWEotECharacter.prototype.getAge = function() {
        if (this._description.age) {
            return this._description.age;
        }
        return NBSP;
    }

    // Height
    SWEotECharacter.prototype.setHeight = function(inData) {
        this._description['height'] = inData;
    }
    SWEotECharacter.prototype.getHeight = function() {
        if (this._description.height) {
            return this._description.height;
        }
        return NBSP;
    }

    // Build
    SWEotECharacter.prototype.setBuild = function(inData) {
        this._description['build'] = inData;
    }
    SWEotECharacter.prototype.getBuild = function() {
        if (this._description.build) {
            return this._description.build;
        }
        return NBSP;
    }

    // Hair
    SWEotECharacter.prototype.setHair = function(inData) {
        this._description['hair'] = inData;
    }
    SWEotECharacter.prototype.getHair = function() {
        if (this._description.hair) {
            return this._description.hair;
        }
        return NBSP;
    }

    // Eyes
    SWEotECharacter.prototype.setEyes = function(inData) {
        this._description['eyes'] = inData;
    }
    SWEotECharacter.prototype.getEyes = function() {
        if (this._description.eyes) {
            return this._description.eyes;
        }
        return NBSP;
    }

    // Features
    SWEotECharacter.prototype.setFeatures = function(inData) {
        this._description['features'] = inData;
    }
    SWEotECharacter.prototype.getFeatures = function() {
        if (this._description.features) {
            return this._description.features;
        }
        return NBSP;
    }

// Background
SWEotECharacter.prototype.setBackground = function(inData) {
    this._background.obligations = new Array();
    for(var i = 0; i < inData.obligations.length; ++i) {
        this.addObligation(inData.obligations[i]);
    }

    this._background.motivations = new Array();
    for(var i = 0; i < inData.motivations.length; ++i) {
        this.addMotivation(inData.motivations[i]);
    }
    this.setClass(inData.class);
}

    // Obligations
    SWEotECharacter.prototype.addObligation = function(inData) {
        if (!('obligations' in this._background)) {
            this._background.obligations = new Array();
        }
        this._background['obligations'].push(inData);
    }
    SWEotECharacter.prototype.getObligations = function() {
        if (this._background.obligations) {
            return this._background.obligations;
        }
        return NBSP;
    }
    SWEotECharacter.prototype.getObligation = function(num) {
        if (this._background.obligations && this._background.obligations.length > num) {
            return this._background.obligations[num];
        }
        return NBSP;
    }
    
    // Motivations
    SWEotECharacter.prototype.addMotivation = function(inData) {
        if (!('motivations' in this._background)) {
            this._background.motivations = new Array();
        }
        this._background['motivations'].push(inData);
    }
    SWEotECharacter.prototype.getMotivations = function() {
        if (this._background.motivations) {
            return this._background.motivations;
        }
        return NBSP;
    }
    SWEotECharacter.prototype.getMotivation = function(num) {
        if (this._background.motivations && this._background.motivations.length > num) {
            return this._background.motivations[num];
        }
        return NBSP;
    }

    // Class
    SWEotECharacter.prototype.setClass = function(inData) {
        this._background['class'] = inData;
    }
    SWEotECharacter.prototype.getClass = function() {
        if (this._background.class) {
            return this._background.class;
        }
        return NBSP;
    }

// Careers
SWEotECharacter.prototype.setCareers = function(inData) {
    this._careers = new Array();
    for(var i = 0; i < inData.length; ++i) {
        this.addCareer(inData[i]);
    }
}
    SWEotECharacter.prototype.addCareer = function(inData) {
        this._careers.push(inData);
    }
    SWEotECharacter.prototype.getCareers = function() {
        if (this._careers) {
            return this._careers;
        }
        return NBSP;
    }
    SWEotECharacter.prototype.getCareer = function(num) {
        if (this._careers && this._careers.length > num) {
            return this._careers[num];
        }
        return NBSP;
    }

// Talents
SWEotECharacter.prototype.setTalents = function(inData) {
    this._talents = new Array();
    for(var i = 0; i < inData.length; ++i) {
        this.addTalent(inData[i]);
    }
}
    SWEotECharacter.prototype.addTalent = function(inData) {
        this._talents.push(inData);
    }
    SWEotECharacter.prototype.getTalents = function() {
        if (this._talents.length > 0) {
            return this._talents;
        }
        return NBSP;
    }
    SWEotECharacter.prototype.getTalent = function(num) {
        if (this._talents.length > num) {
            return this._talents[num];
        }
        return NBSP;
    }

// Skills
SWEotECharacter.prototype.setSkills = function(inData) {
    this._skills = new Array();
    for(var i = 0; i < inData.length; ++i) {
        this.addSkill(inData[i]);
    }
}
    SWEotECharacter.prototype.addSkill = function(inData) {
        this._skills.push(inData);
    }
    SWEotECharacter.prototype.getSkills = function() {
        if (this._skills.length > 0) {
            return this._skills;
        }
        return NBSP;
    }
    SWEotECharacter.prototype.getSkill = function(num) {
        if (this._skills.length > num) {
            return this._skills[num];
        }
        return NBSP;
    }

// Characteristics
SWEotECharacter.prototype.setCharacteristics = function(inData) {
    this.setBrawn(inData.brawn);
    this.setAgility(inData.agility);
    this.setIntellect(inData.intellect);
    this.setCunning(inData.cunning);
    this.setWillpower(inData.willpower);
    this.setPresence(inData.presence);
}
    SWEotECharacter.prototype.setBrawn = function(inData) {
        this._characteristics.brawn = inData;
    }
    SWEotECharacter.prototype.setAgility = function(inData) {
        this._characteristics.agility = inData;
    }
    SWEotECharacter.prototype.setIntellect = function(inData) {
        this._characteristics.intellect = inData;
    }
    SWEotECharacter.prototype.setCunning = function(inData) {
        this._characteristics.cunning = inData;
    }
    SWEotECharacter.prototype.setWillpower = function(inData) {
        this._characteristics.willpower = inData;
    }
    SWEotECharacter.prototype.setPresence = function(inData) {
        this._characteristics.presence = inData;
    }

    SWEotECharacter.prototype.getBrawn = function(inData) {
        if (this._characteristics.brawn) {
            return this._characteristics.brawn;
        }
        return 0;
    }
    SWEotECharacter.prototype.getAgility = function(inData) {
        if (this._characteristics.agility) {
            return this._characteristics.agility;
        }
        return 0;
    }
    SWEotECharacter.prototype.getIntellect = function(inData) {
        if (this._characteristics.intellect) {
            return this._characteristics.intellect;
        }
        return 0;
    }
    SWEotECharacter.prototype.getCunning = function(inData) {
        if (this._characteristics.cunning) {
            return this._characteristics.cunning;
        }
        return 0;
    }
    SWEotECharacter.prototype.getWillpower = function(inData) {
        if (this._characteristics.willpower) {
            return this._characteristics.willpower;
        }
        return 0;
    }
    SWEotECharacter.prototype.getPresence = function(inData) {
        if (this._characteristics.presence) {
            return this._characteristics.presence;
        }
        return 0;
    }

// Inventory
SWEotECharacter.prototype.setInventory = function(inData) {
    this.setCharacterInventory(inData.character);
    this.setGroupInventory(inData.group);
}

    // Character Inventory
    SWEotECharacter.prototype.setCharacterInventory = function(inData) {
        this._inventory['character'] = new Array();
        this.setCharacterCredits(inData.credits);
        this.setCharacterWeapons(inData.weapons);
        this.setCharacterArmor(inData.armor);
        this.setCharacterMisc(inData.misc);
    }

        // Character Credits
        SWEotECharacter.prototype.setCharacterCredits = function(inData) {
            this._inventory['character']['credits'] = inData;
        }
        SWEotECharacter.prototype.getCharacterCredits = function() {
            if (this._inventory.character && this._inventory.character.credits) {
                return this._inventory.character.credits;
            }
            return 0;
        }

        // Character Weapons
        SWEotECharacter.prototype.setCharacterWeapons = function(inData) {
            this._inventory['character']['weapons'] = inData;
        }
        SWEotECharacter.prototype.getCharacterWeapons = function() {
            if (this._inventory.character && this._inventory.character.weapons) {
                return this._inventory.character.weapons;
            }
            return null;
        }

        // Character Armor
        SWEotECharacter.prototype.setCharacterArmor = function(inData) {
            this._inventory['character']['armor'] = inData;
        }
        SWEotECharacter.prototype.getCharacterArmor = function() {
            if (this._inventory.character && this._inventory.character.armor) {
                return this._inventory.character.armor;
            }
            return null;
        }

        // Character Misc
        SWEotECharacter.prototype.setCharacterMisc = function(inData) {
            this._inventory['character']['misc'] = inData;
        }
        SWEotECharacter.prototype.getCharacterMisc = function() {
            if (this._inventory.character && this._inventory.character.misc) {
                return this._inventory.character.misc;
            }
            return null;
        }

    // Group Inventory
    SWEotECharacter.prototype.setGroupInventory = function(inData) {
        this._inventory['group'] = new Array();
        this.setGroupCredits(inData.credits);
        this.setGroupWeapons(inData.weapons);
        this.setGroupArmor(inData.armor);
        this.setGroupMisc(inData.misc);
    }

        // Group Credits
        SWEotECharacter.prototype.setGroupCredits = function(inData) {
            this._inventory['group']['credits'] = inData;
        }
        SWEotECharacter.prototype.getGroupCredits = function() {
            if (this._inventory.group && this._inventory.group.credits) {
                return this._inventory.group.credits;
            }
            return 0;
        }

        // Group Weapons
        SWEotECharacter.prototype.setGroupWeapons = function(inData) {
            this._inventory['group']['weapons'] = inData;
        }
        SWEotECharacter.prototype.getGroupWeapons = function() {
            if (this._inventory.group && this._inventory.group.weapons) {
                return this._inventory.group.weapons;
            }
            return null;
        }

        // Group Armor
        SWEotECharacter.prototype.setGroupArmor = function(inData) {
            this._inventory.group['armor'] = inData;
        }
        SWEotECharacter.prototype.getGroupArmor = function() {
            if (this._inventory.group && this._inventory.group.armor) {
                return this._inventory.group.armor;
            }
            return null;
        }

        // Group Misc
        SWEotECharacter.prototype.setGroupMisc = function(inData) {
            this._inventory.group['misc'] = inData;
        }
        SWEotECharacter.prototype.getGroupMisc = function() {
            if (this._inventory.group && this._inventory.group.misc) {
                return this._inventory.group.misc;
            }
            return null;
        }

// Experience
SWEotECharacter.prototype.setExperience = function(inData) {
    this.setTotalExperience(inData.total);
    this.setAvailExperience(inData.available);
}
    
    // Total Experience
    SWEotECharacter.prototype.setTotalExperience = function(inData) {
        this._experience['total'] = inData;
    }
    SWEotECharacter.prototype.getTotalExperience = function() {
        if (this._experience.total) {
            return this._experience.total;
        }
        return 0;
    }

    // Available Experience
    SWEotECharacter.prototype.setAvailExperience = function(inData) {
        this._experience['available'] = inData;
    }
    SWEotECharacter.prototype.getAvailExperience = function() {
        if (this._experience.available) {
            return this._experience.available;
        }
        return 0;
    }

// Status
SWEotECharacter.prototype.setStatus = function(inData) {
    this.calculateSoak();

    this._status['strain'] = new Array();
    this.setStrainCurrent(inData.current_strain);
    this.calculateStrainThreshold();

    this._status['wound'] = new Array();
    this.setWoundCurrent(inData.current_wound);
    this.calculateWoundThreshold();

    this._status['defense'] = new Array();
    this.calculateDefenseRanged();
    this.calculateDefenseMelee();
}
    
    // Soak
    SWEotECharacter.prototype.calculateSoak = function() {
        this._status['soak'] = 3;
    }
    SWEotECharacter.prototype.getSoak = function() {
        if (this._status.soak) {
            return this._status.soak;
        }
        return 0;
    }

    // Strain
    SWEotECharacter.prototype.setStrainCurrent = function(inData) {
        this._status.strain['current'] = inData;
    }
    SWEotECharacter.prototype.getStrainCurrent = function() {
        if (this._status.strain && this._status.strain.current) {
            return this._status.strain.current;
        }
        return 0;
    }
    SWEotECharacter.prototype.calculateStrainThreshold = function() {
        // TODO: Calculate this
        this._status.strain['threshold'] = 10;
    }
    SWEotECharacter.prototype.getStrainThreshold = function() {
        if (this._status.strain &&  this._status.strain.threshold) {
            return this._status.strain.threshold;
        }
        return 0;
    }

    // Wound
    SWEotECharacter.prototype.setWoundCurrent = function(inData) {
        this._status.wound['current'] = inData;
    }
    SWEotECharacter.prototype.getWoundCurrent = function() {
        if (this._status.wound && this._status.wound.current) {
            return this._status.wound.current;
        }
        return 0;
    }
    SWEotECharacter.prototype.calculateWoundThreshold = function() {
        // TODO: Calculate this
        this._status.wound['threshold'] = 13;
    }
    SWEotECharacter.prototype.getWoundThreshold = function() {
        if (this._status.wound && this._status.wound.threshold) {
           return this._status.wound.threshold;
        } 
        return 0;
    }

    // Defense
    SWEotECharacter.prototype.calculateDefenseRanged = function() {
        // TODO: Calculate this
        this._status.defense['ranged'] = 5;
    }
    SWEotECharacter.prototype.getDefenseRanged = function() {
        if (this._status.defense && this._status.defense.ranged) {
            return this._status.defense.ranged;
        }
        return 0;
    }
    SWEotECharacter.prototype.calculateDefenseMelee = function() {
        // TODO: Calculate this
        this._status.defense['melee'] = 6;
    }
    SWEotECharacter.prototype.getDefenseMelee = function() {
        if (this._status.defense && this._status.defense.melee) {
            return this._status.defense.melee;
        }
        return 0;
    }
