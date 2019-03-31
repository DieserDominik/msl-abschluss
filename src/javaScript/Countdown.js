/**
 * Calculation Enum for each date formats
 *
 * @type {
 *          {
 *              seconds: string,
 *              hours: string, weeks:
 *              string, months: string,
 *              minutes: string,
 *              days: string,
 *              years: string
 *          }
 *      }
 */
const DisplayDate = ({
    seconds: '(distance % (1000 * 60)) / 1000',
    minutes: '(distance % (1000 * 60 * 60)) / (1000 * 60)',
    hours: "(distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)",
    days: "distance / (1000 * 60 * 60 * 24)",
    weeks: "distance / (1000 * 60 * 60 * 24 * 7)",
    months: "distance / (1000 * 60 * 60 * 24 * 7 * 12)",
    years: "distance / (1000 * 60 * 60 * 24 * 365)"
});

/***
 * Class constructor, creates a new instance of this class
 *
 * @param countdownName
 * @param date
 * @param dateMap
 * @constructor
 */
function Countdown(countdownName, date, dateMap) {
    console.log("Create countdown Object `" + countdownName + "`");
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

/***
 * Starts the countdown, and calculate the countdowns.
 */
Countdown.prototype.startTicker = function () {
    if (this.titleElementID != null) {
        document.getElementById(this.titleElementID).innerHTML = this.countdownTitle;
    }

    let date = this.date;
    let elementID = this.elementID;
    let timeOutText = this.timeOutText;
    let dateMap = this.dateMap;
    let subCountdownMap = this.subCountdownMap;
    let countdownName = this.countdownName;
    let divideTime = this.divideTime;

    let x = setInterval(function () {
        let currentDate = new Date().getTime();
        let distance = date - currentDate;

        if (distance < 0) {
            clearInterval(x);

            subCountdownMap.forEach(function (value, key) {
                if (key !== countdownName) {
                    value.addSubCountdownMap(subCountdownMap);
                    value.startTicker();
                    subCountdownMap.delete(key);
                    return;
                }
            });
        } else {
            let timeString = "";

            dateMap.forEach(function (value, key) {
                if (divideTime) {
                    if (document.getElementById(value.id) != null) {
                        document.getElementById(value.id).innerHTML = Math.floor(this.eval(dateMap[key].time.replace("distance", distance))).toString(10);
                    } else {
                        console.error("Cant find the elementID " + value.id + " by countdown " + countdownName);
                    }
                } else {
                    timeString = timeString + value.id + ": " + Math.floor(this.eval(dateMap[key].time.replace("distance", distance))) + " / ";
                }
            });
        }
    }, 1000);
};

/***
 * Adds a sub countdown to the sub Countdown Map. If the main countdown is over the second countdown will starts.
 *
 * @param countdownObj
 */
Countdown.prototype.addSubCountdown = function (countdownObj) {
    if (this.subCountdownMap.has(countdownObj.getCountdownName())) {
        console.error("Error the subCountdown with the name `" + countdownObj.getCountdownName() + "` already exists!");
    } else {
        this.subCountdownMap.set(countdownObj.getCountdownName(), countdownObj);
    }
};

/***
 * Initialize the local sub countdown Map with the map in the function
 *
 * @param subCountdownMap
 */
Countdown.prototype.addSubCountdownMap = function (subCountdownMap) {
    if (this.subCountdownMap === subCountdownMap) {
        console.error("Error subCountdownMap already defined!");
    } else {
        this.subCountdownMap = subCountdownMap;
    }
};

/***
 * Set the title of the countdown object.
 *
 * @param countdownTitle
 * @param titleElementID
 * @returns {Countdown}
 */
Countdown.prototype.setCountdownTitle = function (countdownTitle, titleElementID) {
    this.countdownTitle = countdownTitle;
    this.titleElementID = titleElementID;
    return this;
};

/***
 * Sets the element Id where the countdown-text displayed.
 *
 * @param elementID
 * @returns {Countdown}
 */
Countdown.prototype.setElementID = function (elementID) {
    if (elementID === undefined) {
        console.log("Property ElementID is not set");
    } else {
        this.elementID = elementID;
    }
    return this;
};

/***
 * Sets the text that will be displayed at the end of the countdown.
 *
 * @param timeout
 * @returns {Countdown}
 */
Countdown.prototype.setTimeOutText = function (timeout) {
    if (timeout === undefined) {
        console.log("Property TimeOut is not set");
    } else {
        this.timeOutText = timeout;
    }
    return this;
};

/***
 * Defines whether the countdown is to be output as text or in individual elements.
 *
 * @param bol
 * @returns {Countdown}
 */
Countdown.prototype.setDivideTime = function (bol) {
    this.divideTime = bol;
    return this;
};

/***
 * Returns the countdown name of the countdown object.
 *
 * @returns {*}
 */
Countdown.prototype.getCountdownName = function () {
    return this.countdownName;
};

/***
 * Returns the element di of the countdown object.
 *
 * @returns {*}
 */
Countdown.prototype.getElementID = function () {
    return this.elementID;
};

/***
 * Returns the time out text of the countdown object.
 *
 * @returns {*}
 */
Countdown.prototype.getTimeOutText = function () {
    return this.timeOutText;
};

/* Doesn't work for Microsoft Internet- and Samsung Internet explorer
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
*/

