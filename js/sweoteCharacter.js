function SWEotECharacter() {
    this._player;
    this._name;
}

SWEotECharacter.prototype.setPlayer = function(inData) {
    this._player = inData;
}
SWEotECharacter.prototype.getPlayer = function() {
    return this._player;
}

SWEotECharacter.prototype.setName = function(inData) {
    this._name = inData;
}
SWEotECharacter.prototype.getName = function() {
    return this._name;
}

