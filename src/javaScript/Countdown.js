const DisplayDate = ({
    seconds: '(distance % (1000 * 60)) / 1000',
    minutes: '(distance % (1000 * 60 * 60)) / (1000 * 60)',
    hours: "(distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)",
    days: "distance / (1000 * 60 * 60 * 24)",
    weeks: "distance / (1000 * 60 * 60 * 24 * 7)",
    months: "distance / (1000 * 60 * 60 * 24 * 7 * 12)",
    years: "distance / (1000 * 60 * 60 * 24 * 365)"
});

class Countdown {
    constructor(countdownName, date, dateMap) {
        if (countdownName == null && date == null && dateMap == null) {
            console.error("A property of the class constructor is undefined!");
        } else {
            this.countdownName = countdownName;
            this.date = date;
            this.dateMap = dateMap;
            this.subCountdownMap = new Map();
            this.divideTime = false;
        }
    }

    startTicker() {
        if (this.titleElementID != null) {
            document.getElementById(this.titleElementID).innerHTML = this.countdownTitle;
        }

        var date = this.date;
        var elementID = this.elementID;
        var timeOutText = this.timeOutText;
        var dateMap = this.dateMap;
        var subCountdownMap = this.subCountdownMap;
        var countdownName = this.countdownName;
        var divideTime = this.divideTime;

        var x = setInterval(function () {
            var currentDate = new Date().getTime();
            var distance = date - currentDate;

            if (distance < 0) {
                clearInterval(x);

                for (const [k, v] of subCountdownMap.entries()) {
                    if (k !== countdownName) {
                        v.addSubCountdownMap(subCountdownMap);
                        v.startTicker();
                        subCountdownMap.delete(k);
                        return;
                    }
                }

                document.getElementById(this.elementID).innerHTML = timeOutText;
            } else {
                var timeString = "";

                for (const [k, v] of dateMap.entries()) {
                    if (divideTime) {
                        if (document.getElementById(k) != null) {
                            document.getElementById(k).innerHTML = Math.floor(this.eval(v.replace("distance", distance))).toString(10);
                        } else {
                            console.error("Cant find the elementID " + k + " by countdown " + countdownName);
                        }
                    } else {
                        timeString = timeString + k + ": " + Math.floor(this.eval(v.replace("distance", distance))) + " / ";
                    }
                }

                if (!divideTime) {
                    document.getElementById(elementID).innerHTML = timeString;
                }
            }
        }, 1000);
    }

    addSubCountdown(countdownObj) {
        if (this.subCountdownMap.has(countdownObj.getCountdownName)) {
            console.error("Error the subCountdown with the name `" + countdownObj.getCountdownName + "` already exists!");
        } else {
            this.subCountdownMap.set(countdownObj.getCountdownName, countdownObj);
        }
    }

    addSubCountdownMap(subCountdownMap) {
        if (this.subCountdownMap === subCountdownMap) {
            console.error("Error subCountdownMap already defined!");
        } else {
            this.subCountdownMap = subCountdownMap;
        }
    }

    setCountdownTitle(countdownTitle, titleElementID) {
        this.countdownTitle = countdownTitle;
        this.titleElementID = titleElementID;
        return this;
    }

    setElementID(elementID) {
        if (elementID === undefined) {
            console.log("Property ElementID is not set");
        } else {
            this.elementID = elementID;
        }
        return this;
    }

    setTimeOutText(timeout) {
        if (timeout === undefined) {
            console.log("Property TimeOut is not set");
        } else {
            this.timeOutText = timeout;
        }
        return this;
    }

    setDivideTime(bol) {
        this.divideTime = bol;
        return this;
    }

    get getCountdownName() {
        return this.countdownName;
    }

    get getElementID() {
        return this.elementID;
    }

    get getTimeOutText() {
        return this.timeOutText;
    }
}


