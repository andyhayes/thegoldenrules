function checkIsFirstRule() {
    if (this.number === "1") {
        return 'active';
    }
    return '';
}

function getFirstLetterOfDescription(description) {
    return this.description.slice(0, 1);
}

function getRestOfDescription(description) {
    console.log("getRestOfDescriptions: " + this.description);
    return this.description.slice(1);
}

function TheRulesCtrl($scope) {
    console.log("TheRulesCtrl initialised...");
    $scope.goldenrules =  [
        {   
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "1",
            name: "Always get your timesheets signed",
            description: "While you are a professional aiming to provide an excellent service, you still have to pay the bills. So make sure you get your timesheets signed."
        },
        {   
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "2",
            name: "You are not really ill",
            description: "Oh no, you are feeling blue and you don't want to get out of bed. However, you can't let your team down. Get yourself to work. Unless you are dead, then you can take the day off."
        },
        {   
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "3",
            name: "Hell is for heroes",
            description: "You were hired because you're a professional and have valuable skills. Do your job, but be wary of making that last minute change or fixing something that aint broke. Chances are it will come back and bite you in the ass."
        },
        {   
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "4",
            name: "Don't take too many holidays",
            description: "Taking holidays is stressful enough as you have to spend time with your loved ones. Not getting paid while doing so really twists the knife."
        },
        {   
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "5",
            name: "Stay focussed even if you know best",
            description: "Your skills and experience may tell you that things are being done the wrong way. However sometimes you just need to keep quiet and get the job done or it might be the highway."
        },
        {   
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "6",
            name: "Don't burn your bridges",
            description: "You're hacked off with your manager and/or colleagues and when your contract finishes you want to tell them exactly what you think of them. Don't. Your CV might land on their desk in the future and from there it will land in the bin."
        },
        {   
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "7",
            name: "If you are asked to go permie, you've been there too long",
            description: "Things are going swimmingly and everybody likes you. In fact they like you so much they want to offer you a permanent job. You're flattered but it's time leave."
        },
        {   
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "8",
            name: "Dig that tunnel for your friends",
            description: "So you have landed a new contract and they are looking more contractors. Don't forget to recommend the rest of us, as what goes round comes around!"
        },
        {   
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "9",
            name: "Don't make your colleagues look bad",
            description: "It's easy to play the blame game and point the finger at someone else. Especially when it *is* their fault. Don't drop them in it. Unless it contravenes rule #1"
        },
        {
            active: checkIsFirstRule,
            dropCap: getFirstLetterOfDescription,
            text: getRestOfDescription,
            number: "10",
            name: "Be sensitive!",
            description: "Don't keep harping on about your rate or why you think being a permie is bad. Each to their own."
            
        }
    ]
}

var GoldenRules = {};
GoldenRules.Analytics = function() {
    
    var external = {
        
    };

    return external;
};
