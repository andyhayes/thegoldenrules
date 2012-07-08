function checkIsFirstRule() {
    console.log("checkIsFirstRule: " + this.number);
    if (this.number === "1") {
        return 'active';
    }
    return '';
}

function getFirstLetterOfDescription(description) {
    console.log("getFirstChar: " + this.description);
    return this.description.slice(0, 1);
}

function getRestOfDescription(description) {
    console.log("getRestOfDescriptions: " + this.description);
    return this.description.slice(1);
}

function TheRulesCtrl($scope) {
    console.log("TheRulesCtrl initialised...");
    $scope.goldenrules =  [
        {   active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "1",
            name: "Always get your timesheets signed",
            description: "While you are a professional aiming to provide an excellent service, you still have to pay the bills. So make sure you get your timesheets signed."
        },
        {   active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "2",
            name: "You are not really ill",
            description: "You don't want to get out of bed. However, you can't let your team down. Get yourself to work. Unless you are dead, then you can take the day off."
        },
        {   active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "3",
            name: "Don't take too many holidays",
            description: "Taking holidays is stressful enough when you have to spend time with your loved ones. Not getting paid while doing so really twists the knife."
        }
    ]
}